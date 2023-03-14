<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Guest Book | Mahantas</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Toastr -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  </head>
  <body style="background-image: url('images/bg.jpg')">

    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12 text-center mt-2 d-lg-none">
                <h2>Selamat Datang di Guest Book</h2>
                <img src="images/logo.png" width="200" class="img-fluid mt-2 mb-3" alt="...">
            </div>
            <div class="col-md-12 text-center mt-4 d-none d-lg-block">
                <h2>Selamat Datang di Guest Book</h2>
                <img src="images/logo.png" width="200" class="img-fluid mt-2 mb-4" alt="...">
            </div>
            <div class="col-lg-7">
                <div class="card shadow" >
                    <label class="text-center py-2">Isi Formulir Dibawah</label>
                    <form action={{ route('form.store') }} method="POST">
                        @csrf
                        <div class="row mx-3 mb-3">
                            <div class="col-lg-6 pb-2">
                                <div class="form-group">
                                    <label class="form-control-label">Nama</label>
                                    <input class="form-control" type="text" name="name">
                                </div>
                            </div>
                            <div class="col-lg-6 pb-2">
                                <div class="form-group">
                                    <label class="form-control-label">No. Telepon</label>
                                    <input class="form-control" type="text" name="number">
                                </div>
                            </div>
                            <div class="col-lg-6 pb-2">
                                <div class="form-group">
                                    <label class="form-control-label">Alamat</label>
                                    <input class="form-control" type="text" name="address">
                                </div>
                            </div>
                            <div class="col-lg-6 pb-2">
                                <div class="form-group">
                                    <label class="form-control-label">Projek Mahantas</label>
                                    <select class="form-select" name="residence" aria-label="Default select example">
                                        @foreach ($residences as $residence)
                                            <option value="{{ $residence->name }}">{{ $residence->name }}</option>
                                        @endforeach
                                      </select>
                                </div>
                            </div>
                            <div class="col-lg-12 pb-2">
                                <label class="form-control-label">Info Perumahan</label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="info[]" value="Instagram" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Instagram
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="info[]" value="Facebook" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Facebook
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="info[]" value="OLX" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                OLX
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="info[]" value="Freelance" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Freelance
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="info[]" value="Baliho" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Baliho
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="text-center col-md-12 py-2">
                                <button type="submit" class="fw-bold shadow-sm btn btn-primary btn-sm ms-auto py-2 px-4 mx-3">Simpan</button>
                                <button type="reset" class="fw-bold shadow-sm btn btn-danger btn-sm ms-auto py-2 px-4 mx-3">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer class="pb-3 pt-2 mt-3">
        <div class="container text-center">
            <span class="text-muted">© 2023 PT. Mahantas. All rights reserved.</span>
            <a href="{{ route('login') }}" class="text-muted text-decoration-none">Login</a>
        </div>
    </footer>

    @include('components.layouts.message')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
