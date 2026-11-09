<?php
session_start();
if (!isset($_SESSION["auth"])) {
    header('Location: login.php');
    exit();
}

include './app/database/Connection.php';
$db = new Connection();

$error_message = '';
$success_message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newsHeading = htmlspecialchars($_POST['newsHeading']);
    $subheading = htmlspecialchars($_POST['subheading']);
    $newsContent = htmlspecialchars($_POST['newsContent']);
    $status = htmlspecialchars($_POST['status']);

    $uploadsDirectory = "./uploads/";
    $targetFile = $uploadsDirectory . basename($_FILES["newsImage"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["newsImage"]["tmp_name"]);
        if ($check === false) {
            $error_message = "File is not an image.";
            $uploadOk = 0;
        }

        if ($_FILES["newsImage"]["size"] > 5000000) {
            $error_message = "Sorry, your file is too large (max 5MB).";
            $uploadOk = 0;
        }

        if (!in_array($imageFileType, ["jpg", "jpeg", "png", "gif"])) {
            $error_message = "Sorry, only JPG, JPEG, PNG, and GIF files are allowed.";
            $uploadOk = 0;
        }

        if ($uploadOk == 1) {
            if (move_uploaded_file($_FILES["newsImage"]["tmp_name"], $targetFile)) {
                $newsImage = basename($_FILES["newsImage"]["name"]);
                $newsImagePath = 'uploads/' . $newsImage; // Relative path for front-end

                if (!empty($status)) {
                    $sql = "INSERT INTO `news` (newsHeading, subheading, newsContent, status, newsImage) VALUES (?, ?, ?, ?, ?)";
                    $params = [$newsHeading, $subheading, $newsContent, $status, $newsImagePath];
                    $result = $db->run($sql, $params);

                    if ($result["status"] == "success") {
                        $success_message = "Record has been added successfully!";
                        echo "<script>
                            alert('News added successfully!');
                            setTimeout(function() {
                                window.location.href = './news.php';
                            }, 1000);
                        </script>";
                        exit();
                    } else {
                        $error_message = "Failed to add record. Please try again.";
                    }
                }
            } else {
                $error_message = "Sorry, there was an error uploading your file.";
            }
        }
    }
}

$sql = "SELECT *, DATE_FORMAT(createdDate, '%d-%b-%Y') as `cdate` FROM `blogs`";
$result = $db->run($sql);
$blogs = $result["status"] == "success" ? $result["data"] : [];
?>

<!-- TEMPLATE STARTS -->

<?php include './layout/_header.php'; ?>
<?php include './layout/_navbar.php'; ?>

<div class="page-header">
    <h2 class="header-title">Add Blogs</h2>
    <div class="header-sub-title"></div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <?php if (!empty($error_message)) : ?>
                        <div class="alert alert-danger mt-3" role="alert"><?= $error_message ?></div>
                    <?php endif; ?>
                    <?php if (!empty($success_message)) : ?>
                        <div class="alert alert-success mt-3" role="alert"><?= $success_message ?></div>
                    <?php endif; ?>

                    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="newsHeading" class="form-label">News Heading</label>
                            <input type="text" class="form-control" name="newsHeading" id="newsHeading" placeholder="News Heading" required>
                        </div>
                        <div class="form-group shadow-textarea">
                            <label for="subheading">Sub Heading</label>
                            <textarea class="form-control z-depth-1" id="subheading" name="subheading" rows="3" placeholder="Write Something here" required></textarea>
                        </div>
                        <div class="form-group shadow-textarea">
                            <label for="newsContent" class="form-label">News Content</label>
                            <textarea class="form-control z-depth-1" name="newsContent" id="newsContent" rows="5" placeholder="Write Something here" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="newsImage" class="form-label">News Picture</label>
                            <input class="form-control form-control-sm" id="newsImage" name="newsImage" type="file" accept=".jpeg, .png, .jpg, .gif" required>
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-control" name="status" required>
                                <option value="" selected>Please Select</option>
                                <option value="PUBLISH">PUBLISH</option>
                                <option value="UNPUBLISH">UNPUBLISH</option>
                            </select>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Add</button>
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
