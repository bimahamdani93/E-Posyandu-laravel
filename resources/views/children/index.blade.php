@extends('layouts.master')

@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Data Anak</h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Anak</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_panel">
                        <div class="x_content">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>TTL</th>
                                        <th>Umur</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Nama Ibu</th>
                                        <th>Berat badan </th>
                                        <th>Panjang badan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($children as $key => $Child)  
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $Child['nama'] }}</td>
                                            <td>{{ $Child['ttl'] }}</td>
                                            <td>{{ $Child['umur'] }} tahun</td>
                                            <td>{{ $Child['jenis_kelamin'] }}</td>
                                            <td>{{ $Child['nama_ibu'] }}</td>
                                            <td>{{ $Child['berat_badan'] }} kg</td>
                                            <td>{{ $Child['panjang_badan'] }} cm</td>
                                            <td>
                                                <a href="/children/{{ $Child['id'] }}/edit"><button class="btn btn-primary" type="button">Edit</button></a>
                                                <form action="/children/{{ $Child['id'] }}" method="post" class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-danger border-0" onclick="return confirm('Anda yakin akan menghapus data?')">Delete</button>
                                                </form>
                                                
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
