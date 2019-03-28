<!DOCTYPE html>
<html>

    <body>
        <form method="post" enctype="multipart/form-data">
            <label>Selecione o arquivo:</label>
            <input type="file" name="arquivo">
            <input type="submit" name="ok" value="Enviar">
        </form>

        <?php
            require './classe/arquivo.php';

            if( isset( $_FILES[ "arquivo" ]["tmp_name"] ) ) {
                $arquivo = $_FILES[ "arquivo" ]["tmp_name"];
                $arq = new arquivo();
                $arq->lerArquivo($arquivo);
                echo $arq->getConteudo();
            }

        ?>
    </body>

</html>









 


