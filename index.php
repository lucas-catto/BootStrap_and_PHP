<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Projeto Dev Web</title>
        <!-- BootStrap Import -->
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <!-- Own CSS -->
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
        <!-- ==================================================================================================== -->
        <nav class="navbar navbar-default navbar-fixed-top"> <!-- navbar-fixed-top -->
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toogle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Danki Code</a>
                </div> <!-- navbar-header -->
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div> <!-- container -->
        </nav>
        <!-- ==================================================================================================== -->
        <div class="box">
            <section class="banner">
                <div class="overlay">

                </div>
                <div class="container chamada-banner">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2><?php echo htmlentities('<');?>Danki.Code<?php echo htmlentities('>');?></h2>
                            <p>Empresa voltada para desenvolvimento web e marketing digital</p>
                            <a href="">Saiba Mais!</a>
                        </div> <!-- col-md-12 -->
                    </div> <!-- row -->
                </div> <!-- container -->
            </section>
        </div> <!-- box -->




    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="./js/bootstrap.min.js"></script>
    </body>
</html>
