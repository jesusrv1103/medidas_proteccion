"use strict";
var KTDatatablesAdvancedColumnVisibility = function() {

	var initTable1 = function() {
		var table = $('#kt_table_1');

		// begin first table
		table.DataTable({
			responsive: true,
			createdRow: function(row, data, index) {
				var cell = $('td', row).eq(6);
			
				cell.html(KTUtil.numberString(data[6]));
			},
		});
	};

	return {

		//main function to initiate the module
		init: function() {
			initTable1();
		},

	};

}();

jQuery(document).ready(function() {
	KTDatatablesAdvancedColumnVisibility.init();
});