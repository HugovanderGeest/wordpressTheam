<?php get_header(); ?>
<?php
if (have_posts()) :
    while (have_posts()) : the_post() ?>
        <h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a> </h3>
        <div><?php the_content() ?></div>



    <?php endwhile;
else : ?>
    <p>er zijn geen berichten</p>
<?php endif ?>

<?php get_footer(); ?>