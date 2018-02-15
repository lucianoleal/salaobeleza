<?php
	session_start();
	$_SESSION['path'] = "";
	$_SESSION['path'] = $_SERVER['DOCUMENT_ROOT'];
?>
<!DOCTYPE html>
<html>
<head>
	<?php include_once("include/link_config_font.inc"); ?>
	<meta charset="utf-8" />
	<meta name="author" content="LabWeb" />
	<meta name="description" content="Salão Beleza"/>
	<meta name="keywords" content="salão, salão de beleza, cabelo, estética"/>
	<?php include_once("include/link_config_responsive.inc"); ?>
	<title>Salão de Beleza</title>
	<?php include_once("include/link_config_css.inc"); ?>
	<?php include_once("include/link_config_scripts.inc"); ?>
</head>
<body>
	<?php include_once("include/link_header.inc"); ?>
	<section>
		<div id="banner">
			<img src="img/banner/link_banner_peq_001.jpg" />
			<h2><span>CUIDADOS</span><span> COM A PELE </span><span>E O CORPO</span></h2>
		</div>
		<div id="principal">
			<div id="col_01">
				<div class="anuncio_01">
					<img class="img_mob" src="img/anuncios/link_anuncio_mob_2016_04_01.jpg" alt="Dia dos Namorados" />
					<img class="img_tab" src="img/anuncios/link_anuncio_land_2016_04_01.jpg" alt="Dia dos Namorados" />
					<img class="img_dsk" src="img/anuncios/link_anuncio_port_2016_04_01.jpg" alt="Dia dos Namorados" />
				</div>
			</div>
			<!--
				COL 02
			-->
			<div id="col_02">
				<div class="aviso brd_pink_esc">
					<div>
						<h3>PROMOÇÃO</h3>
						<div class="nota">
							<h4><span>RESTAM</span><span class="dia">03</span><span>DIAS</span></h4>
						</div>
					</div>
					<p>Fique linda com desconto!</p>
					<h2>Escova Platinada Fio a Fio</h2>
					<h3 class="off">20% Off</h3>
				</div>
				<!-- SEP -->
				<div class="anuncio_02 brd_amarelo_esc">
					<p>NÓS USAMOS</p>
					<img class="logo" src="img/anuncios/logo_olenka_pink_esc.png" alt="Loreal" />
					<p>CABELOS<span>100% SAUDÁVEIS</span></p>
				</div>
				<!-- SEP -->
				<div class="testemonial brd_pink">
					<blockquote>Amei meu corte de cabelo, o atendimento e tudo o mais! Super recomendo! Beijos!</blockquote>
					<p>Tainara Antunes<span>Dentista, 24 anos</span></p>
				</div>
			</div>
			<div id="col_03">
				<div id="calendario" class="brd_pink_esc">
					<h2>Março</h2>
					<table>
						<thead><tr><td>D</td><td>S</td><td>T</td><td>Q</td><td>Q</td><td>S</td><td>S</td></tr>
						</thead>
						<tbody>
							<tr><td></td><td></td><td></td><td></td><td></td><td>1</td><td>2</td></tr>
							<tr><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td><td>9</td></tr>
							<tr><td>10</td><td>11</td><td class="cal_marca">12</td><td>13</td><td>14</td><td>15</td><td>16</td></tr>
							<tr><td>17</td><td>18</td><td>19</td><td>20</td><td class="cal_fer">21</td><td>22</td><td>23</td></tr>
							<tr><td>24</td><td>25</td><td>26</td><td>27</td><td class="cal_marca">28</td><td>29</td><td>30</td></tr>
						</tbody>
					</table>
					<div class="eventos">
						<ul>
							<li><span>12</span> - Casamento da Thais</li>
							<li><span>21</span> - Tiradentes</li>
							<li><span>27</span> - Casamento da Milena</li>
						</ul>
						<h4>Próximo Mês</h4>
						<ul>
							<li><span>03</span> - Chegada de Novos Mimos na parte de Decoração!</li>
						</ul>
					</div>
				</div>
				<!-- SEP -->
				<div class="conheca brd_pink">
					<a href="#" title="Bistrô Salão"><h2>Bistrô Salão</h2></a>
					<p>Você conhece o nosso Bistrô?</p>
					<p>Temos um espaço para você se deliciar enquanto vai ficando mais linda!</p>
					<a href="#" title="Bistrô Salão"><div><img src="img/espaco/link_bistro_petit_gateu.jpg" alt="Petit Gateau"/></div></a>
				</div>
			</div>
		</div>
	</section>
	<?php include_once("include/link_footer.inc"); ?>
</body>
</html>

