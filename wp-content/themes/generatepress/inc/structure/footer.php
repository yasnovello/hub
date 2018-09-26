<?php
/**
 * Footer elements.
 *
 * @package GeneratePress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'generate_construct_footer' ) ) {
	add_action( 'generate_footer', 'generate_construct_footer' );
	/**
	 * Build our footer.
	 *
	 * @since 1.3.42
	 */
	function generate_construct_footer() {
		?>
		<footer class="site-info" itemtype="https://schema.org/WPFooter" itemscope="itemscope">
			<div class="inside-site-info <?php if ( 'full-width' !== generate_get_setting( 'footer_inner_width' ) ) : ?>grid-container grid-parent<?php endif; ?>">
				<?php
				/**
				 * generate_before_copyright hook.
				 *
				 * @since 0.1
				 *
				 * @hooked generate_footer_bar - 15
				 */
				do_action( 'generate_before_copyright' );
				?>
				<span class="SOME alignleft text_footer">Copyright © Code Plus 2018</span>
				<a href="https://www.facebook.com/codeplusej/"><img  class="img_footer" src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/logo_code_footer.png"></a>
				<span class="SOME alignright text_footer">
					<a  href="http://portal.utfpr.edu.br"> UTFPR - Campus Dois Vizinhos</a>
				</span>

			</div>
		</footer><!-- .site-info -->
		<?php
	}
}

if ( ! function_exists( 'generate_footer_bar' ) ) {
//	add_action( 'generate_before_copyright', 'generate_footer_bar', 15 );
	/**
	 * Build our footer bar
	 *
	 * @since 1.3.42
	 */
/*	function generate_footer_bar() {
		if ( ! is_active_sidebar( 'footer-bar' ) ) {
			return;
		}
		?>
		<div class="footer-bar">
			<?php dynamic_sidebar( 'footer-bar' ); ?>
		</div>
		<?php
	}*/
}

/*if ( ! function_exists( 'generate_add_footer_info' ) ) {
	add_action( 'generate_credits', 'generate_add_footer_info' );
	/**
	 * Add the copyright to the footer
	 *
	 * @since 0.1
	 */
/*	function generate_add_footer_info() {
		$copyright = sprintf( '<span class="copyright">&copy; %1$s</span> &bull; <a href="%2$s" target="_blank" itemprop="url">%3$s</a>',
			date( 'Y' ),
			esc_url( 'https://generatepress.com' ),
			__( 'GeneratePress', 'generatepress' )
		);

		echo apply_filters( 'generate_copyright', $copyright ); // WPCS: XSS ok.
	}
}*/

/**
 * Build our individual footer widgets.
 * Displays a sample widget if no widget is found in the area.
 *
 * @since 2.0
 *
 * @param int $widget_width The width class of our widget.
 * @param int $widget The ID of our widget.
 */
