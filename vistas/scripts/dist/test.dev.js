"use strict";

var $table = $('#table');
$(function () {
  $('#table').bootstrapTable({
    url: '../ajax/documento.php?op=listarDoc',
    classes: 'table table-hover ',
    toolbar: '.toolbar',
    search: true,
    showToggle: true,
    pagination: true,
    striped: true,
    sortable: true,
    pageSize: 3
  });
});