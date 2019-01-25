<?php

if(!empty($_POST)){
    
    //変数に代入
    $num = $_POST['num'];
    $unit = $_POST['unit'];
    
    if(!empty($num)){
        
        //cm以外の単位をcmにする
        if($unit === 'm' ){
            $num = $num * 100;
        }elseif($unit === 'km'){
            $num = $num * 100000;
        }

        //たこ焼き1つ4cmと仮定し、入力された数値を4で割る
        $result = $num / 4 ;
        
        echo "<p>{$_POST['num']}{$_POST['unit']}はたこ焼き{$result}個分だよ！</p>";
    }
    
}



