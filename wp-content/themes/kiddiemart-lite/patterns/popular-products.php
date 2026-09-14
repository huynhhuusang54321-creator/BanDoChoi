<?php

/**
 * Title: Popular Products
 * Slug: kiddiemart-lite/popular-products
 * Categories: kiddiemart, page
 */
?>

<!-- wp:group {"align":"full","className":"wp-block-section wp-block-popular-products wp-product-showcase ","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wp-block-section wp-block-popular-products wp-product-showcase"><!-- wp:group {"align":"wide"} -->
	<div class="wp-block-group alignwide"><!-- wp:group {"className":"wp-block-group-heading"} -->
		<div class="wp-block-group wp-block-group-heading"><!-- wp:heading {"textAlign":"center"} -->
			<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e('Weekly Popular Products', 'kiddiemart-lite'); ?></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"wp-product-cateogry-block","layout":{"inherit":true,"type":"constrained"}} -->
		<div class="wp-block-group wp-product-cateogry-block"><!-- wp:columns {"align":"wide"} -->
			<div class="wp-block-columns alignwide"><!-- wp:column -->
				<div class="wp-block-column"><!-- wp:woocommerce/featured-product /--></div>
				<!-- /wp:column -->

				<!-- wp:column -->
				<div class="wp-block-column"><!-- wp:woocommerce/featured-product /--></div>
				<!-- /wp:column -->

				<!-- wp:column -->
				<div class="wp-block-column"><!-- wp:woocommerce/featured-product /--></div>
				<!-- /wp:column -->

				<!-- wp:column -->
				<div class="wp-block-column"><!-- wp:woocommerce/featured-product /--></div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->