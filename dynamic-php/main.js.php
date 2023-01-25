<?php header('Content-type: text/javascript; charset: UTF-8'); ?>
<?php $message = "You are " . rand(2,200) . "x better than before!"; ?>

$(document).ready(function(){
    console.log("<?php echo $message; ?>");
})
