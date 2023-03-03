<?php

$curl = curl_init();

curl_setopt_array($curl, array(
CURLOPT_URL => 'https://<url>:8000/api/uscall/startCallura?token=<token>/&idura=1&destino=11997755314&categoria=1',
CURLOPT_RETURNTRANSFER => true,
CURLOPT_ENCODING => '',
CURLOPT_MAXREDIRS => 10,
CURLOPT_TIMEOUT => 0,
CURLOPT_FOLLOWLOCATION => true,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => 'GET',
CURLOPT_HTTPHEADER => array(
'Accept: application/json',
'Content-Type: application/json'
),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
