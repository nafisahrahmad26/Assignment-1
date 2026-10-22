@extends('layouts.master')

@section('title', 'Contact - My Portfolio')

@section('content')
<div class="container py-5">
    <h1 class="fw-bold mb-4 text-center">Hubungi Saya</h1>
    
    <form action="#" method="POST" class="card p-4 shadow-sm border-0 col-md-8 mx-auto">
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" class="form-control" placeholder="Masukkan nama anda">
        </div>
        <div class="mb-3">
            <label class="form-label">E-mel</label>
            <input type="email" class="form-control" placeholder="nama@example.com">
        </div>
        <div class="mb-3">
            <label class="form-label">Mesej</label>
            <textarea class="form-control" rows="4" placeholder="Tulis mesej anda di sini..."></textarea>
        </div>
        <button type="button" class="btn btn-primary">Hantar Mesej</button>
    </form>
</div>
@endsection