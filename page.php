<?php
get_header();
?>

<div id="content" class="site-content container py-5 mt-5">
  <div id="primary" class="content-area">

    <div class="row">
      <div class="col-md-8 col-xxl-9">

        <main id="main" class="site-main">

          <header class="entry-header">
            <?php the_post(); ?>
            <h1><?php the_title(); ?></h1>
          </header>

          <div class="entry-content">
            <?php the_content(); ?>
          </div>

        </main>

      </div>
    </div>

  </div>
</div>

<?php
get_footer();