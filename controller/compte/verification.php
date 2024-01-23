<?php
require_once '../../crud/Crud_account.php';
require_once '../../crud/Crud_code.php';
$token = $_GET['token'];

$code = new Crud_code();
$result = $code->verifCode($token);
if ($result == true) {
    $code->deleteCode($token);
?>
    <div class="row-lg-5 text-center">
        <img src="https://cdn-icons-png.flaticon.com/512/6711/6711626.png" alt="">
    </div>
    <div class="row-lg-7 text-center">
        <h1 class="h4 text-gray-900 mb-4">Compte a etes verifier avec succes</h1>
        <a href="login.php" class="btn btn-primary">Login</a>
    </div>

<?php
} else {
    $code->deleteCode($token);
?>
    <div class="row-lg-5 text-center">
        <img src="https://static-00.iconduck.com/assets.00/404-page-not-found-illustration-512x249-ju1c9yxg.png" alt="">
    </div>
    <div class="row-lg-7 text-center">
        <h1 class="h4 text-gray-900 mb-4">Code n'existe pas</h1>
        <a href="login.php" class="btn btn-primary">Login</a>
    </div>
<?php
}
?>