@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Borang Tambah User Baru</div>

                <div class="panel-body">
                    
                    <form class="form-horizontal" method="POST" action="{{ route('storeLokasi') }}">
                        
                        <div class="form-group">
                            <label for="nama" class="col-sm-2 control-label">Username</label>
                            <div class="col-sm-10">
                                <input type="text" name="username" class="form-control">
                                {{ $errors->first('username') }}
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label">Nama Penuh</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" class="form-control">
                                {{ $errors->first('name') }}
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="text" name="email" class="form-control">
                                {{ $errors->first('email') }}
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-sm-2 control-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" name="password" class="form-control">
                                {{ $errors->first('password') }}
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="phone" class="col-sm-2 control-label">Telefon</label>
                            <div class="col-sm-10">
                                <input type="text" name="phone" class="form-control">
                                {{ $errors->first('name') }}
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="address" class="col-sm-2 control-label">Alamat</label>
                            <div class="col-sm-10">
                                <textarea name="address" class="form-control"></textarea>
                                {{ $errors->first('address') }}
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="role" class="col-sm-2 control-label">Role</label>
                            <div class="col-sm-10">
                                <select name="role" class="form-control">
                                    <option value="user">User</option>
                                    <option value="admin">Admin</option>
                                </select>
                                {{ $errors->first('role') }}
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="status" class="col-sm-2 control-label">Status</label>
                            <div class="col-sm-10">
                                <select name="status" class="form-control">
                                    <option value="active">Active</option>
                                    <option value="pending">Pending</option>
                                    <option value="banned">Banned</option>
                                </select>
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
