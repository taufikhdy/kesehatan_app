@extends('homepage.bagian.main')
@section('content')
<div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-5 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-12 text-white">
                    <h3>"Kesehatan Adalah Mahkota, yang
                        Tidak diketahui kecuali oleh Orang yang Sakit"</h3>
                    <p class="text-white">kesehatan adalah hal yang sangat berharga, namun sering kali tidak disadari nilainya hingga seseorang jatuh sakit. Ini mengingatkan kita untuk menghargai dan menjaga kesehatan selagi masih memilikinya.</p>
                  </div>
                  {{-- <div class="col-lg-12">
                    <div class="white-button first-button scroll-to-section">
                      <a href="#contact">Free Quote <i class="fab fa-apple"></i></a>
                    </div>
                    <div class="white-button scroll-to-section">
                      <a href="#contact">Free Quote <i class="fab fa-google-play"></i></a>
                    </div>
                  </div> --}}
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="right-image wow fadeInRight" data-wow-duration="3s" data-wow-delay="0.5s">
                <img src="{{ asset('image/logo.png') }}" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="services" class="services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
            <h4>Ketahui <em>Tips &amp; Cara Menjaga</em> Kesehatan</h4>
            <img src="assets/images/heading-line-dec.png" alt="">
            <p>Merawat kesehatan adalah <a class="text-primary">investasi jangka panjang</a> yang dapat meningkatkan <a class="text-primary">kualitas hidup Anda</a>. Berikut adalah beberapa cara untuk menjaga kesehatan dengan baik: </p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="service-item first-service">
            <h4>Pola Makan Seimbang <i class="fa-solid fa-utensils" style="size: 50px"></i></h4>
            <p>Konsumsi makanan bergizi dengan proporsi yang tepat. Perbanyak buah, sayuran, protein, dan karbohidrat kompleks. Hindari makanan cepat saji dan terlalu banyak gula.</p>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="service-item second-service">
            <h4>Olahraga Teratur<i class="fa-solid fa-person-swimming"></i></h4>
            <p>Lakukan aktivitas fisik setidaknya 30 menit setiap hari. Olahraga seperti jalan kaki, berlari, atau yoga dapat membantu menjaga kesehatan jantung dan meningkatkan daya tahan tubuh. </p>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="service-item third-service">
            <h4>Istirahat Cukup <i class="fa-solid fa-bed"></i></h4>
            <p>Tidur yang cukup dan berkualitas membantu tubuh untuk pulih dan berfungsi optimal. Usahakan tidur 7-8 jam setiap malam untuk menjaga kesehatan mental dan fisik.</p>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="service-item fourth-service">
            <h4>Meminum Air Putih Yang Cukup <i class="fa-solid fa-whiskey-glass"></i></h4>
            <p>Pastikan tubuh terhidrasi dengan baik dengan minum air putih setidaknya 8 gelas sehari. Air membantu proses detoksifikasi dan menjaga fungsi organ tubuh.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="about" class="about-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 align-self-center">
          <div class="section-heading">
            <h4>Manfaat <em>Menjaga Kesehatan</em> Badan</h4>
            <img src="{{ asset('landing/assets/images/heading-line-dec.png') }}" alt="">
            <p>Menjaga kesehatan bukan hanya soal mencegah penyakit, tetapi juga tentang meningkatkan kualitas hidup. Berikut beberapa manfaat utama dari menjaga kesehatan secara menyeluruh:</p>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="service-item box-item">
                <h4>Menjaga Kesehatan Mental</h4>
                <p>Olahraga dan pola makan seimbang dapat membantu mengurangi stres, kecemasan, dan meningkatkan suasana hati.</p>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="service-item box-item">
                <h4>Pencegah Penyakit</h4>
                <p>Dengan menjaga pola hidup sehat, Anda dapat menurunkan risiko penyakit seperti diabetes, hipertensi, dan penyakit jantung.</p>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="service-item box-item">
                <h4>Meningkatkan Kualitas Tidur</h4>
                <p>Kesehatan yang baik juga berpengaruh pada kualitas tidur. Dengan tidur yang cukup dan nyenyak, tubuh dan pikiran Anda akan lebih segar, sehingga siap menghadapi tantangan setiap hari.</p>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="service-item box-item">
                <h4>Menjaga Kualitas Hidup</h4>
                <p>Kesehatan yang baik memungkinkan Anda menikmati hidup lebih lama dan berkualitas, sehingga Anda bisa menghabiskan waktu bersama keluarga dan orang-orang yang Anda cintai tanpa terbatas oleh masalah kesehatan.</p>
              </div>
            </div>
            <div class="col-lg-12">
              <p>Dengan menjaga kesehatan, Anda tidak hanya meningkatkan kualitas hidup Anda saat ini tetapi juga memastikan masa depan yang lebih baik dan lebih bahagia.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="right-image">
            {{-- <img src="assets/images/about-right-dec.png" alt=""> --}}
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="clients" class="the-clients">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading">
            <h4>Apa Ucapan <em>Dokter Dokter Hebat</em> Tentang Kesehatan</h4>
            <img src="assets/images/heading-line-dec.png" alt="">
            <p>Berikut beberapa kutipan inspiratif tentang pentingnya menjaga kesehatan dari para dokter hebat di Indonesia:</p>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="naccs">
            <div class="grid">
              <div class="row">
                <div class="col-lg-7 align-self-center">
                  <div class="menu">
                    <div class="first-thumb">
                      <div class="thumb">
                        <div class="row">
                          <div class="col-lg-6 col-sm-4 col-12">
                            <h4>Dr. Lie Dharmawan</h4>
                            <span class="date">Pendiri Rumah Sakit Apung Indonesia</span>
                          </div>
                          <div class="col-lg-8 col-sm-4 d-none d-sm-block">
                            <p>"Kesehatan adalah kekayaan sejati. Tanpa kesehatan, segala yang kita miliki tak ada artinya."</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-6 col-sm-4 col-12">
                              <h4>Dr. Terawan Agus Putranto</h4>
                              <span class="date">Mantan Menteri Kesehatan Republik Indonesia</span>
                            </div>
                            <div class="col-lg-8 col-sm-4 d-none d-sm-block">
                              <p>"Kesehatan adalah investasi yang paling berharga bagi setiap individu. Jangan pernah menyepelekannya."</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div >
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-6 col-sm-4 col-12">
                              <h4>Dr. Sardjito</h4>
                              <span class="date">Pendiri Universitas Gadjah Mada</span>
                            </div>
                            <div class="col-lg-8 col-sm-4 d-none d-sm-block">
                              <p>"Menjaga kesehatan bukan hanya kewajiban individu, tetapi juga tanggung jawab bersama demi masa depan bangsa yang kuat."</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="mb-5">
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-6 col-sm-4 col-12">
                              <h4>Dr. Adib Khumaidi</h4>
                              <span class="date">Ketua IDI (Ikatan Dokter Indonesia)</span>
                            </div>
                            <div class="col-lg-8 col-sm-4 d-none d-sm-block">
                              <p>"Kita semua bertanggung jawab untuk menjaga kesehatan diri dan lingkungan. Sehat itu hak, dan kita harus berusaha untuk mewujudkannya."</p>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
                <div class="col-lg-5">
                  <ul class="nacc">
                    <li class="active">
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="client-content mb-5">
                                <img src="{{ asset('image/logo.png') }}" alt="" height="200px">
                                <h2 class="text-center text-white">Visi</h2>
                                <p>
                                    a.Menjadikan klinik al-ittihad
                                    sebagai pusat pelayanan Kesehatan
                                    yang islami ,bermutu tinggi dan
                                    prifesional
                                </p>
                                <p class="mt-3">
                                    b.Menjadikan klinik al-ittihad
                                    sebagai pusat pelayanan Kesehatan
                                    yang dapat mengatasi masalah
                                    Kesehatan secara professional,
                                    islami dan kompetitif.
                                </p>
                              </div>
                              <div class="client-content mt-5">
                                <h2 class="text-center text-white">Misi</h2>
                                <p>
                                    a.Menyelenggarakan pelayanan
                                    Kesehatan yang bermutu tinggi dan
                                    terjangkau
                                </p>
                                <p class="mb-2">
                                    b.Menyelenggarakan pelayanan
                                    Kesehatan yang sesuai dengan
                                    kebutuhan masyarakat
                                </p>
                                <p class="mb-2">
                                    c.Mengembangkan profesioanlisme
                                    karyawan
                                </p>
                                <p class="mb-2">
                                    d.Membekali nilai-nilai islami
                                </p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="client-content">
                                <img src="assets/images/quote.png" alt="">
                                <p>“CTO, Lorem ipsum dolor sit amet, consectetur adpiscing elit, sed do eismod tempor idunte ut labore et dolore magna aliqua darwin kengan
                                  lorem ipsum dolor sit amet, consectetur picing elit massive big blasta.”</p>
                              </div>
                              <div class="down-content">
                                <img src="assets/images/client-image.jpg" alt="">
                                <div class="right-content">
                                  <h4>Jake H. Nyo</h4>
                                  <span>CTO of Digital Company</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="pricing" class="pricing-tables">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h4>Semangat dari para dokter ini mengingatkan kita akan <em>pentingnya merawat kesehatan diri.</em> Dengan menjalani <em>pola hidup sehat</em> dan rutin memeriksakan kesehatan, kita bisa menjaga kualitas hidup dan mewujudkan <em>masa depan yang lebih baik.</em></h4>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection
