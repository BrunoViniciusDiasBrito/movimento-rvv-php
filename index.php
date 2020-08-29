<?php include './components/header.php' ?>
        <?php include './components/variables/variables.php' ?>
        
        <?php
            //Validando a existencia das páginas e exibindo-a na tela dinamicamente

            $getApp = filter_input(INPUT_GET, 'app', FILTER_SANITIZE_STRIPPED);

            if(empty($getApp)){
                require './components/home.php';
            }elseif(!empty($getApp)  && file_exists('./components/' .$getApp. '.php')){
                require './components/' . $getApp . '.php';
            }else{
                echo '
                <div class="container">
                    <p class="py-5 text-center align-items-center text-red">
                        App não encontrado!
                    </p>
                </div>';
            }
        ?>
        
<?php include './components/footer.php' ?>