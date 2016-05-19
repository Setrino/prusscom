<?php
/**
 * The template for displaying search forms 
 */
?>
	<div class="search-form content">
		<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
			<input type="text" class="search-input" name="s" id="s" value="<?php echo esc_attr(get_search_query());?>" placeholder="<?php esc_html_e( 'Enter your keyword', 'mega' ); ?>" />
			<i class="fa fa-search"></i>
		</form>
	</div>