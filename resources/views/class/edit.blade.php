@extends('templates.admin')
@section('main')

<div class="row">    
    <div class="row col-sm-12">
        <div class="col-sm-12">
            <h1 style="display: inline-block;">Class Manager</h1>
            <ol class="breadcrumb float-xs-right float-sm-right">
                <li class="breadcrumb-item"><a href="resources/index3.html">Home</a></li>
                <li class="breadcrumb-item active">ClassManager</li>
            </ol>
        </div>
    </div>

    <div class="col-sm-12">
	<h2>Edit Class: {{ $class->name_class }}</h2>

		<form action="{{ asset('class') }}/{{ $class->id_class }}/edit" method="post">
			@csrf
			<div class="form-control">
				<label>Id Class</label>
				<input type="text" name="id_class" value="{{ $class->id_class }}" required>
			</div>
			<div class="form-control">
				<label>Name Class</label>
				<input type="text" name="name_class" value="{{ $class->name_class }}" required>
			</div>
			<input type="hidden" name="currentpage" value="{{$currentpage}}">
			<input class="btn btn-primary" role="button" type="submit" value="Update Class">
		</form>
	</div>
</div>
<!-- <script language="javascript">
    
</script> -->
@endsection