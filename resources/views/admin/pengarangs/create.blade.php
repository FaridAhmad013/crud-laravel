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
                            <div class="col-md-6"><input type="text" name="nama_pengarang" placeholder="Masukan Nama Pengarang" class="form-control" required></div>
                        </div>

                        <div class="d-flex mb-4">
                            <div class="col-md-6">Email</div>
                            <div class="col-md-6"><input type="email" name="email" placeholder="Masukan Email" class="form-control"></div>
                        </div>
                        <div class="d-flex mb-4">
                            <div class="col-md-6">Telepon</div>
                            <div class="col-md-6"><input type="text" name="telp" placeholder="masukan No Telepon" class="form-control"></div>
                        </div>

                        <button type="submit" class="btn btn-danger">Tambah</button>
                    </form>
                </div>
            </div>

        </div>
    </div>

@endsection
