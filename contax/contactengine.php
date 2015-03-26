<?php

$EmailFrom = "tucargagn@gmail.com";
$EmailTo = "tucargagn@gmail.com";

$Name = Trim(stripslashes($_POST['nombre']));
$LastName = Trim(stripslashes($_POST['apellidos']));
$Tel = Trim(stripslashes($_POST['num_telefono'])); 
$Email = Trim(stripslashes($_POST['emailsito'])); 
$direccion = Trim(stripslashes($_POST['direccion']));
$city = Trim(stripslashes($_POST['ciudad']));

$Subject = "TucargaGN - Registro de ". $Name;

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Nombre: ";
$Body .= $Name;
$Body .= " ";
$Body .= $LastName;
$Body .= "\n";
$Body .= "Telefono: ";
$Body .= $Tel;
$Body .= "\n";
$Body .= "Correo electronico: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Direccion: ";
$Body .= $direccion;
$Body .= "\n";
$Body .= "Ciudad: ";
$Body .= $city;

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=gracias.php\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}
?>