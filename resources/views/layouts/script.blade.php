<script type="text/javascript">


function openUserDeleteModal(id) {
   $('#user_id').val(id);
    $('#userDeleteForm').attr('action', "{{ route('user.destroy') }}");
    $('#userDeleteModel').modal('show');
}






</script>

