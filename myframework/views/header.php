<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Logo Nav - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../assets/css/logo-nav.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap/css/tether.min.css">

    <script src="../assets/email/validation.js" type="text/javascript"></script>
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="http://placehold.it/300x60?text=Logo" width="150" height="30" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">

                <?


                foreach ($data as $link) {
                    $strLink = str_replace(".", "", $link);
                    echo "<li class='nav-item'><a class='nav-link' onclick='toggleActive(this)' href='$link'>" . $link . "</a></li>";
                }

                ?>

                <script>

                    function toggleActive(e){
                        e.parentElement.className = 'nav-item active';

                        var links = document.getElementsByTagName('a');

                        for(var i = 0; i < links.length; i++){
                            if(links[i].href !== e.href){
                                links[i].parentElement.className = 'nav-item';
                            }
                        }
                    }


                </script>
            </ul>
        </div>
    </div>
</nav>