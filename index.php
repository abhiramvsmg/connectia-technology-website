<?php
session_start();
include 'admin/app/security/csrf.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!--glighbox-->
   <!-- <link href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" rel="stylesheet">-->

    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-M7WEM4JTX7"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-M7WEM4JTX7');
    </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connectia Technology | IT Solutions & Software Development</title>

    <meta name="description" content="Connectia Technology offers IT solutions, software development, and web design in Bengaluru. Elevate your business with our digital services." />
    <meta name="keywords" content="Bengaluru, Karnataka Best IT solutions in Bengaluru Karnataka, Top IT services provider, IT consulting company Bengaluru Karnataka, IT outsourcing company, Website design company in Bengaluru Karnataka, Web development services Bengaluru Karnataka
    Best web design agency, Custom website development, Affordable web development services, Software development company in Bengaluru, Karnataka, Custom software solutions Bengaluru, Karnataka, Enterprise software development,Software testing services Bengaluru, Karnataka,QA and software testing company,
    Mobile app development in Bengaluru, Karnataka, iOS and Android app development, Custom app development services, Best app developers in Bengaluru, Karnataka, UI/UX design for mobile apps,ERP software providers Bengaluru, Karnataka,Enterprise resource planning solutions,Best ERP systems for businesses,Custom ERP software development,IT staffing agency in Bengaluru, Karnataka
    Best IT recruiters in Bengaluru, Karnataka,Hire IT professionals Bengaluru, Karnataka, Digital marketing company Bengaluru, Karnataka,Social media marketing agency
    PPC advertising Bengaluru, Karnataka
    Content marketing services" />

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
    <link href="./assets/img/favicon.png" rel="icon">
    <link href="./assets/img/favicon.png" rel="apple-touch-icon">
    <link rel="canonical" href="https://www.connectiainfotech.in/" />
    
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "LocalBusiness",
      "name": "Connectia Technology",
      "url": "https://www.connectiainfotech.in/",
      "logo": "https://www.connectiainfotech.in/logo.png",
      "description": "Connectia Technology offers IT solutions, software development, and web design in Bengaluru. Elevate your business with our digital services.",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Your Street Address",
        "addressLocality": "Bengaluru",
        "addressRegion": "Karnataka",
        "postalCode": "560001",
        "addressCountry": "IN"
      },
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+91 9876543210",
        "contactType": "customer service"
      },
      "sameAs": [
        "https://www.facebook.com/yourpage",
        "https://www.twitter.com/yourpage",
        "https://www.linkedin.com/company/yourpage"
      ],
      "serviceProvided": [
        {
          "@type": "Service",
          "name": "IT Solutions"
        },
        {
          "@type": "Service",
          "name": "Software Development"
        },
        {
          "@type": "Service",
          "name": "Web Design"
        }
      ]
    }
    </script>


    <style>
        .cookieConsentContainer {
            z-index: 999;
            width: 350px;
            min-height: 20px;
            box-sizing: border-box;
            padding: 30px 30px 30px 30px;
            background: #232323;
            overflow: hidden;
            position: fixed;
            bottom: 30px;
            right: 30px;
            display: none;
            border-radius: 25px;
        }

        .cookieConsentContainer .cookieTitle a {
            font-family: OpenSans, arial, "sans-serif";
            color: #FFFFFF;
            font-size: 22px;
            line-height: 20px;
            display: block;
        }

        .cookieConsentContainer .cookieDesc p {
            margin: 0;
            padding: 0;
            font-family: OpenSans, arial, "sans-serif";
            color: #FFFFFF;
            font-size: 13px;
            line-height: 20px;
            display: block;
            margin-top: 10px;
        }

        .cookieConsentContainer .cookieDesc a {
            font-family: OpenSans, arial, "sans-serif";
            color: #FFFFFF;
            text-decoration: underline;
        }

        .cookieConsentContainer .cookieButton a {
            display: inline-block;
            font-family: OpenSans, arial, "sans-serif";
            color: #FFFFFF;
            font-size: 14px;
            font-weight: bold;
            margin-top: 14px;
            background: #000000;
            box-sizing: border-box;
            padding: 15px 24px;
            text-align: center;
            transition: background 0.3s;
        }

        .cookieConsentContainer .cookieButton a:hover {
            cursor: pointer;
            background: #0099FF;
        }

        .cta1 .cta-btn1 {
            color: #0099FF;
            border: 2px solid #0099FF;
        }

        .cta1 .cta-btn1:hover {
            color: #ffffff;
            border: 2px solid #0099FF;
        }

        .tele {
            width: 20px;
        }

        #header.header-scrolled,
        #header.header-inner-pages {
            background: rgb(0 0 0);
        }

        @media (max-width: 980px) {
            .cookieConsentContainer {
                bottom: 0px !important;
                left: 0px !important;
                width: 100% !important;
            }
        }

        @media (max-width: 770px) {
            .animation-box {
                height: 23rem;
            }

            .imgtech {
                width: 25% !important;
            }
        }

        .banner-h1 {
            font-size: 32px !important;
            line-height: 40px !important;
            letter-spacing: 2px !important;
            margin: 0 0 0px 0 !important;
        }
        
        
         .client-logos {
    display: grid;
    grid-template-columns: repeat(5, 1fr); /* 5 logos per row */
    gap: 30px; /* spacing between logos */
    align-items: center;
    justify-items: center;
    text-align: center;
  }

  .client-logos img {
    max-width: 100%;
    height: auto;
    transition: transform 0.3s ease;
  }

  /* Optional hover effect */
  .client-logos img:hover {
    transform: scale(1.05);
  }
    </style>
</head>

<body>


    <?php
    include 'includes/navbar.php';
    ?>
    <!-- header code end here -->
    <!-- <div class="py-3 py-lg-5 bg-dark-blue-50 position-relative banner-slider owl-carousel"> -->
    <div class="py-3 py-lg-5 position-relative banner-slider overflow-hidden">

        <div class="overflow-hidden">
            <div class="row g-1">
                <div class="col-12 col-lg-6">
                    <div class="container h-100">
                        <div class="row h-100">
                            <div class="col-12 mb-3 h-100">
                                <div class="d-flex gap-3 flex-column align-items-start justify-content-center h-100 ps-2 ps-lg-5 mx-2 mx-lg-5">
                                   <h1 class="font-700 text-light-black font-size-2xl font-4-ls-0.5px lh-sm">
    The upgrade your business has been waiting for.</h1>
