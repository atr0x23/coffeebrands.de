<?php 


if(isset($_POST['submit'])){
    
    
   // if(!empty($subject) && !empty($body) && !empty($header)){
    
    
$to      =  "atr0x23@gmail.com";   
$name =  wordwrap($_POST['Name'],70); // use wordwrap() if lines are longer than 70 characters
$body    =  $_POST['Message']; 
$header  =  "From: " . $_POST['Email'];
$phone    =  $_POST['Phone'];     
// send email
mail($to,$name,$body,$header,$phone); 

    
$message_sent = "<div class='alert alert-success' role='alert'> Ευχαριστούμε, το αίτημά σας έχει σταλεί! <mark>:)</mark> </div>";
$something_is_wrong = "";
}
//    else{
//
//        $email_sent = "";
//        $something_is_wrong = "<div class='alert alert-danger' role='alert'>Oops, something went wrong! Be sure that you have filled up all the fields and try gain.</div>";
//
//    } 
//
// } 
//
//else{
//         $email_sent = "";
//         $something_is_wrong = ""; }

?> 