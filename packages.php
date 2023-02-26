<?php
$keys = isset($_GET['key']) ? array_map('trim', explode(',', strtolower($_GET['key']))) : array();
$packages = array();

if (count(array_intersect(array('mangolandmiksita'), $keys)) > 0)
$packages[] = array(
    'name' => 'MangoLand2',
    'version' => '2.0.0',
    'priority' => 0,
    'location' => 'mangoland2.json',
);

$out = array('minimumVersion' => 1, 'packages' => $packages);
header('Content-Type: text/plain; charset=utf-8');
echo json_encode($out);
