@push('addon-script')
    <script>
    // button create post event
    $('body').on('click','#btn-delete-post', function(e){
        let file_id = $(this).data('id');
        let token = $("meta[name='csrf-token']").attr("content");

        Swal.fire({
            title: 'Are you sure?',
            text: "Apakah anda yakin untuk Delete file ini?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                console.log('masuk yes confirm');
                
                $.ajax({
                    url: $(this).data('route'),
                    type: "DELETE",
                    cache: false,
                    data: {
                        "id": file_id,
                        "_token": token
                    },
                    
                    success: function(response) {
                        console.log('masuk success');

                        //remove row of post on table
                        $(`#index_${file_id}`).remove();

                        // show success message
                        Swal.fire('Deleted!', response.message, 'success', 1500);
                    },

                    error: function(response) {
                        console.log('Error pada:', response);
                    }
                });
            }
        })
    });
</script>
@endpush
