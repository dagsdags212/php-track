<?php
    function generate_ticket_number(){
            return strval(rand(10000000, 99999999));
        }

    function set_image_params($img){
        $background_color = imagecolorallocate($img, 147, 198, 231);
        imagefill($img, 0, 0, $background_color);
        $text_color = imagecolorallocate($img, 55, 41, 72);
        $line_color = imagecolorallocate($img, 255, 202, 202);
        imagestring($img, 5, 43, 10, "CINEMA TICKET", $text_color);
        imagestring($img, 5, 60, 53, "ADMIT ONE", $text_color);
        imagestringup($img, 3, 8, 67, generate_ticket_number(), $text_color);
        imagesetthickness($img, 3);
        imageline($img, 30, 40, 170, 40, $line_color);
        imageline($img, 30, 0, 30, 80, $line_color);
        imageline($img, 170, 0, 170, 80, $line_color);
    }

    function create_image(){
        $img = imagecreatetruecolor(200, 80);
        set_image_params($img);
        return $img;
    }

    function show_image($img){
        header("Content-type: image/png");
        imagepng($img);
    }
    
    function destory_image($img){
        imagecolordeallocate($line_color);
        imagecolordeallocate($text_color);
        imagecolordeallocate($background_color);
        imagedestroy($img);
    }
?>