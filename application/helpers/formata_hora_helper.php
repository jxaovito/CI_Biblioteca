<?php

        /*
        *   Formata a data e hora do upload das fotos
        */

    function formata_hora($dados){

        $datas_atualizadas = [];

        foreach ($dados['lista_emprestimos'] as $key => $emprestimos){
            // Divide a data e a hora em dois arrays usando como referencia o espaço
            $data_emp = explode(' ', $emprestimos['data_emprestimo']);
            $data_dev = explode(' ', $emprestimos['data_devolucao']);

            // Divide a data em um array com 3 valores, usando como referencia o hifen
            $data_1 = explode('-', $data_emp[0]);
            $data_2 = explode('-', $data_dev[0]);

            // Retira os segundos
            // $hora_formatada = substr($data_hora[1], 0, -3);
            // Junta os 3 valores do array da data separados por uma barra
            $data_formatada_1 = ''.$data_1[2].'/'.$data_1[1].'/'.$data_1[0];
            $data_formatada_2 = ''.$data_2[2].'/'.$data_2[1].'/'.$data_2[0];


            // $data_hora_formatada = $data_formatada . ' ' . $hora_formatada;

            $datas_atualizadas_1[$key] = $data_formatada_1;   
            $datas_atualizadas_2[$key] = $data_formatada_2;   
    }

        // Registros das emprestimos recebem data formatada
    foreach ($datas_atualizadas_1 as $key => $data_atualizada_1) {
        $dados['lista_emprestimos'][$key]['data_emprestimo'] = $data_atualizada_1;
    }

    foreach ($datas_atualizadas_2 as $key => $data_atualizada_2) {
        $dados['lista_emprestimos'][$key]['data_devolucao'] = $data_atualizada_2;
    }


    return $dados;
    }

?>