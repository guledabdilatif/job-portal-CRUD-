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
    if (isset($_GET['id'])) {
        $experience_id = $_GET['id'];
        // echo $experience;
        $query = "SELECT * FROM experience WHERE id= '$experience_id'";
        $query_run = mysqli_query($connection, $query);
        if (mysqli_num_rows($query_run) > 0) {
            $experience = mysqli_fetch_array($query_run);
            // print_r($experience);
    ?>
            <div class="mt-5">
                <div class="container m-5">
                    <form action="" method="post">
                        <input type="hidden" value="<?= $experience_id ?>" name="id">
                        <div class="mb-3">
                            <label class="form-label">Job Title</label>
                            <input type="text" name="job_title" value="<?= $experience['job_title'] ?>" class="form-control" placeholder="Job Title">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Company Name</label>
                            <input type="text" name="company_name" value="<?= $experience['company_name'] ?>" class="form-control" placeholder="Company Name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Duration</label>
                            <input type="text" name="duration" value="<?= $experience['duration'] ?>" class="form-control" placeholder="e.g., Jan 2020 - Dec 2022">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Job Description</label>
                            <textarea class="form-control" name="job_description" rows="3" placeholder="Describe your responsibilities and achievements"><?= $experience['job_description'] ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Skills</label>
                            <input type="text" class="form-control" value="<?= $experience['skills'] ?>" name="skills" placeholder="List your skills separated by commas">
                        </div>


                        <div class="mb-5">
                            <a href="../index.php" class="btn btn-primary float-start mb-4">back</a>
                            <button class="btn btn-primary float-end mb-4" name="update_experience_btn">Update</button>

                        </div>

                    </form>
                </div>
            </div>
    <?php
        }
    }

    ?>
    <?php
    if (isset($_POST['update_experience_btn'])) {
        $id = $_POST['id'];
        $job_title = $_POST['job_title'];
        $company_name = $_POST['company_name'];
        $job_description= $_POST['job_description'];
        $duration = $_POST['duration'];
        $skills = $_POST['skills'];
        $query = "UPDATE experience SET job_title= '$job_title', job_description= '$job_description', company_name='$company_name',  duration= '$duration', skills='$skills' WHERE id='$id'";
        $query_run = mysqli_query($connection, $query);
        if ($query_run) {
           header('Location: ../index.php');
        } else {
            echo "update not successfull";
        }
    }
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>