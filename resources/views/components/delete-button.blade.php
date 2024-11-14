<form action="{{$href}}" method="POST"
class="d-inline" id="deleteForm-{{$id}}">
   @csrf
   @method('DELETE')
   <button type="button" class="btn btn-sm btn-danger" onclick="confirmDelete({{$id}})">
       <i class="fe fe-trash-2 fa-2x"></i>
   </button>
</form>

<script>
    function confirmDelete(id){
        if(confirm('Are you sure you want to delete this record ?'))
        {
            document.getElementById('deleteForm-'+id).submit()
        }
    }
</script>