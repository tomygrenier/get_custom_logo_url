/*

*/
function get_custom_logo_url($blog_id){
	$image_url = '';
    $switched_blog = false;
 
    if ( is_multisite() && ! empty( $blog_id ) && (int) $blog_id !== get_current_blog_id() ) {
        switch_to_blog( $blog_id );
        $switched_blog = true;
    }
	
	 $custom_logo_id = get_theme_mod( 'custom_logo' );
 
    // We have a logo. Logo is go.
    if ( $custom_logo_id ) {
		$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
		$image_url = $image[0];
	}
	
	if ( $switched_blog ) {
        restore_current_blog();
    }
	
	return $image_url ;
	
	
}
