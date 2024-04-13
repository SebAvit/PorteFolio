<article id="projet">
    <h2 class="projet-title">Projets</h2>
    <?php
        // Post per page
        $post_per_page = 8;
        // Argument definition
        $args = array(
            'orderby' => 'rand',
            'post_type' => 'sites',
        );

        // Definition / Execution of wp-query
        $query = new WP_Query($args);
        
        // Execution loop of wp-query
        if ($query->have_posts()) {
            echo '<ul class="projet-list">';
            while ($query->have_posts()) {
                $query->the_post();
                echo '<li class="projet-list__item">';
                echo '<a href="' . get_permalink() . '" class="projet-link">' . get_the_post_thumbnail(get_the_ID(), 'large') . '</a>';
                echo '<button class="projet-list__button">Voir le projet</button>';
                echo '</li>';
            }
            echo '</ul>';
            wp_reset_postdata();
        } else {
            echo 'Aucune photo trouvée.';
        } 
    ?>
</article>