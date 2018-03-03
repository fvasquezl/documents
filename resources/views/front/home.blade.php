@extends('layouts.public')

@push('title')
    @include('partials.title')
@endpush

@section('content')
        <!-- begin row -->
        <div class="row row-space-30">
            <!-- begin col-9 -->
            <div class="col-md-9">
                <!-- begin post-list -->
                <ul class="post-list">
                    <li>
                    @forelse($posts as $post)
                        <!-- begin post-left-info -->
                        <div class="post-left-info">
                            <div class="post-date">
                                <span class="day">{{ optional($post->published_at)->format('d') }}</span>
                                <span class="month">{{ optional($post->published_at)->format('M')}}</span>
                            </div>
                            <div class="post-likes">
                                <i class="fa fa-heart-o"></i>
                                <span class="number">1,743</span>
                            </div>
                        </div>
                        <!-- end post-left-info -->
                        <!-- begin post-content -->
                        <div class="post-content">

                            @include($post->headerType('home'))

                            <!-- begin post-info -->
                            <div class="post-info">
                                <h4 class="post-title">
                                    <a href="{{route('posts.show',$post)}}">{{ $post->title }}</a>
                                </h4>
                                <div class="post-by">
                                    Posted By <a href="#">{{$post->owner->name}}</a> 
                                    <span class="divider">|</span>
                                    @foreach ($post->categories as $category )
                                        <a href="#">{{$category->name}}</a>
                                        <span class="divider">|</span>
                                    @endforeach
                                    1,292 Comments
                                </div>
                                <div class="post-desc">
                                    {{$post->excerpt}}
                                </div>
                            </div>
                            <!-- end post-info -->
                            <!-- begin read-btn-container -->
                            <div class="read-btn-container">
                                <a href="post_detail.html">Read More <i class="fa fa-angle-double-right"></i></a>
                            </div>
                            <!-- end read-btn-container -->
                        </div>
                        <!-- end post-content -->
                        @empty
                            <div class="post-content">
                                <div class="post-info">
                                    <h4 class="post-title">
                                       No hay publicaciones que mostrar
                                    </h4>
                                </div>
                            </div>
                        @endforelse
                    </li>
                </ul>
                <!-- end post-list -->

                <!-- Paginator -->
                <div class="section-container">
                    {{$posts->links()}}
                </div>
                <!-- end paginator -->
            </div>
            <!-- end col-9 -->
            <!-- begin col-3 -->
            @include('partials.front.sidebar',[$categories, $latestPosts])
            <!-- end col-3 -->
        </div>
        <!-- end row -->
@endsection