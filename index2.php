<?php
    $url = "http://postalservice.thailandpost.com/RateServiceBasic/Service.asmx?wsdl";

    // echo file_get_contents($url);
    // die();

    $atservices_client = new SoapClient($url);

    // $username="SarabunEGAT2019";
    // $password="hjVNbszJyMt4";

    $username="SarabunEGAT2019";
    $password="hjVNbszJyMt4";


    $param = array(
                    'Username'=>$username,
                    'Password'=>$password//,
                    // 'ServiceID'=>'2',
                    // 'CountryCode'=>'TH'
                );
    // $soapaction = array('soapaction'=>'http://postalservice.thailandpost.com/GetRateByWeight');            
    $soapaction = array('soapaction'=>'http://postalservice.thailandpost.com/GetAllService');   
    $output = $atservices_client->__soapCall('GetAllService',$param,$soapaction);
    // print_r(json_decode($output));
     var_dump($output);
?>