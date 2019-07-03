<!-- Allar Sýningar -->
<?php get_header();?>
<section class="event-container">
    <div class="event-content">
        <h3 class="h3">Sýningar</h3>
        <div class="event-card-container">
            <?php while(have_posts()){
            the_post();?>
                <div class="single-event-card">
                    <div class="card-content">
                        <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                        <p><?php the_content(); ?></p>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>


