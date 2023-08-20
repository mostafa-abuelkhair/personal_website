<?php

$myfile = fopen("data/skills.json", "r") or die("Unable to open file!");
$skills = json_decode( fread($myfile,filesize("data/skills.json")) );
fclose($myfile);

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
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo $name ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assets/fontawesome-free-6.4.0-web/css/fontawesome.css">
        <link rel="stylesheet" href="assets/fontawesome-free-6.4.0-web/css/all.css">

        <link rel="stylesheet" href="assets/stylesheets/skills.css">
    </head>
    <body>

        <?php echo $nav?>

        <section class="skills">
            <h1>
                My Skills
            </h1>

            <article>

            <?php 

                foreach ($skills as $skill){
                    echo "<div><span>$skill->name</span>";

                    for ( $i = 1; $i<=5; $i++ ){
                        if($i<= $skill->level){
                            echo "<i class=\"fa-solid fa-star\"></i>";
                        }
                        else{
                            echo "<i class=\"fa-regular fa-star\"></i>";
                        }
                    }
                }

            ?>

            </article>

        </section>
    
        
        <script src="" async defer></script>
    </body>
</html>