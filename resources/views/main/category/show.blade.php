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
                             <p class="form-control-static">{{$category->cat_name}}</p>
                           </div>
                         </div>
                         <div class="row form-group">
                           <div class="col col-md-3"><label class=" form-control-label">Short Name:</label></div>
                           <div class="col-12 col-md-9">
                             <p class="form-control-static">{{$category->short_name}}</p>
                           </div>
                         </div>
                         <div class="row form-group">
                           <div class="col col-md-3"><label class=" form-control-label">Image:</label></div>
                           <div class="col-12 col-md-9">

                             <img src="{{url("storage/categories/".$category->image)}}" alt="">
                           </div>
                         </div>
                         <div class="row form-group">
                           <div class="col col-md-3"><label class=" form-control-label">Subtext:</label></div>
                           <div class="col-12 col-md-9">
                             <p class="form-control-static">{{$category->subtext }}</p>
                           </div>
                         </div>
                         <div class="row form-group">
                           <div class="col col-md-3"><label class=" form-control-label">Details:</label></div>
                           <div class="col-12 col-md-9">
                             <p class="form-control-static">{{$category->details }}</p>
                           </div>
                         </div>
                         <div class="row form-group">
                           <div class="col col-md-3"><label class=" form-control-label">Active:</label></div>
                           <div class="col-12 col-md-9">
                             <p class="form-control-static">{{$category->active}}</p>
                           </div>
                         </div>


                       </div>
                     </div>
                   </div>
                 </div>
               </div>

             </div>


@endsection
