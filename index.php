<!doctype html>
<html lang="en">
<?php
if (!$_SESSION){
    session_start();
}
//include ('parts/cookies.php');
$page = 'login';
if ($_SESSION['loggedin']){
    $page = 'index';
}
?>
    <head>
        <?php
            include('parts/head.php');
        ?>
        <link type="text/css" rel="stylesheet" href="styling/css/custom.css">
    </head>
    <body background="styling/backgroundsss.png">

        <!-- Wrapper div -->
        <div id="wrapper">

            <!-- Header div -->
            <div id="header" class="col-sm-12">
                <?php
                    include('parts/header.php'); // File containing header code

                ?>
            </div>

            <!-- Content div -->
            <div id="content" class="col-sm-12">
                <div class="row">

                    <!-- Left colum -->
                    <div class="col-sm-3">
                        <?php
//                            include('parts/leftMenu.php'); // File containing the menu
                        ?>
                    </div>

                    <!-- Center colum -->
                    <div class="col-sm-6">
                        <?php
                             // To get the page

                        switch ($page) {
                            case 'login':
                                include ('parts/login.php');
                            break;

                            case 'index':

                                include('parts/pdfCreator.php');

                                break;

                            case 'about':
//                                include('about.php');
                            break;

                            case 'contact':
//                                include('contact.php');
                            break;
                            }
                        ?>
                    </div>

                    <div class="col-sm-3">
                        <?php
//                            include('leftMenu.php'); // File containing the menu
                        ?>
                    </div>
                </div>

                <div class="row">
                    <div id="footer" class="col-sm-12">
                        <?php
                            include('parts/footer.php'); // File containing the footer
                            include('parts/scripts.php'); // File containing js's
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>