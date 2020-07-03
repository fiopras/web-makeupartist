@extends('backend.master')

@section('title','Makeup Artist')

@section('container')

<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Good Morning Rizka!</h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- *************************************************************** -->
        <!-- Start First Cards -->
        <!-- *************************************************************** -->

        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Makeup Artist Table</h4>
                        <a href="{{ route('makeup-create') }}">
                        <button class="btn btn-sm btn-danger mb-3"><i class="fas fa-user-plus">Tambah Data</i> </button>
                    </a>

                    @if (session('status'))
                    <div class="col-lg-7 col-md-10 mt-3 alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif

                    @if (session('pesan'))
                    <div class="col-lg-7 col-md-10 mt-3 alert alert-success">
                        {{ session('pesan') }}
                    </div>
                    @endif

                    @if (session('notif'))
                    <div class="col-lg-7 col-md-10 mt-3 alert alert-danger">
                        {{ session('notif') }}
                    </div>
                    @endif

                        <div class="table-responsive">

                            <table class="table">


                                <thead class="bg-danger text-white">
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>Instagram</th>
                                        <th>Contact</th>
                                        <th>Kawasan</th>
                                        <th>Provinsi</th>
                                        <th>Gambar</th>
                                        <th>Aksi</th>

                                    </tr>
                                </thead>
                                @foreach ($muartis as $ma)
                                <tbody>
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $ma->nama }}</td>
                                        <td>{{ $ma->instagram }}</td>
                                        <td>{{ $ma->contact }}</td>
                                        <td>{{ $ma->kawasan }}</td>
                                        <td>{{ $ma->provinsi }}</td>
                                        <td>
                                            <img src="{{ url('img/artist') }}/{{ $ma->gambar }}" height="80" width="auto" alt="">

                                        </td>
                                        <td>
                                            <a href="{{ route('makeup-edit',$ma) }}">
                                            <button class="btn btn-sm btn-primary mb-3 d-inline"><i class="fas fa-edit">Edit </i> </button>
                                        </a>
                                            <form action="{{ route('makeup-destroy',$ma) }}" method="post">
                                                @method('delete')
                                                @csrf
                                            <button class="btn btn-sm btn-danger mb-3 d-inline" ><i class="fas fa-trash">Delete </i> </button>
                                            </form>
                                        </td>
                                    </tr>

                                </tbody>
                                @endforeach
                            </table>

                        </div>
                    </div>
                </div>
            </div>

            </div>
        </div>
        <!-- row -->






        </div>



@endsection
