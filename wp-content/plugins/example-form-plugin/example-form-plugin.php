<?php

use MailPoetVendor\Doctrine\ORM\Query\AST\InputParameter;

/**
 * Plugin Name: Example Form Plugin
 */

 function example_form_plugin() {
    $content = '';
    $content .= '<h2>Contact Us!</h2>';
    $content .= '<label for = "your_name">Name</label>';
    $content .= '<input class = "form-control" type = "text" name = "your_name" placehoder = "Enter your name" />';

    $content .= '<label for = "your_email">Your Email</label>';
    $content .= '<input class = "form-control" type = "text" name = "your_email" placehoder = "Enter your email" />';
    return $content;
 }
add_shortcode('example_form', 'example_form_plugin');