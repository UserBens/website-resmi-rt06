@extends('admin.layouts')

@section('konten')
    <div class="pb-3"><a href="{{ route('postingan.index') }}" class="btn btn-secondary">Kembali</a></div>

    <form action="{{ route('postingan.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control form-control-sm @error('judul') is-invalid @enderror" name="judul" id="judul" aria-describedby="helpId"
                placeholder="Judul Postingan" value="{{ old('judul') }}">
                @error('judul')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Gambar Postingan</label>
            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image"
                name="image">
            @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>


        <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            <input id="body" type="hidden" name="body" value="{{ old('body') }}">
            <trix-editor input="body"></trix-editor>
            @error('body')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>


        <button class="btn btn-primary" name="simpan" type="submit">Submit</button>
    </form>
@endsection
