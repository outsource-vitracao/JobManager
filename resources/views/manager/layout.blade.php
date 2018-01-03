@extends('master')

@section('content')

@include('manager.sidebar')

<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">

        @include('manager.header')

        
        @yield('manager-content')
        
        
        </div>
    <!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->
 
@stop


