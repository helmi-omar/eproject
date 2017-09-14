
<div class="form-group">
    <label for="title" class="col-sm-2 control-label">Title Project</label>
    <div class="col-sm-10">
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
        {{ $errors->first('title') }}
    </div>
</div>
<div class="form-group">
    <label for="lokasi_id" class="col-sm-2 control-label">Lokasi</label>
    <div class="col-sm-10">
        {!! Form::select('lokasi_id', $lokasi, null, ['class' => 'form-control']) !!}
        {{ $errors->first('status') }}
    </div>
</div>
<div class="form-group">
    <label for="start_date" class="col-sm-2 control-label">Start Date</label>
    <div class="col-sm-10">
        {!! Form::date('start_date', null, ['class' => 'form-control']) !!}
        {{ $errors->first('start_date') }}
    </div>
</div>
<div class="form-group">
    <label for="end_date" class="col-sm-2 control-label">End Date</label>
    <div class="col-sm-10">
        {!! Form::date('end_date', null, ['class' => 'form-control']) !!}
        {{ $errors->first('end_date') }}
    </div>
</div>
<div class="form-group">
    <label for="status" class="col-sm-2 control-label">Status Project</label>
    <div class="col-sm-10">
        {!! Form::text('status', null, ['class' => 'form-control']) !!}
        {{ $errors->first('status') }}
    </div>
</div>
<div class="form-group">
    <label for="note" class="col-sm-2 control-label">Nota Project</label>
    <div class="col-sm-10">
        {!! Form::textarea('note', null, ['class' => 'form-control']) !!}
        {{ $errors->first('status') }}
    </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
    <button type="submit" class="btn btn-primary">Save</button>
    </div>
</div>