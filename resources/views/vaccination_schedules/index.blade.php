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
                                        <th>Nama Bidan</th>
                                        <th>Kategori Vaksin</th>
                                        <th>Hari</th>
                                        <th>Tanggal</th>
                                        <th>Jam</th>
                                        <th>Kuota</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($vaccination_schedules as $key => $VaccinationSchedule)  
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $VaccinationSchedule->midwife->nama }}</td>
                                            <td>{{ $VaccinationSchedule->category->category }}</td>
                                            <td>{{ $VaccinationSchedule->hari }}</td>
                                            <td>{{ $VaccinationSchedule->tanggal }}</td>
                                            <td>{{ $VaccinationSchedule->jam }}</td>
                                            <td>{{ $VaccinationSchedule->kuota }}</td>
                                            <td>
                                                <a href="/vaccination-schedules/{{ $VaccinationSchedule['id'] }}/edit"><button class="btn btn-primary" type="button">Edit</button></a>
                                                <form action="/vaccination-schedules/{{ $VaccinationSchedule['id'] }}" method="post" class="d-inline">
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
