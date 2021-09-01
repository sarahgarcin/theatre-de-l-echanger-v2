<!DOCTYPE html>
<html lang="<?php echo $kirby->language() ?? 'fr' ?>">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="description" content="<?php echo $site->description() ?>">
  <meta name="keywords" content="<?php echo $site->keywords() ?>">
  <meta name="author" content="<?php echo $site->author() ?>">


  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  
  <?php echo css('assets/css/flexboxgrid.min.css') ?>
  <?php echo css('assets/css/fontawesome.min.css') ?>
  <?php
    if ( option('environment') == 'local' ) :
      foreach ( option('julien-gargot.assets.styles', array()) as $style):
        echo css($style.'?version='.md5(uniqid(rand(), true)));
      endforeach;
    else:
      echo css('assets/production/all.min.css');
    endif
  ?>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn’t work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

  

  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#00aba9">
  <meta name="theme-color" content="#ffffff">

  <?php if ( $page->hasImages() ): 
    $image = $page->images()->first();
  else:
    $image = $site->logo()->toFile();
  endif; ?>

  <!-- Google / Search Engine Tags -->
  <meta itemprop="name" content="<?= $site->title() ?>">
  <meta itemprop="description" content="<?= $site->description() ?>">
  <meta itemprop="image" content="<?php echo $image->resize(800, 800)->url() ?>">

  <!-- Facebook Meta Tags -->
  <meta property="og:site_name"    content="<?= $site->title() ?>">
  <meta property="og:url"          content="<?= $page->url() ?>">
  <meta property="og:title"        content="<?= $page->title() ?>">
  <meta property="og:description"  content="<?= $site->description() ?>">
  <meta property="og:type"         content="website">
  <meta property="og:image"        content="<?php echo $image->resize(800, 800)->url() ?>">

  <!-- Twitter Meta Tags -->
  <meta name="twitter:card"        content="summary_large_image">
  <meta name="twitter:site"        content="<?= $page->url() ?>">
  <meta name="twitter:creator"     content="<?= $site->author() ?>">
  <meta name="twitter:title"       content="<?= $page->title() ?>">
  <meta name="twitter:description" content="<?= $site->description() ?>">
  <meta name="twitter:image"       content="<?php echo $image->resize(800, 800)->url() ?>">


</head>
<body
  data-login="<?php e($kirby->user(),'true', 'false') ?>"
  data-template="<?php echo $page->template() ?>"
  data-intended-template="<?php echo $page->intendedTemplate() ?>">
