<html>
    <body>
        <!-- <html>
            <body>
                <form action="dados.php" method="POST">
                    Nome: <input type="text" name="nome"><br>
                    Email: <input type="email" name="email"><br>
                    <button type="submit"> Enviar</button>
                </form>
            </body>
        </html> -->

        <!-- <html>
            <body>
                <form action="dados.php" method="GET">
                    Nome: <input type="text" name="nome"><br>
                    Email: <input type="email" name="email"><br>
                    <button type="submit"> Enviar</button>
                </form>
                <a href="dados.php?idade=21&sobrenome=Mathias">Enviar Dados</a>
            </body>
        </html> -->
        <?php 
            //Validações
            /*
                Funções (filter_input - filter_var)
                FILTER_VALIDATE_INT
                FILTER_VALIDATE_EMAIL
                FILTER_VALIDATE_FLOAT
                FILTER_VALIDATE_IP
                FILTER_VALIDATE_URL
             */   
        ?>
        <?php 
            //isset = se existe
            if(isset($_POST['enviar-formulario'])):
                //Arreay de erros
                $erros = array();

                //Validações
                if(!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)):
                    $erros[] = "Idade precisa ser um inteiro";
                endif;
                if(!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)):
                    $erros[] = "Email inválido";
                endif;
                if(!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)):
                    $erros[] = "Peso precisa ser um float";
                endif;
                if(!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)):
                    $erros[] = "IP inválido";
                endif;
                if(!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)):
                    $erros[] = "URL inválido";
                endif;

                //Exibindo mensagens
                if(!empty($erros)): //empty() = vazio
                    foreach($erros as $erro):
                        echo "<li> $erro </li>";
                    endforeach;
                else:
                    echo "Seus dados estão corretos";
                endif;
            endif;
        
        ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            Idade: <input type="text" name="idade"><br>
            Email: <input type="text" name="email"><br>
            Peso: <input type="text" name="peso"><br>
            IP: <input type="text" name="ip"><br>
            URL: <input type="text" name="url"><br>
            <button type="submit" name="enviar-formulario"> Enviar</button>
        </form>
       
    </body>
</html>