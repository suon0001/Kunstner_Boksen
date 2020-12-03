<?php


get_header();


if (have_posts()):
    
    while (have_posts()) : the_post(); ?>
    <article class="post">
        <div id="title">
     
        <h1 id="main-title">
        <div class="pencil">
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
            <lottie-player src="https://assets4.lottiefiles.com/packages/lf20_T7i0Bb.json"  background="transparent" 
            speed="0.5"  style="width: 180px; height: 180px;" hover loop></lottie-player>
        </div>
        KUNSTARTIKLER
       
        </h1>
        </div>
        <div id="secondery-title">
        <h4>Ny udfording med nye kunstartikler hver måned</h4>
        </div>
        <div class="section">
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
            <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_3vwzbl.json"  background="transparent"
              speed="0.5"  style="width: 500px; height: 500px;"   loop autoplay></lottie-player>
        <div class="tilmeld">
              <p>Få en månedligt boks indeholdende en samlet pakkeløsning til kreativ udfoldelse. <br>
                    Simpelt. Nemt. Kunstner Boksen.
                    </p>
                <button>Tilmeld</button>
        </div>
        </div>

        <div class="video-section">
            <h2>title</h2>
            <?php the_content(); ?>
        </div>


        <div class="section">
            <div id="steps">
                <img id="step" src="http://localhost/wordpress/wp-content/uploads/2020/11/step1-3.png" alt="">
               <h4>Tilmeld dig idag</h4>
                <p>Tilmeld dig for at modtage din første 
                <br>kasse med mystiske kunstforsyninger.
                </p>
            </div>
            <div id="steps">
                <img id="step" src="http://localhost/wordpress/wp-content/uploads/2020/11/step2-2.png" alt="">
               <h4>Levering</h4>
                <p>Dine kreative værktøjer er valgt,
                <br>pakket og sendt
                </p>
            </div>
            <div id="steps">
                <img id="step" src="http://localhost/wordpress/wp-content/uploads/2020/11/step3-2.png" alt="">
                <h4>Kreativ udfordring</h4>
                <p>Din pakke er ankommer !!!
                <br>Åbn det og bliv kreativ.
                </p>
            </div>
           
        </div>
    </article>
<?php endwhile;
else: 
    echo '<p> No content found </p> ';

endif;

get_footer();
?>
