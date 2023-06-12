@extends('layouts.master')

@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Data Category Vaccine</h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Category Vaccine</h2>
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
                                        <th>Category</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- yang dilooping array yang dikirim dari controller --}}
                                    {{-- setiap satu data direpresentasikan ke key --}}
                                    @foreach ($category_vaccines as $key => $categoryVaccine)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $categoryVaccine['category'] }}</td>
                                            <td>
                                                <a href="/category-vaccines/{{ $categoryVaccine['id'] }}/edit"><button
                                                        class="btn btn-primary" type="button">Edit</button></a>
                                                <form action="/category-vaccines/{{ $categoryVaccine['id'] }}"
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
