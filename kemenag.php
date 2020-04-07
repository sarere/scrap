<?php

$baseUrl = 'https://referensi.data.kemdikbud.go.id/';
$urlsProvinsi = [
    ['value' => 'http://emispendis.kemenag.go.id/dashboard/?content=data-statistik&action=prov&prov=11', 'label' => 'Aceh'],
    ['value' => 'http://emispendis.kemenag.go.id/dashboard/?content=data-statistik&action=prov&prov=51', 'label' => 'Bali'],
    ['value' => 'http://emispendis.kemenag.go.id/dashboard/?content=data-statistik&action=prov&prov=19', 'label' => 'Bangka Belitung'],
    ['value' => 'http://emispendis.kemenag.go.id/dashboard/?content=data-statistik&action=prov&prov=36', 'label' => 'Banten'],
    ['value' => 'http://emispendis.kemenag.go.id/dashboard/?content=data-statistik&action=prov&prov=17', 'label' => 'Bengkulu'],
    ['value' => 'http://emispendis.kemenag.go.id/dashboard/?content=data-statistik&action=prov&prov=34', 'label' => 'Di Yogyakarta'],
    ['value' => 'http://emispendis.kemenag.go.id/dashboard/?content=data-statistik&action=prov&prov=31', 'label' => 'Dki Jakarta'],
    ['value' => 'http://emispendis.kemenag.go.id/dashboard/?content=data-statistik&action=prov&prov=75', 'label' => 'Gorontalo'],
    ['value' => 'http://emispendis.kemenag.go.id/dashboard/?content=data-statistik&action=prov&prov=15', 'label' => 'Jambi'],
    ['value' => 'http://emispendis.kemenag.go.id/dashboard/?content=data-statistik&action=prov&prov=32', 'label' => 'Jawa Barat'],
    ['value' => 'http://emispendis.kemenag.go.id/dashboard/?content=data-statistik&action=prov&prov=33', 'label' => 'Jawa Tengah'],
    ['value' => 'http://emispendis.kemenag.go.id/dashboard/?content=data-statistik&action=prov&prov=35', 'label' => 'Jawa Timur'],
    ['value' => 'http://emispendis.kemenag.go.id/dashboard/?content=data-statistik&action=prov&prov=61', 'label' => 'Kalimantan Barat'],
    ['value' => 'http://emispendis.kemenag.go.id/dashboard/?content=data-statistik&action=prov&prov=63', 'label' => 'Kalimantan Selatan'],
    ['value' => 'http://emispendis.kemenag.go.id/dashboard/?content=data-statistik&action=prov&prov=62', 'label' => 'Kalimantan Tengah'],
    ['value' => 'http://emispendis.kemenag.go.id/dashboard/?content=data-statistik&action=prov&prov=64', 'label' => 'Kalimantan Timur'],
    ['value' => 'http://emispendis.kemenag.go.id/dashboard/?content=data-statistik&action=prov&prov=65', 'label' => 'Kalimantan Utara'],
    ['value' => 'http://emispendis.kemenag.go.id/dashboard/?content=data-statistik&action=prov&prov=21', 'label' => 'Kepulauan Riau'],
    ['value' => 'http://emispendis.kemenag.go.id/dashboard/?content=data-statistik&action=prov&prov=18', 'label' => 'Lampung'],
    ['value' => 'http://emispendis.kemenag.go.id/dashboard/?content=data-statistik&action=prov&prov=81', 'label' => 'Maluku'],
    ['value' => 'http://emispendis.kemenag.go.id/dashboard/?content=data-statistik&action=prov&prov=82', 'label' => 'Maluku Utara'],
    ['value' => 'http://emispendis.kemenag.go.id/dashboard/?content=data-statistik&action=prov&prov=52', 'label' => 'Nusa Tenggara Barat'],
    ['value' => 'http://emispendis.kemenag.go.id/dashboard/?content=data-statistik&action=prov&prov=53', 'label' => 'Nusa Tenggara Timur'],
    ['value' => 'http://emispendis.kemenag.go.id/dashboard/?content=data-statistik&action=prov&prov=91', 'label' => 'Papua'],
    ['value' => 'http://emispendis.kemenag.go.id/dashboard/?content=data-statistik&action=prov&prov=92', 'label' => 'Papua Barat'],
    ['value' => 'http://emispendis.kemenag.go.id/dashboard/?content=data-statistik&action=prov&prov=14', 'label' => 'Riau'],
    ['value' => 'http://emispendis.kemenag.go.id/dashboard/?content=data-statistik&action=prov&prov=76', 'label' => 'Sulawesi Barat'],
    ['value' => 'http://emispendis.kemenag.go.id/dashboard/?content=data-statistik&action=prov&prov=73', 'label' => 'Sulawesi Selatan'],
    ['value' => 'http://emispendis.kemenag.go.id/dashboard/?content=data-statistik&action=prov&prov=72', 'label' => 'Sulawesi Tengah'],
    ['value' => 'http://emispendis.kemenag.go.id/dashboard/?content=data-statistik&action=prov&prov=74', 'label' => 'Sulawesi Tenggara'],
    ['value' => 'http://emispendis.kemenag.go.id/dashboard/?content=data-statistik&action=prov&prov=71', 'label' => 'Sulawesi Utara'],
    ['value' => 'http://emispendis.kemenag.go.id/dashboard/?content=data-statistik&action=prov&prov=13', 'label' => 'Sumatera Barat'],
    ['value' => 'http://emispendis.kemenag.go.id/dashboard/?content=data-statistik&action=prov&prov=16', 'label' => 'Sumatera Selatan'],
    ['value' => 'http://emispendis.kemenag.go.id/dashboard/?content=data-statistik&action=prov&prov=12', 'label' => 'Sumatera Utara']
];

