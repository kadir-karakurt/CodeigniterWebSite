<!-- Appointment Start -->
<div class="container-xxl py-5">
    <div class="container-fluid">
        <!-- Login start -->
        <div class="row g-5">
            <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.5s">
                <div class="bg-light rounded h-100 d-flex align-items-center p-5" style="width: 200%; padding: 100px;">
                    <form action="<?= base_url('login') ?>" method="post">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col" style="min-width: 200px;">Başlık</th>
                                        <th scope="col" style="min-width: 300px;">URL</th>
                                        <th scope="col" style="min-width: 150px;">İşlem</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    if(isset($kayitlar) && count($kayitlar)>0)
                                    {
                                        foreach ($kayitlar as $item)
                                        {

                                        echo'<tr>';
                                        echo'<th scope="row">'.$item['id'].'</th>';
                                        echo'<td>'.$item['baslik'].'</td>';
                                        echo'<td>'.$item['url'].'</td>';
                                        echo'<td>';
                                        echo'<a href="'.base_url('kayit_sil/'.$item['id']).'"';
                                        echo' class="btn btn-sm btn-danger">Sil</a>';
                                        echo '&nbsp;';  echo '&nbsp;'; 
                                        echo'<a href="'.base_url('kayit_duzenle/'.$item['id']).'"';
                                        echo' class="btn btn-sm btn-primary">Düzenle</a>';
                                        echo'</td>';
                                        echo'</tr>';
                                        echo'';

                                        }
                                    }
                                    else
                                    {
                                        echo 'Kayıt Bulunamadı';
                                    }
                                    ?>

                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>