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
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach( $users as $item )

                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>
                                <a href="{{ route('editUser', $item->id) }}"  class="btn btn-xs btn-primary">Edit</a>

                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete-{{ $item->id }}">
                                    Delete
                                </button>

                                <!-- Modal -->
                                <form method="POST" action="{{ route('deleteUser', $item->id) }}">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="DELETE">
                                    
                                
                                    <div class="modal fade" id="delete-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Sahkan Hapus Data</h4>
                                        </div>
                                        <div class="modal-body">
                                            Adakah anda ingin hapuskan rekod {{ $item->name }}?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-danger">Confirm</button>
                                        </div>
                                        </div>
                                    </div>
                                    </div>

                                </form>
                            </td>
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
