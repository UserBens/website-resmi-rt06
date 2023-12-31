@extends('admin.layouts')

@section('konten')
    <p class="card-title">Program Kerja</p>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-11" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="pb-3">
        <form action="{{ route('proker.index') }}" method="GET">
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="search" id="search-input" placeholder="Cari Proker"
                    aria-label="Cari Proker" aria-describedby="button-search" value="{{ $keyword ?? '' }}">
                <button class="btn btn-outline-secondary" type="submit" id="button-search">
                    <span class="mdi mdi-magnify"></span> Cari
                </button>
            </div>
        </form>
    </div>

    <div class="pb-3"><a href="{{ route('proker.create') }}" class="btn btn-primary">+ Tambah Proker</a></div>
    <div class="table-responsive">
        @if ($proker->isEmpty())
            <h4 class="text-center">Tidak ada data yang sesuai dengan pencarian..</h4>
        @else
            <table class="table table-stripped">
                <thead>
                    <tr>
                        <th class="col-1">No</th>
                        <th class="col-2">Nama Program Kerja</th>
                        <th class="col-2">Tanggal Mulai</th>
                        <th class="col-2">Tanggal Akhir</th>
                        {{-- <th class="col-2">Kategori</th> --}}
                        <th class="col-2">Dibuat Tanggal</th>
                        <th class="col-3">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($proker as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama_proker }}</td>
                            <td>{{ $item->tgl_mulai }}</td>
                            <td>{{ $item->tgl_akhir }}</td>
                            {{-- <td>{{ $item->kategori_pengurus }}</td> --}}
                            <td>{{ $item->created_at }}</td>
                            <td>
                                <a href='{{ route('proker.edit', $item->id) }}' class="btn btn-sm btn-warning"><span
                                        class="mdi mdi-pencil"></span> Edit</a>

                                <form onsubmit="return confirm('Apakah Anda Yakin Ingin Menghapus Data?')"
                                    action="{{ route('proker.destroy', $item->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-sm btn-danger" type="submit" name="submit"><span
                                            class="mdi mdi-trash-can"></span> Hapus
                                    </button>
                                </form>
                                <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop{{ $item->id }}">
                                    <span class="mdi mdi-eye-circle"></span> Lihat Proker
                                </button>
                            </td>
                        </tr>
                        <div class="modal fade" id="staticBackdrop{{ $item->id }}" data-bs-backdrop="static"
                            data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content ">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Lihat Deskripsi Proker</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>{!! $item->deskripsi_proker !!}</p>
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
                {{ $proker->links('pagination::bootstrap-4') }}
            </div>
        @endif
    </div>
@endsection
