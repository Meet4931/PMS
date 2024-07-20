<?php
session_start();
?>
<html class="no-js" lang="en" dir="ltr">


    <!-- Mirrored from pixelwibes.com/template/my-task/html/dist/ui-elements/auth-password-reset.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Jul 2024 12:59:01 GMT -->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>:: My-Task:: Password Reset</title>
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

                            <div class="col-lg-6 d-flex justify-content-center align-items-center border-0 rounded-lg auth-h100">
                                <div class="w-100 p-3 p-md-5 card border-0 bg-dark text-light" style="max-width: 32rem;">
                                    <!-- Form -->
                                    <form method="post" class="row g-1 p-3 p-md-4">
                                        <div class="col-12 text-center mb-1 mb-lg-5">
                                            <img src="../assets/images/forgot-password.svg" class="w240 mb-4" alt="" />
                                            <h1>Forgot password?</h1>
                                            <span>Enter the email address you used when you joined and we'll send you instructions to reset your password.</span>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label">Email address</label>
                                                <input type="email" class="form-control form-control-lg" placeholder="name@example.com" name="txtemail"
                                                       <?php if (isset($_POST['txtemail'])) echo 'value="' . htmlspecialchars($_POST['txtemail']) . '"'; ?> required>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label">OTP Verification</label>
                                                <input type="tel" name="verify"  maxlength="6" class="form-control form-control-lg" placeholder="Enter OTP"
                                                       <?php if (isset($_POST['verify'])) echo 'value="' . htmlspecialchars($_POST['verify']) . '"'; ?>>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-2">
                                                <button type="submit" name="btnsend" class="form-control form-control-lg">Send OTP</button>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-2">
                                                <button type="submit" name="btnver" class="form-control form-control-lg">Verify OTP</button>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label">Make New Password</label>
                                                <input type="password" name="newpassword" class="form-control form-control-lg" placeholder="********************">
                                            </div>
                                        </div>
                                        <div class="col-12 text-center mt-4">
                                            <button type="submit" name="btnchange" class="btn btn-lg btn-block btn-light lift text-uppercase">SUBMIT</button>
                                        </div>
                                        <div class="col-12 text-center mt-4">
                                            <span class="text-muted"><a href="auth-signin.html" class="text-secondary">Back to Sign in</a></span>
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

        if (isset($_POST['btnsend'])) {
            sendotp();
        } else if (isset($_POST['btnver'])) {
            verifyOTP();
        } else if (isset($_POST['btnchange'])) {

            store_data();
        }


        if (isset($_POST['btnver'])) {
            $_SESSION['vstatus'] = 1;
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

                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = '22bmiit055@gmail.com'; //enter email address
                $mail->Password = 'iaorlmeokkkimlkw'; // Enter email password
                $mail->SMTPSecure = 'tls';
                $mail->Port = 587;

                // Sender and recipient
                $mail->setFrom('22bmiit055@gmail.com', 'Milestone Master');
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
                    $_SESSION['verifiystatus'] = 1;
                } else {
                    echo '<script>alert("OTP verification failed.Please again send OTP.");</script>';
                    $_SESSION['verifiystatus'] = 0;
                }
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
                            <h2>New OTP</h2>
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

        function store_data() {
            ob_start();

            $hostname = "localhost";
            $username = "root";
            $password = "";
            $database = "pms";

// Connect to the database
            $c = mysqli_connect($hostname, $username, $password, $database);

            if (!$c) {
                die("Connection failed: " . mysqli_connect_error());
            } else {
                
                if ($_SESSION['vstatus'] == 1 and $_SESSION['verifiystatus'] == 1) {
                    // Retrieve and sanitize user inputs
                    $email = mysqli_real_escape_string($c, $_POST['txtemail']);
                    $pass = password_hash($_POST['newpassword'], PASSWORD_DEFAULT);

                    // Create the update query
                    $qu = "UPDATE student SET password='$pass' WHERE email='$email'";

                    // Execute the query
                    $q = mysqli_query($c, $qu);

                    if (!$q) {
                        // Display the error if the query failed
                        $e = mysqli_error($c);
                        die("Error: " . $e);
                    } else {
                        // Display success message and redirect
                        echo '<script>alert("Password Change Successful")</script>';
                        echo '<script>location.replace("auth-signin.php")</script>';
                    }
                } else {
                    echo '<script>alert("Something Wrong to verify")</script>';
                }
                // Close the database connection
                mysqli_close($c);
            }
        }
        ?>



        <script src="../assets/bundles/libscripts.bundle.js"></script>

    </body>

    <!-- Mirrored from pixelwibes.com/template/my-task/html/dist/ui-elements/auth-password-reset.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Jul 2024 12:59:01 GMT -->
</html>