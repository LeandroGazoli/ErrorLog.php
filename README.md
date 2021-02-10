# ErrorLog.php
tratativa de error em log php

try {
    //Codigo aqui
} catch (PDOException $e){
    echo'Sistema indisponível';
    LogErros($e); //gera relatório aqui.
}
