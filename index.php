<?php

switch ($_GET['filename']) {
    case 'news':
        require 'inc/about.php';     // your news functions
        include 'tpl/about.tpl.php'; // your news template
        break;

    case 'events':
        require 'inc/portfolio.php';
        include 'tpl/portfolio.tpl.php';
        break;

    case 'contact':
        require 'inc/contact.php';
        include 'tpl/contact.tpl.php';
        break;

    default:
        if ($_GET['filename'] == '') {
            include 'tpl/home.tpl.php';
        } else {
            header('HTTP/1.0 404 Not Found');
            include 'tpl/page_not_found.tpl.php';
        }
        break;
}