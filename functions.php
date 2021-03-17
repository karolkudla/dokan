<?php 
/* if "Edit" button in vendor "Products" page doesn't work as expected */
/* path to file: plugins/dokan-lite/includes.php line 977 */
/* you must comment as below */

function dokan_edit_product_url( $product ) {
    if ( ! $product instanceof WC_Product ) {
        $product = wc_get_product( $product );
    }

    if ( ! $product ) {
        return false;
    }
  
    /*
    if ( 'publish' === $product->get_status() ) {
		
		
        $url = trailingslashit( get_permalink( $product->get_id() ) ) . 'edit/';
    } else {
		*/
		
        $url = add_query_arg(
            [
                'product_id' => $product->get_id(),
                'action'     => 'edit',
            ],
            dokan_get_navigation_url( 'products' )
        );
		/*
    }
*/
    return apply_filters( 'dokan_get_edit_product_url', $url, $product );
}

;?>
