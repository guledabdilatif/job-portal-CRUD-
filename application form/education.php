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
   if(isset($_POST['education_save'])){
    $Education_Level = $_POST['Education_Level'];
    $Institution_Name = $_POST['Institution_Name'];
    $Duration = $_POST['Duration'];
    $Degree_Description = $_POST['Degree_Description'];
    $Certifications = $_POST['Certifications'];

    $query = "INSERT INTO  education(Education_Level, 	Institution_Name, Duration, Degree_Description, Certifications)
                               VALUES('$Education_Level', '$Institution_Name', '$Duration',  '$Degree_Description','$Certifications' )";
    $query_run = mysqli_query($connection, $query);
    // if ($query_run) {
    //     echo "data insetred sucessfully";
    // }
   }
    ?>
    <div class="mt-5">
        <div class="container m-5">
            <form  method="POST">

                <!-- Education History -->
                <div class="mb-3">
                    <label class="form-label">Education Level</label>
                    <input type="text" name="Education_Level" class="form-control" placeholder="e.g., Bachelor's, Master's, PhD">
                </div>
                <div class="mb-3">
                    <label class="form-label">Institution Name</label>
                    <input type="text" class="form-control" name="Institution_Name" placeholder="Institution Name">
                </div>
                <div class="mb-3">
                    <label for="educationDuration" class="form-label">Duration</label>
                    <input type="text" class="form-control" name="Duration" id="educationDuration" placeholder="e.g., Sep 2016 - Jun 2020">
                </div>
                <div class="mb-3">
                    <label class="form-label">Degree Description</label>
                    <textarea class="form-control" rows="3" name="Degree_Description" placeholder="Describe your degree and any relevant coursework or projects"></textarea>
                </div>
                <!-- Certifications -->
                <div class="mb-3">
                    <label class="form-label">Certifications</label>
                    <input type="text" class="form-control" name="Certifications" placeholder="List your certifications separated by commas">
                </div>
                <div class="mb-5">
                    <a href="experience.php" class="btn btn-primary float-start mb-4">Previous</a>
                    <a href="files.php" class="btn btn-primary float-end mb-4 mx-2">Next</a>
                    <button name="education_save" class="btn btn-primary float-end mb-4">Save</button>
                </div>

            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>