$res = [];
$i = 0;
$k = 0;
$j = 0;

echo lvlSatu($urlsProvinsi, $res, $i, $j, $k);die;

function lvlSatu($urls, $res, $i, $j, $k){
    if($i < count($urls)){
	// if($i < 1){
//	$i = 1;
        $html = getHtml($urls[$i]['value']);
        $html = getTableHtml($html);
        $dom = new \DOMDocument();
        $dom->loadHTML($html);
        $urlsKota = getChildData($dom, 'http://emispendis.kemenag.go.id/dashboard/');
        $res = lvlDua($urlsKota, $res, $j, $k, $urls[$i]['label']);
        exportToCsv($res,$urls[$i]['label']);
        $i++;
        $res = [];
        $k = 0;
        $j = 0;
        return lvlSatu($urls, $res, $i, $j, $k);
    } else {
	    writeLog("done");    
	    return "done";
    }
}


function lvlDua($urls, $res, $j, $k, $label){
    if($j < count($urls)){
    // if($j < 1){
        $html = getHtml($urls[$j]['value']);
        $html = getTableHtml($html);
        $dom = new \DOMDocument();
        $dom->loadHTML($html);
        $urlsKecamatan = getChildData($dom, 'http://emispendis.kemenag.go.id/dashboard/');
        $urlsKecamatanFinal = [];
        foreach($urlsKecamatan as $item){
            $arrLvlTiga = [
                ["label" => "2018/2019 Genap---".$item['label'], "value" => $item['value'], "data" => 20182],
                ["label" => "2018/2019 Ganjil---".$item['label'], "value" => $item['value'], "data" => 20181],
                ["label" => "2017/2018 Ganjil---".$item['label'], "value" => $item['value'], "data" => 20171],
            ];

            $urlsKecamatanFinal = array_merge($urlsKecamatanFinal,$arrLvlTiga);
        }
        
        $res = lvlTiga($urlsKecamatanFinal, $res, $k, $urls[$j]['label'] . '---' . $label);
        $j++;
        return lvlDua($urls, $res, $j, $k, $label);
    } else {
        return $res;
    }
    
    
}

function lvlTiga($urls, $res, $k, $label){
    if($k < count($urls)){
    // if($k < 1){
        $html = getHtmlPost($urls[$k]['value'], $urls[$k]['data']);
        $html = getTableHtmlData($html);
      //  if(!$html){
      //      $k++;
      //      return lvlTiga($urls, $res, $k, $label);
      //  }
        $dom = new \DOMDocument();
        $dom->loadHTML($html);
        $res = printTable($res, $dom, $urls[$k]['label'] .  '---' . $label);
        $k++;
        return lvlTiga($urls, $res, $k, $label);
    } else {
        return $res;
    }
}

