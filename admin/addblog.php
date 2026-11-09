<?php
session_start();
if (!isset($_SESSION["auth"])) {
    header('Location: login.php');
    exit();
}

include './app/database/Connection.php';
$db = new Connection();

$error_message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $blogHeading = htmlspecialchars($_POST['blogHeading']);
    $subheading = htmlspecialchars($_POST['subheading']);
    $blogContent = htmlspecialchars($_POST['blogContent']);
    $conclusion = htmlspecialchars($_POST['conclusion']);
    $status = htmlspecialchars($_POST['status']);

    $uploadsDirectory = "./uploads/";

    $targetFile = $uploadsDirectory . basename($_FILES["blogImage"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    if (isset($_POST["submit"])) {
        if (move_uploaded_file($_FILES["blogImage"]["tmp_name"], $targetFile)) {
            if ($_FILES["blogImage"]["size"] > 5000000) {
                $error_message = "Sorry, your file is too large.";
                $uploadOk = 0;
            } elseif (!in_array($imageFileType, ["jpg", "jpeg", "png", "gif"])) {
                $error_message = "Sorry, only JPG, JPEG, PNG, and GIF files are allowed.";
                $uploadOk = 0;
            }

            if ($uploadOk == 1) {
                $blogImage = basename($_FILES["blogImage"]["name"]);
                $path = "./admin";
                $uploadsDirectory = str_replace(".", "", $uploadsDirectory);
                $blogImagePath = $path . $uploadsDirectory . $blogImage;
                if (!empty($status)) {
                    $sql = "INSERT INTO `blogs` (blogHeading, subheading, blogContent, conclusion, status, blogImage) VALUES (?, ?, ?, ?, ?, ?)";
                    $params = [$blogHeading, $subheading, $blogContent, $conclusion, $status, $blogImagePath];
                    $result = $db->run($sql, $params);

                    if ($result["status"] == "success") {
                        ob_start();
                        echo '<div class="alert alert-success" role="alert">Record has been added successfully! Redirecting...</div>';
                        header('Refresh: 2; URL=./blog.php');
                        ob_end_flush();
                        exit();
                    } else {
                        $error_message = "Failed to add record details. Please try again.";
                    }
                }
            }
        } else {
            $error_message = "Sorry, there was an error uploading your file.";
        }
    }
}

$sql = "SELECT *, DATE_FORMAT(createdDate, '%d-%b-%Y') as `cdate` FROM `blogs`";

$result = $db->run($sql);
if ($result["status"] == "success") {
    $blogs = $result["data"];
}
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
                    <?php
                    if (!empty($error_message)) {
                        echo '<div class="alert alert-danger mt-3" role="alert">' . $error_message . '</div>';
                    }
                    ?>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="blogHeading" class="form-label">Blog Heading</label>
                            <input type="text" class="form-control" name="blogHeading" id="blogHeading" value="" placeholder="Blog Heading" required>
                        </div>
                        <div class="form-group shadow-textarea">
                            <label for="subheading">Sub Heading</label>
                            <textarea class="form-control z-depth-1" id="subheading" name="subheading" rows="5" placeholder="Write Something here" required></textarea>
                        </div>
                        <div class="form-group shadow-textarea">
                            <label for="blogContent" class="form-label">Blog Content</label>
                            <textarea class="form-control z-depth-1" class="form-control" name="blogContent" id="blogContent" rows="5" placeholder="Write Something here" required></textarea>
                        </div>
                        <div class="form-group shadow-textarea">
                            <label for="conclusion">Conclusion</label>
                            <textarea class="form-control z-depth-1" id="conclusion" name="conclusion" rows="5" placeholder="Write Something here"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="blogImage" class="form-label">Blog Picture</label>
                            <input class="form-control form-control-sm" id="blogImage" name="blogImage" type="file" accept=".jpeg, .png, .jpg, image/jpeg, image/png" required>
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label><br>
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

<!-- Footer START -->
<?php include './layout/_footer.php'; ?>

<?php include './layout/_scripts.php'; ?>
<!-- scripts -->
</body>

</html>