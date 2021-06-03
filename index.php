<?php
    require_once('lib/nusoap.php');
    $client = new nusoap_client("http://postalservice.thailandpost.com/RateServiceBasic/Service.asmx?wsdl",true);

    // Account for PostalRate Access
    $username="SarabunEGAT2019";
    $password="hjVNbszJyMt4";

    //Param setting
    // ServiceID:   2  = EMS ในประเทศ (Work)
    //              24 = ลงทะเบียนในประเทศ (์Not work, return only empty string)
    // รายละเอียดดูในไฟล์ PostalRateServiceHelp.chm

    $params = array(
        'Username'=>$username,
        'Password'=>$password,
        'ServiceID'=>24,
        'CountryCode'=>'TH',
        'Weight'=>2

    );

    // GetRateByWeight = เรียกราคาโดยระบุ Weight, ServiceID และ CountryCode
    // รายละเอียดดูในไฟล์ PostalRateServiceHelp.chm
    $data = $client->call("GetRateByWeight",$params); 
    var_dump($data);
?>