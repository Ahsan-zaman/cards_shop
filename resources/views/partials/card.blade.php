<div class="col-md-{{$col ?? 3}}">
    <div href="#" class="card card-product-grid">
        <a href="#" class="img-wrap mt-3"> <img src="/storage/{{$card->category->img}}"> </a>
        <figcaption class="info-wrap">
            <a href="#" class="title">{{$card->name}}</a>

            <div class="rating-wrap">
                <ul class="rating-stars">
                    <li style="width:80%" class="stars-active">
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                            class="fa fa-star"></i><i class="fa fa-star"></i>
                    </li>
                    <li>
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                            class="fa fa-star"></i><i class="fa fa-star"></i>
                    </li>
                </ul>
                <span class="label-rating text-muted"> 99+ reviws</span>
            </div>
            <div class="price mt-1">{{$card->price}} SAR</div> <!-- price-wrap.// -->
        </figcaption>
    </div>
</div> <!-- col.// -->