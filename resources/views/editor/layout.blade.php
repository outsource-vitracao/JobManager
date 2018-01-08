@extends('master')

@section('content')

@include('editor.sidebar')

<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">

        @include('editor.header')

        
        @yield('editor-content')
        
        
        </div>
    <!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->
 
@stop


