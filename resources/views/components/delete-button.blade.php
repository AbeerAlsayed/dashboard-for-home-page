<form action="{{$href}}" class="d-inline" method="post" id="deleteForm-{{$id}}">
    @csrf
    @method('Delete')
    <button type="button" class="btn btn-sm btn-danger text-white" onclick="confirmDelete({{$id}})">
        <i class="fe fe-trash-2 fa-2x"></i>
    </button>
</form>
