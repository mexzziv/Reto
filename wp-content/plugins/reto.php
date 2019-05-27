<?php
  /*
  Plugin Name: reto
  Plugin URI: https://github.com/mexzziv
  Description: Plugin de ejemplo del post de como crear un plugin en WordPress
  Version: 1.0
  Author: Mexzziv
  Author URI: https://github.com/mexzziv
  License: GPL2
  */


  $email = $_POST['email'];
  $status = 'subscribed';
  $list_id = '4132f39c7c';
  $api_key = 'd62b37872cf4bfadc371c9c681d8a34a-us20';

  rudr_mailchimp_subscriber_status($email, $status, $list_id, $api_key);

  function rudr_mailchimp_subscriber_status( $email, $status, $list_id, $api_key){
  	$data = array(
  		'apikey'        => $api_key,
      'email_address' => $email,
  		'status'        => $status,
  	);
  	$mch_api = curl_init(); // initialize cURL connection

  	curl_setopt($mch_api, CURLOPT_URL, 'https://' . substr($api_key,strpos($api_key,'-')+1) . '.api.mailchimp.com/3.0/lists/' . $list_id . '/members/' . md5(strtolower($data['email_address'])));
  	curl_setopt($mch_api, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Authorization: Basic '.base64_encode( 'user:'.$api_key )));
  	curl_setopt($mch_api, CURLOPT_USERAGENT, 'PHP-MCAPI/2.0');
  	curl_setopt($mch_api, CURLOPT_RETURNTRANSFER, true);
  	curl_setopt($mch_api, CURLOPT_CUSTOMREQUEST, 'PUT');
  	curl_setopt($mch_api, CURLOPT_TIMEOUT, 10);
  	curl_setopt($mch_api, CURLOPT_POST, true);
  	curl_setopt($mch_api, CURLOPT_SSL_VERIFYPEER, false);
  	curl_setopt($mch_api, CURLOPT_POSTFIELDS, json_encode($data) );

  	$result = curl_exec($mch_api);
    //echo $result;
    //$location = get_site_url() . "te-has-suscrito-exitosamente";
    //wp_redirect( $location, 301 );
    //exit;
  	return $result;
  }
  header("Location: /../../../wordpress/te-has-suscrito-exitosamente");

?>
