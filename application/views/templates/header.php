<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>My Awesome Site <?php if($title){ echo "| " . $title; } ?></title>

  <!-- Bootstrap -->
  <!--
  <link href='http://fonts.googleapis.com/css?family=Abel|Port+Lligat+Slab' rel='stylesheet' type='text/css'>
-->
  <link rel="stylesheet" href="<?php echo asset_url() ?>css/common.css">
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <![endif]-->

  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>

<body id="" class="container-fluid">

  <header class="navbar navbar-default navbar-fixed-top">
  	<h1><?php echo $title; ?></h1>
  </header>

  <main class="container-fluid">
