<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo SITE_NAME; ?> <?php if($title){ echo "| " . $title; } ?></title>

  <!-- Bootstrap -->
  <!--
  <link href='http://fonts.googleapis.com/css?family=Abel|Port+Lligat+Slab' rel='stylesheet' type='text/css'>
-->
  <link rel="stylesheet" href="<?php echo asset_url() ?>css/common.css">
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <![endif]-->

</head>

<body id="" class="container-fluid">

  <nav class="navbar navbar-fixed-top">
      <div class="navbar-header">
        <h1 class="navbar-brand"><a href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>images/logo.png" class="brandlogo"/><?php echo SITE_NAME. '<span class="pagetitle hidden-sm hidden-xs"> | ' . $title . '</span>' ?></a></h1>
        
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        
      </div><!-- end navbar-header-->
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      <form class="navbar-form navbar-left" action="./api">
        <input type="text" name="query" class="form-control" />
      </form>
      <ul class="nav navbar-nav navbar-left">
        <li><a href="api?query=testrequest">API</a></li>
        <li><a href="angular">Angular</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Pages <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="sidebar">Sidebar</a></li>
            <li><a href="#">Form</a></li>
            <li><a href="#">Table</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  </nav>

  <main class="container-fluid">
