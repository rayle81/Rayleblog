<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $articles[0]['title'];?> - powered by ryaleblog</title>
  <meta name="keywords" content="<?php if(isset($articles[0]['keyword']))echo $articles[0]['keyword'];?>" />
  <meta name="description" content="<?php if(isset($articles[0]['description']))echo $articles[0]['description'];?>" />
  <meta name="generator" content="rayleblog v1.0" />
  <meta name="author" content="https://github.com/Rayle0801/Rayleblog" />

  <link rel="stylesheet" href="<?php echo base_url('/static/css/bootstrap.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('/static/css/github-markdown.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('/static/css/bootstrap-datetimepicker.min.css')?>">
  <script src="<?php echo base_url('/static/js/jquery.min.js')?>"></script>
  <script src="<?php echo base_url('/static/js/bootstrap.min.js')?>"></script>
  <script type="text/javascript" src="<?php echo base_url('/static/js/moment.min.js')?>"></script>
   <style>
    .markdown-body {
        box-sizing: border-box;
        min-width: 200px;
        max-width: 980px;
        margin: 0 auto;
        padding: 0px;
    }
   </style>
</head>
<body style="background-color: #FFFFF">
