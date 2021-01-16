<form id="searchform" class="search__form" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <img class="search__icon" src="<?php bloginfo( 'template_url' ); ?>/img/search-solid.svg" alt="Image">
    <input type="text" class="search-field search__input" name="s" placeholder="Rechercher..." value="<?php echo get_search_query(); ?>">
</form>