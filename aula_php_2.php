<?php //INICIANDO O CODIGO

require_once("Pessoa.class.php"); //IMPORT DA CLASSE PESSOA



$pessoa = new Pessoa(); //INSTANCIANDO A CLASSE

$pessoa->setNome("Lucas Borges"); //ATRIBUINDO CONTEUDO

echo $pessoa->getNome();//EXIBINDO OS DADOS



//ENCERRANDO O CODIGO

?>