@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Borang Kemaskini</div>

                <div class="panel-body">
                    
                    {!! Form::model( $project, ['method' => 'PATCH', 'route' => ['updateProject', $project->id], 'class' => 'form-horizontal']) !!}

                    @include('projects/form')

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
