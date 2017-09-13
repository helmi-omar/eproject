@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Borang Tambah User Baru</div>

                <div class="panel-body">
                    
                    <form class="form-horizontal" method="POST" action="{{ route('storeUser') }}">
                        
                        @include('users/form')
                        {{ csrf_field() }}

                        
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
