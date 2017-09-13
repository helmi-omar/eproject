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

                    @if ( count( $users ) )

                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach( $users as $item )

                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                        </tr>

                        @endforeach
                        </tbody>

                    </table>

                    {{ $users->links() }}

                    @else

                    <div class="alert alert-info">
                        Tiada rekod users
                    </div>

                    @endif
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
