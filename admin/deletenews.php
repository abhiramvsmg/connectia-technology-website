<?php
session_start();
include './app/database/Connection.php';

if (!isset($_SESSION["auth"])) {
    header('Location: login.php');
    exit();
}

$db = new Connection();

if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET['newsId'])) {
    $newsId = $_GET['newsId'];
    $sql = "SELECT * FROM `news` WHERE newsId = ?";
    $params = [$newsId];
    $result = $db->run($sql, $params);

    if ($result["status"] === "success" && !empty($result["data"])) {
        $news = $result["data"][0];
        $confirmation_message = "Are you sure you want to delete?";
    }
}

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['csrf_token'], $_POST['confirm_delete'], $_POST['newsId']) && $_POST['confirm_delete'] === 'yes') {
    $newsId = $_POST['newsId'];
    $sql = "DELETE FROM `news` WHERE newsId = ?";
    $params = [$newsId];
    $result = $db->run($sql, $params);

    if ($result["status"] === "success") {
        $success_message = "News deleted successfully!";
        header("Location: news.php");
        exit();
    } else {
        $error_message = "Failed to delete job. Please try again.";
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
                            <input type="hidden" name="csrf_token" value="csrf_token_here">
                            <input type="hidden" name="newsId" value="<?= $newsId ?>">
                            <input type="hidden" name="confirm_delete" value="yes">
                            <button type="submit" class="btn btn-danger">Yes, Delete</button> &nbsp;
                            <a href="./news.php" class="btn btn-primary">Cancel</a>
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