<?php

$baseUrl = 'https://referensi.data.kemdikbud.go.id/';
$urlsProvinsi = [
    ['value' => 'https://referensi.data.kemdikbud.go.id/index41.php?kode=010000&level=1', 'label' => 'Prov. D.K.I. Jakarta'],
    ['value' => 'https://referensi.data.kemdikbud.go.id/index41.php?kode=020000&level=1', 'label' => 'Prov. Jawa Barat'],
    ['value' => 'https://referensi.data.kemdikbud.go.id/index41.php?kode=030000&level=1', 'label' => 'Prov. Jawa Tengah'],
    ['value' => 'https://referensi.data.kemdikbud.go.id/index41.php?kode=040000&level=1', 'label' => 'Prov. D.I. Yogyakarta'],
    ['value' => 'https://referensi.data.kemdikbud.go.id/index41.php?kode=050000&level=1', 'label' => 'Prov. Jawa Timur'],
    ['value' => 'https://referensi.data.kemdikbud.go.id/index41.php?kode=060000&level=1', 'label' => 'Prov. Aceh'],
    ['value' => 'https://referensi.data.kemdikbud.go.id/index41.php?kode=070000&level=1', 'label' => 'Prov. Sumatera Utara'],
    ['value' => 'https://referensi.data.kemdikbud.go.id/index41.php?kode=080000&level=1', 'label' => 'Prov. Sumatera Barat'],
    ['value' => 'https://referensi.data.kemdikbud.go.id/index41.php?kode=090000&level=1', 'label' => 'Prov. Riau'],
    ['value' => 'https://referensi.data.kemdikbud.go.id/index41.php?kode=100000&level=1', 'label' => 'Prov. Jambi'],
    ['value' => 'https://referensi.data.kemdikbud.go.id/index41.php?kode=110000&level=1', 'label' => 'Prov. Sumatera Selatan'],
    ['value' => 'https://referensi.data.kemdikbud.go.id/index41.php?kode=120000&level=1', 'label' => 'Prov. Lampung'],
    ['value' => 'https://referensi.data.kemdikbud.go.id/index41.php?kode=130000&level=1', 'label' => 'Prov. Kalimantan Barat'],
    ['value' => 'https://referensi.data.kemdikbud.go.id/index41.php?kode=140000&level=1', 'label' => 'Prov. Kalimantan Tengah'],
    ['value' => 'https://referensi.data.kemdikbud.go.id/index41.php?kode=150000&level=1', 'label' => 'Prov. Kalimantan Selatan'],
    ['value' => 'https://referensi.data.kemdikbud.go.id/index41.php?kode=160000&level=1', 'label' => 'Prov. Kalimantan Timur'],
    ['value' => 'https://referensi.data.kemdikbud.go.id/index41.php?kode=170000&level=1', 'label' => 'Prov. Sulawesi Utara'],
    ['value' => 'https://referensi.data.kemdikbud.go.id/index41.php?kode=180000&level=1', 'label' => 'Prov. Sulawesi Tengah'],
    ['value' => 'https://referensi.data.kemdikbud.go.id/index41.php?kode=190000&level=1', 'label' => 'Prov. Sulawesi Selatan'],
    ['value' => 'https://referensi.data.kemdikbud.go.id/index41.php?kode=200000&level=1', 'label' => 'Prov. Sulawesi Tenggara'],
    ['value' => 'https://referensi.data.kemdikbud.go.id/index41.php?kode=210000&level=1', 'label' => 'Prov. Maluku'],
    ['value' => 'https://referensi.data.kemdikbud.go.id/index41.php?kode=220000&level=1', 'label' => 'Prov. Bali'],
    ['value' => 'https://referensi.data.kemdikbud.go.id/index41.php?kode=230000&level=1', 'label' => 'Prov. Nusa Tenggara Barat'],
    ['value' => 'https://referensi.data.kemdikbud.go.id/index41.php?kode=240000&level=1', 'label' => 'Prov. Nusa Tenggara Timur'],
    ['value' => 'https://referensi.data.kemdikbud.go.id/index41.php?kode=250000&level=1', 'label' => 'Prov. Papua'],
    ['value' => 'https://referensi.data.kemdikbud.go.id/index41.php?kode=260000&level=1', 'label' => 'Prov. Bengkulu'],
    ['value' => 'https://referensi.data.kemdikbud.go.id/index41.php?kode=270000&level=1', 'label' => 'Prov. Maluku Utara'],
    ['value' => 'https://referensi.data.kemdikbud.go.id/index41.php?kode=280000&level=1', 'label' => 'Prov. Banten'],
    ['value' => 'https://referensi.data.kemdikbud.go.id/index41.php?kode=290000&level=1', 'label' => 'Prov. Kepulauan Bangka Belitung'],
    ['value' => 'https://referensi.data.kemdikbud.go.id/index41.php?kode=300000&level=1', 'label' => 'Prov. Gorontalo'],
    ['value' => 'https://referensi.data.kemdikbud.go.id/index41.php?kode=310000&level=1', 'label' => 'Prov. Kepulauan Riau'],
    ['value' => 'https://referensi.data.kemdikbud.go.id/index41.php?kode=320000&level=1', 'label' => 'Prov. Papua Barat'],
    ['value' => 'https://referensi.data.kemdikbud.go.id/index41.php?kode=330000&level=1', 'label' => 'Prov. Sulawesi Barat'],
    ['value' => 'https://referensi.data.kemdikbud.go.id/index41.php?kode=340000&level=1', 'label' => 'Prov. Kalimantan Utara'],
    ['value' => 'https://referensi.data.kemdikbud.go.id/index41.php?kode=350000&level=1', 'label' => 'Luar Negeri']
];

