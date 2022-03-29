<?php // INICIANDO O PROGRAMA

//CRIANDO UMA CLASSE CHAMDA "PESSOA"
class Pessoa{

    //DECLARACAO DAS VARIAVEIS USADAS NO CODIGO
    private $nome;//DECLARACAO DA VARIAVEL NOME
    private $endereco;//DECLARACAO DA VARIAVEL ENDERECO
    private $bairro;//DECLARACAO DA VARIAVEL BAIRRO
    private $cep;//DECLARACAO DA VARIAVEL CEP
    private $cidade;//DECLARACAO DA VARIAVEL CIDADE
    private $estado;//DECLARACAO DA VARIAVEL ESTADO

    // DECLARANDO OS METODOS SET USADOS PARA O ENCAPSULAMENTO DAS VARIAVEIS
    public function setNome($nome){
        $this->nome = $nome;  //APLICACAO DO THIS PARA INDICAR A VARIAVEL
    }

    public function setEndereco($endereco){
        $this->endereco = $endereco; //APLICACAO DO THIS PARA INDICAR A VARIAVEL
    }

    public function setBairro($bairro){
        $this->bairro = $bairro; //APLICACAO DO THIS PARA INDICAR A VARIAVEL
    }

    public function setCep($cep){
        $this->cep = $cep; //APLICACAO DO THIS PARA INDICAR A VARIAVEL
    }

    public function setCidade($cidade){
        $this->cidade = $cidade; //APLICACAO DO THIS PARA INDICAR A VARIAVEL
    }

    public function setEstado($estado){
        $this->setEstado = $estado; //APLICACAO DO THIS PARA INDICAR A VARIAVEL
    }

    // DECLARANDO OS METODOS GET USADOS PARA O ENCAPSULAMENTO DAS VARIAVEIS
    public function getNome(){
        return $this->nome; //RETORNO DO VALOR DA VARIAVEL
    }

    public function getEndereco(){
        return $this->endereco; //RETORNO DO VALOR DA VARIAVEL
    }

    public function getBairro(){
        return $this->Bairro; //RETORNO DO VALOR DA VARIAVEL
    } 

    public function getCep(){
        return $this->cep; //RETORNO DO VALOR DA VARIAVEL
    }
    public function getCidade(){
        return $this->cidade; //RETORNO DO VALOR DA VARIAVEL
    }

    public function getEstdao(){
        return $this->Estado; //RETORNO DO VALOR DA VARIAVEL
    }
}
?> 