<?php
require_once "../../model/ticket.php";

$ticket = new Ticket();
require_once "../../crud/crudTickets.php";
$crud = new CrudTicket();
if ($_SESSION['type'] == "supervisor") {
  $table = $crud->getAllTickets();
} else {
  if ($_SESSION['type'] == "admin") {
    $table = $crud->getTickets();
  } else {
    $table = $crud->getTicketByClient($_SESSION['$email']);
  }
}
$encour = $crud->getByStatutNum("enCours");
$fait = $crud->getByStatutNum("Cloture");
?>

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
      echo "<td><span class='badge bg-warning'>" . $row[8] . "</span></td>";
    } else {
      echo "<td><span class='badge bg-success'>" . $row[8] . "</span></td>";
    }
    if ($row[8] == "enCours") {
      echo "<td><a href='cloture.php?id=" . $row[0] . "'><button>Cloturer</button></a></td>";
    }
    echo "</tr>";
  }
  ?>