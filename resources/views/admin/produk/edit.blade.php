@extends('admin.layouts')

@section('konten')
    <div class="pb-3"><a href="{{ route('produk.index') }}" class="btn btn-secondary">Kembali</a></div>

    <form action="{{ route('produk.update', $produk->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="nama_produk" class="form-label">Judul</label>
            <input type="text" class="form-control form-control-sm" name="nama_produk" id="nama_produk" aria-describedby="helpId"
                placeholder="Nama Produk" value="{{ $produk->nama_produk }}">
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Gambar Produk</label>
            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image"
                name="image">
            @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>


        <div class="mb-3">
            <label for="deskripsi_produk" class="form-label">Deskripsi Produk</label>
            <input id="deskripsi_produk" type="hidden" name="deskripsi_produk" value="{{ $produk->deskripsi_produk }}">
            <trix-editor input="deskripsi_produk"></trix-editor>
            @error('deskripsi_produk')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <button class="btn btn-primary" name="simpan" type="submit">Submit</button>
    </form>
@endsection
