@extends('admin.master')
@section('title',__('keywords.show_company'))
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="h5 page-title">{{__('keywords.show_company')}}</h2>


                <div class="card shadow">
                    <div class="card-body">
                           <div class="row">
                               <div class="col-md-12">
                                   <label for="image">{{__('keywords.image')}}</label>
                                   <div>
                                       <img src="{{asset("storage/companies/$company->image")}}" width="50px">
                                   </div>
                               </div>
                           </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
