<?php
    if(isset($_POST['encrypt'])){
        $text = htmlentities($_POST['textToEncrypt']);
        $textToEncrypt = $text;
        if($text != ''){
            $arr2 = str_split($text);
            // echo count($arr2);
            $loop = rand(10,20);
            // echo $loop;
            //array of characters
            $arr1 = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z',',','.','-','=','+','`','@','#','$','%','^','&','*','(',')','/',' ');

            $encryptedText = '';
            for($a = 0; $a < count($arr2); $a++){
                $letter = $arr2[$a];
                for($b = 0; $b < $loop; $b++){
                    $pos = array_search($letter,$arr1);
                    $index = $pos-1;
                    if($index < 0) $index = count($arr1)-1;
                    $letter = $arr1[$index];
                }
                $encryptedText .= $arr1[$index];
            }
            //translate this to letters
            $lpar = str_split($loop);
            $ps1 = $arr1[$lpar[0]];
            $ps2 = $arr1[$lpar[1]];
            $prefix = $ps1.$ps2;
            // echo $prefix;
            $encryptedText = $prefix.$encryptedText;
        }
        else{
            $encryptedText = 'An error occured!';
        }
    }
    else if(isset($_POST['decrypt'])){
        $text = htmlentities($_POST['encryptedText']);
        $encryptedText = $text;
        if($text != ''){
            $arr2 = str_split($text);
            // echo count($arr2);

            //array of characters
            $arr1 = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z',',','.','-','=','+','`','@','#','$','%','^','&','*','(',')','/',' ');

            //how many times do I have to loop?
            $prefix = str_split(substr($text,0,2));
            $ps1 = array_search($prefix[0],$arr1);
            $ps2 = array_search($prefix[1],$arr1);
            // $ps1--;
            // $ps2--;
            $loop = $ps1.$ps2;
            // echo '<br />here: '.$loop.'<br />';

            $txt = substr($text,2,strlen($text));
            // echo $text.' - '.$txt;
            $split = str_split($txt);

            $textToEncrypt = '';
            for($a = 0; $a < count($arr2); $a++){
                $letter = $arr2[$a];
                for($b = 0; $b < $loop; $b++){
                    $pos = array_search($letter,$arr1);
                    $index = $pos+1;
                    if($index > count($arr1)-1) $index = 0;
                    $letter = $arr1[$index];
                }
                $textToEncrypt .= $arr1[$index];
            }
            $textToEncrypt = substr($textToEncrypt,2,strlen($textToEncrypt));
            $encryptedText = '';
        }
        else{
            $encryptedText = 'An error occured!';
        }
    }
?>
