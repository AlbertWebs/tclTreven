<?php
   header("Content-Type:application/json");
   $response = '{
       "resultCode" : 0,
       "resultDesc": "Confirmation Received Successfully"

   }';
   $mpesaResponse = file_get_contents('php://input');
   //log the respons
   $logfile = "M_PESAconfimationResponse.txt";
   $jsonMpesaResponse = json_decode($mpesaResponse,true);

   //Write to file
   $log = fopen($logfile,"a");
   fwrite($log,$mpesaResponse);
   fclose($log);
?>