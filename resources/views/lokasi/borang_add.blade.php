@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Borang Tambah Lokasi Baru</div>

                <div class="panel-body">
                    
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label for="nama" class="col-sm-2 control-label">Nama Lokasi</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama" class="form-control" placeholder="Nama Lokasi">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                        
                        
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
