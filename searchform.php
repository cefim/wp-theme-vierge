<form method="get" class="searchform-header" action="<?php bloginfo('url'); ?>/">   
	<input 	type="text" 
			value="<?php the_search_query(); ?>" 
			name="s" id="s">   
	<button type="submit" id="submit">
		<i class="fa fa-search"></i>
	</button> 
</form>