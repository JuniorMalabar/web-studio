<?php


get_header();
?>
<main id="content" class="site-content">

  <?= get_template_part(
    '/template-parts/header-section',
    null,
    ['pageName' => 'main']
  ) ?>
  <div class="main-blur"></div>
  <section class="main-description container">
    <div class="row">
      <div class="col-2">
        <p class="description-paragraph first">
          <?php
          the_field('main_description_first_paragraph')
          ?>
        </p>
      </div>
      <div class="col-2">
        <p class="description-paragraph second">
          <?php
          the_field('main_description_second_paragraph')
          ?>
        </p>
      </div>
      <div class="col-2">
        <p class="description-paragraph third">
          <?php
          the_field('main_description_third_paragraph')
          ?>
        </p>
      </div>
      <div class="col-2"></div>
      <div class="col-4">
        <button class="order-btn blue-color">order a website</button>
      </div>
    </div>
  </section>

</main>
<?php
get_footer();
