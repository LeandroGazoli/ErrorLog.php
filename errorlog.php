try {
    //insirir codigo aqui
} catch (PDOException $e){
    echo'Sistema indisponível';
    LogErros($e); //cria log de error
}
