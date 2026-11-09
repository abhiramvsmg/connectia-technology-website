<?php

class Action
{
    protected $action;
    protected $data;

    public function __construct(array $userdata)
    {
        $this->action = htmlspecialchars($userdata["action"]);
        $this->data = [];
        foreach ($userdata as $key => $value) {
            if ($key === "action")
                continue;

            $this->data[$key] = htmlspecialchars($value);
        }
    }

    public function run(string $action, callable $function)
    {
        if ($action !== $this->action) {
            return;
        }
        call_user_func($function, $this->data);
        // $class->$function;
    }
    
    public function logout()
    {
        {
        // Assuming $data contains user information needed for logout
        // Example: destroying session or performing logout actions
        session_start(); // Start the session if not already started
        $_SESSION = []; // Clear all session variables
        session_destroy(); // Destroy the session

        // Redirect the user to the login page or any other appropriate page after logout
        header("Location: login.php");
        exit; // Terminate script execution after redirection
    }
    }
}
