<?php ob_start()?>

<!-- Subhead
================================================== -->
<header class="jumbotron subhead" id="overview">
  <div class="container">
    <h1>PHP</h1>
    <p class="lead">Using Mystique with PHP</p>
  </div>
</header>


  <div class="container">

    <!-- Docs nav
    ================================================== -->
    <div class="row">
      <div class="span3 bs-docs-sidebar">
        <ul data-dojo-type="havok/widget/ListNav"
            data-dojo-mixins="havok/widget/_AffixMixin, havok/widget/_ScrollSpyMixin"
            data-dojo-props="
               linkTemplate: '&lt;a role=&quot;navitem&quot; href=&quot;${href}&quot;&gt;&lt;i class=&quot;icon-chevron-right&quot;&gt;&lt;/i&gt; ${label}&lt;/a&gt;',
               affixOffset: {top: 40, bottom: 0},
               affixTarget: 'mainContent',
               spyTarget: 'mainContent'
            "
            class="nav-stacked bs-docs-sidenav"
        >
        </ul>
      </div>
      <div class="span9" id="mainContent">

        <?php
        include 'php/install.php';
        include 'php/use.php';
        include 'php/translations.php';
        ?>

      </div>
    </div>
  </div>
<?php
$content = ob_get_clean();
include 'layout.php';
?>
