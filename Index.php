<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
<article class="<?php post_class(); ?>" id="post-<?php the_ID(); ?>>
<div class="word"> 
    <!-- why isnt this working??? -->
    <div class="page-content">
    <div class="responsive-sammich">
        <?php the_post_thumbnail('full', array('class' => 'responsive-sammich')); ?>
    </div>
    <div class="content">
        <p class="meta-date">
            <?php echo get_the_date(); ?>
        </p>
        <a class="post-title" href="<?php echo get_post_permalink();?>">
            <?php the_title(); ?>
        </a>
        <p>
            <?php the_excerpt(); ?>
        </p>
        <span class="read-more">
            <a href="<?php echo get_post_permalink();?>">
            Read More
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#CC4B00">
                <path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z" />
            </svg>
            
        </span>
        
        <!-- Need to make this line up with read more -->
    </div>
    </div>
</div>

</article>
<?php endwhile; ?>

<?php get_footer(); ?>
