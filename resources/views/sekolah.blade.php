@extends('index')
@section('isi')

<link rel="stylesheet" type="text/css" href="{{ asset('plugins/datatables/datatables.min.css')}}">
<section id="page-title">
<div class="container">
<div class="page-title">
<h1>Data Tables</h1>
<span>Inspiration comes of working every day.</span>
</div>
<div class="breadcrumb">
<ul>
<li><a href="#">Home</a> </li>
<li><a href="#">Components</a> </li>
<li class="active"><a href="#">Data Tables</a> </li>
</ul>
</div>
</div>
</section>
<section id="page-content" class="no-sidebar">
<div class="container">
<div class="row mb-5">
<div class="col-lg-6">
<h4>HTML (DOM) sourced data</h4>
</div>
<div class="col-lg-6 text-right">
<button type="button" class="btn btn-light"><i class="icon-plus"></i> Add Record</button>
<div class="p-dropdown ml-3 float-right">
<a class="title btn btn-light"><i class="icon-sliders"></i> Options</a>
<div class="p-dropdown-content">
<ul>
<li><a href="#"><i class="icon-refresh-cw"></i>Update Records</a></li>
 <li><a href="#"><i class="icon-edit"></i>Edit</a></li>
<li><a href="#"><i class="icon-x"></i>Delete</a></li>
<li>
<hr>
</li>
<li><a href="#"><i class="icon-life-buoy"></i>Documentation</a></li>
<li><a href="#"><i class="icon-mail"></i>Email Support Team</a></li>
<li><a href="#"><i class="icon-alert-triangle"></i>Report an issue</a></li>
</ul>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="datatable_length"><label>Show <select name="datatable_length" aria-controls="datatable" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="datatable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="datatable"></label></div></div></div><div class="row"><div class="col-sm-12">
    <table id="datatable" class="table table-bordered table-hover dataTable" style="width:100%" role="grid" aria-describedby="datatable_info">
