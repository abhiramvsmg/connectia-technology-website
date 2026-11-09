<?php
session_start();

if (!isset($_SESSION["auth"])) {
    header('Location: login.php');
    exit();
}



include './app/database/Connection.php';
$db = new Connection();

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);


    $sql = "SELECT * FROM `job_updates` WHERE id = ?";
    $params = [$id];
    $result = $db->run($sql, $params);

    if ($result["status"] == "success" && !empty($result["data"])) {
        $job_details = $result["data"][0];

        $job_role = htmlspecialchars($job_details['job_role']);
        $experience = intval($job_details['experience']);
        $location = htmlspecialchars($job_details['location']);
        $job_description = htmlspecialchars($job_details['job_description']);
        $status = htmlspecialchars($job_details['status']);
    } else {
        $error_message = "Job details not found.";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $job_role = htmlspecialchars($_POST['job_role']);
    $experience = intval($_POST['experience']);
    $location = htmlspecialchars($_POST['location']);
    $job_description = htmlspecialchars($_POST['job_description']);
    $status = htmlspecialchars($_POST['status']);


    $sql = "UPDATE `job_updates` SET job_role = ?, experience = ?, location = ?, job_description = ?, status = ? WHERE id = ?";
    $params = [$job_role, $experience, $location, $job_description, $status, $id];
    $update_result = $db->run($sql, $params);

    if ($update_result["status"] == "success") {
        ob_start();
        echo '<div class="alert alert-success" role="alert">Record has been updated successfully! Redirecting...</div>';
        header('Refresh: 2; URL=./career.php');
        ob_end_flush();
        exit();
    } else {
        $error_message = "Failed to update record details. Please try again.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Jobs</title>
</head>

<body>
    <?php include './layout/_header.php'; ?>
    <?php include './layout/_navbar.php'; ?>

    <div class="page-header">
        <h2 class="header-title">Update Jobs</h2>
        <div class="header-sub-title">
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) . '?id=' . $id; ?>" method="POST">
                            <div class="mb-3">
                                <label for="job_role" class="form-label">Job role</label>
                                <input type="text" class="form-control" name="job_role" id="job_role" value="<?php echo isset($job_role) ? $job_role : ''; ?>" placeholder="Job role" required>
                            </div>
                            <div class="mb-3">
                                <label for="experience" class="form-label">No of Experience</label>
                                <input type="number" class="form-control" name="experience" id="experience" value="<?php echo isset($experience) ? $experience : ''; ?>" placeholder="Experience" required>
                            </div>
                            <div class="mb-3">
                                <label for="location" class="form-label">Job Location</label>
                                <select class="form-select" name="location" id="location" required>
                                    <option value="" selected disabled>Select Job Location</option>
                                    <option value="Mangalore" <?php if (isset($location) && $location == "Mangalore") echo ' selected'; ?>>Mangalore</option>
                                    <option value="Bangalore" <?php if (isset($location) && $location == "Bangalore") echo ' selected'; ?>>Bangalore</option>
                                    <option value="Mumbai" <?php if (isset($location) && $location == "Mumbai") echo ' selected'; ?>>Mumbai</option>
                                </select>
                            </div>

                            <div class="form-group shadow-textarea">
                                <label for="job_description">Job Description</label>
                                <textarea class="form-control z-depth-1" id="job_description" name="job_description" rows="5" placeholder="Job Description" required><?php echo isset($job_description) ? $job_description : ''; ?></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label><br>
                                <select class="form-control" name="status" required>
                                    <option value="" <?php echo isset($status) && $status === '' ? 'selected' : ''; ?>>Please Select</option>
                                    <option value="PUBLISH" <?php echo isset($status) && $status === 'PUBLISH' ? 'selected' : ''; ?>>PUBLISH</option>
                                    <option value="UNPUBLISH" <?php echo isset($status) && $status === 'UNPUBLISH' ? 'selected' : ''; ?>>UNPUBLISH</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                        <?php
                        if (isset($error_message)) {
                            echo '<div class="alert alert-danger mt-3" role="alert">' . $error_message . '</div>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer START -->
    <?php include './layout/_footer.php'; ?>
    <?php include './layout/_scripts.php'; ?>
    <!-- Add your scripts here -->
</body>

</html>