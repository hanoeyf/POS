@extends('layouts.template')
@section('content')
<div class="card">
    <div class="card-header">Data {{ $title }}</div>
    <div class="card-body">
        <table class="table table-bordered" id="table_data">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Aksi</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
@endsection
@push('js')
<script>
$(document).ready(function() {
    $('#table_data').DataTable({
        serverSide: true,
        ajax: "{{ url($route . '/list') }}",
        columns: [
            { data: 'id' },
            { data: 'nama' },
            { data: 'aksi', orderable: false, searchable: false }
        ]
    });
});
</script>
@endpush