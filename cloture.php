<?php
session_start();
if (isset($_GET['id'])) {
    $ticketid = htmlspecialchars($_GET['id']);
}else{
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="9awL0gahze7b6jNlq0wNGenZqZCuHGGf7nuaP2H1">
    <meta name="keywords" content="admin, dashboard">
    <meta name="author" content="DexignZone">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Some description for the page">
    <meta property="og:title" content="tixia : tixia School Admission Admin  Bootstrap &amp; Laravel Template">
    <meta property="og:description" content="Tixia Laravel | Form Ckeditor">
    <meta property="og:image" content="https://tixia.dexignzone.com/laravel/social-image.png">
    <meta name="format-detection" content="telephone=no">
    <title>cloture</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="https://tixia.dexignzone.com/laravel/demo/images/favicon.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <link href="https://tixia.dexignzone.com/laravel/demo/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css">
    <link href="https://tixia.dexignzone.com/laravel/demo/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet" type="text/css">
    <link href="https://tixia.dexignzone.com/laravel/demo/css/style.css" rel="stylesheet" type="text/css">     
</head>
<body onload="diagex()">
<form name='form1' method='post' action="controller/ticket/cloture.php?id=<?php echo $ticketid?>">
        <div class="row">
            <div class="col-xl-12 col-xxl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"><?php echo "Diagnostic de la ticket N°$ticketid:<br>"; ?></h4>
                    </div>
                    <div class="mb-1">
                                    <textarea class="form-control" rows="8" id="diagexist" name="diagnostic"></textarea>
                                </div>
                    <input type='submit' name="diag" class="btn btn-primary" value='Enregistrer'/>
                    
                </div>
            </div>
        </div>
       
</form>
    <script src="vendor/global/global.min.js"></script>
			<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
			<script src="vendor/chart-js/chart.bundle.min.js"></script>
			<script src="vendor/bootstrap-datetimepicker/js/moment.js"></script>
			<script src="vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
			<!-- Apex Chart -->
			<script src="vendor/apexchart/apexchart.js"></script>
			<!-- Chart piety plugin files -->
			<script src="vendor/peity/jquery.peity.min.js"></script>
			<!-- Dashboard 1 -->
			<script src="js/dashboard/dashboard-1.js"></script>

			<script src="js/custom.min.js"></script>
			<script src="js/deznav-init.js"></script>
			<script src="js/demo.js"></script>
            <script>
        function diagex() {
      const xhttp = new XMLHttpRequest();
      xhttp.onload = function() {
        document.getElementById("diagexist").innerHTML = this.responseText;
      }
      xhttp.open("GET", "controller/ticket/cloture.php?id=<?php echo $ticketid ; ?>");
      xhttp.send();

    }
</script>
</body>
</html>