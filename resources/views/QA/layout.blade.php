@extends('master')

@section('content')

@include('QA.sidebar')

<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">

        @include('QA.header')

        
        @yield('QA-content')
        
        
        </div>
    <!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->
 
@stop


