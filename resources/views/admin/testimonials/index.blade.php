@extends('admin.master')
@section('title',__('keywords.testimonials'))
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
                    <h2 class="h5 page-title">{{__('keywords.testimonials')}}</h2>
                    <div class="page-title-right">
                        <x-action-button href="{{route('admin.testimonials.create')}}" type="create"></x-action-button>
                    </div>

                </div>


                <div class="card shadow">
                    <div class="card-body">
                    <x-success-alert></x-success-alert>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th width="5%">#</th>
                                <th>{{__('keywords.name')}}</th>
                                <th>{{__('keywords.position')}}</th>
                                <th width="10%">{{__('keywords.image')}}</th>
                                <th width="15%">{{__('keywords.actions')}}</th>
                            </tr>
                            </thead>

                            <tbody>
                            @if($testimonials->isNotEmpty())
                                @php $i = $testimonials->firstItem(); @endphp
                                @foreach($testimonials as $testimonial)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{$testimonial->name}}</td>
                                        <td>{{$testimonial->position}}</td>
                                        <td>
                                            <img src="{{asset("storage/testimonials/$testimonial->image")}}" width="50px">
                                        </td>
                                        <td>
                                            <x-action-button href="{{route('admin.testimonials.edit',['testimonial'=>$testimonial])}}" type="edit"></x-action-button>
                                            <x-action-button href="{{route('admin.testimonials.show',['testimonial'=>$testimonial])}}" type="show"></x-action-button>
                                            <x-delete-button href="{{route('admin.testimonials.destroy',['testimonial'=>$testimonial])}}" id="{{$testimonial->id}}"></x-delete-button>
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
                            {!! $testimonials->links('pagination::bootstrap-5') !!}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
