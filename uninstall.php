<?php
if ( !defined( 'WP_UNINSTALL_PLUGIN' ) ){
  exit();
}

delete_option( 'chatsupport_options' );