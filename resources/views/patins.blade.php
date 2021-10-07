<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.72.0">
  <title>Album example · Bootstrap</title>

  <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/album/">


  <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/carousel/">



  <!-- Bootstrap core CSS -->
 



  <!-- Bootstrap core CSS -->




  <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>

<style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    /* GLOBAL STYLES
    --------------------------------------------- */
    /* Padding below the footer and lighter body text */

    body {
      padding-top: 3rem;
      padding-bottom: 3rem;
      color: #5a5a5a;
    }


    /* CUSTOMIZE THE CAROUSEL
    -------------------------------------------- */

    /* Carousel base class */
    .carousel {
      margin-bottom: 4rem;
    }

    /* Since positioning the image, we need to help out the caption */
    .carousel-caption {
      bottom: 3rem;
      z-index: 10;
    }

    /* Declare heights because of positioning of img element */
    .carousel-item {
      height: 32rem;
    }

    .carousel-item>img {
      position: absolute;
      top: 0;
      left: 0;
      min-width: 100%;
      height: 32rem;
    }


    /* MARKETING CONTENT
-------------------------------------------------- */

    /* Center align the text within the three columns below the carousel */
    .marketing .col-lg-4 {
      margin-bottom: 1.5rem;
      text-align: center;
    }

    .marketing h2 {
      font-weight: 400;
    }

    .marketing .col-lg-4 p {
      margin-right: .75rem;
      margin-left: .75rem;
    }


    /* Featurettes
------------------------- */

    .featurette-divider {
      margin: 5rem 0;
      /* Space out the Bootstrap <hr> more */
    }

    /* Thin out the marketing headings */
    .featurette-heading {
      font-weight: 300;
      line-height: 1;
      letter-spacing: -.05rem;
    }


    /* RESPONSIVE CSS
-------------------------------------------------- */

    @media (min-width: 40em) {

      /* Bump up size of carousel content */
      .carousel-caption p {
        margin-bottom: 1.25rem;
        font-size: 1.25rem;
        line-height: 1.4;
      }

      .featurette-heading {
        font-size: 50px;
      }
    }

    @media (min-width: 62em) {
      .featurette-heading {
        margin-top: 7rem;
      }
    }
    body {
        padding-top: 0;
    }
  </style>

  <link rel="stylesheet" href="css/card.css">


</head>

<body>

  <header>
    <div class="collapse bg-dark" id="navbarHeader">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-md-7 py-4">
            <h4 class="text-white">Sobre</h4>
            <p class="text-muted"> Pensando em reunir pessoas com interesse em comum criamos um grupo no discord e whatsap. Agora temos nossa pagina web! Aqui vamos postar as melhores fotos da semana,Fiquem de olho.</p>
          </div>
          <div class="col-sm-4 offset-md-1 py-4">
            <h4 class="text-white">Contato</h4>
            <ul class="list-unstyled">
              <li><a  href="https://chat.whatsapp.com/EZi2NfXVaPn2vVOchekRG6" target="_blank" class="text-white">whatsapp</a></li>
              <li><a href="https://discord.gg/YS9g3b7b" target="_blank" class="text-white">Discord</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="navbar navbar-dark bg-dark shadow-sm">
      <div class="container">
        <a href="/nova" class="navbar-brand d-flex align-items-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"
            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="mr-2"
            viewBox="0 0 24 24">
            <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z" />
            <circle cx="12" cy="13" r="4" /></svg>
          <strong>Turma do patins</strong>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader"
          aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </div>
  </header>

  <main>

    <section class="py-5 text-center container">
      <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
          <h1 class="font-weight-light">Seja bem vindo!</h1>
          <p class="lead text-muted"> Seja um apoiador do nosso projeto. Aqui iremos divulgar fotos e link dos nossos apoiadores. 
            Se você faz parte do nosso grupo no discord e patina com a gente, basta mandar sua melhor foto patinando que iremos postar aqui. Não precisa pagar nada por isso. Se você tem interesse em divulgar aqui sua empresa ou marca, então basta clicar em: <Strong> seja um apoiador</Strong> 
            </p>
          <p>
            <a href="#" class="btn btn-primary my-2"> Seja um apoiador</a>
            <a href="https://discord.gg/YS9g3b7b" target="_blank" class="btn btn-secondary my-2"> Seja um membro</a>
          </p>
        </div>
      </div>
    </section>

    
    <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
            <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
    
            <h2>whatsapp</h2>
            <p>temos também um grupo no whatsapp, use pra coisas de maior urgência, der preferences pra falar no discord</p>
            <p><a class="btn btn-secondary" href="https://chat.whatsapp.com/EZi2NfXVaPn2vVOchekRG6" target="_blank"> Acesse whatsapp &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="bd-placeholder-img rounded-circle" src="/image/eu.jpg" width="140" height="140" alt="Gabrielfoto">
            <h2>Engenheiro de Software</h2>
            <p>Criador do pagina web Turma do Patins </p>
            <p><a class="btn btn-secondary" href="https://github.com/Gabrielfernandes87f" target="_blank"> Acesse github &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
    
            <h2>Discord</h2>
            <p>Acesse nosso discord e se conecte com varias pessoas que gosta de patins</p>
            <p><a class="btn btn-secondary" href="https://discord.gg/YS9g3b7b" target="_blank">acesse Discord&raquo;</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    
    
        <!-- START THE FEATURETTES -->
    
        <hr class="featurette-divider">

        <div id="events-container" class="col-md-12">
            <div id="cards-container" class="row">
                <div class="card col-md-3">
                    <img src="/image/image1.jpeg" alt="por do sol">
                    <div class="card-body">
                        <div class="card-date">06/10/2021</div>
                        <h5 class="card-title">Campos do Conde-CG</h5>
                        <p class="card-participants">Gabriel Fernandes</p>
                        <a href="/evento1" class="btn btn-primary">Saber mais</a>
                    </div>
                </div>

                <div class="card col-md-3">
                    <img src="/image/image2.jpeg" alt="por do">
                    <div class="card-body">
                    <div class="card-date">10/08/2019</div>
                    <h5 class="card-title">Parque de bodocongo</h5>
                    <p class="card-participants"> Gabriel Fernandes</p>
                    <a href="/evento2" class="btn btn-primary">Saber mais</a>
                    </div>
                </div>

                <div class="card col-md-3">
                    <img src="/image/image3.jpeg" alt="por">
                    <div class="card-body">
                    <div class="card-date">20/11/20</div>
                    <h5 class="card-title">Campina Grande</h5>
                    <p class="card-participants"> Gabriel Fernandes</p>
                    <a href="/evento3" class="btn btn-primary">Saber mais</a>
                    </div>
                </div>

                

            </div>
        </div>

  


  </main>

  <footer class="aling-center">
    <p class=" text-center footer">Copyright © 2021 Web developer | Powered by Gabriel Fernandes</p>
  </footer>

</body>

</html>