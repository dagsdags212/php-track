<?php
    require __DIR__ . '/create_image.php';

    $img3 = create_image();
    show_image($img3);
    destory_image($img3);
?>