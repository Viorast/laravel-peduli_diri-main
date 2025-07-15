@extends('layouts.app')

@section('title-header', 'Dashboard')

@section('title', 'Dashboard')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h4 class="card-title">Data Perjalanan</h4>

        <button type="button"><a href="/tambah_data" class="btn btn-primary">Tambah Data</a></button>
    </div>




    <div class="container " style="padding-top: 20px">
        <table id="myTable" class="table table-stripped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Lokasi</th>
                    <th>Tanggal</th>
                    <th>Jam</th>
                    <th>Suhu</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>


@endsection

@section('script')
{{-- Datatables --}}
<script
src="https://code.jquery.com/jquery-3.4.1.min.js"
integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script> --}}
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.5/datatables.min.js"></script>

<script>
   $(document).ready( function () {
       $('#myTable').DataTable({
       processing: true,
       serverSide: true,
       ajax: '{!! route('datatable') !!}',
       columns: [
           { data: 'id', name:'id'},
           { data: 'lokasi', name: 'lokasi' },
           { data: 'tanggal', name: 'tanggal' },
           { data: 'jam', name: 'jam' },
           { data: 'suhu', name: 'suhu' },
           { data: 'action', name: 'action', orderable: false, searchable: false}
       ]
   });
});


</script>
@endsection

