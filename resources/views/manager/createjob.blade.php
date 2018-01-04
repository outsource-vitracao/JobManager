@extends('manager.layout')

@section('manager-content')

<div class="row">
    <div class="col-md-12 ">
        <!-- BEGIN SAMPLE FORM PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-red-sunglo">
                    <span class="caption-subject bold uppercase">Tạo Job</span>
                </div>
            </div>
            <div class="portlet-body form">
                <form role="form">
                    <div class="form-body">
                        <div class="form-group">
                            <label>Tên Job:</label>
                            <input class="form-control spinner" type="text" placeholder="Tên Job"> 
                        </div>
                    
                        <div class="form-group">
                            <label>Tên khách hàng:</label>
                            <input class="form-control spinner" type="text" placeholder="Tên khách hàng"> 
                        </div>

                        <div class="form-group">
                            <label>Số lượng ảnh:</label>
                            <input class="form-control spinner" type="number" placeholder="Số lượng ảnh"> 
                        </div>

                        <div class="form-group">
                            <label>Style:</label>
                            <select class="form-control">
                                <option>Option 1</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Link Download:</label>
                            <input class="form-control spinner" type="text" placeholder="Link Download"> 
                        </div>
                        
                        <div class="form-group">
                            <label>Chú thích:</label>
                            <textarea class="form-control" rows="3"></textarea> 
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn blue">Tạo Job</button>
                        <button type="reset" class="btn green">Reset</button>
                        <button type="button" class="btn default">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- END SAMPLE FORM PORTLET-->
    </div>
</div>

@stop