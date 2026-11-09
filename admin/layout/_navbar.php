</head>
<?php

// var_dump($_SESSION["auth"]);
// die();
?>

<body>
    <div class="app">
        <div class="layout is-side-nav-dark">
            <div class="header">
                <div class="logo logo-dark ">
                    <div class="d-flex align-items-center justify-content-center h-100">
                        <a href="index.html">

                            <img src="assets/images/logo/connlogo2.png" alt="Logo" style="width:80px">
                            <img class="logo-fold" src="assets/images/logo/connlogo2.png" alt="Logo" style="width:40px">
                        </a>
                    </div>


                </div>
                <div class="logo logo-white">
                    <a href="index.html">
                        <img src="assets/images/logo/connlogo1.png" alt="Logo">
                        <img class="logo-fold" src="assets/images/logo/connlogo1.png" alt="Logo">
                    </a>
                </div>
                <div class="nav-wrap">
                    <ul class="nav-left">
                        <li class="desktop-toggle">
                            <a href="javascript:void(0);">
                                <i class="anticon"></i>
                            </a>
                        </li>
                        <li class="mobile-toggle">
                            <a href="javascript:void(0);">
                                <i class="anticon"></i>
                            </a>
                        </li>

                    </ul>
                    <ul class="nav-right">

                        <li class="dropdown dropdown-animated scale-left">
                            <div class="pointer" data-toggle="dropdown">
                                <div class="avatar avatar-image  m-h-10 m-r-15">
                                    <!-- <img src="assets/images/avatars/thumb-3.jpg" alt=""> -->

                                    <div class="avatar avatar-icon avatar-blue">
                                        <i class="anticon anticon-user"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="p-b-15 p-t-20 dropdown-menu pop-profile">
                                <div class="p-h-20 p-b-15 m-b-10 border-bottom">
                                    <div class="d-flex m-r-50">
                                        <div class="avatar avatar-lg avatar-image">
                                            <!-- <img src="assets/images/avatars/thumb-3.jpg" alt=""> -->
                                            <div class="avatar avatar-icon avatar-blue avatar-lg">
                                                <i class="anticon anticon-user"></i>
                                            </div>
                                        </div>

                                        <div class="m-l-10">
                                            <p class="m-b-0 text-dark font-weight-semibold"><?= $_SESSION["auth"]->name ?></p>
                                            <p class="m-b-0 opacity-07"><?= $_SESSION["auth"]->email ?></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- <a href="javascript:void(0);" class="dropdown-item d-block p-h-15 p-v-10">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <i class="anticon opacity-04 font-size-16 anticon-user"></i>
                                            <span class="m-l-10">Edit Profile</span>
                                        </div>
                                        <i class="anticon font-size-10 anticon-right"></i>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" class="dropdown-item d-block p-h-15 p-v-10">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <i class="anticon opacity-04 font-size-16 anticon-lock"></i>
                                            <span class="m-l-10">Account Setting</span>
                                        </div>
                                        <i class="anticon font-size-10 anticon-right"></i>
                                    </div>
                                </a> -->

                                <form action="action/action.php" method="POST">
                                    <input type="hidden" name="action" value="logout">
                                    <button type="submit" class="dropdown-item d-block p-h-15 p-v-10">

                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>
                                                <i class="anticon opacity-04 font-size-16 anticon-logout"></i>
                                                <span class="m-l-10">Logout</span>
                                            </div>
                                            <i class="anticon font-size-10 anticon-right"></i>
                                        </div>
                                    </button>
                                </form>
                                <!-- <a href="javascript:void(0);" class="dropdown-item d-block p-h-15 p-v-10">


                                </a> -->
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
            <?php include(__DIR__ . '/_sidebar.php'); ?>