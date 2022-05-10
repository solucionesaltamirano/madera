<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $('.deleteConfirm').submit(function(e){
        e.preventDefault()
        Swal.fire({
            title: 'Esta seguro?',
            text: "No podrá revertir esta operación!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, Borrar!',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                // Swal.fire(
                //     'Deleted!',
                //     'Your file has been deleted.',
                //     'success'
                // )
                this.submit();
            }
        })
    })
</script>