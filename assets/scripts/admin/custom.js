// custom js

// role list snippets 
$(document).ready(function() { 

     $('#role-list').DataTable({  
          "ajax" : base_url+"assets/data/"+lang+"/roles-data.json",  
          "columns" : [  
               { "data" : "role_name" },  
               { "data" : "description" },
               { "data" :  "id" }  
          ],
          "paging": true,
          "lengthChange": true,
          "lengthMenu": [ [10, 20, -1], [10, 20, "All"] ],
          "searching": true,
          "ordering": false,
          "columnDefs": [
              { "orderable": false, "targets": 2 },
              {
                  "targets": 2,
                  "data": "role_name",
                  "render": function ( data, type, row, meta ) {
                    if(row.role_name=='Administrator')
                      return '<div class="dropdown"><a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> '+action_txt+' </a> <div class="dropdown-menu" aria-labelledby="dropdownMenuLink"> <a class="dropdown-item" href="'+edit_role_link+'">'+action_edit_role+'</a></div></div>';     
                    else
                      return '<div class="dropdown"><a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> '+action_txt+' </a> <div class="dropdown-menu" aria-labelledby="dropdownMenuLink"> <a class="dropdown-item" href="'+edit_role_link+'">'+action_edit_role+'</a><a class="dropdown-item delete">'+action_delete_role+'</a></div></div>';                
                  }
               }
            ],
          "info": true,
          "autoWidth": false,
          "responsive": true,  
          "language": {
              "sProcessing":   datatable_processing_txt,
              "sLengthMenu":   datatable_show+" _MENU_ "+datatable_entries,
              "sZeroRecords":  datatable_no_records_found,
              "sInfo":         datatable_showing+" _START_ "+datatable_to+" _END_ "+datatable_of+" _TOTAL_ "+datatable_entries,
              "sInfoEmpty":    datatable_info_empty_txt,
              "sInfoFiltered": "(filtered from _MAX_ total records)",
              "sInfoPostFix":  "",
              "sSearch":       datatable_search_txt,
              "sUrl":          "",
              "sEmptyTable":     datatable_empty_table_txt,
              "sLoadingRecords": datatable_loading_txt,
              "sInfoThousands":  ",",
              "oPaginate": {
                  "sFirst":    datatable_pagination_first,
                  "sPrevious": datatable_pagination_previous,
                  "sNext":     datatable_pagination_next,
                  "sLast":     datatable_pagination_last
              },
              "aria": {
                     "sortAscending": datatable_sort_ascending_txt,
                     "sortDescending": datatable_sort_descending_txt
              },
        }
     });  
}); 

$('#role-list td .dropdown .dropdown-item.delete').click(function() {
  $(".action-message").empty();
    $('.action-message').html('<div class="alert alert-success alert-block alert-dismissible">'+
      '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
      '<div class="alert-content"><strong>'+alert_success+'</strong> '+alert_msg_data_delete_success+'</div>'+
    '</div>');
    // do ajax now
    console.log("deleted"); 
    $(this).parent().parent().parent().parent().remove();
}); 


