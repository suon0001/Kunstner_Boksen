<?php


get_header();


if (have_posts()):
    
    while (have_posts()) : the_post(); ?>
    <article class="post">
    
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player src="https://assets10.lottiefiles.com/packages/lf20_3vwzbl.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;" hover loop  ></lottie-player>
        <?php the_content(); ?>


        <?php the_content(); ?>

        <?php the_content(); ?>

        <div class="section">
            <img src="https://media.macphun.com/img/uploads/customer/how-to/579/15531840725c93b5489d84e9.43781620.jpg?q=85&w=1340" alt="">
            <img src="https://media.macphun.com/img/uploads/customer/how-to/579/15531840725c93b5489d84e9.43781620.jpg?q=85&w=1340" alt="">
            <img src="https://media.macphun.com/img/uploads/customer/how-to/579/15531840725c93b5489d84e9.43781620.jpg?q=85&w=1340" alt="">
        </div>
    </article>
<?php endwhile;
else: 
    echo '<p> No content found </p> ';

endif;

get_footer();
?>
