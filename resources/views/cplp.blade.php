@extends('main')
@section('container')
    <div class="d-block px-5">
        <h2 class="text-center">CPL Prodi</h2>
        <div class="float-end my-2">
            <button type="button" class="btn btn-success" data-mdb-toggle="modal" data-mdb-target="#staticBackdrop2">Tambah CPL-Prodi</button>
            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                <div class="modal-dialog d-flex justify-content-center">
                    <div class="modal-content w-75">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel2">Tambah CPL-Prodi</h5>
                            <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-4">
                            <form action="{{ route('cplp.store') }}" method="POST">
                                @csrf
                                <!-- kode input -->
                                <div class="form-outline mb-4">
                                    <input type="text" id="kode" class="form-control" name="kode"/>
                                    <label class="form-label" for="kode">Kode</label>
                                </div>

                                <!-- deskripsi input -->
                                <div class="form-outline mb-4">
                                    <input type="text" id="deskripsi" class="form-control" name="deskripsi"/>
                                    <label class="form-label" for="deskripsi">CPL-Prodi</label>
                                </div>

                                <!-- Submit button -->
                                <button type="submit" class="btn btn-primary btn-block">Tambah</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th width="100px">Kode</th>
                    <th width="1000px">CPL Prodi</th>
                    <th width="180px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cplp as $p)
                <tr>
                    <td>{{ $p->kode }}</td>
                    <td>{{ $p->deskripsi }}</td>
                    <td>
                        <form action="{{ route('cplp.destroy',$p->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>    
@endsection