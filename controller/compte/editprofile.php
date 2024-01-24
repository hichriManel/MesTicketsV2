<?php
session_start();
if (isset($_SESSION['email'])) {
    if ($_SESSION['type'] == "client") {
        header("location:editprofile.php?id=" . $_SESSION['id']);
    } else {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        } else {
            $id = $_SESSION['id'];
        }
        require_once '../../crud/Crud_account.php';
        require_once '../../crud/Crud_societe.php';
        $crud = new CRUD();
        $compte = $crud->Afficher($id);
        $soc = new Societe();
        $societe = $soc->getSocieteById($compte[9]);
    }
} else {
    header("location:index.php");
}

?>


<div class="col-md-6">
    <label class="form-label">Type de Compte</label>
    <div class="row">
        <div class="col-md-6">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="typec" value="client">
                <label class="form-check-label">
                    client
                </label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="typec" value="admin" checked="checked">
                <label class="form-check-label">
                    Admin
                </label>
            </div>
        </div>
    </div>
</div>
<div class="row g-3 align-items-center">
    <div class="col-md-6">
        <label for="firstname" class="form-label">Prénom</label>
        <input type="text" class="form-control" name="Prénom" required value="<?php echo $compte[1] ?>">
    </div>
    <div class="col-md-6">
        <label for="lastname" class="form-label">Nom</label>
        <input type="text" class="form-control" name="nom" value="<?php echo $compte[0] ?>" required>
    </div>
    <div class="col-md-6">
        <label class="form-label">Phone Number</label>
        <input type="tel" class="form-control" name="tel" required value="<?php echo $compte[3] ?>">
    </div>
    <div class="col-md-6">
        <label for="emailaddress" class="form-label">Email Address</label>
        <input type="email" class="form-control" name="email" value="<?php echo $compte[2] ?>" required>
    </div>
    <?php
    if ($compte[6] != "null" && $compte[6] != null) {

    ?>
        <div class="col-md-6">
            <label for="matricule" class="form-label">Matricule</label>
            <?php
            if ($_SESSION["type"] == 'supervisor') {
            ?>
                <input type="text" class="form-control" name="matricule" value="<?php echo $compte[6] ?>" required><?php } else { ?><input type="text" class="form-control" name="matricule" value="<?php echo $compte[6] ?>" required disabled>
            <?php } ?>
        </div>
    <?php

    } else {
    ?>
        <div class="col-md-6">
            <label for="emailaddress" class="form-label">Id de societe</label>
            <?php
            if ($_SESSION["type"] == 'supervisor') {
            ?>
                <input type="text" class="form-control" name="matricule" value="<?php echo $societe['id'] ?>" required><?php } else { ?><input type="text" class="form-control" name="matricule" value="<?php echo $societe['id'] ?>" required disabled>
            <?php } ?>
        </div>
        <div class="col-md-6">
            <label for="emailaddress" class="form-label">Centre Adresse</label>
            <?php
            if ($_SESSION["type"] == 'supervisor') {
            ?>
                <input type="text" class="form-control" name="matricule" value="<?php echo $societe["adresse"] ?>" required><?php } else { ?><input type="text" class="form-control" name="matricule" value="<?php echo $societe["adresse"] ?>" disabled>
            <?php } ?>
        </div>
        <div class="col-md-6">
            <label for="emailaddress" class="form-label">Nom de societe</label>
            <?php
            if ($_SESSION["type"] == 'supervisor') {
            ?>
                <input type="text" class="form-control" name="matricule" value="<?php echo $societe["nom"] ?>" required><?php } else { ?><input type="text" class="form-control" name="matricule" value="<?php echo $societe["nom"] ?>" disabled>
            <?php } ?>
        </div>
        <div class="col-md-6">
            <label for="emailaddress" class="form-label">Numero du tel</label>
            <?php
            if ($_SESSION["type"] == 'supervisor') {
            ?>
                <input type="text" class="form-control" name="matricule" value="<?php echo $societe["numTel"] ?>" required><?php } else { ?><input type="text" class="form-control" name="matricule" value="<?php echo $societe["numTel"] ?>" required disabled>
            <?php } ?>
        </div>

    <?php
    } ?>
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

</div>

<button type="submit" class="btn btn-primary mt-4">Submit</button>