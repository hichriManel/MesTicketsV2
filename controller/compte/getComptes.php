<?php
require_once '../../crud/Crud_account.php';
$crud = new CRUD();
$comptes = $crud->lister();
?>
<thead>
    <tr>
        <th>
            <div class="form-check custom-checkbox ms-2">
                <input type="checkbox" class="form-check-input" id="checkAll" required="">
                <label class="form-check-label" for="checkAll"></label>
            </div>
        </th>
        <th>Nom & Prenom</th>
        <th>e-mail</th>
        <th>Centre/Matricule</th>
        <th>Type</th>
        <th>Status</th>
        <th>Telephone</th>
        <th>Action</th>

    </tr>
</thead>
<tbody>

    <?php
    for ($i = 0; $i < count($comptes); $i++) {
        echo '<tr>
        <td>
            <div class="form-check custom-checkbox ms-2">
                <input type="checkbox" class="form-check-input" id="customCheckBox17" required="">
                <label class="form-check-label" for="customCheckBox17"></label>
            </div>
        </td>

        <td>
            <div>
                <a href="#" class="h5">' . $comptes[$i][0] . ' ' . $comptes[$i][1] . '</a>
            </div>
        </td>
        <td>' . $comptes[$i][2] . '</td>
        <td>';
        if ($comptes[$i][5] == "client") {
            echo $comptes[$i][9];
        } else {
            echo $comptes[$i][6];
        }
        echo '</td>
        <td>
            ' . $comptes[$i][5] . '
        </td>
        <td>';
        if ($comptes[$i][7] != "Verifie") {
            echo '<span class="badge light badge-danger">' . $comptes[$i][7] . '</span>';
        } else {
            echo '<span class="badge light badge-success">' . $comptes[$i][7] . '</span>';
        }
        echo '</td>
        <td>'
             . $comptes[$i][3] . '
        </td>
        <td>
            <div class="d-flex">
                <a href="javascript:void(0);" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                <a href="javascript:void(0);" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
            </div>
        </td>
    </tr>';
    }
    ?>
</tbody>