<p class="font-400 text-light-black opacity-0.8 line-height-26px font-16px w-75">
    Whatever brought you here — a slow website, a security scare, an app idea sitting in your notes app for six months — chances are, it's on this list. Connectia builds and runs the tech stack so you can stop stitching one together yourself.</p>
    <div class="col-12 col-lg-10">
        <form action="admin/api/bookdemo.php?q=save" method="POST" class="input-group flex-nowrap rounded-3 shadow-1 py-2 px-2 w-fit">
                                            <input type="hidden" name="token" value="<?= Csrf::get() ?>">
                                            <input name="email" type="email" required placeholder="Enter your email address" aria-describedby="request-demo" class="px-1 px-lg-3 input-placeholder bg-none border-0 shadow-none flex-grow-1 text-light-black outline-0 opacity-0.7 w-100">
                                            <div class="input-group-append border-0">
                                                <button type="submit" class="btn bg-light-blue text-white rounded-sm w-max py-2 px-4 font-16px line-height-24px text-capitalize"     style="background: linear-gradient(90deg, #076baa, #0099bd);">Request Demo</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 d-none d-lg-block">
                    <!-- Video Section (Placeholder - currently empty until video is added) -->
                    <div class="d-flex justify-content-center align-items-center h-100">
                    </div>
                </div>
            </div>
        </div>
        <div class="overflow-hidden">
            <div class="row g-1">
                <div class="col-12 col-lg-7">
                    <div class="container h-100">
                        <div class="row h-100">
                            <div class="col-12 mb-3 h-100">
                                <div class="d-flex flex-column align-items-start justify-content-center gap-3 h-100 px-2 px-lg-5 mx-2 mx-lg-5">
                                    <h2 class="font-700 text-light-black font-size-2xl font-4-ls-0.5px lh-sm">Mobile Application and UI/UX Development in Bengaluru</h2>
                                    <p class="font-400 text-light-black opacity-0.8 line-height-26px font-16px font-inter">With the goal of providing end to end design for UI & UX
                                        to development and deployment of Android, IOS and Windows Application for small, medium and large scale buisness organizations</p>
                                    <a href="/about" class="btn bg-light-blue text-white rounded-sm w-max py-2 px-4 font-16px line-height-24px text-uppercase">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-5 d-none d-lg-block">
                    <div class="d-flex justify-content-center h-100">
                        <div>
                            <img loading="lazy" src="/static/images/mobile-development/mobile-banner.png" class="img-fluid" alt="Connectia-provide">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-4 text-white bg-dark-blue-50" style="background-color:#f1f6fd">
        <div class="container">
            <div class="row">
                <div class="col-11 mx-auto">
                    <div class="row row-cols-2 row-cols-lg-4 justify-content-center align-items-center g-3 ">
                        <!--<div>-->
                        <!--    <img loading="lazy" class="img-fluid d-none" src="/static/images/partners/speedcloud.png" alt="speedcloud logo">-->
                        <!--</div>-->
                        <!--<div>-->
                        <!--    <img loading="lazy" class="img-fluid d-none" src="/static/images/partners/speedcloud.png" alt="speedcloud logo">-->
                        <!--</div>-->
                        <div>
                            <img loading="lazy" class="img-fluid" src="/static/images/partners//google-workspace.png" alt="Google logo">

                            <!--<div class="text-light-black font-400 font-20px">Online Workspace Collaboration</div>-->
                            <!--<div class="text-white font-700 font-20px pt-3">We are Authorised Google Workspace (GSuite) Partners.</div>-->

                        </div>
                        <div class=" pt-3 ps-5 ">
                            <a href="/email-providers">
                            <button class="btn bg-light-blue text-white rounded-sm w-max py-2 px-4 font-16px  line-height-24px "   style="background: linear-gradient(90deg, #076baa, #0099bd);">Buy Now</button>
                            </a>
                        </div>
                        <!--<div>-->
                        <!--    <img loading="lazy" class="img-fluid d-none" src="/static/images/partners/google.png" alt="Google logo">-->
                        <!--</div>-->




                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="py-3 py-lg-5 px-3">
        <div class="container">
            <div class="row g-3">
                <div class="col-12 col-lg-8 mx-auto">
                    <div class="fs-4 d-flex justify-content-center text-light-black font-500" >As a licensed and authorized partner and reseller for Google Workspace and Google Cloud, we specialize in providing deployment, migration, and maintenance services to small, medium, and large organizations and enterprises.<br> Our expertise in these platforms enables us to offer tailored solutions that meet the unique needs of each client, ensuring a seamless transition to the cloud and ongoing support to optimize their operations.<br> With a proven track record of success, we take pride in delivering reliable and secure services to our valued clients, helping them achieve their business goals with the power of Google's technology.</div>
                </div>
                <div class="col-12">
                    <div class="mx-0 mx-lg-5">
                        <div class="d-flex justify-content-center">
                            <ul class="flex-nowrap flex-lg-wrap nav nav-pills mb-3 section-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link  bg-transparent active  text-start lh-base" id="pills-communicate-effectively-tab" data-bs-toggle="pill" data-bs-target="#pills-communicate-effectively" type="button" role="tab" aria-controls="pills-communicate-effectively" aria-selected="true"  style="color: #0099bd;">Communicate Effectively</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link bg-transparent text-start lh-base" id="pills-collaborate-seamlessly-tab" data-bs-toggle="pill" data-bs-target="#pills-collaborate-seamlessly" type="button" role="tab" aria-controls="pills-collaborate-seamlessly" aria-selected="false" style="color: #0099bd;">Collaborate Seamlessly</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link bg-transparent text-start lh-base" id="pills-manage-easily-tab" data-bs-toggle="pill" data-bs-target="#pills-manage-easily" type="button" role="tab" aria-controls="pills-manage-easily" aria-selected="false" style="color: #0099bd;" >Manage Easily</button>
                               
                                </li>
                                
       
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mx-0 mx-lg-5">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-communicate-effectively" role="tabpanel" aria-labelledby="pills-communicate-effectively-tab">
                                <div class="row align-items-center g-1 g-lg-5">
                                    <div class="col-12 col-lg-5">
                                        <div class="d-flex gap-4 align-items-start">
                                            <div>
                                                <img loading="lazy" class="img-fluid mt-2" src="/static/images/icons/gmail-icon.png" alt="Gmail icon">
                                            </div>
                                            <div>
                                                <div class="text-light-black font-400 font-20px">Get the power of Gmail</div>
                                                <p class="opacity-0.8 text-333333 font-16px font-400">Get a professional email for your business with all the powerful features of Gmail</p>
                                            </div>
                                        </div>
                                        <div class="d-flex gap-4 align-items-start">
                                            <div>
                                                <img loading="lazy" class="img-fluid mt-2" src="/static/images/icons/google-calender-icon.png" alt="Google calender icon">
                                            </div>
                                            <div>
                                                <div class="text-light-black font-400 font-20px">Never miss a meeting</div>
                                                <p class="opacity-0.8 text-333333 font-16px font-400">Add reminders, schedule meetings and never miss a thing with smart calendar.</p>
                                            </div>
                                        </div>
                                        <div class="d-flex gap-4 align-items-start">
                                            <div>
                                                <img loading="lazy" class="img-fluid mt-2" src="/static/images/icons/hangout-icon.png" alt="Hangout icon">
                                            </div>
                                            <div>
                                                <div class="text-light-black font-400 font-20px">Communicate on the go</div>
                                                <p class="opacity-0.8 text-333333 font-16px font-400">Stay connected with your colleagues with HD video calls via Google Meet and Google Chats.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto col-lg-7">
                                        <img loading="lazy" class="img-fluid" src="/static/images/misc/communicate-effectively.png" alt="Communicate Effectively Image">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-collaborate-seamlessly" role="tabpanel" aria-labelledby="pills-collaborate-seamlessly-tab">
                                <div class="row align-items-center g-1 g-lg-5">
                                    <div class="col-12 col-lg-5">
                                        <div class="d-flex gap-4 align-items-start">
                                            <div>
                                                <img loading="lazy" class="img-fluid mt-2" src="/static/images/icons/drive.png" alt="Drive icon">
                                            </div>
                                            <div>
                                                <div class="text-light-black font-400 font-20px">Intelligent Collaboration</div>
                                                <p class="opacity-0.8 text-333333 font-16px font-400">Save your work on the cloud and collaborate in real time.</p>
                                            </div>
                                        </div>
                                        <div class="d-flex gap-4 align-items-start">
                                            <div>
                                                <img loading="lazy" class="img-fluid mt-2" src="/static/images/icons/google-sheet.png" alt="Google sheet icon">
                                            </div>
                                            <div>
                                                <div class="text-light-black font-400 font-20px">Online Workspace Collaboration</div>
                                                <p class="opacity-0.8 text-333333 font-16px font-400">Experience greater efficiency with real-time edits and multi-user access features for Google Docs, Sheets and Slides.</p>
                                            </div>
                                        </div>
                                        <div class="d-flex gap-4 align-items-start">
                                            <div>
                                                <img loading="lazy" class="img-fluid mt-2" src="/static/images/icons/google-cloud.png" alt="Google cloud icon">
                                            </div>
                                            <div>
                                                <div class="text-light-black font-400 font-20px">Smart Search</div>
                                                <p class="opacity-0.8 text-333333 font-16px font-400">Search across all your files with cloud search.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto col-lg-7">
                                        <img loading="lazy" class="img-fluid" src="/static/images/misc/collaborate-seamlessly.png" alt="Communicate Effectively Image">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-manage-easily" role="tabpanel" aria-labelledby="pills-manage-easily-tab">
                                <div class="row align-items-center g-1 g-lg-5">
                                    <div class="col-12 col-lg-5">
                                        <div class="d-flex gap-4 align-items-start">
                                            <div>
                                                <img loading="lazy" class="img-fluid mt-2" src="/static/images/icons/setting.png" alt="Setting icon">
                                            </div>
                                            <div>
                                                <div class="text-light-black font-400 font-20px">Intelligent Collaboration</div>
                                                <p class="opacity-0.8 text-333333 font-16px font-400">Save your work on the cloud and collaborate in real time.</p>
                                            </div>
                                        </div>
                                        <div class="d-flex gap-4 align-items-start">
                                            <div>
                                                <img loading="lazy" class="img-fluid mt-2" src="/static/images/icons/locker.png" alt="Google locker icon">
                                            </div>
                                            <div>
                                                <div class="text-light-black font-400 font-20px">Online Workspace Collaboration</div>
                                                <p class="opacity-0.8 text-333333 font-16px font-400">Experience greater efficiency with real-time edits and multi-user access features for Google Docs, Sheets and Slides.</p>
                                            </div>
                                        </div>
                                        <div class="d-flex gap-4 align-items-start">
                                            <div>
                                                <img loading="lazy" class="img-fluid mt-2" src="/static/images/icons/gsuite.png" alt="Google suite icon">
                                            </div>
                                            <div>
                                                <div class="text-light-black font-400 font-20px">Smart Search</div>
                                                <p class="opacity-0.8 text-333333 font-16px font-400">Search across all your files with cloud search.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto col-lg-7">
                                        <img loading="lazy" class="img-fluid" src="/static/images/misc/manage-easily.png" alt="Communicate Effectively Image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us -->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center mx-0 mx-lg-5">
                <div class="col-12 col-lg-10">
                    <div class="text-uppercase font-manrope font-700 mb-3" style="color:#0099bd;">About Us</div>
                    <h2 class="font-700 text-light-black fs-2 lh-base mb-4">We started because "good enough" wasn't.</h2>
                    <p class="font-400 text-light-black opacity-0.8 line-height-26px font-16px">
                        Back in 2014, Connectia started the way most good ideas do — with a small team that thought technology partners could actually be, well, partners. Not a vendor who disappears after the invoice. Not a call center reading from a script. A team that sticks around, knows your business, and actually picks up the phone.
                    </p>
                    <p class="font-400 text-light-black opacity-0.8 line-height-26px font-16px">
                        Ten years, 100+ businesses, and three countries later, that's still the whole idea.
                    </p>
                    <a href="mailto:support@connectia.in?subject=Let's%20talk" class="btn bg-light-blue text-white rounded-sm w-max py-2 px-4 font-16px line-height-24px" style="background:linear-gradient(90deg,#076baa,#0099bd);">Let's talk →</a>

                    <div class="row g-4 mt-4">
                        <div class="col-12 col-md-6">
                            <h3 class="font-700 font-20px text-light-black">What we actually believe</h3>
                            <p class="font-400 text-light-black opacity-0.8 line-height-26px font-16px">Simple is underrated. Anyone can make things complicated. We'd rather build the version that works, makes sense, and doesn't need a manual.</p>
                            <p class="font-400 text-light-black opacity-0.8 line-height-26px font-16px">Support isn't an afterthought. A lot of tech companies treat "after launch" as someone else's problem. We don't. If it's ours to build, it's ours to keep running.</p>
                            <p class="font-400 text-light-black opacity-0.8 line-height-26px font-16px">You shouldn't need five vendors. Software, websites, apps, security, hosting, support — we built Connectia so you'd have one team that covers all of it, instead of five who don't talk to each other.</p>
                        </div>
                        <div class="col-12 col-md-6">
                            <h3 class="font-700 font-20px text-light-black">Who we are</h3>
                            <p class="font-400 text-light-black opacity-0.8 line-height-26px font-16px">We're developers, designers, security specialists, and people who genuinely like solving the problem you didn't know you could fix. No jargon for the sake of sounding smart. No "let me loop in another department." Just people who know what they're doing and enjoy doing it.</p>
                            <h3 class="font-700 font-20px text-light-black mt-4">Where we're headed</h3>
                            <p class="font-400 text-light-black opacity-0.8 line-height-26px font-16px">We've spent a decade building for businesses that wanted a partner, not a project timeline. Now we're doing it for a bigger map — more industries, more regions, the same standard. If you're building something that matters, we want to be the team behind it.</p>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap gap-3 mt-3">
                        <a href="#services" class="text-decoration-none font-600" style="color:#076baa;">See what we do →</a>
                        <a href="mailto:support@connectia.in" class="text-decoration-none font-600" style="color:#076baa;">Get in touch →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Us -->

    <div class="py-3 py-lg-5  bg-dark-blue-50 position-relative">
        <div class="overflow-hidden">
            <div class="row align-items-center">
                <div class="col-12 col-lg-7 pr-4">
                    <img loading="lazy" src="/static/images/misc/connectia-provide.png" class="img-fluid" alt="Connectia provide">
                </div>
                <div class="col-12 col-lg-5">
                    <div class="container px-4 px-lg-0 mt-2">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <h2 class="text-dark-blue font-600 fs-6" style="color: #0099bd;">Connectia</h2>
                                <h2 class="font-700 text-light-black fs-1 -ls-0.5px lh-base text-capitalize">We provide</h2>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-auto">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18.8311 0.5H1.73113C1.19279 0.5 0.781128 0.911667 0.781128 1.45V13.1667V16.0167C0.781128 16.2067 0.907795 16.3333 1.09779 16.3333H7.43113V19.5H8.06446V16.3333H12.4978V19.5H13.1311V16.3333H19.4645C19.6545 16.3333 19.7811 16.2067 19.7811 16.0167V13.1667V1.45C19.7811 0.911667 19.3695 0.5 18.8311 0.5ZM1.41446 1.45C1.41446 1.26 1.54113 1.13333 1.73113 1.13333H18.8311C19.0211 1.13333 19.1478 1.26 19.1478 1.45V12.85H1.41446V1.45ZM19.1478 15.7H12.8145H7.74779H1.41446V13.4833H19.1478V15.7Z" fill="#009BBD" />
                                            <path d="M17.2478 3.0332H15.3478C15.1578 3.0332 15.0311 3.15987 15.0311 3.34987V3.9832H11.5478V3.34987C11.5478 3.15987 11.4211 3.0332 11.2311 3.0332H9.33114C9.14114 3.0332 9.01447 3.15987 9.01447 3.34987V3.9832H5.53114V3.34987C5.53114 3.15987 5.40447 3.0332 5.21447 3.0332H3.31447C3.12447 3.0332 2.9978 3.15987 2.9978 3.34987V5.24987C2.9978 5.43987 3.12447 5.56654 3.31447 5.56654H5.21447C5.40447 5.56654 5.53114 5.43987 5.53114 5.24987V4.61654H7.52614C6.8928 5.1232 6.48114 5.94654 6.48114 6.8332V8.7332H5.8478C5.6578 8.7332 5.53114 8.85987 5.53114 9.04987V10.9499C5.53114 11.1399 5.6578 11.2665 5.8478 11.2665H7.7478C7.9378 11.2665 8.06447 11.1399 8.06447 10.9499V9.04987C8.06447 8.85987 7.9378 8.7332 7.7478 8.7332H7.11447V6.8332C7.11447 5.6932 7.9378 4.80654 9.01447 4.6482V5.24987C9.01447 5.43987 9.14114 5.56654 9.33114 5.56654H11.2311C11.4211 5.56654 11.5478 5.43987 11.5478 5.24987V4.6482C12.6245 4.80654 13.4478 5.72487 13.4478 6.8332V8.7332H12.8145C12.6245 8.7332 12.4978 8.85987 12.4978 9.04987V10.9499C12.4978 11.1399 12.6245 11.2665 12.8145 11.2665H14.7145C14.9045 11.2665 15.0311 11.1399 15.0311 10.9499V9.04987C15.0311 8.85987 14.9045 8.7332 14.7145 8.7332H14.0811V6.8332C14.0811 5.94654 13.6695 5.1232 13.0361 4.61654H15.0311V5.24987C15.0311 5.43987 15.1578 5.56654 15.3478 5.56654H17.2478C17.4378 5.56654 17.5645 5.43987 17.5645 5.24987V3.34987C17.5645 3.15987 17.4378 3.0332 17.2478 3.0332ZM4.8978 4.9332H3.63114V3.66654H4.8978V4.9332ZM7.43114 10.6332H6.16447V9.36654H7.43114V10.6332ZM10.9145 4.9332H9.6478V3.66654H10.9145V4.9332ZM14.3978 10.6332H13.1311V9.36654H14.3978V10.6332ZM16.9311 4.9332H15.6645V3.66654H16.9311V4.9332Z" fill="#009BBD" />
                                            <path d="M10.5978 3.9834H9.96448V4.61673H10.5978V3.9834Z" fill="#009BBD" />
                                            <path d="M16.6144 3.9834H15.9811V4.61673H16.6144V3.9834Z" fill="#009BBD" />
                                            <path d="M4.58109 3.9834H3.94775V4.61673H4.58109V3.9834Z" fill="#009BBD" />
                                            <path d="M7.11441 9.68311H6.48108V10.3164H7.11441V9.68311Z" fill="#009BBD" />
                                            <path d="M14.0811 9.68311H13.4478V10.3164H14.0811V9.68311Z" fill="#009BBD" />
                                        </svg>
                                        <!-- <img loading="lazy" src="/static/images/icons/creative-design.png" class="img-fluid" alt=""> -->
                                    </div>
                                    <div class="col-10">
                                        <div class="d-flex flex-column gap-2">
                                            <h3 class="font-700 font-20px line-height-26px text-light-black">Creative Design</h3>
                                            <p class="font-400 text-light-black opacity-0.8 line-height-26px font-16px">We are at Connectia, Using the latest technology with proven deployment knowledge in Laravel, Python and progressive web development, to build Out-of-the-box design to turn your ideas into reality, with the design sequence tailored to your standards and requirements.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-auto">

                                        <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16.9207 5.25278C16.9207 5.25278 16.9207 5.25278 16.9207 5.25V2.10984C16.9207 1.23703 16.1654 0.5 15.2712 0.5H2.30337C1.41412 0.500445 0.69305 1.22063 0.691528 2.10984V17.8901C0.69305 18.7794 1.41412 19.4996 2.30337 19.5H10.9832C11.0317 19.4993 11.0796 19.4896 11.1245 19.4715C11.2175 19.4892 11.3117 19.4988 11.4064 19.5H16.8934C17.7826 19.4991 18.5032 18.7785 18.5041 17.8893V6.86066C18.5024 5.98284 17.7984 5.26789 16.9207 5.25278ZM2.30337 18.7083C1.8512 18.7083 1.4843 18.3423 1.48322 17.8902V2.10984C1.4843 1.65766 1.8512 1.29165 2.30337 1.29165H15.2713C15.7364 1.29165 16.1291 1.66613 16.1291 2.10984V5.25H15.7332V2.47915C15.7332 2.26054 15.556 2.08331 15.3374 2.08331H2.27487C2.05626 2.08335 1.87903 2.26054 1.87903 2.47915V17.125C1.87903 17.3436 2.05626 17.5208 2.27487 17.5208H9.79572V17.8894C9.7972 18.1783 9.87725 18.4614 10.0273 18.7083H2.30337ZM9.79568 6.86066V16.7292H2.67068V2.875H14.9415V5.25H11.4063C10.5172 5.25085 9.79657 5.97148 9.79568 6.86066ZM17.7124 17.8893C17.7117 18.3414 17.3454 18.7077 16.8934 18.7083H11.4063C10.9543 18.7076 10.588 18.3414 10.5874 17.8893V16.7292H17.7124V17.8893ZM17.7124 15.9375H10.5874V8.02085H17.7124V15.9375ZM17.7124 7.22915H10.5874V6.86062C10.588 6.40859 10.9543 6.04228 11.4063 6.04165H16.8934C17.3454 6.04232 17.7117 6.40859 17.7123 6.86062V7.22915H17.7124Z" fill="#00BC6C" />
                                        </svg>

                                        <!-- <img loading="lazy" src="/static/images/icons/creative-design.png" class="img-fluid" alt=""> -->
                                    </div>
                                    <div class="col-10">
                                        <div class="d-flex flex-column gap-2">
                                            <h3 class="font-700 font-20px line-height-26px text-light-black">Incredibly Responsive</h3>
                                            <p class="font-400 text-light-black  line-height-26px font-16px">Having simplified navigation as well as smooth CSS with js animations and smooth front end experience, We at Connectia, improve website speed and rendering with usability and accessibility our core built to specific end user requirement, and we strive to provide users with an intuitive experience.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="#35EAEA" viewBox="0 0 16 16">
                                            <path d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103zM2.25 8.184l3.897 1.67a.5.5 0 0 1 .262.263l1.67 3.897L12.743 3.52 2.25 8.184z" />
                                        </svg>
                                        <!-- <img loading="lazy" src="/static/images/icons/creative-design.png" class="img-fluid" alt=""> -->
                                    </div>
                                    <div class="col-10">
                                        <div class="d-flex flex-column gap-2">
                                            <h3 class="font-700 font-20px line-height-26px text-light-black">Quick Access</h3>
                                            <p class="font-400 text-light-black opacity-0.8 line-height-26px font-16px">Access pre-loaded data instantaneously with your website or products stored on our dedicated server, enabling dynamic content queries to be processed lightening fast. Connectia provides a array of dedicated or shared server and hosting with our official channel partners SpeedCloud by NxtGen and pay as per your usage for deployed applications.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div id="services" class="py-2 py-lg-5 my-2 my-lg-5">
        <div class="container">
            <div class="row gy-4 mx-0 mx-lg-5">
                <div class="col-10 col-lg-4">
                    <div class="text-uppercase font-manrope font-700 light-black">Service</div>
                    <div class="font-manrope font-700 font-size-2xl mt-3 lh-1 light-black">Explore Our Service</div>
                    <p class="font-400 text-light-black opacity-0.8 line-height-26px font-16px mt-3">
                        Whatever brought you here — a slow website, a security scare, an app idea sitting in your notes app for six months — chances are, it's on this list. Connectia builds and runs the tech stack so you can stop stitching one together yourself.
                    </p>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="d-flex gap-3 h-100 justify-content-end">
                        <button class="btn btn-transparent prev-service-slider shadow-none">
                            <svg width="44" height="18" viewBox="0 0 44 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.10857 0.578125L11.29 2.74504L6.55776 7.47732H43.6084V10.5361H6.55776L11.29 15.2684L9.10857 17.4353L0.699112 9.00673L9.10857 0.578125Z" fill="#000B33" />
                            </svg>
                        </button>
                        <button class="btn btn-transparent next-service-slider shadow-none">
                            <svg width="44" height="18" viewBox="0 0 44 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M34.8231 0.578125L32.6416 2.74504L37.3739 7.47732H0.323242V10.5361H37.3739L32.6416 15.2684L34.8231 17.4353L43.2325 9.00673L34.8231 0.578125Z" fill="#000B33" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="col-12">
                    <div class="service-slider overflow-hidden" data-default="[space=1]">
                        <div class="mt-0 mt-lg-5 pt-0 pt-lg-5">
                            <div class="col-12">
                                <div class="bg-official-card h-100 p-4">
                                    <div class="d-flex flex-column justify-content-between gap-3 h-100">
                                        <div>
                                            <img loading="lazy" src="/static/images/services/software-development.png" class="img-fluid" alt="Software Development">
                                            <h3 class="font-700 font-manrope text-white fs-5 mt-3">Software Development</h3>
                                            <p class="font-roboto-slab lh-lg font-15px font-400 text-lighter">Tired of software that almost fits? That "we'll just work around it" feeling gets old fast. We build custom software development around how your business actually runs — not the other way around. Scalable, secure, and built to grow with you instead of holding you back.</p>
                                            <ul class="list-unstyled d-flex flex-column gap-2 my-3 font-roboto-slab font-14px text-lighter opacity-0.9">
                                                <li class="d-flex align-items-start gap-2">
                                                    <span style="color:#0099bd;font-weight:bold;">✓</span>
                                                    <span>Built around your workflow, not a template</span>
                                                </li>
                                                <li class="d-flex align-items-start gap-2">
                                                    <span style="color:#0099bd;font-weight:bold;">✓</span>
                                                    <span>Architecture that scales when you do</span>
                                                </li>
                                                <li class="d-flex align-items-start gap-2">
                                                    <span style="color:#0099bd;font-weight:bold;">✓</span>
                                                    <span>Code your next developer will thank you for</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="mailto:support@connectia.in?subject=Software%20Development" class="text-decoration-none font-roboto-slab font-400 text-white d-flex gap-2 align-items-center font-16px my-2">
                                            <span>Start your build →</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-0 mt-lg-3 pt-0 pt-lg-3">
                            <div class="col-12">
                                <div class="bg-official-card h-100 p-4">
                                    <div class="d-flex flex-column justify-content-between gap-3 h-100">
                                        <div>
                                            <img loading="lazy" src="/static/images/services/web-application-devlopmeent.png" class="img-fluid" alt="Website Development">
                                            <h3 class="font-700 font-manrope text-white fs-5 mt-3">Website Development</h3>
                                            <p class="font-roboto-slab lh-lg font-15px font-400 text-lighter">Your website is often the first — and only — shot you get. If it's slow, dated, or invisible on Google, that shot's already gone. We build fast, responsive websites with web design and development that's SEO-ready from day one, so people actually find you and stick around.</p>
                                            <ul class="list-unstyled d-flex flex-column gap-2 my-3 font-roboto-slab font-14px text-lighter opacity-0.9">
                                                <li class="d-flex align-items-start gap-2">
                                                    <span style="color:#0099bd;font-weight:bold;">✓</span>
                                                    <span>Mobile-first, built to load fast</span>
                                                </li>
                                                <li class="d-flex align-items-start gap-2">
                                                    <span style="color:#0099bd;font-weight:bold;">✓</span>
                                                    <span>SEO baked in, not bolted on later</span>
                                                </li>
                                                <li class="d-flex align-items-start gap-2">
                                                    <span style="color:#0099bd;font-weight:bold;">✓</span>
                                                    <span>Clean, no-bloat code</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="mailto:support@connectia.in?subject=Website%20Development" class="text-decoration-none font-roboto-slab font-400 text-white d-flex gap-2 align-items-center font-16px my-2">
                                            <span>Get your website built →</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-0 mt-lg-1 pt-0 pt-lg-1">
                            <div class="col-12">
                                <div class="bg-official-card h-100 p-4">
                                    <div class="d-flex flex-column justify-content-between gap-3 h-100">
                                        <div>
                                            <img loading="lazy" src="/static/images/services/web-design.png" class="img-fluid" alt="Graphic Design, UI/UX">
                                            <h3 class="font-700 font-manrope text-white fs-5 mt-3">Graphic Design, UI/UX</h3>
                                            <p class="font-roboto-slab lh-lg font-15px font-400 text-lighter">Ever land on a site and think, "who made this?" — in a good way? That's what good UI/UX and graphic design does. We design brand identities and interfaces people actually enjoy using, grounded in how people really click, scroll, and decide.</p>
                                            <ul class="list-unstyled d-flex flex-column gap-2 my-3 font-roboto-slab font-14px text-lighter opacity-0.9">
                                                <li class="d-flex align-items-start gap-2">
                                                    <span style="color:#0099bd;font-weight:bold;">✓</span>
                                                    <span>Brand identity that's actually memorable</span>
                                                </li>
                                                <li class="d-flex align-items-start gap-2">
                                                    <span style="color:#0099bd;font-weight:bold;">✓</span>
                                                    <span>UX based on real behavior, not guesswork</span>
                                                </li>
                                                <li class="d-flex align-items-start gap-2">
                                                    <span style="color:#0099bd;font-weight:bold;">✓</span>
                                                    <span>Wireframes and prototypes before a line of code</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="mailto:support@connectia.in?subject=Graphic%20Design%20and%20UI/UX" class="text-decoration-none font-roboto-slab font-400 text-white d-flex gap-2 align-items-center font-16px my-2">
                                            <span>Design something unforgettable →</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-0 mt-lg-5 pt-0 pt-lg-5">
                            <div class="col-12">
                                <div class="bg-official-card h-100 p-4">
                                    <div class="d-flex flex-column justify-content-between gap-3 h-100">
                                        <div>
                                            <img loading="lazy" src="/static/images/software-developement/service-2.png" class="img-fluid" alt="Software Testing">
                                            <h3 class="font-700 font-manrope text-white fs-5 mt-3">Software Testing</h3>
                                            <p class="font-roboto-slab lh-lg font-15px font-400 text-lighter">Found a bug after launch? Everyone has — and it's never cheap. Our software testing and QA catches what shouldn't ship, before your customers find it for you.</p>
                                            <ul class="list-unstyled d-flex flex-column gap-2 my-3 font-roboto-slab font-14px text-lighter opacity-0.9">
                                                <li class="d-flex align-items-start gap-2">
                                                    <span style="color:#0099bd;font-weight:bold;">✓</span>
                                                    <span>Manual and automated testing</span>
                                                </li>
                                                <li class="d-flex align-items-start gap-2">
                                                    <span style="color:#0099bd;font-weight:bold;">✓</span>
                                                    <span>Performance and load testing</span>
                                                </li>
                                                <li class="d-flex align-items-start gap-2">
                                                    <span style="color:#0099bd;font-weight:bold;">✓</span>
                                                    <span>Bugs that get fixed, not just filed away</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="mailto:support@connectia.in?subject=Software%20Testing" class="text-decoration-none font-roboto-slab font-400 text-white d-flex gap-2 align-items-center font-16px my-2">
                                            <span>Test before you launch →</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-0 mt-lg-3 pt-0 pt-lg-3">
                            <div class="col-12">
                                <div class="bg-official-card h-100 p-4">
                                    <div class="d-flex flex-column justify-content-between gap-3 h-100">
                                        <div>
                                            <img loading="lazy" src="/static/images/services/mobileapp.png" class="img-fluid" alt="App Design and Development">
                                            <h3 class="font-700 font-manrope text-white fs-5 mt-3">App Design and Development</h3>
                                            <p class="font-roboto-slab lh-lg font-15px font-400 text-lighter">Got an app idea you keep putting off? We turn it into something people actually download and keep. Mobile app development for iOS and Android, built to feel native and move fast — from first sketch to app store.</p>
                                            <ul class="list-unstyled d-flex flex-column gap-2 my-3 font-roboto-slab font-14px text-lighter opacity-0.9">
                                                <li class="d-flex align-items-start gap-2">
                                                    <span style="color:#0099bd;font-weight:bold;">✓</span>
                                                    <span>Native and cross-platform builds</span>
                                                </li>
                                                <li class="d-flex align-items-start gap-2">
                                                    <span style="color:#0099bd;font-weight:bold;">✓</span>
                                                    <span>UX designed for thumbs, not mice</span>
                                                </li>
                                                <li class="d-flex align-items-start gap-2">
                                                    <span style="color:#0099bd;font-weight:bold;">✓</span>
                                                    <span>Support that doesn't disappear after launch</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="mailto:support@connectia.in?subject=App%20Design%20and%20Development" class="text-decoration-none font-roboto-slab font-400 text-white d-flex gap-2 align-items-center font-16px my-2">
                                            <span>Build your app →</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-0 mt-lg-1 pt-0 pt-lg-1">
                            <div class="col-12">
                                <div class="bg-official-card h-100 p-4">
                                    <div class="d-flex flex-column justify-content-between gap-3 h-100">
                                        <div>
                                            <img loading="lazy" src="/static/images/icons/locker.png" style="max-height: 48px; width: auto;" alt="Cybersecurity">
                                            <h3 class="font-700 font-manrope text-white fs-5 mt-3">Cybersecurity</h3>
                                            <p class="font-roboto-slab lh-lg font-15px font-400 text-lighter">Ever wonder if your business is one bad email away from a very bad day? Most are. Our cybersecurity services find the gaps before someone else does — audits, monitoring, and response, all on call.</p>
                                            <ul class="list-unstyled d-flex flex-column gap-2 my-3 font-roboto-slab font-14px text-lighter opacity-0.9">
                                                <li class="d-flex align-items-start gap-2">
                                                    <span style="color:#0099bd;font-weight:bold;">✓</span>
                                                    <span>Security audits and vulnerability testing</span>
                                                </li>
                                                <li class="d-flex align-items-start gap-2">
                                                    <span style="color:#0099bd;font-weight:bold;">✓</span>
                                                    <span>Network and endpoint protection</span>
                                                </li>
                                                <li class="d-flex align-items-start gap-2">
                                                    <span style="color:#0099bd;font-weight:bold;">✓</span>
                                                    <span>24/7 threat monitoring</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="mailto:support@connectia.in?subject=Cybersecurity" class="text-decoration-none font-roboto-slab font-400 text-white d-flex gap-2 align-items-center font-16px my-2">
                                            <span>Secure your business →</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-0 mt-lg-5 pt-0 pt-lg-5">
                            <div class="col-12">
                                <div class="bg-official-card h-100 p-4">
                                    <div class="d-flex flex-column justify-content-between gap-3 h-100">
                                        <div>
                                            <img loading="lazy" src="/static/images/services/software-development.png" class="img-fluid" alt="Email and Hosting">
                                            <h3 class="font-700 font-manrope text-white fs-5 mt-3">Email and Hosting</h3>
                                            <p class="font-roboto-slab lh-lg font-15px font-400 text-lighter">Sick of "the server's down" being a sentence you hear? Us too. We handle business email hosting and web hosting built for real uptime — dedicated or shared, sized to what you actually need.</p>
                                            <ul class="list-unstyled d-flex flex-column gap-2 my-3 font-roboto-slab font-14px text-lighter opacity-0.9">
                                                <li class="d-flex align-items-start gap-2">
                                                    <span style="color:#0099bd;font-weight:bold;">✓</span>
                                                    <span>Professional email on your own domain</span>
                                                </li>
                                                <li class="d-flex align-items-start gap-2">
                                                    <span style="color:#0099bd;font-weight:bold;">✓</span>
                                                    <span>Dedicated and shared hosting</span>
                                                </li>
                                                <li class="d-flex align-items-start gap-2">
                                                    <span style="color:#0099bd;font-weight:bold;">✓</span>
                                                    <span>Uptime you can actually count on</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="mailto:support@connectia.in?subject=Email%20and%20Hosting" class="text-decoration-none font-roboto-slab font-400 text-white d-flex gap-2 align-items-center font-16px my-2">
                                            <span>Get hosted properly →</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-0 mt-lg-3 pt-0 pt-lg-3">
                            <div class="col-12">
                                <div class="bg-official-card h-100 p-4">
                                    <div class="d-flex flex-column justify-content-between gap-3 h-100">
                                        <div>
                                            <img loading="lazy" src="/static/images/technical-support/image.png" class="img-fluid" alt="Technical Support">
                                            <h3 class="font-700 font-manrope text-white fs-5 mt-3">Technical Support</h3>
                                            <p class="font-roboto-slab lh-lg font-15px font-400 text-lighter">Ever been on hold with "IT support" that never actually helps? Ours picks up. Round-the-clock technical support that catches small issues before they become your whole afternoon.</p>
                                            <ul class="list-unstyled d-flex flex-column gap-2 my-3 font-roboto-slab font-14px text-lighter opacity-0.9">
                                                <li class="d-flex align-items-start gap-2">
                                                    <span style="color:#0099bd;font-weight:bold;">✓</span>
                                                    <span>24/7 monitoring and support</span>
                                                </li>
                                                <li class="d-flex align-items-start gap-2">
                                                    <span style="color:#0099bd;font-weight:bold;">✓</span>
                                                    <span>Remote and on-site help</span>
                                                </li>
                                                <li class="d-flex align-items-start gap-2">
                                                    <span style="color:#0099bd;font-weight:bold;">✓</span>
                                                    <span>Fixes before they become fires</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="mailto:support@connectia.in?subject=Technical%20Support" class="text-decoration-none font-roboto-slab font-400 text-white d-flex gap-2 align-items-center font-16px my-2">
                                            <span>Get support that responds →</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-0 mt-lg-1 pt-0 pt-lg-1">
                            <div class="col-12">
                                <div class="bg-official-card h-100 p-4">
                                    <div class="d-flex flex-column justify-content-between gap-3 h-100">
                                        <div>
                                            <img loading="lazy" src="/static/images/software-developement/service-3.png" class="img-fluid" alt="Data Protection">
                                            <h3 class="font-700 font-manrope text-white fs-5 mt-3">Data Protection</h3>
                                            <p class="font-roboto-slab lh-lg font-15px font-400 text-lighter">Think your data's safe until the day it isn't? Most people do. We build data protection and backup systems for a world where loss isn't a maybe — automated backups, encryption, and compliance support included.</p>
                                            <ul class="list-unstyled d-flex flex-column gap-2 my-3 font-roboto-slab font-14px text-lighter opacity-0.9">
                                                <li class="d-flex align-items-start gap-2">
                                                    <span style="color:#0099bd;font-weight:bold;">✓</span>
                                                    <span>Automated backup and disaster recovery</span>
                                                </li>
                                                <li class="d-flex align-items-start gap-2">
                                                    <span style="color:#0099bd;font-weight:bold;">✓</span>
                                                    <span>Encryption at rest and in transit</span>
                                                </li>
                                                <li class="d-flex align-items-start gap-2">
                                                    <span style="color:#0099bd;font-weight:bold;">✓</span>
                                                    <span>Compliance support built in</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="mailto:support@connectia.in?subject=Data%20Protection" class="text-decoration-none font-roboto-slab font-400 text-white d-flex gap-2 align-items-center font-16px my-2">
                                            <span>Protect your data →</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="row mt-4">
                        <div class="col-12">
                            <div class="p-4 p-lg-5 rounded-3" style="background:#f1f6fd;">
                                <h3 class="font-manrope font-700 text-light-black">So, where does it hurt?</h3>
                                <p class="font-400 text-light-black opacity-0.8 line-height-26px font-16px mb-3">
                                    Slow site, security worry, an app that's overdue — tell us what's actually going on. We'll tell you what to fix first.
                                </p>
                                <a href="mailto:support@connectia.in?subject=How%20can%20Connectia%20help%3F" class="btn text-white rounded-sm py-2 px-4" style="background:linear-gradient(90deg,#076baa,#0099bd);">Talk to Connectia</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div style="background-color:#fbfcff" class="pb-4">
    <div class="container">
        <div class="row gy-4 mx-0 mx-lg-5">
            <div class="col-10 col-lg-4">
                 <div class="text-uppercase font-manrope font-700 light-black">CLIENTELE</div>
                <div class="font-manrope font-700 font-size-2xl mt-3 lh-1 light-black">Brands We<br> Work With</div>
            </div>
        </div>
    </div>

    <div class="mx-0 mx-lg-5 py-4">
        <div class="client-logos">
          <div><img loading="lazy" src="/static/images/clients/highland-logo.png" alt="Highland logo"></div>
    <!--<div><img loading="lazy" src="/static/images/clients/yiaco.webp" alt="Yiaco logo"></div>-->
    <!--<div><img loading="lazy" src="/static/images/clients/ajra-logo.png" alt="Ajra logo"></div>-->
    <div><img loading="lazy" src="/static/images/clients/al-hana-logo.png" alt="Al Hana logo"></div>
    <!--<div><img loading="lazy" src="/static/images/clients/champion-site-logo-.png" alt="Champion Site logo"></div>-->
    <!--<div><img loading="lazy" src="/static/images/clients/olish-logo.png" alt="Olish designs logo"></div>-->
    <!--<div><img loading="lazy" src="/static/images/clients/veer-techworks-logo.png" alt="Veer Techworks logo"></div>-->
    <!--<div><img loading="lazy" src="/static/images/clients/vual-logo.png" alt="Vual logo"></div>-->
    <!--<div><img loading="lazy" src="/static/images/clients/allure-logo.png" alt="Allure logo"></div>-->
    <!--<div><img loading="lazy" src="/static/images/clients/businer-logo.png" alt="Businer logo"></div>-->
    <div><img loading="lazy" src="/static/images/clients/dento-logo.png" alt="Dento logo"></div>
    <div><img loading="lazy" src="/static/images/clients/devshe-logo.png" alt="Devshe logo"></div>
    <!--<div><img loading="lazy" src="/static/images/clients/digitally-logo.png" alt="Digitally logo"></div>-->
    <!--<div><img loading="lazy" src="/static/images/clients/monaco-street-logo.png" alt="Monaco Street logo"></div>-->
    <!--<div><img loading="lazy" src="/static/images/clients/padalikha-logo.png" alt="Padalikha logo"></div>-->
    <!--<div><img loading="lazy" src="/static/images/clients/paw-logo.png" alt="Paw logo"></div>-->
    <div><img loading="lazy" src="/static/images/clients/rubber-soul-logo.png" alt="Rubber soul logo"></div>
    <!--<div><img loading="lazy" src="/static/images/clients/shield-logo.png" alt="Shield logo"></div>-->
    <!--<div><img loading="lazy" src="/static/images/clients/zohara-logo.png" alt="Zohara logo"></div>-->
    <div><img loading="lazy" src="/static/images/clients/sitelogo.png" alt="Green Valley Venture logo"></div>
    <div><img loading="lazy" src="/static/images/clients/d.png" alt="D Solutions Group logo"></div>
    <!--<div><img loading="lazy" src="/static/images/clients/powernet-logo.png" alt="Powernet logo"></div>-->
    <!--<div><img loading="lazy" src="/static/images/clients/ac.png" alt="Arabi Company logo"></div>-->
    <!--<div><img loading="lazy" src="/static/images/clients/design.png" alt="AlHayat International Company logo"></div>-->
    <!--<div><img loading="lazy" src="/static/images/clients/ztc.png" alt="Zana Trading logo"></div>-->
    <!--<div><img loading="lazy" src="/static/images/clients/website-logo.png" alt="KGA logo"></div>-->
    <!--<div><img loading="lazy" src="/static/images/clients/Bubble_diving_center.png" alt="Bubble diving center"></div>-->
    <!--<div><img loading="lazy" src="/static/images/clients/mawared.webp" alt="Mawared logo"></div>-->
    <div><img loading="lazy" src="/static/images/clients/isha-final.png" alt="ISHA GMP consultancy logo"></div>
    <div><img loading="lazy" src="/static/images/clients/ATECH.png" alt="Aftech IndustrialTrading"></div>
    <!--<div><img loading="lazy" src="/static/images/clients/Oil_basis_technology.png" alt="Oil Basis Technology Trading CO"></div>-->
    <!--<div><img loading="lazy" src="/static/images/clients/huckster1.png" alt="Huckster" style="width:80%;height:50%;"></div>-->
    <div><img loading="lazy" src="/static/images/clients/Goal_academy.png" alt="Go Out and Learn" style="width:50%;height:50%;"></div>
    <!--<div><img loading="lazy" src="/static/images/clients/Kudla_united.svg" alt="Kudla United FC"></div>-->
    <!--<div><img loading="lazy" src="/static/images/clients/LRC.png" alt="LRC"></div>-->
    
    <!--<div><img loading="lazy" src="/static/images/clients/hunkal_stay1.png" alt="Hunkal Stay"  style="width:80%;height:50%;"></div>-->
  
    <!--<div><img loading="lazy" src="/static/images/clients/loom.png" alt="Loom" style="width:50%;height:50%;"></div>-->
    <!--<div><img loading="lazy" src="/static/images/clients/lessgo.png" alt="Lezz Go"></div>-->
    <!--<div><img loading="lazy" src="/static/images/clients/Qudrat.webp" alt="Quadrat" style="width:150%;height:100%;"></div>-->
  </div>
        </div>
    </div>
