<?php get_header(); ?>
<main class="site__main">

<section class="animation">
    <div class="elem__animation">♥</div>
    <div class="elem__animation">♦</div>
    <div class="elem__animation">♣</div>
    <div class="elem__animation">♠</div>
    <div class="elem__animation">☻</div>
</section>

    <h1>Accueil</h1>
   <?php if (have_posts()): the_post(); ?>
        <?php the_title(); ?>
        <?php the_content(); ?>
  
   <?php endif ?>
   
</main>
<?php get_footer() ?>