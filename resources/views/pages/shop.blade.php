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
                        @include('partials.card',['card' => $card])
                        @endforeach
                    </div> <!-- row.// -->
                </div>
            </div>

        </div> <!-- container .//  -->
    </section>
    @include('layouts.footer')
</body>

</html>