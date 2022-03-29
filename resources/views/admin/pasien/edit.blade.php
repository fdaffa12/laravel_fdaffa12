@extends('admin.layouts.master')
@section ('admin_content')
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <div class="sl-pagebody">
        <div class="row row-sm">

            <div class="col-md-8 m-auto">
                <div class="card">
                    <div class="card-header">Edit Rumah Sakit
                    </div>

                    <div class="card-body">
                        @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{session('success')}}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif

                        <form action="{{Route('update.pasien')}}" method="POST">
                            @csrf
                            <input type="hidden" value="{{$pasien->id}}" name="id">
                            <div class="form-group">
                                <label for="exampleInputPS">Nama Pasien</label>
                                <input type="text" name="nama_ps"
                                    class="form-control @error('nama_ps') is-invalid @enderror" id="exampleInputPS"
                                    aria-describedby="emailHelp" value="{{$pasien->nama_ps}}">

                                @error('nama_ps')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail">Alamat</label>
                                <input type="text" name="alamat"
                                    class="form-control @error('alamat') is-invalid @enderror" id="exampleInputEmail"
                                    aria-describedby="emailHelp" value="{{$pasien->alamat}}">

                                @error('alamat')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail">Telepon</label>
                                <input type="text" name="tlp" class="form-control @error('tlp') is-invalid @enderror"
                                    id="exampleInputEmail" aria-describedby="emailHelp" value="{{$pasien->tlp}}">

                                @error('tlp')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail">Rumah Sakit</label>
                                <select class="form-control select2" name="rumahsakit_id"
                                    data-placeholder="Choose Rumah Sakit">
                                    <option label="Choose Rumah Sakit"></option>
                                    @foreach($rumahsakits as $rumahsakit)
                                    <option value="{{$rumahsakit->id}}"
                                        {{$rumahsakit->id == $pasien->rumahsakit_id ? "selected":""}}>
                                        {{$rumahsakit->nama_rs}}
                                    </option>
                                    @endforeach
                                </select>
                                @error('rumahsakit_id')
                                <strong class="text-danger">{{$message}}</strong>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Update Pasien</button>
                        </form>

                    </div>
                </div>
            </div>

        </div><!-- sl-page-title -->

    </div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->
@endsection