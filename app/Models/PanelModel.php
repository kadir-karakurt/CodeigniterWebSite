<?php
namespace App\Models;

class PanelModel
{
    protected $db;

    public function __construct()
    {
        // Veritabanı bağlantısını oluşturur
        $this->db = db_connect();
    }

    // Yeni bir kayıt ekler
    public function veri_ekle($baslik, $url, $icerik, $resim)
    {
        $builder = $this->db->table('kayit_ekle');

        $data = [
            'baslik' => $baslik,
            'url' => $url,
            'icerik' => $icerik,
            'resim' => $resim
        ];
        return $builder->insert($data);
    }

    // Belirtilen ID'ye sahip kaydı siler
    public function kayit_sil($id)
    {
        $builder = $this->db->table('kayit_ekle');
        $builder->where('id', $id);
        return $builder->delete();
    }

    // Belirtilen ID'ye sahip kaydı getirir
    public function kayit_al($id)
    {
        $builder = $this->db->table('kayit_ekle');
        $builder->where('id', $id);
        $veri = $builder->get()->getResultArray();
        return $veri[0];
    }

    // Belirtilen ID'ye sahip kaydı günceller
    public function veri_duzenle($baslik, $url, $icerik, $id)
    {
        $builder = $this->db->table('kayit_ekle');
        $builder->where('id', $id);

        $data = [
            'baslik' => $baslik,
            'url' => $url,
            'icerik' => $icerik
        ];
        return $builder->update($data);
    }
}