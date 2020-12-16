<div class="col-lg-4 col-md-6">
    <div class="latest-product__text">
        <h4>Latest Products</h4>
        <div class="latest-product__slider owl-carousel">
            <div class="latest-prdouct__slider__item">
            @foreach ($latest as $l)

                <a href="#" class="latest-product__item">
                    <div class="latest-product__item__pic">
                        <img src="img/latest-product/{{$l->photo}}">
                    </div>
                    <div class="latest-product__item__text">
                        <h6>{{$l->name}}</h6>
                        <span>{{$l->price}} ₺</span>
                    </div>
                </a>

            @endforeach
        </div>

        </div>
    </div>
</div>
