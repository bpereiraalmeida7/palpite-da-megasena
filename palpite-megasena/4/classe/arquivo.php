<?php

class arquivo {
    private $texto;

    function getConteudo() {
        return htmlentities($this->texto);
    }

    function lerArquivo($arquivo) {
        $this->texto = file_get_contents($arquivo);
    }
}

?>
