<?php
session_start();
if (isset($_SESSION["auth"])) {
    header('location: index.php');
}
include './layout/_header.php';



?>


</head>
<script type="text/javascript">
    window.history.forward();
</script>
<body>
    <div class="app">
        <div class="container-fluid p-h-0 p-v-20 bg full-height d-flex" style="background-image: url('assets/images/others/login-3.png')">
            <div class="d-flex flex-column justify-content-between w-100">
                <div class="container d-flex h-100">
                    <div class="row align-items-center w-100">
                        <div class="col-md-7 col-lg-5 m-h-auto">
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between m-b-30">
                                        <img class="img-fluid" alt="" src="./assets/images/logo/connlogo2.png">
                                        <h2 class="m-b-0">Log In</h2>
                                    </div>
                                    <?php
                                    if (isset($_SESSION['loginerror'])) : ?>
                                        <div class="alert alert-danger">
                                            <div class="d-flex align-items-center justify-content-start">
                                                <span class="alert-icon">
                                                    <i class="anticon anticon-close-o"></i>
                                                </span>
                                                <span><?= $_SESSION['loginerror'] ?></span>
                                            </div>
                                        </div>
                                    <?php
                                        unset($_SESSION['loginerror']);
                                    endif
                                    ?>
                                    <form action="action/action.php" method="POST">
                                        <!--action-->

                                        <input type="hidden" name="action" value="login">

                                        <!--action-->
                                        <div class="form-group">
                                            <label class="font-weight-semibold" for="userName">Email Address:</label>
                                            <div class="input-affix">
                                                <i class="prefix-icon anticon anticon-user"></i>
                                                <input type="text" class="form-control" name="username" id="userName" placeholder="Email Address">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-semibold" for="password">Password:</label>
                                            <!-- <a class="float-right font-size-13 text-muted" href="#">Forget Password?</a> -->
                                            <div class="input-affix m-b-10">
                                                <i class="prefix-icon anticon anticon-lock"></i>
                                                <input type="password" class="form-control" name="password" id="password" placeholder="Enter the Password">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="d-flex align-items-center justify-content-end">
                                                <!-- <span class="font-size-13 text-muted">
                                                    Don't have an account?
                                                    <a class="small" href="#"> Signup</a>
                                                </span> -->
                                                <button type="submit" class="btn btn-primary">Log In</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="d-none d-md-flex p-h-40 justify-content-between">
                    <span class="">© 2019 ThemeNate</span>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a class="text-dark text-link" href="#">Legal</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="text-dark text-link" href="#">Privacy</a>
                        </li>
                    </ul>
                </div> -->
            </div>
        </div>
    </div>


    <?php include './layout/_scripts.php'; ?>

    <!-- scripts -->
</body>


</html>