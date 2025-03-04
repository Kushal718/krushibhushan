<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none">

<head>

    <meta charset="utf-8" />
    <title>Krushibhushan | Farmer Right</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="../img/favicon.png">

    <!-- Layout config Js -->
    <script src="./assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="./assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="./assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="./assets/css/custom.min.css" rel="stylesheet" type="text/css" />
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="./assets/js/jquery.validate.min.js" type="text/javascript"></script>

</head>

<body>

    <!-- auth-page wrapper -->
    <div class="auth-page-wrapper auth-bg-cover py-5 d-flex justify-content-center align-items-center min-vh-100">
        <div class="bg-overlay"></div>
        <!-- auth-page content -->
        <div class="auth-page-content overflow-hidden pt-lg-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card overflow-hidden">
                            <div class="row g-0">
                                <div class="col-lg-6">
                                    <div class="p-lg-5 p-4 h-100" >
                                        
                                        <div class="bg-overlay" style="background-image:url('assets/images/k-logo.png');"></div>
                                        <div class="position-fixed h-100 d-flex flex-column">
                                            <div class="mb-4">
                                                <a href="index.html" class="d-block">
                                                    
                                                </a> 
                                            </div>
                                            <div class="mt-auto">
                                                

                                                <div id="qoutescarouselIndicators" class="carousel slide" data-bs-ride="carousel">
                                                    <!-- <div class="carousel-indicators">
                                                        <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                        <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                        <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                                    </div> -->
                                                    <div class="carousel-inner text-center text-white-50 pb-5">
                                                        <div class="carousel-item active">
                                                            <p class="fs-15 fst-italic " style="color: black; font-weight:bold;">" Great! Clean code, clean design, easy for customization. Thanks very much! "</p>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <p class="fs-15 fst-italic" style="color: black; font-weight:bold;">" The theme is really great with an amazing customer support."</p>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <p class="fs-15 fst-italic" style="color: black; font-weight:bold;">" Great! Clean code, clean design, easy for customization. Thanks very much! "</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end carousel -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->

                                <div class="col-lg-6">
                                    <div class="p-lg-5 p-4" style="margin-top: -30px;">
                                        <div>
                                            <h5 class="text-primary">Welcome Back !</h5>
                                            <p class="text-muted">Sign in to continue to Krushibhushan.</p>
                                        </div>

                                        <div class="mt-4">
                                            <form class="needs-validation" action="login-validate.php" id="login-form">

                                                <div class="mb-3">
                                                    <label for="useremail" class="form-label">Mobile No <span class="text-danger">*</span></label>
                                                    <input type="number" class="form-control" id="mobile_number" name="mobile_number" placeholder="Enter mobile number" required>
                                                    <div class="invalid-feedback">
                                                        Please enter mobile number
                                                    </div>
                                                </div>


                                                <div class="mb-3">
                                                    <label class="form-label" for="password-input">Password</label>
                                                    <div class="position-relative auth-pass-inputgroup">
                                                        <input type="password" name="password" class="form-control pe-5 password-input" onpaste="return false" placeholder="Enter password" id="password-input" name="password-input" aria-describedby="passwordInput" required>
                                                        <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                                        <div class="invalid-feedback">
                                                            Please enter password
                                                        </div>
                                                    </div>
                                                </div>

                                                <!--                                        <div class="mb-4">
    <p class="mb-0 fs-12 text-muted fst-italic">By registering you agree to the Velzon <a href="#" class="text-primary text-decoration-underline fst-normal fw-medium">Terms of Use</a></p>
</div>

<div id="password-contain" class="p-3 bg-light mb-2 rounded">
    <h5 class="fs-13">Password must contain:</h5>
    <p id="pass-length" class="invalid fs-12 mb-2">Minimum <b>8 characters</b></p>
    <p id="pass-lower" class="invalid fs-12 mb-2">At <b>lowercase</b> letter (a-z)</p>
    <p id="pass-upper" class="invalid fs-12 mb-2">At least <b>uppercase</b> letter (A-Z)</p>
    <p id="pass-number" class="invalid fs-12 mb-0">A least <b>number</b> (0-9)</p>
