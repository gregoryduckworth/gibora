<script>
    // When the delete button is hit, show the modal 
    // with the confirmation button
    $(document).on('click', btn, function (e) {
        e.preventDefault();
        var self = $(this);
        swal({
            title: "{!! trans('swal.are_you_sure') !!}",
            text: swal_text,
            icon: "warning",
            showLoaderOnConfirm: true,
            confirmButtonText: swal_confirm,
            closeOnConfirm: false,
            buttons: true,
        }).then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    icon: ajax_type,
                    url: ajax_route + "/" + self.data('id'),
                    data: {
                        id: self.data('id'),
                        _token: "{!! csrf_token() !!}",
                    },
                    dataType: "json",
                }).done(function (data) {
                    swal({
                        title: "{!! trans('swal.text_success') !!}",
                        text: swal_text,
                        icon: "success",
                    });
                    table.ajax.reload(null, false);
                }).fail(function (data) {
                    swal({
                        title: "{!! trans('swal.text_oops') !!}",
                        text: "{!! trans('swal.could_not_connect') !!}",
                        icon: "error",
                    });
                });
            } else {
                swal({
                    title: "{!! trans('swal.text_success') !!}",
                    text: "{!! trans('swal.not_deleted', ['type' => trans('users.user')]) !!}",
                    icon: "success",
                });
            }
        });
    });

</script>
