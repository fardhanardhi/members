<div class="row">
    <div style="float: none; margin-right: auto; margin-left: auto;" class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <div class="form-group">
            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'text-center form-control')) !!}
        </div>
    </div>
</div>
<div class="row">
    <div style="float: none; margin-right: auto; margin-left: auto;" class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <div class="form-group">
            {!! Form::email('email', null, array('placeholder' => 'Email','class' => 'text-center form-control')) !!}
        </div>
    </div>
</div>
<div class="row">
    <div style="float: none; margin-right: auto; margin-left: auto;" class="col-xs-12 col-sm-12 col-md-6 col-lg-6 text-center">
            <button type="submit" class="btn btn-single btn-primary">Submit</button>
    </div>
</div>