@extends('layouts.app')

@section('content')

{{-- HERO --}}
<div class="hero mb-5">
    <h1 class="fw-bold">{{ $heading }}</h1>
    <p class="lead">{{ $description }}</p>
    <a href="#" class="btn btn-custom btn-lg mt-3">Lihat Jadwal</a>
</div>

{{-- FITUR --}}
<div class="row text-center">
    @foreach($features as $f)
    <div class="col-md-4 mb-4">
        <div class="card feature-card p-4 shadow-sm">
            <h4 class="fw-bold">{{ $f['title'] }}</h4>
            <p class="text-muted">{{ $f['desc'] }}</p>
        </div>
    </div>
    @endforeach
</div>

{{-- JADWAL --}}
<div class="mt-5">
    <h3 class="text-center mb-4 fw-bold">Jadwal Keberangkatan</h3>

    <div class="table-responsive">
        <table class="table table-hover text-center shadow-sm">
            <thead style="background: #0072ff; color: white;">
                <tr>
                    <th>Tujuan</th>
                    <th>Jam</th>
                    <th>Jenis</th>
                </tr>
            </thead>
            <tbody>
                @foreach($schedules as $s)
                <tr>
                    <td>{{ $s['tujuan'] }}</td>
                    <td>{{ $s['jam'] }}</td>
                    <td>
                        <span class="badge bg-success">
                            {{ $s['jenis'] }}
                        </span>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection