<?php
    function formata_cpf($dados){

        $cpf_formatado = [];

        foreach ($dados['lista_pessoas'] as $key => $pessoas){
            $cpf_1 = str_split($pessoas['cpf'], 3);
            $cpf_string = ''.$cpf_1[0].'.'.$cpf_1[1].'.'.$cpf_1[2].'-'.$cpf_1[3];

            $cpf_formatado[$key] = $cpf_string;   
    }

        // Registros das pessoas recebem data formatada
    foreach ($cpf_formatado as $key => $cpf_formatado_1) {
        $dados['lista_pessoas'][$key]['cpf'] = $cpf_formatado_1;
    }

    return $dados;
    }

?>