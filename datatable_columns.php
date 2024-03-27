<?php
return [
'article' => [ // Tên table
'checkbox' => [ // Các cột khai báo trong file DataTable
'title' => 'choose',
'orderable' => false,
'addClass' => 'text-center align-middle',
'width' => '10px',
'footer' => '<input type="checkbox" class="check-all" />',
],
'name' => [
'title' => 'article',
'orderable' => false,
'addClass' => 'align-middle'
],
'created_at' => [
'title' => 'createdAt',
'orderable' => false,
'addClass' => 'align-middle',
'visible' => true
],
'action' => [
'title' => 'action',
'orderable' => false,
'exportable' => false,
'printable' => false,
'width' => '20px',
'addClass' => 'text-center align-middle'
],
],
];