</div>-->                                   <div class="form-check">
<input class="form-check-input" type="checkbox" value="" id="auth-remember-check" required>
                                                        <label class="form-check-label" for="auth-remember-check">Remember me</label>
                                                        <p class="mb-1 float-end"> <a href="#" class="fw-semibold text-primary text-decoration-underline"> Forgot Password?</a> </p>
                                                    </div>

                                                <div class="mt-4">
                                                    <button class="btn btn-success w-100" type="submit">Sign In</button>
                                                </div>


                                            </form>


                                            <!-- <div class="mt-4 text-center">
                                                <div class="signin-other-title">
                                                    <h5 class="fs-13 mb-4 title">Sign In with</h5>
                                                </div>

                                                <div>
                                                    <button type="button" class="btn btn-primary btn-icon waves-effect waves-light"><i class="ri-facebook-fill fs-16"></i></button>
                                                    <button type="button" class="btn btn-danger btn-icon waves-effect waves-light"><i class="ri-google-fill fs-16"></i></button>
                                                    <button type="button" class="btn btn-dark btn-icon waves-effect waves-light"><i class="ri-github-fill fs-16"></i></button>
                                                    <button type="button" class="btn btn-info btn-icon waves-effect waves-light"><i class="ri-twitter-fill fs-16"></i></button>
                                                </div>
                                            </div> -->

                                        </div>

                                        <div class="mt-3 text-center" style="margin-bottom:0px;">
                                            <p class="mb-0">Don't have an account ? <a href="signup.php" class="fw-semibold text-primary text-decoration-underline"> Signup</a> </p>
                                        </div>
                                        <div class="mt-20 text-center" style="margin-top: 20px; margin-bottom:-20px;">
                                            <p class="mb-0" >For more information contact: <a href="https://softanic.in/" class="fw-semibold text-primary text-decoration-underline">KBP</a> </p>
                                            <p class="mb-0" > kushal Patil,  <a href="tel:+91 8275331362">+91 8329378314.</a> </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->

                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->

        <!-- footer -->
        <footer class="footer">
            <div class="container"> 
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <p class="mb-0">&copy;
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> Krushibhushan. Crafted with <i class="mdi mdi-heart text-danger"></i> by Softanic
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->
    </div>
    <!-- end auth-page-wrapper -->

    
</body>

</html>
<!-- JAVASCRIPT -->
<script src="./assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/libs/simplebar/simplebar.min.js"></script>
    <script src="./assets/libs/node-waves/waves.min.js"></script>
    <script src="./assets/libs/feather-icons/feather.min.js"></script>
    <script src="./assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="./assets/js/plugins.js"></script>

    <!-- password-addon init -->
    <script src="./assets/js/pages/password-addon.init.js"></script>
    <script src="./assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/libs/simplebar/simplebar.min.js"></script>
    <script src="./assets/libs/node-waves/waves.min.js"></script>
    <script src="./assets/libs/feather-icons/feather.min.js"></script>
    <script src="./assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="./assets/js/plugins.js"></script>

    <!-- particles js -->
    <script src="./assets/libs/particles.js/particles.js"></script>
    <!-- particles app js -->
    <script src="./assets/js/pages/particles.app.js"></script>
    <!-- validation init -->
    <script src="./assets/js/pages/form-validation.init.js"></script>
    <!-- password create init -->
    <script src="./assets/js/pages/passowrd-create.init.js"></script>
    
<script>
    $(document).keyup(function() {
        $("#login-form").validate({
            rules: {
                mobile_number: {
                    required: true,
                    maxlength: 10,
                    minlength: 10,

                }
            },
            // Specify validation error messages
            messages: {
                mobile_number: {
                    remote: "Phone number already exists, Please contact mess owner"
                }
            },
            // Make sure the form is submitted to the destination defined
            // in the "action" attribute of the form when valid
            submitHandler: function(form) {
                //alert();
                form.submit();
            }
        });

    });
</script>
