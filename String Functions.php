<?php
 $str="Hello World";
 $str1="I Love PHP";
 
 echo str_word_count("$str")."<br>";

 echo strlen($str1)."<br>";

 echo strrev($str)."<br>";

 echo strpos($str,"Hello")."<br>";

 echo str_replace("Clock and Click","Clock","Click")."<br>";

 echo ucwords("Welcome to PHP")."<br>";

 $res=strtoupper($str);
 $res1=strtolower($str1);
 echo "$res,$res1"."<br>";

 echo str_repeat("*",10)."<br>";

 echo strcmp("Hello World","Hello World");

 echo substr($str1,0,3);

 echo(str_shuffle($str))."<br>";

 echo(trim($str))."<br>";

 echo(chop($str,"PHP"));

 if(soundex($str)==soundex($str1))
 {
    echo "True"."<br>";
 }
 echo levenshtein("ABC","AB")."<br>";

 echo str_pad($str1,20,"*")."<br>";

 echo strstr($str,$str1)."<br>";
?>


