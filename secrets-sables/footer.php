        <?php dynamic_sidebar( 'social-widget' ); ?>
        <footer class="pt-1 pb-4">
                <?php wp_nav_menu( array(
                'theme_location'  => 'footer',
                'menu'            => 'Footer Menu', 
                'container'       => 'div', 
                'container_class' => 'container', 
                'container_id'    => 'footer_menu',
                'menu_class'      => 'nav', 
                'menu_id'         => 'footer_nav',
                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>'  ) ); ?>
                <p class="text-center"> &copy; 2021 - <a href="<?php get_site_url() ?>/">Secrets Sablés</a></p>
        </footer>
</div>
</body>
</html>