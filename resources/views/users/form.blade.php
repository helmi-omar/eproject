<div class="form-group">
    <label for="username" class="col-sm-2 control-label">Username</label>
    <div class="col-sm-10">
        {!! Form::text('username', null, ['class' => 'form-control']) !!}
        {{ $errors->first('username') }}
    </div>
</div>

<div class="form-group">
    <label for="name" class="col-sm-2 control-label">Nama Penuh</label>
    <div class="col-sm-10">
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
        {{ $errors->first('name') }}
    </div>
</div>

<div class="form-group">
    <label for="email" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
        {!! Form::email('email', null, ['class' => 'form-control']) !!}
        {{ $errors->first('email') }}
    </div>
</div>

<div class="form-group">
    <label for="password" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
        {!! Form::password('password', ['class' => 'form-control']) !!}
        {{ $errors->first('password') }}
    </div>
</div>

<div class="form-group">
    <label for="password" class="col-sm-2 control-label">Password Confirmation</label>
    <div class="col-sm-10">
        {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
        {{ $errors->first('password_confirmation') }}
    </div>
</div>

<div class="form-group">
    <label for="phone" class="col-sm-2 control-label">Telefon</label>
    <div class="col-sm-10">
        {!! Form::text('phone', null, ['class' => 'form-control']) !!}
        {{ $errors->first('name') }}
    </div>
</div>

<div class="form-group">
    <label for="address" class="col-sm-2 control-label">Alamat</label>
    <div class="col-sm-10">
        {!! Form::textarea('address', null, ['class' => 'form-control']) !!}
        {{ $errors->first('address') }}
    </div>
</div>

<div class="form-group">
    <label for="role" class="col-sm-2 control-label">Role</label>
    <div class="col-sm-10">
        {!! Form::select('role', ['admin' => 'Admin', 'user' => 'User'], null, ['class' => 'form-control']) !!}
        {{ $errors->first('role') }}
    </div>
</div>

<div class="form-group">
    <label for="status" class="col-sm-2 control-label">Status</label>
    <div class="col-sm-10">
        {!! Form::select('status', ['pending' => 'Pending', 'active' => 'Active'], null, ['class' => 'form-control']) !!}
        {{ $errors->first('status') }}
    </div>
</div>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
    <button type="submit" class="btn btn-primary">Save</button>
    </div>
</div>