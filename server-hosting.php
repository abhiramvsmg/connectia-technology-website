<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email and Hosting | Connectia Technology</title>


    <meta name="description" content="Business email hosting and web hosting built for real uptime from Connectia Technology, dedicated or shared, sized to what you need." />

    <meta name="keywords" content="Connectia Technology, Server and hosting providers in Karnataka, India, Server & hosting providers, Server and hosting in Karnataka, India, custom server installation, cloud server configuration, cloud computing in Karnataka, India" />


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;600;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="./static/css/style.css">
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/favicon.png" rel="apple-touch-icon">
    <link rel="canonical" href="https://www.connectiainfotech.in/server-hosting" />

</head>

<body>
    <!-- header code start here -->
    <?php
    include 'includes/navbar.php';
    ?>
    <!-- header code end here -->
    <div class="sd-hero py-3 py-lg-5 my-0 my-lg-5 position-relative">

        <div class="container">
            <div class="row align-items-center g-4 mx-0 mx-lg-5">
                <div class="col-12 col-lg-5">
                    <h2 class="font-700 text-light-black font-3 -ls-0.5px lh-sm text-capitalize">Business email and hosting built for real uptime</h2>
                    <p class="text-justify font-500 text-light-black font-16px opacity-0.8">Sick of &quot;the server's down&quot; being a sentence you hear? Us too. We handle business email hosting and web hosting built for real uptime &mdash; dedicated or shared, sized to what you actually need.</p>
                   <a href="contact.php">
                    <button class="btn bg-light-blue text-white rounded-2 w-max padding-13-33 font-16px line-height-24px font-600" style="background: linear-gradient(90deg, #076baa, #0099bd);">Get hosted properly &rarr;</button>
                    </a>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="col-12 col-lg-11">
                        <img loading="lazy" class="img-fluid" src="static/images/server-hosting/server-banner.png" alt="">
                    </div>
                </div>
            </div>
        </div>

    </div>
<?php
    $sd_name = "Email and Hosting";
    $sd_bullets = ["Professional email on your own domain", "Dedicated and shared hosting", "Uptime you can actually count on"];
    include 'partials/service-detail.php';
    ?>
    <?php
    include 'partials/contactnow.php';
    ?>
    <?php
    include 'includes/footer.php';
    ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
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
                var delay = alertify.get('notifier', 'delay');
                alertify.set('notifier', 'delay', 2);
                alertify.set('notifier', 'position', 'top-right');


                var First = $("#FirstName").val();
                var Email = $("#E_Mail").val();
                var Phone = $("#PhoneNumber").val();
                var Msg = $("#Message").val();

                if (First == "") {
                    alertify.error('Please fill the Name !! ');
                    $("#FirstName").focus();
                } else if (Email == "") {
                    alertify.error('Please fill the Email !! ');
                    $("#E_Mail").focus();
                } else if (Phone == "") {
                    alertify.error('Please fill the Phone Number !! ');
                    $("#PhoneNumber").focus();
                } else if (Msg == "") {
                    alertify.error('Please fill the Message !! ');
                    $("#Message").focus();
                } else {
                    //   alertify.set('notifier', 'delay', 7);
                    //   alertify.error('Please wait.. ');
                    var data = new FormData();
                    data.append('FirstN', First);
                    data.append('EMail', Email);
                    data.append('PhoneN', Phone);
                    data.append('Messag', Msg);

                    $.ajax({
                        url: "file.php",
                        type: "POST",
                        data: data,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function(response) {
                            // console.log(response);
                            if (response == 3) {
                                alertify.alert('Contact Form', 'Thank you for contacting us.', function() {
                                    window.location.reload();
                                });
                            } else {
                                alertify.alert('Contact Form', 'Something went wrong !! Please Try again', function() {
                                    window.location.reload();
                                });
                            }
                        }
                    });
                }

            });

        });
    </script>
     <!--<script src="//code.tidio.co/zwua3sm7byo2s4yelqjhwlhigosiagbb.js" async></script>-->
</body>

</html>