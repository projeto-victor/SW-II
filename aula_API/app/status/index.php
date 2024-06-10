<?php
    //AQUI VAI SER NOSSA APLICAÇÃO
    require_once __DIR__ . '../../../api/config.php';
    require_once __DIR__ . '../../../api/response.php';

    if(API_IS_ACTIVE){
        echo RESPONSE ::resposta(200, 'success',[
            'version' => API_VERSION, 
            'status' => 'ATIVA'
        ]);
    } else{
        echo RESPONSE ::resposta(200, 'success',[
            'version' => API_VERSION, 
            'status' => 'MANUTENÇÃO'
        ]);
    }

 ?>