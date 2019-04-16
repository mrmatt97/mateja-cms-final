<?php
ini_set( "display_errors", true );
date_default_timezone_set( "Europe/Belgrade" );
define( "DB_DSN", "mysql:host=localhost;dbname=mateja-cms-final" );
define( "DB_USERNAME", "mateja" );
define( "DB_PASSWORD", "0000" );
define( "CLASS_PATH", "classes" );
define( "TEMPLATE_PATH", "templates" );
define( "HOMEPAGE_NUM_ARTICLES", 5 );
define( "ADMIN_USERNAME", "admin" );
define( "ADMIN_PASSWORD", "mypass" );
require(CLASS_PATH . "Articles.php");

function handleException( $exception ) {
    echo "Sorry, a problem occurred. Please try later.";
    error_log( $exception->getMessage() );
}

set_exception_handler( 'handleException' );
?>