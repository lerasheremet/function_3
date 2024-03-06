<?php
    $text = "Hello World!123. fjvhebu, jdnifvgij.";
    function reformatText($text){
        $text = preg_replace('/[\s\d\W]/', '', $text);

        $formattedText = '';
        $length = strlen($text);

        for ($i=0; $i<$length; $i++){
            if ($i%2==0){
                $formattedText.=strtoupper($text[$i]);
            }else{
                $formattedText.=strtolower($text[$i]);
            }
        }
        return $formattedText;
    }

    $formattedText = reformatText($text);
    echo $formattedText;
