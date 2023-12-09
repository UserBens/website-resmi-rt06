@extends('admin.layouts')

@section('konten')
    <div class="pb-3"><a href="{{ route('notulen.index') }}" class="btn btn-secondary">Kembali</a></div>

    <form action="{{ route('notulen.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control form-control-sm @error('judul') is-invalid @enderror" name="judul"
                id="judul" aria-describedby="helpId" placeholder="Judul NotuLensi" value="{{ old('judul') }}">
            @error('judul')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="file" class="form-label">Upload File</label>
            <input class="form-control @error('file') is-invalid @enderror" type="file" id="file"
                name="file">
        </div>

        <div class="mb-3">
            <div class="row">
                <div class="col-auto">Tanggal Notulensi</div>
                <div class="col-auto"><input type="date" class="form-control form-control-sm" name="tgl_mulai"
                        placeholder="dd/mm/yy" value="{{ old('tgl_mulai') }}"></div>
            </div>
        </div>


        <div class="mb-3">
            <label for="body" class="form-label">Hasil Notulensi</label>
            <input id="body" type="hidden" name="body" value="{{ old('body') }}">
            <trix-editor input="body"></trix-editor>
            @error('body')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>


        <button class="btn btn-primary" name="simpan" type="submit">Submit</button>
    </form>
@endsection
