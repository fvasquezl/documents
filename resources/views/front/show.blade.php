@extends('layouts.public')

@section('content')

    <div class="col-md-9">
        <!-- begin post-detail -->
        <div class="post-detail section-container">

            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Sports</a></li>
                <li class="active">{{$post->title}}</li>
            </ul>
            <h4 class="post-title">
                <a href="post_detail.html">{{$post->title}}</a>
            </h4>
            <div class="post-by">
                Posted By <a href="#">{{$post->owner->name}}</a>
                <span class="divider">|</span>
                    {{$post->published_at->format('d M Y')}}
                    <span class="divider">|</span>
                    @foreach ($post->categories as $category )
                        <a href="#">{{$category->name}}</a>
                        @unless($loop->last)
                            ,
                        @endunless
                    @endforeach
                <span class="divider">|</span> 2 Comments
            </div>

             @include($post->headerType('home'))
            <!-- begin post-desc -->
            <div class="post-desc">
                <p>
                    {{$post->excerpt}}
                </p>
            </div>
            <!-- end post-desc -->
        </div>
        <!-- end post-detail -->

        <!-- begin section-container -->
        <div class="section-container">
            <h4 class="section-title"><span>All Comments (3)</span></h4>
            <!-- begin comment-list -->
            <ul class="comment-list">
                <li>
                    <!-- begin comment-avatar -->
                    <div class="comment-avatar">
                        <i class="fa fa-user"></i>
                    </div>
                    <!-- end comment-avatar -->
                    <!-- begin comment-container -->
                    <div class="comment-container">
                        <div class="comment-author">
                            Aquila Erik
                            <span class="comment-date">
                                            on <span class="underline">June 6, 2015</span> at <span class="underline">6:17 pm</span>
                                        </span>
                        </div>
                        <div class="comment-content">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec gravida blandit risus at finibus.
                            In suscipit ligula velit, vel commodo libero viverra nec. Aenean luctus eleifend enim quis luctus.
                            Aliquam vulputate placerat ullamcorper.
                        </div>
                        <div class="comment-btn pull-left">
                            <a href="#"><i class="fa fa-reply"></i> Reply</a>
                        </div>
                        <div class="comment-rating">
                            Like or Dislike:
                            <a href="#" class="m-l-10 text-inverse"><i class="fa fa-thumbs-up text-success"></i> 154</a>
                            <a href="#" class="m-l-10 text-inverse"><i class="fa fa-thumbs-down text-danger"></i> 112</a>
                        </div>
                        <!-- begin comment-list -->
                        <ul class="comment-list">
                            <li>
                                <!-- begin comment-avatar -->
                                <div class="comment-avatar">
                                    <i class="fa fa-user"></i>
                                </div>
                                <!-- end comment-avatar -->
                                <!-- begin comment-container -->
                                <div class="comment-container">
                                    <div class="comment-author">
                                        Gevorg Silvester
                                        <span class="comment-date">
                                                        on <span class="underline">June 6, 2015</span> at <span class="underline">8:17 pm</span>
                                                    </span>
                                    </div>
                                    <div class="comment-content">
                                        Quisque aliquam arcu nec nibh eleifend, ac varius ante lacinia.
                                        Nam nec varius enim, vel mollis dui. Duis malesuada lorem metus,
                                        ut placerat turpis vulputate vitae.
                                    </div>
                                    <div class="comment-btn pull-left">
                                        <a href="#"><i class="fa fa-reply"></i> Reply</a>
                                    </div>
                                    <div class="comment-rating">
                                        Like or Dislike:
                                        <a href="#" class="m-l-10 text-inverse"><i class="fa fa-thumbs-up text-success"></i> 5</a>
                                        <a href="#" class="m-l-10 text-inverse"><i class="fa fa-thumbs-down text-danger"></i> 0</a>
                                    </div>
                                </div>
                                <!-- end comment-container -->
                            </li>
                        </ul>
                        <!-- end comment-list -->
                    </div>
                    <!-- end comment-container -->
                </li>
                <li>
                    <!-- begin comment-avatar -->
                    <div class="comment-avatar">
                        <img src="assets/img/user-1.jpg" alt="">
                    </div>
                    <!-- end comment-avatar -->
                    <!-- begin comment-container -->
                    <div class="comment-container">
                        <div class="comment-author">
                            Isador Ennio
                            <span class="comment-date">
                                            on <span class="underline">June 6, 2015</span> at <span class="underline">11:23 pm</span>
                                        </span>
                        </div>
                        <div class="comment-content">
                            Fusce urna massa, pellentesque eget interdum nec, lacinia nec velit.
                        </div>
                        <div class="comment-btn pull-left">
                            <a href="#"><i class="fa fa-reply"></i> Reply</a>
                        </div>
                        <div class="comment-rating">
                            Like or Dislike:
                            <a href="#" class="m-l-10 text-inverse"><i class="fa fa-thumbs-up text-success"></i> 2</a>
                            <a href="#" class="m-l-10 text-inverse"><i class="fa fa-thumbs-down text-danger"></i> 0</a>
                        </div>
                    </div>
                    <!-- end comment-container -->
                </li>
            </ul>
            <!-- end comment-list -->
        </div>
        <!-- end section-container -->

        <!-- begin section-container -->
        <div class="section-container">
            <h4 class="section-title m-b-20"><span>Add a Comment</span></h4>
            <div class="alert alert-warning f-s-12">
                Suspendisse vulputate pulvinar nisl, quis rutrum risus pretium ut. Nulla at risus facilisis, consectetur erat nec,
                posuere justo. Ut elementum, elit pellentesque eleifend semper, elit metus venenatis libero,
                non fermentum mi est eu neque. Ut vel metus eget tortor viverra varius et quis eros.
            </div>
            <form class="form-horizontal" action="" method="POST">
                <div class="form-group">
                    <label class="control-label f-s-12 col-md-2">Your Name <span class="text-danger">*</span></label>
                    <div class="col-md-10">
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label f-s-12 col-md-2">Your Email <span class="text-danger">*</span></label>
                    <div class="col-md-10">
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label f-s-12 col-md-2">Comment <span class="text-danger">*</span></label>
                    <div class="col-md-10">
                        <textarea class="form-control" rows="10"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-10 col-md-offset-2">
                        <div class="checkbox f-s-12">
                            <label>
                                <input type="checkbox" name="email_notify" value="1">
                                Notify me of follow-up comments by email.
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-10 col-md-offset-2">
                        <button type="submit" class="btn btn-inverse btn-lg">Submit Comment</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- end section-container -->
    </div>

    <!-- begin col-3 -->
    @include('partials.front.sidebar',[$categories, $latestPosts])
    <!-- end col-3 -->

@endsection