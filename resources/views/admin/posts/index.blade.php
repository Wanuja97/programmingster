@extends('admin.admin_master')

@section('admin')
    <div class="py-12">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    @foreach($posts as $post)
                    <div class="card h-100">
                    <img src="{{asset($post->post_img)}}" class="card-img-top" alt="post_title" style="width:200px;height:200px">
                    <div class="card-body">
                        <h5 class="card-title">{{$post->title}}</h5>
                        <p class="card-text">{!! html_entity_decode($post->content) !!}</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Published At {{ date('M j, Y', strtotime($post->created_at))}}</small>
                    </div>
                    </div>
                    @endforeach
                </div>
  
            </div>
        </div>
    </div>
@endsection