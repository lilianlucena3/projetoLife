<?php

$where = '';

if(!empty($_REQUEST['placa'])) {
    $where = "WHERE r.placa LIKE '%{$_REQUEST['placa']}%'";
}

if(!empty($_REQUEST['funcionario'])) {
    $where = "WHERE r.funcionario LIKE '%{$_REQUEST['funcionario']}%'";
}

if(!empty($_REQUEST['data'])) {
    $where = "WHERE r.data LIKE '%{$_REQUEST['data']}%'";
}

$db = new Database();

if($db->connect()) {

    $dados = $db->sqlQueryArray(
        "SELECT
            r.placa,
            r.funcionario,
            r.data,
            r.vel_maxima,
            r.vel_reg,
            r.dif_vel,
            r.latitude,
            r.longitude
        FROM rastreamento r
        INNER JOIN funcionario r ON r.id = f.id
        {$where}"
    );

    echo json_encode(array(
        'status' => 'success',
        'data' => $dados
    ));

} else {
    echo json_encode(array(
        'status' => 'failure',
        'message' => 'Erro ao conectar ao banco'
    ));
}