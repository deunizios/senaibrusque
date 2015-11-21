<?php
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
 
$EmailTo = "deunizios@gmail.com ";
$Subject = "Recebimento de formulario do site";
 
// prepare email body text
$Body = "Nome: ";
$Body .= $name;
$Body .= "\n";
 
$Body .= "E-mail: ";
$Body .= $email;
$Body .= "\n";
 
$Body .= "Mensagem: ";
$Body .= $message;
$Body .= "\n";
 
// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);
 
// Resposta para a chamada do AJAX
if ($success){
   echo "success";
}else{
    echo "invalid";
}
 