</div>

      

<!-- ===== COOKIE BANNER HTML ===== -->
<div class="cookie-overlay" id="cookieOverlay"></div>

<div class="cookieConsentContainer" id="cookieConsentContainer">
    <div class="cookieTitle">🍪 Cookie Consent</div>
    <div class="cookieDesc">
        We use cookies to improve your experience. You can choose which cookies to allow.
        <a href="/privacy-policies.php" target="_blank">Privacy Policy</a>
    </div>
    <div class="cookie-btn-group">
        <div class="btn-row">
            <button class="cookie-accept-btn" onclick="cookieAcceptAll()">Accept All</button>
            <button class="cookie-reject-btn" onclick="cookieRejectAll()">Reject All</button>
        </div>
        <button class="cookie-manage-btn" onclick="openCookieModal()">⚙️ Manage Preferences</button>
    </div>
</div>

<!-- ===== PREFERENCES MODAL ===== -->
<div class="cookie-modal" id="cookieModal">
    <div class="cookie-modal-box">
        <h2>Cookie Preferences</h2>
        <p>Choose what you want to allow. Your preferences will be saved for 1 year.</p>

        <!-- Essential -->
        <div class="cookie-pref-item">
            <div class="cookie-pref-header">
                <h3>Essential</h3>
                <span class="always-active-badge">Always Active</span>
            </div>
            <p>Required for site functionality such as page navigation, secure login, and form submissions. These cannot be disabled.</p>
        </div>

        <!-- Analytics -->
        <div class="cookie-pref-item">
            <div class="cookie-pref-header">
                <h3>Analytics</h3>
                <label class="toggle-switch">
                    <input type="checkbox" id="pref-analytics">
                    <span class="toggle-slider"></span>
                </label>
            </div>
            <p>Help us understand how visitors interact with our website by collecting and reporting information anonymously (e.g. Google Analytics).</p>
        </div>

        <!-- Marketing -->
        <div class="cookie-pref-item">
            <div class="cookie-pref-header">
                <h3>Marketing</h3>
                <label class="toggle-switch">
                    <input type="checkbox" id="pref-marketing">
                    <span class="toggle-slider"></span>
                </label>
            </div>
            <p>Used to track visitors across websites to display relevant advertisements and marketing campaigns.</p>
        </div>

        <!-- Preferences -->
        <div class="cookie-pref-item">
            <div class="cookie-pref-header">
                <h3>Preferences</h3>
                <label class="toggle-switch">
                    <input type="checkbox" id="pref-preferences">
                    <span class="toggle-slider"></span>
                </label>
            </div>
            <p>Allow the website to remember your settings such as language, region, and display preferences for a better experience.</p>
        </div>

        <div class="cookie-modal-footer">
            <button class="modal-save-btn" onclick="savePreferences()">Save Preferences</button>
            <button class="modal-cancel-btn" onclick="closeCookieModal()">Cancel</button>
        </div>
    </div>
