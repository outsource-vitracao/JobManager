@extends('manager.layout')

@section('manager-content')
<div class="row">
    <div class="col-md-12">
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-social-dribbble font-purple-soft"></i>
                    <span class="caption-subject font-purple-soft bold uppercase">Thông tin chi tiết Job</span>
                </div>
                <div class="actions">
                    <a href="#" class="btn btn-outline btn-circle dark btn-sm black">Thêm vào hàng đợi</a>
                </div>
            </div>
            <div class="portlet-body">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#tab_1_1" data-toggle="tab" aria-expanded="false"> Chi tiết </a>
                    </li>
                    <li class="">
                        <a href="#tab_1_2" data-toggle="tab" aria-expanded="true"> Order kèm theo </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade active in" id="tab_1_1">

                        <div class="col-lg-12">
                            <div class="mt-element-list">
                                <div class="mt-list-container list-todo" id="accordion1" role="tablist" aria-multiselectable="true">
                                    <ul>
                                        <li class="mt-list-item">
                                            ID: {{$job->id}}
                                        </li>
                                        <li class="mt-list-item">
                                            Tên Job: {{$job->name}}
                                        </li>
                                        <li class="mt-list-item">
                                            Tên khách hàng: {{$job->client}}
                                        </li>
                                        <li class="mt-list-item">
                                            Số lượng ảnh: {{$job->total}}
                                        </li>
                                        <li class="mt-list-item">
                                            Style: {{$job->style}}
                                        </li>
                                        <li class="mt-list-item">
                                            Trạng thái: {{$job->status->status}}
                                        </li>
                                        <li class="mt-list-item">
                                            Link download: {{$job->linkdownload}}
                                        </li>
                                        <li class="mt-list-item">
                                            Chú thích: {{$job->note}}
                                        </li>
                                        <li class="mt-list-item">

                                            <a href="#" class="btn btn-outline btn-circle dark btn-sm black">Xóa Job</a>
                                            <a href="#" class="btn btn-outline btn-circle dark btn-sm black">Sửa Job</a>
                                            <a href="#" class="btn btn-outline btn-circle dark btn-sm black">Up Job</a>
                                            <a href="#" class="btn btn-outline btn-circle dark btn-sm black">Thêm Order</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="tab_1_2">
                        <div class="col-lg-12">
                            <div class="mt-element-list">
                                <div class="mt-list-container list-todo" id="accordion1" role="tablist" aria-multiselectable="true">
                                    <ul>
                                        <li class="mt-list-item">
                                            Style: 
                                        </li>
                                        <li class="mt-list-item">
                                            Số lượng ảnh:
                                        </li>
                                        <li class="mt-list-item">
                                            Ghi chú:
                                        </li>
                                        <li class="mt-list-item">
                                            <a href="#" class="btn btn-outline btn-circle dark btn-sm black">Xóa Order</a>
                                            <a href="#" class="btn btn-outline btn-circle dark btn-sm black">Sửa Order</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix margin-bottom-20"> </div>
            </div>
        </div>

        <div class="clearfix"> </div>
    </div>
</div>
@stop