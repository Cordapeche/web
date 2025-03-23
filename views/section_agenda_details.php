<?php

echo '<img src="' . $event['image_main'] . '" alt="Main Event Image">';
echo '<h1>' . $event['title'] . '</h1>';
echo '<h3>Date: ' . $event['date'] . '</h3>';
echo '<h4>Category: ' . $event['category'] . '</h4>';

foreach ($event['description'] as $paragraph) {
    echo '<p>' . $paragraph . '</p>';
}

echo '<img src="' . $event['image_secondary'] . '" alt="Secondary Event Image">';
echo '<p>' . $event['extra_text'] . '</p>';

echo '<hr>';

