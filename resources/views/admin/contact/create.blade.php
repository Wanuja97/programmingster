@extends('admin.admin_master')

@section('admin')

<div class="col-lg-12">
									<div class="card card-default">
										<div class="card-header card-header-border-bottom">
											<h2>Add Contact Details</h2>
										</div>
                                        
										<div class="card-body">
											<form action ="{{route('store.contact')}}" method="POST" enctype="multipart/form-data">
                                                @csrf
												
												<div class="form-group">
													<label for="exampleFormControlTextarea">Email</label>
													<input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Email" required>
												</div>
								
												<div class="form-group">
													<label for="exampleFormControlTextarea">Phone Number</label>
													<input type="tel" name="phone" class="form-control" id="exampleFormControlInput1" placeholder="Enter Phone Number" required>
												</div>
												
                                                <div class="form-group" >
													<label for="exampleFormControlInput1">City</label>
													<input type="text" name="city" class="form-control" id="exampleFormControlInput1" placeholder="Enter City" required>
												</div>

                                                <div class="form-group" >
													<label for="exampleFormControlInput1">Province</label>
													<input type="text" name="province" class="form-control" id="exampleFormControlInput1" placeholder="Enter Province" required>
												</div>

                                                <div class="form-group" >
													<label for="exampleFormControlInput1">Country</label>
													<input type="text" name="country" class="form-control" id="exampleFormControlInput1" placeholder="Enter Country" required>
												</div>

												<div class="form-footer pt-4 pt-5 mt-4 border-top">
													<button type="submit" class="btn btn-primary btn-default">Submit</button>
		
												</div>
											</form>
										</div>
									</div>

									
								</div>


@endsection