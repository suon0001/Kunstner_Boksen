<?php


get_header();


if (have_posts()):
    
    while (have_posts()) : the_post(); ?>
    <article class="post">

        <div id="title">
     
            <h1 id="main-title">
            KUNSTARTIKLER
            </h1>
        </div>

        </div>
        <div id="secondery-title">
        <h4><?php the_field('slogan'); ?></h4>
        </div>
        <div class="section">
                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_3vwzbl.json"  background="transparent"
                speed="0.5"  style="width: 500px; height: 500px;"loop autoplay></lottie-player>
                <div class="tilmeld">
                    <p>
                    <?php the_field('tilmeld'); ?>
                    </p>
                        <a href="http://localhost/wordpress/abonnement/"><button>Tilmeld</button></a>
                </div>
        </div>

        <div id="video_title">
            <h1><?php the_field('video_title'); ?></h1> 
        </div>

        <div class="video-section">
        <div class="video-description">
            <?php the_field('video_description'); ?>
        </div>
            
            <iframe width="560" height="315" src="https://www.youtube.com/embed/0WFqXInKzJc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>

        <br>

        <div id="steps_title">
            <h1><?php the_field('steps_title'); ?></h1> 
        </div>

        <div class="section">
            <div id="steps">
              
            <?php 
                $image = get_field('step_1_image');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
               <h4>Tilmeld dig idag</h4>
                <p>  <?php the_field('step_1'); ?>
                </p>
            </div>
            <div id="steps">
            <?php 
                $image = get_field('step_2_image');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?> 
               <h4>Levering</h4>
                <p><?php the_field('step_2'); ?>
                </p>
            </div>
            <div id="steps">
            <?php 
                $image = get_field('step_3_image');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
                <h4>Kreativ udfordring</h4>
                <p><?php the_field('step_3'); ?>
                </p>
            </div>
            
           
        </div>
        <a class="step-btn" href="http://localhost/wordpress/abonnement/"><button>Tilmeld</button></a>
    </article>
<?php endwhile;
else: 
    echo '<p> No content found </p> ';

endif;

get_footer();
?>


<style>
    body {
    font-family: 'Varela Round', sans-serif;
    margin: 0;
    padding: 0;
    background: rgb(197,197,197);
    background: linear-gradient(180deg, rgba(197,197,197,1) 0%, rgba(242,180,184,0.8104283949908089) 27%, rgba(253,245,245,1) 59%, rgba(255,255,255,1) 83%, rgba(226,240,203,0.6703723725818452) 100%);
   }
</style>