@php
$articles = DB::table('posts')
            ->join('categories', 'posts.cat_id', '=', 'categories.id')
            ->select('posts.*')
            ->where('categories.category_name', '=', 'Articles')
            ->get()->count();
$hackerrank = DB::table('posts')
            ->join('categories', 'posts.cat_id', '=', 'categories.id')
            ->select('posts.*')
            ->where('categories.category_name', '=', 'Hackground ')
            ->get()->count();
$codesnippet = DB::table('posts')
            ->join('categories', 'posts.cat_id', '=', 'categories.id')
            ->select('posts.*')
            ->where('categories.category_name', '=', 'Codewall')
            ->get()->count();

@endphp
@extends('admin.admin_master')
@section('admin')
<div class="row">
                    
                    <div class="col-xl-3 col-sm-6">
                      <div class="card card-mini  mb-4">
                        <a href="{{route('all.article')}}"><div class="card-body">
                          <h2 class="mb-1">{{$articles}}</h2>
                          <p>Articles</p>
                          <div class="chartjs-wrapper">
                            <canvas id="dual-line"></canvas>
                          </div>
                        </div></a>
                      </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                      <div class="card card-mini mb-4">
                        <a href="{{route('all.hackerank')}}">
                          <div class="card-body">
                          <h2 class="mb-1">{{$hackerrank }}</h2>
                          <p>Hackground</p>
                          <div class="chartjs-wrapper">
                            <canvas id="area-chart"></canvas>
                          </div>
                        </div>
                        </a>
                      </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                      <div class="card card-mini mb-4">
                        <a href="{{route('all.codechef')}}">
                          <div class="card-body">
                          <h2 class="mb-1">{{$codesnippet}}</h2>
                          <p>Codewall</p>
                          <div class="chartjs-wrapper">
                            <canvas id="line"></canvas>
                          </div>
                        </div>
                        </a>
                      </div>
                    </div>
                    <!-- <div class="col-xl-3 col-sm-6">
                      <div class="card card-mini mb-4">
                        <div class="card-body">
                          <h2 class="mb-1">9,503</h2>
                          <p>Total Comments</p>
                          <div class="chartjs-wrapper">
                            <canvas id="line"></canvas>
                          </div>
                        </div>
                      </div>
                    </div> -->
                  </div>
@endsection