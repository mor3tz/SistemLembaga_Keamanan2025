<div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
                    </li>
                  </ul>
                  <div>
                    <div class="btn-wrapper">
                      <a href="#" class="btn btn-otline-dark"><i class="icon-printer"></i> Print</a>
                      <a href="#" class="btn btn-primary text-white me-0"><i class="icon-download"></i> Export</a>
                    </div>
                  </div>
                </div>
                <div class="tab-content tab-content-basic">
                  <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="statistics-details d-flex align-items-center justify-content-between">
                          <div class="stat-box">
                            <p class="statistics-title">Laporan Masuk</p>
                            <h3 class="rate-percentage">53</h3>
                            <p class="text-danger d-flex align-items-center">
                              <i class="mdi mdi-menu-up me-1"></i><span>+2 </span>
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12 d-flex flex-column">
                        <div class="row flex-grow">
                          <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-start">
                                  <div>
                                    <h4 class="card-title card-title-dash">Laporan Kejadian</h4>
                                    <p class="card-subtitle card-subtitle-dash">Laporan Petugas Keamanan</p>
                                  </div>
                                  <div>
                                    <div class="dropdown mb-3">
                                      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButtonTahun" data-bs-toggle="dropdown" aria-expanded="false">
                                        Pilih Tahun
                                      </button>
                                      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButtonTahun">
                                        <li><a class="dropdown-tahun" href="#" data-tahun="2022">2022</a></li>
                                        <li><a class="dropdown-tahun" href="#" data-tahun="2023">2023</a></li>
                                        <li><a class="dropdown-tahun" href="#" data-tahun="2024">2024</a></li>
                                        <li><a class="dropdown-tahun" href="#" data-tahun="2025">2025</a></li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                                <div class="d-sm-flex align-items-center mt-1 justify-content-between">
                                  <div class="d-sm-flex align-items-center mt-4 justify-content-between">
                                    <h4 class="text-success">(+2%)</h4>
                                  </div>
                                  <div class="me-3">
                                    <div id="marketingOverview-legend"></div>
                                  </div>
                                </div>
                                <div class="chartjs-bar-wrapper mt-3">
                                  <canvas id="barChart" style="max-height: 300px;"></canvas>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>