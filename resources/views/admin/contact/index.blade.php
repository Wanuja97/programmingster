@extends('admin.admin_master')

@section('admin')

<div class="py-12">
    <div class="container">
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
                        Contact Details
                        @if(count($contact) ==1 )
                        <h5 class="alert alert-danger " role="alert">If you want to delete current Contact details you
                            must add another section first</h5>
                        @endif
                        <a href="{{route('add.contact')}}" style="float:right;"><button class="btn btn-info">Add
                                Contact</button></a><br><br>
                        <div class="row">
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">City</th>
                                    <th scope="col">Province</th>
                                    <th scope="col">Country</th>
                                    <th scope="col">Created At</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- @php($i=1) -->
                                @foreach($contact as $row)
                                <tr>
                                    <td>{{ $row->id }}</td>
                                    <td>{{$row->email}}</td>
                                    <td>{{$row->phone}}</td>
                                    <td>{{$row->city}}</td>
                                    <td>{{$row->province}}</td>
                                    <td>{{$row->country}}</td>
                                    @if($row->created_at == NULL)
                                    <span class="text-danger">No Date Set</span>
                                    @else
                                    <td>{{$row->created_at->diffForHumans()}}</td>

                                    @endif

                                    @if(count($contact)>1)
                                    <td><a href=" {{url('admin/contact/delete/'.$row->id)}} " class="btn btn-danger"
                                            onclick="return confirm('Are you sure to Delete')"> Delete</a></td>
                                    @endif

                                    <td><a href=" {{url('admin/contact/edit/'.$row->id)}}" class="btn btn-success"> Edit</a>
                                    </td>
                                    </td>
                                </tr>

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--col-md-8-->
            </div>
            <!--row-->
        </div>
    </div>

    @endsection