<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="landing_page/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">E-Pemesanan</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>

<body>
    <section>
        <div class="card-group">
            <div class="card">
                <img src="{{ asset('img/konser/konser2.jpg') }}" class="card-img-top" alt="...">
                {{-- <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                    content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div> --}}
            </div>
            <div class="card">
                <img src="{{ asset('img/konser/konser2.jpg') }}" class="card-img-top" alt="...">
                {{-- <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div> --}}
            </div>
            <div class="card">
                <img src="{{ asset('img/konser/konser2.jpg') }}" class="card-img-top" alt="...">
                {{-- <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                    content. This card has even longer content than the first to show that equal height action.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div> --}}
            </div>
        </div>
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('img/konser/konser1.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/konser/konser2.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/konser/konser3.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <section>
        <div class="container">
            <form method="post" action="{{ route('page_proses_form_pemesanan') }}" class="mt-4">
                @csrf
                <div class="row mb-3">
                    {{-- <label for="inputEmail3" class="col-sm-2 col-form-label">ID</label> --}}
                    <div class="col-sm-10">
                        <input type="hidden" value="123" placeholder="1234567890" class="form-control w-25"
                            name="id_pemesanan" id="id_pemesanan">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="ID" class="col-sm-2 col-form-label">ID</label>
                    <div class="col-sm-10">
                        <input required type="text" value="1234" name="id" class="form-control w-25"
                            id="id">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="id_tiket" class="col-sm-2 col-form-label">Pilih Konser</label>
                    <div class="col-sm-10">
                        <select class="form-select w-25 text-center" name="id_tiket" required
                            aria-label="Default select example">
                            <option selected>--PILIH--</option>
                            <option value="1">WESTLIFE</option>
                            <option value="2">QUEEN</option>
                            <option value="3">GUNS N ROSES</option>
                        </select>
                        {{-- <input type="text" class="form-control" id="id_tiket"> --}}
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="tanggal_pesan_tiket" class="col-sm-2 col-form-label">Tanggal Pesan Tiket</label>
                    <div class="col-sm-10">
                        <input type="date" required class="form-control w-25 text-center"
                            name="tanggal_pesan_tiket" id="tanggal_pesan_tiket">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="jumlah_tiket" class="col-sm-2 col-form-label">Jumlah Tiket</label>
                    <div class="col-sm-10">
                        <input type="number" required class="form-control w-25" name="jumlah_tiket"
                            id="jumlah_tiket">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="total_harga" class="col-sm-2 col-form-label">Total Harga</label>
                    <div class="col-sm-10">
                        <input type="text" required class="form-control w-25" name="total_harga"
                            id="total_harga">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="total_harga" class="col-sm-2 col-form-label">Pembayaran Via</label>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="cara_pembayaran" value="transfer"
                                id="transfer">
                            <label class="form-check-label" for="transfer">
                                Transfer
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="cara_pembayaran" value="tunai"
                                id="tunai">
                            <label class="form-check-label" for="tunai">
                                Tunai
                            </label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
        </div>
    </section>
    <script src="landing_page/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>
