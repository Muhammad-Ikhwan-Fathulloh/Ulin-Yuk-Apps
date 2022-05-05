@extends('landingpage::layouts.master')
@section('content')
<!-- Destinasi Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h4 class="section-title">Wisata Kuliner Bandung</h4>
            <h1 class="display-5 mb-4">Here is some of Bandung's finest culinary you should try! </h1>
        </div>

        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item d-flex position-relative text-center h-100">
                    <img class="bg-img" src="{{asset('img')}}/kuliner/mie kocok.png" alt="">
                    <div class="service-text p-5">
                        <img class="mb-4" src="{{asset('img')}}/icons/icon-7.png" alt="Icon">
                        <h3 class="mb-3">Mie Kocok</h3>
                        <p class="mb-4 teks">Olahan mie berbentuk pipih dengan ditambah bermacam sayuran, tauge serta kikil sapi membuat makanan khas Bandung ini memiliki cita rasa yang akan dirindukan setiap harinya. Nama “Mie Kocok” sendiri diberikan karena sebelum disajikan, olahan mie terlebih dahulu diaduk dan dikocok.</p>
                        <a class="btn" href="/detail-page.html"><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item d-flex position-relative text-center h-100">
                    <img class="bg-img" src="{{asset('img')}}/kuliner/seblak.png" alt="">
                    <div class="service-text p-5">
                        <img class="mb-4" src="{{asset('img')}}/icons/icon-7.png" alt="Icon">
                        <h3 class="mb-3">Seblak</h3>
                        <p class="mb-4 teks">Makanan khas Bandung yang terbuat dari kerupuk basah ini memiliki rasa yang khas karena dibuat dari bumbu rempah dan memiliki isian yang mengenyangkan seperti sayur, daging dan telur.</p>
                        <a class="btn" href="/detail-page.html"><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item d-flex position-relative text-center h-100">
                    <img class="bg-img" src="{{asset('img')}}/kuliner/nasi tutug oncom.png" alt="">
                    <div class="service-text p-5">
                        <img class="mb-4" src="{{asset('img')}}/icons/icon-7.png" alt="Icon">
                        <h3 class="mb-3">Nasi Tutug Oncom</h3>
                        <p class="mb-4 teks">Nasi Tutug Oncom Bandung berasal dari olahan nasi yang dibuat dengan cara dibakar dan dicampur dengan bumbu oncom serta diberi sedikit tepung tapioka terlebih dahulu.</p>
                        <a class="btn" href="/detail-page.html"><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item d-flex position-relative text-center h-100">
                    <img class="bg-img" src="{{asset('img')}}/kuliner/karedok.png" alt="">
                    <div class="service-text p-5">
                        <img class="mb-4" src="{{asset('img')}}/icons/icon-7.png" alt="Icon">
                        <h3 class="mb-3">Karedok</h3>
                        <p class="mb-4 teks">Hidangan ini merupakan olahan sayuran yang masih fresh dengan dilumuri bumbu kacang diatasnya. Dimana bumbu kacang karedok memiliki campuran kencur sehingga aroma harum makin membuat kamu tergoda ingin segera menyantapnya.</p>
                        <a class="btn" href="/detail-page.html"><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item d-flex position-relative text-center h-100">
                    <img class="bg-img" src="{{asset('img')}}/kuliner/surabi.png" alt="">
                    <div class="service-text p-5">
                        <img class="mb-4" src="{{asset('img')}}/icons/icon-7.png" alt="Icon">
                        <h3 class="mb-3">Surabi</h3>
                        <p class="mb-4 teks">Surabi ini sudah melekat dengan kota kembang, sehingga menjadi makanan khas yang enak dan banyak disukai. Makanan ini terbuat dari bahan utama tepung dan santan yang dimasaknya dengan cara yang unik, yaitu dibakar pada tungku bara api menggunakan tanah liat yang berbentuk seperti cobek.</p>
                        <a class="btn" href="/detail-page.html"><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item d-flex position-relative text-center h-100">
                    <img class="bg-img" src="{{asset('img')}}/kuliner/colenak.png" alt="">
                    <div class="service-text p-5">
                        <img class="mb-4" src="{{asset('img')}}/icons/icon-7.png" alt="Icon">
                        <h3 class="mb-3">Colenak</h3>
                        <p class="mb-4 teks">Kuliner khas Bandung ini merupakan kepanjangan dari “Cocol Enak”. Colenak sudah dikenal sejak tahun 1930-an. Makanan ini terbuat dari olahan peuyeum yang dibakar lalu disiram dengan gula merah kental serta toping parutan kelapa diatasnya. Rasa asam dari peuyeum dan manis dari gula merah kental akan bercampur menjadi satu ketika digigit.</p>
                        <a class="btn" href="/detail-page.html"><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                    </div>
                </div>
            </div>

            <!-- <h1 class="display-5 mb-4">Wisata Buatan/Rekreasi </h1> -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item d-flex position-relative text-center h-100">
                    <img class="bg-img" src="{{asset('img')}}/kuliner/es goyobod.png" alt="">
                    <div class="service-text p-5">
                        <img class="mb-4" src="{{asset('img')}}/icons/icon-7.png" alt="Icon">
                        <h3 class="mb-3">Es Goyobot</h3>
                        <p class="mb-4 teks">Es goyobod Kliningan berisi adonan sagu aren yang kenyal dengan kuah santan, susu kental manis dan serutan es. Materi pelengkapnya mulai dari alpukat, roti tawar, peuyeum, pacar Cina, kolang-kaling hingga kelapa muda. Es Goyobod khas buatan masyarakat Bandung. Berbahan tepung sagu aren dengan tekstur mirip agar-agar. Goyobod tak hanya disajikan sendiri, dalam segelasnya ditambahkan berbagai bahan seperti alpukat, pacar cina, tape, kelapa muda, potongan roti dan diguyur air santan, gula merah cair dan susu kental manis. Rasanya tentu saja manis dan segar.</p>
                        <a class="btn" href="/detail-page.html"><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item d-flex position-relative text-center h-100">
                    <img class="bg-img" src="{{asset('img')}}/kuliner/baso cuanki.png" alt="">
                    <div class="service-text p-5">
                        <img class="mb-4" src="{{asset('img')}}/icons/icon-7.png" alt="Icon">
                        <h3 class="mb-3">Baso Cuanki</h3>
                        <p class="mb-4 teks">Cuanki merupakan salah satu jajanan khas Sunda yang berasal dari kota Bandung yang berbahan dasar ikan, daging sapi, tepung tapioka, dan bumbu penyedap lainnya yang disajikan dengan kuah kaldu yang kuat berisi bakso, siomay kukus, siomay goreng, tahu goreng, dan tahu rebus dengan taburan bawang goreng dan daun seledri.</p>
                        <a class="btn" href="/detail-page.html"><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item d-flex position-relative text-center h-100">
                    <img class="bg-img" src="{{asset('img')}}/kuliner/wajit cillin.png" alt="">
                    <div class="service-text p-5">
                        <img class="mb-4" src="{{asset('img')}}/icons/icon-7.png" alt="Icon">
                        <h3 class="mb-3">Wajit Cililin</h3>
                        <p class="mb-4 teks">Wajit Cililin ini adalah salah satu makanan khas yang berasal dari Cililin Kabupaten Bandung Barat. Rasanya yang manis dan legit membuat panganan ini disukai banyak orang terutama warga Bandung dan Sunda. Wajit Cililin ini terbuat dari bahan dasar ketan dan gula merah. Biasanya dibungkus dengan menggunakan daun jagung kering.</p>
                        <a class="btn" href="/detail-page.html"><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                    </div>
                </div>
            </div>

            <!-- <h1 class="display-5 mb-4">Wisata Religi </h1> -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item d-flex position-relative text-center h-100">
                    <img class="bg-img" src="{{asset('img')}}/kuliner/yoghurt cisangkuy.png" alt="">
                    <div class="service-text p-5">
                        <img class="mb-4" src="{{asset('img')}}/icons/icon-7.png" alt="Icon">
                        <h3 class="mb-3">Yoghurt Cisangkuy</h3>
                        <p class="mb-4 teks">Minuman khas Kota Kembang ini bercita rasa manis dengan sedikit asam. Jenis yoghurt yang ditawarkan mulai dari stroberi,  anggur, coklat, leci, mocca dan berbagai rasa lain. Terdapat pula potongan buah yang akan disamakan dengan rasa yoghurt. Tak perlu khawatirkan pengolahannya, Yoghurt Cisangkuy diproduksi homemade sehingga menjamin kualitasnya.</p>
                        <a class="btn" href="/detail-page.html"><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item d-flex position-relative text-center h-100">
                    <img class="bg-img" src="{{asset('img')}}/kuliner/batagor.png" alt="">
                    <div class="service-text p-5">
                        <img class="mb-4" src="{{asset('img')}}/icons/icon-7.png" alt="Icon">
                        <h3 class="mb-3">Batagor</h3>
                        <p class="mb-4 teks">Batagor (singkatan dari dari Bakso, Tauhu Goreng adalah hidangan Sunda dari Indonesia, dan popular di Asia Tenggara, yang terdiri daripada ladu ikan goreng, biasanya disajikan dengan kuah kacang. Secara tradisional, batagor dibuat daripada daging ikan tenggiri cincang (wahoo).</p>
                        <a class="btn" href="/detail-page.html"><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item d-flex position-relative text-center h-100">
                    <img class="bg-img" src="{{asset('img')}}/kuliner/kupat tahu.png" alt="">
                    <div class="service-text p-5">
                        <img class="mb-4" src="{{asset('img')}}/icons/icon-7.png" alt="Icon">
                        <h3 class="mb-3">Kupat Tahu</h3>
                        <p class="mb-4 teks">Kupat tahu adalah salah satu makanan yang banyak dijumpai di daerah Sunda Jawa Barat, terutama di Bandung. Kota Kembang ini memiliki kupat tahu yang khas dan patut untuk dicoba. Umumnya satu porsi kupat tahu terdiri dari beberapa potongan ketupat, tahu goreng, tauge, dan kerupuk, serta disiram dengan bumbu kacang yang khas. </p>
                        <a class="btn" href="/detail-page.html"><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
<!-- Destinasi End -->
@endsection
