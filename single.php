<?php get_header(); ?>

    <div class="p-20 w-full flex justify-center items-center flex-col">

        <h1 class="text-2xl font-bold mb-10"><?php the_title(); ?></h1>
        
        <?php the_content(); ?>
    </div>

<?php get_footer(); ?>