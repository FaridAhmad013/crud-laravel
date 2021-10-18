@extends('layouts.admin')
@section('contents')
    <div class="d-flex justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-title text-center"><h3> Show Data {{ $pengarang->nama_pengarang }}</h3></div>

                <div class="card-body">
                    <div class="mb-4">
                    <label for="nama_pengarang" class="form-label">Nama Pengarang</label>
                    <p>
                        {{ $pengarang->nama_pengarang }}
                    </p>
                    </div>

                <div class="mb-4">
                    <label for="email" class="form-label"> Email</label>
                        <p>
                            {{ $pengarang->email }}
                        </p>

                </div>

                <div class="mb-4">
                    <label for="no_telp" class="form-label"> No Telepon</label>
                        <p>
                            {{ $pengarang->telp }}
                        </p>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
