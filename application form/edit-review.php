<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Edit Review</title>
</head>

<body>
    <?php
    $connection = mysqli_connect("localhost", "root", "", "job-portal");
    if (!$connection) {
        die("connection faild" . mysqli_connect_error());
    }

    if (isset($_GET['id'])) {
        $review_id = $_GET['id'];
        $query = "SELECT * FROM review WHERE id = '$review_id'";
        $query_run = mysqli_query($connection, $query);
        if (mysqli_num_rows($query_run) > 0) {
            $data = mysqli_fetch_array($query_run);
            // print_r($data);
    ?>
            <div class="mt-6">
                <div class="container mt-5">
                    <form method="POST">
                        <input type="hidden" name="id" value="<?= $data['id']?>">
                        <div class="mb-3">
                            <label class="form-label">write message for the Hiring Manager</label>
                            <textarea class="form-control" type="text" value="" name="review_message" rows="6" placeholder="message"><?= $data['review_message']?></textarea>
                        </div>
                        <div class="mb-3">
                            <a href="files.php" class="btn btn-primary float-start">Previous</a>
                            <button name="review-update" class="btn btn-primary float-end">update</button>

                        </div>

                    </form>
                </div>
            </div>
    <?php

        }
    }

    ?>
    <?php
    if(isset($_POST['review-update'])){
        $id = $_POST['id'];
        $review_message = $_POST['review_message'];
        $query = "UPDATE review SET review_message='$review_message' WHERE id='$id'";
        $query_run = mysqli_query($connection, $query);
        if($query_run){
            header("Location: ../index.php");
        }
        else{
            echo 'review not updated';
        }

    }
    
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>