$(function () {
  
  // area chart js - start
  if ($('#areaChart').length) {

    // Get context with jQuery - using jQuery's .get() method.
    var areaChartCanvas = $('#areaChart').get(0).getContext('2d');
    
    // here month name used as js variables, can be write as 'January', 'February' etc.
    var areaChartData = {
      labels  : [ month_january , month_february, month_march, month_april, month_may, month_june, month_july ],
      datasets: [
        {
          label               : area_chart_label_one,
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [28, 48, 40, 19, 86, 27, 90]
        },
        {
          label               : area_chart_label_two,
          backgroundColor     : 'rgba(210, 214, 222, 1)',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [65, 59, 80, 81, 56, 55, 40]
        },
      ]
    }

    var areaChartOptions = {
      maintainAspectRatio : false,
      responsive : true,
      legend: {
        display: false
      },
      scales: {
        xAxes: [{
          gridLines : {
            display : false,
          }
        }],
        yAxes: [{
          gridLines : {
            display : false,
          }
        }]
      }
    }

    // This will get the first returned node in the jQuery collection.
    new Chart(areaChartCanvas, {
      type: 'line',
      data: areaChartData,
      options: areaChartOptions
    });

  }
  // area chart js - end


  // line chart js - start
  if ($('#lineChart').length) {

    // here month name used as js variables, can be write as 'January', 'February' etc.
    var areaChartData = {
      labels  : [ month_january , month_february, month_march, month_april, month_may, month_june, month_july ],
      datasets: [
        {
          label               : line_chart_label_one,
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [28, 48, 40, 19, 86, 27, 90]
        },
        {
          label               : line_chart_label_two,
          backgroundColor     : 'rgba(210, 214, 222, 1)',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [65, 59, 80, 81, 56, 55, 40]
        },
      ]
    }

    var areaChartOptions = {
      maintainAspectRatio : false,
      responsive : true,
      legend: {
        display: false
      },
      scales: {
        xAxes: [{
          gridLines : {
            display : false,
          }
        }],
        yAxes: [{
          gridLines : {
            display : false,
          }
        }]
      }
    }

    var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
    var lineChartOptions = $.extend(true, {}, areaChartOptions)
    var lineChartData = $.extend(true, {}, areaChartData)
    lineChartData.datasets[0].fill = false;
    lineChartData.datasets[1].fill = false;
    lineChartOptions.datasetFill = false

    var lineChart = new Chart(lineChartCanvas, {
      type: 'line',
      data: lineChartData,
      options: lineChartOptions
    })

  }
  // line chart js - end


  // donut chart js - start
  if ($('#donutChart').length) {

    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    // here label name used as js variables, can be write as 'Chrome', 'IE', 'FireFox' etc.
    var donutData = {
      labels: [
          donut_chart_label_one,
          donut_chart_label_two,
          donut_chart_label_three,
          donut_chart_label_four,
          donut_chart_label_five,
          donut_chart_label_six,
      ],
      datasets: [
        {
          data: [700,500,400,600,300,100],
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions
    })

  }
  // donut chart js - end

  // bar chart js - start
  if ($('#barChart').length) {

    var areaChartData = {
      labels  : [ month_january , month_february, month_march, month_april, month_may, month_june, month_july ],
      datasets: [
        {
          label               : bar_chart_label_one,
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [28, 48, 40, 19, 86, 27, 90]
        },
        {
          label               : bar_chart_label_two,
          backgroundColor     : 'rgba(210, 214, 222, 1)',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [65, 59, 80, 81, 56, 55, 40]
        },
      ]
    }

    var barChartCanvas = $('#barChart').get(0).getContext('2d')
    var barChartData = $.extend(true, {}, areaChartData)
    var temp0 = areaChartData.datasets[0]
    var temp1 = areaChartData.datasets[1]
    barChartData.datasets[0] = temp1
    barChartData.datasets[1] = temp0

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    new Chart(barChartCanvas, {
      type: 'bar',
      data: barChartData,
      options: barChartOptions
    })

  }
  // bar chart js - start


});



// quick-add-user-from
$('.quick-add-user-from').submit(function(e) {
  e.preventDefault();
  $('.alert.alert-block').toggleClass("d-none");
  $('.alert.alert-block').addClass("alert-success");
  $('.alert-content').html('<strong>'+alert_success+'</strong> '+alert_msg_form_add_success);
  document.getElementsByName('quick-add-user-from')[0].reset(); //reset field values of the form
  // do ajax now
  console.log("submitted"); 
});


// user list datatable snippets 
$(document).ready(function() { 
 $('#user-list').DataTable({  
      "ajax" : base_url+"assets/data/"+lang+"/user-list-data.json",  
      "columns" : [  
           { "data" : "name" },  
           { "data" : "designation" },
           { "data" : "joining-date" }, 
           { "data" : "role" },  
           { "data" : "status" },
           { "data" : "id" }  
      ],
      "paging": true,
      "lengthChange": true,
      "lengthMenu": [ [10, 20, 30, 50, -1], [10, 20, 30, 50, datatable_all] ],
      "searching": true,
      "order": [[ 0, "asc" ]],
      "columnDefs": [
          { "orderable": false, "targets": 5 },
          {
              "targets": 4,
              "data": "status",
              "render": function ( data, type, row, meta ) {
                if(row.status=='Active')
                  return '<span class="active-success">'+status_active+'</span>';
                if(row.status=='Pending')
                  return '<span class="active-warning">'+status_pending+'</span>';
                if(row.status=='Blocked')
                  return '<span class="active-danger">'+status_blocked+'</span>';
              }
          },
          {
              "targets": 5,
              "data": "role",
              "render": function ( data, type, row, meta ) {
                if(row.role=='Administrator')
                  return '<div class="dropdown"><a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> '+action_txt+' </a> <div class="dropdown-menu" aria-labelledby="dropdownMenuLink"> <a class="dropdown-item" href="'+action_view_user_link+'">'+action_view+'</a><a class="dropdown-item" href="'+action_edit_user_link+'">'+action_edit+'</a></div></div>';     
                else
                  return '<div class="dropdown"><a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> '+action_txt+' </a> <div class="dropdown-menu" aria-labelledby="dropdownMenuLink"> <a class="dropdown-item" href="'+action_view_user_link+'">'+action_view+'</a><a class="dropdown-item" href="'+action_edit_user_link+'">'+action_edit+'</a><a class="dropdown-item delete">'+action_delete+'</a></div></div>';                
              }
           }
        ],
      "info": true,
      "autoWidth": false,
      "responsive": true,  
      "language": {
          "sProcessing":   datatable_processing_txt,
          "sLengthMenu":   datatable_show+" _MENU_ "+datatable_entries,
          "sZeroRecords":  datatable_no_records_found,
          "sInfo":         datatable_showing+" _START_ "+datatable_to+" _END_ "+datatable_of+" _TOTAL_ "+datatable_entries,
          "sInfoEmpty":    datatable_info_empty_txt,
          "sInfoFiltered": "(filtered from _MAX_ total records)",
          "sInfoPostFix":  "",
          "sSearch":       datatable_search_txt,
          "sUrl":          "",
          "sEmptyTable":     datatable_empty_table_txt,
          "sLoadingRecords": datatable_loading_txt,
          "sInfoThousands":  ",",
          "oPaginate": {
              "sFirst":    datatable_pagination_first,
              "sPrevious": datatable_pagination_previous,
              "sNext":     datatable_pagination_next,
              "sLast":     datatable_pagination_last
          },
          "aria": {
                 "sortAscending": datatable_sort_ascending_txt,
                 "sortDescending": datatable_sort_descending_txt
          },
    }
 });  
});

// user list row delete
$(document).on('click','#user-list td .dropdown .dropdown-item.delete',function(e) {
  $(".action-message").empty();
    $('.action-message').html('<div class="alert alert-success alert-block alert-dismissible">'+
      '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
      '<div class="alert-content"><strong>'+alert_success+'</strong> '+alert_msg_data_delete_success+'</div>'+
    '</div>');
    // do ajax now
    console.log("deleted"); 
    $(this).parent().parent().parent().parent().remove();
});

//datatable date data convert into string
function yyyymmdd(dateIn) {
  var yyyy = dateIn.getFullYear();
  var mm = dateIn.getMonth()+1; // getMonth() is zero-based
  var dd  = dateIn.getDate();
  return String(10000*yyyy + 100*mm + dd); // Leading zeros for mm and dd
}


//load user data using ajax json
$(document).ready(function() {
  var urlParams = new URLSearchParams(window.location.search);
  var language = urlParams.get('language');
  if(language) {
    lang = language;
  } else {
    lang = 'en';
  }
  $.ajax({
      url: base_url+"assets/data/"+lang+"/user-grid-data.json",    
      dataType: "json",
      success: function (data) {
        var count = 0;
          
        $.each(data,function(index,item){
          count++;
          $("#user-grid-template").append("<div class='col-md-6 col-lg-4 mb-3'>"+
             "<div class='card card-widget widget-user-2'>"+
               "<div class='widget-user-header bg-info'>"+
                 "<div class='widget-user-image'>"+
                   "<img class='img-circle elevation-2' src='"+item.picture+"'>"+
                 "</div>"+
                 "<h3 class='widget-user-username'>"+item.name+"</h3>"+
                 "<h5 class='widget-user-desc'>"+item.designation+"</h5>"+
               "</div>"+
               "<div class='card-body'>"+
                 "<p class='text-muted text-sm'><b>"+user_about_txt+"</b> "+item.about+"</p>"+
                 "<p class='text-muted text-sm'><b>"+user_skills_txt+"</b> "+item.skills+" </p>"+
               "</div>"+
               "<div class='card-footer'>"+
                 "<div class='row'>"+
                   "<div class='col-lg-12 text-right'>"+
                     "<a href='"+view_profile_link+"' class='btn btn-default btn-sm'>"+view_profile_btn+"</a>"+
                   "</div>"+              
                 "</div>"+
               "</div>"+
             "</div>"+
            "</div>");
        });

        $('#total-users').text(count);

      },
  });
});

// quick-edit-user-from
$('.quick-edit-user-from').submit(function(e) {
  e.preventDefault();
  $('.alert.alert-block').toggleClass("d-none");
  $('.alert.alert-block').addClass("alert-success");
  $('.alert-content').html('<strong>'+alert_success+'</strong> '+alert_msg_form_update_success);
  document.getElementsByName('quick-edit-user-from')[0].reset(); //reset field values of the form
  // do ajax now
  console.log("submitted"); 
});


//Date picker
$('#joiningdate').datetimepicker({
    format: 'D MMMM YYYY'
});

//full-add-user-form
$('.full-add-user-form').submit(function(e) {
  e.preventDefault();
  $(".action-message").empty();
  $('.action-message').html('<div class="alert alert-success alert-block alert-dismissible">'+
    '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
    '<div class="alert-content"><strong>'+alert_success+'</strong> '+alert_msg_form_add_success+'</div>');
    document.getElementsByName('full-add-user-form')[0].reset(); //reset field values of the form
    //do ajax now
    console.log("submitted"); 
});


// simple search datatable 
$(document).ready(function() { 
 $('#simple-search-table').DataTable({  
      "ajax" : base_url+"assets/data/"+lang+"/user-list-data.json",  
      "columns" : [  
           { "data" : "name" },  
           { "data" : "designation" },
           { "data" : "joining-date" }, 
           { "data" : "role" },  
           { "data" : "status" },
           { "data" : "id" }  
      ],
      "paging": true,
      "lengthChange": true,
      "lengthMenu": [ [10, 20, 30, 50, -1], [10, 20, 30, 50, datatable_all] ],
      "searching": true,
      "order": [[ 0, "asc" ]],
      "columnDefs": [
          { "orderable": false, "targets": 5 },
          {
              "targets": 4,
              "data": "status",
              "render": function ( data, type, row, meta ) {
                if(row.status=='Active')
                  return '<span class="active-success">'+status_active+'</span>';
                if(row.status=='Pending')
                  return '<span class="active-warning">'+status_pending+'</span>';
                if(row.status=='Blocked')
                  return '<span class="active-danger">'+status_blocked+'</span>';
              }
          },
          {
              "targets": 5,
              "data": "role",
              "render": function ( data, type, row, meta ) {
                if(row.role=='Administrator')
                  return '<div class="dropdown"><a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> '+action_txt+' </a> <div class="dropdown-menu" aria-labelledby="dropdownMenuLink"> <a class="dropdown-item" href="'+action_view_user_link+'">'+action_view+'</a><a class="dropdown-item" href="'+action_edit_user_link+'">'+action_edit+'</a></div></div>';     
                else
                  return '<div class="dropdown"><a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> '+action_txt+' </a> <div class="dropdown-menu" aria-labelledby="dropdownMenuLink"> <a class="dropdown-item" href="'+action_view_user_link+'">'+action_view+'</a><a class="dropdown-item" href="'+action_edit_user_link+'">'+action_edit+'</a><a class="dropdown-item delete">'+action_delete+'</a></div></div>';                
              }
           }
        ],
      "info": true,
      "autoWidth": false,
      "responsive": true,  
      "language": {
          "sProcessing":   datatable_processing_txt,
          "sLengthMenu":   datatable_show+" _MENU_ "+datatable_entries,
          "sZeroRecords":  datatable_no_records_found,
          "sInfo":         datatable_showing+" _START_ "+datatable_to+" _END_ "+datatable_of+" _TOTAL_ "+datatable_entries,
          "sInfoEmpty":    datatable_info_empty_txt,
          "sInfoFiltered": "(filtered from _MAX_ total records)",
          "sInfoPostFix":  "",
          "sSearch":       datatable_search_txt,
          "sUrl":          "",
          "sEmptyTable":     datatable_empty_table_txt,
          "sLoadingRecords": datatable_loading_txt,
          "sInfoThousands":  ",",
          "oPaginate": {
              "sFirst":    datatable_pagination_first,
              "sPrevious": datatable_pagination_previous,
              "sNext":     datatable_pagination_next,
              "sLast":     datatable_pagination_last
          },
          "aria": {
                 "sortAscending": datatable_sort_ascending_txt,
                 "sortDescending": datatable_sort_descending_txt
          },
    }
 });  
});

// simple search table row delete
$(document).on('click','#simple-search-table td .dropdown .dropdown-item.delete',function(e) {
  $(".action-message").empty();
    $('.action-message').html('<div class="alert alert-success alert-block alert-dismissible">'+
      '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
      '<div class="alert-content"><strong>'+alert_success+'</strong> '+alert_msg_data_delete_success+'</div>'+
    '</div>');
    // do ajax now
    console.log("deleted"); 
    $(this).parent().parent().parent().parent().remove();
});

//full-edit-user-form
$('.full-edit-user-form').submit(function(e) {
  e.preventDefault();
  $(".action-message").empty();
  $('.action-message').html('<div class="alert alert-success alert-block alert-dismissible">'+
    '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
    '<div class="alert-content"><strong>'+alert_success+'</strong> '+alert_msg_form_update_success+'</div>');
    document.getElementsByName('full-edit-user-form')[0].reset(); //reset field values of the form
    //do ajax now
    console.log("submitted"); 
});


// users bulk action datatable
$(document).ready(function() { 

 var bulk_action_table = $('#users-bulk-action').DataTable({  
      "ajax" : base_url+"assets/data/"+lang+"/user-list-data.json",  
      "columns" : [  
           { "data" : "id" },
           { "data" : "name" },  
           { "data" : "designation" },
           { "data" : "joining-date" }, 
           { "data" : "role" },  
           { "data" : "status" },
           { "data" : "id" }  
      ],
      "paging": true,
      "lengthChange": true,
      "lengthMenu": [ [10, 20, 30, 50, -1], [10, 20, 30, 50, datatable_all] ],
      "searching": true,
      "order": [[ 1, "asc" ]],
      "columnDefs": [
          {
              "targets": 0,
              "data": "id",
              'searchable': false,
              "orderable": false,
              'className': 'text-center',
              "render": function ( data, type, row, meta ) {
                return '<input type="checkbox" name="id[]" value="'+row.id+'">';
              }
          },
          {
              "targets": 5,
              "data": "status",
              "render": function ( data, type, row, meta ) {
                if(row.status=='Active')
                  return '<span class="active-success">'+status_active+'</span>';
                if(row.status=='Pending')
                  return '<span class="active-warning">'+status_pending+'</span>';
                if(row.status=='Blocked')
                  return '<span class="active-danger">'+status_blocked+'</span>';
              }
          },
          {
              "targets": 6,
              "data": "role",
              "orderable": false,
              'searchable': false,
              "render": function ( data, type, row, meta ) {
                if(row.role=='Administrator')
                  return '<div class="dropdown"><a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> '+action_txt+' </a> <div class="dropdown-menu" aria-labelledby="dropdownMenuLink"> <a class="dropdown-item" href="'+action_view_user_link+'">'+action_view+'</a><a class="dropdown-item" href="'+action_edit_user_link+'">'+action_edit+'</a></div></div>';     
                else
                  return '<div class="dropdown"><a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> '+action_txt+' </a> <div class="dropdown-menu" aria-labelledby="dropdownMenuLink"> <a class="dropdown-item" href="'+action_view_user_link+'">'+action_view+'</a><a class="dropdown-item" href="'+action_edit_user_link+'">'+action_edit+'</a><a class="dropdown-item delete">'+action_delete+'</a></div></div>';                
              }
           }
        ],
      "info": true,
      "autoWidth": false,
      "responsive": true,  
      "language": {
          "sProcessing":   datatable_processing_txt,
          "sLengthMenu":   datatable_show+" _MENU_ "+datatable_entries,
          "sZeroRecords":  datatable_no_records_found,
          "sInfo":         datatable_showing+" _START_ "+datatable_to+" _END_ "+datatable_of+" _TOTAL_ "+datatable_entries,
          "sInfoEmpty":    datatable_info_empty_txt,
          "sInfoFiltered": "(filtered from _MAX_ total records)",
          "sInfoPostFix":  "",
          "sSearch":       datatable_search_txt,
          "sUrl":          "",
          "sEmptyTable":     datatable_empty_table_txt,
          "sLoadingRecords": datatable_loading_txt,
          "sInfoThousands":  ",",
          "oPaginate": {
              "sFirst":    datatable_pagination_first,
              "sPrevious": datatable_pagination_previous,
              "sNext":     datatable_pagination_next,
              "sLast":     datatable_pagination_last
          },
          "aria": {
                 "sortAscending": datatable_sort_ascending_txt,
                 "sortDescending": datatable_sort_descending_txt
          },
    }
 });  

 // Handle datatable "Select all" control
  $('#datatable-select-all').on('click', function(){
     var rows = bulk_action_table.rows({ 'search': 'applied' }).nodes();
     $('input[type="checkbox"]', rows).prop('checked', this.checked);
  });

  // Handle click on checkbox to set state of "Select all" control
  $('#users-bulk-action tbody').on('change', 'input[type="checkbox"]', function(){
     if(!this.checked){
        var el = $('#datatable-select-all').get(0);
        if(el && el.checked && ('indeterminate' in el)){
           el.indeterminate = true;
        }
     }
  });

});



// users bulk action delete message
$(document).on('click','#users-bulk-action td .dropdown .dropdown-item.delete',function(e) {
  $(".action-message").empty();
    $('.action-message').html('<div class="alert alert-success alert-block alert-dismissible">'+
      '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
      '<div class="alert-content"><strong>'+alert_success+'</strong> '+alert_msg_data_delete_success+'</div>'+
    '</div>');
    // do ajax now
    console.log("deleted"); 
    $(this).parent().parent().parent().parent().remove();
});


$(function () {
  
  // input masks form - start  -----------------------
  //Datemask dd/mm/yyyy
  $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
  //Datemask2 mm/dd/yyyy
  $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
  //Money Euro
  $('[data-mask]').inputmask()

  // input masks form - end  ----------------------- 


  // date picker form - start  -----------------------
  //Date picker
  $('#reservationdate').datetimepicker({
      format: 'L'
  });

  //Date and time picker
  $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

  //Date range picker
  $('#reservation').daterangepicker()
  //Date range picker with time picker
  $('#reservationtime').daterangepicker({
    timePicker: true,
    timePickerIncrement: 30,
    locale: {
      format: 'MM/DD/YYYY hh:mm A'
    }
  })
  //Date range as a button
  $('#daterange-btn').daterangepicker(
    {
      ranges   : {
        'Today'       : [moment(), moment()],
        'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
        'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
        'This Month'  : [moment().startOf('month'), moment().endOf('month')],
        'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
      },
      startDate: moment().subtract(29, 'days'),
      endDate  : moment()
    },
    function (start, end) {
      $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
    }
  )

  // date picker form - end  -----------------------


  // color and time picker form - start  -----------------------
  //Timepicker
  $('#timepicker').datetimepicker({
    format: 'LT'
  })

  //Bootstrap Duallistbox
  $('.duallistbox').bootstrapDualListbox()

  //Colorpicker
  $('.my-colorpicker1').colorpicker()
  //color picker with addon
  $('.my-colorpicker2').colorpicker()

  $('.my-colorpicker2').on('colorpickerChange', function(event) {
    $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
  })

  // color and time picker form - end  -----------------------


})
