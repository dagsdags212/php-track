<?php
    require __DIR__ . '/create_image.php';

    $img2 = create_image();
    show_image($img2);
    destory_image($img2);
?>