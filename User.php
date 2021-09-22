<?php
class User{

    function create(){        
        require_once('includes/connection.php');
        $url = 'https://api.mercadopago.com/users/test_user';

        $body= ['site_id' => 'MLA'];

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