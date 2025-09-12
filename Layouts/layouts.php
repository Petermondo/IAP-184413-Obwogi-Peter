<?php
class layouts {
//HEADER
    public function header($conf) {
    ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $conf['site_name']; ?></title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" crossorigin="anonymous">
     <style>
      body { padding-top: 70px; } /* fix for fixed-top navbar overlap */
      </style>  
     </head>
  <body>
    <header><h1><?php echo $conf['site_name']; ?></h1></header>
    <?php
    }

    //NAVIGATION
    public function nav($conf) {
    ?>
    <div style="margin-top: 70px;"></div>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#"><?php echo $conf['site_name']; ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active"><a class="nav-link" href="./">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="signup.php">Sign Up</a></li>
          <li class="nav-item"><a class="nav-link" href="signin.php">Sign In</a></li>
        </ul>
        
      </div>
    </nav>
    <?php
    }

    //BANNER
     public function banner($conf) {
    ?>
    <main role="main">
      <div class="jumbotron">
        <div class="container">
          <h1 class="display-3"><?php echo $conf['banner_title'] ?? "Hello, world!"; ?></h1>
          <p><?php echo $conf['banner_text'] ?? "This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique."; ?></p>
          <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
        </div>
      </div>
    <?php
    }

    //CONTENT
     public function content($conf) {
    ?>
      <div class="container">
        <div class="row">
          <div class="col-md-4"><h2>Heading</h2><p>Some text...</p></div>
          <div class="col-md-4"><h2>Heading</h2><p>Some text...</p></div>
          <div class="col-md-4"><h2>Heading</h2><p>Some text...</p></div>
        </div>
        <hr>
      </div>
    <?php
    }
    //SIGNUP / SIGNIN FORMS
public function form_frame($conf, $ObjForm) {
    ?>
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <?php
            if (basename($_SERVER['PHP_SELF']) == '/Obwogi_Peter_Mondo_184413/signup.php') {
                $ObjForm->signup();
            } else {
                $ObjForm->signin();
            }
            ?>
          </div>
          <div class="col-md-4">
            <h2>Side Info</h2>
            <p>Some extra text or ads here...</p>
          </div>
        </div>
        <hr>
      </div>
    <?php
    }
    //FOOTER
    public function footer($conf) {
    ?>
    </main>
    <footer class="container">
      <p>Copyright &copy; - <?php echo $conf['site_name'] . " " . date("Y"); ?></p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
  </body>
</html>
    <?php
}
}