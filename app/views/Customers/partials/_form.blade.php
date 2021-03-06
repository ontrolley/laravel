<div class="form-group">
    {{ Form::text('name', '', array('class' => 'form-control', 'placeholder' => "Name")) }}
</div>
 
<div class="form-group">
    {{ Form::text('lastname', '', array('class' => 'form-control', 'placeholder' => "Lastname")) }}
</div>

<div class="form-group">
    {{ Form::text('email', '', array('class' => 'form-control', 'placeholder' => "Email")) }}
</div>

<div class="form-group">
    {{ Form::password('password', array('class' => 'form-control', 'placeholder' => "Password")) }}
</div>
 
<div class="form-group">
    {{ Form::password('password_confirmation', array('class' => 'form-control', 'placeholder' => "Confirm password")) }}
</div>

<div class="form-group">
    {{ Form::text('phoneNumber', '', array('class' => 'form-control', 'placeholder' => "Phone number")) }} 
    <h5><small>At least 9 digits, allowed formats: XXXXXXXXX, +XXXXXXXXX, +XXX-XXXXXX, XXX-XXXXXX </small></h5>
</div>
 
<div class="form-group">
    {{ Form::textarea('comments', '', array('class' => 'form-control', 'placeholder' => "Your comment...")) }} 
</div>

<div class="form-group">
    {{ Form::file('document') }}
</div>
 
<div class="form-group">
    {{ Form::submit(('Add record'), array('class' => "btn btn-default btn-block")) }}
</div>