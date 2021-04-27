<?php 

// multiple recipients
$to  = 'humbertofizero@hotmail.com' . ', '; // note the comma
$to .= 'jonathan_alvarenga10@hotmail.com';

// subject
$subject = 'Teste de E-mail';

// message
$message = '
<html>
<head>
  <title>Teste de Email</title>
</head>
<body>
  <p>Tag P</p>
  <table>
    <tr>
      <th>Person</th><th>Day</th><th>Month</th><th>Year</th>
    </tr>
    <tr>
      <td>Joe</td><td>3rd</td><td>August</td><td>1970</td>
    </tr>
    <tr>
      <td>Sally</td><td>17th</td><td>August</td><td>1973</td>
    </tr>
  </table>
</body>
</html>
';

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= 'To: Humberto Ignacio <humbertofizero@hotmail.com>, Jonathan <jonathan_alvarenga10@hotmail.com>' . "\r\n";
$headers .= 'From: TesteEmail <teste@example.com>' . "\r\n";
//$headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
//$headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";

// Mail it
mail($to, $subject, $message, $headers);

?>