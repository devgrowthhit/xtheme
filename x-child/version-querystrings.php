<?php

function loadQueryStringsFile($urlHost) {
  $url = $urlHost."/wp/assets/file-hashes.json";

  $curl = curl_init($url);
  curl_setopt($curl, CURLOPT_HTTPGET, true);
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36");
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

  $resp = curl_exec($curl);
  $curl_errno = curl_errno($curl);
  $curl_error = curl_error($curl);
  curl_close($curl);

  if ($curl_errno > 0) {
    throw "cURL Error ($curl_errno): $curl_error\n";
  }
  //  else {
  //  echo "Data received: $resp\n";
  //}

  return $resp;
}

function getQueryStrings($urlHost){
  try {
    $key = $urlHost.'querystrings';
    $queryMapping = wp_cache_get($key);
    if ($queryMapping){
      // echo "querystrings already loaded";
    }
    else {
      // cache miss - fetch data
      $queryMapping = loadQueryStringsFile($urlHost);
    
      // store the data for future requests
      wp_cache_set($key, $queryMapping);
    }
    if ($queryMapping){
      $queryMapping = json_decode($queryMapping, true, 2, JSON_THROW_ON_ERROR);
      return $queryMapping;
    }
    else {
      return (object)[];
    }
  }
  catch(Exception $err){
    return (object)[];
  }
}

function getStaticSiteUrl($urlHost, $urlPath){
  $queryMapping = getQueryStrings($urlHost);
  if (array_key_exists($urlPath, $queryMapping)){
    $hash = $queryMapping[$urlPath];
    return $urlHost.$urlPath."?v=".$hash;
  }
  else {
    $today = date("Y-m-d H:i:s");
    return $urlHost.$urlPath."?v=".date("Ymd_His");
  }
}

?>