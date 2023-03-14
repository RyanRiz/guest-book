<x-admin>
    @section('title', 'Dashboard')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 position-relative z-index-2">
                    <div class="card card-plain mb-3 mt-2">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="d-flex flex-column h-100">
                                        <h2 class="font-weight-bolder mb-0">Dashboard</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <div class="row">
                    <div class="col-md-6 col-sm-6">

                        <div>
                            <div class="card mb-2">
                                <div class="card-header p-3 pt-2">
                                    <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary shadow text-center border-radius-xl mt-n4 position-absolute">
                                        <i class="material-icons opacity-10">leaderboard</i>
                                    </div>
                                    <div class="text-end pt-1">
                                        <p class="text-sm mb-0 text-capitalize">Total Guest</p>
                                        <h4 class="mb-0">{{ $total }}</h4>
                                    </div>
                                </div>

                                <hr class="dark horizontal my-0">
                                <div class="card-footer p-3">

                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="col-md-6 col-sm-6 mt-sm-0 mt-4">

                        <div>
                            <div class="card ">
                                <div class="card-header p-3 pt-2 bg-transparent">
                                    <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                                        <i class="material-icons opacity-10">person_add</i>
                                    </div>
                                    <div class="text-end pt-1">
                                        <p class="text-sm mb-0 text-capitalize ">Today Guest</p>
                                        <h4 class="mb-0 ">+ {{ $today }}</h4>
                                    </div>
                                </div>

                                <hr class="horizontal my-0 dark">
                                <div class="card-footer p-3">

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-body d-block overflow-auto">
                        <table class="table table-striped" id="dataIndex">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>Nomor Telepon</th>
                                    <th>Alamat</th>
                                    <th>Projek Mahantas</th>
                                    <th>Info Perumahan</th>
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
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>Nomor Telepon</th>
                                    <th>Alamat</th>
                                    <th>Projek Mahantas</th>
                                    <th>Info Perumahan</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>

                @include('components.layouts.footer')

            </div>

        </div>
    </div>
</x-admin>

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#dataIndex').DataTable({
                "paging": false,
                "info": false,
                "searching": false,
                "order": false
            });
        });
    </script>
@endpush
