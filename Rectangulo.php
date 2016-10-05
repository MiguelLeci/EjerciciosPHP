<?php
class Rectangulo
{
    private $_base;
    private $_altura;
    private $_perimetro;
    private $_superficie;
    function __construct($base, $altura)   //así los públicos
    {
        $this->_base = $base;
        $this->_altura = $altura;
    }
    public function toString()
    {
        return "Rectangulo de $this->_base base y $this->_altura altura";
    }
    public function getBase()
    {
        return $this->_base;
    }
    public function setBase($base)
    {
        $this->_base = $base;
    }
    public function getAltura()
    {
        return $this->_altura;
    }
    public function setAltura()
    {
        $this->_altura = $altura;
    }
    public function perimetro()
    {
        $_perimetro = 2*($this->_base+$this->_altura);
        return $_perimetro;
    }
    public function superficie()
    {
        $_superficie = $this->_base*$this->_altura;
        return $_superficie;
    }
}