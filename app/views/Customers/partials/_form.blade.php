<div class="form-group">
    {{ Form::label('name', 'Name') }}
    {{ Form::text('name', '', array('class' => 'form-control')) }}
</div>
 
<div class="form-group">
    {{ Form::label('email', 'E-pasts:') }}
    {{ Form::text('email', '', array('class' => 'form-control')) }}
</div>
 
<div class="form-group">
    {{ Form::label('phoneNumber', 'Phone') }}
    {{ Form::text('phoneNumber', '', array('class' => 'form-control')) }} 
    <h5><small>At least 9 digits, allowed formats: XXXXXXXXX, +XXXXXXXXX, +XXX-XXXXXX, XXX-XXXXXX </small></h5>
</div>
 
<div class="form-group">
    {{ Form::label('comments', 'Comments:') }}
    {{ Form::textarea('comments', '', array('class' => 'form-control')) }} 
</div>

<div class="form-group">
    {{ Form::file('document') }}
</div>
 
<div class="form-group">
    {{ Form::submit(('Add record'), array('class' => "btn btn-primary")) }}
</div>