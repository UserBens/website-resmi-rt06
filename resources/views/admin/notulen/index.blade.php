@extends('admin.layouts')

@section('konten')
    <p class="card-title">Notulen</p>
    
    @if (session()->has('success'))
        <div class="alert alert-success col-lg-11" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <div class="pb-3"><a href="{{ route('notulen.create') }}" class="btn btn-primary">+ Tambah Notulen</a></div>
    <div class="table-responsive">
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th class="col-2">No</th>
                    <th class="col-5">Judul</th>
                    <th class="col-3">Dibuat Tanggal</th>
                    <th class="col-5">Aksi</th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach ($postingan as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->judul }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td>
                            <a href='{{ route('notulen.edit', $item->id) }}' class="btn btn-sm btn-warning">Edit</a>

                            <form onsubmit="return confirm('Apakah Anda Yakin Ingin Menghapus Data?')"
                                action="{{ route('notulen.destroy', $item->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('delete')
                                <button class="btn btn-sm btn-danger" type="submit" name="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach --}}
            </tbody>
        </table>
    </div>
@endsection
