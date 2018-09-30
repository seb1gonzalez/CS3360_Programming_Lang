<?php
/**
 * Created by PhpStorm.
 * User: sebas
 * Date: 9/30/2018
 * Time: 1:26 PM
 */
$data = '{"response":true,
 "ack_move":{"slot":2,"isWin":false,"isDraw":false,"row":[]},
 "move":{"slot":4,"isWin":false,"isDraw":false,"row":[]}}
';
header('Content-Type: application/json');
echo json_encode($data);