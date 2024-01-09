@extends('layouts.app')

@section('title', 'New Forms')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Form Pendaftaran</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">All Form Identity</a></div>
                    <div class="breadcrumb-item">Form Identity</div>
                </div>
            </div>

            <div class="section-body">

                <div class="card">
                    <form action="{{ route('form.store') }}" method="POST">
                        @csrf
                        <div class="card-header">
                            <h4>Identitas Diri</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nomor Identitas</label>
                                <input type="text"
                                    class="form-control @error('nomor_identitas')
                                    is-invalid
                                @enderror"
                                    name="nomor_identitas">
                                @error('nomor_identitas')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text"
                                    class="form-control @error('nama')
                                    is-invalid
                                @enderror"
                                    name="nama">
                                @error('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Tempat lahir</label>
                                <input type="text"
                                    class="form-control @error('tempat_lahir')
                                    is-invalid
                                @enderror"
                                    name="tempat_lahir">
                                @error('tempat_lahir')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date"
                                    class="form-control @error('tanggal_lahir')
                                    is-invalid
                                @enderror"
                                    name="tanggal_lahir">
                                @error('tanggal_lahir')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Agama</label>
                                <select class="form-control @error('agama') is-invalid @enderror" name="agama">
                                    <option value="" disabled selected>Pilih Agama</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Buddha">Buddha</option>
                                    <option value="Konghucu">Konghucu</option>
                                </select>
                                @error('agama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mb-0">
                                <label>Alamat</label>
                                <textarea class="form-control" data-height="150" name="alamat"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Nomor Telepon</label>
                                <input type="text"
                                    class="form-control @error('nomor_telepon')
                                    is-invalid
                                @enderror"
                                    name="nomor_telepon">
                                @error('nomor_telepon')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email"
                                    class="form-control @error('email')
                                    is-invalid
                                @enderror"
                                    name="email">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush
