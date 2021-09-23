@extends('admin.admin_master')

@section('admin')

<div class="col-lg-12">
									<div class="card card-default">
										<div class="card-header card-header-border-bottom">
											<h2>Add your Slider</h2>
										</div>
                                        
										<div class="card-body">
											<form action ="{{route('store.slider')}}" method="POST" enctype="multipart/form-data">
                                                @csrf
												<div class="form-group" >
													<label for="exampleFormControlInput1">Title</label>
													<input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Enter Title" required>
												</div>
												<div class="form-group">
													<label for="exampleFormControlTextarea">Description</label>
													<textarea class="form-control" name ="decription" id="exampleFormControlTextarea" rows="5" placeholder="Enter Description"></textarea>
												</div>
								
												
												<div class="form-group">
													<label for="exampleFormControlFile1">Add Slider Image</label>
													<input type="file" class="form-control-file"  name="image" id="exampleFormControlFile1" required>
												</div>
												<div class="form-footer pt-4 pt-5 mt-4 border-top">
													<button type="submit" class="btn btn-primary btn-default">Submit</button>
		
												</div>
											</form>
										</div>
									</div>

									
								</div>


@endsection