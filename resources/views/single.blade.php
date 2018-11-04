@extends('layouts.frontend')



@section('content')



    



<!-- ... End Header -->

<div class="content-wrapper">

<!-- Stunning Header -->

<div class="stunning-header stunning-header-bg-lightviolet">
    <div class="stunning-header-content">
        <h1 class="stunning-header-title">{{$post->title}}</h1>
    </div>
</div>

<!-- End Stunning Header -->

<!-- Post Details -->


<div class="container">
    <div class="row medium-padding120">
        <main class="main">
            <div class="col-lg-10 col-lg-offset-1">
                <article class="hentry post post-standard-details">

                    <div class="post-thumb">
                        <img src="{{$post->featured}}" alt="seo">
                    </div>

                    <div class="post__content">


                        <div class="post-additional-info">

                        

                            <span class="post__date">

                                <i class="seoicon-clock"></i>

                                <time class="published" datetime="2016-03-20 12:00:00">
                                    {{$post->created_at->diffForHumans()}}
                                </time>

                            </span>

                            <span class="category">
                                <i class="seoicon-tags"></i>
                                <a href="#">{{$post->category->name}}</a>
                            </span>

                        </div>

                        <div class="post__content-info">

                            <p class="post__subtitle">{{$post->title}}
                            </p>

                            <p class="post__text"> {!!$post->content!!}
                            </p>

                            
                            <div class="widget w-tags">
                                <div class="tags-wrap">
                                    
                                    
                                @foreach($post->tags as $tag)    
                                    <a href="#" class="w-tags-item">{{$tag->tag}}</a>
                                
                                    
                                    @endforeach
                                </div>
                            </div>

                        </div>
                    </div>
                    
                    
                    
                    
                    
                         <div class="blog-details-author">

                    <div class="blog-details-author-thumb">
                        <img src="{{asset('app/img/blog-details-author.png')}}" alt="Author">
                    </div>

                    <div class="blog-details-author-content">
                        <div class="author-info">
                            <h5 class="author-name">{{$post->user->name}}</h5>
                        </div>
                        <p class="text">{{$post->user->profile->about}}
                        </p>
                      
                    </div>
                </div>
                    

                    <div class="socials">Share:
                        <a href="#" class="social__item">
                            <i class="seoicon-social-facebook"></i>
                        </a>
                        <a href="#" class="social__item">
                            <i class="seoicon-social-twitter"></i>
                        </a>
                        <a href="#" class="social__item">
                            <i class="seoicon-social-linkedin"></i>
                        </a>
                        <a href="#" class="social__item">
                            <i class="seoicon-social-google-plus"></i>
                        </a>
                        <a href="#" class="social__item">
                            <i class="seoicon-social-pinterest"></i>
                        </a>
                    </div>

                </article>

     
                <div class="pagination-arrow">
                    
                    
                    
                    
                    @if($prev)
                    
                       <a href="{{   route('post.single', ['slug' => $prev->slug])   }}" class="btn-prev-wrap">
                           
                                                      
                        <svg class="btn-prev">
                            <use xlink:href="#arrow-left"></use>
                        </svg>
                        <div class="btn-content">
                            <div class="btn-content-title">Previous Post</div>
                            <p class="btn-content-subtitle">{{$prev->title}}</p>
                        </div>
                    </a>
                    
                    
                    @endif

                    
                    
                    
                    @if($next)
                 

                    <a href="{{route('post.single', ['slug' => $next->slug])}}" class="btn-next-wrap">
                        <div class="btn-content">
                            <div class="btn-content-title">Next Post</div>
                            <p class="btn-content-subtitle">{{$next->title}}</p>
                        </div>
                        <svg class="btn-next">
                            <use xlink:href="#arrow-right"></use>
                        </svg>
                    </a>
                    
                    
                    
                    @endif

                </div>

                <div class="comments">

                    <div class="heading text-center">
                        <h4 class="h1 heading-title">Comments</h4>
                        <div class="heading-line">
                            <span class="short-line"></span>
                            <span class="long-line"></span>
                        </div>
                    </div>
                    
                    
                    <div id="disqus_thread"></div>
                    <script>

                    /**
                    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                    
                    var disqus_config = function () {
                    this.page.url =  "{{route('post.single', ['slug'=> $post->slug]) }}";  // Replace PAGE_URL with your page's canonical URL variable
                    this.page.identifier = "post-{{$post->slug}}"; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                    };
                    
                    (function() { // DON'T EDIT BELOW THIS LINE
                    var d = document, s = d.createElement('script');
                    s.src = 'https://babakars-blog.disqus.com/embed.js';
                    s.setAttribute('data-timestamp', +new Date());
                    (d.head || d.body).appendChild(s);
                    })();
                    </script>
                    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                            
                    
                    
                    
                    
                    
                </div>
                
                
                
                
                
                
                        <div class="col-lg-12">
                <aside aria-label="sidebar" class="sidebar sidebar-right">
                    <div  class="widget w-tags">
                        <div class="heading text-center">
                            <h4 class="heading-title">ALL BLOG TAGS</h4>
                            
                            <div class="heading-line">
                                <span class="short-line"></span>
                                <span class="long-line"></span>
                            </div>
                        </div>

                        <div class="tags-wrap">
                           
                            
                            
                            @foreach($tags as $tag)
                            
                            
                              <a href="#" class="w-tags-item">{{$tag->tag}}</a>

                            
                            
                            @endforeach
                        </div>
                    </div>
                </aside>
            </div>

                <div class="row">

                </div>


            </div>

            <!-- End Post Details -->

           
        </main>
    </div>
</div>









@endsection