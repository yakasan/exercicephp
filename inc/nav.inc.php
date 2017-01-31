<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <span class="navbar-brand" > <?= $_SESSION['namePage'] ?></span>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="indexx.php?page=1">Accueil<span class="sr-only">(current)</span></a></li>
        <li><a href="indexx.php?page=2">Tp1<span class="sr-only">(current)</span></a></li>
        <li><a href="indexx.php?page=3">Tp2<span class="sr-only">(current)</span></a></li>
        <li><a href="indexx.php?page=4">Tp3<span class="sr-only">(current)</span></a></li>
        <li><a href="indexx.php?page=5">Tp4<span class="sr-only">(current)</span></a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
