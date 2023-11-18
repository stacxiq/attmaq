$(function(e) {
	//file export datatable
	var table = $('#example').DataTable({
		lengthChange: false,
		buttons: [ 'copy', 'excel', 'pdf', 'colvis' ],
		responsive: true,
		language: {
<<<<<<< HEAD
			searchPlaceholder: 'بحث...',
=======
			searchPlaceholder: 'Search...',
>>>>>>> b71d6a1 (add notifications)
			sSearch: '',
			lengthMenu: '_MENU_ ',
		}
	});
	table.buttons().container()
	.appendTo( '#example_wrapper .col-md-6:eq(0)' );		
	
	$('#example1').DataTable({
		language: {
<<<<<<< HEAD
			searchPlaceholder: 'بحث...',
=======
			searchPlaceholder: 'Search...',
>>>>>>> b71d6a1 (add notifications)
			sSearch: '',
			lengthMenu: '_MENU_',
		}
	});
	$('#example2').DataTable({
		responsive: true,
		language: {
			searchPlaceholder: 'Search...',
			sSearch: '',
			lengthMenu: '_MENU_',
		}
	});
	var table = $('#example-delete').DataTable({
		responsive: true,
		language: {
			searchPlaceholder: 'Search...',
			sSearch: '',
			lengthMenu: '_MENU_',
		}
	}); 
    $('#example-delete tbody').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    } );
 
    $('#button').click( function () {
        table.row('.selected').remove().draw( false );
    } );
	
	//Details display datatable
<<<<<<< HEAD

	$('#example-1 thead tr')
	.clone(true)
	.addClass('filters')
	.appendTo('#example thead');


	$('#example-1').DataTable( {
		responsive: true,
		select:true,
		orderCellsTop: true,
        fixedHeader: true,
=======
	$('#example-1').DataTable( {
		responsive: true,
>>>>>>> b71d6a1 (add notifications)
		language: {
			searchPlaceholder: 'Search...',
			sSearch: '',
			lengthMenu: '_MENU_',
		},
<<<<<<< HEAD
    
=======
>>>>>>> b71d6a1 (add notifications)
		responsive: {
			details: {
				display: $.fn.dataTable.Responsive.display.modal( {
					header: function ( row ) {
						var data = row.data();
						return 'Details for '+data[0]+' '+data[1];
					}
				} ),
				renderer: $.fn.dataTable.Responsive.renderer.tableAll( {
					tableClass: 'table border mb-0'
				} )
			}
		}
	} );
});