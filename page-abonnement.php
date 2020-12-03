<?php


get_header();


if (have_posts()):
    while (have_posts()) : the_post(); ?>
    <article class="post">
    <h1 id="sub_title"><?php the_field('sub_title'); ?></h1>
        <div class="section">
        <div id="packages">
            <?php 
                $image = get_field('basic');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
               
                    <h1><?php the_field('basic_title'); ?></h1>
                    <h1><?php the_field('basic_price'); ?></h1>
                    <p><?php the_field('basic_description'); ?></p>
                    <a href="#"><button>Se mere</button></a>
                </div>
                <div id="packages">
        <?php 
            $image = get_field('premium');
            if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
            
                <h1><?php the_field('premium_title'); ?></h1>
                <h1><?php the_field('premium_price'); ?></h1>
                <p><?php the_field('basic_description'); ?></p>
                <a href="#"><button>Se mere</button></a>
            </div>
        </div>
    </article>
<?php endwhile;
else: 
    echo '<p> No content found </p> ';

endif;

get_footer();
?>