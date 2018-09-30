<?php
/**
 * Created by PhpStorm.
 * User: sebas
 * Date: 9/30/2018
 * Time: 1:26 PM
 */
$data = '{"width":7,
          "height":6,
          "strategies":["Smart","Random"]}';


header('Content-Type: application/json');
echo json_encode($data);
?>
