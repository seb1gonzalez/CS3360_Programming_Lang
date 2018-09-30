<?php
/**
 * Created by PhpStorm.
 * User: sebas
 * Date: 9/30/2018
 * Time: 1:26 PM
 */


$data = '  {"response":true,"pid":"57cdc4815e1e5"}';
header('Content-Type: application/json');
echo json_encode($data);