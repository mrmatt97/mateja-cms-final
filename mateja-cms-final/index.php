<?php

require( "config.php" );
$action = isset( $_GET['action'] ) ? $_GET['action'] : "";

switch ( $action ) {
    case 'archive':
        archives();
        break;
    case 'viewArticle':
        viewArticle();
        break;
    default:
        homepage();
}


function archives() {
    $results = array();
    $data = Articles::getList();
    $results['Articles'] = $data['results'];
    $results['totalRows'] = $data['totalRows'];
    $results['pageTitle'] = "Article Archive | Mateja's News";
    require( TEMPLATE_PATH . "archive.php" );
}

function viewArticle() {
    if ( !isset($_GET["articleId"]) || !$_GET["articleId"] ) {
        homepage();
        return;
    }

    $results = array();
    $results['Articles'] = Articles::getById( (int)$_GET["articleId"] );
    $results['pageTitle'] = $results['Articles']->title . " | Mateja's News";
    require( TEMPLATE_PATH . "viewArticle.php" );
}

function homepage() {
    $results = array();
    $data = Articles::getList( HOMEPAGE_NUM_ARTICLES );
    $results['Articles'] = $data['results'];
    $results['totalRows'] = $data['totalRows'];
    $results['pageTitle'] = "Mateja's News";
    require( TEMPLATE_PATH . "homepage.php" );
}

?>