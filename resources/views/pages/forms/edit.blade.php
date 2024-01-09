@extends('layouts.app')

@section('title', 'Edit Form')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Form</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">All Form Identity</a></div>
                    <div class="breadcrumb-item">Form Identity</div>
                </div>
            </div>

            <div class="section-body">

                <div class="card">
                    <form action="{{ route('form.update', $form) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-header">
                            <h4>Edit Form</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nomor Identitas</label>
                                <input type="text"
                                    class="form-control @error('nomor_identitas')
                                    is-invalid
                                @enderror"
                                    name="nomor_identitas" value="{{ $form->nomor_identitas }}">
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
                                    name="nama" value="{{ $form->nama }}">
                                @error('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input type="text"
                                    class="form-control @error('tempat_lahir')
                                    is-invalid
                                @enderror"
                                    name="tempat_lahir" value="{{ $form->tempat_lahir }}">
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
                                    name="tanggal_lahir" value="{{ $form->tanggal_lahir }}">
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
                                    <option value="Islam" {{ $form->agama == 'Islam' ? 'selected' : '' }}>Islam</option>
                                    <option value="Kristen" {{ $form->agama == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                                    <option value="Hindu" {{ $form->agama == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                                    <option value="Buddha" {{ $form->agama == 'Buddha' ? 'selected' : '' }}>Buddha</option>
                                    <option value="Konghucu" {{ $form->agama == 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
                                </select>
                                @error('agama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mb-0">
                                <label>Alamat</label>
                                <textarea class="form-control" data-height="150" name="address">
                                    {{ $form->alamat }}
                                </textarea>
                            </div>
                            <div class="form-group">
                                <label>Nomor Telepon</label>
                                <input type="text"
                                    class="form-control @error('nomor_telepon')
                                    is-invalid
                                @enderror"
                                    name="nomor_telepon" value="{{ $form->nomor_telepon }}">
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
                                    name="email" value="{{ $form->email }}">
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
