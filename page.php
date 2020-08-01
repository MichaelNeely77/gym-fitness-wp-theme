<?php get_header(); ?>

<main class="container page section no-sidebars">

    <?php while(have_posts() ): the_post(); ?>
        <h1 class="text-center text-primary"><?php the_title(); ?></h1>
        <?php if(has_post_thumbnail() ) :
            the_post_thumbnail('blog', array('class'=> 'featured-image'));
        endif;
          the_content(); 
        endwhile; ?>

</main>



<?php get_footer(); ?>