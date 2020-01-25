@if($errors->any())
    <div class="col-12 py-3">
        <div class="alert alert-{!!  $errors->first('status') !!} font-weight-bold">{!!  $errors->first('msg') !!}</div>
    </div>
@endif
