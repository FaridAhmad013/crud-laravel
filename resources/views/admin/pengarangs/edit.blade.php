@extends('layouts.admin', ['title' => 'Edit'])

@section('contents')
    <div class="d-flex justify-content-center">

        <div class="col-md-6">

            <div class="card">
                <div class="card-title">Tambah data pengarang</div>
                <div class="card-body">
                    <form action="{{ route('pengarang.update', $pengarang->id) }}" method="POST">
                        @csrf
                        @method('patch')
                        <div class="mb-4">
                            <label for="nama_pengarang" class="form-label">Nama Pengarang</label>
                            <input type="text" name="nama_pengarang" id="nama_pengarang" class="form-control" value="{{ $pengarang->nama_pengarang }}">
                        </div>

                        <div class="mb-4">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" class="form-control" value="{{ $pengarang->email }}">
                        </div>

                        <div class="mb-4">
                            <label for="no_telp" class="form-label">No Telepon</label>
                            <input type="number" name="no_telp" id="no_telp" class="form-control" value="{{ $pengarang->telp }}">
                        </div>

                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
            </div>

        </div>
    </div>

@endsection
