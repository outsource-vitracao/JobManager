@extends('QA.layout')

@section('QA-content')
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
            @if(isset($jobs))
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
                            @foreach($jobs as $job)
                            <tr>
                                <td>{{$job->id}}</td>
                                <td>{{$job->name}}</td>
                                <td>{{$job->total}}</td>
                                <td>
                                @if(isset($job->order->id))
                                    {{count($job->order)}}
                                @else
                                    0
                                @endif
                                </td>
                                <td> <span class="label label-sm label-info">{{$job->status->status}}</span> </td>
                                <td> 
                                    <a href="{{route('QA-job-detail',$job->id)}}" class="btn btn-outline btn-circle dark btn-sm black">Chi tiết</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            @else
                <h4>Bạn chưa nhận job nào để kiểm tra</h4>
            @endif
        </div>
        <!-- END BORDERED TABLE PORTLET-->
    </div>
</div> 
@stop

