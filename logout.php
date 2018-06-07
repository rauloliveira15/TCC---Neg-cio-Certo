<?php error_reporting(0); ?>
<?php
    include("cabecalho.php");

    session_destroy(); ?>
    <p class="alert alert-info">Sessão Encerada.</p><br><br>


    <script>
        setInterval(function(){
            window.location = "login.php";    
        }, 1500);
        
    </script>
