@extends('layouts.master')

@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Insert Data Anak</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Form Anak</small></h2>
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
                        <form action="/children/{{ $child->id }}" method="POST" id="demo-form2" data-parsley-validate
                            class="form-horizontal form-label-left">
                            @csrf
                            @method('PUT')
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="nama" value="{{ old('nama', $child['nama']) }}"
                                        placeholder="Enter the name"
                                        class="form-control @error('nama') is-invalid @enderror" name="nama">
                                    @error('nama')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Tempat Tanggal
                                    Lahir
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="first-name" value="{{ old('ttl', $child['ttl']) }}"
                                        placeholder="Masukkan ttl" class="form-control @error('ttl') is-invalid @enderror"
                                        name="ttl">
                                    @error('ttl')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Umur
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="first-name" value="{{ old('umur', $child['umur']) }}"
                                        placeholder="Masukkan umur" class="form-control @error('umur') is-invalid @enderror"
                                        name="umur">
                                    @error('umur')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Jenis Kelamin</label>
                                <div class="col-md-6 col-sm-6 ">
                                    {{-- <select class="form-control" name="jenis_kelamin">
                                        
                                        @if (old('jenis_kelamin', $child['jenis_kelamin'] == 'laki-laki'))
                                        <option value="laki-laki" selected>Laki-laki</option>
                                        <option value="perempuan">Perempuan</option>
                                        @else
                                        <option value="laki-laki">Laki-laki</option>
                                        <option value="perempuan">Perempuan</option>
                                        @endif
                                    </select> --}}
                                    @if (old('jenis_kelamin', $child['jenis_kelamin'] == 'laki-laki'))
                                        <div class="radio">
                                            <label>
                                                <input type="radio" class="flat" checked name="jenis_kelamin"
                                                    value="laki-laki"> Laki-laki
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" class="flat" name="jenis_kelamin" value="perempuan">
                                                Perempuan
                                            </label>
                                        </div>
                                    @else
                                        <div class="radio">
                                            <label>
                                                <input type="radio" class="flat" name="jenis_kelamin" value="laki-laki">
                                                Laki-laki
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" class="flat" checked name="jenis_kelamin"
                                                    value="perempuan"> Perempuan
                                            </label>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama Ibu
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="first-name" value="{{ old('nama_ibu', $child['nama_ibu']) }}"
                                        placeholder="Masukkan nama ibu"
                                        class="form-control @error('nama_ibu') is-invalid @enderror" name="nama_ibu">
                                    @error('nama_ibu')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Berat Badan
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="number" id="first-name"
                                        value="{{ old('berat_badan', $child['berat_badan']) }}"
                                        placeholder="Masukkan berat badan"
                                        class="form-control @error('berat_badan') is-invalid @enderror" name="berat_badan">
                                    @error('berat_badan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Panjang Badan
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="number" id="first-name"
                                        value="{{ old('panjang_badan', $child['panjang_badan']) }}"
                                        placeholder="Masukkan panjang badan"
                                        class="form-control @error('panjang_badan') is-invalid @enderror"
                                        name="panjang_badan">
                                    @error('panjang_badan')
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
