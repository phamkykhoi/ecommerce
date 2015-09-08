{!! Form::open(
    array(
        'url' => 'upload', 
        'class' => 'form', 
        'novalidate' => 'novalidate', 
        'files' => true)) !!}
    <div class="form-group">
	    {!! Form::label('Product Image') !!}
	    {!! Form::file('image', null) !!}
	</div>

	<div class="form-group">
	    {!! Form::submit('Upload') !!}
	</div>
{!! Form::close() !!}