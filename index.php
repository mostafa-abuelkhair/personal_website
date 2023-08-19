<?php

$myfile = fopen("data/profile.json", "r") or die("Unable to open file!");
$profile = json_decode( fread($myfile,filesize("data/profile.json")) );

$name =  $profile->firstName . " " . $profile->lastName;
fclose($myfile);

$myfile = fopen("components/nav.html", "r") or die("Unable to open file!");
$nav =  fread($myfile,filesize("components/nav.html"));
fclose($myfile);

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo $name ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assets/stylesheets/home.css">
    </head>
    <body>

        <?php echo $nav ?>

        <section class="welcome">

            <h1>Welcome!</h1>
            <h2>I'm <?php echo $name ?></h2>

            <div>
                <a href="profile.php"><button>Profile</button></a>
                <a href="skills.php"><button>Skills</button></a>
            </div>
        </section>


        
        <script src="" async defer></script>
    </body>
</html>