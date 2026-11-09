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

if (isset($_GET['blogId'])) {
    $blogId = intval($_GET['blogId']);

    $sql = "SELECT * FROM `blogs` WHERE blogId = ?";
    $params = [$blogId];
    $result = $db->run($sql, $params);

    if ($result["status"] == "success" && !empty($result["data"])) {
        $blogs = $result["data"][0];

        $blogHeading = htmlspecialchars($blogs['blogHeading']);
        $subheading = htmlspecialchars($blogs['subheading']);
        $blogContent = htmlspecialchars($blogs['blogContent']);
        $conclusion = htmlspecialchars($blogs['conclusion']);
        $status = htmlspecialchars($blogs['status']);
    } else {
        $error_message = "Blog details not found.";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $blogHeading = htmlspecialchars($_POST['blogHeading']);
    $subheading = htmlspecialchars($_POST['subheading']);
    $blogContent = htmlspecialchars($_POST['blogContent']);
    $conclusion = htmlspecialchars($_POST['conclusion']);
    $status = htmlspecialchars($_POST['status']);


    if (!empty($_FILES["blogImage"]["name"])) {
        $targetDirectory = "./uploads/";
        $targetFile = $targetDirectory . basename($_FILES["blogImage"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        $check = getimagesize($_FILES["blogImage"]["tmp_name"]);
        if ($check !== false) {

            if ($_FILES["blogImage"]["size"] > 5000000) {
                $error_message = "Sorry, your file is too large.";
                $uploadOk = 0;
            }
        } else {
            $error_message = "File is not an image.";
            $uploadOk = 0;
        }


        if ($uploadOk == 0) {
            $error_message .= " Your file was not uploaded.";
        } else {

            if (move_uploaded_file($_FILES["blogImage"]["tmp_name"], $targetFile)) {
                $blogImage = basename($_FILES["blogImage"]["name"]);
                $blogImagePath = "./uploads/" . $blogImage;


                $sql = "UPDATE `blogs` SET blogHeading = ?, subheading = ?, blogContent = ?, conclusion = ?, status = ?, blogImage = ? WHERE blogId = ?";
                $params = [$blogHeading, $subheading, $blogContent, $conclusion, $status, $blogImagePath, $blogId];
                $update_result = $db->run($sql, $params);

                if ($update_result["status"] == "success") {
                    ob_start();
                    echo '<div class="alert alert-success" role="alert">Record has been updated successfully! Redirecting...</div>';
                    header('Refresh: 2; URL=./blog.php');
                    ob_end_flush();
                    exit();
                } else {
                    $error_message = "Failed to update record details. Please try again.";
                }
            } else {
                $error_message = "Sorry, there was an error uploading your file.";
            }
        }
    } else {
        $sql = "UPDATE `blogs` SET blogHeading = ?, subheading = ?, blogContent = ?, conclusion = ?, status = ? WHERE blogId = ?";
        $params = [$blogHeading, $subheading, $blogContent, $conclusion, $status, $blogId];
        $update_result = $db->run($sql, $params);

        if ($update_result["status"] == "success") {
            ob_start();
            echo '<div class="alert alert-success" role="alert">Blog details updated successfully! Redirecting...</div>';
            header('Refresh: 2; URL=./blog.php');
            ob_end_flush();
            exit();
        } else {
            $error_message = "Failed to update blog details. Please try again.";
        }
    }
}
?>

<?php include './layout/_header.php'; ?>
<?php include './layout/_navbar.php'; ?>

<div class="page-header">
    <h2 class="header-title">Update Jobs</h2>
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
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) . '?blogId=' . $blogId; ?>" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="blogHeading" class="form-label">Blog Heading</label>
                            <input type="text" class="form-control" name="blogHeading" id="blogHeading" value="<?php echo $blogHeading; ?>" placeholder="Blog Heading" required>
                        </div>
                        <div class="form-group shadow-textarea">
                            <label for="subheading">Sub Heading</label>
                            <textarea class="form-control z-depth-1" id="subheading" name="subheading" rows="5" placeholder="Write Something here" required><?php echo $subheading; ?></textarea>
                        </div>
                        <div class="form-group shadow-textarea">
                            <label for="blogContent" class="form-label">Blog Content</label>
                            <textarea class="form-control z-depth-1" name="blogContent" id="blogContent" rows="5" placeholder="Write Something here" required><?php echo $blogContent; ?></textarea>
                        </div>
                        <div class="form-group shadow-textarea">
                            <label for="conclusion">Conclusion</label>
                            <textarea class="form-control z-depth-1" id="conclusion" name="conclusion" rows="5" placeholder="Write Something here"><?php echo $conclusion; ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="blogImage" class="form-label">Blog Picture</label>
                            <input class="form-control form-control-sm" id="blogImage" name="blogImage" type="file">
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label><br>
                            <select class="form-control" name="status" required>
                                <option value="" <?php echo $status === '' ? 'selected' : ''; ?>>Please Select</option>
                                <option value="PUBLISH" <?php echo $status === 'PUBLISH' ? 'selected' : ''; ?>>PUBLISH</option>
                                <option value="UNPUBLISH" <?php echo $status === 'UNPUBLISH' ? 'selected' : ''; ?>>UNPUBLISH</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit">Update</button>
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