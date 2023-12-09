@extends('admin.layouts')

@section('konten')
    <div class="pb-3"><a href="{{ route('proker.index') }}" class="btn btn-secondary">Kembali</a></div>

    <form action="{{ route('proker.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label for="nama program kerja" class="form-label">Nama Program Kerja</label>
            <input type="text" class="form-control form-control-sm @error('nama_proker') is-invalid @enderror"
                name="nama_proker" id="nama_proker" aria-describedby="helpId" placeholder="Nama Program Kerja"
                value="{{ old('nama_proker') }}">
            @error('nama_proker')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-4">
            <div class="row">
                <div class="col-auto">Tanggal Mulai</div>
                <div class="col-auto"><input type="date" class="form-control form-control-sm" name="tgl_mulai"
                        placeholder="dd/mm/yy" value="{{ old('tgl_mulai') }}"></div>

                <div class="col-auto">Tanggal Akhir</div>
                <div class="col-auto"><input type="date" class="form-control form-control-sm" name="tgl_akhir"
                        placeholder="dd/mm/yy" value="{{ old('tgl_akhir') }}"></div>
            </div>
        </div>

        <div class="mb-3">
            <label for="deskripsi_proker" class="form-label">Deskripsi Program Kerja</label>
            <input id="deskripsi_proker" type="hidden" name="deskripsi_proker" value="{{ old('deskripsi_proker') }}">
            <trix-editor input="deskripsi_proker"></trix-editor>
            @error('deskripsi_proker')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <button class="btn btn-primary" name="simpan" type="submit">Submit</button>
    </form>
@endsection
