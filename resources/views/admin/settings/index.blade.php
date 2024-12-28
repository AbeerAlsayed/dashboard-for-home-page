@extends('admin.master')
@section('title',__('keywords.edit_setting'))
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="h5 page-title">{{__('keywords.edit_setting')}}</h2>


                <div class="card shadow">
                    <div class="card-body">
                        <x-success-alert></x-success-alert>
                       <form action="{{route('admin.settings.update',['setting'=>$setting])}}" method="post" enctype="multipart/form-data">
                           @csrf
                           @method('PUT')
                           <div class="row">
                               <div class="col-md-6">
                                   <x-form-lable name="address"></x-form-lable>
                                       <input type="text" class="form-control" name="address" placeholder="{{__('keywords.address')}}" value="{{$setting->address}}">
                                   <x-validation-error name="address"></x-validation-error>
                               </div>
                               <div class="col-md-6">
                                   <x-form-lable name="phone"></x-form-lable>
                                   <input type="text" class="form-control" name="phone" placeholder="{{__('keywords.phone')}}" value="{{$setting->phone}}">
                                   <x-validation-error name="phone"></x-validation-error>
                               </div>
                               <div class="col-md-6">
                                   <x-form-lable name="email"></x-form-lable>
                                   <input type="text" class="form-control" name="email" placeholder="{{__('keywords.email')}}" value="{{$setting->email}}">
                                   <x-validation-error name="email"></x-validation-error>
                               </div>
                               <div class="col-md-6">
                                   <x-form-lable name="facebook"></x-form-lable>
                                   <input type="text" class="form-control" name="facebook" placeholder="{{__('keywords.facebook')}}" value="{{$setting->facebook}}">
                                   <x-validation-error name="facebook"></x-validation-error>
                               </div>
                               <div class="col-md-6">
                                   <x-form-lable name="twitter"></x-form-lable>
                                   <input type="text" class="form-control" name="twitter" placeholder="{{__('keywords.twitter')}}" value="{{$setting->twitter}}">
                                   <x-validation-error name="twitter"></x-validation-error>
                               </div>
                               <div class="col-md-6">
                                   <x-form-lable name="linkedin"></x-form-lable>
                                   <input type="text" class="form-control" name="linkedin" placeholder="{{__('keywords.linkedin')}}" value="{{$setting->linkedin}}">
                                   <x-validation-error name="linkedin"></x-validation-error>
                               </div>
                               <div class="col-md-6">
                                   <x-form-lable name="instagram"></x-form-lable>
                                   <input type="text" class="form-control" name="instagram" placeholder="{{__('keywords.instagram')}}" value="{{$setting->instagram}}">
                                   <x-validation-error name="instagram"></x-validation-error>
                               </div>
                               <div class="col-md-6">
                                   <x-form-lable name="youtube"></x-form-lable>
                                   <input type="text" class="form-control" name="youtube" placeholder="{{__('keywords.youtube')}}" value="{{$setting->youtube}}">
                                   <x-validation-error name="youtube"></x-validation-error>
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
