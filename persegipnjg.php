<?php
require_once 'bidang.php';
class PersegiPanjang extends Bidang
{
    public $panjang;
    public $lebar;
    const NAMA = 'persegi panjang';

    public function __construct($panjang, $lebar)
    {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }
    public function namabidang()
    {
        return (self::NAMA);
    }
    public function luasbidang()
    {
        return ($this->panjang * $this->lebar);
    }
    public function kelilingbidang()
    {
        return (2 * ($this->panjang + $this->lebar));
    }
}