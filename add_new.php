<?php
include "db_conn.php";

if(isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    // Memeriksa apakah input 'gender' ada dan tidak kosong
    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';

    // Memperbaiki query SQL dengan menambahkan kolom 'id' yang diabaikan
    $sql = "INSERT INTO `crud`(`id`, `first_name`, `last_name`, `email`, `gender`) 
    VALUES (NULL, '$first_name','$last_name','$email','$gender')";

    $result = mysqli_query($conn, $sql);

    if($result) {
        header("Location: index.php?msg=New record created successfully");
        exit();
    }
    else {
        echo "Failed: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
     rel="stylesheet" 
     integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Simple CRUD APP</title>
</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5"
    style="background-color: #00ff5573;">
        CRUD NGUAWUR REK
    </nav>

    <div class="container">
        <div class="text-center mb-4">
            <h3>Nambahke Wong Anyar</h3>
            <p class="text-muted">Rampungke form neng ngisor iki cok</p>
        </div>

        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">Jeneng Awal:</label>
                    <input type="text" class="form-control" name="first_name" 
                    placeholder="Ahmad">
                </div>
                 <div class="col">
                    <label class="form-label">Jeneng Keri:</label>
                    <input type="text" class="form-control" name="last_name" 
                    placeholder="Hidayat">
                </div>
            </div>
                <div class="mb-3">
                    <label class="form-label">Email:</label>
                    <input type="email" class="form-control" name="email" 
                    placeholder="ahmadhidayat77@gmail.com">
                </div>
                    <div class="form-group mb-3">
                        <label>Kelamin:</label>
                        <input type="radio" class="form-check-input" name="gender" id="bakwan" value="bakwan">
                        <label for="male" class="form-input-label">Bakwan</label>
                        <input type="radio" class="form-check-input" name="gender" id="seblak" value="seblak">
                        <label for="female" class="form-input-label">Seblak</label>
                        <input type="radio" class="form-check-input" name="gender" id="mie gacoan" value="mie gacoan">
                        <label for="female" class="form-input-label">Mie Gacoan</label> 
                        <input type="radio" class="form-check-input" name="gender" id="nasi padang" value="nasi padang">
                        <label for="female" class="form-input-label">Nasi padang</label>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-success" name="submit">Save Cok</button>
                        <a href="index.php" class="btn btn-danger">Gak Sido</a>
                    </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" 
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" 
    crossorigin="anonymous"></script>
</body>
</html>
