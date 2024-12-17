<?php
function add_thank_you_script() {
    if (is_page('thank-you')) { 
        echo '<script type="text/javascript">
            // Your custom JavaScript code here
            console.log("Thank you for your purchase!");
            });
        </script>';
    }
}
add_action('wp_head', 'add_thank_you_script');
