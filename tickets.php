<?php
session_start();

?>

<!doctype html>
<html class="no-js" lang="en" dir="ltr">


<!-- Mirrored from pixelwibes.com/template/my-task/html/dist/tickets.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jan 2024 19:05:43 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>:: My-Task:: Tickets</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
    <!-- plugin css file  -->
    <link rel="stylesheet" href="assets/plugin/datatables/responsive.dataTables.min.css">
    <link rel="stylesheet" href="assets/plugin/datatables/dataTables.bootstrap5.min.css">
    <!-- project css file  -->
    <link rel="stylesheet" href="assets/css/my-task.style.min.css">
</head>
<body  onload="table()" data-mytask="theme-indigo" >

<div id="mytask-layout">

    <!-- sidebar -->
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
            <span class="logo-text">My-Task</span>
          </a>
          <!-- Menu: main ul -->
  
          <ul class="menu-list flex-grow-1 mt-3">
            <li class="collapsed">
              <a  class="m-link" data-bs-toggle="collapse" data-bs-target="#dashboard-Components" href="index.php">
                <i class="icofont-home fs-5"></i> <span>Dashboard</span>
              </a>
              <!-- Menu: Sub menu ul -->
            </li>
            <li class="collapsed">
              <a  class="m-link active" data-bs-toggle="collapse" data-bs-target="#project-Components" href="tickets.php">
                <i class="icofont-ticket"></i><span>Tickets</span>
                <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
              <!-- Menu: Sub menu ul -->
              <ul class="sub-menu collapse" id="project-Components">
                <li>
                  <a class="ms-link" href="tickets.php"><span>Tout</span></a>
                </li>
                <li>
                  <a class="ms-link" href="tickets.php?status=En Cours"><span>En Cours</span></a>
                </li>
                <li>
                  <a class="ms-link" href="tickets.php?status=Complété"><span>Complété</span></a>
                </li>
              </ul>
            </li>
  
            <li class="collapsed">
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
              <a class="m-link" data-bs-toggle="collapse" data-bs-target="#client-Components" href="#"><i class="icofont-user-male"></i> <span>Gestion Comptes</span>
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
            </li>
          </ul>
          <button type="button" class="btn btn-link sidebar-mini-btn text-light">
            <span class="ms-2"><i class="icofont-bubble-right"></i></span>
          </button>
        </div>
      </div>

    <!-- main body area -->
    <div class="main px-lg-4 px-md-4"> 

        <!-- Body: Header -->
        <div class="main px-lg-4 px-md-4">
            <!-- Body: Header -->
            <div class="header">
              <nav class="navbar py-4">
                <div class="container-xxl">
                  <!-- header rightbar icon -->
                  <div class="h-right d-flex align-items-center mr-5 mr-lg-0 order-1">
                    <!--Help-->
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
                          <span class="font-weight-bold">Dylan Hunter</span>
                        </p>
                        <small>Admin Profile</small>
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
                                  <span class="font-weight-bold">Dylan Hunter</span>
                                </p>
                                <small class="">Dylan.hunter@gmail.com</small>
                              </div>
                            </div>
      
                            <div>
                              <hr class="dropdown-divider border-dark" />
                            </div>
                          </div>
                          <div class="list-group m-2">
                            <a href="deconnexion.php" class="list-group-item list-group-item-action border-0"><i class="icofont-logout fs-6 me-3"></i>Déconnexion</a>
                            <div>
                              <hr class="dropdown-divider border-dark" />
                            </div>
                            <a href="ui-elements/auth-signup.html" class="list-group-item list-group-item-action border-0"><i class="icofont-contact-add fs-5 me-3"></i>Ajouter
                              un Compte</a>
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

        <!-- Body: Body -->       
        <div class="body d-flex py-lg-3 py-md-2">
            <div class="container-xxl">
                <div class="row align-items-center">
                    <div class="border-0 mb-4">
                        <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                            <h3 class="fw-bold mb-0">Tickets</h3>
                            <div class="col-auto d-flex w-sm-100">
                                <button type="button" class="btn btn-dark btn-set-task w-sm-100" data-bs-toggle="modal" data-bs-target="#tickadd"><i class="icofont-plus-circle me-2 fs-6"></i>Add Tickets</button>
                            </div>
                        </div>
                    </div>
                </div> <!-- Row end  -->
                <div class="row clearfix g-3">
                  <div class="col-sm-12">
                        <div class="card mb-3">
                            <div class="card-body">
                                <table id="exemple" class="table table-hover align-middle mb-0" style="width:100%">
                                    
                                </table>
                            </div>
                        </div>
                  </div>
                </div><!-- Row End -->
            </div>
        </div>
        
        <!-- Modal Members-->
        <div class="modal fade" id="addUser" tabindex="-1" aria-labelledby="addUserLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title  fw-bold" id="addUserLabel">Employee Invitation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="inviteby_email">
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Email address" id="exampleInputEmail1" aria-describedby="exampleInputEmail1">
                            <button class="btn btn-dark" type="button" id="button-addon2">Sent</button>
                        </div>
                    </div>
                    <div class="members_list">
                        <h6 class="fw-bold ">Employee </h6>
                        <ul class="list-unstyled list-group list-group-custom list-group-flush mb-0">
                            <li class="list-group-item py-3 text-center text-md-start">
                                <div class="d-flex align-items-center flex-column flex-sm-column flex-md-column flex-lg-row">
                                    <div class="no-thumbnail mb-2 mb-md-0">
                                        <img class="avatar lg rounded-circle" src="assets/images/xs/avatar2.jpg" alt="">
                                    </div>
                                    <div class="flex-fill ms-3 text-truncate">
                                        <h6 class="mb-0  fw-bold">Rachel Carr(you)</h6>
                                        <span class="text-muted">rachel.carr@gmail.com</span>
                                    </div>
                                    <div class="members-action">
                                        <span class="members-role ">Admin</span>
                                        <div class="btn-group">
                                            <button type="button" class="btn bg-transparent dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="icofont-ui-settings  fs-6"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                              <li><a class="dropdown-item" href="#"><i class="icofont-ui-password fs-6 me-2"></i>ResetPassword</a></li>
                                              <li><a class="dropdown-item" href="#"><i class="icofont-chart-line fs-6 me-2"></i>ActivityReport</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item py-3 text-center text-md-start">
                                <div class="d-flex align-items-center flex-column flex-sm-column flex-md-column flex-lg-row">
                                    <div class="no-thumbnail mb-2 mb-md-0">
                                        <img class="avatar lg rounded-circle" src="assets/images/xs/avatar3.jpg" alt="">
                                    </div>
                                    <div class="flex-fill ms-3 text-truncate">
                                        <h6 class="mb-0  fw-bold">Lucas Baker<a href="#" class="link-secondary ms-2">(Resend invitation)</a></h6>
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
                                                <i class="icofont-ui-settings  fs-6"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                              <li><a class="dropdown-item" href="#"><i class="icofont-delete-alt fs-6 me-2"></i>Delete Member</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item py-3 text-center text-md-start">
                                <div class="d-flex align-items-center flex-column flex-sm-column flex-md-column flex-lg-row">
                                    <div class="no-thumbnail mb-2 mb-md-0">
                                        <img class="avatar lg rounded-circle" src="assets/images/xs/avatar8.jpg" alt="">
                                    </div>
                                    <div class="flex-fill ms-3 text-truncate">
                                        <h6 class="mb-0  fw-bold">Una Coleman</h6>
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
                                                    <i class="icofont-ui-settings  fs-6"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                  <li><a class="dropdown-item" href="#"><i class="icofont-ui-password fs-6 me-2"></i>ResetPassword</a></li>
                                                  <li><a class="dropdown-item" href="#"><i class="icofont-chart-line fs-6 me-2"></i>ActivityReport</a></li>
                                                  <li><a class="dropdown-item" href="#"><i class="icofont-delete-alt fs-6 me-2"></i>Suspend member</a></li>
                                                  <li><a class="dropdown-item" href="#"><i class="icofont-not-allowed fs-6 me-2"></i>Delete Member</a></li>
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

        <!-- Add Tickit-->
        <div class="modal fade" id="tickadd" tabindex="-1"  aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title  fw-bold" id="leaveaddLabel"> Tickit Add</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="sub" class="form-label">Subject</label>
                        <input type="text" class="form-control" id="sub">
                    </div>
                    <div class="deadline-form">
                        <form>
                            <div class="row g-3 mb-3">
                              <div class="col">
                                <label for="depone" class="form-label">Assign Name</label>
                                <input type="text" class="form-control" id="depone">
                              </div>
                              <div class="col">
                                <label for="deptwo" class="form-label">Creted Date</label>
                                <input type="date" class="form-control" id="deptwo">
                              </div>
                            </div>
                        </form>
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Status</label>
                        <select class="form-select">
                            <option selected>In Progress</option>
                            <option value="1">Completed</option>
                            <option value="2">Wating</option>
                            <option value="3">Decline</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
                    <button type="submit" class="btn btn-primary">sent</button>
                </div>
            </div>
            </div>
        </div>

         <!-- Edit Tickit-->
         <div class="modal fade" id="edittickit" tabindex="-1"  aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title  fw-bold" id="edittickitLabel"> Tickit Edit</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="sub1" class="form-label">Subject</label>
                        <input type="text" class="form-control" id="sub1" value="punching time not proper">
                    </div>
                    <div class="deadline-form">
                        <form>
                            <div class="row g-3 mb-3">
                              <div class="col">
                                <label for="depone11" class="form-label">Assign Name</label>
                                <input type="text" class="form-control" id="depone11" value="Victor Rampling">
                              </div>
                              <div class="col">
                                <label for="deptwo56" class="form-label">Creted Date</label>
                                <input type="date" class="form-control" id="deptwo56" value="2021-02-25">
                              </div>
                            </div>
                        </form>
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Status</label>
                        <select class="form-select">
                            <option selected>Completed</option>
                            <option value="1">In Progress</option>
                            <option value="2">Wating</option>
                            <option value="3">Decline</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
                    <button type="submit" class="btn btn-primary">sent</button>
                </div>
            </div>
            </div>
        </div>
    </div>

    <!-- start: template setting, and more. -->
	<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas_setting" aria-labelledby="offcanvas_setting">
		<div class="offcanvas-header">
			<h5 class="offcanvas-title">Template Setting</h5>
			<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
		</div>
		<div class="offcanvas-body d-flex flex-column">
			<div class="mb-4">
				<h6>Set Theme Color</h6>
				<ul class="choose-skin list-unstyled mb-0">
					<li data-theme="ValenciaRed"><div style="--mytask-theme-color: #D63B38;"></div></li>
					<li data-theme="SunOrange"><div style="--mytask-theme-color: #F7A614;"></div></li>
					<li data-theme="AppleGreen"><div style="--mytask-theme-color: #5BC43A;"></div></li>
					<li data-theme="CeruleanBlue"><div style="--mytask-theme-color: #00B8D6;"></div></li>
					<li data-theme="Mariner"><div style="--mytask-theme-color: #0066FE;"></div></li>
					<li data-theme="PurpleHeart" class="active"><div style="--mytask-theme-color: #6238B3;"></div></li>
					<li data-theme="FrenchRose"><div style="--mytask-theme-color: #EB5393;"></div></li>
				</ul>
			</div>
            <div class="mb-4 flex-grow-1">
				<h6>Set Theme Light/Dark/RTL</h6>
				<!-- Theme: Switch Theme -->
                <ul class="list-unstyled mb-0">
                    <li>
                        <div class="form-check form-switch theme-switch">
                            <input class="form-check-input fs-6" type="checkbox" role="switch" id="theme-switch">
                            <label class="form-check-label mx-2" for="theme-switch">Enable Dark Mode!</label>
                        </div>
                    </li>
                    <li>
                        <div class="form-check form-switch theme-rtl">
                            <input class="form-check-input fs-6" type="checkbox" role="switch" id="theme-rtl">
                            <label class="form-check-label mx-2" for="theme-rtl">Enable RTL Mode!</label>
                        </div>
                    </li>
                    <li>
                        <div class="form-check form-switch monochrome-toggle">
                            <input class="form-check-input fs-6" type="checkbox" role="switch" id="monochrome">
                            <label class="form-check-label mx-2" for="monochrome">Monochrome Mode</label>
                        </div>
                    </li>
                </ul>
			</div>
			<div class="d-flex">
				<a href="https://themeforest.net/item/mytask-hr-project-management-admin-template/31974551" class="btn w-100 me-1 py-2 btn-primary">Buy Now</a>
				<a href="https://themeforest.net/user/pixelwibes/portfolio" class="btn w-100 ms-1 py-2 btn-dark">View Portfolio</a>
			</div>
		</div>
	</div>
</div>
 
<!-- Jquery Core Js -->
<script src="assets/bundles/libscripts.bundle.js"></script>

<!-- Plugin Js-->
<script src="assets/bundles/dataTables.bundle.js"></script>

<!-- Jquery Page Js -->
<script src="js/template.js"></script>
<script>
                    function table() {
                        const xhttp = new XMLHttpRequest();
                        xhttp.onload = function() {
                            document.getElementById("exemple").innerHTML = this.responseText;
                        }
                        xhttp.open("GET", "controller/ticket/gettickets.php");
                        xhttp.send();

                    }
                    setInterval(table, 6000);
                </script>
</body>

<!-- Mirrored from pixelwibes.com/template/my-task/html/dist/tickets.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jan 2024 19:05:44 GMT -->
</html>
