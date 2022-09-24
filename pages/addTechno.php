<?php
    require '../db/connexion.php';
    if (isset($_POST['name']) && isset($_POST['category'])) {
        $name = $_POST['name'];
        $category = $_POST['category'];
        $req = 'INSERT INTO technos(name, category) VALUES(?, ?)';
        $params = array($name, $category);
        $result = $connect->prepare($req);
        $result->execute($params);

        header('location: ../index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Add Techno</title>
</head>
<body>
    <div class='container'>
        <div class="card">
            <div class="card-header">
                <h2>Add Techno <a href="../index.php" class="btn btn-primary float-end">Quit</a></h2>
            </div>
            <div class="card-body">
                <form action="addTechno.php" method="post">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" placeholder='Name' name='name' class='form-control mt-2' id='name' required='required'>
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <select name="category" id="category" class='form-control mt-2' required='required'>
                            <option value="frontend">Frontend</option>
                            <option value="backend">Backend</option>
                            <option value="others">Others</option>
                        </select>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class='btn btn-success'>Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>