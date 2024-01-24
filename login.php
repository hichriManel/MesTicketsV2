<?php
session_start();

?>

<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <title>Login</title>
  <link rel="icon" href="../favicon.ico" type="image/x-icon" />

  <link rel="stylesheet" href="assets/css/my-task.style.min.css" />
</head>

<body data-mytask="theme-indigo" onload="hidenotification()">
  <div id="mytask-layout">
    <!-- main body area -->
    <div class="main p-2 py-3 p-xl-5">
      <!-- Body: Body -->
      <div class="body d-flex p-0 p-xl-5">
        <div class="container-xxl">
          <div class="row g-0">
            <div class="col-lg-6 d-none d-lg-flex justify-content-center align-items-center rounded-lg auth-h100">
              <div style="max-width: 25rem">
                <div class="text-center mb-5">
                  <svg width="4rem" fill="currentColor" class="bi bi-clipboard-check" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                    <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
                    <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z" />
                  </svg>
                </div>
                <div class="mb-5">
                  <h2 class="color-900 text-center">Améliorer la gestion</h2>
                </div>
                <!-- Image block -->
                <div class="">
                  <img src="../assets/images/login-img.svg" alt="login-img" />
                </div>
              </div>
            </div>
            <div class="col-lg-6 d-flex justify-content-center align-items-center border-0 rounded-lg auth-h100">
              <div class="w-100 p-3 p-md-5 card border-0 bg-dark text-light" style="max-width: 32rem">
                <!-- Form -->
                <form class="row g-1 p-3 p-md-4" method="post" action="controller/compte/login.php">
                  <div class="col-12 text-center mb-1 mb-lg-5">
                    <h1>Sign in</h1>
                  </div>
                  <?php
                  if (isset($_SESSION["error"]) && isset($_SESSION["error-type"])) {
                    echo '<div id="notif" role="alert" class="alert ' . $_SESSION["error-type"] . '">
                                    <div class="card-body ' . $_SESSION["error-type"] . '" id="card">
                                        ' . $_SESSION["error"] . '
                                    </div>
                                </div>';
                    unset($_SESSION["error"]);
                    unset($_SESSION["error-type"]);
                  }
                  ?>
                  <div class="col-12">
                    <div class="mb-2">
                      <label class="form-label">Email address</label>
                      <input type="email" name="email" class="form-control form-control-lg" placeholder="name@example.com" />
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="mb-2">
                      <div class="form-label">
                        <span class="d-flex justify-content-between align-items-center">
                          Password
                          <a class="text-secondary" href="forgot-password.php">Forgot Password?</a>
                        </span>
                      </div>

                      <input type="password" name="mdp" id="exampleInputPassword" class="form-control form-control-lg" placeholder="***************" />
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                      <label class="form-check-label" for="flexCheckDefault">
                        Remember me
                      </label>
                    </div>
                  </div>
                  <div class="col-12 text-center mt-4">
                    <button type="submit" class="btn btn-lg btn-block btn-light lift text-uppercase" atl="signin" name="btn">Connecter</button>
                  </div>
                  <div class="col-12 text-center mt-4">
                    <span class="text-muted">Vous n’avez pas encore de compte ?
                      <a href="register.php" class="text-secondary">Inscrivez-vous ici</a></span>
                  </div>
                </form>
                <!-- End Form -->
              </div>
            </div>
          </div>
          <!-- End Row -->
        </div>
      </div>
    </div>
  </div>

  <!-- Jquery Core Js -->
  <script src="../assets/bundles/libscripts.bundle.js"></script>
  <script src="js/notification.js"></script>
</body>

<!-- Mirrored from pixelwibes.com/template/my-task/html/dist/ui-elements/auth-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jan 2024 19:06:05 GMT -->

</html>