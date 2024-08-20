"use strict";

/**ajax loader **/

const ajaxindicatorstart = (text) => {
    if($('body').find('#resultLoading').attr('id') !== 'resultLoading'){
        $('body').append(`<div id="resultLoading" style="display:none"><div><div>${text}</div></div><div class="bg"></div></div>`);
    }

    $('#resultLoading').css({
        'width':'100%',
        'height':'100%',
        'position':'fixed',
        'z-index':'10000000',
        'top':'0',
        'left':'0',
        'right':'0',
        'bottom':'0',
        'margin':'auto'
    });

    $('#resultLoading .bg').css({
        'background':'#000000',
        'opacity':'0.7',
        'width':'100%',
        'height':'100%',
        'position':'absolute',
        'top':'0'
    });

    $('#resultLoading>div:first').css({
        'width': '250px',
        'height':'75px',
        'text-align': 'center',
        'position': 'fixed',
        'top':'0',
        'left':'0',
        'right':'0',
        'bottom':'0',
        'margin':'auto',
        'font-size':'16px',
        'z-index':'10',
        'color':'#ffffff'
    });

    $('#resultLoading .bg').height('100%');
    $('#resultLoading').fadeIn(300);
    $('body').css('cursor', 'wait');
}

const ajaxindicatorstop = () => {
    $('#resultLoading .bg').height('100%');
    $('#resultLoading').fadeOut(300);
    $('body').css('cursor', 'default');
}

/**ajax loader **/

(function ($) {
    $("input").prop("autocomplete", "off");

    const snackbar = (text) => {
        const options = {
            text: text, duration: 5000, pos: 'bottom-center', actionTextColor: '#EB1616',
            textColor: '#000000', backgroundColor: '#FFFFFF'
        };

        Snackbar.show(options);
    }

    if($("input[name=show_toast]").val()) snackbar($("input[name=show_toast]").val());

    if($(".ajax-form").length){
        let rules;
        
        if(typeof rule == 'undefined') {
            rules = {
                password: {
                    required: window.location.href.includes('profile') === true ? false : true,
                    maxlength: 50
                },
                mobile: {
                    required: true,
                    digits: true,
                    maxlength: 10,
                    minlength: 10
                },
                otp: {
                    required: true,
                    digits: true,
                    maxlength: 6,
                    minlength: 6
                },
                email: {
                    required: true,
                    maxlength: 100,
                    email: true
                },
                name: {
                    required: true,
                    maxlength: 100
                }
            };
        } else {
            rules = rule;
        }

        $(".ajax-form").validate({
            rules: rules,
            errorPlacement: function(error, element) {},
            submitHandler: function(form) {
                submitForm(form);
            }
        });
    }

    const submitForm = (form) => {
        const deferred = $.Deferred();
        const data = new FormData(form);
        $.ajax({
            url: $(form).attr('action'),
            type: "POST",
            data: data,
            dataType: 'json',
            processData: false,
            contentType: false,
            beforeSend: function() {
                ajaxindicatorstart("Please wait...");
                $('.error-message').html('');
            },
            error: function(jqXHR) {
                snackbar(ajax_error_message_rsp(jqXHR));
            },
            success: function(result) {
                deferred.resolve(result);
                if(result.validate === true && typeof result.message === 'object') {
                    for (let error in result.message) {
                        $(`#error-${error}`).html(result.message[error]);
                    }
                } else snackbar(result.message);

                if(result.redirect) {
                    setTimeout(() => {
                        window.location.href = result.redirect;
                    }, 1500);
                }
            },
            complete: function() {
                ajaxindicatorstop();
            }
        });

        return deferred.promise();
    };
    
    const ajax_error_message_rsp = function (jqXHR){
        switch (jqXHR.status) {
            case 0:
                return 'Not connect.\n Verify Network.';
            case 404:
                return 'Requested page not found. [404]';
            case 500:
                return 'Internal Server Error [500].';
            case 'parsererror':
                return 'Requested JSON parse failed.';
            case 'timeout':
                return 'Time out error.';
            case 'abort':
                return 'Ajax request aborted.';

            default:
                return 'Uncaught Error. Try reload the page.';
        }
    }

    if($( ".datepicker" ).length > 0) {
        $( ".datepicker" ).datetimepicker({
			changeMonth: true,
			changeYear: true,
			yearRange: '2020:+50',
			pickTime: false,
            format: 'DD-MM-YYYY'
		});

        $(document).on('contextmenu', '.datepicker', function(e) {
            e.preventDefault();
        });

        $(document).on('keydown', '.datepicker', function(e) {
            e.preventDefault();
        });
    }

    $('[data-toggle="tooltip"]').tooltip();

    if($('.datatable').length > 0) {
        const table = $('.datatable').DataTable({
            "pagingType": "full_numbers",
            "lengthMenu": [
                [10, 20, 30, 50, -1],
                [10, 20, 30, 50, "All"]
            ],
            dom: 'Bfrtip',
            buttons: [
                'pageLength',
                {
                    extend: 'copy',
                    footer: true,
                    exportOptions: {
                        columns: ':visible'
                    },
                },
                {
                    extend: 'csv',
                    footer: true,
                    exportOptions: {
                        columns: ':visible'
                    },
                },
                {
                    extend: 'excel',
                    footer: true,
                    exportOptions: {
                        columns: ':visible'
                    },
                    // customize: (xlsx) => {
                    //     $(xlsx.xl["styles.xml"]).find('numFmt[numFmtId="164"]').attr('formatCode', '[$$-en-AU]#,##0.00;')
                    // }
                },
                {
                    extend: 'colvis',
                    prefixButtons: [ 'colvisRestore' ]
                }
            ],
            columnDefs: [ {
                targets: -1,
                visible: false
            } ],
            "processing": true,
            "serverSide": true,
            'language': {
                'loadingRecords': '&nbsp;',
                'processing': 'Processing',
                'paginate': {
                    'first': 'First',
                    'next': '<i class="fa fa-arrow-circle-right"></i>',
                    'previous': '<i class="fa fa-arrow-circle-left"></i>',
                    'last': 'Last'
                }
            },
            "order": [],
            "ajax": {
                url: $("input[name='dataTableUrl']").val(),
                type: "POST",
                data: function(data) {
                    data.csrf_token = $("input[name='csrf_hash']").val();
                    data.c_level = $("input[name='c_level']").val();
                },
                complete: function(response) {
                    $('[data-toggle="tooltip"]').tooltip();
                },
            },
            "columnDefs": [{
                "targets": "target",
                "orderable": false,
            }, ]
        });

        $(document).on('click', '.delete-item', function(){
            const id = $(this).parent().attr('id');
            const tr = $(this).closest('tr');
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    submitForm(document.getElementById(id)).done(function(response) {
                        if(response.error === false) {
                            const currentPage = table.page();

                            table.ajax.reload(function() {
                                table.page(currentPage).draw('page');
                            });
                        }
                    });
                }
            });
        });
    }
    
    $(document).on('click', '.logout', function(e){
        e.preventDefault();
        const href = $(this).attr('href');
        Swal.fire({
            title: 'Are you sure?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Do it'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = href;
            }
        });
    });

    if($( ".select2" ).length > 0) {
        $('.select2').select2({
            placeholder: "Search to select",
        });
    }
})(jQuery);