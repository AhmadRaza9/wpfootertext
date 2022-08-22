<?php

if (!function_exists('wpplugin_custom_admin_footer')) {
    function wpplugin_custom_admin_footer($footer)
    {
        $new_footer = get_option('wp_footer_text_field');
        if ($new_footer !== '') {
            return $new_footer;
        }
        return $footer;
    }

}
add_filter('admin_footer_text', 'wpplugin_custom_admin_footer', 10, 1);

// create custom plugin settings menu
add_action('admin_menu', 'wp_footer_text_seting_page');

if (!function_exists('wp_footer_text_seting_page')) {

    function wp_footer_text_seting_page()
    {

        //create new top-level menu
        add_menu_page('WP Footer Text', 'WpFooter Text', 'administrator', 'wp-footer-text', 'wp_footer_text_settings_page', 'dashicons-text');

        //call register settings function
        add_action('admin_init', 'register_wp_footer_text_plugin_settings');
    }
}

if (!function_exists('')) {
    function register_wp_footer_text_plugin_settings()
    {
        //register our settings
        register_setting('my-cool-plugin-settings-group', 'wp_footer_text_field');
    }

}

if (!function_exists('')) {
    function wp_footer_text_settings_page()
    {
        ?>
<div class="wrap">
<h1>WP Footer Text</h1>

<form method="post" action="options.php">
    <?php settings_fields('my-cool-plugin-settings-group');?>
    <?php do_settings_sections('my-cool-plugin-settings-group');?>
    <table class="form-table">
        <tr valign="top">
        <th scope="row">Footer Text Here</th>
        <td>
            <textarea name="wp_footer_text_field" id="wpf-textarea" cols="120" rows="8"><?php echo get_option('wp_footer_text_field'); ?></textarea>
        </td>
        </tr>
    </table>
    <?php submit_button();?>

</form>
</div>
<?php }
}




add_filter('plugin_action_links_wpfootertext-main/index.php', 'wp_footer_text_settings_link');
function wp_footer_text_settings_link($links)
{
    // Build and escape the URL.
    $url = esc_url(add_query_arg(
        'page',
        'wp-footer-text',
        get_admin_url() . 'admin.php'
    ));
    // Create the link.
    $settings_link = "<a href='$url'>" . __('Settings') . '</a>';
    // Adds the link to the end of the array.
    array_push(
        $links,
        $settings_link
    );
    return $links;
} //end wp_footer_text_settings_link()
