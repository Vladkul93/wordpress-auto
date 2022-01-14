<?php get_header('private') ?>
<?php the_post(); ?>

<div class="container container-single">
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
</div>

<?php get_footer() ?>