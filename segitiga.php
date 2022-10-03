<?php
require_once 'bidang.php';
class Segitiga extends Bidang
{
    protected $alas;
    protected $tinggi;
    const NAMA = 'segitiga';

    public function __construct($alas, $tinggi)
    {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }
    public function namabidang()
    {
        return (self::NAMA);
    }
    public function luasbidang()
    {
        return (0.5 * $this->alas * $this->tinggi);
    }
    public function setsisi()
    {
        return (sqrt(($this->alas * $this->alas) + ($this->tinggi * $this->tinggi)));
    }
    public function kelilingbidang()
    {
        return ($this->setsisi() * 3);
    }
}