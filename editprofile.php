<?php
session_start();
if ($_SESSION["type"] == "client") {
  header("location:ajouterticket.php");
}

?>


<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Dashboard</title>
  <link rel="icon" href="favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" href="assets/css/my-task.style.min.css" />
</head>

<body data-mytask="theme-indigo" onload="load()">
  <div id="mytask-layout">
    <!--header nav-->
    <div class="sidebar px-4 py-4 py-md-5 me-0">
      <div class="d-flex flex-column h-100">
        <a href="index.php" class="mb-0 brand-icon">
          <span class="logo-icon">
            <svg width="35" height="35" fill="currentColor" class="bi bi-clipboard-check" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
              <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
              <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z" />
            </svg>
          </span>
          <span class="logo-text">Edit profile</span>
        </a>
        <!-- Menu: main ul -->

        <ul class="menu-list flex-grow-1 mt-3">


          <?php if ($_SESSION['type'] == "client") {
            echo '<li class="collapsed">
                <a class="m-link active" data-bs-toggle="collapse"  href="ajouterticket.php">
                  <i class="icofont-home fs-5"></i> <span>Nouveau Ticket</span>
                </a>
              </li>';
          } else {
            echo '<li class="collapsed">
                <a class="m-link"  data-bs-target="#dashboard-Components" href="index.php">
                  <i class="icofont-home fs-5"></i> <span>Dashboard</span>
                </a>
                <!-- Menu: Sub menu ul -->
              </li>';
          }
          ?>
          <li class="collapsed">
            <a class="m-link" data-bs-toggle="collapse" data-bs-target="#project-Components" href="tickets.php">
              <i class="icofont-ticket"></i><?php if ($_SESSION['type'] == "client") {
                                              echo "<span>Mes Tickets</span>";
                                            } else {
                                              echo "<span>Tickets</span>";
                                            }
                                            ?>
              <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
            <!-- Menu: Sub menu ul -->
            <ul class="sub-menu collapse" id="project-Components">
              <li>
                <a class="ms-link" href="tickets.php"><span>Tout</span></a>
              </li>
              <li>
                <a class="ms-link" href="tickets.php?status=enCours"><span>En Cours</span></a>
              </li>
              <li>
                <a class="ms-link" href="tickets.php?status=Cloture"><span>Complété</span></a>
              </li>
            </ul>
          </li>
          <?php if ($_SESSION['type'] == "client") {
          } else {
            echo '<li class="collapsed">
                <a class="m-link" data-bs-toggle="collapse" data-bs-target="#tikit-Components" href="#"><i class="icofont-users-alt-5"></i> <span>Les Comptes</span>
                  <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                <!-- Menu: Sub menu ul -->
                <ul class="sub-menu collapse" id="tikit-Components">
                  <li>
                    <a class="ms-link" href="comptes.php?tout">
                      <span>Tout</span></a>
                  </li>
                  <li>
                    <a class="ms-link" href="comptes.php?client">
                      <span>Client</span></a>
                  </li>
                  <li>
                    <a class="ms-link" href="comptes.php?employe">
                      <span>Employees</span></a>
                  </li>
                </ul>
              </li>
              <li class="collapsed">
                <a class="m-link active" data-bs-toggle="collapse" data-bs-target="#client-Components" href="#"><i class="icofont-user-male"></i> <span>Gestion Comptes</span>
                  <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                <!-- Menu: Sub menu ul -->
                <ul class="sub-menu collapse" id="client-Components">
                  <li>
                    <a class="ms-link" href="ajoutercompte.php">
                      <span>Ajouter Comptes</span></a>
                  </li>
                  <li>
                    <a class="ms-link" href="verifier.php">
                      <span>Verifier Comptes</span></a>
                  </li>
                  <li>
                    <a class="ms-link" href="supprimer.php">
                      <span>Supprimer Comptes</span></a>
                  </li>
                </ul>
              </li>';
          }
          ?>

        </ul>
        <button type="button" class="btn btn-link sidebar-mini-btn text-light">
          <span class="ms-2"><i class="icofont-bubble-right"></i></span>
        </button>
      </div>
    </div>
    <!-- main body area -->
    <div class="main px-lg-4 px-md-4">
      <!-- Body: Header -->
      <div class="header">
        <nav class="navbar py-4">
          <div class="container-xxl">
            <!-- header rightbar icon -->
            <div class="h-right d-flex align-items-center mr-5 mr-lg-0 order-1">
              <!--Help-->
              <?php
              if ($_SESSION["type"] == "supervisor") {
              ?>
                <div class="d-flex">
                  <div class="avatar-list avatar-list-stacked px-3">
                    <img class="avatar rounded-circle" src="assets/images/xs/avatar2.jpg" alt="" />
                    <img class="avatar rounded-circle" src="assets/images/xs/avatar1.jpg" alt="" />
                    <img class="avatar rounded-circle" src="assets/images/xs/avatar3.jpg" alt="" />
                    <img class="avatar rounded-circle" src="assets/images/xs/avatar4.jpg" alt="" />
                    <img class="avatar rounded-circle" src="assets/images/xs/avatar7.jpg" alt="" />
                    <img class="avatar rounded-circle" src="assets/images/xs/avatar8.jpg" alt="" />
                    <span class="avatar rounded-circle text-center pointer" data-bs-toggle="modal" data-bs-target="#addUser"><i class="icofont-ui-add"></i></span>
                  </div>
                </div>
              <?php
              } ?>
              <!--Notification-->
              <div class="dropdown notifications">
                <a class="nav-link dropdown-toggle pulse" href="#" role="button" data-bs-toggle="dropdown">
                  <i class="icofont-alarm fs-5"></i>
                  <span class="pulse-ring"></span>
                </a>
                <div id="NotificationsDiv" class="dropdown-menu rounded-lg shadow border-0 dropdown-animation dropdown-menu-sm-end p-0 m-0">
                  <div class="card border-0 w380">
                    <div class="card-header border-0 p-3">
                      <h5 class="mb-0 font-weight-light d-flex justify-content-between">
                        <span>Notifications</span>
                        <span class="badge text-white">11</span>
                      </h5>
                    </div>
                    <div class="tab-content card-body">
                      <div class="tab-pane fade show active">
                        <ul class="list-unstyled list mb-0">
                          <li class="py-2 mb-1 border-bottom">
                            <a href="javascript:void(0);" class="d-flex">
                              <img class="avatar rounded-circle" src="assets/images/xs/avatar1.jpg" alt="" />
                              <div class="flex-fill ms-2">
                                <p class="d-flex justify-content-between mb-0">
                                  <span class="font-weight-bold">Dylan Hunter</span>
                                  <small>2MIN</small>
                                </p>
                                <span class="">Added 2021-02-19 my-Task ui/ux Design
                                  <span class="badge bg-success">Review</span></span>
                              </div>
                            </a>
                          </li>
                          <li class="py-2 mb-1 border-bottom">
                            <a href="javascript:void(0);" class="d-flex">
                              <div class="avatar rounded-circle no-thumbnail">
                                DF
                              </div>
                              <div class="flex-fill ms-2">
                                <p class="d-flex justify-content-between mb-0">
                                  <span class="font-weight-bold">Diane Fisher</span>
                                  <small>13MIN</small>
                                </p>
                                <span class="">Task added Get Started with Fast Cad
                                  project</span>
                              </div>
                            </a>
                          </li>
                          <li class="py-2 mb-1 border-bottom">
                            <a href="javascript:void(0);" class="d-flex">
                              <img class="avatar rounded-circle" src="assets/images/xs/avatar3.jpg" alt="" />
                              <div class="flex-fill ms-2">
                                <p class="d-flex justify-content-between mb-0">
                                  <span class="font-weight-bold">Andrea Gill</span>
                                  <small>1HR</small>
                                </p>
                                <span class="">Quality Assurance Task Completed</span>
                              </div>
                            </a>
                          </li>
                          <li class="py-2 mb-1 border-bottom">
                            <a href="javascript:void(0);" class="d-flex">
                              <img class="avatar rounded-circle" src="assets/images/xs/avatar5.jpg" alt="" />
                              <div class="flex-fill ms-2">
                                <p class="d-flex justify-content-between mb-0">
                                  <span class="font-weight-bold">Diane Fisher</span>
                                  <small>13MIN</small>
                                </p>
                                <span class="">Add New Project for App Developemnt</span>
                              </div>
                            </a>
                          </li>
                          <li class="py-2 mb-1 border-bottom">
                            <a href="javascript:void(0);" class="d-flex">
                              <img class="avatar rounded-circle" src="assets/images/xs/avatar6.jpg" alt="" />
                              <div class="flex-fill ms-2">
                                <p class="d-flex justify-content-between mb-0">
                                  <span class="font-weight-bold">Andrea Gill</span>
                                  <small>1HR</small>
                                </p>
                                <span class="">Add Timesheet For Rhinestone project</span>
                              </div>
                            </a>
                          </li>
                          <li class="py-2">
                            <a href="javascript:void(0);" class="d-flex">
                              <img class="avatar rounded-circle" src="assets/images/xs/avatar7.jpg" alt="" />
                              <div class="flex-fill ms-2">
                                <p class="d-flex justify-content-between mb-0">
                                  <span class="font-weight-bold">Zoe Wright</span>
                                  <small class="">1DAY</small>
                                </p>
                                <span class="">Add Calander Event</span>
                              </div>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <a class="card-footer text-center border-top-0" href="#">
                      View all notifications</a>
                  </div>
                </div>
              </div>
              <!--Profile-->
              <div class="dropdown user-profile ml-2 ml-sm-3 d-flex align-items-center">
                <div class="u-info me-2">
                  <p class="mb-0 text-end line-height-sm">
                    <span class="font-weight-bold"><?php
                                                    if ($_SESSION['type'] == "supervisor") {
                                                      echo "Superviseur";
                                                    } else {
                                                      echo $_SESSION['nom'] . ' ' . $_SESSION['prenom'];
                                                    }
                                                    ?></span>
                  </p>
                  <small>
                    <?php
                    if (isset($_SESSION['type'])) {
                      if ($_SESSION['type'] == "supervisor") {
                        echo "Superviseur";
                      } else {
                        echo "Admin";  // Corrected from "Supervisor"
                      }
                    } else {
                      echo "Client";
                    }
                    ?> Profile</small>
                </div>
                <a class="nav-link dropdown-toggle pulse p-0" href="#" role="button" data-bs-toggle="dropdown" data-bs-display="static">
                  <img class="avatar lg rounded-circle img-thumbnail" src="assets/images/profile_av.png" alt="profile" />
                </a>

                <div class="dropdown-menu rounded-lg shadow border-0 dropdown-animation dropdown-menu-end p-0 m-0">
                  <div class="card border-0 w280">
                    <div class="card-body pb-0">
                      <div class="d-flex py-1">
                        <img class="avatar rounded-circle" src="assets/images/profile_av.png" alt="profile" />
                        <div class="flex-fill ms-3">
                          <p class="mb-0">
                            <span class="font-weight-bold"><?php
                                                            if ($_SESSION["type"] == "supervisor") {
                                                              echo "Superviseur";
                                                            } else {
                                                              echo $_SESSION['nom'] . ' ' . $_SESSION['prenom'];
                                                            }
                                                            ?></span>
                          </p>
                          <small class=""><?php echo $_SESSION["email"]; ?></small>
                        </div>
                      </div>
                      <div class="text-center"> <a href="editprofile.php"><BUtton class="btn btn-primary"><i class="icofont-ui-edit"></i></BUtton></a> <a href="profile.php?id="><BUtton class="btn btn-primary"><i class="icofont-eye-open"></i></BUtton> </a></div>

                      <div>
                        <hr class="dropdown-divider border-dark" />
                      </div>
                    </div>
                    <div class="list-group m-2">
                      <a href="deconnexion.php" class="list-group-item list-group-item-action border-0"><i class="icofont-logout fs-6 me-3"></i>Déconnexion</a>
                      <?php
                      if ($_SESSION["type"] == "supervisor") {
                      ?>
                        <div>
                          <hr class="dropdown-divider border-dark" />
                        </div>
                        <a href="ajoutercompte.php" class="list-group-item list-group-item-action border-0"><i class="icofont-contact-add fs-5 me-3"></i>Ajouter
                          un Compte</a>
                      <?php
                      }
                      ?>

                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- menu toggler -->
            <button class="navbar-toggler p-0 border-0 menu-toggle order-3" type="button" data-bs-toggle="collapse" data-bs-target="#mainHeader">
              <span class="fa fa-bars"></span>
            </button>

            <!-- main menu Search-->
            <div class="order-0 col-lg-4 col-md-4 col-sm-12 col-12 mb-3 mb-md-0">
              <div class="input-group flex-nowrap input-group-lg">
                <button type="button" class="input-group-text" id="addon-wrapping">
                  <i class="fa fa-search"></i>
                </button>
                <input type="search" class="form-control" placeholder="Recherche" aria-label="search" aria-describedby="addon-wrapping" />
                <button type="button" class="input-group-text add-member-top" id="addon-wrappingone" data-bs-toggle="modal" data-bs-target="#addUser">
                  <i class="fa fa-plus"></i>
                </button>
              </div>
            </div>
            <!-- Theme switcher -->
            <div class="form-check form-switch theme-switch">
              <input class="form-check-input fs-6" type="checkbox" role="switch" id="theme-switch" />
            </div>
          </div>
        </nav>
      </div>

      <div class="card mb-3">
