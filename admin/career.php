<?php
session_start();
if (!isset($_SESSION["auth"])) {
    header('Location: login.php');
}

include './app/database/Connection.php';
$db = new Connection();

$sql = "SELECT *, DATE_FORMAT(createdDate,'%d-%b-%Y') as `cdate` FROM `job_updates` ORDER BY createdDate DESC";

$result = $db->run($sql);
if ($result["status"] == "success") {
    $jobupdates = $result["data"];
}
?>

<!--TEMPLATE STARTS -->

<?php include './layout/_header.php'; ?>
<!-- //styles -->
<?php include './layout/_navbar.php'; ?>

<div class="page-header">
    <h2 class="header-title">Job Updates</h2>
    <div class="header-sub-title">
    </div>
</div>

<div class="container">
    <a href="./addjob.php" class="btn btn-primary mb-3">Add Jobs</a>
    <div class="table-responsive">
        <?php if (empty($jobupdates)) : ?>
            <h5>No data found</h5>
        <?php else : ?>
            <table class="table table-hover" style="width:100%">
                <thead>
                    <tr>
                        <th>Sl.No</th>
                        <th>Job Role</th>
                        <th>Location</th>
                        <th>Experience</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($jobupdates as $jobupdate) : ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $jobupdate["job_role"] ?></td>
                            <td><?= $jobupdate["location"] ?></td>
                            <td><?= $jobupdate["experience"] ?> year(s)</td>
                            <td>
                                <?php
                                $status = $jobupdate["status"];
                                if ($status == "PUBLISH") {
                                    echo '<span class="badge badge-success">PUBLISH</span>';
                                } else {
                                    echo '<span class="badge badge-danger">UNPUBLISH</span>';
                                }
                                ?>
                            </td>

                            <td>
                                <a href="edit.php?id=<?= $jobupdate['id'] ?>" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                                <a href="delete.php?id=<?= $jobupdate['id'] ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>
</div>

<!-- Footer START -->
<?php include './layout/_footer.php'; ?>
<?php include './layout/_scripts.php'; ?>
<!-- scripts -->
</body>

</html>