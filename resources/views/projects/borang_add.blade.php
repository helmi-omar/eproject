@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Borang Tambah Project Baru</div>

                <div class="panel-body">
                    
                    {!! Form::open(['method' => 'POST', 'route' => 'storeProject', 'class' => 'form-horizontal']) !!}

                    @include('projects/form')

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
