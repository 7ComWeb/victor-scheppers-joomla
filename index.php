<?php defined( '_JEXEC' ) or die( 'Restricted access' );?>
<?php 
$config = JFactory::getConfig();
?>

<!doctype html>
<html lang="<?php echo $this->language; ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <![endif]-->
    <!--[if IE]>
        <script>document.createElement('main');</script>
    <![endif]-->
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,700,400italic,700italic' rel='stylesheet'>
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/styles.css">
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/jquery-rebox.css">
</head>

<body>
    <div class="wrapper">
        <header role="banner">
            <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/banner.png" alt="Honor Deo, labor mihi, utilitas proximo" class="banner-image">
            <jdoc:include type="modules" name="language-switcher" />
            <h1><?php echo $config->get('sitename') ?></h1>
            <jdoc:include type="modules" name="top-menu" />
        </header>

        <aside class="left">
            <jdoc:include type="modules" name="left" />
        </aside>
      
        <aside class="right">
            <jdoc:include type="modules" name="right" />
        </aside>

        <jdoc:include type="component" />

    </div>
    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/jquery-rebox.js"></script>
    <script>
    // toggle off the hamburger menu when the screen is small enough
    if (window.matchMedia("(max-width: 854px)").matches) {
      $(".menu-items").toggle(0);
    }
    // make the hamburger menu clickable
    $(".hamburger").click(function() {
        $(this).siblings(".menu-items").toggle(500);
    });
    // wrap the necessary a-tag around each figure for the jquery-rebox to work
    $("figure").wrap(function(){
      return "<a href='" + $(this).find("img").attr("src") + "' title='" + $(this).find("figcaption").text() + "' class='dia'></a>";
    });
    // initialize the rebox lightboxes
    $(".dia").rebox();
    </script>
</body>

</html>
