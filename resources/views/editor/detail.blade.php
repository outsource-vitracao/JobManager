@extends('editor.layout')

@section('editor-content')
<div class="row">
    <div class="col-md-12">
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-social-dribbble font-purple-soft"></i>
                    <span class="caption-subject font-purple-soft bold uppercase">Thông tin chi tiết Job</span>
                </div>
                <div class="actions">
                    <a href="{{route('finish-job',$job->id)}}" class="btn btn-outline btn-circle dark btn-sm black">Hoàn thành</a>
                </div>
            </div>
            <div class="portlet-body">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#tab_1_1" data-toggle="tab" aria-expanded="false"> Chi tiết </a>
                    </li>
                    @if(isset($job->order->id))
                    <li class="">
                        <a href="#tab_1_2" data-toggle="tab" aria-expanded="true"> Order kèm theo </a>
                    </li>
                    @endif
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
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="tab_1_2">
                        <div class="col-lg-12">
                            <div class="mt-element-list">
                                <div class="mt-list-container list-todo" id="accordion1" role="tablist" aria-multiselectable="true">
                                    @if(isset($job->order->id))
                                    <ul>
                                        <li class="mt-list-item">
                                            Style: {{$job->order->style}}
                                        </li>
                                        <li class="mt-list-item">
                                            Số lượng ảnh: {{$job->order->total}}
                                        </li>
                                        <li class="mt-list-item">
                                            Ghi chú: {{$job->order->note}}
                                        </li>
                                    </ul>
                                    @endif
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