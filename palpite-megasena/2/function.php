<?php
#Feito por: Bianca Pereira


    function randomDezenas(){

        $num = range( 1 , 60 );
        $vetor = array();
        $dezenas = 60;

        //A função shuffle(), randomiza a ordem do array, fazendo com que os valores não se repitam.
        shuffle($num);

        for ( $i = 0 ; $i < 1 ; ++$i ){
            $vetor = array_splice( $num , 0 , $dezenas );
        }

        //A função sort(), ordena os valores do array em ordem crescente.
        sort($vetor);
        print_r($vetor);

    }

        randomDezenas();

?>