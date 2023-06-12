@extends('layouts.master')

@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Insert Data Jadwal</h3>
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
                        <form action="/vaccination-registrations/{{ $vaccination_registration->id }}" method="POST" id="demo-form2" data-parsley-validate
                            class="form-horizontal form-label-left">
                            @csrf
                            @method('PUT')
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Hari</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <select class="form-control" name="id_jadwal">
                                        @foreach($vaccination_schedules as $vaccination_schedule)
                                            @if(old('id_jadwal',$vaccination_registration->id_jadwal)===$vaccination_schedule->id )
                                                <option value="{{ $vaccination_schedule->id }}" selected>{{ $vaccination_schedule->hari }}</option>
                                            @else   
                                            <option value="{{ $vaccination_schedule->id }}">{{ $vaccination_schedule->hari }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama Anak</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <select class="form-control" name="id_anak">
                                        @foreach($children as $child)
                                            @if(old('id_anak',$vaccination_registration->id_anak)===$child->id )
                                                <option value="{{ $child->id }}" selected>{{ $child->nama }}</option>
                                            @else   
                                            <option value="{{ $child->id }}">{{ $child->nama }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Waktu daftar
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="first-name" value="{{ old('waktu_daftar', $vaccination_registration['waktu_daftar']) }}"
                                        placeholder="Masukkan waktu daftar"
                                        class="form-control @error('waktu_daftar') is-invalid @enderror" name="waktu_daftar">
                                    @error('waktu_daftar')
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
