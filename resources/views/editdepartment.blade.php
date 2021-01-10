@extends('layout.app', ["current"=>"departments"])

@section('body')

    <div class="card border">
        <div class="card-body">
            <form action="/departments/{{$department['id']}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="departmentName">Department Name</label>
                    <input type="text" class="form-control" name="departmentName" id="departmentName" placeholder="Department" value="{{$department->name}}">
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Save</button>
                <button type="cancel" class="btn btn-danger btn-sm">Cancel</button>
            </form>
        </div>
    </div>
    
@endsection

