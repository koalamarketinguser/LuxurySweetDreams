<?php

/**

 * Footer Buttons

 *

 * This template can be overridden by copying it to yourtheme/templates/side-cart-woocommerce/global/footer/buttons.php.

 *

 * HOWEVER, on occasion we will need to update template files and you

 * (the theme developer) will need to copy the new files to your theme to

 * maintain compatibility. We try to do this as little as possible, but it does

 * happen.

 * @see     https://docs.xootix.com/side-cart-woocommerce/

 * @version 2.1

 */





if ( ! defined( 'ABSPATH' ) ) {

	exit; // Exit if accessed directly

}





extract( Xoo_Wsc_Template_Args::footer_buttons() );



do_action( 'xoo_wsc_before_footer_btns' );
$buttonHTML = '<a href="%1$s" class="%2$s">%3$s</a>';

?>

<div class="xoo-wsc-ft-buttons-cont">



	<?php foreach ( $buttons as $key => $button_data ){

?>
<?php

if($key === 'continue' && ICL_LANGUAGE_CODE=='pl'){
    $button_data['label']='Kontynuj zakup';
     $button_data['url']= get_site_url().'/shop/'; 
} 
if($key === 'continue' && ICL_LANGUAGE_CODE=='en'){
    $button_data['label']='Continue shopping';
    $button_data['url']= get_site_url().'/shop/?lang=en'; 
}
	if($key === 'continue' && ICL_LANGUAGE_CODE=='de'){
    $button_data['label']='Einkauf fortsetzen';
    $button_data['url']= get_site_url().'/shop/?lang=de'; 
}
	if($key === 'continue' && ICL_LANGUAGE_CODE=='ja'){
    $button_data['label']='買い物を続ける';
    $button_data['url']= get_site_url().'/shop/?lang=ja'; 
}
if($key === 'cart' && ICL_LANGUAGE_CODE=='pl'){
    $button_data['label']='Mój koszyk';
    $button_data['url']= get_site_url().'/koszyk/'; 
} 
if($key === 'cart' && ICL_LANGUAGE_CODE=='en'){
    $button_data['label']='My cart';
    $button_data['url']= get_site_url().'/cart/?lang=en'; 
} 
	if($key === 'cart' && ICL_LANGUAGE_CODE=='de'){
    $button_data['label']='Mein Warenkorb';
    $button_data['url']= get_site_url().'/cart/?lang=de'; 
} 
	if($key === 'cart' && ICL_LANGUAGE_CODE=='ja'){
    $button_data['label']='荷車';
    $button_data['url']= get_site_url().'/cart/?lang=ja'; 
} 
if($key === 'checkout' && ICL_LANGUAGE_CODE=='pl'){
    $button_data['label']='Zamawiam';
} 
if($key === 'checkout' && ICL_LANGUAGE_CODE=='en'){
    $button_data['label']='Order';
    $button_data['url']= get_site_url().'/checkout/?lang=en'; 
} 
	if($key === 'checkout' && ICL_LANGUAGE_CODE=='de'){
    $button_data['label']='Bestellung';
    $button_data['url']= get_site_url().'/checkout//?lang=de'; 
}
	if($key === 'checkout' && ICL_LANGUAGE_CODE=='ja'){
    $button_data['label']='ため';
    $button_data['url']= get_site_url().'/checkout/?lang=ja'; 
}

?>
<?php

		if( !$button_data['label'] ) continue;

		$button_data['class'][] = 'xoo-wsc-ft-btn-'.$key;


    printf(
        $buttonHTML,

        esc_attr( $button_data['url'] ),

        implode( ' ', $button_data['class'] ),

        esc_html( $button_data['label'] )

    );



		



	} ?>



</div>



<?php do_action( 'xoo_wsc_after_footer_btns' ); ?>