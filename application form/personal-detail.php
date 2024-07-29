<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Personal Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <?php
    $connection = mysqli_connect("localhost", "root", "", "job-portal");
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }
    if (isset($_POST['personal_detail_save'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $address = $_POST['address'];

        $query = "INSERT INTO personal_detail(fname, lname, email, address) VALUES('$fname', '$lname','$email', '$address')";
        $query_run = mysqli_query($connection, $query);
        // if($query_run){
        //     echo "data inserted succcessfull";
        // }else{
        //     echo "connect not inserted";
        // }
    }
    mysqli_close($connection);
    ?>
    <div class="mt-6">
        <div class="container mt-5">
            <form method="POST">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">First Name</label>
                    <input type="text" class="form-control" name="fname" placeholder="John Duo">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">last Name</label>
                    <input type="text" class="form-control" name="lname" placeholder="Alex">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email Address</label>
                    <input type="email" class="form-control" name="email" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                    <input type="tet" class="form-control" name="address" placeholder="South B, Building XYZ">
                </div>
                <div class="mb-3">

                    <!-- <button class="btn btn-primary float-start">Previous</button> -->
                    <a href="experience.php" class="btn btn-primary float-end mx-2">Next</a>
                    <button class="btn btn-primary float-end" name="personal_detail_save">Save</button>

                </div>

            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>