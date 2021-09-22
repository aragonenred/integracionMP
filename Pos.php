<?php
class Pos{

    function create($pos_id){        
        require_once('includes/connection.php');
        $url = 'https://api.mercadopago.com/pos';

        $body= [
                "name"=>"Caja Principal", 
                "fixed_amount"=> true,
                "category"=> 621102,
                "external_store_id"=> "STORE001",
                "external_id"=> $pos_id
            ];

        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); //Solo para desarrollo
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($body)); 
        curl_setopt($curl, CURLOPT_HTTPHEADER, $header);

        $result = curl_exec($curl);

        return($result);
    }

    
}

?>