@extends('main.layouts.app')

@section('content')
<div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                  <div class="col-lg-8">
                   <div class="card">
                     <div class="card-header">
                       <strong>My</strong> Profile
                     </div>
                     <div class="card-body card-block">

                         <div class="row form-group">
                           <div class="col col-md-3"><label class=" form-control-label">Name</label></div>
                           <div class="col-12 col-md-9">
                             <p class="form-control-static">{{Auth::user()->name}}</p>
                           </div>
                         </div>
                         <div class="row form-group">
                           <div class="col col-md-3"><label class=" form-control-label">Email</label></div>
                           <div class="col-12 col-md-9">
                             <p class="form-control-static">{{Auth::user()->email}}</p>
                           </div>
                         </div>
                         <div class="row form-group">
                           <div class="col col-md-3"><label class=" form-control-label">Address</label></div>
                           <div class="col-12 col-md-9">
                             <p class="form-control-static">{{Auth::user()->address}}</p>
                           </div>
                         </div>
                         <div class="row form-group">
                           <div class="col col-md-3"><label class=" form-control-label">City</label></div>
                           <div class="col-12 col-md-9">
                             <p class="form-control-static">{{Auth::user()->city}}</p>
                           </div>
                         </div>
                         <div class="row form-group">
                           <div class="col col-md-3"><label class=" form-control-label">Postal Code</label></div>
                           <div class="col-12 col-md-9">
                             <p class="form-control-static">{{Auth::user()->p_code}}</p>
                           </div>
                         </div>
                         <div class="row form-group">
                           <div class="col col-md-3"><label class=" form-control-label">Country</label></div>
                           <div class="col-12 col-md-9">
                             <p class="form-control-static">{{Auth::user()->country}}</p>
                           </div>
                         </div>
                         <div class="row form-group">
                           <div class="col col-md-3"><label class=" form-control-label">Phone</label></div>
                           <div class="col-12 col-md-9">
                             <p class="form-control-static">{{auth::user()->phone}}</p>
                           </div>
                         </div>
                         <div class="row form-group">
                           <div class="col col-md-3"><label class=" form-control-label">Role</label></div>
                           <div class="col-12 col-md-9">
                             <p class="form-control-static">{{auth::user()->role}}</p>
                           </div>
                         </div>


                       </div>
                     </div>
                   </div>
                 </div>
               </div>
             </div>

@endsection
