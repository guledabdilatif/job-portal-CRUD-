<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit personal_detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <?php
    $connection = mysqli_connect("localhost", "root", "", "job-portal");
    if (isset($_GET['id'])) {
        $person_id = $_GET['id'];
        $query = "SELECT * FROM personal_detail WHERE id= '$person_id'";
        $query_run = mysqli_query($connection, $query);
        if (mysqli_num_rows($query_run) > 0) {
            $person = mysqli_fetch_array($query_run);
            // print_r($person);

    ?>
            <form method="POST" class="container mt-4">
                <input type="hidden" name="person_set_id" id="" value="<?= $person_id?>">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">First Name</label>
                    <input type="text" class="form-control" value="<?= $person['fname']; ?>" name="fname" placeholder="John Duo">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">last Name</label>
                    <input type="text" class="form-control" value="<?= $person['lname'] ?>" name="lname" placeholder="Alex">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email Address</label>
                    <input type="email" class="form-control" name="email" value="<?= $person['email'] ?>" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                    <input type="tet" class="form-control" name="address" value="<?= $person['address'] ?>" placeholder="South B, Building XYZ">
                </div>
                <div class="mb-3">

                    <!-- <button class="btn btn-primary float-start">Previous</button> -->
                    <a href="../index.php" class="btn btn-primary float-end mx-2">Back</a>
                    <button class="btn btn-primary float-end" name="personal_detail_update">Update</button>
                </div>
            </form>
    <?php
        } else {
            echo "no such id found";
        }
    }
    ?>
    <?php

    if (isset($_POST['personal_detail_update'])) {
// echo "i am clied"; 
        $person_set_id = $_POST['person_set_id']; 
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $query = "UPDATE personal_detail SET fname = '$fname', lname='$lname', email='$email', address= '$address' WHERE id = '$person_set_id'";
        $query_run= mysqli_query($connection, $query);
        if($query_run){
            header("Location: ../index.php");
        }else{
            echo "query failed to update";
        }
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>