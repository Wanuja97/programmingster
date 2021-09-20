@extends('admin.admin_master')
@section('admin')
     <div class="py-12">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Edit Brand
                        </div>
                        @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            
                            <strong>{{session('success')}}</strong> 
                            <button type="button" class="btn-close" Category-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        <div class="card-body">
                            <form action="{{ url('admin/category/update/'.$item->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="old_image" value="{{$item->brand_image}}">
                                
                                <div class="mb-3">

                                    <label for="inputCategoryTitle" class="form-label">Category Title</label>
                                    <input type="text" name="category_name" class="form-control" id="inputCategoryTitle" aria-describedby="emailHelp" value="{{$item->category_name}}">

                                    @error('category_name')
                                        <span class="text-danger"> {{$message}} </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="inputCategoryDesc" class="form-label">Category Description</label>
                                    <textarea class="form-control" name ="description" id="exampleFormControlTextarea" rows="5" value="{{$item->description}}"></textarea>
                                    @error('description')
                                        <span class="text-danger"> {{$message}} </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="inputCategoryImage" class="form-label">Category Image</label>
                                    <input type="file" name="image" class="form-control" id="inputCategoryImage" aria-describedby="emailHelp" value="{{$item->image}}">

                                    @error('image')
                                        <span class="text-danger"> {{$message}} </span>
                                    @enderror
                                </div>
                                <div>
                                    <img src="{{asset($item->image)}}" alt="Category image" style="width:400px; height:300px">
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary">Update Category</button>
                            </form>
                        </div>
                    </div>
                </div>
                
            </div><!--row-->
        </div>
    </div>
@endsection