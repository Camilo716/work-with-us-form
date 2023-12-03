<?php
use Controllers\WorkWithUsController;
$response = "";
require_once 'Controllers/WorkWithUsController.php';
$controller = new WorkWithUsController();

if (isset($_POST["form"]) ) {
    $response = $controller->post();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work With Us</title>
    <script src="http://localhost:35729/livereload.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php if ($response === "💪😃"): ?>
        <div class="alert success">
            <span>Message sent successfully!</span>
        </div>
    <?php elseif ($response === "👎😑"): ?>
        <div class="alert danger">
            <span>Whoops! Something happened</span>
        </div>
    <?php endif; ?>
    <form action="index.php" method="post" enctype="multipart/form-data">    
        <h1>Work With Us!</h1>
        <div class="input-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name">
        </div>
        <div class="input-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
        </div>
        <div class="input-group">
            <label for="subject">Subject:</label>
            <input type="text" name="subject" id="subject">
        </div>
        <div class="input-group">
            <label for="message">Message:</label>
            <textarea name="message" id="message"></textarea>
        </div>
        <div class="input-group">
            <label for="cv">Curriculum Vitae:</label>
            <input type="file" name="curriculum_vitae" id="cv">
        </div>
        <div class="button-container">
            <button name="form" type="submit">Submit</button>
        </div>
        <div class="contact-info">  
            <div class="info">
                <span><i class="fas fa-map-marker-alt"></i> 13 Saw Mill Circle, North Olmested.</span>
            </div>
            <div class="info">
                <span><i class="fas fa-phone"></i> +1 123 456 7890</span>
            </div>
        </div>
    </form>
    <script src="https://kit.fontawesome.com/bbff992efd.js" crossorigin="anonymous"></script>
</body>
</html>