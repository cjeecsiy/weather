<?php

    require_once '../smarty/libs/Smarty.class.php';

    $smarty = new Smarty();
    $smarty->template_dir = './templates/';
    $smarty->compile_dir  = './templates_c/';
    $smarty->config_dir  = './configs/';
    $smarty->cache_dir  = './cache/';

    $req_location = isset($_GET['area']) ? $_GET['area'] : "Tokyo";
    $locations=array(
            "Sapporo-shi"      =>    "札幌",
            "Morioka-shi"      =>    "盛岡",
            "Tokyo"            =>    "東京",
            "Osaka"            =>    "大阪",
            "Toyama-shi"       =>    "富山",
            "Kanazawa"         =>    "金沢",
            "Naha-shi"         =>    "那覇"
                    );
    $weathers=array( "Rain"=>"雨", "Mist"=>"小雨", "Clouds"=>"曇り", "Clear"=>"晴れ" );
    $json = json_decode(file_get_contents('http://api.openweathermap.org/data/2.5/weather?q=' . $req_location . ',jp'));
    if ($json===NULL) return;
        
    $image_path = "http://openweathermap.org/img/w/{$json->weather[0]->icon}.png";
    $location_name = $locations[$json->name];
    $weather = $weathers[$json->weather[0]->main];
    $temp = round($json->main->temp -273.15, 1);

    $smarty->assign('location', $req_location);
    $smarty->assign('locations', $locations);
    $smarty->assign('image_path', $image_path);
    $smarty->assign('location_name', $location_name);
    $smarty->assign('weather', $weather);
    $smarty->assign('temp', $temp);
    $smarty->display('weather.tpl');

?>