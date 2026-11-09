<?php
class Csrf
{
    private static function ensureSessionStarted()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    public static function get()
    {
        self::ensureSessionStarted();

        if (empty($_SESSION['token'])) {
            $_SESSION['token'] = bin2hex(random_bytes(32));
        }
        return $_SESSION['token'];
    }

    public static function validate()
    {
        self::ensureSessionStarted();

        if (empty($_POST['token']) || empty($_SESSION['token'])) {
            return false;
        }

        return hash_equals($_SESSION['token'], $_POST['token']);
    }
}