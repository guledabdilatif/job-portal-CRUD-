<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <?php
    $connection = mysqli_connect("localhost", "root", "", "job-portal");
    if (!$connection) {
        die("connection faild" . mysqli_connect_error());
    }

    if (isset($_POST['review-save'])) {
        $review_message = $_POST['review_message'];
        $query = "INSERT INTO review(review_message) VALUES ('$review_message')";
        $query_run = mysqli_query($connection, $query);
        // if ($query_run) {
        //     echo "data inserted successfully";
        // } else {
        //     echo "data not inserted ";
        // }
    }

    ?>
    <div class="mt-6">
        <div class="container mt-5">
            <form  method="POST">
                <div class="mb-3">
                    <label class="form-label">write message for the Hiring Manager</label>
                    <textarea class="form-control" type="text"  name="review_message" rows="6" placeholder="message"></textarea>
                </div>
                <div class="mb-3">
                    <a href="files.php" class="btn btn-primary float-start">Previous</a>
                    <button name="review-save" class="btn btn-primary float-end">save</button>

                </div>

            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>