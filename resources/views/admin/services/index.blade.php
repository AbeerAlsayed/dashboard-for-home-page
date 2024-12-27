@extends('admin.master')
@section('title',__('keywords.services'))
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
                    <h2 class="h5 page-title">{{__('keywords.services')}}</h2>
                    <div class="page-title-right">
                        <a href="{{route('admin.services.create')}}" class="btn btn-sm btn-primary text-white">
                            {{__('keywords.add_new')}}
                        </a>
                    </div>

                </div>


                <div class="card shadow">
                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show m-2" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
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
                            @if($services->isNotEmpty())
                                @php $i = $services->firstItem(); @endphp
                                @foreach($services as $service)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{$service->title}}</td>
                                        <td>
                                            <i class="{{$service->icon}} fa-2x"></i>
                                        </td>
                                        <td>
                                            <a href="{{route('admin.services.edit',['service'=>$service])}}" class="btn btn-sm btn-success text-white">
                                                <i class="fe fe-edit fa-2x"></i>
                                            </a>
                                            <a href="{{route('admin.services.show',['service'=>$service])}}" class="btn btn-sm btn-primary text-white">
                                                <i class="fe fe-eye fa-2x"></i>
                                            </a>
                                            <form action="{{route('admin.services.destroy',['service'=>$service])}}" class="d-inline" method="post" id="deleteForm-{{$service->id}}">
                                                @csrf
                                                @method('Delete')
                                                <button type="button" class="btn btn-sm btn-danger text-white" onclick="confirmDelete({{$service->id}})">
                                                    <i class="fe fe-trash-2 fa-2x"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="4">
                                        <div class="alert alert-danger"> {{__('keywords.no_record_found')}} </div>
                                    </td>
                                </tr>
                            @endif
                            </tbody>
                        </table>

                        <!-- Pagination Links -->
                        <div class="d-flex justify-content-center mt-4">
                            {!! $services->links('pagination::bootstrap-5') !!}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function confirmDelete(id){

          if(confirm('Are you sure you want to delete this record ?')){
                document.getElementById('deleteForm-'+id).submit();
            }
        }
    </script>
@endsection
