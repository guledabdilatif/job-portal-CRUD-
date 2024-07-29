<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit-education</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <?php
    $connection = mysqli_connect("localhost", "root", "", "job-portal");
    if (isset($_GET['id'])) {
        $education_id = $_GET['id'];
        $query = "SELECT * FROM education WHERE id ='$education_id'";
        $query_run = mysqli_query($connection, $query);
        if (mysqli_num_rows($query_run) > 0) {
            $data = mysqli_fetch_array($query_run);
            // print_r($data);
    ?>
            <div class="mt-5">
                <div class="container m-5">
                    <form method="POST">

                        <!-- Education History -->
                        <input type="hidden" value="<?= $education_id ?>" name="id">
                        <div class="mb-3">
                            <label class="form-label">Education Level</label>
                            <input type="text" value="<?= $data['Education_Level'] ?>" name="Education_Level" class="form-control" placeholder="e.g., Bachelor's, Master's, PhD">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Institution Name</label>
                            <input type="text" class="form-control" value="<?= $data['Institution_Name'] ?>" name="Institution_Name" placeholder="Institution Name">
                        </div>
                        <div class="mb-3">
                            <label for="educationDuration" class="form-label">Duration</label>
                            <input type="text" class="form-control" name="Duration" value="<?= $data['Duration'] ?>" placeholder="e.g., Sep 2016 - Jun 2020">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Degree Description</label>
                            <textarea class="form-control" rows="3" name="Degree_Description" placeholder="Describe your degree and any relevant coursework or projects"><?= $data['Degree_Description'] ?></textarea>
                        </div>
                        <!-- Certifications -->
                        <div class="mb-3">
                            <label class="form-label">Certifications</label>
                            <input type="text" class="form-control" value="<?= $data['Certifications'] ?>" name="Certifications" placeholder="List your certifications separated by commas">
                        </div>
                        <div class="mb-5">
                            <button name="education_save" class="btn btn-primary float-end mb-4">Update</button>
                        </div>

                    </form>
                </div>
            </div>
    <?php
        }
    }

    ?>

    <?php
    if (isset($_POST['education_save'])) {
        $id = $_POST['id'];
        $Education_Level = $_POST['Education_Level'];
        $Institution_Name = $_POST['Institution_Name'];
        $Duration = $_POST['Duration'];
        $Degree_Description = $_POST['Degree_Description'];
        $Certifications = $_POST['Certifications'];
        $query = "UPDATE education SET Education_Level='$Education_Level', Institution_Name='$Institution_Name', Duration='$Duration', Degree_Description='$Degree_Description', Certifications='$Certifications' WHERE id='$id'";
        $query_run = mysqli_query($connection, $query);
        if ($query_run) {
            header('Location: ../index.php');
         } else {
             echo "failed to update";
         }
    }
    
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>