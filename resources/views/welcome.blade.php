<!DOCTYPE html>
<html>
<head>
    <title>Topmaster.lk</title>
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="generator" content="" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:url" content="" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap and default Style -->
    <link rel="stylesheet" href="{!! asset('css/bootstrap.css')!!}" media="all" " >
    <link rel="stylesheet" href="{!! asset('css/style.css')!!}" media="all" ">

    <!-- Owl carosal style -->
    <!-- <link rel="stylesheet" href="css/docs.theme.min.css"> -->
    <link rel="stylesheet" href="{!! asset('css/owl.carousel.css')!!}" media="all" ">
    <link rel="stylesheet" href="{!! asset('css/owl.theme.default.css')!!}" media="all" ">





    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <!-- Js -->
    <script src="{!! asset('js/jquery.min.js')!!}"></script>
    <script src="{!! asset('js/config.js')!!}"></script>
    <script src="{!! asset('js/owl.carousel.js')!!}"></script>
    <script src="{!! asset('js/bootstrap.js')!!}"></script>




</head>
<body>
<?php echo View::make('include/header'); ?>
    <!-- ======================================= Start content ======================================= -->
    <div class="container index-content">
        <!-- ======================================= Start slider ======================================= -->
        <section id="demos">
          <div class="row">
            <div class="col-md-12 columns">
              <div class="owl-carousel owl-theme">
                @foreach($slider  as $sliders)
                    @if($sliders->delete_raw == 0)
                        <div class="item">
                            <img class="slider-banner" src="/images/slider-image/{{$sliders->slider_name}}" alt="">
                        </div>
                    @else
                    @endif
                @endforeach
              </div>

              <script>
                $(document).ready(function() {
                  var owl = $('.owl-carousel');
                  owl.owlCarousel({
                    margin: 5,
                    nav: true,
                    loop: true,
                    responsive: {
                      0: {
                        items: 1
                      },
                      600: {
                        items: 3
                      },
                      1000: {
                        items: 3
                      }
                    }
                  })
                })
              </script>
            </div>
          </div>
        </section>
        <!-- ======================================= End slider ======================================= -->
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-12">
                <div id="custom-search-input">
                    <div class="input-group col-md-12">
                        <input type="text" class="form-control input-hm" placeholder="Search" />
                        <span class="input-group-btn">
                            <button class="btn btn-info btn-lg" type="button">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </span>
                    </div>
                </div>
                <div class="panel panel-default">
                    <ul class="list-group">
                     @foreach($user  as $users)
                        <a href="{!! route('subjectswitch', ['subId'=>$users->subjects_id]) !!}" class="list-group-item">{{$users->subject_title}}</a>
                     @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <div class="row">
                @foreach($user  as $users)
                @if($users->delete_raw == 0)
                    <div class="col-md-2 col-sm-3 com xs-6">
                        <a href="#">
                            <div class="home-sub-image">
                                <h4>{{$users->subject_title}}</h4>
                                <img class="img-responsive" src="/images/sub-image/{{$users->subjet_name}}">
                            </div>
                        </a>
                    </div>
                 @else
                 @endif
                @endforeach
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="home-headline-01">
                            <h1>Our Master</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 col-sm-3 com xs-6">
                        <a href="#">
                            <div class="home-sub-image">
                            @if($lastData != 'null')
                                <h4>{{$lastData->full_name}}</h4>
                                    <img class="img-responsive" src="/images/master-image/{{$lastData->profile_pic}}">
                            @endif
                            </div>
                        </a>
                    </div>
                    @if($master != 'null')
                    @foreach($master  as $masters)
                        @if($masters->delete_raw == 0)
                            <div class="col-md-2 col-sm-3 com xs-6">
                                <a href="#">
                                    <div class="home-sub-image">
                                        <h4>{{$masters->full_name}}</h4>
                                        <img class="img-responsive" src="/images/master-image/{{$masters->profile_pic}}">
                                    </div>
                                </a>
                            </div>
                        @else
                        @endif
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
  <div class="row home-bottom-section">
            <div class="col-md-12 ">
                <div class="col-md-3 col-sm-3 col-xs-12 home-bottom-left">
                    <h3>Top news of the day</h3>
                    <div class="top-news-img">
                    @foreach($topnews  as $topnewses)
                        <img  class="top-news-img-02 img-responsive" src="images/news-image/{{$topnewses->news_image}}">
                    @endforeach
                    <div class="fb-page" data-href="https://www.facebook.com/topmaster.lk/" data-tabs="timeline" data-width="227px" data-height="136px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/topmaster.lk/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/topmaster.lk/">topmaster.lk</a></blockquote></div>
                    </div>
                </div>
                <div class="col-md-9 col-sm-9 col-xs-12 home-bottom-right">
                    <div class="row no-padding bottom-right">
                        <div class="col-md-12 home-bottom-news">
                            <h2>news and events</h2>
                            <div class="owl-carousel owl-theme">
                                @foreach($news  as $newses)
                                    @if($newses->delete_raw == 0)
                                    <div class="item">
                                        <div class="news">
                                            <div class="img-figure">
                                                <div class="cat">{{$newses->news_type}}</div>
                                                <img src="images/news-image/{{$newses->news_image}}" class="img-responsive">
                                            </div>
                                            <div class="title">
                                                <h1>{{$newses->news_title}}</h1>
                                            </div>
                                            <p class="description">{{$newses->news_content}}</p>
                                            <p class="more">
                                                <a href="{{$newses->news_url}}" target="_blank">read more</a>
                                            </p>
                                        </div>
                                    </div>
                                    @else
                                    @endif
                                @endforeach

                            </div>
                        </div>

                         <script type="text/javascript">
                            $(document).ready(function() {
                                var owl = $('.owl-carousel');
                                owl.owlCarousel({
                                    margin: 5,
                                    nav: true,
                                    loop: true,
                                    responsive: {
                                        0: {
                                            items: 1
                                        },
                                        600: {
                                            items: 3
                                        },
                                        1000: {
                                            items: 3
                                        }
                                    }
                                })
                            })
                        </script>
                        <div class="col-md-12 home-bottom-news">
                            <h2>General Knowledge</h2>
                            <div class="owl-carousel owl-theme">
                                @foreach($general  as $generals)
                                    @if($generals->delete_raw == 0)
                                    <div class="item">
                                        <div class="news">
                                            <div class="img-figure">
                                                <div class="cat">{{$generals->general_type}}</div>
                                                <img src="images/general-image/{{$generals->general_image}}" class="img-responsive">
                                            </div>
                                            <div class="title">
                                                <h1>{{$generals->general_title}}</h1>
                                            </div>
                                            <p class="description">{{$generals->general_content}}</p>
                                            <p class="more">
                                                <a href="{{$generals->general_url}}" target="_blank">read more</a>
                                            </p>
                                        </div>
                                    </div>
                                    @else
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <script type="text/javascript">
                            $(document).ready(function() {
                                var owl = $('.owl-carousel');
                                owl.owlCarousel({
                                    margin: 5,
                                    nav: true,
                                    loop: true,
                                    responsive: {
                                        0: {
                                            items: 1
                                        },
                                        600: {
                                            items: 3
                                        },
                                        1000: {
                                            items: 3
                                        }
                                    }
                                })
                            })
                        </script>

                        <script>(function(d, s, id) {
                          var js, fjs = d.getElementsByTagName(s)[0];
                          if (d.getElementById(id)) return;
                          js = d.createElement(s); js.id = id;
                          js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8";
                          fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));</script>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php echo View::make('include/footer'); ?>

</body>
</html>