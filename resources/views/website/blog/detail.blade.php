<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Bloggy - Personal Blog Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="{{asset('/')}}website_asset/img/favicon.ico" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:300;400;600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('/')}}website_asset/css/style.css" rel="stylesheet">
</head>

<body>
<div class="wrapper">
    <div class="sidebar">
        <div class="sidebar-text d-flex flex-column h-100 justify-content-center text-center">
            <img class="mx-auto d-block w-75 bg-primary img-fluid rounded-circle mb-4 p-3" src="{{asset('/')}}website_asset/img/profile.jpg" alt="Image">
            <h1 class="font-weight-bold">Kate Glover</h1>
            <p class="mb-4">
                Justo stet no accusam stet invidunt sanctus magna clita vero eirmod, sit sit labore dolores lorem. Lorem at sit dolor dolores sed diam justo
            </p>
            <div class="d-flex justify-content-center mb-5">
                <a class="btn btn-outline-primary mr-2" href="#"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-outline-primary mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-outline-primary mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-outline-primary mr-2" href="#"><i class="fab fa-instagram"></i></a>
            </div>
            <a href="" class="btn btn-lg btn-block btn-primary mt-auto">Hire Me</a>
        </div>
        <div class="sidebar-icon d-flex flex-column h-100 justify-content-center text-right">
            <i class="fas fa-2x fa-angle-double-right text-primary"></i>
        </div>
    </div>
    <div class="content">
        <!-- Navbar Start -->
        <div class="container p-0">
            <nav class="navbar navbar-expand-lg bg-secondary navbar-dark">
                <a href="" class="navbar-brand d-block d-lg-none">Navigation</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav m-auto">
                        <a href="{{route('home')}}" class="nav-item nav-link">Home</a>
                        <a href="" class="nav-item nav-link">About</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle active" data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu">
                                <a href="blog.html" class="dropdown-item">Blog Grid</a>
                                <a href="single.html" class="dropdown-item">Blog Detail</a>
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Navbar End -->

        <!-- Page Header Start -->
        <div class="container py-5 px-2 bg-primary">
            <div class="row py-5 px-4">
                <div class="col-sm-6 text-center text-md-left">
                    <h1 class="mb-3 mb-md-0 text-white text-uppercase font-weight-bold">Blog Detail</h1>
                </div>
                <div class="col-sm-6 text-center text-md-right">
                    <div class="d-inline-flex pt-2">
                        <h4 class="m-0 text-white"><a class="text-white" href="">Home</a></h4>
                        <h4 class="m-0 text-white px-2">/</h4>
                        <h4 class="m-0 text-white">Blog Detail</h4>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- Blog Detail Start -->
        <div class="container py-5 px-2 bg-white">
            <div class="row px-4">
                <div class="col-12">
                    <img class="img-fluid mb-4" src="{{asset('/')}}website_asset/img/detail.jpg" alt="Image">
                    <h2 class="mb-3 font-weight-bold">{{$blogPost->title}}</h2>
                    <div class="d-flex">
                        <p class="mr-3 text-muted"><i class="fa fa-calendar-alt"></i>{{$blogPost->created_at->diffForHumans()}}</p>
                        <p class="mr-3 text-muted"><i class="fa fa-folder"></i> Category </p>
                        <p class="mr-3 text-muted"><i class="fa fa-comments"></i>{{count($blogPost->comments)}}</p>
                    </div>
                    <p>
                       {!! $blogPost->blog !!}
                    </p>
                    <h3 class="mb-3 font-weight-bold"> New Tag </h3>
                    <img class="w-50 float-left mr-4 mb-3" src="{{asset($blogPost->image)}}" alt="Image">
                    <p>Diam dolor est labore duo invidunt ipsum clita et, sed et lorem voluptua tempor invidunt at est sanctus sanctus. Clita dolores sit kasd diam takimata justo diam lorem sed. Magna amet sed rebum eos. Clita no magna no dolor erat diam tempor rebum consetetur, sanctus labore sed nonumy diam lorem amet eirmod. No at tempor sea diam kasd, takimata ea nonumy elitr sadipscing gubergren erat. Gubergren at lorem invidunt sadipscing rebum sit amet ut ut, voluptua diam dolores at sadipscing stet. Clita dolor amet dolor ipsum vero ea ea eos. Invidunt sed diam dolores takimata dolor dolore dolore sit. Sit ipsum erat amet lorem et, magna sea at sed et eos. Accusam eirmod kasd lorem clita sanctus ut consetetur et. Et duo tempor sea kasd clita ipsum et. Takimata kasd diam justo est eos erat aliquyam et ut. Ea sed sadipscing no justo et eos labore, gubergren ipsum magna dolor lorem dolore, elitr aliquyam takimata sea kasd dolores diam, amet et est accusam labore eirmod vero et voluptua. Amet labore clita duo et no. Rebum voluptua magna eos magna, justo gubergren labore sit voluptua eos. Dolores et no stet magna et gubergren amet dolor sit, lorem dolore est vero et.</p>
                </div>
                <div class="col-12 py-4">
                    <a href="" class="btn btn-sm btn-outline-primary mb-1">Lorem</a>
                    <a href="" class="btn btn-sm btn-outline-primary mb-1">Lorem</a>
                    <a href="" class="btn btn-sm btn-outline-primary mb-1">Lorem</a>
                    <a href="" class="btn btn-sm btn-outline-primary mb-1">Lorem</a>
                    <a href="" class="btn btn-sm btn-outline-primary mb-1">Lorem</a>
                    <a href="" class="btn btn-sm btn-outline-primary mb-1">Lorem</a>
                    <a href="" class="btn btn-sm btn-outline-primary mb-1">Lorem</a>
                </div>
                <div class="col-12 py-4">
                    <div class="btn-group btn-group-lg w-100">
                        <button type="button" class="btn btn-outline-primary"><i class="fa fa-angle-left mr-2"></i> Previous</button>
                        <button type="button" class="btn btn-outline-primary">Next<i class="fa fa-angle-right ml-2"></i></button>
                    </div>
                </div>
                <div class="col-12 py-4">
                    <h3 class="mb-4 font-weight-bold">3 Comments</h3>
                  @foreach($blogPost->comments as $comment)
                        <div class="media mb-4">
                        <img src="{{asset('/')}}website_asset/img/user.jpg" alt="Image" class="mr-3 mt-1 rounded-circle"
                             style="width:60px;">
                        <div class="media-body">
                            <h4>{{$comment->name}} <small><i>{{$comment->updated_at->diffForHumans()}}</i></small></h4>
                            <p>
                                {{$comment->comment}}

                            </p>
                            <button class="btn btn-sm btn-light" onclick="myFunction()">Reply</button>

                            <p id="demo"></p>
                            <script>
                                function myFunction() {
                                    document.getElementById("demo").innerHTML = `
                                <div class="col-12">
                                    <form action="{{route('newSubComment')}}" method="post" id="demo">
                                        @csrf

                                        <input type="hidden" class="form-control" name="blog_id"    value="{{$blogPost->id}}">

                                        <input type="hidden" class="form-control" name="comment_id" value="{{$comment->id}}">

                                        <div class="form-group">
                                            <label for="name">Name *</label>
                                            <input type="text" class="form-control" id="name" name="name">
                                        </div>

                                        <div class="form-group">
                                            <label for="email">Email *</label>
                                            <input type="email" class="form-control" id="email" name="email">
                                        </div>

                                        <div class="form-group">
                                            <label for="message">Comment *</label>
                                            <textarea id="message" cols="30" rows="5" class="form-control" name="comment"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <input type="submit" value="Reply To {{$comment->name}}" class="btn btn-primary">
                                        </div>
                                    </form>
                            </div>
                                    `;
                                }
                            </script>


                            @foreach($comment->subComments as $subcomment)
                            <div class="media mt-4">

                                <img src="{{asset('/')}}website_asset/img/user.jpg" alt="Image" class="mr-3 mt-1 rounded-circle"
                                     style="width:60px;">
                                <div class="media-body">
                                    <h4>{{$subcomment->name}} <small><i>{{$subcomment->updated_at->diffForHumans()}}</i></small></h4>
                                    <p>
                                        {{$subcomment->comment}}
                                    </p>

                                </div>
                            </div>
                            @endforeach



                        </div>
                    </div>
                    @endforeach

                </div>
                <div class="col-12">
                    <h3 class="mb-4 font-weight-bold">Leave a comment</h3>
                    <form action="{{route('newComment')}}" method="post">
                        @csrf

                        <input type="hidden" class="form-control" name="blog_id" value="{{$blogPost->id}}">

                        <div class="form-group">
                            <label for="name">Name *</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>

                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>

                        <div class="form-group">
                            <label for="message">Comment *</label>
                            <textarea id="message" cols="30" rows="5" class="form-control" name="comment"></textarea>
                        </div>

                        <div class="form-group">
                            <input type="submit" value="Leave Comment" class="btn btn-primary">
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <!-- Blog Detail End -->

        <!-- Footer Start -->
        <div class="container py-4 bg-secondary text-center">
            <p class="m-0 text-white">
                &copy; <a class="text-white font-weight-bold" href="#">Your Site Name</a>. All Rights Reserved. Designed by <a class="text-white font-weight-bold" href="https://htmlcodex.com">HTML Codex</a>
            </p>
        </div>
        <!-- Footer End -->
    </div>
</div>

<!-- Back to Top -->
<a href="#" class="back-to-top"><i class="fa fa-angle-double-up"></i></a>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('/')}}website_asset/lib/easing/easing.min.js"></script>
<script src="{{asset('/')}}website_asset/lib/waypoints/waypoints.min.js"></script>

<!-- Contact Javascript File -->
<script src="{{asset('/')}}website_asset/mail/jqBootstrapValidation.min.js"></script>
<script src="{{asset('/')}}website_asset/mail/contact.js"></script>

<!-- Template Javascript -->
<script src="{{asset('/')}}website_asset/js/main.js"></script>
</body>
</html>

