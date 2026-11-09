<?php
include './admin/app/security/csrf.php';

include './admin/app/database/Connection.php';
$db = new Connection();

$sql = "SELECT *, DATE_FORMAT(createdDate,'%d-%b-%Y') as `cdate` FROM `blogs` ORDER BY createdDate DESC";

$result = $db->run($sql);
if ($result["status"] == "success") {
    $blogs = $result["data"];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-N4D2C4SSEM"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());

        gtag("config", "G-N4D2C4SSEM");
    </script>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blogs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;500;600;700;900&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Vazirmatn:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="./static/css//style.css" />
    <link href="./assets/img/favicon.png" rel="icon" />
    <link href="./assets/img/favicon.png" rel="apple-touch-icon" />
    <link rel="canonical" href="https://www.connectiainfotech.in/blogs" />
</head>

<body>
    <!-- header code start here -->
    <?php
    include 'includes/navbar.php';
    ?>
    <!-- header code end here -->
    <div class="h-100 d-flex py-3 py-lg-5 position-relative">
        <div class="container">
            <div class="row g-4 mx-0 mx-lg-5">
                <div class="col-12">
                    <div class="d-flex flex-column gap-0 gap-lg-4">
                        <h1 class="text-uppercase font-3 font-700 text-light-black">Blogs</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="position-absolute top-0 end-0 -z-10">
            <svg class="opacity-0.1-sm" width="421" height="794" viewBox="0 0 421 794" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g opacity="0.5">
                    <mask id="mask0_237_164" style="mask-type: alpha" maskUnits="userSpaceOnUse" x="-2" y="-3" width="820" height="797">
                        <line x1="111.161" y1="414.462" x2="610.692" y2="138.03" stroke="#536476" stroke-width="4" />
                        <line x1="121.002" y1="432.246" x2="620.534" y2="155.814" stroke="#536476" stroke-width="4" />
                        <line x1="130.843" y1="450.03" x2="630.374" y2="173.598" stroke="#536476" stroke-width="4" />
                        <line x1="140.682" y1="467.812" x2="640.214" y2="191.38" stroke="#536476" stroke-width="4" />
                        <line x1="150.523" y1="485.593" x2="650.054" y2="209.161" stroke="#536476" stroke-width="4" />
                        <line x1="160.364" y1="503.376" x2="659.896" y2="226.944" stroke="#536476" stroke-width="4" />
                        <line x1="170.205" y1="521.158" x2="669.736" y2="244.726" stroke="#536476" stroke-width="4" />
                        <line x1="180.046" y1="538.941" x2="679.578" y2="262.509" stroke="#536476" stroke-width="4" />
                        <line x1="189.887" y1="556.723" x2="689.418" y2="280.291" stroke="#536476" stroke-width="4" />
                        <line x1="199.726" y1="574.507" x2="699.257" y2="298.075" stroke="#536476" stroke-width="4" />
                        <line x1="209.567" y1="592.291" x2="709.098" y2="315.859" stroke="#536476" stroke-width="4" />
                        <line x1="-0.968379" y1="332.183" x2="498.563" y2="55.7506" stroke="#536476" stroke-width="4" />
                        <line x1="8.87293" y1="349.967" x2="508.404" y2="73.5348" stroke="#536476" stroke-width="4" />
                        <line x1="18.7133" y1="367.75" x2="518.245" y2="91.318" stroke="#536476" stroke-width="4" />
                        <line x1="28.5531" y1="275.531" x2="528.084" y2="-0.900776" stroke="#536476" stroke-width="4" />
                        <line x1="38.3934" y1="293.314" x2="537.925" y2="16.8815" stroke="#536476" stroke-width="4" />
                        <line x1="48.2352" y1="311.097" x2="547.767" y2="34.6647" stroke="#536476" stroke-width="4" />
                        <line x1="58.0756" y1="328.879" x2="557.607" y2="52.4469" stroke="#536476" stroke-width="4" />
                        <line x1="67.9169" y1="346.664" x2="567.448" y2="70.232" stroke="#536476" stroke-width="4" />
                        <line x1="77.7553" y1="364.443" x2="577.287" y2="88.0113" stroke="#536476" stroke-width="4" />
                        <line x1="87.5966" y1="382.228" x2="587.128" y2="105.796" stroke="#536476" stroke-width="4" />
                        <line x1="97.4374" y1="400.011" x2="596.969" y2="123.579" stroke="#536476" stroke-width="4" />
                        <line x1="218.9" y1="613.881" x2="718.432" y2="337.449" stroke="#536476" stroke-width="4" />
                        <line x1="228.742" y1="631.666" x2="728.273" y2="355.234" stroke="#536476" stroke-width="4" />
                        <line x1="238.582" y1="649.449" x2="738.113" y2="373.017" stroke="#536476" stroke-width="4" />
                        <line x1="248.422" y1="667.231" x2="747.953" y2="390.798" stroke="#536476" stroke-width="4" />
                        <line x1="258.262" y1="685.012" x2="757.793" y2="408.58" stroke="#536476" stroke-width="4" />
                        <line x1="268.103" y1="702.796" x2="767.635" y2="426.364" stroke="#536476" stroke-width="4" />
                        <line x1="277.944" y1="720.577" x2="777.475" y2="444.145" stroke="#536476" stroke-width="4" />
                        <line x1="287.786" y1="738.36" x2="787.317" y2="461.928" stroke="#536476" stroke-width="4" />
                        <line x1="297.626" y1="756.143" x2="797.157" y2="479.711" stroke="#536476" stroke-width="4" />
                        <line x1="307.465" y1="773.926" x2="806.997" y2="497.494" stroke="#536476" stroke-width="4" />
                        <line x1="317.306" y1="791.71" x2="816.837" y2="515.278" stroke="#536476" stroke-width="4" />
                    </mask>
                    <g mask="url(#mask0_237_164)">
                        <circle cx="485.926" cy="357.675" r="155.201" fill="url(#paint0_linear_237_164)" />
                    </g>
                </g>
                <defs>
                    <linearGradient id="paint0_linear_237_164" x1="330.868" y1="357.675" x2="641.609" y2="357.675" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#076BAA" />
                        <stop offset="0.994792" stop-color="#009ABD" />
                    </linearGradient>
                </defs>
            </svg>
        </div>
    </div>
    <div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8 text-center">
                    <h2 class="font-700 font-30px text-light-black mb-4">Latest Blogs & Updates
                    </h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-3 g-2 g-lg-4 mx-0 mx-lg-5 mb-5">
                <?php
                $publishedBlogsCount = 0;
                $notPublishedBlogsCount = 0;
                foreach ($blogs as $blog) {
                    if (isset($blog['status']) && $blog['status'] == 'PUBLISH') {
                        $publishedBlogsCount++;
                ?>
                        <div class="col">
                            <div class="card">
                                <img class="card-img-top" src="<?= $blog['blogImage']; ?>" alt="Card image cap" style="max-width: 100%; max-height: 250px;" loading="lazy">
                                <div class="card-body card-body-fixed-height">
                                    <h3 class="card-title"><?= $blog['blogHeading'] ?></h3>
                                    <p class="card-text blog-description">
                                        <?= $blog['subheading'] ?></p>
                                    <?php if (!empty($blog['blogContent'])) { ?>
                                        <a href="./blog1.php?id=<?= $blog['blogId'] ?>" style="text-decoration: none; color: #076baa;">Read More</a>
                                        <div class="full-description" style="display: none;"><?= $blog['blogContent'] ?></div>
                                    <?php } ?>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Last updated <?= $blog['lastModified'] ?></small>
                                </div>
                            </div>
                        </div>
                    <?php
                    } elseif (isset($blog['status']) && $blog['status'] == 'UNPUBLISH') {
                        $notPublishedBlogsCount++;
                    }
                }
                if ($publishedBlogsCount === 0 && $notPublishedBlogsCount === 0) { ?>
                    <div class="col-12">
                        <div class="d-flex flex-column gap-lg-3">
                            <h5 class="font-1 text-light-black opacity-0.8 lh-base justify-text">No blogs available.</h5>
                        </div>
                    </div>
                <?php } elseif ($publishedBlogsCount === 0 && $notPublishedBlogsCount > 0) { ?>
                    <div class="col-12">
                        <div class="d-flex flex-column gap-lg-3">
                            <h5 class="font-1 text-light-black opacity-0.8 lh-base justify-text">No blogs available.</h5>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>







    </div>


    <!-- <div class="container text-center">
            <div class="mx-0 mx-lg-5">
                <h2 class="text-capitalize font-2.5 font-700 text-light-black mb-4">JOIN US</h2>
                <p class="font-20px">
                    Relaxed atmosphere, Best working environment, Top notch projects
                </p>
                
            </div>
<img src=".//static//images//blogs/ui.jpg" style="max-width:100%;" alt="user-interface">
        </div > -->
    <?php
    include 'partials/contactnow.php';
    ?>
    <?php
    include 'includes/footer.php';
    ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="./static/js/index.js"></script>
    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/new.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
    <!-- Banner Loop -->

    <!-- JavaScript -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />
    <!-- Alertify js Ends -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>


     <!--<script src="//code.tidio.co/zwua3sm7byo2s4yelqjhwlhigosiagbb.js" async></script>-->
    <script>
        function openBlog(event, blogId) {
        event.preventDefault(); 
        var url = './blog1.php?id=' + blogId;
        window.location.href = url;
        return false;
        }
</script>

    </script>
</body>

</html>