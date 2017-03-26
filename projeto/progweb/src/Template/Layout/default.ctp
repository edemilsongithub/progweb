<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Toys - Locação de Produtos Infantis';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?> - 
        <?= $cakeDescription ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/prettyPhoto.css" rel="stylesheet">
    <link href="/css/price-range.css" rel="stylesheet">
    <link href="/css/animate.css" rel="stylesheet">
	<link href="/css/main.css" rel="stylesheet">
	<link href="/css/responsive.css" rel="stylesheet">

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>
<body>

    <header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +55 67 9 9123 - 4567</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> contato@loja.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->

        <div class="header-bottom"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="/"><img src="/img/toys1.jpg" width="150px" alt="" /></a>
						</div>						
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="/pages/dicas"><i class="fa fa-star"></i> Dicas</a></li>
								<?php if($usuario != null) : ?>

								<li><a href="/aluguel"><i class="fa fa-shopping-cart"></i> Aluguéis</a></li>
								<li><a href="#"><i class="fa fa-user"></i> <?= $usuario['nome'] ?></a></li>
								<li><a href="/cliente/logout"><i class="fa fa-sign-out"></i> Sair</a></li>

								<?php else: ?>

								<li><a href="/cliente/login"><i class="fa fa-lock"></i> Entrar</a></li>
								<li><a href="/cliente/add"><i class="fa fa-user"></i> Cadastrar</a></li>

								<?php endif; ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	</header><!--/header-->


<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Categorias</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">

								 <?php foreach ($categorias as $categorium): ?>
										<div class="panel-heading">
											<h4 class="panel-title">
												<?= $this->Html->link(h($categorium->nome), ['controller' => 'Categoria', 'action' => 'view', $categorium->id]) ?>
											</h4>
										</div>
									<?php endforeach; ?>

							</div>
                            <br />
                            <a href="/categoria/add" class="btn btn-default btn-block">Adicionar Categoria</a>
						</div><!--/category-products-->				
						
					
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="container-fluid"><!--features_items-->
						<h2 class="title text-center">Produtos</h2>

                        <?= $this->Flash->render() ?>
                        <div class="container-fluid clearfix">
                            <?= $this->fetch('content') ?>
                        </div>
						
					</div><!--features_items-->			
					
				
					
				</div>
			</div>
		</div>
	</section>


<footer id="footer"><!--Footer-->		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Serviços</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Ajuda Online</a></li>
								<li><a href="#">Fale Conosco</a></li>
								<li><a href="#">Estado do Pedido</a></li>
								<li><a href="#">Perguntas e Respostas</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Diretos</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Camisas</a></li>
								<li><a href="#">Homens</a></li>
								<li><a href="#">Mulheres</a></li>
								<li><a href="#">Sapatos</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Política</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Termos de Uso</a></li>
								<li><a href="#">Política de Privacidade</a></li>
								<li><a href="#">Política de Estorno</a></li>
								<li><a href="#">Sistema de Vaucher</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Sobre</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Informações da Empresa</a></li>
								<li><a href="#">Empregos</a></li>
								<li><a href="#">Localizações</a></li>
								<li><a href="#">Programa de Afiliados</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>Produtos Especiais</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Seu email de contato" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Seja o primeiro a receber nossas <br />promoções...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">© 2017 Loja, S.A. Todos os direitos reservados.</p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->


    <script src="/js/jquery.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/jquery.scrollUp.min.js"></script>
	<script src="/js/price-range.js"></script>
    <script src="/js/jquery.prettyPhoto.js"></script>
    <script src="/js/main.js"></script>

    
</body>
</html>
