@extends('layouts.app')

@section('title-header', 'Tambah Data')

@section('title', 'Tambah Data')

@section('content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Tambah Data Perjalanan</h4>
        </div>
        <div class="card-content">
        <div class="card-body">
        <form action="/simpanPerjalanan" method="POST"  class="form form-horizontal" >
            {{ csrf_field() }}
            <div class="form-body">
                <div class="row">
                    <div class="col-md-2">
                        <label>Lokasi</label>
                    </div>
                    <div class="col-md-10">
                        <div class="form-group has-icon-left">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="lokasi" name="lokasi">
                                <div class="form-control-icon">
                                    <i data-feather="map-pin"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label>Tanggal</label>
                    </div>
                    <div class="col-md-10">
                        <div class="form-group has-icon-left">
                            <div class="position-relative">
                                <input type="date" class="form-control" placeholder="tanggal" name="tanggal">
                                <div class="form-control-icon">
                                    <i data-feather="calendar"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label>Jam</label>
                    </div>
                    <div class="col-md-10">
                        <div class="form-group has-icon-left">
                            <div class="position-relative">
                                <input type="time" class="form-control" placeholder="jam" name="jam">
                                <div class="form-control-icon">
                                    <i data-feather="clock"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label>Suhu</label>
                    </div>
                    <div class="col-md-10" style="padding-bottom: 20px">
                        <div class="form-group has-icon-left">
                            <div class="position-relative">
                                <input type="number" class="form-control" placeholder="suhu" name="suhu">
                                <div class="form-control-icon">
                                    <i data-feather="thermometer"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="col-12 d-flex justify-content-end ">
                    <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                    <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                </div>
            </div>
            </form>


        </div>
    </div>
</div>
@endsection
