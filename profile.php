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
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assets/fontawesome-free-6.4.0-web/css/fontawesome.css">
        <link rel="stylesheet" href="assets/fontawesome-free-6.4.0-web/css/all.css">

        <link rel="stylesheet" href="assets/stylesheets/profile.css">
    </head>
    <body>

        <?php echo $nav?>

        <section class="bio">

            <img src="<?php echo $profile->avatar ?>" alt="">
            <h2><?php echo $name ?></h2>
            <h3>A <?php echo $profile->jop ?></h3>
            <p><?php echo $profile->bio ?></p>

        </section>

        <section class="details">

            <h2>Details</h2>
            <p>Email : <?php echo $profile->email ?></p>
            <p>Lives in : <?php echo $profile->place ?></p>
            <p>Age : <?php echo $profile->age ?></p>
            <p>Phone number : <?php echo $profile->number ?></p>

            <div>
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-linkedin"></i>
            </div>

        </section>
        
        <script src="" async defer></script>
    </body>
</html>