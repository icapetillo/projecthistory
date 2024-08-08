<?php
/*
String reverseMe = "reverse me!";
for (int i = 0; i < reverseMe.length(); i++) {
    reverseMe = reverseMe.substring(1, reverseMe.length() - i)
        + reverseMe.substring(0, 1)
        + reverseMe.substring(reverseMe.length() - i, reverseMe.length());
 }
 System.out.println(reverseMe);
 * 
 */

$reverseMe = "ADOREMOS A SATAN";
for ($i=0; $i < strlen($reverseMe); $i++){
    $reverseMe = substr($reverseMe, 1, strlen($reverseMe) - $i)
                + substr($reverseMe, 0, 1) 
                + substr($reverseMe, strlen($reverseMe)-$i, strlen($reverseMe));    
}

echo $reverseMe;
 
?>
