@extends('main.layouts.app')

@section('content')
<div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                  <div class="col-lg-8">
                   <div class="card">

                     <div class="card-body card-block">

                         <div class="row form-group">
                           <div class="col col-md-3"><label class=" form-control-label">Full Name:</label></div>
                           <div class="col-12 col-md-9">
                             <p class="form-control-static">{{$onoffers->client_fullname}}</p>
                           </div>
                         </div>
                         <div class="row form-group">
                           <div class="col col-md-3"><label class=" form-control-label">E-mail:</label></div>
                           <div class="col-12 col-md-9">
                             <p class="form-control-static">{{$onoffers->email}}</p>
                           </div>
                         </div>
                         <div class="row form-group">
                           <div class="col col-md-3"><label class=" form-control-label">City:</label></div>
                           <div class="col-12 col-md-9">
                             <p class="form-control-static">{{$onoffers->city}}</p>
                           </div>
                         </div>
                         <div class="row form-group">
                           <div class="col col-md-3"><label class=" form-control-label">Type:</label></div>
                           <div class="col-12 col-md-9">
                             <p class="form-control-static">{{$onoffers->type->type_name }}</p>
                           </div>
                         </div>
                         <div class="row form-group">
                           <div class="col col-md-3"><label class=" form-control-label">Details:</label></div>
                           <div class="col-12 col-md-9">
                             <p class="form-control-static">{{$onoffers->details}}</p>
                           </div>
                         </div>
                         <div class="row form-group">
                           <div class="col col-md-3"><label class=" form-control-label">Telephone:</label></div>
                           <div class="col-12 col-md-9">
                             <p class="form-control-static">{{$onoffers->tel}}</p>
                           </div>
                         </div>
                         <div class="row form-group">
                           <div class="col col-md-3"><label class=" form-control-label">Sent:</label></div>
                           <div class="col-12 col-md-9">
                             <p class="form-control-static">{{$onoffers->created_at->format('F d, Y | H:m')}}</p>
                           </div>
                         </div>

                         <a class="" href="{{url("onlineoffers/$onoffers->id_offer/download")}}" >
                           <button class="btn btn-success" type="button" name="button"><i class="menu-icon fa fa-file-pdf-o">&nbsp;Download on PDF </i></button>
                         </a>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>

                           <div class="animated fadeIn">
                               <div class="row">
                                 @foreach($onoffers->message_onoffers as $message)
                                 <div class="col-lg-8">
                                  <div class="card">

                                    <div class="card-header">
                                      <strong>Replied by </strong> {{$message->user->name}} | {{$message->created_at->format('F d Y @ H:m')}}
                                    </div>
                                    <div class="card-body card-block">

                                        <div class="row form-group">
                                          <div class="col col-md-3"><label class=" form-control-label">{{$message->text}}</label></div>

                                        </div>


                                      </div>
                                      <br>

                                    </div>
                                  </div>
                                  @endforeach
                                </div>
                              </div>




            <div class="col-md-6">
                      <form action="{{url("onlineoffers/$onoffers->id_offer")}}" method="post">
                       {{csrf_field()}}
                       <div class="form-group">
                         <input type="text" name="client_fullname" value="{{$onoffers->client_fullname}}" hidden>
                       </div>
                        <div class="form-group">

                          <input type="text" class="form-control" name="email" value="{{$onoffers->email}}" hidden>
                        </div>
                        <div class="form-group">

                          <input type="text" class="form-control" name="subject" value="Thank You for your Offer" hidden>
                        </div>

                        <div class="form-group">
                          <label for="text">Message</label>
                          <textarea name="text"  cols="30" rows="10" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                          <input type="submit" class="btn btn btn-success" value="Send Message">
                        </div>
                      </form>
              </div>
             </div>


@endsection
