@extends('admin.layouts')

@section('konten')
    <div class="pb-3"><a href="{{ route('pengurus.index') }}" class="btn btn-secondary">Kembali</a></div>

    <form action="{{ route('pengurus.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nama pengurus" class="form-label">Nama Pengurus</label>
            <input type="text" class="form-control form-control-sm @error('nama_pengurus') is-invalid @enderror"
                name="nama_pengurus" id="nama_pengurus" aria-describedby="helpId" placeholder="Nama Pengurus"
                value="{{ old('nama_pengurus') }}">
            @error('nama_pengurus')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Foto Pengurus</label>
            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image">
            @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="jabatan pengurus" class="form-label">Jabatan Pengurus</label>
            <input type="text" class="form-control form-control-sm @error('jabatan') is-invalid @enderror"
                name="jabatan" id="jabatan" aria-describedby="helpId" placeholder="Jabatan"
                value="{{ old('jabatan') }}">
            @error('jabatan')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <label for="file" class="form-label">Kategori Pengurus</label>
        <select class="form-select mb-3" aria-label="Default select example" name="kategori_pengurus">
            <option value="Pengurus RT">Pengurus RT</option>
            <option value="Pengurus Kartar">Pengurus Kartar</option>
            <option value="Pengurus PKK">Pengurus PKK</option>
            <option value="Pengurus Masjid">Pengurus Masjid</option>
        </select>


        <button class="btn btn-primary" name="simpan" type="submit">Submit</button>
    </form>
@endsection
