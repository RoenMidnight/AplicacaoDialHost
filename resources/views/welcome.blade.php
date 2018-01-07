<!doctype html>
<html lang="{{ app()->getLocale() }}">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Aplicação DialHost</title>

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom fonts for this template -->
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Cabin:700' rel='stylesheet' type='text/css'>

        <!-- Custom styles for this template -->
        <link href="css/grayscale.css" rel="stylesheet">

    </head>

    
  <body id="page-top">

    <div id="loading">
        <div id="spinner"></div>
    </div>

    <style>
        
        #loading {
            position: fixed;
            width: 100%;
            height: 100%;
            background: black;
            opacity: .5;
            z-index:50;
            visibility:hidden;
        }

        #spinner {
            position: absolute;
            left: 48%;
            top: 50%;
            height:60px;
            width:60px;
            margin:0px auto;
            -webkit-animation: rotation .6s infinite linear;
            -moz-animation: rotation .6s infinite linear;
            -o-animation: rotation .6s infinite linear;
            animation: rotation .6s infinite linear;
            border-left:6px solid rgba(0,174,239,.15);
            border-right:6px solid rgba(0,174,239,.15);
            border-bottom:6px solid rgba(0,174,239,.15);
            border-top:6px solid rgba(0,174,239,.8);
            border-radius:100%;       
        }
        
        @-webkit-keyframes rotation {
            rom {-webkit-transform: rotate(0deg);}
            o {-webkit-transform: rotate(359deg);}
        }
        @-moz-keyframes rotation {
            from {-moz-transform: rotate(0deg);}
            to {-moz-transform: rotate(359deg);}
        }
        @-o-keyframes rotation {
            from {-o-transform: rotate(0deg);}
            to {-o-transform: rotate(359deg);}
        }
        @keyframes rotation {
            from {transform: rotate(0deg);}
            to {transform: rotate(359deg);}
        }
    </style>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Aplicação DialHost</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <!--<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">Sobre</a>
            </li>-->
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#cadastroVisita">Cadastre-se</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contato</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Intro Header -->
    <header class="masthead">
      <div class="intro-body">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h1 class="brand-heading">Bruno Cesar A.F.F. Mendes</h1>
              <p class="intro-text">Desenvolvedor web fullstack. Adora café, pão de queijo e conversar sobre a vida o universo e tudo mais.
                </p>
              <a href="#cadastroVisita" class="btn btn-circle js-scroll-trigger">
                <i class="fa fa-angle-double-down animated"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- About Section -->
   <!-- <section id="about" class="content-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>Bruno Cesar A.F.F. Mendes</h2>
            <p>Um developer muito louco, que se mete em altas confusões com uma turminha do barulho sempre dispostas a
              entrar nas mais incríveis aventuras.</p>
          </div>
        </div>
      </div>
    </section>-->

    <!-- Cadastro Section -->
    <section id="cadastroVisita" class="cadastro-section content-section text-center">
      <div class="container">
        <h2 class="sucessoVisita">Obrigado o seu Cadastro foi realizado!</h2>
        <div class="col-lg-8 mx-auto">
          <form id="visitanteForm">
            <h2>Cadastre-se</h2>
            {!! csrf_field() !!}
            <div class="form-group">
              <label for="nomeVisitante">Nome</label>
              <input class="form-control" id="nomeVisitante" placeholder="Nome" name="Nome" minlength="5" required>
            </div>
            <div class="form-group">
              <label for="emailVisitante">E-mail</label>
              <input type="email" class="form-control" id="emailVisitante" name="Email" placeholder="Email" required>
            </div>
            <div class="form-group">
              <label for="telefoneVisitante">Telefone</label>
              <input type="tel" class="form-control" id="telefoneVisitante" name="Telefone" placeholder="Telefone" required>
            </div>
            <div class="form-group">
              <label for="celularVisitante">Celular</label>
              <input type="tel" class="form-control" id="celularVisitante" name="Celular" placeholder="Celular">
            </div>
            <div class="form-group">
              <label for="dataNascVisitante">Data de Nascimento</label>
              <input class="form-control" id="dataNascVisitante" placeholder="Data de Nascimento" name="Dt_Nascimento" required>
            </div>
            <div class="form-group">
              <label for="cepVisitante">CEP</label>
              <input class="form-control" id="cepVisitante" name="CEP" placeholder="CEP">
            </div>
            <div class="form-group">
              <label for="bairroVisitante">Bairro</label>
              <input class="form-control" id="bairroVisitante" name="Bairro" placeholder="Bairro" >
            </div>
            <div class="form-group">
              <label for="cidadeVisitante">Cidade</label>
              <input class="form-control" id="cidadeVisitante" name="Cidade" placeholder="Cidade" >
            </div>
            <div class="form-group">
              <label for="ufVisitante">UF</label>
              <select class="form-control" id="ufVisitante" name="UF" placeholder="UF" >
              <option value="AC">Acre</option>
              <option value="AL">Alagoas</option>
              <option value="AM">Amazonas</option>
              <option value="AP">Amapá</option>
              <option value="BA">Bahia</option>
              <option value="CE">Ceará</option>
              <option value="DF">Distrito Federal</option>
              <option value="ES">Espírito Santo</option>
              <option value="GO">Goiás</option>
              <option value="MA">Maranhão</option>
              <option value="MG">Minas Gerais</option>
              <option value="MS">Mato Grosso do Sul</option>
              <option value="MT">Mato Grosso</option>
              <option value="PA">Pará</option>
              <option value="PB">Paraíba</option>
              <option value="PE">Pernambuco</option>
              <option value="PI">Piauí</option>
              <option value="PR">Paraná</option>
              <option value="RJ">Rio de Janeiro</option>
              <option value="RN">Rio Grande do Norte</option>
              <option value="RO">Roraima</option>
              <option value="RR">Rondônia</option>
              <option value="RS">Rio Grande do Sul</option>
              <option value="SC">Santa Catarina</option>
              <option value="SE">Sergipe</option>
              <option value="SP">São Paulo</option>
              <option value="TO">Tocantins</option>
              </select>
            </div>
            <div class="form-group">
              <label for="enderecoVisitante">Endereço</label>
              <input class="form-control" id="enderecoVisitante" name="Endereco" placeholder="Endereço" >
            </div>
            <button id="submitCadastro" type="submit" class="btn btn-default btn-lg">Salvar</button>
          </form>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="content-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>Meus contatos</h2>
            <p></p>
            <ul class="list-inline banner-social-buttons">
              <li class="list-inline-item">
                <a href="https://pt-br.facebook.com/brunocesar.mendes" target="_blank" class="btn btn-default btn-lg">
                  <i class="fa fa-facebook fa-fw"></i>
                  <span class="network-name">Facebook</span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://github.com/RoenMidnight/" target="_blank" class="btn btn-default btn-lg">
                  <i class="fa fa-github fa-fw"></i>
                  <span class="network-name">Github</span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://plus.google.com/u/0/103737397609928760023" target="_blank" class="btn btn-default btn-lg">
                  <i class="fa fa-google-plus fa-fw"></i>
                  <span class="network-name">Google+</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

  

    <!-- Footer -->
    <footer>
      <div class="container text-center">
        <p>Copyright &copy; Bruno Cesar A.F.F. Mendes 2018</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
   
    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/grayscale.min.js"></script>

    <!-- jQuery Mask -->
    <script src="js/jQuery.mask.js"></script>
   
    <!-- jQuery Validate -->
    <script src="js/jquery.validate.min.js"></script>
  
    <!-- Correios -->
    <script src="js/jquery.correios.min.js"></script>

    <!--Meus Scripts -->
    <script src="js/custom.js"></script>

  </body>

</html>

