<?php

class ControleRemoto
{
    //atributos
    private $mudo;
    private $volume;
    private $ligado;
    private $tocando;

//#############################################################################

    //construtor

    public function __construct()
    {
        $this->setMudo(false);
        $this->setVolume(50);
        $this->setLigado(false);
        $this->setTocando(false);
        echo 'sopa de macaco';
    }

//#############################################################################
    

    //#metodos#


    //MUDO

    public function mudo(){
        if($this->getMudo() == false){
            $this->setMudo(true);
        }else{
            $this->setMudo(false);
        }
    }
    //LIGAR

    public function ligar()
    {
       
            $this->setLigado(true);
      
    }
    //DELIGAR

    public function desligar()
    { 
        $this->setLigado(false);
    }
    //ABRIR MENU

    public function abrirMenu()
    { }
    //FECHAR MENU

    public function fecharMenu()
    { }
    //MAIS VOLUME

    public function maisVolume()
    { 
        if($this->getMudo()==true){
            $this->setMudo(false);
            $this->setVolume($this->getVolume() + 5);
        }else{

            $this->setVolume($this->getVolume() + 5);

        }
    }
    //MENOSVOLUME

    public function menosVolume()
    { 
        if($this->getMudo()==true){
            $this->setMudo(false);
            $this->setVolume($this->getVolume() - 5);
        }else{

            $this->setVolume($this->getVolume() - 5);

        }
    }
    //LIGAR MUDO

    public function ligarMudo()
    { 
        if($this->getMudo()==false){
            $this->setMudo(true);
            $this->setVolume(0);
        }else{
            $this->setMudo(false);
        }
    }
    //DESLIGAR MUDO

    public function desligarMudo()
    { 
        if($this->getMudo()==true){
            $this->setMudo(false);
            $this->setVolume(50);

        }else{
            $this->setMudo(true);
        }

    }
    
    //PLAY

    public function play()
    {
        $this->setTocando(true);
     }
    
    //PAUSE

     public function pause()
    {
        $this->setTocando(false);
    }


//#############################################################################



    //settlers
    public function setMudo($mudo)
    {
        $this->mudo = $mudo;
    }

    public function setVolume($volume)
    {
        $this->volume = $volume;
    }
    public function setLigado($ligado)
    { 
        $this->ligado = $ligado;
    }
    public function setTocando($tocando)
    { 
        $this->tocando = $tocando;
    }

    //getters

    public function getMudo(){
        return $this->mudo;
    }

    public function getVolume()
    {
        if($this->getMudo()==true){
            return $this->setVolume(0);
        }else{
            return $this->volume;
        }
    }
    public function getLigado()
    {
        return $this->ligado;
    }
    public function getTocando()
    {
        return $this->tocando;
    }
}
?>
