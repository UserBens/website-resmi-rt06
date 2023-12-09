@extends('admin.layouts')

@section('konten')
    <p class="card-title">Notulen</p>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-11" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="pb-3">
        <form action="{{ route('notulen.index') }}" method="GET">
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="search" id="search-input" placeholder="Cari Notulen"
                    aria-label="Cari Notulen" aria-describedby="button-search" value="{{ $keyword ?? '' }}">
                <button class="btn btn-outline-secondary" type="submit" id="button-search">
                    <span class="mdi mdi-magnify"></span> Cari
                </button>
            </div>
        </form>
    </div>

    <div class="pb-3"><a href="{{ route('notulen.create') }}" class="btn btn-primary">+ Tambah Notulen</a></div>

    <div class="table-responsive">
        @if ($notulen->isEmpty())
            <h4 class="text-center">Tidak ada data yang sesuai dengan pencarian..</h4>
        @else
            <table class="table table-stripped">
                <thead>
                    <tr>
                        <th class="col-1">No</th>
                        <th class="col-2">Judul</th>
                        <th class="col-2">Tanggal Notulensi</th>
                        <th class="col-3">Dibuat Tanggal</th>
                        <th class="col-4">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($notulen as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->judul }}</td>
                            <td>{{ $item->tgl_mulai }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>
                                <a href='{{ route('notulen.edit', $item->id) }}' class="btn btn-sm btn-warning"><span
                                        class="mdi mdi-pencil"></span> Edit</a>

                                <form onsubmit="return confirm('Apakah Anda Yakin Ingin Menghapus Data?')"
                                    action="{{ route('notulen.destroy', $item->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-sm btn-danger" type="submit" name="submit"><span
                                            class="mdi mdi-trash-can"></span> Hapus
                                    </button>
                                </form>
                                <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop{{ $item->id }}">
                                    <span class="mdi mdi-eye-circle"></span> Lihat Notulen
                                </button>
                            </td>
                        </tr>
                        <div class="modal fade" id="staticBackdrop{{ $item->id }}" data-bs-backdrop="static"
                            data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content ">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Lihat Notulen</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        @if(isset($item->file) && pathinfo($item->file, PATHINFO_EXTENSION) === 'pdf')
                                            <iframe src="{{ asset('storage/' . $item->file) }}" style="width: 100%; height: 500px;" frameborder="0"></iframe>
                                        @else
                                            <p>No PDF file available</p>
                                        @endif
                                    </div>
                                    
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center mt-4">
                {{ $notulen->links('pagination::bootstrap-4') }}
            </div>
        @endif
    </div>
@endsection
