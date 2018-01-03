
@extends('manager.layout')


@section('manager-content')
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN BORDERED TABLE PORTLET-->
        <div class="portlet light portlet-fit bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-bubble font-dark"></i>
                    <span class="caption-subject font-dark bold uppercase">Danh sách Job</span>
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
@stop

