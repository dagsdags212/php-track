<?php
    require __DIR__ . '/create_image.php';

    $img4 = create_image();
    show_image($img4);
    destory_image($img4);
?>