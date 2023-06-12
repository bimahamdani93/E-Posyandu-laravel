@extends('layouts.master')

@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Edit Data Jadwal</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Form Jadwal</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form action="/vaccination-schedules/{{ $vaccination_schedule->id }}" method="POST" id="demo-form2" data-parsley-validate
                            class="form-horizontal form-label-left">
                            @csrf
                            @method('PUT')
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Kategori</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <select class="form-control" name="id_kategori">
                                        @foreach($category_vaccines as $category_vaccine)
                                            @if(old('id_kategori',$vaccination_schedule->id_kategori)==$category_vaccine->id )
                                                <option value="{{ $category_vaccine->id }}" selected>{{ $category_vaccine->category }}</option>
                                            @else   
                                            <option value="{{ $category_vaccine->id }}">{{ $category_vaccine->category }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama Bidan</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <select class="form-control" name="id_bidan">
                                        @foreach($midwifes as $midwife)
                                            @if(old('id_bidan',$vaccination_schedule->id_bidan)===$midwife->id )
                                                <option value="{{ $midwife->id }}" selected>{{ $midwife->nama }}</option>
                                            @else   
                                            <option value="{{ $midwife->id }}">{{ $midwife->nama }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Hari
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="nama" value="{{ old('hari', $vaccination_schedule['hari']) }}"
                                        placeholder="masukkan hari"
                                        class="form-control @error('hari') is-invalid @enderror" name="hari">
                                    @error('hari')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Tanggal
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="first-name" value="{{ old('tanggal', $vaccination_schedule['tanggal']) }}"
                                        placeholder="Masukkan tanggal" class="form-control @error('tanggal') is-invalid @enderror"
                                        name="tanggal">
                                    @error('tanggal')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Jam
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="first-name" value="{{ old('jam', $vaccination_schedule['jam']) }}"
                                        placeholder="Masukkan jam" class="form-control @error('jam') is-invalid @enderror"
                                        name="jam">
                                    @error('jam')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Kuota
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="number" id="first-name" value="{{ old('kuota', $vaccination_schedule['kuota']) }}"
                                        placeholder="Masukkan panjang badan"
                                        class="form-control @error('kuota') is-invalid @enderror" name="kuota">
                                    @error('kuota')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-3">
                                    <button class="btn btn-danger" type="reset">Reset</button>
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
