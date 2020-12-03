<?php


get_header();


if (have_posts()):
    
    while (have_posts()) : the_post(); ?>
    <article class="post">
        <div class="section">
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
            <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_3vwzbl.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;" hover loop  ></lottie-player>
            <div class="tilmeld">
                <?php the_content(); ?>
                <button>Tilmeld</button>
            </div>
        </div>

        <br>

        <div class="section">
            <div class="tilmeld">
                <?php the_content(); ?>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/AjWfY7SnMBI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    
    
        


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
