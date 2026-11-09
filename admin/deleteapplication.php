<?php
session_start();
include './app/database/Connection.php';

if (!isset($_SESSION["auth"])) {
    header('Location: login.php');
    exit();
}

$db = new Connection();

if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM `career` WHERE id = ?";
    $params = [$id];
    $result = $db->run($sql, $params);

    if ($result["status"] === "success" && !empty($result["data"])) {
        $contact = $result["data"][0];
        $confirmation_message = "Are you sure you want to delete?";
    }
}

// Handle form submission for deletion
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['csrf_token'], $_POST['confirm_delete'], $_POST['id']) && $_POST['confirm_delete'] === 'yes') {
    // Validate CSRF token here (not shown in this code snippet)

    $id = $_POST['id'];
    $sql = "DELETE FROM `career` WHERE id = ?";
    $params = [$id];
    $result = $db->run($sql, $params);

    if ($result["status"] === "success") {
        $success_message = "Record has been deleted successfully!";
        header("Location: allapplication.php");
        exit();
    } else {
        $error_message = "Failed to delete record. Please try again.";
    }
}

include './layout/_header.php';
include './layout/_navbar.php';
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <?php if (isset($confirmation_message)) : ?>
                        <div class="alert alert-warning" role="alert"><?= $confirmation_message ?></div>
                        <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
                            <input type="hidden" name="csrf_token" value="your_csrf_token_value_here">
                            <input type="hidden" name="id" value="<?= $id ?>">
                            <input type="hidden" name="confirm_delete" value="yes">
                            <button type="submit" class="btn btn-danger">Yes, Delete</button> &nbsp;
                            <a href="./allapplication.php" class="btn btn-primary">Cancel</a>
                        </form>
                    <?php elseif (isset($success_message)) : ?>
                        <div class="alert alert-success mt-3" role="alert"><?= $success_message ?></div>
                    <?php elseif (isset($error_message)) : ?>
                        <div class="alert alert-danger mt-3" role="alert"><?= $error_message ?></div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include './layout/_footer.php';
include './layout/_scripts.php';
?>
</body>

</html>