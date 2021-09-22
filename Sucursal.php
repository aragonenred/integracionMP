<?php
class Sucursal{

    function create(){
        require_once('includes/connection.php');
        $url = 'https://api.mercadopago.com/users/'.$user_id.'/stores';

        $body = [  
                 "name" =>"Sucursal Prueba",
                 "business_hours" =>["monday"=>[
                                                ["open"=>"08:00",
                                                "close"=>"13:00"],
                                                ["open"=>"15:00",
                                                "close"=>"18:00"]
                                            ],
                                     "tuesday"=>[
                                                 ["open"=>"08:00",
                                                  "close"=>"18:00"]
                                            ]
                                    ],      
                 "location"=>[  
                              "street_number"=>"3039",
                              "street_name"=>"Caseros",
                              "city_name"=>"Belgrano",
                              "state_name"=>"Capital Federal",
                              "latitude"=>-32.8897322,
                              "longitude"=>-68.8443275,
                              "reference"=>"3er Piso"
                 ],
                 "external_id"=>"STORE001"
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