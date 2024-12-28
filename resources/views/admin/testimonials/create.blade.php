@extends('admin.master')
@section('title',__('keywords.add_new_testimonial'))
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="h5 page-title">{{__('keywords.add_new_testimonial')}}</h2>


                <div class="card shadow">
                    <div class="card-body">
                       <form action="{{route('admin.testimonials.store')}}" method="post" enctype="multipart/form-data">
                           @csrf
                           <div class="row">
                               <div class="col-md-6">
                                   <x-form-lable name="name"></x-form-lable>
                                       <input type="text" class="form-control" name="name" placeholder="{{__('keywords.name')}}">
                               <x-validation-error name="name"></x-validation-error>
                               </div>
                               <div class="col-md-6">
                                   <x-form-lable name="position"></x-form-lable>
                                       <input type="text" class="form-control" name="position" placeholder="{{__('keywords.position')}}">
                                   <x-validation-error name="position"></x-validation-error>

                               </div>
                               <div class="col-md-12">
                                   <x-form-lable name="image"></x-form-lable>
                                   <input type="file" class="form-control-file" name="image">
                                   <x-validation-error name="image"></x-validation-error>

                               </div>
                               <div class="col-md-12 mt-2">
                                   <x-form-lable name="description"></x-form-lable>
                                       <textarea class="form-control" rows="4" name="description" placeholder="{{__('keywords.description')}}"></textarea>
                                   <x-validation-error name="description"></x-validation-error>

                               </div>
                           </div>
                           <x-submit-button></x-submit-button>
                       </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
