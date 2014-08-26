<html>
	<head>
		<title>Blog - <?= $title ?></title>
		<meta charset="UTF-8">
		<link href="<?= base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?= base_url() ?>assets/css/body.css" rel="stylesheet">
	</head>
	<body>
		<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <a class="navbar-brand" href="<?= site_url('blog/entries/') ?>">Codeigniter Blog</a>
	        </div>
	        <div class="collapse navbar-collapse">
	          <ul class="nav navbar-nav">
	            <li class="active"><a href="<?= site_url('blog/entries/') ?>">Inicio</a></li>
	            <li><a href="<?= site_url('blog/entries/new_entry') ?>">Agregar Entrada</a></li>
	            <li><a href="<?= site_url('blog/entries/mod_entry') ?>">Editar Entrada</a></li>
	            <li><a href="<?= site_url('blog/entries/del_entry') ?>">Eliminar Entrada</a></li>
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </div>
	    <div class="container">
			<?php if ($this->session->flashdata('error') != ''): ?>
				<div class="alert alert-danger"><?= $this->session->flashdata('error') ?></div>
			<?php endif; ?>
			<?php if ($this->session->flashdata('success') != ''): ?>
				<div class="alert alert-success"><?= $this->session->flashdata('success') ?></div>
			<?php endif; ?>
			<?php if ($this->session->flashdata('msg') != ''): ?>
				<div class="alert alert-info"><?= $this->session->flashdata('msg') ?></div>
			<?php endif; ?>