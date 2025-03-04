
<!DOCTYPE html>
<html
  lang="en"
  data-layout="vertical"
  data-topbar="light"
  data-sidebar="dark"
  data-sidebar-size="lg"
  data-sidebar-image="none"
>
  <!-- Mirrored from themesbrand.com/velzon/html/default/auth-signin-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Jul 2022 06:35:52 GMT -->
  <head>
    <meta charset="utf-8" />
    <title>Krushibhushan | Farmer Right</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      content="Premium Multipurpose Admin & Dashboard Template"
      name="description"
    />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="../img/favicon.png" />

    <!-- Layout config Js -->
    <script src="assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link
      href="assets/css/bootstrap.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="assets/css/custom.min.css" rel="stylesheet" type="text/css" />
  </head>

  <body>
    <div class="auth-page-wrapper pt-5">
      <!-- auth page bg -->
      <div class="auth-one-bg-position auth-one-bg" id="auth-particles">
        <div class="bg-overlay"></div>

        <div class="shape">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            version="1.1"
            xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 0 1440 120"
          >
            <path
              d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"
            ></path>
          </svg>
        </div>
      </div>
      <div>
      <!-- auth page content -->
      <div class="auth-page-content">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-center mt-sm-5 mb-4 text-white-50">
                <div>
                  <a href="" class="d-inline-block auth-logo">
                    <img
                      src="../img/logo/logo.png"
                      alt=""
                      height="70"
                    />
                  </a>
                </div>
                <p class="mt-3 fs-15 fw-medium">
                KRUSHIBHUSHAN
                </p>
              </div>
            </div>
          </div>
          <!-- end row -->

          <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
              <div class="card mt-4">
                <div class="card-body p-4">
                  <div class="text-center mt-2">
                    <h5 class="text-primary">Welcome Back !</h5>
                    <p class="text-muted">Sign in to continue to Krushibhushan.</p>
                  </div>
                  <div class="p-2 mt-4">
                    <form
                      class="needs-validation" action="login-validate.php" id="login-form"
                    >
                      <div class="mb-3">
                        <label for="mobile_number" class="form-label"
                          >Mobile No.</label
                        >
                        <input type="number" class="form-control" id="mobile_number" name="mobile_number" placeholder="Enter mobile number" required>
                      </div>

                      <div class="mb-3">
                        <div class="float-end">
                          <a
                            href="auth-pass-reset-basic.html"
                            class="text-muted"
                            >Forgot password?</a
                          >
                        </div>
                        <label class="form-label" for="password-input"
                          >Password</label
                        >
                        <div
                          class="position-relative auth-pass-inputgroup mb-3"
                        >
                           <input type="password" name="password" class="form-control pe-5 password-input" onpaste="return false" placeholder="Enter password" id="password-input" name="password-input" aria-describedby="passwordInput" required>
                          <button
                            class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted"
                            type="button"
                            id="password-addon"
                          >
                            <i class="ri-eye-fill align-middle"></i>
                          </button>
                        </div>
                      </div>

                     

                      <div class="mt-4">
                        <button class="btn btn-success w-100" type="submit">
                          Sign In
                        </button>
                      </div>

                      
                      </div>
                    </form>
                       <div class="mt-20 text-center" style="margin-top: 20px; margin-bottom:-20px;">
                                            <p class="mb-0" >For more information contact: <a href="https://softanic.in/" class="fw-semibold text-primary text-decoration-underline">Softanic Solutions Pvt. Ltd.</a> </p>
                                            <p class="mb-0" > Prasad Neve,  <a href="tel:+91 8275331362">+91 8275331362.</a> </p>
                                        </div>
                  </div>
                </div>
                <!-- end card body -->
              </div>
              <!-- end card -->

              
            </div>
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

    <!-- JAVASCRIPT -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="assets/js/plugins.js"></script>

    <!-- particles js -->
    <script src="assets/libs/particles.js/particles.js"></script>
    <!-- particles app js -->
    <script src="assets/js/pages/particles.app.js"></script>
    <!-- password-addon init -->
    <script src="assets/js/pages/password-addon.init.js"></script>
  </body>

  <!-- Mirrored from themesbrand.com/velzon/html/default/auth-signin-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Jul 2022 06:35:52 GMT -->
</html>
