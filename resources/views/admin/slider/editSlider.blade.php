@extends('admin.admin_master')
@section('admin')
     <div class="py-12">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Edit Slider
                        </div>
                        @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            
                            <strong>{{session('success')}}</strong> 
                            <button type="button" class="btn-close" Category-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        <div class="card-body">
                            <form action="{{ url('admin/slider/update/'.$item->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="old_image" value="{{$item->image}}">
                                
                                <div class="mb-3">

                                    <label for="inputSliderTitle" class="form-label">Category Title</label>
                                    <input type="text" name="title" class="form-control" id="inputSliderTitle" aria-describedby="emailHelp" value="{{$item->title}}">

                                    @error('title')
                                        <span class="text-danger"> {{$message}} </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="inputSliderDesc" class="form-label">Category Description</label>
                                    <textarea class="form-control" name ="decription" id="inputSliderDesc" rows="5" value="{{$item->decription}}"></textarea>
                                    @error('decription')
                                        <span class="text-danger"> {{$message}} </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="inputSliderImage" class="form-label">Slider Image</label>
                                    <input type="file" name="image" class="form-control" id="inputSliderImage" aria-describedby="emailHelp" value="{{$item->image}}">

                                    @error('image')
                                        <span class="text-danger"> {{$message}} </span>
                                    @enderror
                                </div>
                                <div>
                                    <img src="{{asset($item->image)}}" alt="Category image" style="width:400px; height:300px">
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary">Update Slider</button>
                            </form>
                        </div>
                    </div>
                </div>
                
            </div><!--row-->
        </div>
    </div>
@endsection