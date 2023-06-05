@extends('interface.layouts.main')
@section('main-panel-yield')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h3>Tabel Kategori Barang</h3>
                        {{-- <p class="card-description">
            Add class <code>.table-{color}</code>
          </p> --}}
                        <div class="table-responsive pt-3">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">ID Kategori Barang</th>
                                        <th scope="col">ID Data Gudang</th>
                                        <th scope="col">Jenis Barang</th>
                                        <th scope="col">Jenis Material</th>
                                        <th scope="col">Opsi</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    @php
                                        $no = 0;
                                    @endphp
                                    @foreach ($tb_kategoribarang as $data)
                                    <tr>
                                        <td>{{++$no}}</td>
                                        <td>
                                            {{$data->id_kategori}}
                                        </td>
                                        <td>
                                            {{$data->id_data_gudang }}
                                        </td>
                                        <td>
                                            {{$data->jenis_barang}}
                                        </td>
                                        <td>
                                            {{$data->jenis_material}}
                                        </td>
                                        <td>
                                            <a href="/edit_kategori/{{$data->id_kategori}}" class="btn btn-primary">Update</a>
                                            <a href="/delete_kategori/{{$data->id_kategori}}" class="btn btn-primary">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <br>
                        <a class="btn btn-primary" href="/create_kategori" role="button">Tambah Data</a>
                        <a class="btn btn-primary" href="/cetak_kategori" role="button">Cetak Data</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection