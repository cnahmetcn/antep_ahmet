<section class="from-blog spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title from-blog__title">
                    <h2>Blog Yazıları</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($blogs as $b)
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic">
                        <img src="img/blog/{{$b->photo}}" alt="">
                    </div>
                    <div class="blog__item__text">
                        <ul>
                            <li><i class="fa fa-calendar-o"></i> {{date('d-m-Y', strtotime($b->datetime))}}</li>
                            <li><i class="fa fa-comment-o"></i> {{$b->comment}}</li>
                        </ul>
                        <h5><a href="#">{{$b->title}}</a></h5>
                        <p>{{$b->content}} </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
