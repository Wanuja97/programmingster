@extends('admin.admin_master')

@section('admin')
    <div class="py-12">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    
                    <div class="card ">
                        
                        <div class="card-header">
                            Client Messages
                        </div>
                        <table class="table ">
                            <thead>
                                <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Subject</th>
                                <th scope="col">Message</th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>
                        <tbody>
                            <!-- @php($i=1) -->
                            @foreach($msgs as $msg)
                            <tr>
                            <td>{{$msg->id}}</td>
                            <td>{{$msg->name}}</td>
                            <td>{{$msg->email}}</td>
                            <td>{{$msg->subject}}</td>
                            <td>{{$msg->message}}</td>
                            @if($msg->created_at == NULL)
                                <span class="text-danger">No Date Set</span>
                            @else
                                <td>{{$msg->created_at->diffForHumans()}}</td>
                                
                            @endif
                            
                            <td><a href="{{url('admin/contactmessages/delete/'.$msg->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure to Delete')"> Delete</a></td>
                            </tr>
                           
                            @endforeach
                        </tbody>
                        </table>
                        
                    </div>
                </div><!--col-md-8-->
                
                </div>
                
            </div><!--row-->
        </div>
    </div>
@endsection