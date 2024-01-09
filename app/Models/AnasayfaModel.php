<?php

namespace App\Models;

use CodeIgniter\Model;
class AnasayfaModel extends Model
{
    protected $table ='kullanicilar'; // Bu modelin kullanacağı varsayılan tablo belirleniyor

    
    public function kayitlar() // Tüm kayıtları getiren bir fonksiyon
    {
        $this->table='kayit_ekle'; // Tablo değiştiriliyor, kayıtların alınacağı tablo belirleniyor

        return $this->findAll(); // Tüm kayıtları getirir ve döndürür
    }

    public function kayit_detay($url) // Belirli bir kaydın detayını getiren bir fonksiyon
    {
        $this->table='kayit_ekle'; // Tablo değiştiriliyor, belirli bir kaydın detaylarını içeren tablo belirleniyor

        return $this->where('url', $url)->find(); // Verilen URL'ye sahip olan kaydı bulur ve döndürür
    }
}