function getTableHtml($html)
{
    $needle = '<table width="99%" align="left"';
    $start = strpos($html, $needle);
    $html = substr($html, $start, strlen($html));
    $needle = '</table>';
    $end = strpos($html, $needle) + strlen($needle);
    $html = substr($html, 0, $end);
    $html = str_replace('&nbsp;',' ',$html);
    $html = str_replace('&','o0o',$html);

    return $html;
}

function getTableHtmlData($html)
{
    $needle = '<table';
    $start = strpos($html, $needle);
    $html = substr($html, $start, strlen($html));
    $needle = '</table>';
    $end = strpos($html, $needle) + strlen($needle);
    $html = substr($html, 0, $end);
    $html = str_replace('&nbsp;',' ',$html);
    $html = str_replace('&','o0o',$html);

    return $html;
}

function printTable($res, $dom, $label)
{
    $rows = $dom->getElementsByTagName('tr');
    $index = 0;
    foreach ($rows as $row) {
        $th = $row -> getElementsByTagName('th');
        $td = $row -> getElementsByTagName('td');
        $data = [];
        foreach ($th as $cell) {
            $data [] = $cell->nodeValue; // print cells' content as 124578
        }
        foreach ($td as $cell) {
            $data [] = $cell->nodeValue.' '; // print cells' content as 124578
        }
        // echo json_encode(explode('---',$label));die;
        $ket = explode('---',$label);
        // $data [] = 
        $res [] = array_merge($data, $ket);;
        $index++;
    }
    return $res;
}

function exportToCsv($res,$name){
    $csvFileName = $name.'.csv';
    $fp = fopen($csvFileName, 'w');
    $header = true;
    foreach($res as $row){
        if($row[0] == '#' && $header){
            $row[11] = "Semester";
            $row[12] = "Kecamatan";
            $row[13] = 'Kabupaten/Kota';
            $row[14] = 'Provinsi';
        }
        if($row[0] == 'Total  '){
            continue;   
        }
        fputcsv($fp, $row);
        $header = false;
    }
    
    fclose($fp);
};

function getHtml($url)
{
    sleep(0.5);
    $txt = $url . PHP_EOL;
    //$error = false;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $html = curl_exec($ch);
    if (curl_error($ch)) {
        $txt .=  'Error: ' . curl_error($ch).PHP_EOL;
        $error = true;
    }
    curl_close($ch);

    writeLog($txt);

    //if($error){
      //  return false;
    //}

    return $html;
}

function getHtmlPost($url,$data)
{
    sleep(0.5);
    $txt = $url . PHP_EOL;
    $curl = curl_init();

    curl_setopt_array($curl, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => array('smt' => $data),
    ));

    $response = curl_exec($curl);
    if (curl_error($curl)) {
        $txt .=  'Error: ' . curl_error($ch).PHP_EOL;
        $error = true;
    }

    curl_close($curl);
    
    writeLog($txt);
    return $response;
}

function getChildData($dom, $baseUrl)
{
    $isValid = false;
    $hrefs = $dom->getElementsByTagName('a');
    $index = 0;
    $isTrue = true;
    foreach ($hrefs as $key => $href) {
        
        foreach ($href->attributes as $attr) {
            $name = $attr->nodeName;
            $value = $attr->nodeValue;
            $needle = '?content=data-statistiko0oaction=';
            
            if($name == 'href' && strpos($value, $needle) !== false){
                $xpath = new DOMXPath($dom);
                $node = $xpath->query('//a/text()')->item($key);
                $label = $node->textContent;
                $value = str_replace('o0o', '&', $value);
                $value = $baseUrl . $value;
                $res [] = [
                    'label' => $label,
                    'value' => $value
                ];
            } else {
                continue;
            }
        }
        $index++;
    }
    return $res;
}

function writeLog($txt){
   file_put_contents('kemenag.log', $txt, FILE_APPEND);
}
