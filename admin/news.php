<?php
session_start();
if (!isset($_SESSION["auth"])) {
    header('Location: login.php');
    exit();
}

include './app/database/Connection.php';
$db = new Connection();

// Fetch news records
$sql = "SELECT *, DATE_FORMAT(created_at,'%d-%b-%Y') as `cdate` FROM `news` ORDER BY created_at DESC";
$result = $db->run($sql);

$newsItems = [];
if ($result["status"] == "success") {
    $newsItems = $result["data"];
}
?>

<!-- TEMPLATE STARTS -->

<?php include './layout/_header.php'; ?>
<?php include './layout/_navbar.php'; ?>

<div class="page-header">
    <h2 class="header-title">News</h2>
</div>

<div class="container">
    <a href="./addnews.php" class="btn btn-primary mb-3">Add News</a>

    <div class="table-responsive">
        <?php if (empty($newsItems)) : ?>
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
                    <?php foreach ($newsItems as $news) : ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= htmlspecialchars($news["newsHeading"]) ?></td>
                            <td>
                                <?php if ($news["status"] === "PUBLISH") : ?>
                                    <span class="badge badge-success">PUBLISH</span>
                                <?php else : ?>
                                    <span class="badge badge-danger">UNPUBLISH</span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <a href="editnews.php?newsId=<?= $news['newsId'] ?>" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                                <a href="deletenews.php?newsId=<?= $news['newsId'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this news?');"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>
</div>

<?php include './layout/_footer.php'; ?>
<?php include './layout/_scripts.php'; ?>
</body>
</html>