<<<<<<< HEAD
        <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
=======
<<<<<<< HEAD
        <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
=======
        <<<<<<< HEAD <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
>>>>>>> 3c6d198e81676efe810f1f21ab3b8c8bb4f4974a
>>>>>>> 60f4c0fb483a889bf5090204dadd3d93e2d8ef7f
          <h6 class="mb-0 fw-bold ">Modifier Votre Profile</h6>
        </div>
        <div class="card-body">
          <form id="edit-form">
          </form>
        </div>
      </div>

      <!-- Modal Members-->
      <div class="modal fade" id="addUser" tabindex="-1" aria-labelledby="addUserLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title fw-bold" id="addUserLabel">
                Employee Invitation
              </h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="inviteby_email">
                <div class="input-group mb-3">
                  <input type="email" class="form-control" placeholder="Email address" id="exampleInputEmail1" aria-describedby="exampleInputEmail1" />
                  <button class="btn btn-dark" type="button" id="button-addon2">
                    Sent
                  </button>
                </div>
              </div>
              <div class="members_list">
                <h6 class="fw-bold">Employee</h6>
                <ul class="list-unstyled list-group list-group-custom list-group-flush mb-0">
                  <li class="list-group-item py-3 text-center text-md-start">
                    <div class="d-flex align-items-center flex-column flex-sm-column flex-md-column flex-lg-row">
                      <div class="no-thumbnail mb-2 mb-md-0">
                        <img class="avatar lg rounded-circle" src="assets/images/xs/avatar2.jpg" alt="" />
                      </div>
                      <div class="flex-fill ms-3 text-truncate">
                        <h6 class="mb-0 fw-bold">Rachel Carr(you)</h6>
                        <span class="text-muted">rachel.carr@gmail.com</span>
                      </div>
