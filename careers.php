<?php
require_once 'admin/app/security/csrf.php';
include 'admin/app/database/Connection.php';
$db = new Connection();

$csrfToken = Csrf::get();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!Csrf::validate()) {
        echo json_encode(["success" => false, "msg" => "CSRF validation failed"]);
        exit;
    }
}

$sql = "SELECT *, DATE_FORMAT(createdDate,'%d-%b-%Y') as `cdate` FROM `job_updates` ORDER BY createdDate DESC";

$result = $db->run($sql);
if ($result["status"] == "success") {
    $jobupdates = $result["data"];
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
    <title>Careers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;500;600;700;900&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="./static/css/style.css" />
    <link href="./assets/img/favicon.png" rel="icon" />
    <link href="./assets/img/favicon.png" rel="apple-touch-icon" />
    <link rel="canonical" href="https://www.connectiainfotech.in/careers" />
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
                        <h1 class="text-uppercase font-3 font-700 text-light-black">Careers at Connectia Technology
                        </h1>
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
            <div class="row g-4 mx-lg-5">
                <div class="col-12">
                    <div class="text-uppercase font-2 text-light-black text-center">Open Positions:</div>
                </div>
                <?php
                if (empty($jobupdates)) {
                    echo '<div class="col-12">';
                    echo '<div class="d-flex flex-column gap-lg-3">';
                    echo '<h5 class="font-1 text-light-black opacity-0.8 lh-base text-justify">No vacancies available.</h5>';
                    echo '</div>';
                    echo '</div>';
                } else {
                    $vacanciesAvailable = false;
                    foreach ($jobupdates as $jobupdate) {
                        if (isset($jobupdate['status']) && $jobupdate['status'] == 'PUBLISH') {
                            $vacanciesAvailable = true;
                            echo '<div class="col-lg-6 col-md-6 col-sm-12 mb-4">';
                            echo '<div class="card">';
                            echo '<div class="card-body">';
                            echo '<h5 class="card-title font-weight-bold">' . $jobupdate['job_role'] . '</h5>';
                            echo '<p class="card-text"><strong>Experience:</strong> Minimum ' . $jobupdate['experience'] . ' year(s)</p>';
                            echo '<p class="card-text"><strong>Location:</strong> ' . $jobupdate['location'] . '</p>';
                            echo '<p class="card-text"><strong>Responsibilities:</strong></p>';
                          //  echo '<ul class="list-styled">';
                            $responsibilities = explode("\n", $jobupdate['job_description']);
                            foreach ($responsibilities as $responsibility) {
                                if (!empty($responsibility)) {
                                    //echo '<li>' . $responsibility . '</li>';
                                    echo '<p>' . $responsibility . '</p>';

                                }
                            }
                           // echo '</ul>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                        }
                    }

                    if (!$vacanciesAvailable) {
                        echo '<div class="col-12">';
                        echo '<div class="d-flex flex-column gap-lg-3">';
                        echo '<h5 class="font-1 text-light-black opacity-0.8 lh-base text-justify">No vacancies available.</h5>';
                        echo '</div>';
                        echo '</div>';
                    }
                }
                ?>
            </div>
        </div>
        <div class="py-3 py-lg-5 bg-fbfcff">
            <div class="container">
                <div class="row g-4 mx-0 mx-lg-5 align-items-center">
                    <div class="col-12 col-lg-6">
                        <h2 class="text-capitalize font-2.5 font-700 text-light-black mb-4">
                            JOIN US
                        </h2>
                        <h3 class="font-20px">
                            Relaxed atmosphere, Best working environment, Top notch projects
                        </h3>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div>
                            <form action="admin/api/career.php?q=save" method="POST" class="cardbox d-flex h-100 flex-column justify-content-center align-items-start gap-4 text-center font-400 font-16 p-3 p-lg-5" enctype="multipart/form-data">
                                <input type="hidden" name="token" value="<?= $csrfToken ?>">

                                <input type="text" class="form-control opacity-0.8 bg-f5f8ff rounded-3 w-100 p-3 border-0 outline-0 input-placeholder" placeholder="Enter your name*" name="name" required />
                                <input type="email" class="form-control opacity-0.8 bg-f5f8ff rounded-3 w-100 p-3 border-0 outline-0 input-placeholder" placeholder="Enter your email address*" name="email" required />
                                <input type="number" class="form-control opacity-0.8 bg-f5f8ff rounded-3 w-100 p-3 border-0 outline-0 input-placeholder" placeholder="Phone Number*" name="phone" required />
                                <div>
                                    <p>
                                        <a id="file-input-button-x" href="#u" class="btn file-input-button" style="background-color: #dfdfdfb7" data-id="x">
                                            <i class="fas fa-plus"></i>
                                            Upload Resume
                                        </a>

                                        <span id="file-list-x" style="margin-left: 10px"></span>
                                        <input id="file-input-x" class="file-input visually-hidden" type="file" name="file-input-x" data-id="x" accept=".pdf" required />
                                    </p>
                                </div>
                                <textarea class="form-control opacity-0.8 bg-f5f8ff rounded-3 w-100 p-3 border-0 outline-0 input-placeholder" placeholder="Drop us a line..." name="message" rows="5"></textarea>
                                <button type="submit" class="show-more btn bg-light-blue text-white rounded-6px w-max py-2 px-5 font-16px line-height-24px text-capitalize font-inter" style="background: linear-gradient(90deg, #076baa, #0099bd);">
                                    Send Now
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="padding-y-10 position-relative">
                <div class="container">
                    <div class="row mx-0 mx-lg-5">
                        <div class="col-12 col-lg-6">
                            <div class="row">
                                <div class="col-10">
                                    <img loading="lazy" src="./static/images//careers//career.jpg" alt="career" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="col-12 col-lg-10">
                                <p class="font-500 text-light-black opacity-0.8 lh-base font-18px text-justify">
                                    Welcome to Connectia Technology – where innovation meets opportunity! We are
                                    excited
                                    to invite dynamic and skilled professionals to join our team. At Connectia, we
                                    foster a culture that values creativity, collaboration, and continuous growth.
                                    Explore the possibilities and contribute to shaping the future of technology with
                                    us.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="padding-y-10 position-relative">
                <div class="container">
                    <div class="row mx-0 mx-lg-5">
                        <div class="col-12 col-lg-6 order-lg-2">
                            <div class="row">
                                <div class="col-10">
                                    <img loading="lazy" src="./static/images//careers//job-application.jpg" alt="Job-application" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 ">
                            <div class="col-12 col-lg-10">
                                <p class="font-500 text-light-black opacity-0.8 lh-base font-18px text-justify">
                                    Join us in our mission to empower businesses through cutting-edge digital
                                    solutions.
                                    Browse our current job openings and take the next step in your career journey with
                                    Connectia Solutions.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="padding-y-10 position-relative">
                <div class="container">
                    <div class="row mx-0 mx-lg-5">
                        <div class="col-12 col-lg-6">
                            <div class="row">
                                <div class="col-10">
                                    <img loading="lazy" src="./static/images//careers//job-search.jpg" alt="Job-search" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="col-12 col-lg-10">
                                <p class="font-500 text-light-black opacity-0.8 lh-base font-18px text-justify">
                                    Take the next step in your career journey with Connectia Solutions. Explore our
                                    current job openings and join a team that's shaping the future of digital
                                    innovation.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
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

        </div > -->
    <?php
    include 'partials/contactnow.php';
    ?>
    <?php
    include 'includes/footer.php';
    ?>
    <?php
    if (isset($_SESSION["thankyou"])) {

        include 'partials/thankyouPopup.php';
        unset($_SESSION["thankyou"]);
    }

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

    <script>
        $(document).ready(function() {
            $("#SendMail").click(function() {
                var delay = alertify.get("notifier", "delay");
                alertify.set("notifier", "delay", 2);
                alertify.set("notifier", "position", "top-right");

                var First = $("#FirstName").val();
                var Email = $("#E_Mail").val();
                var Phone = $("#PhoneNumber").val();
                var Msg = $("#Message").val();

                if (First == "") {
                    alertify.error("Please fill the Name !! ");
                    $("#FirstName").focus();
                } else if (Email == "") {
                    alertify.error("Please fill the Email !! ");
                    $("#E_Mail").focus();
                } else if (Phone == "") {
                    alertify.error("Please fill the Phone Number !! ");
                    $("#PhoneNumber").focus();
                } else if (Msg == "") {
                    alertify.error("Please fill the Message !! ");
                    $("#Message").focus();
                } else {
                    //   alertify.set('notifier', 'delay', 7);
                    //   alertify.error('Please wait.. ');
                    var data = new FormData();
                    data.append("FirstN", First);
                    data.append("EMail", Email);
                    data.append("PhoneN", Phone);
                    data.append("Messag", Msg);

                    $.ajax({
                        url: $(this).attr("action"),
                        type: $(this).attr("method"),
                        data: data,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function(response) {
                            // console.log(response);
                            if (response == 3) {
                                alertify.alert(
                                    "Contact Form",
                                    "Thank you for contacting us.",
                                    function() {
                                        window.location.reload();
                                    }
                                );
                            } else {
                                alertify.alert(
                                    "Contact Form",
                                    "Something went wrong !! Please Try again",
                                    function() {
                                        window.location.reload();
                                    }
                                );
                            }
                        },
                    });
                }
            });
        });
    </script>
     <!--<script src="//code.tidio.co/zwua3sm7byo2s4yelqjhwlhigosiagbb.js" async></script>-->
</body>

</html>