$res = [];
$i = 0;
$k = 0;
$j = 0;

echo lvlSatu($urlsProvinsi, $res, $i, $j, $k);die;

$res = lvlDua($res, $k, $j);
exportToCsv($res,'name');die;

foreach($arrLvlDua as $item){
    $url = 'level_dua.html';
    $html = file_get_contents($url);
    $html = getTableHtml($html);
    $dom = new \DOMDocument();
    $dom->loadHTML($html);
    $urls = getChildData($dom, $baseUrl);die;
}

function lvlSatu($urls, $res, $i, $j, $k){
    if($i < count($urls)){
//	if($i < 1){
//	$i = 1;
        $html = getHtml($urls[$i]['value']);
        $html = getTableHtml($html);
        $dom = new \DOMDocument();
        $dom->loadHTML($html);
        $urlsKota = getChildData($dom, 'https://referensi.data.kemdikbud.go.id/');
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
        $urlsKecamatan = getChildData($dom, 'https://referensi.data.kemdikbud.go.id/');
        $urlsKecamatanFinal = [];
        foreach($urlsKecamatan as $item){
            $arrLvlTiga = [
                ["label" => "SLB---".$item['label'], "value" => $item['value'].'&id=29'],
                ["label" => "TKLB---".$item['label'], "value" => $item['value'].'&id=42'],
                ["label" => "SDLB---".$item['label'], "value" => $item['value'].'&id=7'],
                ["label" => "SMPLB---".$item['label'], "value" => $item['value'].'&id=8'],
                ["label" => "SMLB---".$item['label'], "value" => $item['value'].'&id=14']
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
        $html = getHtml($urls[$k]['value']);
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
    $needle = '<table id="box-table-a"';
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
    $needle = '<table cellpadding="0" cellspacing="0" border="0" class="display" id="example"';
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
        if($row[0] == 'No.' && $header){
            $row[6] = "Bentuk Pendidikan";
            $row[7] = "Kecamatan";
            $row[8] = 'Kabupaten/Kota';
            $row[9] = 'Provinsi';
        }
        if($row[0] == 'No.' && !$header){
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
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
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

function getChildData($dom, $baseUrl)
{
    $isValid = false;
    $hrefs = $dom->getElementsByTagName('a');
    $index = 0;
    foreach ($hrefs as $href) {
        foreach ($href->attributes as $attr) {
            $name = $attr->nodeName;
            $value = $attr->nodeValue;
            $needle = 'level=';
            
            if($name == 'href' && strpos($value, $needle) !== false){
                $xpath = new DOMXPath($dom);
                $node = $xpath->query('//a/text()')->item($index);
                $label = $node->textContent;
                $value = str_replace('o0o', '&', $value);
                //  = $value;
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
   file_put_contents('kemdikbud-2.log', $txt, FILE_APPEND);
}
