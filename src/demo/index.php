<?php $demo = true; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Demo | Base front</title>
  <link rel="stylesheet" href="../css/demo.css">
  <link rel="stylesheet" href="../css/main.css">
</head>
<body>

<?php
$demoName = "Index";
require 'demo-header.php';
?>
<div class="container">
  <div class="row demo">
    <ul class="demo__list">
      <li><a href="/">Back to the website</a></li>
    </ul>

    <ul class="demo__list">
      <li><a href="layouts.php">Layout</a></li>
      <li><a href="components.php">Components</a></li>
      <li><a href="modules.php">Modules</a></li>
      <li><a href="icons.php">Icons</a></li>
    </ul>
  </div>
</div><!-- /.container -->

<?php require "../inc/cdn-scripts.php"; ?>
<script src="../js/bundle.js"></script>
</body>
</html>
