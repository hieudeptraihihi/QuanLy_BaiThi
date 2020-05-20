@extends('templates.admin')
@section('main')

<div class="row">    
    <div class="row col-sm-12">
        <div class="col-sm-12">
            <h1 style="display: inline-block; color: #4C71DE;">Class Manager</h1>
            <ol class="breadcrumb float-xs-right float-sm-right">
                <li class="breadcrumb-item"><a href="resources/index3.html">Home</a></li>
                <li class="breadcrumb-item active">ClassManager</li>
            </ol>
        </div>
    </div>

    <div class="col-sm-12"> 
        <div class="col-sm-12">
            <table class="table table table-striped table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <td>Id Class</td>
                        <td>Name Class</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($classes as $key => $class)
                    <tr>
                        <td>{{ $class->id_class }}</td>
                        <td>{{ $class->name_class }}</td>
                        <td>
                            <a class="btn btn-primary" role="button" href="{{ asset('class') }}/{{ $class->id_class }}/edit?currentpage={{$currentpage}}">Edit</a>
                            <a class="btn btn-danger" role="button"href="{{ asset('class') }}/{{ $class->id_class }}/delete">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $classes->links() }}

            <hr>

            <h3 style="color: #4C71DE;">Add Class</h3>

            <form action="{{ asset('class/create') }}" method="post">
                @csrf
                <!-- <div class="form-control">
                    <label for="">Name Class</label>
                    <input type="text" name="name_class" required>
                </div> -->
                <div class="input-group mb-3">
                  <input type="text" name="name_class" class="form-control" placeholder="Input Name Class..." aria-label="Recipient's username" aria-describedby="basic-addon2">
                  <div class="input-group-append">
                    <input class="btn btn-primary" role="button" type="submit" value="Add Class">
                  </div>
                </div>
                <br>
            </form>
        </div>
    </div>
</div>
<!-- <script language="javascript">
    
</script> -->
@endsection