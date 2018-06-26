<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>CarVille | Welcome</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap-reboot.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css" />
	
	<script src="<?php echo base_url();?>assets/js/jquery.js" ></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js" ></script>
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" ></script>
</head>
<body>

	
	
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <a class="navbar-brand" href="<? echo site_url('/inventory/index');?>">CarVille</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="<? echo site_url('/manufacturer/index');?>" /> Manufacturer </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<? echo site_url('/type/index');?>" /> Models </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<? echo site_url('/inventory/index');?>" /> Inventory </a>
      </li>
    </ul>
  </div>
</nav>	