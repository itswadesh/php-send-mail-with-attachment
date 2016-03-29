<?php
include('config.php');
function sendmail($email){
  $url = 'https://api.sendgrid.com/';
  $filePath = dirname(__FILE__);

  $params = array(
      'api_user'  => SENDGRID_USERNAME,
      'api_key'   => SENDGRID_PASSWORD,
      'from'      => FROM,
      'to'        => $email,
      'subject'   => SUBJECT,
      'html'      => CONTENT,
      'files['.ATTACHED_FILENAME.']' => '@'.$filePath.'/'.ATTACHED_FILENAME
    );

  $request =  $url.'api/mail.send.json';

  // Generate curl request
  $session = curl_init($request);

  // Tell curl to use HTTP POST
  curl_setopt ($session, CURLOPT_POST, true);

  // Tell curl that this is the body of the POST
  curl_setopt ($session, CURLOPT_POSTFIELDS, $params);

  // Tell curl not to return headers, but do return the response
  curl_setopt($session, CURLOPT_HEADER, false);
  // Tell PHP not to use SSLv3 (instead opting for TLS)
  curl_setopt($session, CURLOPT_SSLVERSION, CURL_SSLVERSION_TLSv1_2);
  curl_setopt($session, CURLOPT_RETURNTRANSFER, true);

  // obtain response
  $response = curl_exec($session);
  curl_close($session);

  // return the executation state
  return $response;
}
?>