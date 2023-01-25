<?php header('Content-type: text/css; charset: UTF-8'); ?>

<?php 
    $fontsize1 = rand(10, 30);
    $fontsize2 = rand(20, 60);
    $colors = array(1 => "red",
                    2 => "orange",
                    3 => "yelllow",
                    4 => "green",
                    5 => "blue",
                    6 => "violet");
?>
body {
    text-align: center;
}
    p {
        font-size: <?php echo $fontsize1 . "px"; ?>;
        color: <?php echo $colors[rand(1,6)]; ?>;
    }
    em {
        font-size: <?php echo $fontsize2 . "px"; ?>;
        color: <?php echo $colors[rand(1,6)]; ?>;
    }

    img {
        display: block;
        padding: 1%;
        margin: 0 auto;
    }