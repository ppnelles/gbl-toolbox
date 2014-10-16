<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<label class="screen-reader-text"><?php _e('Search for'); ?>:</label>
	<input type="search" class="search-field" placeholder="<?php _e('Search'); ?> ..." value="" name="s" title="Search for:" />
	<input type="submit" class="search-submit" value="<?php _e('Search'); ?>" />
</form>