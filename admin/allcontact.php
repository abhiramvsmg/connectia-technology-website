<?php
session_start();
if (!isset($_SESSION["auth"])) {
    header('Location: login.php');
}

include './app/database/Connection.php';
$db = new Connection();
// $db->make();

$sql = "SELECT *, DATE_FORMAT(created_at,'%d-%b-%Y') as `cdate` FROM `contact` ORDER BY created_at DESC";

$result = $db->run($sql);
if ($result["status"] == "success") {
    $contacts = $result["data"];
}
?>

<?php include './layout/_header.php'; ?>
<?php include './layout/_navbar.php'; ?>

<div class="page-header">
    <h2 class="header-title">All contact</h2>
    <div class="header-sub-title"></div>
</div>

<div class="card">
    <div class="card-body">
        <div style="overflow-x:auto;">
            <?php if (count($contacts) <= 0) : ?>
                <h5>No data found</h5>
            <?php else : ?>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Sl.No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Message</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($contacts as $contact) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $contact["name"] ?></td>
                                <td><?= $contact["email"] ?></td>
                                <td><?= $contact["phone"] ?></td>
                                <td><?= $contact["message"] ?></td>
                                <td>
                                    <a href="deletecontact.php?id=<?= $contact['id'] ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php include './layout/_footer.php'; ?>
<?php include './layout/_scripts.php'; ?>

<!-- scripts -->
</body>

</html>