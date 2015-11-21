<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Site Institucional do SENAI - Brusque</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/estilo.css" />

        <!-- Javascript -->
        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

    </head>

    <body data-spy="scroll" data-target=".navbar" data-offset="50">

        <header class="jumbotron text-center" id="topo">
            <h1>Senai</h1>
            <p>A indústria do conhecimento.</p>

        </header>

        <nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="197">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">SENAI</a>
                </div>
                <div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li><a href="#inicio">Inicio</a></li>
                            <li><a href="#cursos">Cursos</a></li>
                            <li><a href="#noticias">Notícias</a></li>
                            <li><a href="#fotos">Fotos</a></li>
                            <li><a href="#videos">Vídeos</a></li>
                            <li><a href="#contato">Contato</a></li>
                            <li><a href="#localizacao">Localização</a></li>
                        </ul>
                        <form role="form">
                            <div>                 
                                <a class="small">Inscreva-se em nossa newsletter:</a>
                                <div class="input-group input-group-sm">
                                    <input type="email" class="form-control" id="email" placeholder="seunome@seuprovedor.com.br"/>
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-envelope">
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </form>  
                    </div>
                </div>
            </div>
        </nav>    
        <div id="inicio" class="container-fluid">
            <h1>Inicio</h1>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="img_chania.jpg" alt="Chania">
                    </div>

                    <div class="item">
                        <img src="img_chania2.jpg" alt="Chania">
                    </div>

                    <div class="item">
                        <img src="img_flower.jpg" alt="Flower">
                    </div>

                    <div class="item">
                        <img src="img_flower2.jpg" alt="Flower">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>
        <div id="cursos" class="container-fluid">
            <h1>Cursos</h1>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
        </div>
        <div id="noticias" class="container-fluid">
            <h1>Notícias</h1>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
        </div>
        <div id="fotos" class="container-fluid">
            <h1>Fotos</h1>

        </div>
        <div id="videos" class="container-fluid">
            <div class="text-center">
                <h1>Galeria de Vídeos</h1>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/FuTq3I905_A?list=PLD4DD46F345EC95B2" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
        <?php include 'formContato.php'; ?>
        <div id="localizacao" class="container-fluid">
            <div class="text-center">
                <h1>Localização</h1>
                <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d113641.274156672!2d-48.98024230037518!3d-27.11568013239441!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x94df47b2050e1221%3A0xb0ebeaaf853b447!2sAv.+Primeiro+de+Maio%2C+670+-+Primeiro+de+Maio%2C+Brusque+-+SC%2C+88353-202!3m2!1d-27.1156975!2d-48.910202!5e0!3m2!1spt-BR!2sbr!4v1447821436954" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
        <script src="js/meuscript.js"></script>
    </body>
</html>
