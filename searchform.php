<form class="uk-form search-form" method="get" role="search" action="<?php echo home_url( '/' ); ?>">
	<fieldset>
		<div class="uk-form-row">
			<input type="text" name="s" id="search" class="search-input" value="<?php the_search_query(); ?>"  />
			<input type="submit" class="uk-button search-button" value="ค้นหา">
		</div>
	</fieldset>
</form>