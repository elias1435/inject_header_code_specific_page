<?php
function custom_thank_you_script() {
    if (is_page('thank-you')) { // Replace with your thank-you page slug
        ?>
        <script>
            // Your custom JavaScript code
            console.log('Thank you for visiting our thank-you page!');
        </script>
        <?php
    }
}
add_action('wp_footer', 'custom_thank_you_script');
