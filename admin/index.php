<?php
session_start();
if (!isset($_SESSION["auth"])) {
  header('Location: login.php');
  exit(); 
}


include 'app/database/Connection.php';
$db = new Connection();
$pdo = $db->pdo(); 


$enquiriesCount = 0;
$applicationsCount = 0;
$publishedJobsCount = 0;
$publishedBlogsCount = 0;

$queryEnquiries = "SELECT COUNT(*) AS enquiries_count FROM career";
$queryApplications = "SELECT COUNT(*) AS applications_count FROM contact";
$queryPublishedJobs = "SELECT COUNT(*) AS published_jobs_count FROM job_updates WHERE status = 'publish'";
$queryPublishedBlogs = "SELECT COUNT(*) AS published_blogs_count FROM blogs WHERE status = 'publish'";


$stmtEnquiries = $pdo->prepare($queryEnquiries);
$stmtEnquiries->execute();
$enquiriesData = $stmtEnquiries->fetch(PDO::FETCH_ASSOC);
$enquiriesCount = $enquiriesData['enquiries_count'];

$stmtApplications = $pdo->prepare($queryApplications);
$stmtApplications->execute();
$applicationsData = $stmtApplications->fetch(PDO::FETCH_ASSOC);
$applicationsCount = $applicationsData['applications_count'];

$stmtPublishedJobs = $pdo->prepare($queryPublishedJobs);
$stmtPublishedJobs->execute();
$publishedJobsData = $stmtPublishedJobs->fetch(PDO::FETCH_ASSOC);
$publishedJobsCount = $publishedJobsData['published_jobs_count'];

$stmtPublishedBlogs = $pdo->prepare($queryPublishedBlogs);
$stmtPublishedBlogs->execute();
$publishedBlogsData = $stmtPublishedBlogs->fetch(PDO::FETCH_ASSOC);
$publishedBlogsCount = $publishedBlogsData['published_blogs_count'];

?>

<?php include './layout/_header.php'; ?>
<!-- //styles -->
<?php include './layout/_navbar.php'; ?>

<script type="text/javascript">
      window.history.forward();
  </script>

<div class="container">
  <div class="card">
    <div class="card-body d-flex justify-content-between">
      <h2>
        Welcome <span class="text-primary"><?= $_SESSION['auth']->name ?></span>
      </h2>
    </div>
  </div>

  <div class="container">
  <div class="row">
    <div class="col-lg-3"> 
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Applications</h5>
          <p class="card-text">Total: <?= $enquiriesCount ?></p>
        </div>
      </div>
    </div>
    <div class="col-lg-3"> 
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Enquiries</h5>
          <p class="card-text">Total: <?= $applicationsCount ?></p>
        </div>
      </div>
    </div>
    <div class="col-lg-3"> 
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Published Blogs</h5>
          <p class="card-text">Total: <?= $publishedBlogsCount ?></p>
        </div>
      </div>
    </div>
    <div class="col-lg-3"> 
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Published Jobs</h5>
          <p class="card-text">Total: <?= $publishedJobsCount ?></p>
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
