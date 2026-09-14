<?php

/**
 * Title: Taxonomy Product Header
 * Slug: kiddiemart-lite/taxonomy-product-header
 * Categories: kiddiemart-lite, header
 */
?>

<!-- wp:group {"align":"full","className":"no-margin-top header-media-inner-post","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull no-margin-top header-media-inner-post">
    <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"layout":{"inherit":false}} -->
    <div class="wp-block-group alignfull" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
        <!-- wp:cover {"url":"<?php echo esc_url(get_parent_theme_file_uri('/assets/images/inner-header-media.jpg')); ?>","dimRatio":0,"overlayColor":"body-text","focalPoint":{"x":0.5,"y":0.5},"isDark":false} -->
        <div class="wp-block-cover is-light">
            <span aria-hidden="true" class="wp-block-cover__background has-body-text-background-color has-background-dim-0 has-background-dim"></span>
            <img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url(get_parent_theme_file_uri('/assets/images/inner-header-media.jpg')); ?>" style="object-position:50% 50%" data-object-fit="cover" data-object-position="50% 50%" />
            <div class="wp-block-cover__inner-container">
                <!-- wp:group {"layout":{"inherit":true,"type":"constrained"}} -->
                <div class="wp-block-group">


                    <!-- wp:group {"className":"alignwide","textColor":"foreground"} -->
                    <div class="wp-block-group alignwide has-foreground-color has-text-color"><!-- wp:query-title {"type":"archive","textAlign":"center","showPrefix":false,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"section-title"} /-->

                        <!-- wp:term-description {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|meta"}}},"spacing":{"margin":{"top":"var:preset|spacing|16"},"padding":{"top":"var:preset|spacing|50"}}},"textColor":"meta","fontSize":"upper-heading"} /-->
                    </div>
                    <!-- /wp:group -->


                </div>
                <!-- /wp:group -->
            </div>
        </div>
        <!-- /wp:cover -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->