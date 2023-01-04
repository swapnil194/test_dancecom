$(document).ready(function () 
{
  var action = ADMINURL + '/menus_settings/getRecords';
  const table = $('#listingTable').DataTable(
    {
      "responsive": true,
      "processing": true,
      "bFilter": true,
      "bInfo": true,
      "bLengthChange": true,
      //"pagingType": "full_numbers",
      "serverSide": 'true',
      "ajax": {
          "url": action,
          "data": function (object) 
          {
            object.custom = {
              "name" :  $('#name').val(),
              "url" : $('#url').val(),
              "status" : $('#status').val(),
            }
          }
        },
      "columns": [
        { "data": "id", "visible": false },
        { "data": "name" },
        { "data": "url" },
        { "data": "status" },
        { "data": "actions" }
      ],

      "aoColumnDefs": [{ "bSortable": false, "aTargets": [0] }],
      "lengthMenu": [[20, 25, 50, 100], [20, 25, 50, 100]],
      "aaSorting": [[0, 'DESC']],
      "language": {
          "info": PAGE_SHOW+" _START_ "+PAGE_TO+" _END_ "+PAGE_OF+" _TOTAL_",
          "infoEmpty": PAGE_SHOW+" 0 "+PAGE_TO+" 0 "+PAGE_OF+" 0",
        },
        "oLanguage": {
          "sLengthMenu": "Show _MENU_ entries",
          "sSearch": "Search",
          "oPaginate": {
            "sPrevious": "Previous",
            "sNext": "Next"
          },
          "infoFiltered": "(filtered from _MAX_ entries)"
        }
    });

  table.on("draw.dt", function (e) 
  {
    setCustomPagingSigns.call($(this));
  }).each(function () {
    setCustomPagingSigns.call($(this));
  });

  function setCustomPagingSigns() {
    var wrapper = this.parent();
    // set global class
    wrapper.find('.dataTables_info').addClass('card-subtitle pb-0');
    // entries info class
    wrapper.find('tbody tr').addClass('inner-td');
  }
});  // document ready function close.

function deleteCollection(element) 
{
  var $this = $(element);
  var action = $this.attr('data-href');
  if (action != '') {
     swal({
      title: deleteContent.title,
      text: deleteContent.text,
      type: "warning",
      showCancelButton: true,
      cancelButtonText: deleteContent.cancel,
      confirmButtonText: deleteContent.confirm,
      confirmButtonClass: "btn-danger",
      closeOnConfirm: false,
      showLoaderOnConfirm: true
    },
      function () {
        axios.delete(action)
          .then(function (response) {
            if (response.data.status === 'success') {
              swal("Success", response.data.msg, 'success');
              $('#listingTable').DataTable().ajax.reload();
            }
            if (response.data.status === 'error') {
              swal("Error", response.data.msg, 'error');
            }
          })
          .catch(function (error) {
            // swal("Error",error.response.data.msg,'error');
          });
      });
  }
}

function doSearch(element)
{
  $('#listingTable').DataTable().draw();
}

function removeSearch(element)
{ 
  $('#product-code').val(''),
  $('#batch-card-no').val(''),
  $('#listingTable').DataTable().draw();
}

// processing message in german
$.extend( $.fn.dataTable.defaults, {
  language: {
    "processing": "Processing..."
  },
});