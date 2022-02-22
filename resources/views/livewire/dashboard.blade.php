<div class="container-fluid py-4">
    <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-header p-3 pt-2">
                    <div
                        class="icon icon-lg icon-shape bg-gradient-warning shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">people</i>
                    </div>
                    <div class="text-end pt-1">
                        <p class="text-sm mb-0 text-capitalize">Total Pengunjung</p>
                        <h4 class="mb-0">53k</h4>
                    </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                    <p class="mb-0"><span class="text-success text-sm font-weight-bolder">300 </span> Pengunjung hari
                        ini.</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-header p-3 pt-2">
                    <div
                        class="icon icon-lg icon-shape bg-gradient-warning shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">newspaper</i>
                    </div>
                    <div class="text-end pt-1">
                        <p class="text-sm mb-0 text-capitalize">Total Artikel</p>
                        <h4 class="mb-0">{{ $artikels }}</h4>
                    </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                    <p class="mb-0"><span class="text-success text-sm font-weight-bolder">{{ $artikelsAktif }}</span> Artikel Aktif</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-header p-3 pt-2">
                    <div
                        class="icon icon-lg icon-shape bg-gradient-warning shadow-success text-center border-radius-xl mt-n4 position-absolute">
                        <i class="fas fa-id-card-alt text-s opacity-10  "></i>
                    </div>
                    <div class="text-end pt-1">
                        <p class="text-sm mb-0 text-capitalize">Total Banner Head</p>
                        <h4 class="mb-0">{{ $heads }}</h4>
                    </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                    <p class="mb-0"><span class="text-danger text-sm font-weight-bolder">{{ $headsAktif }}</span> Banner Head Aktif</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-header p-3 pt-2">
                    <div
                        class="icon icon-lg icon-shape bg-gradient-warning shadow-info text-center border-radius-xl mt-n4 position-absolute">
                        <i class="fa fa-id-card opacity-10" aria-hidden="true"></i>
                    </div>
                    <div class="text-end pt-1">
                        <p class="text-sm mb-0 text-capitalize">Total Banner Side</p>
                        <h4 class="mb-0">{{ $sides }}</h4>
                    </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                    <p class="mb-0"><span class="text-success text-sm font-weight-bolder">{{ $sidesAktif }} </span>Banner Side Aktif
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-lg-12 col-md-6 mt-5 mb-3">
            <div class="card z-index-2 bg-gradient-dark  ">
                {{-- <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                        <h2 class="mb-0 text-white text-center">WELCOME TO DASHBOARD ADMIN</h2>
                        <h2 class="mb-0 text-warning text-center">KOLAKA UPDATE</h2>
                    </div>
                </div> --}}
                <div class="card-body bg-gradient-white mt-5 mb-5">
                    <h1 class="mb-0 text-white text-center mb-1">WELCOME TO PANEL ADMIN</h1>
                    <h2 class="mb-0 text-warning text-center">KOLAKA UPDATE</h2>
{{--
                    <h6 class="mb-0 ">Website Views</h6>
                    <p class="text-sm ">Last Campaign Performance</p>
                    <hr class="dark horizontal">
                    <div class="d-flex ">
                        <i class="material-icons text-sm my-auto me-1">schedule</i>
                        <p class="mb-0 text-sm"> campaign sent 2 days ago </p>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
