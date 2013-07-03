<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Zoop · Mystique</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Tim Roediger">

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/docs.css" rel="stylesheet">
    <link href="js/google-code-prettify/prettify.css" rel="stylesheet">
  </head>

  <body onload="prettyPrint()">

    <!-- Navbar
    ================================================== -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="brand" href="./index.html">Mystique</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="">
                <a href="./index.html">Home</a>
              </li>
              <li class="">
                <a href="./getting-started.html">Get started</a>
              </li>
              <li class="">
                <a href="./javascript.html">Javascript</a>
              </li>
              <li class="">
                <a href="./php.html">PHP</a>
              </li>
              <li class="">
                <a href="./validators.html">Validators</a>
              </li>
              <li class="">
                <a href="./spec.html">Spec</a>
              </li>
              <li class="">
                <a href="./extend.html">Extend</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <?php echo $content;?>

    <!-- Footer
    ================================================== -->
    <footer class="footer">
      <div class="container">
        <p>Created by <a href="http://github.com/superdweebie">@superdweebie</a> and <a href="http://github.com/crimsonronin">@crimsonronin</a>.</p>
        <p>Code licensed under MIT.</p>
        <p>Built on the shoulders of giants <a href="http://twitter.github.io/bootstrap">bootstrap</a> and <a href="http://dojotoolkit.org">dojo</a>.</p>
        <ul class="footer-links">
          <li><a href="http://zoopcommerce.com">Zoop</a></li>
          <li class="muted">&middot;</li>
          <li><a href="https://github.com/zoopcommerce/mystique/issues?state=open">Issues</a></li>
          <li class="muted">&middot;</li>
          <li><a href="https://github.com/zoopcommerce/mystique/blob/master/CHANGELOG.md">Changelog</a></li>
        </ul>
      </div>
    </footer>

    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/google-code-prettify/prettify.js"></script>
    <script src="js/havok.js"></script>
    <script type="text/javascript">
        require(['dojo/parser'], function(parser){parser.parse()})
    </script>
  </body>
</html>
