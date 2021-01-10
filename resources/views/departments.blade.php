@extends('layout.app', ["current"=>"departments"])

@section('body')


<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Departments Register</h5>
        
    @if (count($departments) > 0)
        <table class="table table-ordered table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($departments as $dep)
                <tr>
                    <td>{{$dep['id']}}</td>
                    <td>{{$dep['name']}}</td>
                    <td>
                        <a href="/departments/edit/{{$dep->id}}" class="btn btn-sm btn-primary">Edit</a>
                        <a href="/departments/delete/{{$dep->id}}" class="btn btn-sm btn-danger">Delete</a>
                    </td> 
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif

    </div>
    <div class="card-footer">
        <a href="/departments/new" class="btn btn-sm btn-secondary" role="button">New Department</a>
    </div>
</div>
    
    
@endsection