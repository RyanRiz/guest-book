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
                                    <h2 class="font-weight-bolder mb-0">Guest List</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">

                <div class="d-flex justify-content-end mb-1 pe-4">
                    <a class="btn btn-info" href="{{ route('guest.export') }}" role="button">Download Guest List</a>
                </div>

                <div class="card">
                    <div class="card-body d-block overflow-auto">
                        <table class="table table-striped" id="data">
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
                                @foreach ($guests as $number => $guest)
                                    <tr>
                                        <td>{{ $number + 1 }}</td>
                                        <td>{{ $guest->name }}</td>
                                        <td>{{ $guest->number }}</td>
                                        <td>{{ $guest->address }}</td>
                                        <td>{{ $guest->residence }}</td>
                                        @php
                                            $info = explode(',', $guest->info);
                                        @endphp
                                        <td>
                                            @foreach ($info as $i)
                                                {{ $i }}<br />
                                            @endforeach
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    Hapus
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
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

        <!-- Modal Delete -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-danger">
                        <h5 class="modal-title text-white" id="exampleModalLabel">Peringatan!</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div>
                            <h4 class="text-center mb-2 text-black">Apakah yakin ingin menghapus data?</h4>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="pe-3">
                                <button type="button" class="btn btn-info" data-bs-dismiss="modal">Batal</button>
                            </div>
                            <div>
                                <form action="{{ route('guest.destroy', $guest->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                        <button class="btn btn-danger">
                                            Hapus
                                        </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</x-admin>
