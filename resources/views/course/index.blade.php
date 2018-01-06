<!DOCTYPE html>
<html>
<head>
	<title></title>
	{!! Html::style('creative/css/bootstrap.min.css') !!}
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset">
			<div class="span5">
				<table class="table table-striped table-condensed">
					<thead>
						{!! Form::open(['route'=>'course.index','method'=>'GET','class'=>'Class_name']) !!}
						{!! Form::text('course_code') !!}
						{!! Form::text('course_title') !!}

						{!! Form::submit('Submit', $attributes = array('class' => 'btn btn-info')) !!} 
						{!! Form::close() !!}
					<tr>
						<th>Course Code</th>
						<th>Course Title</th>
						<th>Course Hr</th>
						<th>Action</th>
					</tr>	
					</thead>
					<tbody>
						
						@foreach($alldata as $data)
						
					<tr>
						<td>{{$data->course_code}}</td>
						<td>{{$data->course_title}}</td>
						<td>{{$data->course_credite}}</td>
						<td><a href="{{Route('course.edit', $data->course_id)}}" class="btn btn-info">Edit</a>
						{!! Form::open(array('route' => ['course.destroy',$data->course_id],'class' => 'form-horizontal','method'=>'delete'))!!}

						{!! Form::hidden('id', $data->course_id) !!}
						{!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
						{!! Form::close() !!}
						</td>
					</tr>
					@endforeach
					</tbody>
				</table>
				{!! $alldata->render() !!}
			</div>
		</div>
		</div>
	</div>
</body>
</html>