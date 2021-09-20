@extends('admin.admin_master')
@section('admin')
 <div class="py-12">
        <div class="container" >
            <div class="row">
                <div class="col-md-12" style="margin-bottom:50px">
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            
                            <strong>{{session('success')}}</strong> 
                            <button type="button" class="btn-close" Category-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                    <div class="card">
                        
                        <div class="card-header">
                            All Categories
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Category Title</th>
                                <th scope="col">Image</th>
                                <th scope="col">Description</th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>
                        <tbody>
                            
                            @foreach($categories as $item)
                            <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->category_name}}</td>
                            
                            <td> <img src="{{asset($item->image)}}" alt="" style="width:150px;height:100px;"></td>
                            <td>{{$item->description}}</td>
                            @if($item->created_at == NULL)
                                <span class="text-danger">No Date Set</span>
                            @else
                                <td>{{$item->created_at->diffForHumans()}}</td>
                                
                            @endif
                            
                            @if(Auth::user()->id == $item->user->id)
                                <td><a href="{{url('admin/category/delete',$item->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure to Delete')"> Delete</a></td>
                                <td><a href="{{url('admin/category/edit',$item->id)}}" class="btn btn-success"> Edit</a></td>
                            @endif
                            
                            </tr>
                           
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                </div><!--col-md-12-->
                
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Add Category
                        </div>
                        <div class="card-body">
                            <form action="{{route('add.category')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="inputCategoryName" class="form-label">Category Title</label>
                                    <input type="text" name="category_name" class="form-control" id="inputCategoryName" aria-describedby="emailHelp" placeholder="Enter Title " required>

                                    @error('category_name')
                                        <span class="text-danger"> {{$message}} </span>
                                    @enderror
                                </div>
                                
                                <div class="mb-3">
                                    <label for="inputCategoryDesc" class="form-label">Category Description</label>
                                    <textarea class="form-control" name ="description" id="exampleFormControlTextarea" rows="5" placeholder="Enter Description "></textarea>
                                    @error('description')
                                        <span class="text-danger"> {{$message}} </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="inputCategoryImage" class="form-label">Category Image</label>
                                    <input type="file" name="image" class="form-control" id="inputCategoryImage" aria-describedby="emailHelp">

                                    @error('image')
                                        <span class="text-danger"> {{$message}} </span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Add Category</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div><!--row-->
        </div>
    </div>

@endsection