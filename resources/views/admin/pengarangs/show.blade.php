@extends('layouts.admin', ['title' => $pengarang->nama_pengarang])
@section('contents')
    <div class="d-flex justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center"><h3> Detail Data {{ $pengarang->nama_pengarang }}</h3></div>

                <div class="card-body">

                    <div class="mb-4">
                    <label for="nama_pengarang" class="form-label">Nama Pengarang</label>
                    <p>
                        {{ $pengarang->nama_pengarang }}
                    </p>
                    </div>

                <div class="mb-4">
                    <label for="email" class="form-label"> Email Pengarang</label>
                        <p>
                            {{ $pengarang->email }}
                        </p>

                </div>

                <div class="mb-4">
                    <label for="no_telp" class="form-label"> Nomor Telepon Pengarang</label>
                        <p>
                            {{ $pengarang->telp }}
                        </p>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
