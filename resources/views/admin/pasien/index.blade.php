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
                                            <th class="wd-15p">Nama Pasien</th>
                                            <th class="wd-15p">Alamat</th>
                                            <th class="wd-15p">Telepon</th>
                                            <th class="wd-15p">Nama Rumah Sakit</th>
                                            <th class="wd-20p">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $i = 1;
                                        @endphp
                                        @foreach ($pasiens as $pasien)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{$pasien->nama_ps}}</td>
                                            <td>{{$pasien->alamat}}</td>
                                            <td>{{$pasien->tlp}}</td>
                                            <td>{{$pasien->rsid->nama_rs}}</td>
                                            <td>
                                                <a href="{{url ('admin/pasiens/edit/'.$pasien->id)}}"
                                                    class="btn btn-sm btn-success">Edit</a>
                                                <a href="{{url ('admin/pasiens/delete/'.$pasien->id)}}"
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

                        <form action="{{route ('store.pasien')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputRS">Nama Pasien</label>
                                <input type="text" name="nama_ps"
                                    class="form-control @error('nama_ps') is-invalid @enderror" id="exampleInputRS"
                                    aria-describedby="rsHelp" placeholder="Enter Nama Pasien">

                                @error('nama_ps')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputAlamat">Alamat</label>
                                <input type="text" name="alamat"
                                    class="form-control @error('alamat') is-invalid @enderror" id="exampleInputAlamat"
                                    aria-describedby="alamatlHelp" placeholder="Enter Alamat">

                                @error('alamat')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputTelpon">Telepon</label>
                                <input type="text" name="tlp" class="form-control @error('tlp') is-invalid @enderror"
                                    id="exampleInputTelpon" aria-describedby="telponHelp" placeholder="Enter Telepon">

                                @error('tlp')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputRSid">Rumah Sakit</label>
                                <select class="form-control select2" name="rumahsakit_id"
                                    data-placeholder="Choose Rumah Sakit">
                                    <option label="Choose Rumah Sakit"></option>
                                    @foreach($rumahsakits as $rs)
                                    <option value="{{$rs->id}}">{{$rs->nama_rs}}</option>
                                    @endforeach
                                </select>
                                @error('rumahsakit_id')
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