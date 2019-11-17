@extends('index')
@section('content')
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="menu-content pb-70 col-lg-8">
                            <div class="title text-center">
                                <h1 class="mb-10">Berita SMK Maskumambang 2</h1>
                            </div>
                        </div>
                    </div>                  
                    <div class="row">
                         @foreach($berita as $b)
                        <div class="col-lg-3 col-md-6 single-blog">
                            <div class="popular-course-thumb bg-img" style="background-image: url(background-image: url({{URL::to('img/'.$b->foto) }}););"></div>
                            <p class="meta">{{$b->created_at}} |  By <a href="{{url('/detil'.$b->id)}}">Admin</a></p>
                            <a href="blog-single.html">
                                <h5> {{$b->judul}}</h5>
                            </a>
                            <p>
                                Computers have become ubiquitous in almost every facet of our lives. At work, desk jockeys spend hours in front of their.
                            </p>
                            <a href="{{url('/detil'.$b->id)}}" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>      
                        </div> 
                         @endforeach                      
                    </div>
                    
                </div>            
@endsection