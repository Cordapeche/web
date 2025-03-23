<img src="https://picsum.photos/1200/300">

<h1>Evento dans la ville de Bruxelles 1</h1>

<h3>Date: 01/01/2025</h3>

<h4>Category: Formation</h4>

<p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi
    placeat Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.
    Et aut eum quis fuga eos sunt ipfuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga 
    maxime saepe commodi placeat.

    <a href="index.php?c=public_html&a=agenda_details&id=1">Click here for mor details</a>
</p>


<?php
foreach ($events as $key => $event) {
    echo '<img src="' . $event['image'] . '" alt="Event Image">';
    echo '<h1>' . $event['title'] . '</h1>';
    echo '<h3>Date: ' . $event['date'] . '</h3>';
    echo '<h4>Category: ' . $event['category'] . '</h4>';
    echo '<p>' . $event['description'] . '</p>';
    echo '<a href="' . $event['link'] . '">Click here for more details</a>';
    echo '<hr>'; // Separador entre eventos
}
?>