</div>
<!-- ===== COOKIE CONSENT STYLES ===== -->
<style>
/* --- Banner --- */
.cookieConsentContainer {
    z-index: 99999;
    width: 360px;
    box-sizing: border-box;
    padding: 28px;
    background: #1e1e2e;
    position: fixed;
    bottom: 30px;
    right: 30px;
    display: none;
    border-radius: 16px;
    box-shadow: 0 8px 32px rgba(0,0,0,0.4);
    font-family: Arial, sans-serif;
}
.cookieTitle {
    font-size: 18px;
    font-weight: 700;
    color: #fff;
    margin-bottom: 10px;
}
.cookieDesc {
    font-size: 13px;
    color: #aaa;
    line-height: 1.6;
    margin-bottom: 18px;
}
.cookieDesc a { color: #0099ff; text-decoration: underline; }

.cookie-btn-group { display: flex; flex-direction: column; gap: 8px; }
.btn-row { display: flex; gap: 8px; }

.cookie-accept-btn, .cookie-reject-btn, .cookie-manage-btn {
    flex: 1;
    padding: 10px;
    border-radius: 8px;
    font-size: 13px;
    font-weight: 600;
    cursor: pointer;
    border: none;
    text-align: center;
    transition: all 0.2s;
}
.cookie-accept-btn {
    background: linear-gradient(90deg, #076baa, #0099bd);
    color: #fff;
}
.cookie-accept-btn:hover { opacity: 0.85; }
.cookie-reject-btn {
    background: transparent;
    color: #ccc;
    border: 1px solid #555;
}
.cookie-reject-btn:hover { border-color: #aaa; color: #fff; }
.cookie-manage-btn {
    background: transparent;
    color: #0099ff;
    border: 1px solid #0099ff;
    width: 100%;
    flex: unset;
}
.cookie-manage-btn:hover { background: rgba(0,153,255,0.1); }

/* --- Overlay --- */
.cookie-overlay {
    display: none;
    position: fixed;
    inset: 0;
    background: rgba(0,0,0,0.6);
    z-index: 99998;
}
.cookie-overlay.active { display: block; }

/* --- Modal --- */
.cookie-modal {
    display: none;
    position: fixed;
    inset: 0;
    z-index: 100000;
    align-items: center;
    justify-content: center;
}
.cookie-modal.active { display: flex; }
.cookie-modal-box {
    background: #1e1e2e;
    border-radius: 16px;
    width: 500px;
    max-width: 95vw;
    max-height: 90vh;
    overflow-y: auto;
    padding: 32px;
    box-shadow: 0 8px 40px rgba(0,0,0,0.6);
    font-family: Arial, sans-serif;
}
.cookie-modal-box h2 {
    color: #fff;
    font-size: 20px;
    margin: 0 0 6px 0;
}
.cookie-modal-box > p {
    color: #aaa;
    font-size: 13px;
    line-height: 1.6;
    margin: 0 0 24px 0;
}

/* --- Preference Items --- */
.cookie-pref-item {
    border: 1px solid #2e2e45;
    border-radius: 12px;
    padding: 16px 18px;
    margin-bottom: 12px;
    background: #252538;
}
.cookie-pref-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 6px;
}
.cookie-pref-header h3 {
    color: #fff;
    font-size: 15px;
    margin: 0;
    font-weight: 600;
}
.cookie-pref-item p {
    color: #888;
    font-size: 12px;
    margin: 0;
    line-height: 1.5;
}

/* Always Active Badge */
.always-active-badge {
    font-size: 12px;
    font-weight: 600;
    color: #0099bd;
    background: rgba(0,153,189,0.12);
    padding: 4px 10px;
    border-radius: 20px;
    white-space: nowrap;
}

/* Toggle Switch */
.toggle-switch {
    position: relative;
    width: 44px;
    height: 24px;
    flex-shrink: 0;
}
.toggle-switch input { opacity: 0; width: 0; height: 0; }
.toggle-slider {
    position: absolute;
    inset: 0;
    background: #444;
    border-radius: 24px;
    cursor: pointer;
    transition: 0.3s;
}
.toggle-slider:before {
    content: "";
    position: absolute;
    height: 18px;
    width: 18px;
    left: 3px;
    bottom: 3px;
    background: #fff;
    border-radius: 50%;
    transition: 0.3s;
}
.toggle-switch input:checked + .toggle-slider { background: #0099bd; }
.toggle-switch input:checked + .toggle-slider:before { transform: translateX(20px); }
.toggle-switch input:disabled + .toggle-slider { cursor: not-allowed; opacity: 0.6; }

/* Modal Footer Buttons */
.cookie-modal-footer {
    display: flex;
    gap: 10px;
    margin-top: 24px;
}
.modal-save-btn {
    flex: 1;
    padding: 12px;
    background: linear-gradient(90deg, #076baa, #0099bd);
    color: #fff;
    border: none;
    border-radius: 8px;
    font-size: 14px;
    font-weight: 600;
    cursor: pointer;
    transition: opacity 0.2s;
}
.modal-save-btn:hover { opacity: 0.88; }
.modal-cancel-btn {
    flex: 1;
    padding: 12px;
    background: transparent;
    color: #aaa;
    border: 1px solid #555;
    border-radius: 8px;
    font-size: 14px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.2s;
}
.modal-cancel-btn:hover { border-color: #aaa; color: #fff; }

@media (max-width: 480px) {
    .cookieConsentContainer {
        bottom: 0; right: 0; left: 0;
        width: 100%;
        border-radius: 16px 16px 0 0;
    }
    .btn-row { flex-direction: column; }
}
</style>

      
    </div>
    <?php

    ?>
    <?php
    include 'partials/contactnow.php';
    ?>

    <!-- developed By Mohammed Rashad -->



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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="./static/js/index.js"></script>

    <!-- Main JS File -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    
    <link href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>

<!-- AOS -->
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>


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
        setInterval(function() {
            $('.anime_content').removeClass('anime')
            setTimeout(function() {
                $('.anime_content').addClass('anime')
            }, 20)

        }, 6000)
    </script>
    <!-- Milestone Scroll -->
    <script>
        $("#ButtonTest").click(function() {
            $("#NewTest").removeClass("modal-backdrop");
        });

        $(window).on('scroll', function() {
            var scrollTop = $(this).scrollTop()
            
            
        var first_item = 0;
        var second_item = 0;
        var third_item = 0;
        var fourth_item = 0;
            
            
if ($('.first_item').length) {

            first_item = $('.first_item').offset().top
            
}
if ($('.second_item').length) {
            second_item = $('.second_item').offset().top
            
}
if ($('.third_item').length) {
            third_item = $('.third_item').offset().top
}
            if ($('.fourth_item').length) {
            fourth_item = $('.fourth_item').offset().top
}

            

            distance1 = (first_item - scrollTop);
            distance2 = (second_item - scrollTop);
            distance3 = (third_item - scrollTop);
            distance4 = (fourth_item - scrollTop);

            if (distance1 >= 0 && distance1 <= 350) {
                $('.timeline-item').removeClass('not_blur')
                $('.first_item').addClass('not_blur')
            }

            if (distance2 >= 0 && distance2 <= 350) {
                $('.timeline-item').removeClass('not_blur')
                $('.second_item').addClass('not_blur')
            }
            if (distance3 >= 0 && distance3 <= 350) {
                $('.timeline-item').removeClass('not_blur')
                $('.third_item').addClass('not_blur')
            }
            if (distance4 >= 0 && distance4 <= 350) {
                $('.timeline-item').removeClass('not_blur')
                $('.fourth_item').addClass('not_blur')
            }

        });
    </script>




  <script>
    // ---- Helpers ----
    function setCookie(name, value, days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        document.cookie = name + "=" + value + "; expires=" + date.toUTCString() + "; path=/; SameSite=Lax";
    }

    function getCookie(name) {
        var nameEQ = name + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i].trim();
            if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length);
        }
        return null;
    }

    function pureFadeIn(elem) {
        var el = document.getElementById(elem);
        el.style.opacity = 0;
        el.style.display = "block";
        (function fade() {
            var val = parseFloat(el.style.opacity);
            if (!((val += 0.05) > 1)) {
                el.style.opacity = val;
                requestAnimationFrame(fade);
            }
        })();
    }

    function pureFadeOut(elem) {
        var el = document.getElementById(elem);
        el.style.opacity = 1;
        (function fade() {
            if ((el.style.opacity -= 0.05) < 0) {
                el.style.display = "none";
            } else {
                requestAnimationFrame(fade);
            }
        })();
    }

    // ---- Google Consent Update ----
    function updateGtagConsent(analytics, marketing) {
        if (typeof gtag !== 'undefined') {
            gtag('consent', 'update', {
                'analytics_storage': analytics ? 'granted' : 'denied',
                'ad_storage':        marketing  ? 'granted' : 'denied',
                'ad_user_data':      marketing  ? 'granted' : 'denied',
                'ad_personalization':marketing  ? 'granted' : 'denied',
            });
        }
    }

    // ---- Banner Logic ----
    function cookieConsent() {
        if (!getCookie('cookieConsent')) {
            pureFadeIn("cookieConsentContainer");
        }
    }

    function hideBanner() {
        pureFadeOut("cookieConsentContainer");
        pureFadeOut("cookieOverlay");
    }

    // ---- Accept All ----
    function cookieAcceptAll() {
        setCookie('cookieConsent',   'accepted', 365);
        setCookie('pref_analytics',  'true',     365);
        setCookie('pref_marketing',  'true',     365);
        setCookie('pref_preferences','true',     365);
        updateGtagConsent(true, true);
        hideBanner();
    }

    // ---- Reject All ----
    function cookieRejectAll() {
        setCookie('cookieConsent',   'rejected', 365);
        setCookie('pref_analytics',  'false',    365);
        setCookie('pref_marketing',  'false',    365);
        setCookie('pref_preferences','false',    365);
        updateGtagConsent(false, false);
        hideBanner();
    }

    // ---- Manage Preferences Modal ----
    function openCookieModal() {
        // Load saved prefs into toggles
        document.getElementById('pref-analytics').checked   = getCookie('pref_analytics')   === 'true';
        document.getElementById('pref-marketing').checked   = getCookie('pref_marketing')   === 'true';
        document.getElementById('pref-preferences').checked = getCookie('pref_preferences') === 'true';

        document.getElementById('cookieModal').classList.add('active');
        document.getElementById('cookieOverlay').classList.add('active');
        document.getElementById('cookieOverlay').style.display = 'block';
    }

    function closeCookieModal() {
        document.getElementById('cookieModal').classList.remove('active');
        document.getElementById('cookieOverlay').classList.remove('active');
        document.getElementById('cookieOverlay').style.display = 'none';
    }

    // ---- Save Preferences ----
    function savePreferences() {
        var analytics   = document.getElementById('pref-analytics').checked;
        var marketing   = document.getElementById('pref-marketing').checked;
        var preferences = document.getElementById('pref-preferences').checked;

        setCookie('cookieConsent',   'custom', 365);
        setCookie('pref_analytics',  analytics   ? 'true' : 'false', 365);
        setCookie('pref_marketing',  marketing   ? 'true' : 'false', 365);
        setCookie('pref_preferences',preferences ? 'true' : 'false', 365);

        updateGtagConsent(analytics, marketing);

        closeCookieModal();
        hideBanner();
    }

    // ---- Init ----
    window.addEventListener('load', function () {
        cookieConsent();
    });
</script>

    <!-- <script src="//code.tidio.co/zwua3sm7byo2s4yelqjhwlhigosiagbb.js" async></script>-->
     <!-- <script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>-->

</body>

</html>