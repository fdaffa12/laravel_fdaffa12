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

                        <form action="{{Route('update.rs')}}" method="POST">
                            @csrf
                            <input type="hidden" value="{{$rumahsakit->id}}" name="id">
                            <div class="form-group">
                                <label for="exampleInputEmail">Rumah Sakit</label>
                                <input type="text" name="nama_rs"
                                    class="form-control @error('nama_rs') is-invalid @enderror" id="exampleInputEmail"
                                    aria-describedby="emailHelp" value="{{$rumahsakit->nama_rs}}">

                                @error('nama_rs')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail">Alamat</label>
                                <input type="text" name="alamat"
                                    class="form-control @error('alamat') is-invalid @enderror" id="exampleInputEmail"
                                    aria-describedby="emailHelp" value="{{$rumahsakit->alamat}}">

                                @error('alamat')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail">Emailt</label>
                                <input type="text" name="email"
                                    class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail"
                                    aria-describedby="emailHelp" value="{{$rumahsakit->email}}">

                                @error('email')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail">Telepon</label>
                                <input type="text" name="tlp" class="form-control @error('tlp') is-invalid @enderror"
                                    id="exampleInputEmail" aria-describedby="emailHelp" value="{{$rumahsakit->tlp}}">

                                @error('tlp')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Update Rumah Sakit</button>
                        </form>

                    </div>
                </div>
            </div>

        </div><!-- sl-page-title -->

    </div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->
@endsection