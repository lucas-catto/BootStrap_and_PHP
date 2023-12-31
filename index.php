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
        <!-- Importando BootStrap -->
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
        <!-- Criando site com BootStrap 1/5 -->
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
            <!-- ==================================================================================================== -->
            <!-- Criando site com BootStrap 2/5 -->
            <section class="cadastro-lead">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-md-6">
                            <h2>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-airplane" viewBox="0 0 16 16">
                                    <path d="M6.428 1.151C6.708.591 7.213 0 8 0s1.292.592 1.572 1.151C9.861 1.73 10 2.431 10 3v3.691l5.17 2.585a1.5 1.5 0 0 1 .83 1.342V12a.5.5 0 0 1-.582.493l-5.507-.918-.375 2.253 1.318 1.318A.5.5 0 0 1 10.5 16h-5a.5.5 0 0 1-.354-.854l1.319-1.318-.376-2.253-5.507.918A.5.5 0 0 1 0 12v-1.382a1.5 1.5 0 0 1 .83-1.342L6 6.691V3c0-.568.14-1.271.428-1.849Zm.894.448C7.111 2.02 7 2.569 7 3v4a.5.5 0 0 1-.276.447l-5.448 2.724a.5.5 0 0 0-.276.447v.792l5.418-.903a.5.5 0 0 1 .575.41l.5 3a.5.5 0 0 1-.14.437L6.708 15h2.586l-.647-.646a.5.5 0 0 1-.14-.436l.5-3a.5.5 0 0 1 .576-.411L15 11.41v-.792a.5.5 0 0 0-.276-.447L9.276 7.447A.5.5 0 0 1 9 7V3c0-.432-.11-.979-.322-1.401C8.458 1.159 8.213 1 8 1c-.213 0-.458.158-.678.599Z"/>
                                </svg>
                                Entre na nossa lista!
                            </h2>
                        </div> <!-- col-md-6 -->
                        <div class="col-md-6">
                            <form method="post">
                                <input type="text" name="name" id="name"><input type="submit" value="Submit"> <!-- <button type="submit" class="btn btn-default">Submit</button> -->
                            </form>
                        </div> <!-- col-md-6 -->
                    </div>
                </div>
            </section>
            <!-- ==================================================================================================== -->
            <!-- Criando site com BootStrap 3/5 -->
            <section class="depoimento text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>Depoimento</h2>
                            <blockquote>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat consequuntur dolorum, qui veniam impedit minus inventore doloremque necessitatibus, harum accusantium consequatur maiores animi nostrum corporis eum vel et deleniti error.</p>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </section>
            <section class="diferenciais text-center">
                <h2>Conheça nossa empresa.</h2>
                <div class="container diferenciais-container">
                    <div class="row">
                        <!-- ------------------------------ -->
                        <div class="col-md-4">
                            <h3><span class="glyphicon glyphicon-glass"></span></h3>
                            <h2>Diferencial #1</h2>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex velit ipsa assumenda dicta? Qui dolorum eaque voluptates non saepe optio debitis beatae quisquam voluptate iste tenetur, fugit soluta nostrum sunt!</p>
                        </div>
                        <!-- ------------------------------ -->
                        <div class="col-md-4">
                            <h3><span class="glyphicon glyphicon-star"></span></h3>
                            <h2>Diferencial #2</h2>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex velit ipsa assumenda dicta? Qui dolorum eaque voluptates non saepe optio debitis beatae quisquam voluptate iste tenetur, fugit soluta nostrum sunt!</p>
                        </div>
                        <!-- ------------------------------ -->
                        <div class="col-md-4">
                            <h3><span class="glyphicon glyphicon-heart"></span></h3>
                            <h2>Diferencial #3</h2>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex velit ipsa assumenda dicta? Qui dolorum eaque voluptates non saepe optio debitis beatae quisquam voluptate iste tenetur, fugit soluta nostrum sunt!</p>
                        </div>
                        <!-- ------------------------------ -->
                    </div>
                </div>
            </section>
            <!-- ==================================================================================================== -->
            <!-- Criando site com BootStrap 4/5 -->
            <section class="equipe">
                <h2>Equipe</h2>
                <div class="container equipe-container">
                    <div class="row">
                        <!-- ---------------------------------------------------------------------- -->
                        <div class="col-md-6">
                            <div class="equipe-single">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="user-picture">
                                            <div class="user-picture-child"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <h3>Lucas</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci assumenda voluptate cumque libero delectus. Recusandae neque illo, ipsa tempore aperiam aliquid esse vel ducimus expedita incidunt exercitationem sequi inventore alias.</p>
                                    </div> <!-- col-md-10 -->
                                </div> <!-- row -->
                            </div> <!-- equipe-single -->
                        </div> <!-- col-md-6 -->
                        <!-- ---------------------------------------------------------------------- -->
                        <div class="col-md-6">
                            <div class="equipe-single">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="user-picture">
                                            <div class="user-picture-child"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <h3>Lucas</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci assumenda voluptate cumque libero delectus. Recusandae neque illo, ipsa tempore aperiam aliquid esse vel ducimus expedita incidunt exercitationem sequi inventore alias.</p>
                                    </div> <!-- col-md-10 -->
                                </div> <!-- row -->
                            </div> <!-- equipe-single -->
                        </div> <!-- col-md-6 -->
                        <!-- ---------------------------------------------------------------------- -->
                        <div class="col-md-6">
                            <div class="equipe-single">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="user-picture">
                                            <div class="user-picture-child"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <h3>Lucas</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci assumenda voluptate cumque libero delectus. Recusandae neque illo, ipsa tempore aperiam aliquid esse vel ducimus expedita incidunt exercitationem sequi inventore alias.</p>
                                    </div> <!-- col-md-10 -->
                                </div> <!-- row -->
                            </div> <!-- equipe-single -->
                        </div> <!-- col-md-6 -->
                        <!-- ---------------------------------------------------------------------- -->
                        <div class="col-md-6">
                            <div class="equipe-single">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="user-picture">
                                            <div class="user-picture-child"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <h3>Lucas</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci assumenda voluptate cumque libero delectus. Recusandae neque illo, ipsa tempore aperiam aliquid esse vel ducimus expedita incidunt exercitationem sequi inventore alias.</p>
                                    </div> <!-- col-md-10 -->
                                </div> <!-- row -->
                            </div> <!-- equipe-single -->
                        </div> <!-- col-md-6 -->
                        <!-- ---------------------------------------------------------------------- -->
                        <div class="col-md-6">
                            <div class="equipe-single">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="user-picture">
                                            <div class="user-picture-child"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <h3>Lucas</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci assumenda voluptate cumque libero delectus. Recusandae neque illo, ipsa tempore aperiam aliquid esse vel ducimus expedita incidunt exercitationem sequi inventore alias.</p>
                                    </div> <!-- col-md-10 -->
                                </div> <!-- row -->
                            </div> <!-- equipe-single -->
                        </div> <!-- col-md-6 -->
                        <!-- ---------------------------------------------------------------------- -->
                        <div class="col-md-6">
                            <div class="equipe-single">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="user-picture">
                                            <div class="user-picture-child"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <h3>Lucas</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci assumenda voluptate cumque libero delectus. Recusandae neque illo, ipsa tempore aperiam aliquid esse vel ducimus expedita incidunt exercitationem sequi inventore alias.</p>
                                    </div> <!-- col-md-10 -->
                                </div> <!-- row -->
                            </div> <!-- equipe-single -->
                        </div> <!-- col-md-6 -->
                        <!-- ---------------------------------------------------------------------- -->
                    </div>
                </div> <!-- container equipe-container -->
            </section>
            <!-- ==================================================================================================== -->
            <!-- Criando site com BootStrap 5/5 -->
            <section class="final-site">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <!-- ------------------- -->
                            <h2>Talk with us</h2>
                            <!-- ------------------- -->
                            <form action="" method="post">
                                <!-- ------------------- -->
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control" id="name">
                                </div>
                                <!-- ------------------- -->
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" class="form-control" id="email">
                                </div>
                                <!-- ------------------- -->
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea class="form-control"></textarea>
                                </div>
                                <!-- ------------------- -->
                                <button type="submit" class="btn btn-default">Submit</button>
                                <!-- ------------------- -->
                            </form>
                        </div>
                        <!-- ---------------------------------------------------------------------- -->
                        <div class="col-md-6">
                            <h2>Our plans</h2>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Day</th>
                                        <th>Week</th>
                                        <th>Month</th>
                                    </tr>
                                </thead>
                                <thead>
                                    <tr>
                                        <th>US$19.00</th>
                                        <th>US$32.00</th>
                                        <th>US$56.00</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ---------------------------------------------------------------------- -->
            <footer>
                <p class="text-center">Project from Danki Code by <a href="https://www.github.com/lucascsilva0">Lucas</a></p>
            </footer>
            <!-- ==================================================================================================== -->

        </div> <!-- box -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="./js/bootstrap.min.js"></script>
    </body>
</html>
