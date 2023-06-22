<html>
    <body>
        <?php 
            if(isset($_POST['enviar-formulario'])):
                $formatosPermitidos = array("png", "jpeg", "jpg", "gif");
                // var_dump($_FILES);
                $quantidadeArquivos = count($_FILES['arquivos']['name']);
                $contador = 0;
                while($contador < $quantidadeArquivos):
                    $extensao = pathinfo($_FILES['arquivos']['name'][$contador], PATHINFO_EXTENSION);
                    if(in_array($extensao, $formatosPermitidos)):
                        $pasta = "arquivo/";
                        $temporario = $_FILES['arquivos']['tmp_name'][$contador];
                        $novoNome = uniqid().".$extensao";

                        if(move_uploaded_file($temporario, $pasta.$novoNome)):
                            echo "Upload feito com sucesso para $pasta.$novoNome<br>";
                        else:
                            echo "Erro ao enviar o arquivo $temporario";
                        endif;
                    else:
                        $mensagem = "$extensao não é permitida <br>";
                    endif;
                    $contador ++;
                endwhile;
            endif;
        
        ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
            <input type="file" name="arquivo[]" multiple><br>
            <input type="submit" name="enviar-formulario">

        </form>
    </body>
</html>