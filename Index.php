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
        <h1 class="post-title">
            <?php the_title(); ?>
        </h1>
        <p>
            <?php the_excerpt(); ?>
        </p>
        <a href="https://villatrue.com">
            Read More
        </a>
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20">
            <path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z" />
        </svg>
        <!-- Need to make this line up with read more -->
    </div>
    </div>
</div>

</article>
<?php endwhile; ?>

<?php get_footer(); ?>
