<?php
session_start();
?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">


    <!-- Mirrored from pixelwibes.com/template/my-task/html/dist/ui-elements/auth-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Jul 2024 12:58:58 GMT -->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>:: My-Task:: Signup</title>
        <link rel="icon" href="../favicon.ico" type="image/x-icon"> <!-- Favicon-->
        <!-- project css file  -->
        <link rel="stylesheet" href="../assets/css/my-task.style.min.css">
    </head>

    <body  data-mytask="theme-indigo">

        <div id="mytask-layout">

            <!-- main body area -->
            <div class="main p-2 py-3 p-xl-5">

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

                            <div class="col-lg-6 d-flex justify-content-center align-items-center border-0 rounded-lg auth-h100" style="padding-top: 350px;border-radius: 50px; ">
                                <div class="w-100 p-3 p-md-5 card border-0 bg-dark text-light" style="max-width: 32rem;">
                                    <!-- Form -->
                                    <form class="row g-1 p-3 p-md-4" method="post">
                                        <div class="col-12 text-center mb-1 mb-lg-5">
                                            <h1>Create your account</h1>
                                            <span>Free access to our dashboard.</span>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label">Enrollment No</label>
                                                <input type="text" name="txten" class="form-control form-control-lg" placeholder="Enrollment No" required=""
                                                       <?php if (isset($_POST['txten'])) echo 'value="' . htmlspecialchars($_POST['txten']) . '"'; ?> required>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-2">
                                                <label class="form-label">Full Name</label>
                                                <input type="text" name="txtfirstname" class="form-control form-control-lg" placeholder="First Name" required=""
                                                       <?php if (isset($_POST['txtfirstname'])) echo 'value="' . htmlspecialchars($_POST['txtfirstname']) . '"'; ?> required>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-2">
                                                <label class="form-label">&nbsp;</label>
                                                <input type="text" name="txtlastname" class="form-control form-control-lg" placeholder="Last Name"
                                                       <?php if (isset($_POST['txtlastname'])) echo 'value="' . htmlspecialchars($_POST['txtlastname']) . '"'; ?> required>
                                            </div>
                                        </div>

                                        <div class="col-8">
                                            <div class="mb-2">
                                                <label class="form-label">Contact Number</label>
                                                <input type="tel" pattern="\d{10}" name="txtMobileNo"  class="form-control form-control-lg" maxlength="10" placeholder="xxxxx xxxxx" required=""
                                                       <?php if (isset($_POST['txtMobileNo'])) echo 'value="' . htmlspecialchars($_POST['txtMobileNo']) . '"'; ?> required>
                                            </div>
                                        </div>

                                        <div class="col-4">
                                            <div class="mb-2">
                                                <label class="form-label">Semester</label>
