<?php
function getGallery() {
	$dir = '../home-images/';
    $file_display = array('jpg', 'jpeg', 'png', 'gif');

    if ( file_exists( $dir ) == false ) {
       echo 'Directory \'', $dir, '\' not found!';
    } else {
       $dir_contents = scandir( $dir );

        foreach ( $dir_contents as $file ) {
           $file_type = strtolower( end( explode('.', $file ) ) );
           if ( ($file !== '.') && ($file !== '..') && (in_array( $file_type, $file_display)) ) {
              echo '                <div style="background:url(../home-images/'.$file.') no-repeat center center; background-size:cover;"></div>
';
           }
        }
    }
}
?>