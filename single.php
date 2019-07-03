<!-- Stök sýning -->

<?php get_header();?>
<?php while(have_posts()){
the_post();?>
    <section class="single-event-container">
        <div class="event-hero-container">
            <h2><?php the_title(); ?></h2>
            <p><?php the_content(); ?></p>
        </div>
        <div class="event-content-container">
           
            <h2><?php the_title(); ?></h2>
            <p><?php the_content(); ?></p>
        </div>
    </section>
<?php } get_footer(); ?>