<!--                                                <select class="form-control form-control-lg"  required="">
                                                    <option name="sem[]"></option>
                                                    <option value="5" name="sem1" <?php if (isset($_POST['sem1'])) echo 'value="' . htmlspecialchars($_POST['sem1']) . '"'; ?>>5</option>
                                                    <option value="7" name="sem2" <?php if (isset($_POST['sem2'])) echo 'value="' . htmlspecialchars($_POST['sem2']) . '"'; ?>>7</option>

                                                </select>-->
                                                <input type="tel" pattern="\d{1}" maxlength="1" name="txtsem" placeholder="5 or 7" class="form-control form-control-lg" 
                                                       <?php if (isset($_POST['txtsem'])) echo 'value="' . htmlspecialchars($_POST['txtsem']) . '"'; ?> required>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label">Email address</label>
                                                <input type="email" class="form-control form-control-lg" placeholder="name@example.com" name="txtemail"
                                                       <?php if (isset($_POST['txtemail'])) echo 'value="' . htmlspecialchars($_POST['txtemail']) . '"'; ?> required>
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="mb-2">
                                                <label class="form-label">OTP</label>
                                                <button type="submit" name="otpbtn" class="form-control form-control-lg">Send OTP</button>
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="mb-2">
                                                <label class="form-label">&nbsp;</label>
                                                <input type="tel" pattern="[0-9]{6}" maxlength="6" class="form-control form-control-lg" name="verify" placeholder="Enter OTP"
                                                       <?php if (isset($_POST['verify'])) echo 'value="' . htmlspecialchars($_POST['verify']) . '"'; ?>>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-2">
                                                <label class="form-label">Verify</label>
                                                <button type="submit" name="varbtn" class="form-control form-control-lg">Verify OTP</button>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label">Password</label>
                                                <input type="password" name="txtpassword" class="form-control form-control-lg" placeholder="8+ characters required" 
                                                <?php if (isset($_POST['txtpassword'])) echo 'value="' . htmlspecialchars($_POST['txtpassword']) . '"'; ?> 
                                                       pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" >
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label">Confirm password</label>
                                                <input type="password" name="txtconfirm_password" class="form-control form-control-lg" placeholder="8+ characters required"
                                                <?php if (isset($_POST['txtconfirm_password'])) echo 'value="' . htmlspecialchars($_POST['txtconfirm_password']) . '"'; ?> 
                                                       pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" >
                                            </div>
                                        </div>
                                        <div class="col-12 text-center mt-4">
                                            <input type="submit" name="btnsignup" class="btn btn-lg btn-block btn-light lift text-uppercase" >
                                            <!--<a href="auth-signin.html" name="btnsignup" class="btn btn-lg btn-block btn-light lift text-uppercase" alt="SIGNUP">SIGN UP</a>-->
                                        </div>
                                        <div class="col-12 text-center mt-4">
                                            <span class="text-muted">Already have an account? <a href="auth-signin.php" title="Sign in" class="text-secondary">Sign in here</a></span>
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

        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\Exception;

        require 'C:\xampp\htdocs\OTP\loginpage\PHPMailer-master\src\PHPMailer.php';
        require 'C:\xampp\htdocs\OTP\loginpage\PHPMailer-master\src\Exception.php';
        require 'C:\xampp\htdocs\OTP\loginpage\PHPMailer-master\src\SMTP.php';

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "test";
        $otp_validity_duration = 300; // OTP validity duration in seconds (e.g., 5 minutes)

        if (isset($_POST['otpbtn'])) {
            sendotp();
        } elseif (isset($_POST['varbtn'])) {
            verifyOTP();
        } elseif (isset($_POST['btnsignup'])) {
            signup();
        }

        function sendotp() {
            if (isset($_POST['txtemail'])) {
                sendEmail($_POST['txtemail']);
                $_SESSION['vemail'] = $_POST['txtemail'];
            }
        }

        function sendEmail($recipient_email) {
            try {
                $recipient_email = $_POST['txtemail'];
                $otp = mt_rand(100000, 999999);
                $otp_generation_time = time();

                $mail = new PHPMailer(true);

                // SMTP settings
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = '22bmiit055@gmail.com'; //enter email address
                $mail->Password = 'iaorlmeokkkimlkw'; // Enter email password
                $mail->SMTPSecure = 'tls';
                $mail->Port = 587;

                // Sender and recipient
                $mail->setFrom('22bmiit055@gmail.com', 'Meet');
                $mail->addAddress($recipient_email);

                $mail->isHTML(true);
                $mail->Subject = 'OTP for registration';
                $mail->Body = getEmailTemplate($otp);
                $mail->send();

                $_SESSION['otp'] = $otp;
                $_SESSION['email'] = $recipient_email;

                $_SESSION['otp_generation_time'] = $otp_generation_time;
                echo "<script>alert('OTP has been sent to your email.')</script>";
            } catch (Exception $e) {
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            }
        }

        function verifyOTP() {
            if (isset($_POST['verify'])) {

                $enteredOTP = $_POST['verify'];
                $storedOTP = $_SESSION['otp'];
                $email = $_SESSION['email'];
                if ($enteredOTP == null) {
                    echo '<script>alert("Enter OTP First");</script>';
                }
                if ($enteredOTP == $storedOTP) {
                    echo '<script>alert("OTP verification successful for email: ' . $email . '");</script>';
                    $_SESSION['verifystatus'] = 1;
                } else {
                    echo '<script>alert("OTP verification failed.A new OTP is send.");</script>';
                    $_SESSION['verifystatus'] = 0;
                    sendEmail($recipient_email);
                }
            }
        }

        function signup() {
            if (isset($_POST['txtpassword']) && isset($_POST['txtconfirm_password'])) {
                $password = $_POST['txtpassword'];
                $passstatus = 0;
                $confirmPassword = $_POST['txtconfirm_password'];
                if ($password !== $confirmPassword) {
                    echo '<script>alert("Passwords do not match. Please try again.");</script>';
                } elseif (empty($password)) {
                    echo '<script>alert("Password not valid.");</script>';
                } else {
                    $passstatus = 1;
                }
            }

            if ($passstatus == 1 && isset($_SESSION['verifystatus']) && $_SESSION['verifystatus'] == 1) {
                
                if ($_SESSION['vemail'] == $_POST['txtemail']) {
                    
                    store_data();
                    echo "<script>alert('sxrdctfvgbuhnj')</script>";
                    session_destroy();
//                    header("Location: auth-signin.php");
//                    exit();
                } else {
                    echo '<script>alert("Chnage the Email verify the email First");</script>';
                }
            } else if (isset($_SESSION['verifystatus']) && $_SESSION['verifystatus'] == 0) {
                echo '<script>alert("First complete email verification.");</script>';
            } else {
                echo '<script>alert("Some thing is missing.");</script>';
            }
        }

        function handle_errors($buffer) {
            // Only output the buffer if there are no errors
            if (headers_sent()) {
                return $buffer;
            } else {
                ob_end_clean();
                return false;
            }
        }

