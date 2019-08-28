@extends('layouts.admin')

@section('content')
     <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
     <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">

<div class="card">
<div class="card-body">
     <h3>Departments</h3>
     <button type="submit" class="btn btn-primary float-right" ><a href="/departments/create" class="text-light"> Add Department</a></button>
          <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                         <tr>
                              <th>ID</th>
                              <th>Department Name</th>
                              <th>Code</th>
                              <th>credit</th>
                              <th>year</th>
                              <th>description</th>
                              <th colspan="3">Actions</th>
                         </tr>
                    </thead>
                    <tbody>
                         @foreach ($departments as $department)
                         <tr>
                                   <td>{{$department->id}}</td>
                                   <td>{{$department->name}}</td>
                                   <td>{{$department->code}}</td>
                                   <td>{{$department->credit}}</td>
                                   <td>{{$department->year}}</td>
                                   <td>{{$department->description}}</td>
                                   <td><a href="/departments/{{$department->id}}/edit" class="btn btn-primary">Edit</a></td>
                                   <td> <form action="{{ route('departments.destroy', $department->id)}}" method="post">
                                   @csrf
                                   @method('DELETE')
                                   <button class="btn btn-danger" type="submit">Delete</button>
                                 </form> </td>
                         </tr>

                         @endforeach

                    </tbody>
                    </table>
                    
</div>
</div>
     

@endsection