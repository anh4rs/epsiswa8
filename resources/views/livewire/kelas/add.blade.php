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
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ url('/kelas') }}">Kelas</a></li>
                            <li class="breadcrumb-item active">Tambah Kelas</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">


                        <div class="card">
                            <div class="card-header">
                                <a href="{{ url('/kelas') }}" class="btn btn-outline-secondary btn-sm"><i
                                        class="fas fa-long-arrow-alt-left"></i> &nbsp; {{ __('Kembali') }}</a>
                            </div>
                            <form wire:submit.prevent="save">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="nama" class="col-sm-2 col-form-label">{{ __('Nama Kelas') }}
                                            <span class="text-danger">*</span></label>
                                        <div class="col-sm-6">
                                            <input type="text"
                                                class="form-control form-control-border @error('nama') is-invalid @enderror"
                                                name="nama" id="nama" wire:model='nama' autofocus>
                                            <div class="invalid-feedback">
                                                @error('nama')
                                                    {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="card-footer">

                                    <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-save">
                                        </i>
                                        {{ __(' Simpan') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
