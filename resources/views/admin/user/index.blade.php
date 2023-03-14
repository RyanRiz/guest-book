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
                                    <h2 class="font-weight-bolder mb-0">User List</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">

                <div class="d-flex justify-content-end mb-1 pe-4">
                    <a class="btn btn-info" href="{{ route('user.create') }}" role="button">Add User</a>
                </div>

                <div class="card">
                    <div class="card-body d-block overflow-auto">
                        <table class="table table-striped" id="datatable">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>Nomor Telepon</th>
                                    <th>Alamat</th>
                                    <th>Projek Mahantas</th>
                                    <th>Info Perumahan</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                            <tfoot>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Nomor Telepon</th>
                                <th>Alamat</th>
                                <th>Projek Mahantas</th>
                                <th>Info Perumahan</th>
                                <th>Opsi</th>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        @include('components.layouts.footer')

    </div>
</x-admin>
