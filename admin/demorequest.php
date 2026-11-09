<?php
session_start();
if (!isset($_SESSION["auth"])) {
    header('Location: login.php');
}

include './app/database/Connection.php';
$db = new Connection();
// $db->make();

$sql = "SELECT *,DATE_FORMAT(created_at,'%d-%b-%Y') as `cdate` FROM `demo_request` ORDER BY created_at DESC";

$result = $db->run($sql);
if ($result["status"] == "success") {
    $requests = $result["data"];
}
// echo '<pre>';
// print_r($contacts);
// echo '</pre>';

// die();
?>
<!--TEMPLATE STARTS -->

<?php include './layout/_header.php'; ?>
<!-- //styles -->
<?php include './layout/_navbar.php'; ?>

<div class="page-header">
    <h2 class="header-title">All contact</h2>
    <div class="header-sub-title">
        <!-- <nav class="breadcrumb breadcrumb-dash">
            <a href="#" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Home</a>
            <a class="breadcrumb-item" href="#">Pages</a>
            <span class="breadcrumb-item active">Invoice</span>
        </nav> -->
    </div>
</div>

<div class="card">
    <div class="card-body">
        <div style="overflow-x:auto;">
            <?php

            if (count($requests) <= 0) :
            ?>
                <h5>No data found</h5>
            <?php
            else :
            ?>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Sl.No</th>
                            <th>Email</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($requests as $req) :
                        ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $req["email"] ?></td>
                                <td><?= $req["cdate"] ?></td>
                                <td><a href="deleterequest.php?id=<?= $req['id'] ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a></td>
                            </tr>
                        <?php
                        endforeach
                        ?>
                    </tbody>
                </table>
            <?php
            endif
            ?>
        </div>
    </div>
</div>


<!-- Content Wrapper END -->

<!-- Footer START -->
<?php include './layout/_footer.php'; ?>

<?php include './layout/_scripts.php'; ?>

<!-- scripts -->
</body>


</html>