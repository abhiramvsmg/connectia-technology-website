<?php
session_start();

if (!isset($_SESSION["auth"])) {
    header('Location: login.php');
    exit();
}

include './app/database/Connection.php';
$db = new Connection();

$error_message = '';
$update_result = null;

$newsHeading = $subHeading = $newsContent = $status = '';
$newsId = isset($_GET['newsId']) ? intval($_GET['newsId']) : 0;

if ($newsId) {
    $sql = "SELECT * FROM `news` WHERE newsId = ?";
    $params = [$newsId];
    $result = $db->run($sql, $params);

    if ($result["status"] == "success" && !empty($result["data"])) {
        $news = $result["data"][0];
        $newsHeading = htmlspecialchars($news['newsHeading']);
        $subHeading = htmlspecialchars($news['subHeading']); // ✅ Corrected case
        $newsContent = htmlspecialchars($news['newsContent']);
        $status = htmlspecialchars($news['status']);
    } else {
        $error_message = "News details not found.";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newsHeading = htmlspecialchars($_POST['newsHeading']);
    $subHeading = htmlspecialchars($_POST['subHeading']); // ✅ Corrected name
    $newsContent = htmlspecialchars($_POST['newsContent']);
    $status = htmlspecialchars($_POST['status']);

    if (!empty($_FILES["newsImage"]["name"])) {
        $targetDirectory = "./uploads/";
        $fileName = time() . '_' . basename($_FILES["newsImage"]["name"]);
        $targetFile = $targetDirectory . $fileName;
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        $uploadOk = 1;

        $check = getimagesize($_FILES["newsImage"]["tmp_name"]);
        if ($check === false) {
            $error_message = "File is not an image.";
            $uploadOk = 0;
        }

        if ($_FILES["newsImage"]["size"] > 5000000) {
            $error_message = "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        if ($uploadOk && move_uploaded_file($_FILES["newsImage"]["tmp_name"], $targetFile)) {
            $newsImagePath = $targetFile;
            $sql = "UPDATE `news` SET newsHeading = ?, subHeading = ?, newsContent = ?, status = ?, newsImage = ?, updated_at = NOW() WHERE newsId = ?";
            $params = [$newsHeading, $subHeading, $newsContent, $status, $newsImagePath, $newsId];
        } else {
            $error_message .= " Failed to upload image.";
        }
    } else {
        $sql = "UPDATE `news` SET newsHeading = ?, subHeading = ?, newsContent = ?, status = ?, updated_at = NOW() WHERE newsId = ?";
        $params = [$newsHeading, $subHeading, $newsContent, $status, $newsId];
    }

    if (empty($error_message)) {
        $update_result = $db->run($sql, $params);

        if ($update_result["status"] == "success") {
            header('Location: news.php?updated=1');
            exit();
        } else {
            $error_message = "Failed to update news. Please try again.";
        }
    }
}
?>

<?php include './layout/_header.php'; ?>
<?php include './layout/_navbar.php'; ?>

<div class="page-header">
    <h2 class="header-title">Update News</h2>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <?php if (!empty($error_message)): ?>
                        <div class="alert alert-danger" role="alert"><?= $error_message ?></div>
                    <?php endif; ?>

                    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) . '?newsId=' . $newsId ?>" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="newsHeading" class="form-label">News Heading</label>
                            <input type="text" class="form-control" name="newsHeading" id="newsHeading" value="<?= $newsHeading ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="subHeading" class="form-label">Sub Heading</label> <!-- ✅ Corrected name -->
                            <textarea class="form-control" name="subHeading" rows="3" required><?= $subHeading ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="newsContent" class="form-label">News Content</label>
                            <textarea class="form-control" name="newsContent" rows="5" required><?= $newsContent ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="newsImage" class="form-label">News Picture</label>
                            <input type="file" class="form-control" name="newsImage" id="newsImage">
                        </div>

                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-control" name="status" required>
                                <option value="" <?= $status === '' ? 'selected' : '' ?>>Please Select</option>
                                <option value="PUBLISH" <?= $status === 'PUBLISH' ? 'selected' : '' ?>>PUBLISH</option>
                                <option value="UNPUBLISH" <?= $status === 'UNPUBLISH' ? 'selected' : '' ?>>UNPUBLISH</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary" name="submit">Update</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<?php include './layout/_footer.php'; ?>
<?php include './layout/_scripts.php'; ?>
</body>
</html>
