<?php

namespace App\Controllers;

use App\Models\AnasayfaModel;

class Anasayfa extends BaseController
{
    // Yardımcı fonksiyonları belirtmek için kullanılan bir dizi. Bu durumda, 'form' ve 'text' yardımcıları kullanılabilir.
    protected $helpers = ['form', 'text'];

    // Anasayfa'nın index() metodu
    public function index()
    {
        // AnasayfaModel sınıfından bir model çağırılıyor
        $model = model('AnasayfaModel');

        // Model üzerinden kayitlar() metodu çağrılıyor ve sonuç $kayitlar değişkenine atanıyor
        $kayitlar = $model->kayitlar();

        // Eğer $kayitlar dizisi boş değilse, $data dizisine 'kayitlar' anahtarında $kayitlar atılıyor
        if (count($kayitlar) > 0) {
            $data['kayitlar'] = $kayitlar;
        }

        // Oturum başlatılıyor
        $session = session();

        // 'durum' anahtarlı bir değer varsa ve değer true ise
        if ($session->has('durum') && $session->get('durum')) {
            // $data dizisine 'isim' ve 'durum' anahtarları ekleniyor
            $data['isim'] = $session->get('isim');
            $data['durum'] = $session->get('durum');

            // Tema dosyaları kullanılarak görünüm oluşturuluyor ve döndürülüyor
            return view('tema/header', $data) .
                view('sayfalar/anasayfa') .
                view('tema/footer');
        } else {
            // Oturum değeri yoksa veya false ise, sadece sayfa görünümü döndürülüyor
            return view('tema/header', $data) . view('sayfalar/anasayfa') . view('tema/footer');
        }
    }

    // Kullanıcı girişi için login() metodu
    public function login()
    {
        // Oturum başlatılıyor
        $session = session();

        // Eğer 'durum' anahtarlı bir değer varsa ve değer true ise
        if ($session->has('durum') && $session->get('durum')) {
            // Kullanıcı paneline yönlendirme yapılıyor
            return redirect()->to(base_url('panel'));
        } else {
            // Post isteği yapılmışsa
            if (!$this->request->is('post')) {
                // Giriş sayfası görünümü döndürülüyor
                return view('tema/header') . view('sayfalar/login') . view('tema/footer');
            }

            // Doğrulama kuralları belirtiliyor
            $rules = [
                'kulad' => 'required',
                'sifre' => 'required',
                'email' => 'required'
            ];

            // Gönderilen veriler doğrulama kurallarına uygun değilse, giriş sayfası görünümü döndürülüyor
            if (!$this->validate($rules)) {
                return view('tema/header') . view('sayfalar/login') . view('tema/footer');
            }

            // Doğrulanmış veriler alınıyor
            $veri = $this->validator->getValidated();
            $model = model('AnasayfaModel');

            // Kullanıcı veritabanında aranıyor
            $sor = $model->where(['kulad' => $veri['kulad'], 'sifre' => $veri['sifre'], 'email' => $veri['email']])->find();

            // Kullanıcı bulunduysa
            if (count($sor) > 0) {
                // Kullanıcı bilgileri oturuma atanıyor ve kullanıcı paneline yönlendirme yapılıyor
                $kul_bilgi = [
                    'isim' => 'Kadir Karakurt',
                    'durum' => true
                ];
                $session->set($kul_bilgi);
                return redirect()->to(base_url('panel'));
            } else {
                // Kullanıcı bulunamadıysa, hata mesajı ile giriş sayfası görünümü döndürülüyor
                return view('tema/header', ['uyari' => 'Hatalı Kullanıcı Girişi']) . view('sayfalar/login') . view('tema/footer');
            }
        }
    }

    public function logout()
    {
    // Oturum başlatılıyor
    $session = session();
    
    // Oturum bilgileri temizleniyor (tüm oturum verileri siliniyor)
    $session->destroy();

    // Kullanıcıyı login sayfasına yönlendiren bir yönlendirme yapılıyor
    return redirect()->to(base_url('login'));
    }

    public function incele($url)
    {
    // Boş bir dizi oluşturuluyor
    $data = [];
 
    // AnasayfaModel sınıfından bir model çağırılıyor
    $model = model('AnasayfaModel');  
    
    // Verilen $url parametresiyle kayit_detay() metodu çağrılıyor ve sonuç $veri değişkenine atanıyor
    $veri = $model->kayit_detay($url);
    $data['veri'] = $veri[0];
    
    // Oturum başlatılıyor
    $session = session();
    
    // Eğer 'durum' anahtarlı bir değer varsa ve değer true ise
    if ($session->has('durum') && $session->get('durum')) {
        // $data dizisine 'isim' ve 'durum' anahtarları ekleniyor
        $data['isim'] = $session->get('isim');
        $data['durum'] = $session->get('durum');
    }

    // Sayfa görünümü oluşturuluyor ve döndürülüyor
    return view('tema/header', $data) . view('sayfalar/incele') . view('tema/footer');
    }

    public function iletisim()
    {
    // İletişim sayfasının görünümü döndürülüyor
    return view('tema/header') . view('sayfalar/iletisim') . view('tema/footer');
    }
    public function about()
    {
    // İletişim sayfasının görünümü döndürülüyor
    return view('tema/header') . view('sayfalar/about') . view('tema/footer');
    }

    public function servis()
    {
    // Servis sayfasının görünümü döndürülüyor
    return view('tema/header') . view('sayfalar/servis') . view('tema/footer');
    }
    public function ozellikler()
    {
    // Servis sayfasının görünümü döndürülüyor
    return view('tema/header') . view('sayfalar/ozellikler') . view('tema/footer');
    }

}