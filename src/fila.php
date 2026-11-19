<?php
    // declaração das variáveis
    $comeco;
    $fim;
    $qtde;
    $TAM_VET = 5;
    $vet = [$TAM_VET];
    $num;

    function esta_cheia(){
        if ($qtde = $TAM_VET){
            return true;
        }else return false;
    };

    function esta_vazia(){
        if ($qtde = 0){
            return true;
        } else return false;
    };

    function cadastrar($num){
        if (esta_cheia()){
            echo "A fila esta cheia";
        } else {
            $fim <= $fim +1;
            if ($fim > $TAM_VET){
                $fim = 1;
            }
            $vet[$fim] = $num;
            $qtde = $qtde+1;
        }
    };

    function retirar(){
        if (esta_vazia()){
         echo "A fila esta vazia";   
        } else {
            $comeco = $comeco + 1;
            if ($comeco>$TAM_VET){
                $comeco = 1;
            };
            $qtde = $qtde - 1;
        }
    }

    function mostrar_proximo(){
        if (esta_vazia()){
            echo "A fila esta vazia";
        } else {
            return $vet[$comeco];
        }
    }

    function mostrar_fila(){
        echo "\n ================Dados da Fila=================\n";
        if ($qtde>0){
            if ($comeco <= $fim){
                for ($i=$comeco; $i<=$fim; $i++){
                    echo $vet[$i], " ";
                };
            } else{
                for ($i=$comeco; $i<=$TAM_VET; $i++){
                    echo $vet[$i], " ";
                };
            }; 
        };
        echo "\n===================================================\n";
    }

    // inicio

    echo "===============Fila================";
    retirar();
    cadastrar(50);

?>