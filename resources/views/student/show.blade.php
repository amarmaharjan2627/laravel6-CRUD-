@extends('layouts.studentLayout')
@section('content')


    <div class="container-fluid">
    	<h2 class="alert alert-primary">Laravel 6.0 CRUD</h2>
      <div class="row">
      	<div class="col-md-8">
      	<div class="card">
      		<div class="card-header">View Student Profile</div>
      	
		          <div class="form-row col-md-10">
		        	<div class="form-group col-md-6">
			            <label for="inputfirstname" class="col-form-label-sm col-md-4">Firstname:</label>
			            <strong>{{$students->firstname}}</strong>
		            </div>
		            <div class="form-group col-md-6">
		            	<label for="inputLastname" class="col-form-label-sm col-md-4">Lastname:</label>
			            <strong>{{$students->lastname}}</strong>
		            </div>
		            <div class="form-group col-md-6">
			            <label for="inputGender" class="col-form-label-sm col-md-4">Gender:</label>
			            <strong>{{$students->gender}}</strong>
		            </div>
		            <div class="form-group col-md-6">
			            <label for="inputPhone" class="col-form-label-sm col-md-4">Phone:</label>
			            <strong>{{$students->phone}}</strong>
		            </div>
		       		 <div class="form-group col-md-6">
			            <label for="inputAddress" class="col-form-label-sm col-md-4">Address:</label>
			            <strong>{{$students->address}}</strong>
		            </div>
		            <div class="form-group col-md-6">
			            <label for="inputCity" class="col-form-label-sm col-md-4">City:</label>
			            <strong>{{$students->city}}</strong>
		            </div>
		            <div class="form-group col-md-6">
			            <label for="inputCountry" class="col-form-label-sm col-md-4">Country:</label>
			            <strong>{{$students->country}}</strong>
		            </div>
		          </div>
		      
		      <div class="modal-footer">
		        <a href="{{url('/students')}}" class="btn btn-dark">Close</a>
		        
		      </div>
		    </div>     
		   </div>
		</div> 
	</div>
</div>
@endsection
