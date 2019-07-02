@extends('main.layouts.app')

@section('content')
<div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                  <div class="col-lg-8">
                   <div class="card">
                     <div class="card-header">
                         <strong class="card-title">Full Message</strong>
                     </div>
                     <div class="card-body card-block">

                         <div class="row form-group">
                           <div class="col col-md-3"><label class=" form-control-label">Full Name:</label></div>
                           <div class="col-12 col-md-9">
                             <p class="form-control-static">{{$message->sender}}</p>
                           </div>
                         </div>
                         <div class="row form-group">
                           <div class="col col-md-3"><label class=" form-control-label">E-mail:</label></div>
                           <div class="col-12 col-md-9">
                             <p class="form-control-static">{{$message->email}}</p>
                           </div>
                         </div>

                         <div class="row form-group">
                           <div class="col col-md-3"><label class=" form-control-label">Details:</label></div>
                           <div class="col-12 col-md-9">
                             <p class="form-control-static">{{$message->body_msg}}</p>
                           </div>
                         </div>
                         <div class="row form-group">
                           <div class="col col-md-3"><label class=" form-control-label">Sent:</label></div>
                           <div class="col-12 col-md-9">
                             <p class="form-control-static">{{$message->created_at->format('F d, Y | H:m')}}</p>
                           </div>
                         </div>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
@endsection
