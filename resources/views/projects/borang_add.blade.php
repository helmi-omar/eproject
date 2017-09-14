@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Borang Tambah Project Baru</div>

                <div class="panel-body">
                    
                    <form class="form-horizontal" method="POST" action="{{ route('storeProject') }}">
                        <div class="form-group">
                            <label for="title" class="col-sm-2 control-label">Title Project</label>
                            <div class="col-sm-10">
                                <input type="text" name="title" class="form-control" placeholder="Title Project">
                                {{ $errors->first('title') }}
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama" class="col-sm-2 control-label">Lokasi</label>
                            <div class="col-sm-10">
                                <select name="lokasi_id" class="form-control">
                                    @foreach( $lokasi as $item )
                                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="start_date" class="col-sm-2 control-label">Start Date</label>
                            <div class="col-sm-10">
                                <input type="date" name="start_date" class="form-control">
                                {{ $errors->first('start_date') }}
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="end_date" class="col-sm-2 control-label">End Date</label>
                            <div class="col-sm-10">
                                <input type="date" name="end_date" class="form-control">
                                {{ $errors->first('end_date') }}
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="status" class="col-sm-2 control-label">Status Project</label>
                            <div class="col-sm-10">
                                <input type="text" name="status" class="form-control" placeholder="Status Project">
                                {{ $errors->first('status') }}
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="note" class="col-sm-2 control-label">Nota Project</label>
                            <div class="col-sm-10">
                                <input type="text" name="note" class="form-control" placeholder="Nota Project">
                                {{ $errors->first('status') }}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                        {{ csrf_field() }}

                        
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
