<?php 
define('BASE_DIR', '/var/www/domains/projectspace.pl/web/plugins/');
define('PHPSPEC_VERSION', '0.1');
define('BEHAT_VERSION', '0.1');
?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <title>Welcome to home of PhpStorm BDD plugins.</title>
    <base href="/plugins/" />
    <link rel="stylesheet" href="stylesheets/styles.css">
    <link rel="stylesheet" href="stylesheets/pygment_trac.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="wrapper">
      <header>
		  <?php include BASE_DIR.'/elements/left_column.php'; ?>
      </header>
      <section>
		  <?php
		  if (!defined('INC_PAGE')) {
			  define('INC_PAGE', 'homepage');
		  }
          include BASE_DIR.'/elements/pages/'.INC_PAGE.'.php';
		  ?>
      </section>
      <footer>
        <p>This project is maintained by <a href="https://github.com/mprzytulski">mprzytulski</a></p>
        <p><small>Hosted on GitHub Pages &mdash; Theme by <a href="https://github.com/orderedlist">orderedlist</a></small></p>
      </footer>
    </div>
    <script src="javascripts/scale.fix.js"></script>
    
  </body>
</html>