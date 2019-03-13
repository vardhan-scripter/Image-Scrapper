<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="icon/png" href="logo.png">
    <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Aclonica" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Image Scrapper..</title>
</head>
<body>
	<div class="question" id="question">
    <br>
    <h1 class="main_heading animated bounce">Image Scrapper</h1>
    <br>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method= "post" id="form">  
        <center>
            <div class="search_div animated bounce">
                <input type="url" name="url" class="urlsearch" placeholder="Paste a link to scrapp" autocomplete="off" required>
                <button class="scrapp" id="scrapp">SCRAP IT</button><br><br><br><br>
            </div>     
        </center>
    </form>
    <h2 class="caption animated bounce">This is a simple application basically take the website url as input and Render bulk of images those are present in that website as output.</h2>
</div>
<div class="answer" id="answer"><?php include('scrapit.php'); ?></div>

</body>
</html>
