<?php
    if (sizeof($_REQUEST["values"]) != 2)
    {
        echo json_encode(Array('Result' => 'Invalid number of values', 'Status' => 'error'));
    }
    else
    {
        $x = $_REQUEST["values"][0];
        $y = $_REQUEST["values"][1];
        $op = $_REQUEST['operation'];
        if ($op == 'sum')
            echo json_encode(Array('Result' => $x + $y, 'Status' => 'OK'));
        elseif ($op == 'subtraction')
            echo json_encode(Array('Result' => $x - $y, 'Status' => 'OK'));
        elseif ($op == 'division' && $y == 0)
            echo json_encode(Array('Result' => 'Divison by 0', 'Status' => 'error'));
        elseif ($op == 'division')
            echo json_encode(Array('Result' => $x / $y, 'Status' => 'OK'));
        elseif ($op == 'multiplication')
            echo json_encode(Array('Result' => $x * $y, 'Status' => 'OK'));
        else
            echo json_encode(Array('Result' => 'Unknown operation', 'Status' => 'error'));
    }
?>