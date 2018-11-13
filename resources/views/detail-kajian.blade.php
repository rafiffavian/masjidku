@extends('layouts.app-frontend2')

@section('content')

  <section class="banner-bottom-w3ls py-md-5 py-4">
      <div class="container">
        <h3><b><center>DETAIL KAJIAN</b></center></h3>
          <div class="inner-sec-wthreelayouts py-md-5 py-4">
              <div class="row">
                  <div class="col-lg-6 about-img">
                      <img src="images/ab3.jpg" alt="" class="img-fluid">
                  </div>
                  <div class="col-lg-6 about-right">
                      <h3>Assalamu'alaikum Warrahmatullahi Wabarakatuh</h3>

                      <p class="my-4">Hadirilah...<br>Kajian umum yang akan disampaikan oleh guru kita {{$listkajian->pengisi_acara}},
                      kajian yang penuh untaian hikmah dan manfaat yang menyejukkan jiwa,
                      </br>
                      Yang insya Allah akan dilaksanakan pada :
                     </p>
                      <!--/about-in-->
                      <div class="row">
                          <div class="col-lg-8 about-in text-left">
                              <div class="card">
                                  <div class="card-body">
                                      <i class="fas fa-map"></i>
                                      <h5 class="card-title">{{$listkajian->date}}</h5>
                                      <p class="card-text">Tema : {{$listkajian->tema}}</p>
                                      <p class="card-text">Kategori : {{$listkajian->kategori}}</p>
                                      <p class="card-text">Lokasi : {{ $listkajian->dataMasjid->name }}</p>
                                  </div>
                              </div>

                          </div>
                      </div>
                      <!--/about-in-->
                      <p class="my-4">Semoga dengan menghadiri kajian umum tersebut dapat menambah iman, takwa, dan kecintaan kita kepada Allah Subhnahu Wa Ta'ala, aamiin.
                     </p>
                            <h3>Wassalamu'alaikum Warrahmatullahi Wabarakatuh</h3>
                  </div>
              </div>
              <!--/services-grids-->
              <div class="service-mid-sec mt-lg-5 mt-4">
                  <div class="middle-serve-content py-md-5 py-4">
                      <div class="row middle-grids">
                          <div class="col-lg-4 about-in middle-grid-info text-center">
                              <div class="card">
                                  <div class="card-body">
                                      <i class="far fa-lightbulb"></i>
                                      <h5 class="card-title">What we do</h5>
                                      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing.
                                      </p>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-4 about-in middle-grid-info text-center">
                              <div class="card">
                                  <div class="card-body">
                                      <i class="fas fa-signal"></i>
                                      <h5 class="card-title"> Our Strategy</h5>
                                      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing.
                                      </p>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-4 about-in middle-grid-info text-center">
                              <div class="card">
                                  <div class="card-body">
                                      <i class="far fa-clone"></i>
                                      <h5 class="card-title"> Our Projects</h5>
                                      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing.
                                      </p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!--//services-grids-->
          </div>
      </div>
  </section>
  <!--//banner-bottom-w3ls-->

@endsection
