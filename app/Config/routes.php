<?php
Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'home'));
Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));
Router::connect('/about', array('controller' => 'pages', 'action' => 'about'));
Router::connect('/contact', array('controller' => 'pages', 'action' => 'contact'));
Router::connect('/faq', array('controller' => 'pages', 'action' => 'display', 'faq'));
Router::connect('/safety', array('controller' => 'pages', 'action' => 'display', 'safety'));
Router::connect('/products', array('controller' => 'pages', 'action' => 'display', 'products'));
Router::connect('/industrial_shrinkwrap', array('controller' => 'pages', 'action' => 'display', 'industrial_shrinkwrap'));
Router::connect('/packaging', array('controller' => 'pages', 'action' => 'display', 'packaging'));
Router::connect('/services', array('controller' => 'pages', 'action' => 'display', 'services'));
Router::connect('/packaging_products', array('controller' => 'pages', 'action' => 'display', 'packaging_products'));
Router::connect('/packaging_services', array('controller' => 'pages', 'action' => 'display', 'packaging_services'));

CakePlugin::routes();
require CAKE . 'Config' . DS . 'routes.php';
