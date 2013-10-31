<?php
/**
 * Template Name: Espanol
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>
<div id="intro" class="row" role="profile">
	<div class="inner">
		<ul class="slides">
			<li style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/profile.png);">
			</li>
		</ul>
	</div>
</div>
	<div id="primary" class="content-area" role="profile">
		<div id="primary-border"></div>
		<div id="primary-bg"></div>
		<div id="content" class="site-content" role="main">
			<div id="chat">
				<img src="<?php echo get_template_directory_uri(); ?>/img/chat.png" alt="alt text">
			</div>
			<aside class="col-sm-4">
				<?php page_sidebar(); ?>
			</aside>
			<div class="col-sm-8 content-section">
				<h1>visión general<br> empresa</h1>
				<div class="content">
					<section>
						<p>Las Oficinas Legales de L. Clayton Burgess se esfuerzan para servir a nuestros clientes con la mejor representación legal. Nuestro éxito está determinado únicamente por el éxito del cliente. Sólo se les paga cuando reciba la compensación que se merece. Debido a los recursos legales y financieros, que son capaces de tener una igualdad de condiciones con las compañías de seguros y las grandes corporaciones que tan a menudo enfrentamos. Sabemos que su caso es muy importante y le asegura que vamos a manejar con sumo cuidado cualquier asunto que confía en nosotros.</p>
						<p>Nuestra empresa cubre una amplia gama de áreas con resultados probados en todos y cada uno. Le invitamos a navegar a través de nuestro sitio, para ver si somos la empresa adecuada para usted. No dude en contactar con nosotros si tiene alguna pregunta. También puede completar su información de contacto y detalles del caso y nos pondremos en contacto con usted en breve.</p>
					</section>
					<section>
						<div id="bio-wrap" class="clearfix">
							<div id="photo-wrap" class="col-sm-4">
								<div id="photo">
									<img src="<?php echo get_template_directory_uri(); ?>/img/clay.jpg" alt="L. Clayton Burgess">
								</div>
							</div><!-- photo-wrap -->
							<h1 class="col-sm-8">L. Clayton<br> Burgess</h1>
							<p>L. Clayton Burgess abrió su propio estudio en 1999 . Se trata de un impresionante defensor juicio como lo ha intentado y ha ganado numerosos grandes veredictos éxito. Ha sido incluido en las listas como "Abogados principal de Estados Unidos " y ha aparecido en artículos como Forbes y Newsweek. Su éxito es el resultado de su incansable dedicación a las causas de sus clientes .</p>
							<p>Él se encarga de lesiones complejas personales, homicidio culposo , el ministerio de marina , y la legislación laboral . Tiene apelación significativa y la experiencia práctica moción contra las grandes empresas. Está habilitado para ejercer en Louisiana y Texasas así como los Estados Juzgado Quinto de Circuito de Apelaciones. Además, se admite en los Distritos del Este, Oeste y Medio de Louisiana y el Distrito del Sur de Texas .</p>
							<p>Es miembro de la Junta de Gobernadores de la Asociación de Abogados Litigantes de Louisiana y un miembro de las siguientes organizaciones : la Barra Estatal de Louisiana, la Barra Estatal de Texas, la Asociación de Abogados Litigantes de América , y la Asociación de Abogados de Lafayette.</p>
							<p>Asistió a la universidad en la Universidad de Arizona en Tucson , Arizona. Después de recibir una licenciatura en Ciencias de la Universidad de Arizona en 1991 , asistió a la Paul M. Hebert Law Center de la Universidad Estatal de Louisiana. Él era un semi - finalista en la Louisiana State University Competición Trial Flory 1993-1994 y pasó a recibir su doctorado en leyes en 1994.</p>
						</div><!-- bio-wrap -->
					</section>
					<?php page_footer(); ?>
				</div>
			</div>
		</div><!-- #content -->
	</div><!-- #primary -->
	

<?php //get_sidebar(); ?>
<?php get_footer(); ?>