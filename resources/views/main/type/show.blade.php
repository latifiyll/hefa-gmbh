@extends('main.layouts.app')

@section('content')
<div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                  <div class="col-lg-8">
                   <div class="card">

                     <div class="card-body card-block">

                         <div class="row form-group">
                           <div class="col col-md-3"><label class=" form-control-label">Name:</label></div>
                           <div class="col-12 col-md-9">
                             <p class="form-control-static">{{$type->type_name}}</p>
                           </div>
                         </div>
                         <div class="row form-group">
                           <div class="col col-md-3"><label class=" form-control-label">Category:</label></div>
                           <div class="col-12 col-md-9">
                             <p class="form-control-static">{{$type->category->cat_name}}</p>
                           </div>
                         </div>
                         <div class="row form-group">
                           <div class="col col-md-3"><label class=" form-control-label">Image:</label></div>
                           <div class="col-12 col-md-9">
                             
                             <img src="{{url("storage/images_name/".$type->image_name)}}" alt="">
                           </div>
                         </div>
                         <div class="row form-group">
                           <div class="col col-md-3"><label class=" form-control-label">Text:</label></div>
                           <div class="col-12 col-md-9">
                             <p class="form-control-static">{{$type->type_text }}</p>
                           </div>
                         </div>
                         <div class="row form-group">
                           <div class="col col-md-3"><label class=" form-control-label">More Text:</label></div>
                           <div class="col-12 col-md-9">
                             <p class="form-control-static">{{$type->type_text2}}</p>
                           </div>
                         </div>
                         <div class="row form-group">
                           <div class="col col-md-3"><label class=" form-control-label">Active:</label></div>
                           <div class="col-12 col-md-9">
                             <p class="form-control-static">{{$type->active}}</p>
                           </div>
                         </div>

                       </div>
                     </div>
                   </div>
                 </div>
               </div>

             </div>


@endsection
