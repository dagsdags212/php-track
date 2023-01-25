<?php
    require __DIR__ . '/create_image.php';

    $img5 = create_image();
    show_image($img5);
    destory_image($img5);
?>