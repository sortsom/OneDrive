@extends('layouts.default')
@section('content')
    <div class="container-fluid p-0">

        <div class="row mb-2 mb-xl-3">
            <div class="col-auto d-none d-sm-block">
                <h3><strong>Myfile</strong> </h3>
            </div>
            <div class="col-auto ml-auto text-right mt-n1">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
                        <li class="breadcrumb-item"><a href="#">OneDrive</a></li>
                        <li class="breadcrumb-item"><a href="#">Myfile</a></li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="container-fluid items">

           <div id="box" class="" style="height: 70vh;">
               <div class="row">
                   <div class="col-md-3 col-sm-4 col-6">
                       <div class="card" style="max-width: 14rem;">
                           <i class="circle mt-3"  data-feather="circle"></i>
                           <div class="card-body">
                               <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/59/OneDrive_Folder_Icon.svg/130px-OneDrive_Folder_Icon.svg.png" alt="" style="margin-left: 17%;">
                               <h5 class="card-title">Primary card title</h5>
                           </div>
                       </div>
                   </div>
                   <div class="col-md-3 col-sm-4 col-6">
                       <div class="card" style="max-width: 14rem;">
                           <i class="circle mt-3" data-feather="circle"></i>
                           <div class="card-body">
                               <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/59/OneDrive_Folder_Icon.svg/130px-OneDrive_Folder_Icon.svg.png" alt="" style="margin-left: 17%;">
                               <h5 class="card-title">Primary card title</h5>

                           </div>
                       </div>
                   </div>
                   <div class="col-md-3 col-sm-4 col-6">
                       <div class="card" style="max-width: 14rem;">
                           <i class="circle mt-3"  data-feather="circle"></i>
                           <div class="card-body">
                               <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/59/OneDrive_Folder_Icon.svg/130px-OneDrive_Folder_Icon.svg.png" alt="" style="margin-left: 17%;">
                               <h5 class="card-title">Primary card title</h5>

                           </div>
                       </div>
                   </div>
                   <div class="col-md-3 col-sm-4 col-6">
                       <div class="card" style="max-width: 14rem;">
                           <i class="feather-14 circle mt-3"  data-feather="circle"></i>
                           <div class="card-body">
                               <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/59/OneDrive_Folder_Icon.svg/130px-OneDrive_Folder_Icon.svg.png" alt="" style="margin-left: 17%;">
                               <h5 class="card-title">Primary card title</h5>

                           </div>
                       </div>
                   </div>
                   <div class="col-md-3 col-sm-4 col-6">
                       <div class="card" style="max-width: 14rem;">
                           <i class="circle mt-3" style="margin-left: 79%" data-feather="circle"></i>
                           <div class="card-body">
                               <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/59/OneDrive_Folder_Icon.svg/130px-OneDrive_Folder_Icon.svg.png" alt="" style="margin-left: 17%;">
                               <h5 class="card-title">Primary card title</h5>

                           </div>
                       </div>
                   </div>
               </div>

           </div>
            <div class="menu">
                <div class="menu-item">
                    <i class="fa fa-clone"></i>
                     <span><strong>Folder</strong></span>
                </div>
                <div class="menu-item">
                    <i class="fa fa-clone"></i>
                    <span><strong>New file</strong></span>
                </div>
                <div class="menu-item">
                    <i class="fa fa-clone"></i>
                    <span><strong>Detials</strong></span>
                </div>
            </div>

        </div>


    </div>

@stop
