<?php

/**
 * Title: 404
 * Slug: smkor/404
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"tagName":"section","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"wrap","justifyContent":"stretch"}} -->
  <section class="wp-block-group" style="margin-top:var(--wp--preset--spacing--30)"><!-- wp:template-part {"slug":"header","tagName":"header"} /-->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
      <div class="wp-block-group"><!-- wp:heading -->
        <h2 class="wp-block-heading">Vi finner ikke denne siden</h2>
        <!-- /wp:heading -->

        <!-- wp:spacer {"height":"73px","style":{"layout":{"flexSize":"73px","selfStretch":"fixed"}}} -->
        <div style="height:73px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->

        <!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
        <figure class="wp-block-image size-large"><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/404-page-not-found-1024x499.png" alt="" class="wp-image-103" /></figure>
        <!-- /wp:image -->

        <!-- wp:spacer {"height":"73px","style":{"layout":{"flexSize":"73px","selfStretch":"fixed"}}} -->
        <div style="height:73px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->

        <!-- wp:search {"label":"Search","buttonText":"Search"} /-->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
  </section>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->