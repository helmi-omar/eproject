@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Senarai Users</div>

                <div class="panel-body">
                    <a href="{{ route('addUser') }}" class="btn btn-primary">
                        Tambah User
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
