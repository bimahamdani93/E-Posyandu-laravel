@extends('layouts.master')

@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Data Bidan</h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Bidan</h2>
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
                                        <th>Alamat</th>
                                        <th>TTL</th>
                                        <th>Umur</th>
                                        <th>NIP</th>
                                        <th>Pendidikan</th>
                                        <th>No Telepon</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($midwives as $key => $midwife)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $midwife->nama }}</td>
                                            <td>{{ $midwife->alamat }}</td>
                                            <td>{{ $midwife->ttl }}</td>
                                            <td>{{ $midwife->umur }}</td>
                                            <td>{{ $midwife->nip }}</td>
                                            <td>{{ $midwife->education->jenjang }}</td>
                                            <td>{{ $midwife->no_telepon }}</td>
                                            <td>
                                                <div class="d-inline">
                                                    <button class="btn btn-primary border-0 px-2">
                                                        <a href="/midwives/{{ $midwife['id'] }}/edit"><i
                                                                class="fa fa-pencil-square-o fa-lg" aria-hidden="true"
                                                                style="color:white !important;"></i></a></button>
                                                    <form action="/midwives/{{ $midwife['id'] }}" method="post"
                                                        class="d-inline">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="btn btn-danger border-0"
                                                            style="padding-left:0.65rem; padding-right:0.65rem;"
                                                            onclick="return confirm('Anda yakin akan menghapus data?')"><i
                                                                class="fa fa-trash fa-lg" aria-hidden="true"></i></button>
                                                    </form>
                                                </div>
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
