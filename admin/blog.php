<?php
session_start();
if (!isset($_SESSION["auth"])) {
    header('Location: login.php');
}

include './app/database/Connection.php';
$db = new Connection();

$sql = "SELECT *, DATE_FORMAT(createdDate,'%d-%b-%Y') as `cdate` FROM `blogs` ORDER BY createdDate DESC";

$result = $db->run($sql);
if ($result["status"] == "success") {
    $blogs = $result["data"];
}
?>
<!--TEMPLATE STARTS -->

<?php include './layout/_header.php'; ?>
<!-- //styles -->
<?php include './layout/_navbar.php'; ?>

<div class="page-header">
    <h2 class="header-title">Blogs</h2>
    <div class="header-sub-title">
    </div>
</div>

<div class="container">
    <a href="./addblog.php" class="btn btn-primary mb-3">Add Blogs</a>
    <div class="table-responsive">
        <?php if (empty($blogs)) : ?>
            <h5>No data found</h5>
        <?php else : ?>
            <table class="table table-hover" style="width:100%">
                <thead>
                    <tr>
                        <th>Sl.No</th>
                        <th>Heading</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($blogs as $blog) : ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $blog["blogHeading"] ?></td>
                            <td><?php
                                $status = $blog["status"];
                                if ($status == "PUBLISH") {
                                    echo '<span class="badge badge-success">PUBLISH</span>';
                                } else {
                                    echo '<span class="badge badge-danger">UNPUBLISH</span>';
                                }
                                ?></td>
                            <td>
                                <a href="editblogs.php?blogId=<?= $blog['blogId'] ?>" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                                <a href="deleteblogs.php?blogId=<?= $blog['blogId'] ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
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