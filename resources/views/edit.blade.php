@extends('main')
@section('container')
<h3 class="text-center p-2">Pilih CPL Prodi yang sesuai dengan CPLSNDikti</h3>
<div class="d-flex mb-3 mt-3">

    <h6>CPLSNDikti: {{ $cplsn->deskripsi }}</h6>
</div>
<form action="{{ route('cplsn.update', $cplsn->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="d-flex mb-3 float-right">
        <select class="selectpicker" multiple title="Kode" data-size="6" name="cplp[]">
            @foreach ($cplp as $p)
                <option value="{{ $p->kode }}">{{ $p->kode }}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-primary">Edit</button>
    </div>
    <!-- Submit button -->
    
</form>
<table class="table">
    <h4>CPL Prodi</h4>
    <thead>
        <th>Kode</th>
        <th>Deskripsi</th>
    </thead>
    <tbody>
        @foreach ($cplp as $p)
        <tr>
            <td>{{ $p->kode }}</td>
            <td>{{ $p->deskripsi }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection