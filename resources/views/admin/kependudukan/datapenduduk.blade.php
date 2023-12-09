@extends('admin.layouts')

@section('konten')
    <p class="card-title">Data Penduduk</p>
   
    @if (session()->has('success'))
        <div class="alert alert-success col-lg-11" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('datapenduduk.update') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="d-flex flex-wrap justify-content-xl-between">
            <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                <i class="mdi mdi-account-box-multiple me-3 icon-lg text-danger"></i>
                <div class="d-flex flex-column justify-content-around">
                    <small class="mb-1 text-muted">Total Penduduk</small>
                    <input type="text" class="form-control form-control-sm" name="jml_penduduk" id="jml_penduduk"
                        value="{{ old('jml_penduduk', $datapenduduk->jml_penduduk ?? '') }}">
                </div>
            </div>
            <!-- Bagian Total Warga Laki-Laki -->
            <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                <i class="mdi mdi-human-male me-3 icon-lg text-success"></i>
                <div class="d-flex flex-column justify-content-around">
                    <small class="mb-1 text-muted">Total Warga Laki-Laki</small>
                    <input type="text" class="form-control form-control-sm" name="jml_laki" id="jml_laki"
                        value="{{ old('jml_laki', $datapenduduk->jml_laki ?? '') }}">
                </div>
            </div>
            <!-- Bagian Total Warga Perempuan -->
            <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                <i class="mdi mdi-human-female me-3 icon-lg text-warning"></i>
                <div class="d-flex flex-column justify-content-around">
                    <small class="mb-1 text-muted">Total Warga Perempuan</small>
                    <input type="text" class="form-control form-control-sm" name="jml_perempuan" id="jml_perempuan"
                        value="{{ old('jml_perempuan', $datapenduduk->jml_perempuan ?? '') }}">
                </div>
            </div>
        </div>

        <div class="d-flex flex-wrap justify-content-xl-between">
            <!-- Bagian Total KK -->
            <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                <i class="mdi mdi-account-group me-3 icon-lg text-dark"></i>
                <div class="d-flex flex-column justify-content-around">
                    <small class="mb-1 text-muted">Total KK</small>
                    <input type="text" class="form-control form-control-sm" name="jml_kk" id="jml_kk"
                        value="{{ old('jml_kk', $datapenduduk->jml_kk ?? '') }}">
                </div>
            </div>
            <!-- Bagian Total KK Kontrak -->
            <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                <i class="mdi mdi-account-group me-3 icon-lg text-dark"></i>
                <div class="d-flex flex-column justify-content-around">
                    <small class="mb-1 text-muted">Total KK Kontrak</small>
                    <input type="text" class="form-control form-control-sm" name="jml_kk_kontrak" id="jml_kk_kontrak"
                        value="{{ old('jml_kk_kontrak', $datapenduduk->jml_kk_kontrak ?? '') }}">
                </div>
            </div>
            <!-- Bagian Total KK Kos -->
            <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                <i class="mdi mdi-account-group me-3 icon-lg text-dark"></i>
                <div class="d-flex flex-column justify-content-around">
                    <small class="mb-1 text-muted">Total KK Kos</small>
                    <input type="text" class="form-control form-control-sm" name="jml_kk_kos" id="jml_kk_kos"
                        value="{{ old('jml_kk_kos', $datapenduduk->jml_kk_kos ?? '') }}">
                </div>
            </div>
        </div>


        <button class="btn btn-primary" name="simpan" type="submit">Submit</button>

    </form>
@endsection
