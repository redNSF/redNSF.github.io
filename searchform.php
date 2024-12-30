<form role="search" method="get" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="ms-search-widget">
		<input type="search" placeholder="<?php echo esc_attr__( 'Search...', 'most' ); ?>" value="<?php echo get_search_query(); ?>" name="s" class="search-field" />
		<div class="ms-search--btn">
	        <span class="ms-sb--icon">
				<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
					<path d="M16.57,16.15A9,9,0,1,0,15,17.46h0l6.25,6.25,1.42-1.42Zm-3-.14a7.07,7.07,0,1,1,1.56-1.28A6.88,6.88,0,0,1,13.59,16Z"/>
				</svg>
	        </span>
	        <input type="submit" class="search-submit" value="" />
        </div>
	</div>
</form>