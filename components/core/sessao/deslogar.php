<?php
   if(session_status() != PHP_SESSION_ACTIVE){
        session_start();
        session_destroy();
    }else{
        session_destroy();
    }
?>
<script>window.location.href = "../../../login.php";</script>