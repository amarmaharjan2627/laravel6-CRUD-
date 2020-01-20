@extends('layouts.studentLayout')
@section('content')


    <div class="container-fluid">
    	<h2 class="alert alert-primary">Laravel 6.0 CRUD</h2>
      <div class="row">

		      <div class="modal-header">
		      	<h5 class="modal-title">Add New Student</h5>
		      </div>
		      <form action="/store" method="post">
		      	@csrf
		      <div class="modal-body">
	
		          <div class="form-row">
		        	<div class="form-group col-md-6">
			            <label for="inputfirstname" class="col-form-label-sm">Firstname:</label>
			            <input type="text" class="form-control mb-2 mr-sm-2" name="firstname" placeholder="Enter First Name">
		            </div>
		            <div class="form-group col-md-6">
		            	<label for="inputLastname" class="col-form-label-sm">Lastname:</label>
			            <input type="text" class="form-control" name="lastname" placeholder="Enter Last Name">
		            </div>
		            <div class="form-group col-md-6">
			            <label for="inputGender" class="col-form-label-sm">Gender:</label>
			            <input type="text" class="form-control" name="gender" placeholder="Enter Gender">
		            </div>
		            <div class="form-group col-md-6">
			            <label for="inputPhone" class="col-form-label-sm">Phone:</label>
			            <input type="text" class="form-control" name="phone" placeholder="Enter Phone Number">
		            </div>
		       		 <div class="form-group col-md-6">
			            <label for="inputAddress" class="col-form-label-sm">Address:</label>
			            <input type="text" class="form-control" name="address" placeholder="Enter Address">
		            </div>
		            <div class="form-group col-md-6">
			            <label for="inputCity" class="col-form-label-sm">City:</label>
			            <input type="text" class="form-control" name="city" placeholder="Enter City Name">
		            </div>
		            <div class="form-group col-md-6">
			            <label for="inputCountry" class="col-form-label-sm">Country:</label>
			            <input type="text" class="form-control" name="country" placeholder="Enter Country Name">
		            </div>
		          </div>
		      
		      <div class="modal-footer">
		        <a href="{{url('/students')}}" class="btn btn-dark">Close</a>
		        <button type="submit" name="submit" class="btn btn-primary">Save Student</button>
		      </div>
		  </div>
		     </form> 
	</div>
</div>
@endsection
