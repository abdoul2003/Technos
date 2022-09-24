<?php
    require './db/connexion.php';
    $req = 'SELECT * FROM technos';
    $result = $connect->query($req);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <title>All Technos</title>
</head>
<body>
    <div class='container'>
        <div class="card">
            <div class="card-header">
                <h2>All Technos <a href="pages/addTechno.php" class="btn btn-primary float-end">Add</a></h2>
            </div>
            <div class="card-body">
                <table class='table table-bordered table-hover'>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($techno = $result->fetch()) { ?>
                            <tr>
                                <td><?= $techno['id']; ?></td>
                                <td><?= $techno['name']; ?></td>
                                <td><?= $techno['category']; ?></td>
                                <td>
                                    <a href="pages/editTechno.php?idTechno=<?= $techno['id']; ?>" class='btn btn-success'>Edit</a>
                                    &nbsp;&nbsp;
                                    <a href="pages/deleteTechno.php?idTechno=<?= $techno['id']; ?>" class='btn btn-danger'>Delete</a>
                                </td>
                            </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>