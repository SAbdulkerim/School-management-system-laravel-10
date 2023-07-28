

@extends('layouts.app')
@section('content')

            <div class="right_col" role="main">
                <div class="">
                  <div class="page-title">
                    <div class="title_left">
                      <h3>Advance Teacher Information</h3>
                    </div>
      
                    <div class="title_right">
                      <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Search for...">
                          <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="x_panel">
                        <div class="x_title">
                          <h2> Teacher Info</h2>
                          <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                              <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a>
                                </li>
                                <li><a href="#">Settings 2</a>
                                </li>
                              </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                          </ul>
                          <div class="clearfix"></div>
                        </div>
                        <div>
                          
                        </div>
                        <div class="x_content">
                          <br />

                          <form class="form-horizontal form-label-left" action="{{ route('teacher_info.update',$teacher->id) }}" method="POST">
                            @csrf
                            

                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">User Name <span class="text-danger">*</span></label>

                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" class="form-control col-md-7 col-xs-12 " name="user_name" value="{{ $teacher->user_name->user_name }}">

                              </div>
                            </div>

                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Full Name <span class="text-danger">*</span></label>

                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" class="form-control col-md-7 col-xs-12" name="name" value="{{ $teacher->name }}">
                              </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Phone Number <span class="text-danger">*</span></label>
  
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" id="stu_phone" class="form-control col-md-7 col-xs-12" name="phone" value="{{ $teacher->phone }}">
                                </div>
                            </div>

                            <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">E-mail <span class="text-danger">*</span></label>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="email" id="stu_email" class="form-control col-md-7 col-xs-12" name="email" value="{{ $teacher->email }}">

                            </div>
                            </div>

                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">ID Number <span class="text-danger">*</span></label>

                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="stu_id" class="form-control col-md-7 col-xs-12" name="t_id" value="{{ $teacher->t_id }}">

                                
                              </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Date of Barth <span class="text-danger">*</span></label>
  
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="date" id="stu_barth" class="form-control col-md-7 col-xs-12" name="barth" value="{{ $teacher->barth }}">
  
                                  
                                </div>
                            </div>
  


                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Father's Name <span class="text-danger">*</span></label>

                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="stu_father" class="form-control col-md-7 col-xs-12" name="father" value="{{ $teacher->father }}">

                                
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Mother's Name <span class="text-danger">*</span></label>

                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="stu_mother" class="form-control col-md-7 col-xs-12" name="mother" value="{{ $teacher->mother }}">

                                
                              </div>
                            </div>

                            
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Address <span class="text-danger">*</span></label>

                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="stu_address" class="form-control col-md-7 col-xs-12" name="address" value="{{ $teacher->address }}">

                                
                              </div>
                            </div>

                            

                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Zip Code <span class="text-danger">*</span></label>

                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="zip_code" class="form-control col-md-7 col-xs-12" name="zip_code" value="{{ $teacher->zip_code }}">

                                
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Post Code <span class="text-danger">*</span></label>

                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="post_code" class="form-control col-md-7 col-xs-12" name="post_code" value="{{ $teacher->post_code }}">

                                
                              </div>
                            </div>

                            
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Profile Image </label>

                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="file" id="stu_image" class="form-control col-md-7 col-xs-12" name="image" >

                                
                              </div>
                            </div>
                      
                            <div class="ln_solid"></div>
                            <div class="form-group">
                              <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                               
                                <button type="submit" class="btn btn-success">Submit</button>
                              </div>
                            </div>
      
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>
                  </div>
      
                  
@endsection

    