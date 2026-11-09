<?php
session_start();

if (!isset($_SESSION["auth"])) {
    header('Location: login.php');
}

// if (empty($_SESSION['token'])) {
//     $_SESSION['token'] = bin2hex(random_bytes(32));
// }
// $token = $_SESSION['token'];

include './app/database/Connection.php';
$db = new Connection();
// $db->make();

$sql = "SELECT *,DATE_FORMAT(created_at,'%d-%b-%Y') as `cdate` FROM `career` ORDER BY created_at DESC";

$result = $db->run($sql);
if ($result["status"] == "success") {
    $applications = $result["data"];
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
    <h2 class="header-title">All Application</h2>
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

            if (count($applications) <= 0) :
            ?>
                <h5>No data found</h5>
            <?php
            else :
            ?>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Sl.No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Date</th>
                            <th class="text-center">Resume</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($applications as $application) :
                        ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $application["name"] ?></td>
                                <td><?= $application["email"] ?></td>
                                <td><?= $application["phone"] ?></td>
                                <td><?= $application["cdate"] ?></td>
                                <td class="text-center font-2">
                                    <a target="_blank" href="./resumes/<?= $application["resume"] ?>">
                                        <i class="far fa-file-pdf"></i>
                                    </a>
                                </td>
                                <td><a href="deleteapplication.php?id=<?= $application['id'] ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a></td>

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