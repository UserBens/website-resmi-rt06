@extends('admin.layouts')

@section('konten')
    <p class="card-title">Jumlah Pengunjung</p>
    <div class="d-flex border-md-right flex-grow-1 align-items-left justify-content-left p-3 item">
        <i class="mdi mdi-chart-line me-3 icon-lg text-primary"></i>
        <div class="d-flex flex-column justify-content-around">
            <small class="mb-1 text-muted">Visitor Statistic</small>
            <h5 class="me-2 mb-0 ">Pengunjung Halaman Website : {{ $uniqueVisitors }}</h5>
        </div>
    </div>
@endsection
