@extends('layouts.studentLayout')
@section('content')


    <div class="container-fluid">
    	<h2 class="alert alert-primary">Laravel 6.0 CRUD</h2>
      <div class="row">

		      <div class="modal-header">
		      	<h5 class="modal-title">Edit Student</h5>
		      </div>
		      <form action="/update/{{ $students->id }}" method="post">
		      	@csrf
		      	@method('PUT')
		      	<input type="hidden" name="id" value="{{ $students->id }}">
		      <div class="modal-body">
		          <div class="form-row">
		        	<div class="form-group col-md-6">
			            <label for="inputfirstname" class="col-form-label-sm">Firstname:</label>
			            <input type="text" class="form-control mb-2 mr-sm-2" name="firstname" value="{{$students->firstname}}">
		            </div>
		            <div class="form-group col-md-6">
		            	<label for="inputLastname" class="col-form-label-sm">Lastname:</label>
			            <input type="text" class="form-control" name="lastname" value="{{$students->lastname}}">
		            </div>
		            <div class="form-group col-md-6">
			            <label for="inputGender" class="col-form-label-sm">Gender:</label>
			            <input type="text" class="form-control" name="gender" value="{{$students->gender}}">
		            </div>
		            <div class="form-group col-md-6">
			            <label for="inputPhone" class="col-form-label-sm">Phone:</label>
			            <input type="text" class="form-control" name="phone" value="{{$students->phone}}">
		            </div>
		       		 <div class="form-group col-md-6">
			            <label for="inputAddress" class="col-form-label-sm">Address:</label>
			            <input type="text" class="form-control" name="address" value="{{$students->address}}">
		            </div>
		            <div class="form-group col-md-6">
			            <label for="inputCity" class="col-form-label-sm">City:</label>
			            <input type="text" class="form-control" name="city" value="{{$students->city}}">
		            </div>
		            <div class="form-group col-md-6">
			            <label for="inputCountry" class="col-form-label-sm">Country:</label>
			            <input type="text" class="form-control" name="country" value="{{$students->country}}">
		            </div>
		          </div>
		      
		      <div class="modal-footer">
		        <a href="{{url('/students')}}" class="btn btn-dark">Close</a>
		        <button type="submit" name="submit" class="btn btn-primary">Update Student</button>
		      </div>
		  </div>
		     </form>
	</div>
</div>
@endsection
