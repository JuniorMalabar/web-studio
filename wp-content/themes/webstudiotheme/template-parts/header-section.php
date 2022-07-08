<?php
$pageName = $args['pageName'];
?>

<section class="<?= $pageName ?> header-section container">
  <div class="row">
    <div class="col zi-1000">
      <h1 class="title-line">
        <?php
        the_field($pageName . '_title_first_line')
        ?>
      </h1>
      <h1 class="title-line">
        <?php
        the_field($pageName . '_title_second_line')
        ?>
      </h1>
      <h1 class="title-line">
        <?php
        the_field($pageName . '_title_third_line')
        ?>
      </h1>
    </div>
  </div>
</section>