@extends('admin.layouts')

@section('konten')
    <p class="card-title">Data Warga Kontrak</p>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-11" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('wargakontrak.update') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="d-flex flex-wrap justify-content-xl-between">
            <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                <i class="mdi mdi-account-box-multiple me-3 icon-lg text-danger"></i>
                <div class="d-flex flex-column justify-content-around">
                    <small class="mb-1 text-muted">Total Penduduk Kontrak</small>
                    <input type="text" class="form-control form-control-sm" name="jml_penduduk" id="jml_penduduk"
                        value="{{ old('jml_penduduk', $wargakontrak->jml_penduduk ?? '') }}">
                </div>
            </div>
            <!-- Bagian Total Warga Laki-Laki -->
            <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                <i class="mdi mdi-human-male me-3 icon-lg text-success"></i>
                <div class="d-flex flex-column justify-content-around">
                    <small class="mb-1 text-muted">Total Warga Laki-Laki</small>
                    <input type="text" class="form-control form-control-sm" name="jml_laki" id="jml_laki"
                        value="{{ old('jml_laki', $wargakontrak->jml_laki ?? '') }}">
                </div>
            </div>
            <!-- Bagian Total Warga Perempuan -->
            <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                <i class="mdi mdi-human-female me-3 icon-lg text-warning"></i>
                <div class="d-flex flex-column justify-content-around">
                    <small class="mb-1 text-muted">Total Warga Perempuan</small>
                    <input type="text" class="form-control form-control-sm" name="jml_perempuan" id="jml_perempuan"
                        value="{{ old('jml_perempuan', $wargakontrak->jml_perempuan ?? '') }}">
                </div>
            </div>

            <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                <i class="mdi mdi-account-group me-3 icon-lg text-dark"></i>
                <div class="d-flex flex-column justify-content-around">
                    <small class="mb-1 text-muted">Total KK</small>
                    <input type="text" class="form-control form-control-sm" name="jml_kk" id="jml_kk"
                        value="{{ old('jml_kk', $wargakontrak->jml_kk ?? '') }}">
                </div>
            </div>
        </div>

        {{-- <div class="d-flex flex-wrap justify-content-xl-between">
            <!-- Bagian Total KK -->
           
        </div> --}}


        <button class="btn btn-primary" name="simpan" type="submit">Submit</button>

    </form>
@endsection
