<?php 
    // Banco de dados
    DEFINE('DB_SGBD'     , 'mysql'); 
    
    DEFINE('DB_HOST'     , 'localhost'); 
    DEFINE('DB_NAME'     , 'projetofinal');
    DEFINE('DB_USER'     , 'root');
    DEFINE('DB_PASSWORD' , '');
    
    // Caminho para aplicacao
    DEFINE('HOST_LOCAL'      , $_SERVER['DOCUMENT_ROOT'] . '/ProjetoUlbra/');
    DEFINE('PATH_APP'        , HOST_LOCAL . 'Application/');
    DEFINE('PATH_CORE'       , PATH_APP   . 'core/');
    DEFINE('PATH_CONTROLLER' , PATH_APP   . 'controllers/');
    DEFINE('PATH_VIEW'       , PATH_APP   . 'views/');
    DEFINE('PATH_MODEL'      , PATH_APP   . 'models/');
    
    // Caminho para public
    DEFINE('HOST_PUBLIC'     , 'http://localhost/ProjetoUlbra/');
    DEFINE('PATH_PUBLIC'     , HOST_PUBLIC  . 'public/assets/');
    
    DEFINE('PATH_CSS'        , PATH_PUBLIC . 'css/');
    DEFINE('PATH_JS'         , PATH_PUBLIC . 'js/');
    DEFINE('PATH_IMG'        , PATH_PUBLIC . 'img/');
    DEFINE('PATH_IMG_DB'     , PATH_PUBLIC . 'imgGame/');
?>