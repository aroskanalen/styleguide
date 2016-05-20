<?php include_once('functions.php'); ?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
  <link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
  <meta charset="utf-8">
  <title>Aroskanalen style guide</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#000000">

  <!--[if lt IE 9]><link rel="stylesheet" href="css/sg-style-old-ie.css"><![endif]-->

  <!-- https://github.com/sindresorhus/github-markdown-css -->
  <link rel="stylesheet" href="css/github-markdown.css">

  <!-- Replace below stylesheet with your own stylesheet -->
  <link rel="stylesheet" href="css/styles.css">

  <!-- Style Guide Boilerplate Styles -->
  <link rel="stylesheet" href="css/sg-style.css">

  <!-- prism Syntax Highlighting Styles -->
  <link rel="stylesheet" href="vendor/prism/prism.css">
</head>
<body>
  <a href="#main" class="sg-visually-hidden sg-visually-hidden-focusable">Skip to main content</a>

  <div id="top" class="sg-header" role="banner">
    <div class="sg-container">
      <h1 class="sg-logo">
        <span class="sg-logo-initials">AR SG</span>
        <span class="sg-logo-full">Aroskanalen style guide</span>
      </h1>
      <button type="button" class="sg-nav-toggle">Menu</button>
    </div>
  </div><!--/.sg-header-->

  <div class="sg-wrapper sg-clearfix">
    <div id="nav" class="sg-sidebar" role="navigation">

      <ul class="sg-nav-group">
        <h2 class="sg-h2 sg-subnav-title">About</h2>
        <li>
          <a href="#sg-about">Getting Started</a>
        </li>
      </ul>

      <ul class="sg-nav-group">
        <li class="sg-subnav-parent">
          <ul class="sg-nav-group">
            <h2 class="sg-h2 sg-subnav-title">Design</h2>
            <li>
              <a href="design/login.php">Login</a>
            </li>
            <li>
              <a href="design/overview-planning.html">Overview planning</a>
            </li>
          </ul>
        </li>
      </ul>

      <?php listFilesInFolder('markup'); ?>
    </div><!--/.sg-sidebar-->

    <div id="main" class="sg-main" role="main">
      <div class="sg-container">
        <div class="sg-info">
          <div class="sg-about sg-section">
            <h2 id="sg-about" class="sg-h2">Aroskanalen styleguide</h2>
            <p>This is the styleguide for Aroskanalen, find the documentation for the project at <a href="https://github.com/aroskanalen">Github</a>.</p>
          </div><!--/.sg-about-->
        </div><!--/.sg-info-->

        <?php renderFilesInFolder('markup'); ?>
      </div><!--/.sg-container-->
    </div><!--/.sg-main-->
  </div><!--/.sg-wrapper-->

  <!--[if gt IE 8]><!--><script src="vendor/prism/prism.js"></script><!--<![endif]-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="js/sg-scripts.js"></script>
  <script src="js/modal.js"></script>
  <script src="js/dropdown.js"></script>
</body>
</html>