<thead>
<tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 122px;">Name</th><th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 209px;">Position</th><th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 84px;">Office</th><th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 37px;">Age</th><th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 84px;">Start date</th><th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 55px;">Salary</th><th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 61px;">Status</th><th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 65px;">Actions</th></tr>
</thead>
<tbody>
<tr role="row" class="odd">
<td class="sorting_1">Airi Satou</td>
<td>Accountant</td>
<td>Tokyo</td>
<td>33</td>
<td>2008/11/28</td>
<td>$162,700</td>
<td><span class="badge badge-pill badge-secondary">Inactive</span></td>
<td>
<a class="ml-2" href="#" data-toggle="tooltip" data-original-title="Edit"><i class="icon-edit"></i></a>
<a class="ml-2" href="#" data-toggle="tooltip" data-original-title="Delete"><i class="icon-trash-2"></i></a>
<a class="ml-2" href="#" data-toggle="tooltip" data-original-title="Settings"><i class="icon-settings"></i></a>
</td>
</tr><tr role="row" class="even">
<td class="sorting_1">Angelica Ramos</td>
<td>Chief Executive Officer (CEO)</td>
<td>London</td>
<td>47</td>
<td>2009/10/09</td>
<td>$1,200,000</td>
<td><span class="badge badge-pill badge-warning">In progress</span></td>
<td> <a class="ml-2" href="#" data-toggle="tooltip" data-original-title="Edit"><i class="icon-edit"></i></a>
<a class="ml-2" href="#" data-toggle="tooltip" data-original-title="Delete"><i class="icon-trash-2"></i></a>
<a class="ml-2" href="#" data-toggle="tooltip" data-original-title="Settings"><i class="icon-settings"></i></a>
</td>
</tr><tr role="row" class="odd">
<td class="sorting_1">Ashton Cox</td>
<td>Junior Technical Author</td>
<td>San Francisco</td>
<td>66</td>
<td>2009/01/12</td>
<td>$86,000</td>
<td><span class="badge badge-pill badge-secondary">Inactive</span></td>
<td> <a class="ml-2" href="#" data-toggle="tooltip" data-original-title="Edit"><i class="icon-edit"></i></a>
<a class="ml-2" href="#" data-toggle="tooltip" data-original-title="Delete"><i class="icon-trash-2"></i></a>
<a class="ml-2" href="#" data-toggle="tooltip" data-original-title="Settings"><i class="icon-settings"></i></a>
</td>
</tr><tr role="row" class="even">
<td class="sorting_1">Bradley Greer</td>
<td>Software Engineer</td>
<td>London</td>
<td>41</td>
<td>2012/10/13</td>
<td>$132,000</td>
<td><span class="badge badge-pill badge-info">Pending</span></td>
<td> <a class="ml-2" href="#" data-toggle="tooltip" data-original-title="Edit"><i class="icon-edit"></i></a>
<a class="ml-2" href="#" data-toggle="tooltip" data-original-title="Delete"><i class="icon-trash-2"></i></a>
<a class="ml-2" href="#" data-toggle="tooltip" data-original-title="Settings"><i class="icon-settings"></i></a>
</td>
</tr><tr role="row" class="odd">
<td class="sorting_1">Brenden Wagner</td>
<td>Software Engineer</td>
<td>San Francisco</td>
<td>28</td>
<td>2011/06/07</td>
<td>$206,850</td>
<td><span class="badge badge-pill badge-warning">In progress</span></td>
<td> <a class="ml-2" href="#" data-toggle="tooltip" data-original-title="Edit"><i class="icon-edit"></i></a>
<a class="ml-2" href="#" data-toggle="tooltip" data-original-title="Delete"><i class="icon-trash-2"></i></a>
<a class="ml-2" href="#" data-toggle="tooltip" data-original-title="Settings"><i class="icon-settings"></i></a>
</td>
</tr><tr role="row" class="even">
<td class="sorting_1">Brielle Williamson</td>
<td>Integration Specialist</td>
<td>New York</td>
<td>61</td>
<td>2012/12/02</td>
<td>$372,000</td>
<td><span class="badge badge-pill badge-secondary">Inactive</span></td>
<td> <a class="ml-2" href="#" data-toggle="tooltip" data-original-title="Edit"><i class="icon-edit"></i></a>
<a class="ml-2" href="#" data-toggle="tooltip" data-original-title="Delete"><i class="icon-trash-2"></i></a>
<a class="ml-2" href="#" data-toggle="tooltip" data-original-title="Settings"><i class="icon-settings"></i></a>
</td>
</tr><tr role="row" class="odd">
<td class="sorting_1">Bruno Nash</td>
<td>Software Engineer</td>
<td>London</td>
<td>38</td>
<td>2011/05/03</td>
<td>$163,500</td>
<td><span class="badge badge-pill badge-success">Completed</span></td>
<td> <a class="ml-2" href="#" data-toggle="tooltip" data-original-title="Edit"><i class="icon-edit"></i></a>
<a class="ml-2" href="#" data-toggle="tooltip" data-original-title="Delete"><i class="icon-trash-2"></i></a>
<a class="ml-2" href="#" data-toggle="tooltip" data-original-title="Settings"><i class="icon-settings"></i></a>
</td>
</tr><tr role="row" class="even">
<td class="sorting_1">Caesar Vance</td>
<td>Pre-Sales Support</td>
<td>New York</td>
<td>21</td>
<td>2011/12/12</td>
<td>$106,450</td>
<td><span class="badge badge-pill badge-warning">In progress</span></td>
<td> <a class="ml-2" href="#" data-toggle="tooltip" data-original-title="Edit"><i class="icon-edit"></i></a>
<a class="ml-2" href="#" data-toggle="tooltip" data-original-title="Delete"><i class="icon-trash-2"></i></a>
<a class="ml-2" href="#" data-toggle="tooltip" data-original-title="Settings"><i class="icon-settings"></i></a>
</td>
</tr><tr role="row" class="odd">
<td class="sorting_1">Cara Stevens</td>
<td>Sales Assistant</td>
<td>New York</td>
<td>46</td>
<td>2011/12/06</td>
<td>$145,600</td>
<td><span class="badge badge-pill badge-primary">Active</span></td>
<td> <a class="ml-2" href="#" data-toggle="tooltip" data-original-title="Edit"><i class="icon-edit"></i></a>
<a class="ml-2" href="#" data-toggle="tooltip" data-original-title="Delete"><i class="icon-trash-2"></i></a>
<a class="ml-2" href="#" data-toggle="tooltip" data-original-title="Settings"><i class="icon-settings"></i></a>
</td>
</tr><tr role="row" class="even">
<td class="sorting_1">Cedric Kelly</td>
<td>Senior Javascript Developer</td>
<td>Edinburgh</td>
<td>22</td>
<td>2012/03/29</td>
<td>$433,060</td>
<td><span class="badge badge-pill badge-secondary">Inactive</span></td>
<td> <a class="ml-2" href="#" data-toggle="tooltip" data-original-title="Edit"><i class="icon-edit"></i></a>
<a class="ml-2" href="#" data-toggle="tooltip" data-original-title="Delete"><i class="icon-trash-2"></i></a>
<a class="ml-2" href="#" data-toggle="tooltip" data-original-title="Settings"><i class="icon-settings"></i></a>
</td>
</tr></tbody>
<tfoot>
<tr><th rowspan="1" colspan="1">Name</th><th rowspan="1" colspan="1">Position</th><th rowspan="1" colspan="1">Office</th><th rowspan="1" colspan="1">Age</th><th rowspan="1" colspan="1">Start date</th><th rowspan="1" colspan="1">Salary</th><th rowspan="1" colspan="1">Status</th><th rowspan="1" colspan="1">Actions</th></tr>
</tfoot>
</table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="datatable_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="datatable_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="datatable_previous"><a href="#" aria-controls="datatable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="datatable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatable" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatable" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatable" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatable" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatable" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="datatable_next"><a href="#" aria-controls="datatable" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
</div>
</div>

</div>
</section>

@endsection