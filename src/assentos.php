<?php
    $linha;
    $coluna;
    $GLOBALS['plateia'] = [
        "Inteira" => [
                [0,0,0,0,0], //linha [0]
                [0,0,0,0,0], //linha [1]
                [0,0,0,0,0], //linha [2]
        ],
        "VIP" => [
                [0,0,0,0,0],
                [0,0,0,0,0],  
        ],
        "Meia-Entrada" => [
                [0,0,0,0,0], 
                [0,0,0,0,0],
        ],
     ];

    /** 
     * ocuparAssentos() =
     *  Permitir a escolha de assentos e retornar os assentos ocupados
    */
    function ocuparAssentosInteiro(){ // int $linha, int $coluna
        echo "Escolha seu assento: \n";        
        global $linha;
        global $coluna;

        $linha = (int) fgets(STDIN);
        $coluna =(int) fgets(STDIN);        
        
        $GLOBALS['plateia']["Inteira"][$linha][$coluna] = 1;

       return  $GLOBALS['plateia']["Inteira"][$linha][$coluna];
    }

    function ocuparAssentosMeia(){
        echo "Escolha seu assento: \n";        
        global $linha;
        global $coluna;

        $linha = (int) fgets(STDIN);
        $coluna =(int) fgets(STDIN);        
        
        $GLOBALS['plateia']["Meia-Entrada"][$linha][$coluna] = 1;

       return  $GLOBALS['plateia']["Meia-Entrada"][$linha][$coluna];
    }
    function ocuparAssentosVIP(){
        echo "Escolha seu assento: \n";        
        global $linha;
        global $coluna;

        $linha = (int) fgets(STDIN);
        $coluna =(int) fgets(STDIN);        
        
        $GLOBALS['plateia']["VIP"][$linha][$coluna] = 1;

       return  $GLOBALS['plateia']["VIP"][$linha][$coluna];
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
        global $categoriaIngressos;
        global $coluna;
        global $linha;        
        echo "   0  1  2  3  4\n";
        echo "0 [", $GLOBALS['plateia']["Inteira"][0][0], "][", $GLOBALS['plateia']["Inteira"][0][1], "][", $GLOBALS['plateia']["Inteira"][0][2], "][", $GLOBALS['plateia']["Inteira"][0][3], "][", $GLOBALS['plateia']["Inteira"][0][4], "]\n";
        echo "1 [", $GLOBALS['plateia']["Inteira"][1][0], "][", $GLOBALS['plateia']["Inteira"][1][1], "][", $GLOBALS['plateia']["Inteira"][1][2], "][", $GLOBALS['plateia']["Inteira"][1][3], "][", $GLOBALS['plateia']["Inteira"][1][4], "]\n";
        echo "2 [", $GLOBALS['plateia']["Inteira"][2][0], "][", $GLOBALS['plateia']["Inteira"][2][1], "][", $GLOBALS['plateia']["Inteira"][2][2], "][", $GLOBALS['plateia']["Inteira"][2][3], "][", $GLOBALS['plateia']["Inteira"][2][4], "]\n";
        echo "============Assentos VIP============\n";
        echo "0 [", $GLOBALS['plateia']["VIP"][0][0], "][", $GLOBALS['plateia']["VIP"][0][1], "][", $GLOBALS['plateia']["VIP"][0][2], "][", $GLOBALS['plateia']["VIP"][0][3], "][", $GLOBALS['plateia']["VIP"][0][4], "]\n";
        echo "1 [", $GLOBALS['plateia']["VIP"][1][0], "][", $GLOBALS['plateia']["VIP"][1][1], "][", $GLOBALS['plateia']["VIP"][1][2], "][", $GLOBALS['plateia']["VIP"][1][3], "][", $GLOBALS['plateia']["VIP"][1][4], "]\n";
        echo "============Meia - Entrada============\n";
        echo "0 [", $GLOBALS['plateia']["Meia-Entrada"][0][0], "][", $GLOBALS['plateia']["Meia-Entrada"][0][1], "][", $GLOBALS['plateia']["Meia-Entrada"][0][2], "][", $GLOBALS['plateia']["Meia-Entrada"][0][3], "][", $GLOBALS['plateia']["Meia-Entrada"][0][4], "]\n";
        echo "1 [", $GLOBALS['plateia']["Meia-Entrada"][1][0], "][", $GLOBALS['plateia']["Meia-Entrada"][1][1], "][", $GLOBALS['plateia']["Meia-Entrada"][1][2], "][", $GLOBALS['plateia']["Meia-Entrada"][1][3], "][", $GLOBALS['plateia']["Meia-Entrada"][1][4], "]\n";

    };

    /**
     * CLassifica os assentos em VIP, Meia-entrada e Inteira
     * Assentos da plateia são Inteira por padrão, criaremos linhas novas para especificar meia-entrada e VIP
     */
    function categoriaIngressos(){
        echo "Qual o tipo de seu ingresso?: \n";
        echo "1. Inteira\n";
        echo "2. Meia-Entrada\n";
        echo "3. VIP\n";

        $opcao = fgets(STDIN);
        
        switch ($opcao){
            case 1:
                ocuparAssentosInteiro();
            break;
            case 2:
                ocuparAssentosMeia();
            break;
            case 3:
                ocuparAssentosVIP();
            break;

        };
    };
    mostrarAssentos();
    categoriaIngressos();
    mostrarAssentos();

?>