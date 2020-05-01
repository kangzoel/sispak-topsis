@extends('layouts.dashboard')

@section('title', 'Daftar Hubungan')

@section('header.title', 'Daftar Hubungan')

@section('header.title.class', 'col-md-6')

@section('dashboard.content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <x-alert></x-alert>
            @if ($diseases->count() != 0)
                <div class="card">
                    <div class="card-header border-0">
                        <h3 class="card-title">Daftar Penyakit</h3>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-striped table-valign-middle">
                            <thead>
                                <tr>
                                    <th style="width: 60px">ID</th>
                                    <th>Nama Penyakit</th>
                                    <th style="width: 160px">Hubungan Gejala</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($diseases as $d)
                                    <tr>
                                        <td>{{ $d->id }}</td>
                                        <td>{{ $d->name }}</td>
                                        <td>
                                            <a href="/disease-symptom/{{ $d->id }}" class="btn btn-sm btn-primary mr-2">
                                                Lihat
                                            </a>
                                            <a href="/disease-symptom/{{ $d->id }}/edit" class="btn btn-sm btn-primary">
                                                Edit
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                {{ $diseases->links() }}
            @else
                <div class="callout callout-info">
                    <h5>Tidak ada penyakit</h5>

                    <p>Silakan tambahkan <a href="/disease/create">penyakit</a> terlebih dahulu.</p>
                    <a href="/disease/create" class="btn btn-primary text-white text-decoration-none">Tambahkan Penyakit</a>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
