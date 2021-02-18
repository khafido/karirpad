<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Daftar Barang</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/jquery.dataTables.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/dataTables.bootstrap4.css'?>">
	<style>
	.dataTables_wrapper .dataTables_paginate .paginate_button {
		box-sizing: border-box;
		display: inline-block;
		min-width: 1.5em;
		padding: 1px;
		margin-left: 2px;
		text-align: center;
		text-decoration: none !important;
		cursor: pointer;
		color: #333 !important;
		border: 1px solid transparent;
		border-radius: 2px;
	}
</style>
</head>
<body>
	<nav class="navbar navbar-expand-md bg-dark navbar-dark">
		<a href="<?=base_url()?>" class="navbar-brand">Karirpad</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="collapsibleNavbar">
			<ul class="navbar-nav">
				<li class="nav-item <?=($active=='soal1'?'active':'')?>">
					<a href="<?=base_url()?>" class="nav-link">Backend 1-2</a>
				</li>
				<li class="nav-item <?=($active=='soal3'?'active':'')?>">
					<a href="<?=base_url('Soal/soal3')?>" class="nav-link">Backend 3</a>
				</li>
				<li class="nav-item <?=($active=='soal4'?'active':'')?>">
					<a href="<?=base_url('Soal/soal4')?>" class="nav-link">Backend 4</a>
				</li>
				<li class="nav-item <?=($active=='soal'?'active':'')?>">
					<a href="<?=base_url('Soal/frontend')?>" target="_blank" class="nav-link">Frontend</a>
				</li>
			</ul>
		</div>
	</nav>
