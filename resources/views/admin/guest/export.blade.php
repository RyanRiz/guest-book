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
                                    <h2 class="font-weight-bolder mb-0">Guest Export</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">

                <div class="d-flex justify-content-end mb-1 pe-4">
                    <a class="btn btn-primary" href="{{ route('guest.index') }}" role="button">Back</a>
                </div>

                <div class="card">
                    <div class="card-body d-block overflow-auto">
                        <table class="table table-striped" id="dataGuest">
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
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Nomor Telepon</th>
                                <th>Alamat</th>
                                <th>Projek Mahantas</th>
                                <th>Info Perumahan</th>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        @include('components.layouts.footer')

    </div>

    @push('scripts')
        <script>
            $(document).ready(function() {
                $('#dataGuest').DataTable({
                    "paging": false,
                    "info": false,
                    "order": false,
                    dom: 'Bfrtip',
                    buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
                });
            });
        </script>
    @endpush

</x-admin>