// Flush the output buffer
        ob_end_flush();

        function store_data() {
            ob_start();

            $hostname = "localhost";
            $username = "root";
            $password = "";
            $database = "pms";

            $c = mysqli_connect($hostname, $username, $password, $database);
            if (!$c) {
                die("Connection failed: " . mysqli_connect_error());
            } else {
                //echo '<script>alert("Connection Succesfully");</script>';
                $enro=$_POST['txten'];
                $fname = $_POST['txtfirstname'];
                $lname = $_POST['txtlastname'];
                $mo = $_POST['txtMobileNo'];
                $sem = $_POST['txtsem'];
                $email = $_POST['txtemail'];
                $pass = password_hash($_POST['txtpassword'], PASSWORD_DEFAULT);
                
                $qu = "INSERT INTO student (enrollmentNo,firstname, lastname, contact, semester, email, password) VALUES ($enro, '$fname', '$lname', $mo,$sem, '$email', '$pass')";

                $q = mysqli_query($c, $qu);

                if (!$q) {
                    $e = mysqli_error($c);
                    die("Error: " . $e);
                } else {
                    //echo "<script>alert('User data stored successfully.');</script>";
                    //header("location:sign-in.php?email=$email");
                    // exit();
                    echo '<script>location.replace("auth-signin.php?email=' . urlencode($email) . '")</script>';
                }
                ob_end_flush();
                mysqli_close($c);
            }
        }

        function getEmailTemplate($otp) {
            return '
                <html>
                <head>
                    <style>
                        body {
                            font-family: Arial, sans-serif;
                            background-color: #f4f4f4;
                            margin: 0;
                            padding: 0;
                        }
                        .container {
                            width: 100%;
                            max-width: 600px;
                            margin: 0 auto;
                            background-color: #ffffff;
                            padding: 20px;
                            border: 1px solid #ddd;
                            border-radius: 4px;
                        }
                        .header {
                            background-color: #004f9f;
                            color: #ffffff;
                            padding: 10px;
                            text-align: center;
                        }
                        .content {
                            margin-top: 20px;
                            text-align: center;
                        }
                        .footer {
                            background-color: #f4f4f4;
                            color: #666666;
                            padding: 10px;
                            text-align: center;
                            font-size: 12px;
                            border-top: 1px solid #ddd;
                        }
                        .otp-code {
                            font-size: 24px;
                            font-weight: bold;
                            margin: 20px 0;
                        }
                    </style>
                </head>
                <body>
                    <div class="container">
                        <div class="header">
                            <h1>PMS</h1>
                        </div>
                        <div class="content">
                            <p>Dear User,</p>
                            <p>Your One-Time Password (OTP) for email verification is:</p>
                            <div class="otp-code">' . $otp . '</div>
                            <p>Please use this OTP to verify your email address.</p>
                            <p>If you did not request this OTP, please ignore this email.</p>
                        </div>
                        <div class="footer">
                            <p>© 2024 E-Auction System. All rights reserved.</p>
                            <p><a href="#">Terms of Use</a> | <a href="#">Privacy Policy</a></p>
                        </div>
                    </div>
                </body>
                </html>';
        }
        ?>

        <!-- Jquery Core Js -->
        <script src="../assets/bundles/libscripts.bundle.js"></script>

    </body>

    <!-- Mirrored from pixelwibes.com/template/my-task/html/dist/ui-elements/auth-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Jul 2024 12:58:58 GMT -->
</html>