@extends('index')
        <div class="container">
          <div class="row">
            <div class="col-lg-8 posts-list">
              <div class="single-post row">
                <div class="col-lg-12">
                  <div class="feature-img">
                    <img class="img-fluid" src="{{url('template3/img/blog/')}}/{{$data->foto}}" alt="">
                  </div>                  
                </div>
                <div class="col-lg-9 col-md-9">
                  <h3 class="mt-20 mb-20">{{$data->judul}}</h3>
                  <p class="excert">
                    {{$data->deskripsi}}
                  </p>
                  
                </div>
              </div>
            </div>
          </div>
        </div>  