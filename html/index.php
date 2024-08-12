<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Resume</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <?php
        // Loading JSON
        $json = file_get_contents("info.json");
        $json_data = json_decode($json, true);
        ?>
        <!-- Navigation-->
        <?php
        require __DIR__ . "/nav.php";
        echo Nav($json_data);
        ?>
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            <?php
            require __DIR__ . "/about.php";
            echo About($json_data);
            ?>

            <hr class="m-0" />

            <!-- Skills-->
            <?php
            require __DIR__ . "/skills.php";
            echo Skills($json_data);
            ?>

            <hr class="m-0" />

            <!-- Projects -->
            <?php
            require __DIR__ . "/projects.php";
            echo Projects($json_data);
            ?>
            
            <hr class="m-0" />

            <!-- Education-->
            <?php
            require __DIR__ ."/education.php";
            echo Education();
            ?>
            
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
