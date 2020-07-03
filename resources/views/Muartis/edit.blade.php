@extends('backend.master')

@section('title','Edit Data')

@section('container')

<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h3 class="page-title text-truncate text-dark font-weight-medium ">Edit Data</h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">

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


<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit</h4>
                <form action="{{ route('makeup-update',$muartis) }}" method="post">
                    @csrf
                    @method('patch')
                    <div class="form-body">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama" value="{{ $muartis->nama }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="instagram">Instagram</label>
                                    <input type="text" name="instagram" id="instagram" class="form-control" placeholder="Masukkan Instagram" value="{{ $muartis->instagram }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="contact">Contact</label>
                                    <input type="text" name="contact" id="contact" class="form-control" placeholder="Masukkan Nomor Tlp" value="{{ $muartis->contact }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="kawasan">Kawasan</label>
                                    <input type="text" name="kawasan" id="kawasan" class="form-control" placeholder="Masukkan Kawasan" value="{{ $muartis->kawasan }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="provinsi">Provinsi</label>
                                    <input type="text" name="provinsi" id="provinsi" class="form-control" placeholder="Masukkan Provinsi" value="{{ $muartis->provinsi }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="gambar">Gambar</label>
                                    <input type="file" name="gambar" id="gambar" class="form-control"  >
                                </div>
                            </div>
                        </div>



                    <div class="form-actions">
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</div>


@endsection
