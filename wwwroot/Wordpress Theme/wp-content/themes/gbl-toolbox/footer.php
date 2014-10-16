<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the main and all content after
 *
 * @package Toolbox
 * @since Toolbox 0.1
 */
?>

</main>

<footer id="footer-main">
	<div>
		<nav role="navigation">
			<?php wp_nav_menu( array( 'menu' => 'primary' ) ); ?>
		</nav>
		
		<div id="colophon" role="contentinfo">
			<p class="credit">
				Lorem ipsum dolor sit amet
			</p>
			<p class="copyright">
				<a rel="nofollow" href="http://www.globulebleu.com" title="<?php _e('Visiter le site de globulebleu'); ?>">Réalisé par Globule Bleu</a>
			</p>
		</div>
	</div>
</footer><!-- footer-main -->

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/modernizr-2.8.3.min.js" ></script>
 
<!--[if (lt IE 9) & (!IEMobile)]>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js" ></script>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/nwmatcher/1.2.5/nwmatcher.min.js"></script>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js" ></script>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/placeholders/2.1.0/placeholders.js" ></script> 
<![endif]-->

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/main.js" ></script>

<!-- google analytics tracker comes here. don't forget it, ok ? cool. -->

<?php wp_footer(); ?>

</body>
</html>