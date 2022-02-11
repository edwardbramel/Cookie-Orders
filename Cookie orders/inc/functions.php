<?php

function display_error_bucket($error_bucket)
{
    echo '<p>The following errors were detected:</p>';
    echo '<ul>';
    foreach ($error_bucket as $text) {
        echo '<li>' . $text . '</li>';
    }
    echo '</ul>';
}
