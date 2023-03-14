<x-admin>
    @section('title', 'Dashboard')
    <div class="container-fluid d-block overflow-auto">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-plain mt-2">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="d-flex flex-column h-100">
                                    <h2 class="font-weight-bolder mb-0">User Create</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">

                <div class="d-flex justify-content-end mb-1 pe-4">
                    <a class="btn btn-primary" href="{{ route('user.index') }}" role="button">Back</a>
                </div>

                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('user.store') }}" method="post">
                            @csrf
                            <div class="row pt-3">
                                <div class="col-md-5">
                                    <label>Nama Lengkap</label>
                                </div>
                                <div class="col-md-7 form-group mb-3">
                                    <input type="text" class="form-control border border-dark-subtle" name="nama" placeholder="  Nama Lengkap">
                                </div>
                                <div class="col-md-5">
                                    <label>Email</label>
                                </div>
                                <div class="col-md-7 form-group mb-3">
                                    <input type="email" class="form-control border border-dark-subtle" name="nama" placeholder="  Email">
                                </div>
                                <div class="col-md-5">
                                    <label>Password</label>
                                </div>
                                <div class="col-md-7 form-group mb-3">
                                    <input type="password" class="form-control border border-dark-subtle" name="nama" placeholder="  Password">
                                </div>
                                <div class="text-end col-md-12 pt-2">
                                    <button type="submit" class="fw-bold btn btn-info btn-sm ms-auto py-2 px-4 mx-3">Simpan</button>
                                    <button type="reset" class="fw-bold btn btn-primary btn-sm ms-auto py-2 px-4 mx-3">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        @include('components.layouts.footer')

    </div>
</x-admin>