<<<<<<< HEAD
                      <div class="members-action">
                        <span class="members-role">Admin</span>
                        <div class="btn-group">
                          <button type="button" class="btn bg-transparent dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="icofont-ui-settings fs-6"></i>
                          </button>
                          <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                              <a class="dropdown-item" href="#"><i class="icofont-ui-password fs-6 me-2"></i>ResetPassword</a>
                            </li>
                            <li>
                              <a class="dropdown-item" href="#"><i class="icofont-chart-line fs-6 me-2"></i>ActivityReport</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item py-3 text-center text-md-start">
                    <div class="d-flex align-items-center flex-column flex-sm-column flex-md-column flex-lg-row">
                      <div class="no-thumbnail mb-2 mb-md-0">
                        <img class="avatar lg rounded-circle" src="assets/images/xs/avatar3.jpg" alt="" />
                      </div>
                      <div class="flex-fill ms-3 text-truncate">
                        <h6 class="mb-0 fw-bold">
                          Lucas Baker<a href="#" class="link-secondary ms-2">(Resend invitation)</a>
                        </h6>
                        <span class="text-muted">lucas.baker@gmail.com</span>
                      </div>
                      <div class="members-action">
                        <div class="btn-group">
                          <button type="button" class="btn bg-transparent dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Members
                          </button>
                          <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                              <a class="dropdown-item" href="#">
                                <i class="icofont-check-circled"></i>
