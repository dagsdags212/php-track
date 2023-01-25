<?php
    require __DIR__ . '/create_image.php';

    $img1 = create_image();
    show_image($img1);
    destory_image($img1);
?>