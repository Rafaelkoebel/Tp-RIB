<?php
class RibValidator{
    private $banque;
    private $guichet;
    private $compte;
    private $cléf;

    public function __construct($banque, $guichet, $compte, $cléf){
        $this->banque = (int) $banque;
        $this->guichet = (int) $guichet;
        $this->compte = (string) $compte;
        $this->cléf = (int) $cléf;
    }

    public function isValid(){
        $account = (int) strtr(strtoupper ($this->compte),
                            'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
                            '12345678912345678923456789');
        $key = 97 - ((89 * $this->banque + 15 * $this->guichet + 3 * $account) % 97) ;
        //var_dump($key);
        return $key === $this->cléf;
    } 

    public function AfficherRib(){
        echo $this->banque. " / " . $this->guichet . " / " . $this->compte. " / ". $this->cléf;
    }

}

?>