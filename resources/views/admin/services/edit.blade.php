@extends('admin.master')
@section('title',__('keywords.edit_service'))
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="h5 page-title">{{__('keywords.edit_service')}}</h2>


                <div class="card shadow">
                    <div class="card-body">
                       <form action="{{route('admin.services.update',['service'=>$service])}}" method="post" enctype="multipart/form-data">
                           @csrf
                           @method('PUT')
                           <div class="row">
                               <div class="col-md-6">
                                   <x-form-lable name="title"></x-form-lable>
                                       <input type="text" class="form-control" name="title" placeholder="{{__('keywords.title')}}" value="{{$service->title}}">
                                   <x-validation-error name="title"></x-validation-error>

                               </div>
                               <div class="col-md-6">
                                   <x-form-lable name="icon"></x-form-lable>
                                   <input type="text" class="form-control" name="icon" placeholder="{{__('keywords.icon')}}" value="{{$service->icon}}">
                                   <x-validation-error name="icon"></x-validation-error>

                               </div>
                               <div class="col-md-12 mt-2">
                                   <x-form-lable name="description"></x-form-lable>
                                   <textarea class="form-control" rows="4" name="description" placeholder="{{__('keywords.description')}}">{{$service->description}}</textarea>
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
