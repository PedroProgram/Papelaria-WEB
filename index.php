<?php 
    include("conexao.php");

    //CONTATO

    if (isset($_POST['enviar'])) {
   
        $nome = mysqli_real_escape_string($mysqli, $_POST['nome']);
        $email = mysqli_real_escape_string($mysqli, $_POST['email']);
        $mensagem = mysqli_real_escape_string($mysqli, $_POST['mensagem']);

        $query = mysqli_query($mysqli,'INSERT INTO contato (nome, email, mensagem) VALUES ("' . $nome. '","' . $email. '","' . $mensagem. '")'); 
       
        if($query){
          echo "<script>alert('Contato enviado!');</script>";
         }  
         else{
            echo  "Algo deu errado, tente novamente";

        }
    }


    //comentarios
    if (isset($_POST['enviar_comentario'])) {
   
        $nome_comentario = mysqli_real_escape_string($mysqli, $_POST['nome']);
        $email_comentario = mysqli_real_escape_string($mysqli, $_POST['email']);
        $comentario = mysqli_real_escape_string($mysqli, $_POST['comentario']);

        $querycomentario = mysqli_query($mysqli,'INSERT INTO comentarios (nome, email, comentario, status) VALUES ("' . $nome_comentario. '","' . $email_comentario. '","' . $comentario. '", 1)'); 
       
        if($querycomentario){
          echo "<script>alert('Comentario enviado!');</script>";
         }  
         else{
            echo  "Algo deu errado, tente novamente";

        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Papelaria Humanas</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Simple line icons-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet"/>
        <link rel="stylesheet" href="css/contato.css">
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <a class="menu-toggle rounded" href="#"><i class="fas fa-bars"></i></a>
        <nav id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand"><a href="#page-top">MENU</a></li>
                <li class="sidebar-nav-item"><a href="#page-top">Home</a></li>
                <li class="sidebar-nav-item"><a href="#about">Cadastros</a></li>
                <li class="sidebar-nav-item"><a href="#services">Servi??os</a></li>
                <li class="sidebar-nav-item"><a href="#portfolio">Produtos</a></li>
                <li class="sidebar-nav-item"><a href="#contact">Localiza????o</a></li> <!-- lembrar de fazer uma div para cadastros -->
                <li class="sidebar-nav-item"><a href="#contato">Contato</a></li>
                <li class="sidebar-nav-item"><a href="#mensagem">Mensagem</a></li>
            </ul>
        </nav>
        <!-- Header-->
        <header class="masthead d-flex align-items-center">
            <div class="container px-4 px-lg-5 text-center">
                <h1 class="mb-1">Papelaria Humanas</h1>
                <h3 class="mb-5"><em>Sua papelaria em modo virtual!</em></h3>
                <a class="btn btn-primary btn-xl" href="#about">Cadastre-se</a>
            </div>
        </header>
        <!-- About-->
        <section class="content-section bg-light" id="about">
            <div class="container px-4 px-lg-5 text-center">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-10">
                        <h2>Fa??a seu cadastro para receber nossas novidades:</h2>
                        <a class="btn btn-dark btn-xl" href="clientes.php">Clientes</a>
                       
                    </div>

                    <div class="col-lg-10">
                         <h2>Caso seja funcion??rio fa??a os seguintes cadastros:</h2>
                        <a class="btn btn-dark btn-xl" href="login.php?pagina=marca">Marca</a>
                        <a class="btn btn-dark btn-xl" href="login.php?pagina=categoria">Categoria</a> <!-- Mudar a div #services -->
                        <a class="btn btn-dark btn-xl" href="login.php?pagina=fornecedor">Fornecedor</a> <!-- Mudar a div #services -->
                        <a class="btn btn-dark btn-xl" href="login.php?pagina=produtos">Produtos</a>
                        <a class="btn btn-dark btn-xl" href="login.php?pagina=funcionario">Funcion??rios</a> <!-- Mudar a div #services -->
                        <a class="btn btn-dark btn-xl" href="login.php?pagina=cargo">Cargo</a>
                    </div>

                </div>
            </div>
        </section>
        <div class="card mb-4">
      <h5 class="card-header">Busca de Clientes</h5>
      <div class="card-body">
        <form name="search" action="pesquisas.php" method="post">
        <div class="input-group">
          <input type="text" name="nome" class="form-control" placeholder="Procure por..." required>
          <span class="input-group-btn">
            <button class="btn btn-secondary" name="buscar" type="submit">Ok</button>
          </span>
        </form>
        </div>
      </div>
    </div>
        <!-- Services-->
        <section class="content-section bg-primary text-white text-center" id="services">
            <div class="container px-4 px-lg-5">
                <div class="content-section-heading">
                    <h3 class="text-secondary mb-0">Servi??os</h3>
                    <h2 class="mb-5">O que oferecemos?</h2>
                </div>
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                        <span class="service-icon rounded-circle mx-auto mb-3"><i class="fa-solid fa-print"></i></span>
                        <h4><strong>Impress??es e c??pias</strong></h4>
                        <p class="text-faded mb-0">Encaminhados em nosso E-mail ou WhatsApp.</p>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                        <span class="service-icon rounded-circle mx-auto mb-3"><i class="fa-solid fa-pen"></i></i></span>
                        <h4><strong>Materiais </strong></h4>
                        <p class="text-faded mb-0">Materias escolares e de escrit??rio.</p>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
                        <span class="service-icon rounded-circle mx-auto mb-3"><i class="fa-solid fa-suitcase-rolling"></i></span>
                        <h4><strong>Malas e mochilas.</strong></h4>
                        <p class="text-faded mb-0">
                            Para todos os gostos e estilos.
                            <i class="fa-solid fa-check"></i>
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <span class="service-icon rounded-circle mx-auto mb-3"><i class="fa-solid fa-book"></i></span>
                        <h4><strong>Encaderna????es</strong></h4>
                        <p class="text-faded mb-0">Livros did??ticos e apostilas.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Callout-->
        <section class="callout">
            <div class="container px-4 px-lg-5 text-center">
                <h2 class="mx-auto mb-5">
                    Pague com pix e Ganhe 5% de desconto!
                      
                     
                </h2>
            </div>
        </section>
        <!-- Portfolio-->
        <section class="content-section" id="portfolio">
            <div class="container px-4 px-lg-5">
                <div class="content-section-heading text-center">
                    <h3 class="text-secondary mb-0">Novidades</h3>
                    <h2 class="mb-5">Em nossa loja</h2>
                </div>
                <div class="row gx-0">
                    <div class="col-lg-6">
                        <a class="portfolio-item" href="#!">
                            <div class="caption">
                                <div class="caption-content">
                                    <div class="h2">Livros Infantis</div>
                                    <p class="mb-0">Para explorar a imagina????o de nossas crian??as!</p>
                                </div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio-1.jpg" alt="..." />
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a class="portfolio-item" href="#!">
                            <div class="caption">
                                <div class="caption-content">
                                    <div class="h2">Brinquedos</div>
                                    <p class="mb-0">Variedades de brinquedos para meninos e meninas!</p>
                                </div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio-2.jpg" alt="..." />
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a class="portfolio-item" href="#!">
                            <div class="caption">
                                <div class="caption-content">
                                    <div class="h2">Materiais Escolares/ Escrit??rio</div>
                                    <p class="mb-0">Novidades e variedades de materiais escolares e de escrit??rio</p>
                                </div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio-3.jpg" alt="..." />
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a class="portfolio-item" href="#!">
                            <div class="caption">
                                <div class="caption-content">
                                    <div class="h2">Impress??es & C??pias</div>
                                    <p class="mb-0">Impress??es e c??pias de qualidade voc?? s?? encontra aqui!</p>
                                </div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio-4.jpg" alt="..." />
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Map-->
        <div class="content-section-heading text-center ">
            <h3 class="text-secondary mb-0">Localiza????o</h3>
            <h2 class="mb-5">Nossa localiza????o</h2>
        </div>
        <div class="map" id="contact">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14719.968992871074!2d-47.6455872!3d-22.7285295!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x197834b105f878e3!2sSenac%20Piracicaba!5e0!3m2!1spt-BR!2sbr!4v1670870248933!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <br />
            <small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a></small>
        </div>
   
       <main class="contato" id="contato">
        
        <form method="post"> <h2 class="h2">Contato</h2>
            <label>Nome</label>
            <input type="text" name="nome" required />
            <label>E-mail</label>
            <input type="email" name="email" required />
            <label>Mensagem</label>
            <textarea name="mensagem"></textarea>
            <button type="enviar" name="enviar">Enviar</button>

        </form>

       </main>


        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container px-4 px-lg-5">
                <ul class="list-inline mb-5">
                    <li class="list-inline-item">
                        <a class="social-link rounded-circle text-white mr-3" href="#!"><i class="icon-social-facebook"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a class="social-link rounded-circle text-white mr-3" href="#!"><i class="icon-social-twitter"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a class="social-link rounded-circle text-white" href="#!"><i class="icon-social-github"></i></a>
                    </li>
                </ul>
                <p class="text-muted small mb-0">Copyright &copy; Papelaria Humanas</p>
            </div>
        </footer>
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
