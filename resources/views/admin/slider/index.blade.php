@extends('admin.admin_master')

@section('admin')

    <div class="py-12">
        <div class="container">
            <h4>Home Slider</h4><br>
                <a href="{{route('add.slider')}}" style="float:right;"><button class="btn btn-info">Add Slider</button></a><br><br>
            <div class="row">
               
                <div class="col-md-12">
                     @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                            
                        <strong>{{session('success')}}</strong> 
                        <button type="button" class="btn-close" Category-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <div class="card">
                        
                        <div class="card-header">
                            All Sliders
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col" width="5%">ID</th>
                                <th scope="col" width="15%">title</th>
                                <th scope="col" width="25%">decription</th>
                                <th scope="col" width="15%">Image</th>
                                <th scope="col" width="10%">Created At</th>
                                <th scope="col" width="15%">Action</th>
                                </tr>
                            </thead>
                        <tbody>
                            <!-- @php($i=1) -->
                            @foreach($sliders as $slider)
                            <tr>
                            <td>{{$slider ->id}}</td>
                            <td>{{$slider->title}}</td>
                            <td>{{$slider->decription}}</td>
                            <td> <img src="{{asset($slider->image)}}" alt="" style="width:250px;height:200px;"></td>
                            
                            @if($slider->created_at == NULL)
                                <span class="text-danger">No Date Set</span>
                            @else
                                <td>{{$slider->created_at->diffForHumans()}}</td>
                                
                            @endif
                            
                        
                             <td><a href=" {{url('admin/slider/delete/'.$slider->id)}} " class="btn btn-danger" onclick="return confirm('Are you sure to Delete')"> Delete</a></td>
                             <td><a href=" {{url('admin/slider/edit/'.$slider->id)}}" class="btn btn-success"> Edit</a></td>
                            
                            
                            </tr>
                           
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                </div><!--col-md-8-->
                
                <!-- Trash Items -->
                
                
                

            </div><!--row-->
        </div>
    </div>
@endsection
