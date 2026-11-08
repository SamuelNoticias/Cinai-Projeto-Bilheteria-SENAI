<?php
    $plateia = [
                [0,0,0,0,0], //linha [0]
                [0,0,0,0,0], //linha [1]
                [0,0,0,0,0], //linha [2]

            ];
    /**
     * Definir Linhas da plateia para receber a categoria de Ingressos
     * Como que eu categorizo os lugares dos assentos?, 
     * 
     * Arrays associativas ???
     */
    $categoriaIngressos = [
                ["Inteira"      ],
                ["Meia-Entrada" ],
                ["VIP"          ],
            ];

    /** 
     * ocuparAssentos() =
     *  Permitir a escolha de assentos e retornar os assentos ocupados
    */
    function ocuparAssentos(){
        echo "Escolha seu assento: \n";

       return $plateia[fgets(STDIN)][fgets(STDIN)] = +1;
    }

    /**
     * desocuparAssentos() =
     *  Permitir a exclusão de assentos e retornar os assentos excluídos
     */
    function desocuparAssentos(){};

    /**
     * desistencia() =
     *  Colocar as pessoas da fila de reserva no lugar dos desistentes
     * PILHA (LIFO)
     */
    function desistencia(){};

    /** 
     * mostrarAssentos() = 
     * html ???
     * mostrar os assentos de forma que seja interativo???
     * mostrar assentos atualizados e etc
    */
    function mostrarAssentos(){ // Por algum motivo os valores la em cima não estão vindo para a função ca em baixo >:[
        echo "   1  2  3  4  5\n";
        echo "1 [",$plateia[0][0],"][ ][ ][ ][ ]\n";
        echo "2 [ ][ ][ ][ ][ ]\n";
        echo "3 [ ][ ][ ][ ][ ]\n";
    };

    /**
     * CLassifica os assentos em VIP, Meia-entrada e Inteira
     */
    function categoriaIngressos(){};

    ocuparAssentos();
    
    mostrarAssentos();
?>