<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Recycle</title>

    <!-- Bootstrap core CSS -->
    <link href="startbootstrap-1-col-portfolio-gh-pages/startbootstrap-1-col-portfolio-gh-pages/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="startbootstrap-1-col-portfolio-gh-pages/startbootstrap-1-col-portfolio-gh-pages/css/1-col-portfolio.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">RECYCLE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="about.php">About
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
            <?php

          if( (!( isset( $_SESSION['login_status']))) || ($_SESSION['login_status'] != "ready")) {
            echo '<a class="nav-link" href="dangky.php">sign</a>

            ';
          }
          else{
            echo "<a>Xin chào ".$_SESSION["name"]."</a>";
          }
        ?>
            </li>
            <li class="nav-item">
            <?php
        if( (!( isset( $_SESSION['login_status']))) || ($_SESSION['login_status'] != "ready")) {
              echo '<li><a class="nav-link" href="login_form.php">login</a>
                     
                    </li>';
             }
           else{
              echo '<a class="nav-link" href="logout.php">Log out</a>';
           }
        ?>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading -->
      <h1 style="margin-top: 40px">Home</h1>

      <?php  
        include 'product_blog.php';
      ?>

      <!-- Pagination -->
      <ul class="pagination justify-content-center" style="margin-top: 40px">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
