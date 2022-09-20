/*
Template Name: Nazox -  Admin & Dashboard Template
Author: Themesdesign
Contact: themesdesign.in@gmail.com
File: Ecommerce datatables Js File
*/


// datatable
$(document).ready(function() {
    $('.datatable').DataTable({
        "columns": [
            {'orderable': false},
            {'orderable': true},
            {'orderable': true},
            {'orderable': true},
            {'orderable': true},
            {'orderable': true},
            {'orderable': false}
        ],
        "order": [[ 1, "asc" ]],
        "language": {
            "paginate": {
                "previous": "<i class='mdi mdi-chevron-left'>",
                "next": "<i class='mdi mdi-chevron-right'>"
            }
        },
        "drawCallback": function () {
            $('.dataTables_paginate > .pagination').addClass('pagination-rounded');
        }
    });
    $(document).ready(function(){$(".datatable").DataTable()});
    $(".dataTables_length select").addClass('form-select form-select-sm');
    
});