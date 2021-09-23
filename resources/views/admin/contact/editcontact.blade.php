@extends('admin.admin_master')

@section('admin')
     <div class="py-12">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Edit Contact Details
                        </div>
                        @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            
                            <strong>{{session('success')}}</strong> 
                            <button type="button" class="btn-close" Category-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        <div class="card-body">
                            <form action="{{ url('admin/contact/update/'.$contact->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                
                                <div class="form-group">
													<label for="exampleFormControlTextarea">Email</label>
													<input type="email" name="email" class="form-control" id="exampleFormControlInput1"  value="{{$contact-> email}}" required>
												</div>
								
												<div class="form-group">
													<label for="exampleFormControlTextarea">Phone Number</label>
													<input type="tel" name="phone" class="form-control" id="exampleFormControlInput1"  value="{{$contact-> phone}}" required>
												</div>
												
                                                <div class="form-group" >
													<label for="exampleFormControlInput1">City</label>
													<input type="text" name="city" class="form-control" id="exampleFormControlInput1"  value="{{$contact-> city}}" required>
												</div>

                                                <div class="form-group" >
													<label for="exampleFormControlInput1">Province</label>
													<input type="text" name="province" class="form-control" id="exampleFormControlInput1"  value="{{$contact-> province}}" required>
												</div>

                                                <div class="form-group" >
													<label for="exampleFormControlInput1">Country</label>
													<input type="text" name="country" class="form-control" id="exampleFormControlInput1"  value="{{$contact-> country}}" required>
												</div>
                                
                                <button type="submit" class="btn btn-primary">Update About</button>
                            </form>
                        </div>
                    </div>
                </div>
                
            </div><!--row-->
        </div>
    </div>
@endsection