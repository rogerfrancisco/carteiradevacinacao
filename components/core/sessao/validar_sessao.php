<?php
   if(session_status() != PHP_SESSION_ACTIVE){
        session_start();
    }

    if($_SESSION['id_usuario'] == null){?>
        <script>window.location.href = "login.php";</script>
    <?php
    }
?>