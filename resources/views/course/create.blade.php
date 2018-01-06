<!DOCTYPE html>
<html>
<head>
	<title>Add Course</title>
	{!! Html::style('creative/css/bootstrap.min.css') !!}
</head>
<body>
	<div class="container">
	<h4>Add Payment:</h4>
	{!! Form::open(array('route' => 'course.store','class' => 'form-horizontal'))!!}
	<div class="panel panel-default payment-form">
		<div class="panel-body form-horizontal mayment-form">
			<div class="form-group">
				{!! Form::label('Course_Title', 'Course Title', ['class' => 'col-sm-3 control-label']) !!}
				<div class="col-sm-9">
				{!! Form::text('course_title', $value = null, $attributes = array('class' => 'form-control','id' => 'Course_Title', 'required')) !!}
				</div>
			</div>

			<div class="form-group">
				{!! Form::label('Course_Code', 'Course Code', ['class' => 'col-sm-3 control-label']) !!}
				<div class="col-sm-9">
				{!! Form::text('course_code', $value = null, $attributes = array('class' => 'form-control','id' => 'Course_Code', 'required')) !!}
				</div>
			</div>

			<div class="form-group">
				{!! Form::label('Course_Credite', 'Course Credite', ['class' => 'col-sm-3 control-label']) !!}
				<div class="col-sm-9">
				{!! Form::text('course_credite', $value = null, $attributes = array('class' => 'form-control','id' => 'Course_Credite', 'required')) !!}
				</div>
			</div>
			{!! Form::submit('Submit', $attributes = array('class' => 'btn btn-info')) !!} 
		</div>
		
	</div>
	{!! Form::close() !!}	
	</div>
</body>
</html>