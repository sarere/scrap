<?php
$fileName = $argv[1];
$dev = false;
$baseUrl = $dev ? 'https://referensi.data.kemdikbud.go.id/tabs.php?npsn=10258036' : 'https://referensi.data.kemdikbud.go.id/tabs.php?npsn=';

if(!$dev){
    $handle = fopen("raw-npsn.txt", "r");
    $finalRes = [];
    $header = true;
    if ($handle) {
        while (($line = fgets($handle)) !== false) {
            $line = str_replace("\n", "", $line);
            $line = str_replace("\r", "", $line);
            $res = [];
            $url = $baseUrl . $line;
            $html = getHtml($url);
            $html = getTableHtmlData($html);
            $dom = new \DOMDocument();
            $dom->loadHTML($html);
            $res = printTable($res, $dom, $line);
            $finalRes [] = exportToCsv($res, $line, $header);
            $header = false;
        }
        exportToFile($finalRes, $fileName);

        fclose($handle);
    } else {
        // error opening the file.
    } 
} else {
    $res = [];
    $html = getHtml($baseUrl);
    $html = getTableHtmlData($html);
    $dom = new \DOMDocument();
    $dom->loadHTML($html);
    $res = printTable($res, $dom, 'tes');
    $res = exportToCsv($res, 'tes');
    exportToFile($res);
    // $res;
    // <div id="tabs-6">
}

function exportToFile($res, $fileName) {
    $csvFileName = 'Kontak - ' . $fileName;
    $fp = fopen($csvFileName, 'w');
    foreach($res as $row){
        foreach($row as $item)
            fputcsv($fp, $item);
    }
    
    fclose($fp);
}

function exportToCsv($res,$npsn, $header){
    // $csvFileName = 'kontak.csv';
    // $fp = fopen($csvFileName, 'w');
    $finalRes = [];
    $arrHeader = ['Fax ','Email ','Website '];
    $headerRow = ['NPSN'];
    $valueRow = [$npsn];
    foreach($res as $row){
        // echo $row[1] . PHP_EOL;
        if(in_array($row[1],$arrHeader) && $header){
            $headerRow [] = $row[1];
            $valueRow [] = $row[3];
        } else if(in_array($row[1],$arrHeader)){
            $valueRow [] = $row[3];
        }
    }

    if($header){
        $finalRes [] = $headerRow;
        $finalRes [] = $valueRow;
    } else {
        $finalRes [] = $valueRow;
    }
    
    return $finalRes;
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

function getTableHtmlData($html)
{
    $needle = '<div id="tabs-6">';
    $start = strpos($html, $needle) + strlen($needle) + 4;
    $html = substr($html, $start, strlen($html));
    $needle = '</table>';
    $end = strpos($html, $needle) + strlen($needle);
    $html = substr($html, 0, $end);
    $html = str_replace('&nbsp;',' ',$html);
    $html = str_replace('&','o0o',$html);

    return $html;
}

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

function writeLog($txt){
    file_put_contents('kontak.log', $txt, FILE_APPEND);
}