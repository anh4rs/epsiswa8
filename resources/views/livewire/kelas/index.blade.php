<div>
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{ $subtitle }}</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Kelas</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        @if (session()->has('alert'))
                            <div class="alert alert-{{ session('alert') }} alert-dismissible mb-2">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                {{ session('msg') }}.
                            </div>
                        @endif
                        <div class="card">
                            <div class="card-header">
                                <a href="{{ url('kelas/add') }}" class="btn btn-primary btn-sm"> <i class="fas fa-plus">
                                    </i> &nbsp; {{ __('Kelas Baru') }}</a>
                                <div class="card-tools">
                                    {{ $kelases->links() }}
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">

                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">{{ __('#') }}</th>
                                            <th>{{ __('Nama Kelas') }}</th>
                                            <th>{{ __('Status') }}</th>
                                            <th style="width: 180px">{{ __('Action') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($kelases->count() >= 1)

                                            @foreach ($kelases as $index => $item)
                                                <tr>
                                                    <td>{{ $kelases->count() * ($kelases->currentPage() - 1) + $loop->iteration }}
                                                    </td>
                                                    <td>{{ $item->name }}</td>
                                                    <td><span
                                                            class="badge badge-{{ $item->status == 1 ? 'success' : 'secondary' }}">
                                                            {{ $item->status == 1 ? 'Aktif' : 'Non Aktif' }}
                                                        </span></td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <a href="{{ url('/kelas/' . $item->slug . '/edit') }}"
                                                                class="btn btn-primary btn-sm"><i
                                                                    class="fas fa-edit"></i>
                                                                {{ __('Edit') }}</a>
                                                            &nbsp;
                                                            <!-- Button trigger modal -->
                                                            <button wire:click="deleteId({{ $item->id }})"
                                                                type="button" class="btn btn-sm btn-danger"
                                                                data-toggle="modal"
                                                                data-target="#modalHapus{{ $item->id }}">
                                                                <i class="fas fa-trash-alt"></i>
                                                                &nbsp; Hapus
                                                            </button>

                                                            <!-- Modal -->
                                                            <!-- Modal -->
                                                            <div class="modal fade" data-backdrop="static"
                                                                id="modalHapus{{ $item->id }}" tabindex="-1"
                                                                role="dialog" aria-labelledby="exampleModalLabel"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered"
                                                                    role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title"
                                                                                id="exampleModalLabel">
                                                                                {{ __('Hapus') }}
                                                                            </h5>
                                                                            <button type="button" class="close"
                                                                                data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            {{ __('Apakah yakin untuk hapus : ') }}
                                                                            <strong> {{ $item->name }} </strong>
                                                                            {{ __('ini ?') }}
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-secondary btn-sm"
                                                                                data-dismiss="modal">{{ __('Keluar') }}</button>
                                                                            <button
                                                                                wite:click="delete({{ $item->slug }})"
                                                                                type="button"
                                                                                class="btn btn-sm btn-danger"> <i
                                                                                    class="fas fa-trash-alt"></i>
                                                                                &nbsp; Hapus</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            {{-- <button class="btn btn-danger btn-sm"><i
                                                                class="fas fa-trash-alt"></i>
                                                            {{ __('Hapus') }}</button> --}}
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="4" class="text-danger text-center">
                                                    <strong>
                                                        Data siswa, kosong!
                                                    </strong>
                                                </td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
    </div>
    @if ($kelases->count() >= 1)
    @endif
</div>