=======
                    </div>
                  </div>
                </div>
<<<<<<< HEAD
              </div>
=======
                <div class="row g-3 align-items-center">
                  <div class="col-md-6">
                    <label for="firstname" class="form-label">Prénom</label>
                    <input type="text" class="form-control" name="Prénom" required value="<?php echo $_SESSION['prenom'] ?>">
                  </div>
                  <div class="col-md-6">
                    <label for="lastname" class="form-label">Nom</label>
                    <input type="text" class="form-control" name="nom" value="<?php echo $_SESSION['nom'] ?>" required>
                  </div>
                  <div class="col-md-6">
                    <label class="form-label">Phone Number</label>
                    <input type="tel" class="form-control" name="tel" required>
                  </div>
                  <div class="col-md-6">
                    <label for="emailaddress" class="form-label">Email Address</label>
                    <input type="email" class="form-control" name="email" value="<?php echo $_SESSION['email'] ?>" required>
                  </div>
                  <div class="col-md-6">
                    <label for="admitdate" class="form-label">Votre Mot de Passe</label>
                    <input type="password" class="form-control" id="mdp" required>
                  </div>
                  <div class="col-md-6">
                    <label for="admitdate" class="form-label">Nouveau Mot de Passe</label>
                    <input type="password" class="form-control" name="cmdp" required>
                  </div>
                  <div class="col-md-6">
                    <label for="admitdate" class="form-label">Matricule</label>
                    <input type="text" class="form-control" id="admitdate" required>
                  </div>
                  <div class="col-md-6">
                    <label class="form-label">Gender</label>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios11" value="option1" checked>
                          <label class="form-check-label" for="exampleRadios11">
                            Male
                          </label>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios22" value="option2">
                          <label class="form-check-label" for="exampleRadios22">
                            Female
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
>>>>>>> 3c6d198e81676efe810f1f21ab3b8c8bb4f4974a
>>>>>>> 60f4c0fb483a889bf5090204dadd3d93e2d8ef7f

                                <span>All operations permission</span>
                              </a>
                            </li>
                            <li>
                              <a class="dropdown-item" href="#">
                                <i class="fs-6 p-2 me-1"></i>
                                <span>Only Invite & manage team</span>
                              </a>
                            </li>
                          </ul>
                        </div>
                        <div class="btn-group">
                          <button type="button" class="btn bg-transparent dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="icofont-ui-settings fs-6"></i>
                          </button>
                          <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                              <a class="dropdown-item" href="#"><i class="icofont-delete-alt fs-6 me-2"></i>Delete Member</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item py-3 text-center text-md-start">
                    <div class="d-flex align-items-center flex-column flex-sm-column flex-md-column flex-lg-row">
                      <div class="no-thumbnail mb-2 mb-md-0">
                        <img class="avatar lg rounded-circle" src="assets/images/xs/avatar8.jpg" alt="" />
                      </div>
                      <div class="flex-fill ms-3 text-truncate">
                        <h6 class="mb-0 fw-bold">Una Coleman</h6>
                        <span class="text-muted">una.coleman@gmail.com</span>
                      </div>
                      <div class="members-action">
                        <div class="btn-group">
                          <button type="button" class="btn bg-transparent dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Members
                          </button>
                          <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                              <a class="dropdown-item" href="#">
                                <i class="icofont-check-circled"></i>

                                <span>All operations permission</span>
                              </a>
                            </li>
                            <li>
                              <a class="dropdown-item" href="#">
                                <i class="fs-6 p-2 me-1"></i>
                                <span>Only Invite & manage team</span>
                              </a>
                            </li>
                          </ul>
                        </div>
                        <div class="btn-group">
                          <div class="btn-group">
                            <button type="button" class="btn bg-transparent dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="icofont-ui-settings fs-6"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                              <li>
                                <a class="dropdown-item" href="#"><i class="icofont-ui-password fs-6 me-2"></i>ResetPassword</a>
                              </li>
                              <li>
                                <a class="dropdown-item" href="#"><i class="icofont-chart-line fs-6 me-2"></i>ActivityReport</a>
                              </li>
                              <li>
                                <a class="dropdown-item" href="#"><i class="icofont-delete-alt fs-6 me-2"></i>Suspend member</a>
                              </li>
                              <li>
                                <a class="dropdown-item" href="#"><i class="icofont-not-allowed fs-6 me-2"></i>Delete Member</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Jquery Core Js -->
  <script src="assets/bundles/libscripts.bundle.js"></script>

  <!-- Plugin Js-->
  <script src="assets/bundles/apexcharts.bundle.js"></script>

  <!-- Jquery Page Js -->
  <script src="../js/template.js"></script>
  <script src="../js/page/hr.js"></script>
  <script>
    function load() {
      const xhttp = new XMLHttpRequest();
      xhttp.onload = function() {
        document.getElementById("edit-form").innerHTML = this.responseText;
      }
      xhttp.open("GET", "controller/compte/editprofile.php" + <?php if (isset($_GET['id'])) {
                                                                echo '?id=' . $_GET['id'];
                                                              } ?>, true);
      xhttp.send();
    }
  </script>
</body>

</html>