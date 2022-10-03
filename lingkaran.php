<?php
require_once 'bidang.php';
class lingkaran extends Bidang
{
    protected $jari2;
    const NAMA = 'lingkaran';

    public function __construct($jari2)
    {
        $this->jari2 = $jari2;
    }
    public function namabidang()
    {
        return (self::NAMA);
    }
    public function luasbidang()
    {
        return (3.14 * $this->jari2 * $this->jari2);
    }
    public function kelilingbidang()
    {
        return (2 * (3.14 * $this->jari2));
    }
}