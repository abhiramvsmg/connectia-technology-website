<?php

require_once '../app/database/Connection.php';
require_once '../app/mail/Mail.php'; // Assuming Mail class exists
require_once '../app/security/csrf.php';
require_once '../app/misc/Pdf.php';
require_once '../app/helpers/urlhelpers.php'; // Use require_once for singletons

$action = $_GET['q'] ?? null; // Handle potential missing 'q' parameter

switch ($action) {
    case 'save':
        echo save(); // Echo the response to display JSON or redirect
        break;
    default:
        echo json_encode(["success" => false, "msg" => "Invalid action"]); // Return JSON for invalid actions
}

function save()
{
    if (!Csrf::validate()) {
        return json_encode(["success" => false, "msg" => "CSRF validation failed"]);
    }

    try {
        $pdf = savePdf();
        if (!$pdf["success"]) {
            return json_encode(["success" => false, "msg" => "File could not be saved"]);
        }

        $data = [
            "name" => htmlspecialchars($_POST["name"]),
            "email" => htmlspecialchars($_POST["email"]),
            "phone" => htmlspecialchars($_POST["phone"]),
            "resume" => $pdf["filename"],
        ];

        $sql = "INSERT INTO `career` (`name`, `email`, `phone`, `resume`) VALUES (:name, :email, :phone, :resume)";
        $db = new Connection();
        $result = $db->run($sql, $data);

        if ($result["status"] === "success") {
            session_start();
            $_SESSION["thankyou"] = "success";
        } else {
            return json_encode(["success" => false, "msg" => "Database insertion failed"]);
        }

        // Uncomment if sending email is required
        // $email = htmlspecialchars($_POST["email"]);
        // $mail = new Mail;
        // $result = $mail->send($email, "Hi how are you", "<p>Hey whats up</p>");
        // if (!$result["success"]) {
        //   return json_encode(["success" => false, "msg" => "Email sending failed: " . $result["msg"]]);
        // }

        return redirect("/index.php");
    } catch (Exception $e) {
        // Handle unexpected errors here
        return json_encode(["success" => false, "msg" => "An unexpected error occurred: " . $e->getMessage()]);
    }
}

function savePdf()
{
    if (!isset($_FILES['file-input-x']['name']) || empty($_FILES['file-input-x']['name'])) {
        return ["success" => false, "msg" => "No file uploaded"];
    }

    $file_tmp = $_FILES['file-input-x']['tmp_name'];
    $extension = pathinfo($_FILES['file-input-x']['name'], PATHINFO_EXTENSION);
    $file_name = getFileName('resume') . '.' . $extension;
    $target = __DIR__ . "/../resumes/" . $file_name;

    if (move_uploaded_file($file_tmp, $target)) {
        return ["success" => true, "filename" => $file_name];
    } else {
        return ["success" => false, "msg" => "Failed to move uploaded file"];
    }
}

function getFileName(string $prefix)
{
    $randomno = rand(0, 100000);
    $rename =  $prefix . date('Ymd') . $randomno;
    return $rename;
}
