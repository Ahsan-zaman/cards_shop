<!DOCTYPE html>
<html lang="en">
@include('layouts.head')

<body>
    @include('layouts.header')
    <section class="section-content">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-2">
                    <header class="section-heading">
                        <h3 class="section-title">Categories</h3>
                    </header><!-- sect-heading -->
                    <div class="row">
                        <div class="col-12">
                            <a class="link-primary text-decoration-none" href="{{ url('shop') }}">
                                <strong>
                                    View all
                                </strong>
                            </a>
                        </div>
                        @foreach($categories as $cat)
                        <div class="col-12">
                            <a class="link-primary text-decoration-none" href="{{ url('shop') }}?category={{$cat->id}}">
                                <strong>
                                    {{$cat->name}} ({{$cat->cards_count}})
                                </strong>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-12 col-md-10">
                    <header class="section-heading">
                        <h3 class="section-title">All Cards</h3>
                    </header><!-- sect-heading -->
                    <div class="row">
                        @foreach($cards as $card)
                        <div class="col-md-3">
                            <div href="#" class="card card-product-grid">
                                <a href="#" class="img-wrap mt-3"> <img src="{{$card->category->img}}"> </a>
                                <!-- /storage/{{$card->category->img}} -->
                                <figcaption class="info-wrap">
                                    <a href="#" class="title">{{$card->name}}</a>

                                    <div class="rating-wrap">
                                        <ul class="rating-stars">
                                            <li style="width:80%" class="stars-active">
                                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i>
                                            </li>
                                        </ul>
                                        <span class="label-rating text-muted"> 99+ reviws</span>
                                    </div>
                                    <div class="price mt-1">{{$card->price}} SAR</div> <!-- price-wrap.// -->
                                </figcaption>
                            </div>
                        </div> <!-- col.// -->
                        @endforeach
                    </div> <!-- row.// -->
                </div>
            </div>

        </div> <!-- container .//  -->
    </section>
    @include('layouts.footer')
</body>

</html>