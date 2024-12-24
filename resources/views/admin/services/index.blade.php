@extends('admin.master')
@section('title',__('keywords.services'))
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="h5 page-title">{{__('keywords.services')}}</h2>
                <div class="card shadow">
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th width="5%">#</th>
                                <th>{{__('keywords.title')}}</th>
                                <th width="10%">{{__('keywords.icon')}}</th>
                                <th width="15%">{{__('keywords.actions')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(count($services)>0)
                                @foreach($services as $key => $service)
                                    {{$i=0}}
                                <tr>
                                    <td>{{++$i}}</td>
                                    <td>{{$service->title}}</td>
                                    <td>
                                        <i class="{{$service->icon}} fa-2x"></i>
                                    </td>
                                    <td>
                                        <a class="btn btn-success">
                                            <i class="fe fe-edit fa-2x"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            @else
                            <tr >
                                <td colspan="4">
                                    <div class="alert alert-danger"> {{__('keywords.no_record_found')}} </div>
                                 </td>
                            </tr>
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
