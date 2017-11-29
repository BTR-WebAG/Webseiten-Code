<!DOCTYPE html>
<html lang="de">

<!-- Kopfzeile -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
    <!-- Die 3 Meta-Tags oben *müssen* zuerst im head stehen; jeglicher sonstiger head-Inhalt muss *nach* diesen Tags kommen -->
    <meta name="description" content="BTR - Web AG">
    <meta name="author" content=">EMP<">
    <meta name="date" content="">
    <meta name="keywords" content="BTR, Web - AG">

    <!-- Bootstrap-CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/customizing.css">

    <!-- jQuery -->
    <script src="js/jquery-3.1.1.min.js"></script>

    <title>BTR - Web AG</title>

</head>

<!-- Hauptbereich zum entwickeln -->

<body id="body-home" data-spy="scroll" data-target=".navbar" data-offset="50">

    <!-- Navigationsbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">

            <!-- Container für die Navigation -->
            <div class="navbar-header">

                <!-- Knopf für Smartphone View -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Name der Navbar -->
                <a class="navbar-brand" href="#">BTR - Web AG</a>
            </div>

            <!-- Container für die Buttons der Navbar (PC Ansicht) -->
            <div class="collapse navbar-collapse" id="myNavbar">

                <!-- Button Liste Navbar -->
                <ul class="nav navbar-nav navbar-light">

                    <!-- Button Home -->
                    <li class="active"><a href="index.php?name=main">HOME</a></li>

                    <!-- Dropdown Menü -->
                    <li class="dropdown">

                        <!-- Dropdown Hauppunkt -->
                        <a class="dropdown-toggle" data-toggle="dropdown" href="index.php?name=anwendungen">Anwendungen
                            <span class="caret"></span></a>

                        <!-- Dropdown Menü Unterpunkte-->
                        <ul class="dropdown-menu">
                            <li><a href="#add-program">Anwendung hinzuf&uumlgen</a></li>
                            <li><a href="#edit-program">Anwendung bearbeiten</a></li>
                            <li><a href="#delete-program">Anwendung l&oumlschen</a></li>
                        </ul>
                    </li>

                    <!-- Navbar Impressum Button -->
                    <li><a href="index.php?name=impressum">Impressum</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <!-- Button Einstellungen -->
                        <a href="#setting">

                            <!-- Icon Einstellungen -->
                            <span class="glyphicon glyphicon-cog"></span> Einstellungen</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
	<?php
	// Variable rausholen
	$name = $_GET['name'];
	if ($name == "")
	{
		include 'Body.php';
	}
	else
	{
		include $name . '.php';
	}
	
	?>
</body>

</html>

<script>
    /* Dropdown Menü anzeigen wenn Maus auf Anwendungen */
    $(function() {
        $(".dropdown").hover(
            function() {
                $(this).addClass('open')
            },
            function() {
                $(this).removeClass('open')
            }
        );
    });

    /* Fade In Effect */
    $(document).ready(function() {

        /* Every time the window is scrolled ... */
        $(window).scroll(function() {

            /* Check the location of each desired element */
            $('.fadein').each(function(i) {

                var bottom_of_object = $(this).offset().top + $(this).outerHeight();
                var bottom_of_window = $(window).scrollTop() + $(window).height();

                /* If the object is completely visible in the window, fade it it */
                if (bottom_of_window > bottom_of_object) {

                    $(this).animate({
                        'opacity': '1'
                    }, 500);

                }
            });
        });
    });
    /* IMG dragging unterbinden*/
    $('img').on('dragstart', function(event) {
        event.preventDefault();
    });
</script>
