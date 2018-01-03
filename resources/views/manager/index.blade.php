@extends('master')

@section('content')

@include('manager.sidebar')

<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">

        @include('manager.header')

        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN BORDERED TABLE PORTLET-->
                <div class="portlet light portlet-fit bordered">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-bubble font-dark"></i>
                            <span class="caption-subject font-dark bold uppercase">Danh sách Job</span>
                        </div>
                        <div class="actions">
                            <div class="btn-group">
                                <a class="btn dark btn-outline btn-circle btn-sm" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> Actions
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li>
                                        <a href="javascript:;"> Option 1</a>
                                    </li>
                                    <li class="divider"> </li>
                                    <li>
                                        <a href="javascript:;">Option 2</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">Option 3</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">Option 4</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="table-scrollable">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tên Job</th>
                                        <th>Số lượng</th>
                                        <th>Order</td>
                                        <th>Trạng thái</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td> 550 Blaxlands Ridge Road, Blaxlands Ridge, NSW </td>
                                        <td> 19 </td>
                                        <td> <i class="fa fa-check"></i> </td>
                                        <td> <span class="label label-sm label-info"> Chờ download </span> </td>
                                        <td> 
                                            <a href="#" class="btn btn-outline btn-circle dark btn-sm black">Xem chi tiết</a>
                                            <a href="#" class="btn btn-outline btn-circle dark btn-sm black">Thêm vào hàng đợi</a> 
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- END BORDERED TABLE PORTLET-->
            </div>
        </div>
        
        </div>
    <!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->
 
@stop


