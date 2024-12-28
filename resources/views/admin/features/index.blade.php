@extends('admin.master')
@section('title',__('keywords.features'))
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
                    <h2 class="h5 page-title">{{__('keywords.features')}}</h2>
                    <div class="page-title-right">
                        <x-action-button href="{{route('admin.features.create')}}" type="create"></x-action-button>
                    </div>

                </div>


                <div class="card shadow">
                    <div class="card-body">
                    <x-success-alert></x-success-alert>
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
                            @if($features->isNotEmpty())
                                @php $i = $features->firstItem(); @endphp
                                @foreach($features as $feature)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{$feature->title}}</td>
                                        <td>
                                            <i class="{{$feature->icon}} fa-2x"></i>
                                        </td>
                                        <td>
                                            <x-action-button href="{{route('admin.features.edit',['feature'=>$feature])}}" type="edit"></x-action-button>
                                            <x-action-button href="{{route('admin.features.show',['feature'=>$feature])}}" type="show"></x-action-button>
                                            <x-delete-button href="{{route('admin.features.destroy',['feature'=>$feature])}}" id="{{$feature->id}}"></x-delete-button>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <x-empty-alert></x-empty-alert>
                            @endif
                            </tbody>
                        </table>

                        <!-- Pagination Links -->
                        <div class="d-flex justify-content-center mt-4">
                            {!! $features->links('pagination::bootstrap-5') !!}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
