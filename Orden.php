<?php 

class Orden{

    $total;
    $items =[];
    

    public function __construct(){

    }

    function create(){
        require_once('includes/connection.php');
        $url= 'https://api.mercadopago.com/instore/orders/qr/seller/collectors/'.$user_id.'/pos/CAJA0001/qrs';
        

        $body= [
            "external_reference"=> "order-id-1234",
            "total_amount"=> 40.0,
            "items"=> [
                        [   "sku_number"=> "KS955RUR",
                            "category"=> "LIBRERIA",
                            "title"=> "Lapicera",
                            "description"=> "Lapicera verde",
                            "quantity"=> 2,
                            "unit_measure"=> "unit",
                            "unit_price"=> 20,
                            "total_amount"=> 40
                        ]
                    ],
            "title"=> "Compra en Librería",
            "description"=> "Compra y retiro",
            /*"sponsor"=> ["id"=> ''], */
            "notification_url"=> "https://www.yourserver.com/notifications"
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