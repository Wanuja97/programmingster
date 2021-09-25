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
                            All HackerRank Posts
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Post Title</th>
                                <th scope="col">Post Image</th>
                                <th scope="col">Description</th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>
                        <tbody>
                            
                            @foreach($hackerrank as $item)
                            <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->title}}</td>
                            
                            <td> <img src="{{asset($item->post_img)}}" alt="" style="width:150px;height:100px;"></td>
                            <td>{{$item->description}}</td>
                            @if($item->created_at == NULL)
                                <span class="text-danger">No Date Set</span>
                            @else
                                <td>{{Carbon\Carbon::parse($item->created_at)->diffForHumans()}}</td>
                            @endif
                            
                          
                                <td><a href="{{url('admin/post/delete',$item->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure to Delete')"> Delete</a></td>
                                <td><a href="{{url('admin/post/edit',$item->id)}}" class="btn btn-success"> Edit</a></td>
                          
                            
                            </tr>
                           
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                </div><!--col-md-12-->
                

            </div><!--row-->
        </div>
    </div>

@endsection