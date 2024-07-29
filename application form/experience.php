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
    if (isset($_POST['experience_save'])) {
        $job_title = $_POST['job_title'];
        $company_name = $_POST['company_name'];
        $duration = $_POST['duration'];
        $job_description = $_POST['job_description'];
        $skills = $_POST['skills'];
        $query = "INSERT INTO experience(job_title, company_name, duration, job_description, skills) 
                 VALUES('$job_title', ' $company_name', '$duration', '$job_description', '$skills')";
        $query_run = mysqli_query($connection, $query);
        if ($query_run) {
            echo "data inserted successfully";
        } else {
            echo "data not inserted";
        }
        mysqli_close($connection);
    }

    ?>
    <div class="mt-5">
        <div class="container m-5">
            <form action="" method="post">
                <div class="mb-3">
                    <label class="form-label">Job Title</label>
                    <input type="text" name="job_title" class="form-control" placeholder="Job Title">
                </div>
                <div class="mb-3">
                    <label class="form-label">Company Name</label>
                    <input type="text" name="company_name" class="form-control" placeholder="Company Name">
                </div>
                <div class="mb-3">
                    <label class="form-label">Duration</label>
                    <input type="text" name="duration" class="form-control" placeholder="e.g., Jan 2020 - Dec 2022">
                </div>
                <div class="mb-3">
                    <label class="form-label">Job Description</label>
                    <textarea class="form-control" name="job_description" rows="3" placeholder="Describe your responsibilities and achievements"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Skills</label>
                    <input type="text" class="form-control" name="skills" placeholder="List your skills separated by commas">
                </div>


                <div class="mb-5">
                    <a href="personal-detail.php" class="btn btn-primary float-start mb-4">Previous</a>
                    <a href="education.php" class="btn btn-primary float-end mb-4">Next</a>
                    <button name="experience_save" class="btn btn-primary float-end mb-4 mx-2">Save</button>
                </div>

            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>