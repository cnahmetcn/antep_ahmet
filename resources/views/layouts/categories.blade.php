<section class="categories">
    <div class="container">
        <div class="row">
            <div class="categories__slider owl-carousel">
                @foreach($categories as $c)
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/{{$c->image}}">
                            <h5><a href="#{{$c->name}}">{{$c->name}}</a></h5>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
