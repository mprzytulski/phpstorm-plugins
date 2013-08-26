<?php 
define('BASE_DIR', '/var/www/domains/projectspace.pl/web/plugins/');
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
		  <?php include BASE_DIR.'/elements/right_col.php'; ?>
      </header>
      <section>
        <h2><a name="behat" class="anchor" href="#behat"><span class="octicon octicon-link"></span></a>Behat / <a href="./behat">Screenshots</a></h2>
		<h4>General:</h4>
		<ul>
			<li>Custom icon for Behat Context and PageObjects files</li>
		</ul>

		<h4>Feature file:</h4>
		<ul>
			<li>tag auto completion</li>
			<li>reference provider for Gherkin steps</li>
		</ul>

		<h4>Behat context:</h4>
		<ul>
			<li>reference and inspection provider for PageObjcet names</li>
			<li>reference and inspection provider for SubContext names</li>
			<li>create PageObject quick fix for missing classes</li>
			<li>type hinting for getMainContext() method</li>
			<li>type hinting for getSubContext() method</li>
			<li>parameter auto completion for getSubContext() method with names of available contextes</li>
			<li>annotation hinting</li>
		</ul>

		<h4>Page Objects extension:</h4>
		<ul>
			<li>quick fix for missing PageObjects and PageObject elements</li>
			<li>reference provider for getElement and hasElement method of PageObject classes</li>
			<li>type hinting for getPage() and getElement() methods</li>
			<li>parameter auto completion for getPage() method with names of available pages in current project</li>
		</ul>
		
		<hr />
		
		<h2><a name="phpspec" class="anchor" href="#phpspec"><span class="octicon octicon-link"></span></a>phpspec / <a href="./behat">Screenshots</a></h2>
		<p>phpspec support for PhpStorm IDE.</p>

		<h4>General:</h4>
		<ul>
			<li>Custom icons for phpspac files</li>
			<li>Generate spec file for php class</li>
		</ul>

		<h4>Navigation:</h4>
		<ul>
			<li>go to spec from php class / go to clas from spec class</li>
		</ul>

      </section>
      <footer>
        <p>This project is maintained by <a href="https://github.com/mprzytulski">mprzytulski</a></p>
        <p><small>Hosted on GitHub Pages &mdash; Theme by <a href="https://github.com/orderedlist">orderedlist</a></small></p>
      </footer>
    </div>
    <script src="javascripts/scale.fix.js"></script>
    
  </body>
</html>
