
<!--Start Modal -->
<div class="modal fade" id="modal-upload" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title h3"><strong>Upload File</strong></div>
            </div>
            <form action="#" method="POST" id="add_file_form" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="asset_id" id="asset_id" value="{{ $item->id }}">
                    <div class="form-group">
                        <input type="file" class="form-control-file" id="fileUpload"
                            name="name">
                    </div>
                    <div class="form-group">
                        <label for="note">Note (optional)</label>
                        <textarea name="note" class="form-control" id="note" rows="5"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="store">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--End Modal -->

@push('addon-script')
<script>
    //button create post event pada tombol TAMBAH->id
    $('body').on('click', '#btn-upload-file', function() {
        //open modal        
        $('#modal-upload').modal('show');
    });
    
    //action
    //action create post
    $('#store').click(function(e) {
        e.preventDefault();
        let fd = new FormData(document.getElementById("add_file_form"));
        // console.log(fd);
        $("#store").text('Adding...');

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: `{{ route('upload-file') }}`,
            type: "POST",
            data: fd,
            cache: false,
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function(response) {
                 console.log('masuk success');
                if (response.status == 200) {
                    Swal.fire(
                        'Added!',
                        'Document Added Successfully!',
                        'success'
                    );

                    let routedata = `{{ route('destroy-file', ":id" ) }}`;
                    routedata = routedata.replace(':id', response.data.id);

                    if (response.data.note !== null) {
                        datanote = response.data.note;
                    }
                    // define variable post element row html                    
                    let addRow = `
                        <tr id="index_${response.data.id}">
                            <td><img src="${response.imagePath}" alt="" style="max-width: 150px"></td>
                            <td>${response.data.fileName}</td>
                            <td>${response.data.note}</td>
                            <td>${formatFileSize(response.data.fileSize)}</td>
                            <td>
                                <a href="${response.imagePath}" class="btn btn-default btn-sm px-2" data-toggle="tooltip" data-placement="top" title="Download" target="_blank">
                                    <i class="fas fa-download fa-lg"></i>
                                </a>
                                <a href="javascript:void(0)" id="btn-delete-post" 
                                    data-id="${response.data.id}" data-route="${routedata}"
                                    class="btn btn-danger btn-sm">DELETE</a>
                            </td>
                        </tr>
                    `;

                    //append to table untuk menerapkan element ke dalam <tbody id='table-posts'>
                    $('#table-file').prepend(addRow).before("</tbody>");
                }
                $("#store").text('Save');
                $("#add_file_form")[0].reset();
                $("#modal-upload").modal('hide');
            },
            error: function(response) {
                var errorMessage = '';
                @foreach ($errors->all() as $error)
                    errorMessage += '{{ $error }}';
                    errorMessage += '\n';
                @endforeach

                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: errorMessage,
                });
            }
            
        });

    });

    function formatFileSize(bytes,decimalPoint) {
        if(bytes == 0) return '0 Bytes';
        var k = 1000,
            dm = decimalPoint || 2,
            sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'],
            i = Math.floor(Math.log(bytes) / Math.log(k));
        return parseFloat((bytes / Math.pow(k, i)).toFixed(dm)) + ' ' + sizes[i];
    }
</script>
@endpush