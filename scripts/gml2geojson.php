<?php

$geojsonPath = dirname(__DIR__) . '/geojson';
if (!file_exists($geojsonPath)) {
    mkdir($geojsonPath, 0777, true);
}

foreach (glob(dirname(__DIR__) . '/gml/*.gml') AS $gmlFile) {
    $info = pathinfo($gmlFile);
    exec("ogr2ogr -t_srs EPSG:4326 -s_srs EPSG:3826 -f \"GeoJSON\" {$geojsonPath}/{$info['filename']}.json {$gmlFile}");
}