<?php $demo = true; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Modules | Base front</title>
  <link rel="stylesheet" href="../css/demo.css">
  <link rel="stylesheet" href="../css/main.css">
</head>
<body>

<?php
$demoName = "Modules";
require 'demo-header.php';
?>


<div class="container">
  <div class="row demo">
    <div class="col-xs-12">
      <h2 class="demo__title">Your title</h2>
      <div class="demo__intro">Descriptions explanations</div>
    </div><!-- /.col-->

    <div class="col-xs-12 col-sm-12 col-lg-6">
      <div class="demo__markup"><span>.your-element-class</span></div>
      here your module
    </div><!-- /.col-->
  </div><!-- /.row -->
</div><!-- /.container -->

<?php require "../inc/cdn-scripts.php"; ?>
<script src="../js/bundle.js"></script>
</body>
</html>
