<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- custom CSS -->
    <link rel="stylesheet" href="{{asset( 'custom-style.css' )}}">
    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('icon/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('icon/css/all.css') }}">
    <title>LK-UKSW</title>
    <!-- Favicon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/stylesa.css" rel="stylesheet" />

    <style>
        .btn-lk{
            background: #003289d2;
            color: #fff;
        }
        .btn-lk:hover{
            color: #003289;
            background: #fff;
            border: 2px solid #003289;
            transition: .5s;
        }
        .drp-login{
            background: #003289;
            color: white;
        }
        .drp-login:hover{
            background: white;
            color: #003289;
            transition: .5s;
        }
        .hero {
            margin-top: 100px;
            margin-bottom: 50px;
        }
    </style>
</head>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark" style="background: #003289">
            <div class="container px-5">
                <a class="navbar-brand" href="/">Lembaga Kemahasiswaan FTI</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="/pengumuman">Pengumuman&nbsp;&nbsp;&nbsp;</a></li>
                        <li>
                            <div class="dropdown">
                                <button class="btn dropdown-toggle drp-login"  type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    Login
                                </button>
                                <ul class="dropdown-menu bg-light " aria-labelledby="dropdownMenuButton1">
                                  <li><a href="{{ route('admin.login') }}" class="btn btn-light" type="submit">Admin/Kegiatan</a></li>
                                  <hr>
                                  <li><a href="{{ route('login') }}" class="btn btn-light" type="submit">Mahasiswa</a></li>
                                </ul>
                              </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- isi nya -->
        <!-- carousel -->
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active text-left">
                    <img src="/img/gambar1.png" class="d-block w-100 h-75" alt="...">
                    <div class="carousel-caption text-start d-none d-md-block">
                        <h1 class="display-5 fw-bold">Pelatihan Kepemimpinan</h1>
                        <p>Pelatihan kepemimpinan dilakukan berdasarkan kurikulum pelatihan kepemimpinan mahasiswa, yang meliputi 4 tahap pelatihan yaitu: Pra Dasar, Dasar, Menengah dan Lanjut.</p>
                        <!-- make button show more -->
                        <a href="https://fti.uksw.edu/kemahasiswaan.html" target="_blank" class="btn btn-outline-light" type="submit">Show more</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/img/gambar2.png" class="d-block w-100 h-75" alt="...">
                    <div class="carousel-caption text-start d-none d-md-block">
                        <h1 class="display-5 fw-bold">Pengembangan Penalaran</h1>
                        <p>Pengembangan Penalaran dimaksudkan untuk memberikan kompetensi keilmuan pada mahasiswa, baik disipliner dan interdisipliner, yang dilakukan melalui kegiatan diskusi/seminar/lokakarya, penelitian individual dan kelompok, pengabdian masyarakat, penulisan ilmiah dan populer, serta keikutsertaan pada event-event seperti olimpiade matematika, fisika, accounting, kontes robot, english debate, lomba peradilan semu, dll.</p>
                        <a href="https://fti.uksw.edu/kemahasiswaan.html" target="_blank" class="btn btn-outline-light" type="submit">Show more</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/img/gambar3.png" class="d-block w-100 h-75" alt="...">
                    <div class="carousel-caption text-start d-none d-md-block">
                        <h1 class="display-5 fw-bold">Pengembangan Minat dan Bakat</h1>
                        <p>Pengembangan minat dan bakat dilakukan melalui pembentukan Kelompok Bakat Minat (KBM) di bidang olahraga dan seni, pelatihan rutin dan pembinaan prestasi dan kebersamaan melalui keikutsertaan dalam event-event yang diselenggarakan di kampus dan luar kampus. Beberapa KBM yang ada dikampus mencakup KBM Olahraga dan Seni. KBM seni terdiri dari Paduan Suara Mahasiswa Voice of SWCU, Vokal Grup Lentera Kasih, Teater (Teras dan Kronis), Karawitan. Sedangkan KBM olahraga terdiri dari Basket, Volly, Sepak Bola, Bela Diri (Karate, Kempo, Taekwondo, Merpati Putih, Capoera, Jet Kun Do, dan Tarung Drajat).</p>
                        <a href="https://fti.uksw.edu/kemahasiswaan.html" target="_blank" class="btn btn-outline-light" type="submit">Show more</a>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- carousel -->
        <br>
        <div class="container hero" id="about">
            <div class="row featurette">
              <div class="col-md-6 order-md-6">
                <h2 class="featurette-heading">Lembaga Kemahasiswaan.</h2>
                <p class="lead">Pembinaan dan pengembangan mahasiswa UKSW dilakukan melalui sebuah Skenario Pola Pembinaan dan Pengembangan Mahasiswa (SPPM). Profil lulusan UKSW adalah creative minority yang mempunyai dua kompetensi dasar, yaitu humanistik (pembentukan karakter dan kepribadian) dan profesional (pengembangan profesionalisme sesuai disiplin ilmunya). </p>
                <div class="col-12">
                    <a href="https://fti.uksw.edu/kemahasiswaan.html" target="_blank" class="btn btn-lg mb-1 col-5 btn-lk" >Selengkapnya</a>
                </div>
              </div>
              <div class="col-md-6 order-md-6">
                <img src="/img/gambar4.jpg" alt="" width="700px" height="400px">
              </div>
            </div>
         </div>
         <br>
        <!-- Jumbotron -->
        <div class="container-fluid my-5 ">
            <div class="jumbotron jumbotron-fluid text-center">
                <p class="fs-1 fw-bolder">Pengumuman</p>
                <hr>
            </div>
        </div>
        <!-- Jumbotron -->

        <!-- album -->
        <div class="container mb-5">
            <div class="row">
                @foreach ($pengumuman as $p)
                <div class="col-md-4 gx-5 gy-5">
                    <div class="card shadow">
                        <img src="{{ asset('storage/' . $p->gambar) }}" style="width: 200px;" class="rounded mx-auto d-block card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fw-bold" style="text-overflow: ellipsis; overflow: hidden; white-space: nowrap;">{{$p->judul}}</h5>
                            <!-- make time posted with text muted -->
                            <i class="fa-regular fa-calendar text-muted"></i>&nbsp;<small class="card-text text-muted">{{$p->created_at->toFormattedDateString()}}</small>
                            <div>
                                <i class="fa-regular fa-circle-user text-muted flex-d"></i>&nbsp;<small class="card-text text-muted">{{$p->penyelenggara}}</small>
                            </div>
                            <!-- <p class="card-text">{!!\Illuminate\Support\Str::limit($p->deskripsi,100,'...')!!}</p> -->
                            <div class="d-grid gap-2 d-md-block">
                                <a href="{{ route('pengumuman.show',$p->id)}}" class="btn btn-lk">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                {{ $pengumuman->links() }}
            </div>
        </div>
        <!-- album -->

        <!-- See All button -->
        <div class="container text-center mb-5">
            <a href="/pengumuman" class="btn btn-lg btn-lk px-4">Lihat Semua Pengumuman</a>
        </div>






    </main>
    <!-- Footer-->
    <footer class="py-4 mt-auto" style="background: #003289">
        <div class="container px-5">
            <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                <div class="col-auto">
                    <div class="small m-0 text-white">Copyright &copy; KBM-AppDev</div>
                </div>
                <div class="col-auto">
                    <a class="link-light small" href="#!">Email</a>
                    <span class="text-white mx-1">&middot;</span>
                    <a class="link-light small" href="#!">UKSW</a>
                    <span class="text-white mx-1">&middot;</span>
                    <a class="link-light small" href="#!">FTI</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scriptsa.js"></script>
</body>

</html>