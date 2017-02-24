<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package plum
 */
?>

	</div><!-- #content -->

	<?php get_sidebar('footer'); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info container">
			
			<span class="sep"></span>
			<?php echo '&copy; '.date('Y').'. All Rights Reserved.'; ?>
		</div><!-- .site-info -->
		<div class="text-center">
			<!--LiveInternet counter--><script type="text/javascript">
document.write("<a href='//www.liveinternet.ru/click' "+
"target=_blank><img src='//counter.yadro.ru/hit?t44.8;r"+
escape(document.referrer)+((typeof(screen)=="undefined")?"":
";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
";"+Math.random()+
"' alt='' title='LiveInternet' "+
"border='0' width='31' height='31'><\/a>")
</script><!--/LiveInternet-->
		</div>
	</footer><!-- #colophon -->
	
</div><!-- #page -->


<?php wp_footer(); ?>

</body>
</html>
