<?php
    function conexao(){
        $con = mysqli_connect("localhost","root","");
        $num_bd = mysqli_num_rows(mysqli_query($con,"SHOW DATABASES"));
        echo "Foi(am) encontrado(s) $num_bd banco(s) de dados na sua conexão.";
    }
    conexao();
?>