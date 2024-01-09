<?php

namespace App\Controllers;

use App\Models\PanelModel;

class Panel extends BaseController
{
    protected $helpers = ['form'];

    public function index()
    {
        // Kullanıcı oturum durumunu kontrol eder
        $session = session();
        if ($session->has('durum') && $session->get('durum')) {
            // Oturum açık ise panel sayfasını yükler
            return view('tema/header', ['isim' => $session->get('isim'), 'durum' => $session->get('durum')]) .
                view('tema/panel_header') .
                view('sayfalar/panasayfa') .
                view('tema/panel_footer') .
                view('tema/footer');
        } else {
            // Oturum açık değilse giriş sayfasına yönlendirir
            return redirect()->to(base_url('login'));
        }
    }

    // Yeni kayıt ekleme işlemi
    public function kayit_ekle()
    {
        // Kullanıcı oturum durumunu kontrol eder
        $session = session();
        if ($session->has('durum') && $session->get('durum')) {
            if (!$this->request->is('post')) {
                // Post isteği yoksa kayıt ekleme sayfasını yükler
                return view('tema/header', ['isim' => $session->get('isim'), 'durum' => $session->get('durum')]) .
                    view('tema/panel_header') .
                    view('sayfalar/kayit_ekle') .
                    view('tema/panel_footer') .
                    view('tema/footer');
            }

            // Gerekli kuralları tanımla
            $rules = [
                'baslik' => 'required',
                'icerik' => 'required',
                'resim'  => 'uploaded[resim]|max_size[resim,1024]',
            ];

            if (!$this->validate($rules)) {
                // Kurallara uymazsa kayıt ekleme sayfasını tekrar yükler
                return view('tema/header', ['isim' => $session->get('isim'), 'durum' => $session->get('durum')]) .
                    view('tema/panel_header') .
                    view('sayfalar/kayit_ekle') .
                    view('tema/panel_footer') .
                    view('tema/footer');
            }

            // Form verilerini al
            $veri = $this->validator->getValidated();
            $model = model('PanelModel');

            // Yüklenen resmi işle
            $img = $this->request->getFile('resim');
            if ($img->isValid() && !$img->hasMoved()) {
                // Resmi belirtilen klasöre taşı
                $yol = FCPATH . 'uploads/';
                $isim = $img->getRandomName();
                $img->move($yol, $isim);

                // Veritabanına kayıt ekle
                $sonuc = $model->veri_ekle($veri['baslik'], url_title($veri['baslik'], '_', true), $veri['icerik'], $isim);

                if ($sonuc) {
                    // Başarıyla eklendiyse kayıt ekleme sayfasına yönlendirir
                    return redirect()->to(base_url('kayit_ekle'));
                }
            }
        } else {
            // Oturum açık değilse giriş sayfasına yönlendirir
            return redirect()->to(base_url('login'));
        }
    }

    // Kayıtları listeleme işlemi
    public function Kayit_listele()
    {
        // Kullanıcı oturum durumunu kontrol eder
        $session = session();
        if ($session->has('durum') && $session->get('durum')) 
        {
            // Oturum açıksa kayıtları listeler
            $data['isim'] = $session->get('isim');
            $data['durum'] = $session->get('durum');
            $model = model('AnasayfaModel');
            $kayitlar = $model->kayitlar();

            if (count($kayitlar) > 0) 
            {
                $data['kayitlar'] = $kayitlar;
            }

            return view('tema/header', $data,) .
                view('tema/panel_header') .
                view('sayfalar/kayit_listele') .
                view('tema/panel_footer') .
                view('tema/footer');
        } 
        else 
        {
            // Oturum açık değilse giriş sayfasına yönlendirir
            return redirect()->to(base_url('login'));
        }
    }

    // Kayıt silme işlemi
    public function kayit_sil($id)
    {
        // Kullanıcı oturum durumunu kontrol eder
        $session = session();
        if ($session->has('durum') && $session->get('durum')) 
        {
            // Oturum açıksa kaydı siler ve kayıt listeleme sayfasına yönlendirir
            $model = model('PanelModel');
            $model->kayit_sil($id);

            return redirect()->to(base_url('kayit_listele'));
        } 
        else 
        {
            // Oturum açık değilse giriş sayfasına yönlendirir
            return redirect()->to(base_url('login'));
        }
    }

    // Kayıt düzenleme işlemi
        public function kayit_duzenle($id)
    {
        // Kullanıcı oturum durumunu kontrol eder
        $session = session();
        if ($session->has('durum') && $session->get('durum')) 
        {
            $model = model('PanelModel');
            $data['isim'] = $session->get('isim');
            $data['durum'] = $session->get('durum');
            $data['veri'] = $model->kayit_al($id);

            if (!$this->request->is('post')) {
                // Post isteği yoksa kayıt düzenleme sayfasını yükler
                return view('tema/header', $data) .
                    view('tema/panel_header') .
                    view('sayfalar/kayit_duzenle') .
                    view('tema/panel_footer') .
                    view('tema/footer');
            }

            // Gerekli kuralları tanımla
            $rules = [
                'baslik' => 'required',
                'icerik' => 'required',
            ];

            if (!$this->validate($rules)) {
                // Kurallara uymazsa kayıt düzenleme sayfasını tekrar yükler
                return view('tema/header', $data) .
                    view('tema/panel_header') .
                    view('sayfalar/kayit_duzenle') .
                    view('tema/panel_footer') .
                    view('tema/footer');
            }

            // Form verilerini al
            $veri = $this->validator->getValidated();
            $sonuc = $model->veri_duzenle($veri['baslik'], url_title($veri['baslik'], '_', true), $veri['icerik'], $id);

            if ($sonuc) {
                // Başarıyla güncellendiyse kayıt düzenleme sayfasına yönlendirir
                return redirect()->to(base_url('kayit_duzenle/.$id'));
            }
        } 
        else 
        {
            // Oturum açık değilse login sayfasına yönlendirir
            return redirect()->to(base_url('login'));
        }
    }
}