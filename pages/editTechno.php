<?php
    require '../db/connexion.php';
    $idTechno = isset($_GET['idTechno']) ? $_GET['idTechno'] : 0;
    $req = "SELECT * FROM technos WHERE id = $idTechno";
    $result = $connect->query($req);
    $techno = $result->fetch();
    $id = $techno['id'];
    $name = $techno['name'];
    $category = $techno['category'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Edit Techno</title>
</head>
<body>
    <div class='container'>
        <div class="card">
            <div class="card-header">
                <h2>Edit Techno <a href="../index.php" class="btn btn-primary float-end">Quit</a></h2>
            </div>
            <div class="card-body">
                <form action="updateTechno.php" method="post">
                    <div class="form-group">
                        <label for="id">ID: <?php echo $id; ?></label>
                        <input type="hidden" value='<?php echo $id; ?>' placeholder='ID' name='id' class='form-control mt-2' id='id'>
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" value='<?php echo $name; ?>' placeholder='Name' name='name' class='form-control mt-2' id='name' required='required'>
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <select name="category" id="category" class='form-control mt-2' required='required'>
                            <option value="frontend" <?php if($category == "frontend") echo 'selected' ?> >Frontend</option>
                            <option value="backend" <?php if($category == "backend") echo 'selected' ?> >Backend</option>
                            <option value="others" <?php if($category == "others") echo 'selected' ?> >Others</option>
                        </select>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class='btn btn-success'>Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>