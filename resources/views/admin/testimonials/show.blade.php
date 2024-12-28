@extends('admin.master')
@section('title',__('keywords.show_testimonial'))
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="h5 page-title">{{__('keywords.show_testimonial')}}</h2>


                <div class="card shadow">
                    <div class="card-body">
                           <div class="row">
                               <div class="col-md-5">
                                       <label for="title">{{__('keywords.name')}}</label>
                                   <p class="form-control">{{$testimonial->name}}</p>
                               </div>
                               <div class="col-md-5">
                                       <label for="position">{{__('keywords.position')}}</label>
                                   <div class="mt-2">
                                       <p class="form-control">{{$testimonial->position}}</p>
                                   </div>
                               </div>
                               <div class="col-md-2">
                                   <label for="image">{{__('keywords.image')}}</label>
                                   <div>
                                       <img src="{{asset("storage/testimonials/$testimonial->image")}}" width="50px">
                                   </div>
                               </div>
                               <div class="col-md-12">
                                       <label for="description">{{__('keywords.description')}}</label>
                                   <p class="form-control">{{$testimonial->description}}</p>
                               </div>
                           </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
