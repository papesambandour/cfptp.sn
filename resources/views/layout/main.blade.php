<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title',"Home2") </title>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/myapp.css">
</head>
<body>
  <div class="container">
      <h1 class="h1"> CFPTP </h1>
      <nav class="navbar navbar-default">
          <div class="container-fluid">
              <!-- Brand, toggle pour l'affichage en version mobile -->
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#">Brand</a>
              </div>
              <!-- Liens de navigation, formulaires et autres -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                      <li class="active"><a href="#" title="Lien actif">Accueil <span class="sr-only">(current)</span></a></li>
                      <li class=""><a href="#">Qui somme-nous</a></li>
                      <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Nos formations <span class="caret"></span></a>
                          <ul class="dropdown-menu">
                              <li class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">LIIII <span class="caret"></span> </a>
                                <ul class="dropdown-menu">
                                  <li><a>KLH</a></li>

                                </ul>
                              </li>
                              <li><a href="#" title="Lien 2.2">Lien 2.2</a></li>
                              <li><a href="#" title="Lien 2.3">Lien 2.3</a></li>
                              <li role="separator" class="divider"></li>
                              <li><a href="#" title="Lien séparé 1">Lien séparé 1</a></li>
                              <li role="separator" class="divider"></li>
                              <li><a href="#" title="Lien séparé 2">Lien séparé 2</a></li>
                          </ul>

                      </li>

                  </ul>
                  <form class="navbar-form navbar-left">
                      <div class="form-group">
                          <input type="text" class="form-control" placeholder="Rechercher">
                      </div>
                      <button type="submit" class="btn btn-sm btn-default">OK</button>
                  </form>
                  <ul class="nav navbar-nav navbar-right">
                      <li><a href="#" title="Lien à droite">Lien à droite</a></li>
                  </ul>
              </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
      </nav>
        <header class="container">
            <div class="row">
                <h3 class="h3"> JBJKLQHRI RBQH</h3>
            </div>
        </header>
        <div class="container">
            @yield('content')
        </div>
        <footer class="footer">

        </footer>
    </div>
    <script src="js/jquery.js" type="text/javascript"></script>
  <script src="js/app.js"></script>
    <script src="js/myapp.js" type="text/javascript"></script>
</body>
</html>