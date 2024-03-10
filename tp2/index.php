<?php
    function removeCensoredWords($txt){
        $censoredWords = [
            'zut', 'merde', 'oops', 'putain', 'fuck', 
        ];

        foreach($censoredWords as $negativeWord){
            $txt = str_replace($negativeWord, "***", $txt);
        }

        return $txt;
    }


    echo removeCensoredWords("");