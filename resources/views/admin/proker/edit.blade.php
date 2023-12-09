@extends('admin.layouts')

@section('konten')
    <div class="pb-3"><a href="{{ route('proker.index') }}" class="btn btn-secondary">Kembali</a></div>

    <form action="{{ route('proker.update', $proker->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="nama proker" class="form-label">Nama Proker</label>
            <input type="text" class="form-control form-control-sm @error('nama_proker') is-invalid @enderror"
                name="nama_proker" id="nama_proker" aria-describedby="helpId" placeholder="Nama Proker"
                value="{{ $proker->nama_proker }}">
            @error('nama_proker')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        {{-- <div class="mb-3">
            <label for="image" class="form-label">Foto Pengurus</label>
            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image">
            @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div> --}}

        {{-- <div class="mb-3">
            <label for="jabatan pengurus" class="form-label">Jabatan Pengurus</label>
            <input type="text" class="form-control form-control-sm @error('jabatan') is-invalid @enderror"
                name="jabatan" id="jabatan" aria-describedby="helpId" placeholder="Jabatan"
                value="{{ $pengurus->jabatan }}">
            @error('jabatan')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div> --}}

        {{-- <label for="file" class="form-label">Kategori Pengurus</label>
        <select class="form-select mb-3" aria-label="Default select example" name="kategori_pengurus" value="{{ $pengurus->kategori_pengurus }}">
            <option value="Pengurus RT">Pengurus RT</option>
            <option value="Pengurus Kartar">Pengurus Kartar</option>
        </select> --}}

        <div class="mb-4">
            <div class="row">
                <div class="col-auto">Tanggal Mulai</div>
                <div class="col-auto"><input type="date" class="form-control form-control-sm" name="tgl_mulai"
                        placeholder="dd/mm/yy" value="{{ $proker->tgl_mulai }}"></div>

                <div class="col-auto">Tanggal Akhir</div>
                <div class="col-auto"><input type="date" class="form-control form-control-sm" name="tgl_akhir"
                        placeholder="dd/mm/yy" value="{{ $proker->tgl_akhir }}"></div>
            </div>
        </div>

        <div class="mb-3">
            <label for="deskripsi_proker" class="form-label">Deskripsi Program Kerja</label>
            <input id="deskripsi_proker" type="hidden" name="deskripsi_proker" value="{{ $proker->deskripsi_proker }}">
            <trix-editor input="deskripsi_proker"></trix-editor>
            @error('deskripsi_proker')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>


        <button class="btn btn-primary" name="simpan" type="submit">Submit</button>
    </form>
@endsection
