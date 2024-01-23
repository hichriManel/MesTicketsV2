<?php
require_once "../../model/ticket.php";
$ticket = new Ticket();
require_once "../../crud/crudTickets.php";
$crud = new CrudTicket();
$table = $crud->getTickets();
$encour = $crud->getByStatutNum("enCours");
$fait = $crud->getByStatutNum("Cloture");
?>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="DexignZone">
	<meta name="robots" content="index, follow">
   
	<meta name="keywords" content="	admin dashboard, admin template, administration, analytics, bootstrap, bootstrap admin, coupon, deal, modern, responsive admin dashboard, ticket, ticket dashboard, ticket system, admin panel,	Ticketing admin, Dashboard template, Bootstrap HTML, Ticket management, Event ticketing, Responsive design, User-friendly interface, Efficiency, Streamlining operations, Event management, Ticket sales, Customizable template, Stylish design, Modern dashboard">
	<meta name="description" content="Discover Zimys, the ultimate solution for ticketing administration. Our Bootstrap HTML Template empowers you to streamline ticketing tasks, enhancing operational efficiency with style and ease. Simplify your processes and elevate your ticketing management experience today.">
   
	<meta property="og:title" content="Zimys - Ticketing Admin Dashboard Bootstrap HTML Template | DexignZone">
	<meta property="og:description" content="Discover Zimys, the ultimate solution for ticketing administration. Our Bootstrap HTML Template empowers you to streamline ticketing tasks, enhancing operational efficiency with style and ease. Simplify your processes and elevate your ticketing management experience today.">
	<meta property="og:image" content="page-error-404.html">
	<meta name="format-detection" content="telephone=no">
   
	<meta name="twitter:title" content="Zimys - Ticketing Admin Dashboard Bootstrap HTML Template | DexignZone">
	<meta name="twitter:description" content="Discover Zimys, the ultimate solution for ticketing administration. Our Bootstrap HTML Template empowers you to streamline ticketing tasks, enhancing operational efficiency with style and ease. Simplify your processes and elevate your ticketing management experience today.">
	<meta name="twitter:image" content="page-error-404.html">
	<meta name="twitter:card" content="summary_large_image">

	<!-- MOBILE SPECIFIC -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
	<link rel="stylesheet" href="../../vendor/chartist/css/chartist.min.css">
    <link href="../../vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="../../vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="../../vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
   <link class="main-css" href="../../assets/css/style.css" rel="stylesheet">
	
				
</head>
<body>
<thead>
  <tr>
    <th>Numéro de ticket</th>
    <th>Date&Heure</th>
    <th>Demande</th>
    <th>Client</th>
    <th>Diagnostic</th>
    <th>Contact</th>
    <th>Categorie</th>
    <th>Priorité</th>
    <th>Statut</th>
    <th>Action</th>
  </tr>
</thead>
<tbody>
  <?php
  foreach ($table as $row) {
    echo "<tr>";
    echo "<td>" . $row[0] . "</td>";
    echo "<td>" . $row[2] . "</td>";
    echo "<td>" . $row[1] . "</td>";
    echo "<td>" . $row[3] . "</td>";
    echo "<td>" . $row[4] . "</td>";
    echo "<td>" . $row[5] . "</td>";
    echo "<td>" . $row[6] . "</td>";
    echo "<td>" . $row[7] . "</td>";
    if ($row[8] == "enCours") {
      echo "<td><span class='badge badge-danger'>" . $row[8] . "</span></td>";
    } else {
      echo "<td><span class='badge badge-success'>" . $row[8] . "</span></td>";
    }
    if ($row[8] == "enCours") {
      echo "<td><a href='../ReclamationTickets/controller/ticket/cloture.php?id=" . $row[0] . "'><button>Cloturer</button></a></td>";
    }
    echo "</tr>";
  }
  ?>
  </tbody>
</body>
</html>
