<?php


get_header();


if (have_posts()):
    while (have_posts()) : the_post(); ?>
    <article class="post">
<div>
    <div class="kontakt-section">
    <ul class="kontakt-info">
          <li>
  <?php the_field("name_1"); ?>
         </li>
         <li>
  <?php the_field("phone_1"); ?>
         </li>
         <li>
  <?php the_field("email_1"); ?>
        </li>
    </ul>
  <?php 
    $image = get_field('image_1');
    if( !empty( $image ) ): ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    <?php endif; ?> 
  </div>

  <div class="kontakt-section">
      <ul class="kontakt-info">
          <li>
  <?php the_field("name_2"); ?>
         </li>
         <li>
  <?php the_field("phone_2"); ?>
         </li>
         <li>
  <?php the_field("email_2"); ?>
        </li>
    </ul>
  <?php 
    $image = get_field('image_2');
    if( !empty( $image ) ): ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    <?php endif; ?> 
  </div>

  <div class="kontakt-section">
  <ul class="kontakt-info">
          <li>
  <?php the_field("name_3"); ?>
         </li>
         <li>
  <?php the_field("phone_3"); ?>
         </li>
         <li>
  <?php the_field("email_3"); ?>
        </li>
    </ul>
  <?php 
    $image = get_field('image_3');
    if( !empty( $image ) ): ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    <?php endif; ?> 
  </div>
</div>
    </article>
<?php endwhile;
else: 
    echo '<p> No content found </p> ';

endif;

get_footer();
?>