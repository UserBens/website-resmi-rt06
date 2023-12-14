@extends('admin.layouts')

@section('konten')
    <div class="pb-3"><a href="{{ route('notulen.index') }}" class="btn btn-secondary">Kembali</a></div>

    <form action="{{ route('notulen.update', $notulen->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control form-control-sm" name="judul" id="judul" aria-describedby="helpId"
                placeholder="Judul Notulensi" value="{{ $notulen->judul }}">
        </div>

        {{-- <div class="mb-3">
            <label for="image" class="form-label">Gambar Postingan</label>
            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image"
                name="image">
            @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div> --}}

        <div class="mb-3">
            <label for="file" class="form-label">Upload File</label>
            <input class="form-control @error('file') is-invalid @enderror" type="file" id="file"
                name="file">
        </div>
        
        <div class="mb-3">
            <div class="row">
                <div class="col-auto">Tanggal Notulensi</div>
                <div class="col-auto"><input type="date" class="form-control form-control-sm" name="tgl_mulai"
                        placeholder="dd/mm/yy" value="{{ $notulen->tgl_mulai }}"></div>
            </div>
        </div>

        <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            <input id="body" type="hidden" name="body" value="{{ $notulen->body }}">
            <trix-editor input="body"></trix-editor>
            @error('body')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <button class="btn btn-primary" name="simpan" type="submit">Submit</button>
    </form>
@endsection
