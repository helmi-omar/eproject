@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Senarai Projects</div>

                <div class="panel-body">
                    <a href="{{ route('addProject') }}" class="btn btn-primary">
                        Tambah Project
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
