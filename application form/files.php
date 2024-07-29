<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>CV and Resume</title>
    <style>
        .custom-file-input {
            margin-top: 30px;
            padding: 10px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="mt-6">
        <div class="container mt-5">
            <form action="">
                <!-- Resume Upload -->
                <div class="mb-3">
                    <label for="resume" class="form-label">Upload Resume</label>
                    <div class="input-group">
                        <input type="file" class="custom-file-input" id="resume" accept=".pdf,.doc,.docx">
                    </div>
                    <small class="form-text text-muted">Accepted formats: .pdf, .doc, .docx</small>
                </div>

                <!-- Cover Letter Upload -->
                <div class="mb-3 float-right">
                    <label for="coverLetter" class="form-label">Upload Cover Letter</label>
                    <div class="input-group">
                        <input type="file" class="custom-file-input" id="coverLetter" accept=".pdf,.doc,.docx">
                    </div>
                    <small class="form-text text-muted">Accepted formats: .pdf, .doc, .docx</small>
                </div>

                <div class="mb-3">
                    <a href="education.php" class="btn btn-primary float-start">Previous</a>
                    <a href="review.php" class="btn btn-primary float-end">Next</a>
                </div>

            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>