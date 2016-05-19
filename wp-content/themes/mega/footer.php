<?php
/**
 * The template for displaying the footer.
 */
$wope_main_option = get_option('wope-main');
$wope_sidebar_options = get_option('wope-sidebar');


$wope_sidebar_count = 1;
$wope_actived_sidebar = array();
for($i=1; $i<=5 ;$i++){
	if(is_active_sidebar('footer-sidebar'.$i)){
		$wope_actived_sidebar[$wope_sidebar_count] = 'footer-sidebar'.$i;
		$wope_sidebar_count++;
	}
}

$wope_total_actived_sidebar = count($wope_actived_sidebar);
?>			
		<div id="footer">
			<?php if( $wope_total_actived_sidebar>0){?>
			<div class="wrap-column">	
				<div id="footer-widget-container">
					
					<div class="footer-column">
						<?php dynamic_sidebar( 'footer-sidebar1' );?>
					</div>
					<div class="footer-column">
						<?php dynamic_sidebar( 'footer-sidebar2' );?>
					</div>
					<div class="footer-column">
						<?php dynamic_sidebar( 'footer-sidebar3' );?>
					</div>
					<div class="cleared"></div>
						
				</div><!-- End Footer Widget Container-->
			</div> 
			<?php }?>
		</div> <!-- End Footer -->
		<div id="footer-bottom" >
			<div class="wrap">	
				
				<div class="footer-copyright">
					<?php wope_var($wope_main_option['copyright']);?>
				</div>
				
				<?php wope_wpml_footer();?>
			</div>
		</div><!-- End Footer Bottom -->
	</div><!-- End Page -->
</div><!-- End Site Background -->

<?php wp_footer(); ?>
</body>
</html>