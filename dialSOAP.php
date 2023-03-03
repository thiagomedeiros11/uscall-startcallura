<?php

   ini_set("soap.wsdl_cache_enabled", 0);
   $context = stream_context_create([
   'ssl' => [
    // set some SSL/TLS specific options
    'verify_peer' => false,
    'verify_peer_name' => false,
    'allow_self_signed' => true ]
   ]);

   $client = new SoapClient('https://<url>aplicativos/webservice/wsuscall.php?wsdl', ['stream_context' => $context ]);
   $result = $client->startCallura('<token>', '1', '11997755314', '1');

   var_dump($result);

?>
