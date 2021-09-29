<?php

class apoio{
    public static function conecta_token($token){
        self::session_start();
        if(!self::verifica_itens_sessao($token)){
            $dados = explode( "||", base64_decode($token));
            $_SESSION['last_token'] = $token;
            $_SESSION['db_type'] = $dados[0];
            $_SESSION['host'] = $dados[1];
            $_SESSION['port'] = $dados[2];
            $_SESSION['user'] = $dados[3];
            $_SESSION['password'] = str_replace(" ", "",$dados[4]);
            $_SESSION['db'] = $dados[5];
        }
    }

    public static function session_start(){
        if(session_status() != PHP_SESSION_ACTIVE){
            session_start();
        }
    }

    private static function verifica_itens_sessao($token){
        self::session_start();

        if(!isset($_SESSION['db_type']) || !isset($_SESSION['host']) || !isset($_SESSION['port']) || 
        !isset($_SESSION['user']) || !isset($_SESSION['password']) || !isset($_SESSION['db']) || 
        $_SESSION['last_token'] != $token){
            return false;
        }else{
            return true;
        }
    }
}