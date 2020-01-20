@extends('layouts.studentLayout')
@section('content')


    <div class="container-fluid">
    	<h2 class="alert alert-primary">Laravel 6 CRUD</h2>

    			 @if(Session::has('flash_message_error'))
                    <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button> 
                            <strong>{!! session('flash_message_error') !!}</strong>
                    </div>
                    @endif
                    @if(Session::has('flash_message_success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button> 
                            <strong>{!! session('flash_message_success') !!}</strong>
                    </div>
                    @endif

      <div class="row">
      	<div class="col-md-12 text-left">
      	<a href="/create" class="btn btn-info">Add New Student</a>
      	<a href="{{ url('/logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="btn btn-light text-right" style="float: right;">logout</a>
      	<form id="logout-form" method="POST" action="{{route('logout')}}" style="display: none;">
      		@csrf
      	</form>
      	</div>
      </div>
		
		<table id="dtstudent" class="table table-primary table-hover " cellspacing="0" width="100%">
		  <thead>
		    <tr class="bg-info">
		      <th class="th-sm">#
		      </th>
		      <th class="th-sm">Name
		      </th>
		      <th class="th-sm">Last Name
		      </th>
		      <th class="th-sm">Gender
		      </th>
		      <th class="th-sm">Phone
		      </th>
		      <th class="th-sm">Address
		      </th>
		      <th class="th-sm">City
		      </th>
		      <th class="th-sm">Country
		      </th>
		      <th class="th-sm">Actions</th>
		    </tr>
		  </thead>
		  <tbody>
		  	@foreach($students as $key=>$student)
		    <tr>
		      <td>{{++$key}}</td>
		      <td>{{$student->firstname}}</td>
		      <td>{{$student->lastname}}</td>
		      <td>{{$student->gender}}</td>
		      <td>{{$student->phone}}</td>
		      <td>{{$student->address}}</td>
		      <td>{{$student->city}}</td>
		      <td>{{$student->country}}</td>
		      <td>
		      	<a href="/edit/{{ $student->id }}" class="btn btn-primary badge-pill">Edit</a>
		      	<a href="/show/{{ $student->id }}" class="btn btn-success badge-pill">Show</a>
		      	<a href="/delete/{{ $student->id }}" class="btn btn-danger badge-pill" onclick="return confirm('Are you sure you want to delete this data?')">Delete</a>
		      </td>
		    </tr>
		    @endforeach
		  </tbody>
		 
		  <tfoot>
		    <tr>
		      <th>ID
		      </th>
		      <th>FirstName
		      </th>
		      <th>LastName
		      </th>
		      <th>Gender
		      </th>
		      <th>Phone
		      </th>
		      <th>Address
		      </th>
		      <th>City
		      </th>
		      <th>Country
		      </th>
		      <th>Actions
		      </th>
		    </tr>
		  </tfoot>
		</table>	
    </div>
@endsection
