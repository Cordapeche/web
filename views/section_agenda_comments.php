<?php

echo '<h2>Comments</h2>';

foreach ($comments as $comment) {
    echo '<div>';
    echo '<h3>' . $comment['author'] . '</h3>';
    echo '<h4>' . $comment['date'] . '</h4>';
    echo '<p>' . $comment['comment'] . '</p>';
    echo '</div>';
}
