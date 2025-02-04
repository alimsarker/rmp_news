@extends('admin.admin_master')
@section('admin')


<div class="page-content">
<div class="container-fluid">

<!-- start page title -->
<!-- <div class="row">
<div class="col-12">
<div class="page-title-box d-sm-flex align-items-center justify-content-between">
    <h4 class="mb-sm-0">Dashboard</h4>

    <div class="page-title-right">
        <ol class="breadcrumb m-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Upcube</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </div>

</div>
</div>
</div> -->
<!-- end page title -->

<div class="container">
    <!-- Row 1 -->
    <div class="row justify-content-center">
        
        <div class="col-md-3" style="margin-right:5px; background-color: #4FC1E9; color: inherit;">
            <div class="card" style="background-color: #4FC1E9;">
                <div class="card-body text-center" style="color: #F5F5F5;">
                    <h3 style="color: #F5F5F5;">Published News</h3>
                    <h4 class="mb-2" style="color: #F5F5F5;">1452</h4>
                    <!-- <div class="counter" data-count="5384">5384</div> -->
                </div>
            </div>
        </div>
        <div class="col-md-3" style="margin-left:5px; background-color: #A0D468;">
            <div class="card" style="background-color: #A0D468;">
                <div class="card-body text-center">
                    <h3 style="color: #F5F5F5;">Unpublished News</h3>
                    <h4 class="mb-2" style="color: #F5F5F5;">1452</h4>
                    <!-- <div class="counter" data-count="5384">5384</div> -->
                 </div>
            </div>
        </div>
        <div class="col-md-3" style="margin-left:10px; background-color: #FD9883;">
            <div class="card" style="background-color: #FD9883;">
            <div class="card-body text-center">
                    <h3 style="color: #F5F5F5;">Users</h3>
                    <h4 class="mb-2" style="color: #F5F5F5;">1452</h4>
                    <!-- <div class="counter" data-count="5384">5384</div> -->
                 </div>
            </div>
        </div>
    </div>

    <!-- Row 2 -->
    <div class="row justify-content-center mt-3">
    <div class="col-md-3" style="margin-right:5px; background-color: #A0D468;">
    <div class="card" style="background-color: #A0D468;">
                <div class="card-body text-center">
                    <h3 style="color: #F5F5F5;">Frequently asked questions</h3>
                    <h4 class="mb-2" style="color: #F5F5F5;">1452</h4>
                    <!-- <div class="counter" data-count="5384">5384</div> -->
                 </div>
                
            </div>
        </div>
        <div class="col-md-3" style="margin-left:5px; background-color: #4FC1E9;">
        <div class="card" style="background-color: #4FC1E9;">
                <div class="card-body text-center">
                    <h3 style="color: #F5F5F5;">Published Notices</h3>
                    <h4 class="mb-2" style="color: #F5F5F5;">1452</h4>
                    <!-- <div class="counter" data-count="5384">5384</div> -->
                 </div>
            </div>
        </div>
        <div class="col-md-3" style="margin-left:10px; background-color: #48CFAD;">
        <div class="card" style="background-color: #48CFAD;">
                <div class="card-body text-center">
                    <h3 style="color: #F5F5F5;">Information</h3>
                    <h4 class="mb-2" style="color: #F5F5F5;">1452</h4>
                    <!-- <div class="counter" data-count="5384">5384</div> -->
                 </div>
            </div>
        </div>
    </div>

    <!-- Row 3 -->
    <div class="row justify-content-center mt-3">
    <div class="col-md-3" style="margin-right:5px; background-color: #4FC1E9;">
            <div class="card" style="background-color: #4FC1E9;">
            <div class="card-body text-center">
                    <h3 style="color: #F5F5F5;">Tenders</h3>
                    <h4 class="mb-2" style="color: #F5F5F5;">1452</h4>
                    <!-- <div class="counter" data-count="5384">5384</div> -->
                 </div>
            </div>
        </div>
        <div class="col-md-3" style="margin-left:5px; background-color: #FFCE54;">
            <div class="card" style="background-color: #FFCE54;">
                <div class="card-body text-center">
                    <h3 style="color: #F5F5F5;">Press Releases</h3>
                    <h4 class="mb-2" style="color: #F5F5F5;">1452</h4>
                    <!-- <div class="counter" data-count="5384">5384</div> -->
                 </div>
            </div>
        </div>
        <div class="col-md-3" style="margin-left:10px; background-color: #FD9883;">
            <div class="card" style="background-color: #FD9883;">
            <div class="card-body text-center">
                    <h3 style="color: #F5F5F5;">Complaints</h3>
                    <h4 class="mb-2" style="color: #F5F5F5;">1452</h4>
                    <!-- <div class="counter" data-count="5384">5384</div> -->
                 </div>
            </div>
        </div>
    </div>
</div>



@endsection