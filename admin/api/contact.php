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
    if (!Csrf::validate())
        return;

    $db = new Connection();

    $data = [
        "name" => htmlspecialchars($_POST["name"]),
        "email" => htmlspecialchars($_POST["email"]),
        "phone" => htmlspecialchars($_POST["phone"]),
        "message" => htmlspecialchars($_POST["message"]),
    ];

    $sql = "INSERT INTO `contact`( `name`, `email`, `phone`, `message` ) VALUES (:name,:email,:phone,:message )";

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
// function sendmailToAdmin()
// {
//     $email = htmlspecialchars("");
//     $mail = new Mail;
//     $result = $mail->send($email, "Hi how are you", "<p>Hey whats up</p>");
//     // if ($result["success"]) {
//     //     return "Mail sent successfully";
//     // } else {
//     //     return $result["msg"];
//     // }
//     return $result;
// }