function generate_do_footer_widget( $widget_width, $widget ) {
	$widget_width = apply_filters( "generate_footer_widget_{$widget}_width", $widget_width );
	$tablet_widget_width = apply_filters( "generate_footer_widget_{$widget}_tablet_width", '50' );

	?>

		<aside class="widget inner-padding widget_text">
		<div clas="grid-80 tablet-grid-80 mobile-grid-100">
				<h1 class="title-apoio">Realização</h1>
				<hr class="patrocinadores">
				<!-- LOGOS DOS APOIADORES-->
				<a href="http://sudotec.org.br/" target="_blank"><img class="item-center_1 realize_logo_utf" src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/sudotec.png"></a>

				<hr class="inside-footer-widgets " style="background-color: #fff !important;">
			</div>

			
		<div clas="grid-80 tablet-grid-80 mobile-grid-100 pt-3">
				<h1 class="title-patrocinio pt-3">Patrocinadores</h1>
				<hr class="patrocinadores">
		
				<h2 class="title-patrocinio patrocinadores_categoria pt-3">Diamante</h2>
				<a href="http://www.copeltelecom.com/site/" target="_blank"><img class="img-master item-center_1" src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/copel.png"></a>
				<hr class="hr-patrocinio">
				<h2 class="title-patrocinio patrocinadores_categoria">Prata</h2>
				<a href="https://ciss.com.br/" target="_blank"><img class="item-center_3 img-ciss" src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/ciss.svg"></a>
                <a href="https://www.deztelecom.net.br/site/" target="_blank"><img class="item-center_2 img-prata" src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/logo_dez.png"></a>
				<hr class="hr-patrocinio">
				<h2 class="title-patrocinio patrocinadores_categoria">Bronze</h2>
                <a href="https://zallpy.com/" target="_blank"><img class="column-center img-bronze" src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/zallpy.png"></a>
				<a href="https://www.facebook.com/codeplusej" target="_blank"><img class="column-center img-bronze" src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/logo_code_apoio.png"></a>
				<a href="http://www.concrevalle.com.br/home.asp" target="_blank"><img class="column-center img-bronze" src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/concrevalle_logo.png"></a>
				<a href="http://www.servdatanorte.com/" target="_blank"><img class="column-center img-bronze" src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/servdata_logo.png"></a>
            </div>

			<div clas="grid-80 tablet-grid-80 mobile-grid-100">
				<h1 class="title-apoio">Apoio</h1>
				<hr class="patrocinadores">
				<!-- LOGOS DOS APOIADORES-->
				<a href="http://doisvizinhos.pr.gov.br/" target="_blank"><img class="item-center_4 img-bronze" src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/logo_dv.png"></a>
				<a href="http://portal.utfpr.edu.br/" target="_blank"><img class="item-center_4 img-bronze" src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/logo_utf.png"></a>
				<a href="http://www.sebrae.com.br/sites/PortalSebrae" target="_blank"><img class="item-center_3 img-bronze" src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/sebrae_logo.png"></a>
				<a href="http://www.unisep.edu.br/home.php" target="_blank"><img class="item-center_3 realize_logo_es" src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/unisep_logo.png"></a>
				

				<hr class="inside-footer-widgets " style="background-color: #fff !important;">
			</div>
		<hr>
			<div class="grid-50 tablet-grid-50 mobile-grid-100">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83688.32904601084!2d-53.09779203139655!3d-25.762422741550406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94f047ed43a4d2dd%3A0xc57179d696514a97!2sDois+Vizinhos%2C+PR%2C+85660-000!5e0!3m2!1spt-BR!2sbr!4v1529003873185" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<div class="grid-50 tablet-grid-50 mobile-grid-100">
				<h2 class="title-contato" >Contate-nos</h2>
				<p class="text-contato grid-70 tablet-grid-70 mobile-grid-100"><span class="widget-title">E-mail:</span> exemplo@email.com.br</p><br>
				<p class="text-contato grid-70 tablet-grid-70 mobile-grid-100"><span class="widget-title">Telefone:</span> (xx) xxxx-xxxx</p>
				<!--a href="http://coens.dv.utfpr.edu.br/site/"><img class="footer_logo_es" src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/logo_es.png"> </a>
				<a href="http://portal.utfpr.edu.br/"><img class="footer_logo_utf" src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/logo_utf.png"> </a>-->

			</div>
			<script>
				function initMap() {
					var uluru = {lat: -25.70391026, lng: -53.09762428};
					var map = new google.maps.Map(document.getElementById('map'), {
						zoom: 60,
						center: uluru,
						mapTypeId: 'satellite'
					});
					var marker = new google.maps.Marker({
						position: uluru,
						map: map
					});
				}
			</script>
		</aside>
	</div>
	<?php
}

if ( ! function_exists( 'generate_construct_footer_widgets' ) ) {
	add_action( 'generate_footer', 'generate_construct_footer_widgets', 5 );
	/**
	 * Build our footer widgets.
	 *
	 * @since 1.3.42
	 */
	function generate_construct_footer_widgets() {
		// Get how many widgets to show.
		$widgets = generate_get_footer_widgets();

		if ( ! empty( $widgets ) && 0 !== $widgets ) :

			// Set up the widget width.
			$widget_width = '';
			if ( $widgets == 1 ) {
				$widget_width = '100';
			}
			else
			$widget_width = '100';
			?>
			<div id="footer-widgets" class="site footer-widgets">
				<div <?php generate_inside_footer_class(); ?>>
					<div class="inside-footer-widgets">
						<?php
						if ( $widgets >= 1 ) {
							generate_do_footer_widget( $widget_width, 1 );
						}

						?>
					</div>
				</div>
			</div>
		<?php
		endif;

		/**
		 * generate_after_footer_widgets hook.
		 *
		 * @since 0.1
		 */
		do_action( 'generate_after_footer_widgets' );
	}
}

if ( ! function_exists( 'generate_back_to_top' ) ) {
	add_action( 'generate_after_footer', 'generate_back_to_top' );
	/**
	 * Build the back to top button
	 *
	 * @since 1.3.24
	 */
	function generate_back_to_top() {
		$generate_settings = wp_parse_args(
			get_option( 'generate_settings', array() ),
			generate_get_defaults()
		);

		if ( 'enable' !== $generate_settings[ 'back_to_top' ] ) {
			return;
		}

		echo apply_filters( 'generate_back_to_top_output', sprintf( // WPCS: XSS ok.
			'<a title="%1$s" rel="nofollow" href="#" class="generate-back-to-top" style="opacity:0;visibility:hidden;" data-scroll-speed="%2$s" data-start-scroll="%3$s">
				<span class="screen-reader-text">%5$s</span>
			</a>',
			esc_attr__( 'Scroll back to top', 'generatepress' ),
			absint( apply_filters( 'generate_back_to_top_scroll_speed', 400 ) ),
			absint( apply_filters( 'generate_back_to_top_start_scroll', 300 ) ),
			esc_attr( apply_filters( 'generate_back_to_top_icon', 'fa-angle-up' ) ),
			esc_html__( 'Scroll back to top', 'generatepress' )
		) );
	}
}
