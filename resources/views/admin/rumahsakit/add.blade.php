@extends('admin.layouts.master')
@section('category') active @endsection
@section ('admin_content')
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <div class="sl-pagebody">
        <div class="row row-sm">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">All Rumah Sakit
                    </div>

                    <div class="card-body">
                        <div class="card pd-20 pd-sm-40">
                            <h6 class="card-body-title">Basic Responsive DataTable</h6>
                            @if(session('RSupdate'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{session('RSupdate')}}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endif

                            @if(session('delete'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>{{session('delete')}}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endif
                            <div class="table-wrapper">
                                <table id="datatable1" class="table display responsive nowrap">
                                    <thead>
                                        <tr>
                                            <th class="wd-5p">S1</th>
                                            <th class="wd-15p">Nama Rumah Sakit</th>
                                            <th class="wd-15p">Alamat</th>
                                            <th class="wd-15p">Email</th>
                                            <th class="wd-15p">Telepon</th>
                                            <th class="wd-20p">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $i = 1;
                                        @endphp
                                        @foreach ($rumahsakits as $rumas)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{$rumas->nama_rs}}</td>
                                            <td>{{$rumas->alamat}}</td>
                                            <td>{{$rumas->email}}</td>
                                            <td>{{$rumas->tlp}}</td>
                                            <td>
                                                <a href="{{url ('admin/rumahsakits/edit/'.$rumas->id)}}"
                                                    class="btn btn-sm btn-success">Edit</a>
                                                <a href="{{url ('admin/rumahsakits/delete/'.$rumas->id)}}"
                                                    class="btn btn-sm btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div><!-- table-wrapper -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Add Rumah Sakit
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

                        <form action="{{route ('store.rs')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail">Nama Rumah Sakit</label>
                                <input type="text" name="nama_rs"
                                    class="form-control @error('nama_rs') is-invalid @enderror" id="exampleInputEmail"
                                    aria-describedby="emailHelp" placeholder="Enter Nama Rumah Sakit">

                                @error('nama_rs')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail">Alamat</label>
                                <input type="text" name="alamat"
                                    class="form-control @error('alamat') is-invalid @enderror" id="exampleInputEmail"
                                    aria-describedby="emailHelp" placeholder="Enter Alamat">

                                @error('alamat')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail">Email</label>
                                <input type="text" name="email"
                                    class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail"
                                    aria-describedby="emailHelp" placeholder="Enter Email">

                                @error('email')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail">Telepon</label>
                                <input type="text" name="tlp" class="form-control @error('tlp') is-invalid @enderror"
                                    id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Telepon">

                                @error('tlp')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </form>

                    </div>
                </div>
            </div>

        </div><!-- sl-page-title -->

    </div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->
@endsection