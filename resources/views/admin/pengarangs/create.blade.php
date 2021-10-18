@extends('layouts.admin', ['title' => 'Create'])

@section('contents')
    <div class="d-flex justify-content-center">

        <div class="col-md-6">

            <div class="card">
                <div class="card-title text-center">Tambah data pengarang</div>
                <div class="card-body">
                    <form action="{{ route('pengarang.store') }}" method="post">
                        @csrf
                        <div class="d-flex mb-4">
                            <div class="col-md-6">Nama Pengarang</div>
                            <div class="col-md-6"><input type="text" value="{{ old('nama_pengarang') }}" name="nama_pengarang" placeholder="Masukan Nama Pengarang" class="form-control" required></div>
                            @error('nama_pengarang')
                            {{ $message }}
                            @enderror
                        </div>

                        <div class="d-flex mb-4">
                            <div class="col-md-6">Email</div>
                            <div class="col-md-6"><input type="email" value="{{ old('email') }}" name="email" placeholder="Masukan Email" class="form-control">
                                @error('email')
                                {{ $message }}
                                @enderror
                            </div>

                        </div>
                        <div class="d-flex mb-4">
                            <div class="col-md-6">Telepon</div>
                            <div class="col-md-6"><input type="text" value="{{ old('telp') }}" name="telp" placeholder="masukan No Telepon" class="form-control"></div>
                            @error('telp')
                            {{ $message }}
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-danger">Tambah</button>
                    </form>
                </div>
            </div>

        </div>
    </div>

@endsection
