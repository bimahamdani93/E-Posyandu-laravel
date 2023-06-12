@extends('layouts.master')

@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Registrasi</h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Data Registrasi Vaksin</h2>
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
                                        <th>Hari</th>
                                        <th>Nama Anak</th>
                                        <th>Hari</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($vaccination_registrations as $key => $VaccinationRegistration)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $VaccinationRegistration->schedule->hari }}</td>
                                            <td>{{ $VaccinationRegistration->child->nama }}</td>
                                            <td>{{ $VaccinationRegistration->waktu_daftar }}</td>
                                            <td>
                                                <a
                                                    href="/vaccination-registrations/{{ $VaccinationRegistration['id'] }}/edit"><button
                                                        class="btn btn-primary" type="button">Edit</button></a>
                                                <form
                                                    action="/vaccination-registrations/{{ $VaccinationRegistration['id'] }}"
                                                    method="post" class="d-inline">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="btn btn-danger border-0"
                                                        onclick="return confirm('Anda yakin akan menghapus data?')">Delete</button>
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
