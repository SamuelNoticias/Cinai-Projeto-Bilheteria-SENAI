<?php
    $linha;
    $coluna;
    $GLOBALS['plateia'] = [
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
    $GLOBALS['categoriaIngressos'] = [
                ['VIP'          => 0,0,0,0,0],
                ['Meia-Entrada' => 0,0,0,0,0],
            ];

    /** 
     * ocuparAssentos() =
     *  Permitir a escolha de assentos e retornar os assentos ocupados
    */
    function ocuparAssentos(){ // int $linha, int $coluna
        echo "Escolha seu assento: \n";        
        global $linha;
        global $coluna;

        $linha = (int) fgets(STDIN);
        $coluna =(int) fgets(STDIN);        
        
        $GLOBALS['plateia'][$linha][$coluna] = 1;

       return  $GLOBALS['plateia'][$linha][$coluna];
    }

    /**
     * desocuparAssentos() =
     *  Permitir a exclusão de assentos e retornar os assentos excluídos
     */
    function desocuparAssentos(){
        echo "Exclua um assento: \n";        
        global $linha;
        global $coluna;

        $linha = (int) fgets(STDIN);
        $coluna =(int) fgets(STDIN);        
        
        $GLOBALS['plateia'][$linha][$coluna] = 0;

       return  $GLOBALS['plateia'][$linha][$coluna];
    };

    /**
     * desistencia() =
     *  Colocar as pessoas da fila de reserva no lugar dos desistentes
     * FILA (FIFO)
     */
    function desistencia(){};

    /** 
     * mostrarAssentos() = 
     * html ???
     * mostrar os assentos de forma que seja interativo???
     * mostrar assentos atualizados e etc
    */
    function mostrarAssentos(){
        global $coluna;
        global $linha;        
        echo "   0  1  2  3  4\n";
        echo "0 [", $GLOBALS['plateia'][0][0], "][", $GLOBALS['plateia'][0][1], "][", $GLOBALS['plateia'][0][2], "][", $GLOBALS['plateia'][0][3], "][", $GLOBALS['plateia'][0][4], "]\n";
        echo "1 [", $GLOBALS['plateia'][1][0], "][", $GLOBALS['plateia'][1][1], "][", $GLOBALS['plateia'][1][2], "][", $GLOBALS['plateia'][1][3], "][", $GLOBALS['plateia'][1][4], "]\n";
        echo "2 [", $GLOBALS['plateia'][2][0], "][", $GLOBALS['plateia'][2][1], "][", $GLOBALS['plateia'][2][2], "][", $GLOBALS['plateia'][2][3], "][", $GLOBALS['plateia'][2][4], "]\n";
    };

    /**
     * CLassifica os assentos em VIP, Meia-entrada e Inteira
     * Assentos da plateia são Inteira por padrão, criaremos linhas novas para especificar meia-entrada e VIP
     */
    function categoriaIngressos(){};

?>