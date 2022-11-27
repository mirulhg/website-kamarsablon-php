$('.mydatatable').DataTable({
    searching: false,
    ordering: false,
    lengthMenu: [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]],
    createdRow: function (row, data, index) {
      if (data[5].replace(/[\$,]/g, '') * 1 > 15000) {
        $('td', row).eq(5).addClass('text-success');
      }
    }
  });