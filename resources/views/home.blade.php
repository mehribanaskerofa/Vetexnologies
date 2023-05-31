@extends('layouts.home')

@section('content')

    <!-- Start Slider -->

    <div id="slides-shop" class="cover-slides">
        <img class="backgroundvatech" src="assets/images/vatechnology.jpeg"> alt="" >
        <ul >
            <li class="text-center" >
                <div class="container">

                    <div class="row">

                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Freshshop</strong></h1>
                            <p class="m-b-40">See how your users experience your website in realtime or view <br> trends to see any changes in performance over time.</p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <!-- End Slider -->
    <!-- Start Categories  -->
    <div class="categories-shop">
        <div class="container">
            <div class="row catg2">
                <div class="col-12">
                    <h2 class="noo-sh-title">Categories</h2>
                </div>
                <div class="col-lg-5 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="assets/images/vatech3.jpg" alt="" />
                        <a class="btn hvr-hover" href="#">Offire</a>
                    </div>
                </div>
            </div>
{{--            info--}}
            <div class="col-lg-9" style="margin-top:60px">
                <h2  class="noo-sh-title-top">We are <span>Freshshop</span></h2>
                <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
                    voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
                    sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?
                    Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <a style="margin-top: 30px" class="btn hvr-hover" href="#">Read More</a>
            </div>
{{--            team sect--}}
        <div class="row team justify-content-center">
            <div class="col-12">
                <h2 class="noo-sh-title">Meet Our Team</h2>
            </div>

           @foreach($teams as $team)
            <div class="col-sm-4 col-lg-4">
                <div class="hover-team">
                    <div class="our-team"> <img src="{{asset('storage/images/'.$team->image)}}" alt="" />
                        <div class="team-content">
                            <h3 class="title">{{strtoupper($team->fullname)}}</h3> <span class="post">{{$team->title}}</span> </div>
                        <div class="icon"> <a href="{{route('about')}}"><i class="fa fa-plus" aria-hidden="true"></i></a> </div>
                    </div>
                    <div class="team-description">
                        {{$team->description}}
                    </div>
                    <hr class="my-0"> </div>
            </div>
            @endforeach
        </div>



    </div>
    </div>
    <!-- End Categories -->



@endsection
