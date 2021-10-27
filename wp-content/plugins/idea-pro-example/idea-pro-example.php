<?php

// Plugin Part 1
/**
*Plugin Name: Idea Pro Example Plugin
*Description: This is just an example plugin
**/

/**
 * Create a simple pluggin by using short code
 */
// function ideapro_example_function () {
//     $content = 'This is a very basic plugin';

//     $content .= '<div> This is a Div </div>';

//     $content .= '<p> This is a block of paragraph text </p>';

//     return $content;
// }
// add_shortcode('example', 'ideapro_example_function');

// Plugin Part 1 End


// Plugin Part 2
/**
 * Create a menu option on Admin Side Bar named Site Scripts
 */
// function ideapro_admin_menu_option() {
//     add_menu_page('Header & Footer Scripts', 'Site Scripts', 'manage_options', 'ideapro-admin-menu','ideapro_scripts_page','', 200);
// }

// add_action('admin_menu','ideapro_admin_menu_option');


/**
 * Create a callback function named ideapro_scripts_page to display form in Backend
 */
/* function ideapro_scripts_page() {

    if(array_key_exists('submit_scripts_update', $_POST)) {
        update_option('ideapro_header_scripts', $_POST['header_scripts']);
        update_option('ideapro_footer_scripts', $_POST['footer_scripts']);
        ?>
        <div id="setting-error-settings-updated" class = "updated_settings_error notice is-dismissible">
            <strong>Setting have been saved</strong>
        </div>

        <?php
    }

    $header_scripts = get_option('ideapro_header_scripts', 'none');
    $footer_scripts = get_option('ideapro_footer_scripts', 'none');

    ?> 
    <div class="wrap">
        <h2>Update Scripts on the header and footer</h2>

        <form action="" method="post">
            <label for="header_scripts">Header Scripts</label>
            <textarea name="header_scripts" id="header_scripts" class = "large-text"><?php print $header_scripts ?></textarea>
            <label for="footer_scripts">Footer Scripts</label>
            <textarea name="footer_scripts" id="footer_scripts" class = "large-text"><?php print  $footer_scripts ?></textarea>
            <input type="submit" name="submit_scripts_update" class = "button button-primary" value="UPDATE SRCIPTS">
        </form>
    </div>
    <?php
}


/**
 * Add function ideapro_display_header_srcipts to hook to generate data on header
 */
// function ideapro_display_header_srcipts() {
//     $header_scripts = get_option('ideapro_header_scripts', 'none');
//     print $header_scripts;
// }
// add_action('wp_head', 'ideapro_display_header_srcipts'); 


/**
 * Add function ideapro_display_header_srcipts to hook to generate data on footer
 */

 /*
function ideapro_display_footer_srcipts() {
    $footer_scripts = get_option('ideapro_footer_scripts', 'none');
    print $footer_scripts;
}
add_action('wp_footer', 'ideapro_display_footer_srcipts');

// Plugin Part 2 End


// Plugin Part 3
/**
 * Create Input Form and display by using Shortcode
 */
function ideapro_form() {
    // content variable
    $content = '';
    $content .= '<form method = "post" action = "http://localhost/AHT_Training/WordPress/Project_Theme/thank-you/">';

        $content .= '<input type = "text"  name = "full_name" placeholder = "Your Full Name">';
        $content .= '</br>';

        $content .= '<input type = "text"  name = "email_address" placeholder = "Your Email Address">';
        $content .= '</br>';

        $content .= '<input type = "text"  name = "phone_number" placeholder = "Your Phone Number">';
        $content .= '</br>';

        $content .= '<textarea name = "comments" placehoder = "Give us your comment"></textarea>';
        $content .= '</br>';

        $content .= '<input type = "submit"  name = "ideapro_submit_form" value = "SUBMIT YOUR INFORMATION"/>';
        
    $content .= '</form>'; 
    return  $content;
}

add_shortcode('ideapro_contact_form', 'ideapro_form');


/**
 * Exchange content type from text to HTML
 */
function set_html_content_type() {
    return 'text/html';
}

/**
 * Send Email
 */
function ideapro_form_capture() {
    global $post, $wpdb;

    if (array_key_exists('ideapro_submit_form', $_POST)) {
        $to = "trungducchk50@gmail.com";
        $subject = "IdeaPro Form Submission";
        $body = '';
        $body .= 'Name:'. $_POST['full_name']. '</br>';
        $body .= 'Email:'. $_POST['email_address']. '</br>';
        $body .= 'Phone Number:'. $_POST['phone_number']. '</br>';
        $body .= 'Comments:'. $_POST['comments']. '</br>';

        add_filter('wp_mail_content_text', 'set_html_content_type');

        wp_mail($to, $subject, $body);

        remove_filter('wp_mail_content_text', 'set_html_content_type');

        /* Insert information into comment*/
        /* $time = current_time('mysql');
 
        $data = array(
            'comment_post_ID'      => $post->ID,             // To which post the comment will show up.
            'comment_content'      => $body, // Fixed value - can be dynamic.
            'comment_date'         => $time,
            'comment_author_IP'    => $_SERVER['REMOTE_ADDR'],
            'comment_approved'    => 1,
        );

        wp_insert_comment($data);*/
 
         /* Add the submission to the database using the table we created*/
         $insertData = $wpdb->get_results("INSERT INTO ". $wpdb->prefix. "form_submissions (data) VALUES ('". $body ."')");
         var_dump ($insertData); 
    }
}

add_action('wp_head','ideapro_form_capture');

// Plugin Part 3 End









?>