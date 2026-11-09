<?php
session_start();
if (!isset($_SESSION["auth"])) {
    header('Location: login.php');
    exit();
}


include './app/database/Connection.php';
$db = new Connection();



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $job_role = htmlspecialchars($_POST['job_role']);
    $experience = intval($_POST['experience']);
    $location = htmlspecialchars($_POST['location']);
    $status = htmlspecialchars($_POST['status']);
    $job_description = htmlspecialchars($_POST['job_description']);

    if (!empty($status)) {
        $sql = "INSERT INTO `job_updates` (job_role, experience, location, job_description, status) VALUES (?, ?, ?, ?, ?)";
        $params = [$job_role, $experience, $location, $job_description, $status];
        $result = $db->run($sql, $params);

        if ($result["status"] == "success") {
            ob_start();
            echo '<div class="alert alert-success" role="alert">Record has been added successfully! Redirecting...</div>';
            header('Refresh: 2; URL=./career.php');
            ob_end_flush();
            exit();
        } else {
            $error_message = "Failed to update record. Please try again.";
        }
    }
}

$sql = "SELECT *, DATE_FORMAT(createdDate, '%d-%b-%Y') as `cdate` FROM `job_updates`";

$result = $db->run($sql);
if ($result["status"] == "success") {
    $jobupdates = $result["data"];
}
?>

<!-- TEMPLATE STARTS -->

<!-- TEMPLATE STARTS -->

<?php include './layout/_header.php'; ?>
<?php include './layout/_navbar.php'; ?>

<div class="page-header">
    <h2 class="header-title">Add Jobs</h2>
    <div class="header-sub-title">
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <?php
                    if (isset($error_message)) {
                        echo '<div class="alert alert-danger mt-3" role="alert">' . $error_message . '</div>';
                    }
                    ?>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                        <div class="mb-3">
                            <label for="job_role" class="form-label">Job role</label>
                            <input type="text" class="form-control" name="job_role" id="job_role" value="" placeholder="Job role" required>

                        </div>
                        <div class="mb-3">
                            <label for="experience" class="form-label">No of Experience</label>
                            <input type="number" class="form-control" name="experience" id="experience" value="" placeholder="Experience" required>

                        </div>
                        <div class="mb-3">
                            <label for="location" class="form-label">Job Location</label>
                            <select class="form-select" name="location" id="location" required>
                                <option value="" selected>Select Job Location</option>
                                <option value="Mangalore">Mangalore</option>
                                <option value="Bangalore">Bangalore</option>
                                <option value="Mumbai">Mumbai</option>
                            </select>
                        </div>

                        <div class="form-group shadow-textarea">
                            <label for="job_description">Job Description</label>
                            <textarea class="form-control z-depth-1" id="job_description" name="job_description" rows="5" placeholder="Job Description" required></textarea>

                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label><br>
                            <select class="form-control" name="status" required>
                                <option value="" selected>Please Select</option>
                                <option value="PUBLISH">PUBLISH</option>
                                <option value="UNPUBLISH">UNPUBLISH</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Add</button>
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