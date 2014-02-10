<!DOCTYPE html>
<html>
  <head>
    <title><?php echo $title; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="css/style.css" rel="stylesheet" media="screen">
	
  </head>
  <body>
    <!-- ****** Header ****** -->
	<header class="b-body-header">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<div class="b-logo"><a href="<?php echo base_url(); ?>">А к в а с т р о й</a></div>
				</div>
				<div class="col-md-5 pull-right">
					<div class="b-header-contact">
						<div class="b-num">+7 (473) 228 42 16</div>
						<div class="b-link"><a href="#" class="b-order-call">| <span>Заказать звонок</span></a></div>
					</div>
					<div class="order-call">
						<div class="b-close">&times;</div>
						<h2>Закажите<br> обратный звонок</h2>
						<?php echo form_open('send_email'); ?>
							<div class="row">
								<div class="input-group">
									<span class="input-group-addon"><img src="images/ico1.png" alt=""></span>
									<input type="text" class="form-control" placeholder="Введите имя" name="inputName">
								</div>
								<div class="input-group">
									<span class="input-group-addon"><img src="images/ico2.png" alt=""></span>
									<input type="text" class="form-control" placeholder="Введите телефон" name="inputPhone">
								</div>
								<div class="input-group">	
									<textarea class="form-control" style="width:284px;height:150px;" placeholder="Текст сообщения" name="inputMessage"></textarea>
								</div>
								<div class="b-button"><button class="btn b-button2">Отправить</button></div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- ****** Main menu ****** -->
			<nav class="navbar navbar-default" role="navigation">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				  <span class="sr-only">Toggle navigation</span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				</button>
				<div class="b-title-menu-xs visible-xs">Меню</div>
				</div>
	
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
					  <li><a href="<?php echo base_url(); ?>">Главная</a></li>
					  <li><a href="<?php echo base_url(); ?>kompozitnie">Композитные бассейны</a></li>
					  <li><a href="<?php echo base_url(); ?>betonnie">Железобетонные бассейны</a></li>
					  <li><a href="<?php echo base_url(); ?>russkie">Русские бани</a></li>
					  <li><a href="<?php echo base_url(); ?>finskie">Финские бани</a></li>
					  <li><a href="<?php echo base_url(); ?>tureckie">Турецкие бани</a></li>
					  <li><a href="<?php echo base_url(); ?>about">О компании</a></li>
					  <li><a href="<?php echo base_url(); ?>contacts">Контакты</a></li>
					</ul>
				</div>
		</nav>
		</div>
	</header>