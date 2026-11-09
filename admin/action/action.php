<?php

// Include the correct Action.php file using include
include '../app/action/action.php';

// Include the correct auth.php file using include
include '../app/controllers/auth.php';

$action = new Action($_POST); // Instantiate the Action class without a namespace

$action->run('login', function($data) {
    (new Auth())->login($data);
});

$action->run('logout', function($data) {
    (new Auth())->logout($data);
});
