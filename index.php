<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Job Board</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        table {
            border: 1px solid black;
            padding: 10px;
            border-radius: 10px !important;
        }

        table tr td {
            font-weight: normal !important;
        }
    </style>
</head>

<body>
    <?php
    $connection = mysqli_connect("localhost", "root", "", "job-portal");
    // if(!$connection){
    //     die("connection failed". mysqli_connect_error());

    // }else{
    //     echo("connection sucessful");
    // }
    $query = "SELECT * from personal_detail";
    $query_run = mysqli_query($connection, $query);

    ?>

    <h1 class="text-center">Personal Details</h1>
    <!-- Personal details -->
    <div class="container">
        <a href="./application form/personal-detail.php" class="btn btn-success float-end my-1">Add person</a>
        <table class="table table-striped" class="mt-4">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email Address</th>
                    <th scope="col">Address</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($query_run) {
                    foreach ($query_run as $row) {
                ?>
                        <tr>
                            <th style="font-weight: normal;"><?php echo $row['id'] ?></th>
                            <th style="font-weight: normal;"><?php echo $row['fname'] ?></th>
                            <th style="font-weight: normal;"><?php echo $row['lname'] ?></th>
                            <th style="font-weight: normal;"><?php echo $row['email'] ?></th>
                            <th style="font-weight: normal;"><?php echo $row['address'] ?></th>
                            <th style="font-weight: normal;">
                                <a href="" class="btn btn-primary btn-sm">View</a>
                                <a href="./application form/edit_personal_detail.php?id=<?= $row['id']?>" class="btn btn-success btn-sm">Edit</a>
                                <a href="" class="btn btn-danger btn-sm">Delete</a>
                            </th>
                        </tr>
                <?php
                    }
                }

                ?>




            </tbody>
        </table>
    </div>
    <!-- Experience start-->
    <div class="container">
    <a href="./application form/experience.php" class="btn btn-success float-end my-1">Add Experience</a>
        <h1 class="text-center">Experience Details</h1>
        <table class="table table-striped container">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Job Title</th>
                    <th>Company Name</th>
                    <th>Duration</th>
                    <th>Job Description</th>
                    <th>Skills</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM experience";
                $query_run = mysqli_query($connection, $query);
                ?>
                <?php
                if ($query_run) {
                    foreach ($query_run as $row) {
                ?>
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['job_title'] ?></td>
                            <td><?php echo $row['company_name'] ?></td>
                            <td><?php echo $row['duration'] ?></td>
                            <td><?php echo $row['job_description'] ?></td>
                            <td><?php echo $row['skills'] ?></td>
                            <td class="d-flex gap-1">
                                <a href="" class="btn btn-primary btn-sm d-inline">View</a>
                                <a href="./application form/edit-experience.php?id=<?= $row['id']?>" class="btn btn-secondary btn-sm d-inline">Edit</a>
                                <a href="" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                <?php
                    }
                }
                ?>

            </tbody>
        </table>
    </div>
    <!-- Experience end-->
    <!-- Education start -->
    <div class="container">
    <a href="./application form/education.php" class="btn btn-success float-end my-1">Add Education</a>

        <h1 class="text-center">Education Details</h1>
        <?php
        $query = "SELECT * FROM education";
        $query_run = mysqli_query($connection, $query);

        ?>
        <table class="table table-striped container">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Education Level</th>
                    <th>Institution Name</th>
                    <th>Duration</th>
                    <th>Degree Description</th>
                    <th>Certifications</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($query_run) {
                    foreach ($query_run as $row) {
                ?>
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['Education_Level'] ?></td>
                            <td><?php echo $row['Institution_Name'] ?></td>
                            <td><?php echo $row['Duration'] ?></td>
                            <td><?php echo $row['Degree_Description'] ?></td>
                            <td><?php echo $row['Certifications'] ?></td>
                            <td class="d-flex gap-1">
                                <a href="" class="btn btn-primary btn-sm d-inline">View</a>
                                <a href="./application form/edit-education.php?id=<?= $row['id']?>" class="btn btn-secondary btn-sm d-inline" name="edit_personal_details">Edit</a>
                                <a href="" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                <?php
                    }
                }
                ?>

            </tbody>
        </table>
    </div>
    <!-- Education end -->
    <!-- Files start -->
    <div class="container">
    <a href="./application form/files.php" class="btn btn-success float-end my-1">Add Testimonials</a>

        <h1 class="text-center">CV and Cover Letter</h1>
        <table class="table table-striped container">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Resume </th>
                    <th>Cover Letter</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>

                </tr>
            </tbody>
        </table>
    </div>
    <!-- files end -->
    <!-- Files start -->
    <div class="container">
    <a href="./application form/review.php" class="btn btn-success float-end my-1">Add Review</a>

        <?php
        
        $query = "SELECT * from review";
        $query_run = mysqli_query($connection, $query);
        ?>
        <h1 class="text-center">Review Message</h1>
        <table class="table table-striped container">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Review message </th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($query_run) {
                    foreach ($query_run as $row) {
                ?>
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['review_message'] ?></td>
                            <td class="d-flex gap-1">                                
                            <a href="" class="btn btn-primary btn-sm d-inline">view</a>
                            <a href="./application form/edit-review.php?id=<?= $row['id']?> " class="btn btn-secondary btn-sm d-inline">edit</a>
                            <a href="" class="btn btn-danger btn-sm d-inline">delete</a>
                            </td>

                        </tr>
                <?php
                    }
                }
                ?>

            </tbody>
        </table>
    </div>
    <!-- files end -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>