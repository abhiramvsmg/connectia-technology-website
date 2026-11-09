<?php
include __DIR__ . '/../database/Connection.php';
include_once __DIR__ . '/../config/config.php';
include_once __DIR__ . '/../helpers/urlhelpers.php';

class Auth
{
    public function dd($arr)
    {
        echo '<pre>';
        print_r($arr);
        echo '</pre>';
        die();
    }

    public function login($data)
    {
        session_start();

        // Check if username or password is empty
        if (empty($data['username']) || empty($data['password'])) {
            $_SESSION["loginerror"] = "Please enter both email and password";
            return redirect("/admin/login.php");
        }

        $data = [
            "email" => $data["username"],
            "password" => $data["password"],
        ];

        $sql = "SELECT `id`,`name`,`username`,`email`,`role` FROM `user` WHERE `email`=:email and `password`=:password";

        //get connection and run sql
        $db = new Connection();
        $result = $db->run($sql, $data, false);

        if ($result["status"] !== "success") {
            $_SESSION["loginerror"] = "Something went wrong";
            return redirect("/admin/login.php");
        }
        if (count($result["data"]) <= 0) {
            $_SESSION["loginerror"] = "Email or Password is wrong";
            return redirect("/admin/login.php");
        }

        $_SESSION["auth"] = (object) $result["data"];

        return redirect("/admin");
    }

    public function logout($data)
    {
        // Implement logout logic here
        session_start();
        session_unset();
        session_destroy();
        return redirect("/admin/login.php");
    }
}
