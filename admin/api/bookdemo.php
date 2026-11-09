<?php
// include '../app/config/config.php';

include '../app/database/Connection.php';
include '../app/mail/Mail.php';
include '../app/security/csrf.php';
include_once '../app/helpers/urlhelpers.php';


$action = $_GET['q'];

switch ($action) {
    case 'save':
        save();
        break;
}
function save()
{
    //validate csrf token
    if (!Csrf::validate())
        return;

    //get pdo connection
    $db = new Connection();

    //create data to insert
    $data = [
        "email" => htmlspecialchars($_POST["email"]),
    ];

    $sql = "INSERT INTO `demo_request`( `email` ) VALUES (:email)";

    $result = $db->run($sql, $data);
    // sendmailToUser();

    if ($result["status"] === "success") {
        session_start();
        $_SESSION["thankyou"] = "success";
    }
    // return header("location:/connectianew/index.php");
    return redirect("/index.php");
}
function sendmailToUser()
{
    $email = htmlspecialchars($_POST["email"]);
    $mail = new Mail;
    $result = $mail->send($email, "Hi how are you", "<p>Hey whats up</p>");
    // if ($result["success"]) {
    //     return "Mail sent successfully";
    // } else {
    //     return $result["msg"];
    // }
    return $result;
}
