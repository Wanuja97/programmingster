@php
$categories = DB::table('categories')->get();

@endphp
@extends('admin.admin_master')
@section('admin')
     <div class="py-12">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Add Post
                        </div>
                        @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            
                            <strong>{{session('success')}}</strong> 
                            <button type="button" class="btn-close" Category-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        <div class="card-body">
                            <form action="{{ route('store.post')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">

                                    <label for="inputPostTitle" class="form-label">Post Title</label>
                                    <input type="text" name="title" class="form-control" id="inputPostTitle" aria-describedby="emailHelp" placeholder="Enter Post Title">

                                    @error('title')
                                        <span class="text-danger"> {{$message}} </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <select class="form-control" aria-label="Default select example">
                                        <option selected >Select Post Category</option>
                                        @foreach($categories as $cat)
                                        <option value="{{$cat->id}}">{{$cat->category_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="inputPostDesc" class="form-label">Post Description</label>
                                    <textarea class="form-control" name ="description" id="inputPostDesc" rows="5" placeholder="Enter Post Description"></textarea>
                                    @error('description')
                                        <span class="text-danger"> {{$message}} </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="inputPostImage" class="form-label">Post Image</label>
                                    <input type="file" name="image" class="form-control" id="inputPostImage" aria-describedby="emailHelp" >

                                    @error('image')
                                        <span class="text-danger"> {{$message}} </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <textarea class="ckeditor form-control" name="wysiwyg-editor"></textarea>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary">Add Post</button>
                            </form>
                        </div>
                    </div>
                </div>
                
            </div><!--row-->
        </div>
    </div>
@endsection

@section('script')
    <script src="//cdn.ckeditor.com/4.16.2/full/ckeditor.js"></script>

    <script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
    </script>

    <script type="text/javascript">
    CKEDITOR.replace('wysiwyg-editor', {
        filebrowserUploadUrl: "{{route('store.post', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form',
    });
    </script>
@endsection