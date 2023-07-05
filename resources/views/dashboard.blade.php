
  @extends('partials.main')
  @section('container')
              <div class="container-fluid mt-3">
                <center><div class="row">
                    <div class="col-12">
                        <div class="card">
                              <div class="card-body">
                                <h5 class="card-title">Galeri TK Al-Ikhlas</h5>
                                  <div class="bootstrap-carousel">
                                      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                          <div class="carousel-inner">
                                              <div class="carousel-item active">
                                                  <img class="d-block w-50" src="{{ asset('assets/images/big/img5.jpg') }}" alt="First slide">
                                              </div>
                                              <div class="carousel-item">
                                                  <img class="d-block w-50" src="{{ asset('assets/images/big/img6.jpg') }}" alt="Second slide">
                                              </div>
                                              <div class="carousel-item">
                                                  <img class="d-block w-50" src="{{ asset('assets/images/big/img7.jpg') }}" alt="Third slide">
                                              </div>
                                          </div><a class="carousel-control-prev" href="#carouselExampleControls" data-slide="prev"><span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span> </a><a class="carousel-control-next" href="#carouselExampleControls"
                                              data-slide="next"><span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
                                      </div>
                                  </div>
                              </div>
                        </div>
                    </div>
                  </div></center>

                  <div class="row">
                    <div class="col-12 m-b-30">
                      <div class="row m-b-30">
                        <div class="col-lg-6">
                          <div class="card border-primary">
                            <div class="card-body">
                              <h5 class="card-title">Visi</h5>
                              <ul>
                                <li>"Membentuk generasi yang cerdas, kreatif dan berkarakter"</li>
                                <li>&nbsp;</li>
                                <li>&nbsp;</li>
                                <li>&nbsp;</li>
                                <li>&nbsp;</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="card border-primary">
                            <div class="card-body">
                              <h5 class="card-title">Misi</h5>
                              <ul>
                                <li>a. Membiasakan perilaku islami dalam kehidupan sehari-hari</li>
                                <li>b. Melatih dan mengembangkan kecerdasan anak melalui bidang pengembangan, pengetahuan dan ketrampilan</li>
                                <li>c. Menyelenggarakan proses pembelajaran yang kreatif, inovatif, dan menyenangkan</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="card">
                    <center><h4 class="mt-5 mb-3">Struktur Organisasi</h4></center>
                  <div class="row">
                    <div class="col-lg-4 col-sm-6">
                      <div class="card">
                        <div class="card-body">
                          <div class="text-center">
                            <img
                              src="{{ asset('assets/images/user/form-user.png') }}"
                              class="rounded-circle"
                              alt=""
                            />
                            <h5 class="mt-3 mb-1">Drs. Abdul Kholiq</h5>
                            <p class="m-0">Ketua Yayasan Bani Adam</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                      <div class="card">
                        <div class="card-body">
                          <div class="text-center">
                            <img
                              src="{{ asset('assets/images/user/form-user.png') }}"
                              class="rounded-circle"
                              alt=""
                            />
                            <h5 class="mt-3 mb-1">Siti Makhnunah, S.Ag</h5>
                            <p class="m-0">Kepala TK</p>
                            <!-- <a href="javascript:void()" class="btn btn-sm btn-warning">Send Message</a> -->
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                      <div class="card">
                        <div class="card-body">
                          <div class="text-center">
                            <img
                              src="{{ asset('assets/images/user/form-user.png') }}"
                              class="rounded-circle"
                              alt=""
                            />
                            <h5 class="mt-3 mb-1">Indah Sri Puji Astuti S.Pd.</h5>
                            <p class="m-0">Tenaga Administrasi</p>
                            <!-- <a href="javascript:void()" class="btn btn-sm btn-warning">Send Message</a> -->
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                      <div class="card">
                        <div class="card-body">
                          <div class="text-center">
                            <img
                              src="{{ asset('assets/images/user/form-user.png') }}"
                              class="rounded-circle"
                              alt=""
                            />
                            <h5 class="mt-3 mb-1">Riska Imilda Ningtias, S.Pd</h5>
                            <p class="m-0">Guru Kelompok A</p>
                            <!-- <a href="javascript:void()" class="btn btn-sm btn-warning">Send Message</a> -->
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                      <div class="card">
                        <div class="card-body">
                          <div class="text-center">
                            <img
                              src="{{ asset('assets/images/user/form-user.png') }}"
                              class="rounded-circle"
                              alt=""
                            />
                            <h5 class="mt-3 mb-1">Sri Hikma Hadiwirani, S.I.P</h5>
                            <p class="m-0">Guru Kelompok B</p>
                            <!-- <a href="javascript:void()" class="btn btn-sm btn-warning">Send Message</a> -->
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
  @endsection