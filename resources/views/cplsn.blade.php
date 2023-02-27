@extends('main')
@section('container')
    <div class="d-block px-5">
        <h2 class="text-center">CPL SNDikti</h2>
        <table class="table">
            <thead>
                <tr>
                    <th width="100px">Kode</th>
                    <th width="1000px">CPL SNDIKTI</th>
                    <th width="180px">CPL Prodi</th>
                    <th width="180px">Edit</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cplsn as $sn)
                <tr>
                    <td>{{ $sn->kode }}</td>
                    <td>{{ $sn->deskripsi }}</td>
                    <td>{{ $sn->cplp }}</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm">
                            <a class="text-white" href="{{ route('cplsn.edit',$sn->id) }}">Edit</a>
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection