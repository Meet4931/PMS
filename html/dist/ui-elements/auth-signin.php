<?php
session_start();
?><!doctype html>
<html class="no-js" lang="en" dir="ltr">


    <!-- Mirrored from pixelwibes.com/template/my-task/html/dist/ui-elements/auth-signin.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Jul 2024 12:58:58 GMT -->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>:: My-Task:: Signin</title>
        <link rel="icon" href="../favicon.ico" type="image/x-icon"> <!-- Favicon-->
        <!-- project css file  -->
        <link rel="stylesheet" href="../assets/css/my-task.style.min.css">
    </head>

    <body  data-mytask="theme-indigo">

        <div id="mytask-layout">

            <!-- main body area -->
            <div class="main p-2 py-3 p-xl-5 ">

                <!-- Body: Body -->
                <div class="body d-flex p-0 p-xl-5">
                    <div class="container-xxl">

                        <div class="row g-0">
                            <div class="col-lg-6 d-none d-lg-flex justify-content-center align-items-center rounded-lg auth-h100">
                                <div style="max-width: 25rem;">
                                    <div class="text-center mb-5">
                                        <svg  width="4rem" fill="currentColor" class="bi bi-clipboard-check" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                        <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                                        <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                                        </svg>
                                    </div>
                                    <div class="mb-5">
                                        <h2 class="color-900 text-center">My-Task Let's Management Better</h2>
                                    </div>
                                    <!-- Image block -->
                                    <div class="">
                                        <img src="../assets/images/login-img.svg" alt="login-img">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 d-flex justify-content-center align-items-center border-0 rounded-lg auth-h100">
                                <div class="w-100 p-3 p-md-5 card border-0 bg-dark text-light" style="max-width: 32rem;">
                                    <!-- Form -->
                                    <form method="post" class="row g-1 p-3 p-md-4">
                                        <div class="col-12 text-center mb-1 mb-lg-5">
                                            <h1>Sign in</h1>
                                            <span>Free access to our dashboard.</span>
                                        </div>
                                        <div class="col-12 text-center mb-4">
                                            <a class="btn btn-lg btn-outline-secondary btn-block" href="#">
                                                <span class="d-flex justify-content-center align-items-center">
                                                    <img class="avatar xs me-2" src="../assets/images/google.svg" alt="Image Description">
                                                    Sign in with Google
                                                </span>
                                            </a>
                                            <span class="dividers text-muted mt-4">OR</span>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label">Email address</label>
                                                <input type="email" name="txtemail" class="form-control form-control-lg" placeholder="name@example.com"
                                                       <?php if (isset($_POST['txtemail'])) echo 'value="' . htmlspecialchars($_POST['txtemail']) . '"'; ?>>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-2">
                                                <div class="form-label">
                                                    <span class="d-flex justify-content-between align-items-center">
                                                        Password
                                                        <a class="text-secondary" href="auth-password-reset.php">Forgot Password?</a>
                                                    </span>
                                                </div>
                                                <input type="password" class="form-control form-control-lg" name="txtpass" placeholder="***************">
                                            </div>
                                        </div>

                                        <div class="col-12 text-center mt-4">
                                            <input type="submit" name="btnlogin" class="btn btn-lg btn-block btn-light lift text-uppercase" value="SIGN IN" atl="signin">
                                        </div>
                                        <div class="col-12 text-center mt-4">
                                            <span class="text-muted">Don't have an account yet? <a href="auth-signup.php" class="text-secondary">Sign up here</a></span>
                                        </div>
                                    </form>
                                    <!-- End Form -->
                                </div>
                            </div>
                        </div> <!-- End Row -->
                    </div>
                </div>
            </div>
        </div>
        <?php
        if (isset($_POST['btnlogin'])) {
            $hostname = "localhost";
            $username = "root";
            $password = "";
            $database = "pms";

            $conn = mysqli_connect($hostname, $username, $password, $database);

            if (!$conn) {
                echo '<script>alert("Some Went Wrong While Connecting server.");</script>';
            } else {
                $email = $_POST['txtemail'];
                $pass = $_POST['txtpass'];

                $query = "SELECT password FROM student WHERE email='$email'";
                $qu = mysqli_query($conn, $query);

                $num_rows = mysqli_num_rows($qu);
                echo '<script>alert("Number of rows selected: ' . $num_rows . '");</script>';

                if ($num_rows == 1) {
                    while ($r = mysqli_fetch_assoc($qu)) {
                        $dbpass = $r['password'];
                        echo "<script>alert('Stored Password Hash: $dbpass');</script>";
                        echo "<script>alert('Entered Password: $pass');</script>";
                        echo "<script>alert('password_verify($pass,$dbpass)');</script>";
                        if (password_verify($pass,$dbpass)) {
                            echo '<script>alert("Login Successfully");</script>';
                            echo '<script>location.replace("C:/xampp/htdocs/Class/html/index.php")</script>';
                        } else {
                            echo '<script>alert("Wrong Password");</script>';
                        }
                    }
                } else {
                    echo '<script>alert("No user found with the given email.");</script>';
                }
                mysqli_close($conn);
            }
        }
        ?>
        <?php
//        if (isset($_POST['btnlogin'])) {
//            $hostname = "localhost";
//            $username = "root";
//            $password = "";
//            $database = "pms";
//            echo '<script>alert("btn chale chhe");</script>';
//            $c = mysqli_connect($hostname, $username, $password, $database);
//            if (!$c) {
//                echo '<script>alert("Some Went Wrong While Connecting server.");</script>';
//            } else {
//                echo '<script>alert("Connection Succesfully");</script>';
//                $email = $_POST['txtemail'];
//                $pass = $_POST['txtpass'];
//                
//                $qu = mysqli_query($conn, "select password from student where email='$email'");
//              $qu = "select password from student where email='$email'";
//                if (!$qu) {
//                    echo '<script>alert("User Name not Found");</script>';
//                }
//               
//                $num_rows = mysqli_num_rows($qu);
//                echo '<script>alert("Number of rows selected: ' . $num_rows . '");</script>';
//                
//                while ($r = mysqli_fetch_row($qu)) {
//                    echo '<script>alert("dcgfghh");</script>';
//                    $dpassword = $r[0];
//                    
//                }
//                echo "<script>alert('$dpassword');</script>";
//                if (password_verify($pass, $dpassword)) {
//                    echo '<script>alert("Login Succesfully");</script>';
//                    echo '<script>location.replace("C:\xampp\htdocs\Class\html\index.php")</script>';
//                } else {
//                    echo '<script>alert("Wromg Password");</script>';
//                }
//
//                $q = mysqli_query($c, $qu);
//
//                if (!$q) {
//                    $e = mysqli_error($c);
//                    echo "<script>alert('error occur');</script>";
//                } else {
//                    echo "<script>alert('User data stored successfully.');</script>";
//                }
//
//                mysqli_close($c);
//            }
//        }
//        
        ?>
        <!-- Jquery Core Js -->
        <script src="../assets/bundles/libscripts.bundle.js"></script>

    </body>

    <!-- Mirrored from pixelwibes.com/template/my-task/html/dist/ui-elements/auth-signin.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Jul 2024 12:58:58 GMT -->
</html>