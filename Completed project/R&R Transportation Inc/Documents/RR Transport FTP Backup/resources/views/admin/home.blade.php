<!DOCTYPE html>
<html>
<head>
    <title>R&R Transportation Inc.</title>
    <link rel="stylesheet" type="text/css" href="/css/main-dashboard.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   
     <link rel="icon" type="image/png" href="/image/logo.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
    


    </style>

</head>
<body class="body">
    <div class="mobile-view">
        <div class="row row1">
            <div class="col-md-6 col-6 logo1">
                <img src="/image/logo.jpg">
            </div>
            <div class="col-md-6 col-6">
                <div class="mobile-menu">
                    <div id="mySidepanel" class="sidepanel">
                        <div class="m_menu">
                            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class="far fa-times-circle"></i></a>  
                            <div class="top-nav-wrapper">
                                <div class="top-nav">                       
                                    <div class="co_profile">
                                        <div class="profile-img">
                                           
                                        </div>
                                        <div class="user-details">
                                            <span id="more-details">R&R Transportation Inc.<i class="fa fa-caret-down"></i></span>
                                        </div>
                                    </div>
                                    <div class="main-menu-content">
                                        <ul>   
                                            <li class="more-details">
                                             <i class="" aria-hidden="true"></i><a href="{{url('admin/changepassword')}}">change password</a>
                                           </li><br>

                                            <li class="more-details">
                                                 <i class="fa fa-lock" aria-hidden="true"></i><a href="{{route('adminlogout')}}">Logout</a>
                                            </li>
                                        </ul>

                                    </div>
                                    <div class="nav-slider"></div>


                                   <div class="hosting dash ">
                                     <div class="hosting-btn nav-btn active">Inquiry</div>
                                   </div>
                                   
                                    <div class="quteo2 dash">
                                   <div class="quteo2-btn nav-btn" >Header-Footer details <i class="down1 fa fa-caret-down"></i>
                                   
                                   <div class="service-update1">
                                       
                                    <!--   @foreach($admindetail as $a)
                                        <a href="{{url('admin/updateadmindetail')}}/{{$a->id}}"> Upadte Contact Us Details</a>
                                      @endforeach -->

                                       <a href="#head_contact_us">Upadte Contact Us Details</a>
                                     
                                      </div>

                                       <div class="service-update1">
                                       
                                     <!--  @foreach($footer_about as $fa)
                                        <a href="{{url('admin/footer_about')}}/{{$fa->id}}"> Upadte Footer About Us</a>
                                      @endforeach -->
                                       <a href="#footer"> Update Footer About Us</a>
                                      </div>
                                   
                                   </div>
                                 </div>

                                   <div class="quteo1 dash">
                                  <div class="quteo1-btn nav-btn"> Get Quote <i class="down1 fa fa-caret-down"></i>
                                  
                                   <div class="service-update1">
                                   <a href="#Truckload">Truckload Inquiry</a>
                                   </div>
                                   
                                      <div class="service-update1">
                                   <a href="#Less_than_truckload">Less Than Truckload</a>
                                   </div>
                                  
                                 
                                  </div>
                                  
                                </div>
                                   
                                   <div class="category dash">
                                     <div class="category-btn nav-btn">Home <i class="down1 fa fa-caret-down"></i>
                              
                                      
                              
                                      <div class="service-update1">
                                      <!--   @foreach($banner as $b)
                                          <a href="{{url('admin/updatebanner')}}/{{$b->id}}">Update Home page Banner </a>
                                         @endforeach -->

                                           <a href="#home_banner">Add OR Update Home page Banner </a>
                                       
                                     </div>
                              
                                     <div class="service-update1">
                                    
                                        <a href="#Features">Add OR Update Features</a>
                                      
                                   </div>
                             
                                     <div class="service-update1">
                                     <!--  @foreach($history as $h)
                                        <a href="{{url('admin/updatehistory')}}/{{$h->id}}">Update History</a>
                                      @endforeach -->
                                      <a href="#History">Update History</a>
                                    </div>
                               
                                   <div class="service-update1">
                                       <a href="#Services">Add OR Update Our Services</a>
                                    
                                   </div>

                                   <div class="service-update1">
                                      <a href="#Testimonial">Add OR Update Testimonial </a>
                                   
                                   </div>

                                  </div>
                              </div>
                              
                              

                                
                                   
                                 <div class="inquiry dash">
                                   <div class="inquiry-btn nav-btn"> Inquiry Page <i class="down1 fa fa-caret-down"></i>
                                   
                                       <div class="service-update1">

                                              <!--  @foreach($inquirycontent as $i)
                                                  <a href="{{url('admin/updateinquirycontent')}}/{{$i->id}}">Update Inquiry Content</a>
                                               @endforeach -->
                                                <a href="#Inquiry_Content">Update Inquiry Content</a>

                                           </div>

                                             <div class="service-update1">
                                             <!--   @foreach($admindetail as $a)
                                                  <a href="{{url('admin/updateadmindetail')}}/{{$a->id}}">Update Contact Us Details</a>
                                               @endforeach -->
                                                <a href="#Inquiry_Contact">Update Contact Us Details</a>
                                           </div>
                                    
                                       
                                            <div class="service-update1">
                                              <!--  @foreach($allbanner as $a)
                           
                                                 @if($a->name=="Inquiry Form")
                                                   <a href="{{url('admin/updatebannerimg')}}/{{$a->id}}">Update Inquiry page Banner </a>
                                                 @endif
                                               @endforeach -->
                                                 <a href="#Inquiry_Banner">Update Inquiry page Banner</a>
                                         </div>
                                   
                                   </div>
                                 </div>
                                 
                                  <div class="dryfruit dash">
                                        <div class="dryfruit-btn dryfruit-btn1 nav-btn"> Services <i class="down1 fa fa-caret-down"></i>
                            
                                       
                                            <div class="service-update1">
                                              <!--  @foreach($allbanner as $a)
                           
                                                 @if($a->name=="Services")
                                                   <a href="{{url('admin/updatebannerimg')}}/{{$a->id}}">Update Services page Banner </a>
                                                 @endif
                                               @endforeach -->
                                                <a href="#Services_Banner">Update Services page Banner </a>
                                         </div>
                                          <div class="service-update1 none">
                                          <!--  <a href="{{url('admin/addserviceview')}}">ADD OR Update Our Service</a> -->
                                          <a href="#our_services">ADD OR Update Our Service</a>
                                         </div>
                                    </div>
                                </div>

                                    
                                  <div class="career dash">
                                     <div class="career-btn nav-btn">Open Posts Application</div>
                                 </div>

                                   <div class="application dash">
                                     <div class="application-btn nav-btn">Employment Application</div>
                                 </div>
                                 
                        <div class="message dash">
                             <div class="message-btn nav-btn">Career <i class="down1 fa fa-caret-down"></i>
                             
                              
                                       
                                       <div class="service-update1">
                                     <!--  @foreach($allbanner as $a)
                           
                                       @if($a->name=="Career")
                                         <a href="{{url('admin/updatebannerimg')}}/{{$a->id}}">Update Career page Banner </a>
                                         @endif
                                       @endforeach -->
                                        <a href="#Career_Banner">Update Career page Banner </a>
                                      </div>

                                      <div class="service-update1 none">
                                        <!-- <a href="{{url('admin/update_we_are_hiring')}}">Update We Are Hiring</a> -->
                                        <a href="#Hiring">Update We Are Hiring</a>
                                     </div>
                                      
                                     <div class="service-update1 none">
                                   <!--  <a href="{{url('admin/addbenifits')}}">Add OR Update Benefits</a> -->
                                   <a href="#Benefits">Add OR Update Benefits</a>
                                   </div>
                                   
                                <div class="service-update1 none">
                                 <!--  <a href="{{url('admin/addposition')}}">Add  OR Update Open Posts</a> -->
                                 <a href="#Open_post">Add  OR Update Open Posts</a>
                               </div>
                               
                             </div>
                         </div> 
                         
                          <div class="team dash">
                          <div class="team-btn nav-btn"> Our Team <i class="down1 fa fa-caret-down"></i>
                          
                                
                                       
                                       <div class="service-update1">
                                     <!--  @foreach($allbanner as $a)
                           
                                       @if($a->name=="Our Team")
                                         <a href="{{url('admin/updatebannerimg')}}/{{$a->id}}">Update Our Team page Banner </a>
                                         @endif
                                       @endforeach -->
                                        <a href="#Team_Banner">Update Our Team page Banner </a>
                                      </div>
                          
                                 <div class="service-update1">
                                     <!-- <a href="{{url('admin/teamview')}}">ADD OR Update Our Team Member </a> -->
                                     <a href="#Teamview">ADD OR Update Our Team Member </a>
                               
                                 </div>
                              </div>
                          
                          </div>
                          
                            <div class="faq dash">
                                        
                                        <div class="faq-btn nav-btn"> About Us <i class="down1 fa fa-caret-down"></i>
                            
                                     
                                       <div class="service-update1">
                                    <!--   @foreach($allbanner as $a)
                           
                                       @if($a->name=="About Us")
                                         <a href="{{url('admin/updatebannerimg')}}/{{$a->id}}">Update About us page Banner </a>
                                         @endif
                                       @endforeach -->

                                        <a href="#About_Banner">Update About us page Banner </a>
                                      </div>
                                      
                                       <div class="service-update1">
                                      
                                     <!--   @foreach($mission as $m)
                                         <a href="{{url('admin/updatemission')}}/{{$m->id}}">Update our Mission, Value, Promise</a>
                                      @endforeach -->

                                      <a href="#Mission">Update our Mission, Value, Promise</a>
                                       </div>
                                       
                                       <!--  <div class="service-update1">

                                     @foreach($whychooseus as $w)
                                         <a href="{{url('admin/updatewhychooseus')}}/{{$w->id}}">Update Why choose us</a>
                                      @endforeach
                                       </div> -->
                                       
                                       
                             
                                <div class="service-update1">
                                <!--   <a href="{{url('admin/addfaqview')}}">ADD OR Update FAQ</a> -->
                                   <a href="#FAQ">ADD OR Update FAQ</a>
                                
                              </div>

                            </div>
                            
                           </div>
                          
                                    <div class="domains dash">
                                       <div class="domain-btn nav-btn"> Get In Touch</div>
                                    </div>
                                     <div class="marketplace dash">
                                        <div class="marketplace-btn nav-btn"> Contact Us <i class="down1 fa fa-caret-down"></i>

                                          
                                    
                                           
                                       <div class="service-update1">
                                       <!--  @foreach($allbanner as $a)
                           
                                       @if($a->name=="Contact Us")
                                         <a href="{{url('admin/updatebannerimg')}}/{{$a->id}}">Update Contact Us page Banner </a>
                                         @endif
                                       @endforeach -->

                                       <a href="#Contact_Banner">Update Contact Us page Banner </a>

                                      </div>

                                       <div class="service-update1">
                                               <!-- @foreach($admindetail as $a)
                                                  <a href="{{url('admin/updateadmindetail')}}/{{$a->id}}">Update Contact Us Details</a>
                                               @endforeach -->
                                                <a href="#contact_detail">Update Contact Us Details</a>
                                           </div>
                            
                                        
                                        </div>
                                    </div>
                                    
                                     <div class="manage-account dash">
                            <div class="manage-account-btn nav-btn">Gallery <i class="down1 fa fa-caret-down"></i> 
                            
                          
                                       
                                       <div class="service-update1">
                                      <!-- @foreach($allbanner as $a)
                           
                                       @if($a->name=="Gallery")
                                         <a href="{{url('admin/updatebannerimg')}}/{{$a->id}}">Update Gallery page Banner </a>
                                         @endif
                                       @endforeach -->
                                       <a href="#Gallery_Banner">Update Gallery page Banner </a>
                                      </div>

                                <div class="service-update1 none">
                                <!--   <a href="{{url('admin/addgallary')}}">Add new Picture in Gallery </a> -->
                                <a href="#Picture">Add new Picture in Gallery </a>
                              </div>
                            </div>
                        </div>
                     
                       
                          
                                  
                                    
                                   
                                    <div class="nav-slider"></div>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <button class="openbtn" onclick="openNav()"><i class="far fa-bars"></i></button> 
                </div>
            </div>
        </div> 
    </div>
    <div class="row">
      <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="two">
                <div class="top-nav-wrapper">
                    <div class="top-nav">
                        <div class="logo">
                            <img src="/image/logo.jpg">
                        </div>
                        <div class="co_profile">
                            <div class="profile-img">
                               
                            </div>
                            <div class="user-details">
                                <span id="more-details">R&R Transportation Inc.<i class="fa fa-caret-down"></i></span>
                            </div>
                        </div>
                        <div class="main-menu-content">
                                  <ul>                                  
                                      <li class="more-details">
                                         <i class="" aria-hidden="true"></i><a href="{{url('admin/changepassword')}}">change password</a>
                                      </li><br>  
                                       <li class="more-details">
                                          <i class="fa fa-lock" aria-hidden="true"></i><a href="{{route('adminlogout')}}">Logout</a>
                                      </li>
                                  </ul>
                              </div>
                        <div class="nav-slider"></div>
                        <!-- <div class="dashboard dash">
                            <button class="active dashboard-btn nav-btn">Details List</button>
                        </div> -->
                        <div class="hosting dash ">
                             <div class="hosting-btn nav-btn active">Inquiry</div>
                        </div>
                        
                             <div class="quteo2 dash">
                                   <div class="quteo2-btn nav-btn" >Header-Footer details <i class="down1 fa fa-caret-down"></i>
                                   
                                   <div class="service-update1">
                                       
                                     <!--  @foreach($admindetail as $a) 
                                        <a href="{{url('admin/updateadmindetail')}}/{{$a->id}}">Update Contact Us Details</a>
                                      @endforeach -->
                                      
                                      <a href="#head_contact_us">Update Contact Us Details</a>
                                     
                                      </div>


                                       <div class="service-update1">
                                       
                                     <!--  @foreach($footer_about as $fa)
                                        <a href="{{url('admin/footer_about')}}/{{$fa->id}}"> Upadte Footer About Us</a>
                                      @endforeach -->
                                        <a href="#footer"> Update Footer About Us</a>
                                     
                                      </div>
                                   
                                   </div>
                                 </div>
                                 
                                    <div class="quteo1 dash">
                                  <div class="quteo1-btn nav-btn"> Get Quote <i class="down1 fa fa-caret-down"></i>
                                  
                                   <div class="service-update1">
                                   <a href="#Truckload">Truckload Inquiry</a>
                                   </div>
                                   
                                   <div class="service-update1"> 
                                   <a href="#Less_than_truckload">Less Than Truckload Inquiry</a>
                                    </div>
                           
                                 
                                  </div>
                                  
                                </div>


                                 <div class="category dash">
                                      <div class="category-btn nav-btn">Home <i class="down1 fa fa-caret-down"></i>
                              
                                      
                              
                                      <div class="service-update1">
                                        <!-- @foreach($banner as $b)
                                          <a href="{{url('admin/updatebanner')}}/{{$b->id}}">Update Home page Banner </a>
                                         @endforeach -->
                                          <a href="#home_banner">Add OR Update Home page Banner </a>
                                       
                                     </div>
                              
                                     <div class="service-update1">
                                    
                                        <a href="#Features">Add OR Update Features</a>
                                      
                                   </div>
                             
                                     <div class="service-update1">
                                   <!--    @foreach($history as $h)
                                        <a href="{{url('admin/updatehistory')}}/{{$h->id}}">Update history</a>
                                      @endforeach -->
                                      <a href="#History">Update History</a>
                                    </div>
                               
                                   <div class="service-update1">
                                       <a href="#Services">Add OR Update Our Services</a>
                                    
                                   </div>

                                   <div class="service-update1">
                                      <a href="#Testimonial">Add OR Update Testimonial </a>
                                   
                                   </div>

                                  </div>
                               </div>
         
                                   
                                 <div class="inquiry dash">
                                   <div class="inquiry-btn nav-btn"> Inquiry Page <i class="down1 fa fa-caret-down"></i>
                                   
                                       <div class="service-update1">

                                              <!--  @foreach($inquirycontent as $i)
                                                  <a href="{{url('admin/updateinquirycontent')}}/{{$i->id}}">Update Inquiry Content</a>
                                               @endforeach -->
                                              <a href="#Inquiry_Content">Update Inquiry Content</a>
                                           </div>

                                             <div class="service-update1">
                                             <!--   @foreach($admindetail as $a)
                                                  <a href="{{url('admin/updateadmindetail')}}/{{$a->id}}">Update Contact Us Details</a>
                                               @endforeach -->
                                               <a href="#Inquiry_Contact">Update Contact Us Details</a>
                                           </div>
                                    
                                       
                                            <div class="service-update1">
                                              <!--  @foreach($allbanner as $a)
                           
                                                 @if($a->name=="Inquiry Form")
                                                   <a href="{{url('admin/updatebannerimg')}}/{{$a->id}}">Update Inquiry page Banner </a>
                                                 @endif
                                               @endforeach -->
                                               <a href="#Inquiry_Banner">Update Inquiry page Banner </a>
                                         </div>
                                   
                                   </div>
                                 </div>
                                 
                                  <div class="dryfruit dash">
                                        <div class="dryfruit-btn dryfruit-btn1 nav-btn"> Services <i class="down1 fa fa-caret-down"></i>
                            
                                          
                                    
                                       
                                            <div class="service-update1">
                                             <!--   @foreach($allbanner as $a)
                           
                                                 @if($a->name=="Services")
                                                   <a href="{{url('admin/updatebannerimg')}}/{{$a->id}}">Update Services page Banner </a>
                                                 @endif
                                               @endforeach -->
                                                <a href="#Services_Banner">Update Services page Banner </a>
                                         </div>
                                          <div class="service-update1 none">
                                        <!--    <a href="{{url('admin/addserviceview')}}">ADD OR Update Our Service</a> -->
                                            <a href="#our_services">ADD OR Update Our Service</a>
                                         </div>
                                    </div>
                                </div>

                                    
                                  <div class="career dash">
                                     <div class="career-btn nav-btn">Open Posts Application</div>
                                 </div>

                                  <div class="application dash">
                                    <div class="application-btn nav-btn">Employment Application</div>
                                 </div>
                                 
                          <div class="message dash">
                             <div class="message-btn nav-btn"> Career <i class="down1 fa fa-caret-down"></i>
                             
                              
                                       
                                       <div class="service-update1">
                                    <!--   @foreach($allbanner as $a)
                           
                                       @if($a->name=="Career")
                                         <a href="{{url('admin/updatebannerimg')}}/{{$a->id}}">Update Career page Banner </a>
                                         @endif
                                       @endforeach -->
                                        <a href="#Career_Banner">Update Career page Banner </a>
                                      </div>

                                      <div class="service-update1 none">
                                      <!--   <a href="{{url('admin/update_we_are_hiring')}}">Update We Are Hiring</a> -->
                                        <a href="#Hiring">Update We Are Hiring</a>
                                     </div>
                                      
                                     <div class="service-update1 none">
                                    <!-- <a href="{{url('admin/addbenifits')}}">Add OR Update Benefits </a> -->
                                      <a href="#Benefits">Add OR Update Benefits</a>
                                   </div>
                                   
                                <div class="service-update1 none">
                                 <!--  <a href="{{url('admin/addposition')}}">Add  OR Update Open Posts</a> -->
                                  <a href="#Open_post">Add  OR Update Open Posts</a>
                               </div>
                               
                             </div>
                         </div> 
                         
                          <div class="team dash">
                          <div class="team-btn nav-btn"> Our Team <i class="down1 fa fa-caret-down"></i>
                          
                                       
                                       <div class="service-update1">
                                  <!--     @foreach($allbanner as $a)
                           
                                       @if($a->name=="Our Team")
                                         <a href="{{url('admin/updatebannerimg')}}/{{$a->id}}">Update Our Team page Banner </a>
                                         @endif
                                       @endforeach -->
                                        <a href="#Team_Banner">Update Our Team page Banner </a>
                                      </div>
                          
                                 <div class="service-update1">
                                     <a href="#Teamview">ADD OR Update Our Team Member </a>
                               
                                 </div>
                              </div>
                          
                          </div>
                          
                            <div class="faq dash">
                                        
                                        <div class="faq-btn nav-btn"> About Us <i class="down1 fa fa-caret-down"></i>
                            
                                       
                                       <div class="service-update1">
                                     <!--  @foreach($allbanner as $a)
                           
                                       @if($a->name=="About Us")
                                         <a href="{{url('admin/updatebannerimg')}}/{{$a->id}}">Update About us page Banner </a>
                                         @endif
                                       @endforeach -->
                                        <a href="#About_Banner">Update About us page Banner </a>
                                      </div>
                                      
                                       <div class="service-update1">
                                      
                                   <!--     @foreach($mission as $m)
                                         <a href="{{url('admin/updatemission')}}/{{$m->id}}">Update our Mission, Value, Promise</a>
                                      @endforeach -->
                                       <a href="#Mission">Update our Mission, Value, Promise</a>
                                       </div>
                                       
                                      <!--   <div class="service-update1">

                                     @foreach($whychooseus as $w)
                                         <a href="{{url('admin/updatewhychooseus')}}/{{$w->id}}">Update Why choose us</a>
                                      @endforeach
                                       </div>
                                        -->
                                       
                             
                                <div class="service-update1">
                                 <!--  <a href="{{url('admin/addfaqview')}}">ADD OR Update FAQ</a> -->

                                  <a href="#FAQ">ADD OR Update FAQ</a>
                                
                              </div>

                            </div>
                            
                           </div>
                         <div class="domains dash">
                            <div class="domain-btn nav-btn">Get In Touch</div>
                         </div>
                         <div class="marketplace dash">
                          <div class="marketplace-btn nav-btn"> Contact Us <i class="down1 fa fa-caret-down"></i>




                                                
                                      <div class="service-update1">
                                     <!--  @foreach($allbanner as $a)
                           
                                       @if($a->name=="Contact Us")
                                         <a href="{{url('admin/updatebannerimg')}}/{{$a->id}}">Update Contact Us page Banner </a>
                                         @endif
                                       @endforeach -->
                                       <a href="#Contact_Banner">Update Contact Us page Banner </a>
                                      </div>


                                          <div class="service-update1">
                                           <!--  @foreach($admindetail as $a)
                                              <a href="{{url('admin/updateadmindetail')}}/{{$a->id}}">Update Contact Us Details</a>
                                            @endforeach -->
                                             <a href="#contact_detail">Update Contact Us Details</a>
                                         </div>
                                      </div>
                            </div>



                        <div class="manage-account dash">
                            <div class="manage-account-btn nav-btn">Gallery<i class="down1 fa fa-caret-down"></i> 
                                
                                       <div class="service-update1">
                                     <!--  @foreach($allbanner as $a)
                           
                                       @if($a->name=="Gallery")
                                         <a href="{{url('admin/updatebannerimg')}}/{{$a->id}}">Update Gallery page Banner </a>
                                         @endif
                                       @endforeach -->
                                        <a href="#Gallery_Banner">Update Gallery page Banner </a>
                                      </div>

                               <div class="service-update1 none">
                                  <!-- <a href="{{url('admin/addgallary')}}">Add new Picture in Gallery </a> -->
                                  <a href="#Picture">Add new Picture in Gallery </a>
                              </div>
                            </div>
                        </div>
                      
                        <div class="nav-slider"></div>
                    </div>
                </div>
            </div>
        </div>

     <div class="col-xl-9 col-lg-8 col-md-12 dash-11">
          @if ($message = Session::get('error'))
            <div  id="hideDiv" class="alert alert-success alert-block" >
                <!--     <input type="text" class="close" data-dismiss="alert"></input> -->
                <strong style="padding-top : 5px !important; display: inline-block;">{{ $message }}</strong>
             </div>
           @endif


             <div class="page mt-4 hosting-page title1">
                 
                  <div class="mt-5">
                     <div class="list1">
                       <h4 class="mb-4">Inquiry </h4>
                        
                    </div>
                       <div class="detail">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                        
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile no</th>
                                    <th>Moving Date</th>
                                    <th>Moving From</th>
                                    <th>Moving to</th>
                                    <th>Affiliation</th>
                                    <th>Inquiry type</th>      
                                    <th>Description</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                             @foreach($enquires as $e)
                            <tbody>

                                <tr class="enquires_{{$e->id}}">
                                    <td>
                                        
                                      {{$e->name}}  
                                         
                                    </td>
                                    <td>
                                        {{$e->email}}
                                    </td>
                                   
                                    <td>
                                        {{$e->mobileno}}
                                   </td>
                                    <td>
                                       {{$e->date}}
                                   </td>
                                   
                                   <td>
                                       {{$e->from}}
                                   </td>
                                   <td>
                                       {{$e->to}}
                                   </td>
                                     <td>
                                       {{$e->affiliation}}
                                   </td>

                                     <td>{{$e->type}}</td>

                                     <td>{{$e->description}}</td>


                         
                                    <td><button class="btn3 btn0" onclick="deleteinquiry({{$e->id}})"><i class="fa fa-trash" aria-hidden="true"></a></button></td>
                                </tr>
                          
                            </tbody>
                            @endforeach
                             
                        </table>
                    </div>
                </div>
             </div>
          


            <div class="page mt-4 application-page title1">
                 
                  <div class="mt-5">
                     <div class="list1">
                       <h4 class="mb-4">EMPLOYMENT APPLICATION</h4>
                        
                    </div>
                       <div class="detail">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                        
                                   
                                    <th>FirstName</th>
                                    <th>LastName</th>     
                                    <th>Mobile no</th>
                                    <th>Email</th>
                                    <th>Birthdate</th>
                                    <th>Application Date</th>
                                    <th>Position</th>     
                                    <th>View</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                             @foreach($app_personalinfo as $ap)
                            <tbody>

                                <tr class="application_{{$ap->id}}">
                                    <td>
                                        
                                      {{$ap->fname}}  
                                         
                                    </td>
                                    <td>
                                        {{$ap->lname}}
                                    </td>
                                   
                                    <td>
                                        {{$ap->mobileno}}
                                   </td>
                                    <td>
                                       {{$ap->email}}
                                   </td>
                                   
                                   <td>
                                       {{$ap->dob}}
                                   </td>
                                   <td>
                                       {{$ap->application_date}}
                                   </td>
                                     <td>
                                       {{$ap->position}}
                                   </td>
                                   <td> 
                                     <button class="btn0 btn2"><a href="{{url('admin/viewapplication')}}/{{$ap->id}}">view</a></button>
                                   </td>

                         
                                    <td><button class="btn3 btn0" onclick="deleteapplication({{$ap->id}})"><i class="fa fa-trash" aria-hidden="true"></a></button></td>
                                </tr>
                          
                            </tbody>
                            @endforeach
                             
                        </table>
                    </div>
                </div>
                      
            </div> 


             <div class="page mt-4 quteo2-page title1">
                 
                   <div class="mt-5" id="#head_contact_us">
                    <h4 class="mb-4"> Contact Us Detail </h4>
                     <div class="detail">
                       <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile no</th>
                                    <th>Address</th>
                                    <th>Fax-number</th>
                                    <th>Website</th>
                                    <th>FB Url</th>
                                    <th>Instagram Url </th>
                                    <th>Twitter Url</th>
                                    <th>Update</th>
                                   
                                </tr>
                            </thead>
                               @foreach($admindetail as $a)
                             <tbody>
                                
                                <tr>
                                    <td>
                                        {{$a->name}}
                                    </td>
                                
                    
                                    <td>
                                          {{$a->email}}
                                    </td>
                                    <td>
                                        {{$a->mobileno}}
                                    </td>
                                    <td>
                                        {{$a->address}}
                                   </td>
                                    <td>
                                        {{$a->fax_no}}
                                   </td>
                                    <td>
                                        {{$a->website}}
                                   </td>
                                   <td>
                                        {{$a->fblink}}
                                   </td>
                                   <td>
                                        {{$a->instalink}}
                                   </td>
                                   <td>
                                        {{$a->twitterlink}}
                                   </td>
                                  
                             <td><button class="btn0 btn2"><a href="{{url('admin/updateadmindetail')}}/{{$a->id}}" >Update</a></button></td>
                                   
                               
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
                


                  <div class="mt-5" id="#footer">
                    <h4 class="mb-4"> Footer About Us  </h4>
                     <div class="detail">
                       <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Description</th>
                                   
                                </tr>
                            </thead>
                               @foreach($footer_about as $fa)
                             <tbody>
                                
                                <tr>
                                    <td>
                                        {!! $fa->description !!}
                                    </td>
                                
                    
                                  
                               <td><button class="btn0 btn2"><a href="{{url('admin/footer_about')}}/{{$fa->id}}" >Update</a></button></td>
                                   
                               
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
           
            </div> 
            
            <!--                Inquiry page              -->
            
                <div class="page mt-4 inquiry-page title1">

               <div class="mt-5" id="Inquiry_Content">
                   
                   <h4 class="mb-4">Inquiry page Content</h4>
                    
                    <div class="detail">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Title</th>   
                                    <th>Subtitle</th> 
                                    <th>Description</th>
                                    <th>Update</th>
                                   
                                </tr>
                            </thead>
                           @foreach($inquirycontent as $i)
                           
                          
                             <tbody>
                             
                               <tr>
                                    <td>
                                      {{$i->title}}
                                    </td>
                                   
                                    <td>
                                       {{$i->subtitle}}      
                                    </td>
                                    <td>
                                       {!! $i->description !!}      
                                    </td>
                                     
                                <td><button class="btn0 btn2"><a href="{{url('admin/updateinquirycontent')}}/{{$a->id}}">Update</a></button></td>
                                   
                                </tr>
                                
                            </tbody>
                        
                            @endforeach
                           
                        </table>
                    </div>
                 </div>      
                





                <div class="mt-5" id="Inquiry_Contact">
                    <h4 class="mb-4"> Contact us Details</h4>
                     <div class="detail">
                       <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile no</th>
                                    <th>Address</th>
                                    <th>Area</th>
                                    <th>Fax-number</th>
                                    <th>website</th>
                                    <th>FB Url</th>
                                    <th>Instagram Url </th>
                                    <th>Twitter Url</th>
                                    <th>Update</th>
                                   
                                </tr>
                            </thead>
                               @foreach($admindetail as $a)
                             <tbody>
                                
                                <tr>
                                    <td>
                                        {{$a->name}}
                                    </td>
                                
                    
                                    <td>
                                          {{$a->email}}
                                    </td>
                                    <td>
                                        {{$a->mobileno}}
                                    </td>
                                    <td>
                                        {{$a->address}}
                                   </td>
                                    <td>
                                        {{$a->area}}
                                   </td>
                                    <td>
                                        {{$a->fax_no}}
                                   </td>
                                    <td>
                                        {{$a->website}}
                                   </td>
                                   <td>
                                        {{$a->fblink}}
                                   </td>
                                   <td>
                                        {{$a->instalink}}
                                   </td>
                                   <td>
                                        {{$a->twitterlink}}
                                   </td>
                                  
                             <td><button class="btn0 btn2"><a href="{{url('admin/updateadmindetail')}}/{{$a->id}}" >Update</a></button></td>
                                   
                               
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
                
                
                  <div class="mt-5" id="Inquiry_Banner">
                   
                   <h4 class="mb-4">Inquiry page Banner</h4>
                    
                    <div class="detail">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th> 
                                     <th>Page Name</th>   
                                    <th>Image</th> 
                                    <th>Update</th>
                                   
                                </tr>
                            </thead>
                           @foreach($allbanner as $a)
                           
                           @if($a->name=="Inquiry Form")
                             <tbody>
                             
                               <tr>
                                    <td>
                                      {{$a->name}}
                                    </td>

                                     <td>
                                      {{$a->page_name}}
                                    </td>
                                   
                                    <td>

                                       <img src="/uploads/{{$a->image}}" width="400" height="200"><br>
                                       {{$a->image}}  
                                         
                                    </td>

                                     
                             <td><button class="btn0 btn2"><a href="{{url('admin/updatebannerimg')}}/{{$a->id}}">Update</a></button></td>
                                   
                                </tr>
                                
                            </tbody>
                            @endif
                            @endforeach
                           
                        </table>
                    </div>
                 </div>      
                
            </div> 

                   <!-- contact list --> 
            <div class="page mt-4 domain-page title1">
                <div class="mt-5">
                    <h4 class="mb-4">GET IN TOUCH </h4>
                    <div class="detail">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                              @foreach($contact_us as $cu)
                            <tbody>
                             
                                <tr class="contact_{{$cu->id}}">
                                    <td>
                                      {{$cu->name}}
                                    </td>
                                

                                    <td>
                                        {{$cu->email}}
                                    </td>
                                    <td>
                                       {{$cu->subject}}
                                    </td>
                                    <td>
                                       {{$cu->description}}
                                   </td>
                        
                                    <td><button class="btn3 btn0" onclick="deletecontact({{$cu->id}})"><i class="fa fa-trash" aria-hidden="true"></button></td>
                                </tr>
                                
                            </tbody>
                            @endforeach
                        
                        </table>
                    </div>
                </div> 
            </div> 

                <!--    Career Application---- -->
             <div class="page mt-4 career-page title1">
                <div class="mt-5">
                    <h4 class="mb-4"> Open Posts Application </h4>
                    <div class="detail">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile No</th>
                                    <th>Name of vacancy</th>
                                    <th>Experience</th>
                                    <th>Resume</th>
                                    <th>Message</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            @foreach($job_application as $ja)
                                <tr class="career_{{$ja->id}}">
                                    <td>
                                        {{$ja->name}}
                                    </td>
                                

                                    <td>
                                          {{$ja->email}}
                                    </td>
                                    <td>
                                         {{$ja->mobileno}}
                                    </td>
                                    <td>
                                        {{$ja->vacancy}}
                                   </td>
                                     <td>
                                        {{$ja->experience}}
                                   </td>
                                     <td>

                                        <a href="{{url('admin/downloadpdf')}}/{{$ja->id}}">{{$ja->resume}}</a>
                                        
                                   </td>
                                     
                                     <td>
                                        {{$ja->description}}
                                   </td>
                                    
                                   <td><button class="btn3 btn0" onclick="deletecareerinquiry({{$ja->id}})"><i class="fa fa-trash" aria-hidden="true"></button></td> 
                                </tr>
                                @endforeach
                        
                        </table>
                    </div>
                </div> 
            </div> 



              <!-- portfoio list --> 
           <div class="page mt-4 quteo1-page title1">
               
               <div class="mt-5" id="Truckload">
                    <h4 class="mb-4">Truckload Inquiry  </h4>
                    <div class="detail">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile NO.</th>
                                    <th>From Zipcode</th>
                                    <th>To Zipcode</th>
                                    <th>Date</th>
                                    <th>Description</th>
                                    <th>View</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                              @foreach($get_queto as $gq)
                            <tbody>
                             
                                <tr class="queto_{{$gq->id}}">
                                    <td>
                                      {{$gq->name}}
                                    </td>
                                

                                    <td>
                                        {{$gq->email}}
                                    </td>
                                    <td>
                                       {{$gq->mobileno}}
                                    </td>
                                     <td>
                                       {{$gq->from_zip}}
                                    </td>
                                     <td>
                                       {{$gq->to_zip}}
                                    </td>
                                    <td>
                                       {{$gq->date}}
                                    </td>
                                    <td>
                                       {{$gq->ship_decs}}
                                   </td>

                                    <td><button class="btn0 btn2"><a href="{{url('admin/viewInquiry')}}/{{$gq->id}}">view</a></button></td>

                                  
                                    <td><button class="btn3 btn0" onclick="deletequeto({{$gq->id}})"><i class="fa fa-trash" aria-hidden="true"></button></td>
                                </tr>
                                
                            </tbody>
                            @endforeach
                        
                        </table> 
                    </div>
                </div> 
                
                
                     <div class="mt-5" id="Less_than_truckload">
                    <h4 class="mb-4">Less Than Truckload Inquiry</h4>
                    <div class="detail">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile NO.</th>
                                    <th>From Zipcode</th>
                                    <th>To Zipcode</th>
                                    <th>Date</th>
                                    <th>Description</th>
                                    <th>View</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                              @foreach($get_queto1 as $q)
                            <tbody>
                             
                                <tr class="queto1_{{$q->id}}">
                                    <td>
                                      {{$q->name}}
                                    </td>
                                

                                    <td>
                                        {{$q->email}}
                                    </td>
                                    <td>
                                       {{$q->mobileno}}
                                    </td>
                                     <td>
                                       {{$q->from_zip}}
                                    </td>
                                     <td>
                                       {{$q->to_zip}}
                                    </td>
                                    <td>
                                       {{$q->date}}
                                    </td>
                                    <td>
                                       {{$q->ship_decs}}
                                   </td>

                                    <td><button class="btn0 btn2"><a href="{{url('admin/viewInquiry2')}}/{{$q->id}}">view</a></button></td>

                                  
                                    <td><button class="btn3 btn0" onclick="deletequeto1({{$q->id}})"><i class="fa fa-trash" aria-hidden="true"></button></td>
                                </tr>
                                
                            </tbody>
                            @endforeach
                        
                        </table> 
                    </div>
                </div> 
               
            </div>   

                         <!--open position  list -->
             <div class="page mt-4 message-page title1">
        
                 
                
                  <div class="mt-5" id="Career_Banner">
                   
                   <h4 class="mb-4">Career page Banner</h4>
                    
                    <div class="detail">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th> 

                                     <th>Page Name</th>     
                                    <th>Image</th> 
                                    <th>Update</th>
                                   
                                </tr>
                            </thead>
                           @foreach($allbanner as $a)
                           
                           @if($a->name=="Career")
                             <tbody>
                             
                               <tr>
                                    <td>
                                      {{$a->name}}
                                    </td>

                                      <td>
                                      {{$a->page_name}}
                                    </td>
                                   
                                    <td>

                                       <img src="/uploads/{{$a->image}}" width="400" height="200"><br>
                                       {{$a->image}}  
                                         
                                    </td>

                                     
                             <td><button class="btn0 btn2"><a href="{{url('admin/updatebannerimg')}}/{{$a->id}}">Update</a></button></td>
                                   
                                </tr>
                                
                            </tbody>
                            @endif
                            @endforeach
                           
                        </table>
                    </div>
                 </div> 

                  <div class="mt-5" id="Hiring">
                   
                   <h4 class="mb-4">WE'RE HIRING!</h4>
                    
                    <div class="detail">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr> 
                                    <th>Image</th> 
                                    <th>Heading</th>
                                    <th>Heading Description</th>
                                    <th>Title 1</th>
                                    <th>Title 2</th>
                                    <th>Description</th>
                                    <th>Update</th>
                                   
                                </tr>
                            </thead>
                           @foreach($hiring as $h)
                           
                       
                             <tbody>
                             
                               <tr>
                        
                                   
                                    <td>
                                       <img src="/uploads/{{$h->image}}" width="200" height="200"><br>
                                       {{$h->image}}     
                                    </td>

                                    <td>
                                       {{$h->heading}}       
                                    </td>
                                      <td>
                                       {!! $h->topdescription !!}       
                                    </td>
                                      <td>
                                       {{$h->title1}}       
                                    </td>
                                      <td>
                                       {{$h->title2}}       
                                    </td>
                                     <td>
                                       {!! $h->description !!}       
                                    </td>

                                     
                             <td><button class="btn0 btn2"><a href="{{url('admin/update_we_are_hiring')}}/{{$h->id}}">Update</a></button></td>
                                   
                                </tr>
                                
                            </tbody>
                        
                            @endforeach
                           
                        </table>
                    </div>
                 </div>  
 


                
                
                
                 <div class="mt-5" id="Benefits">
                       <div class="list1">
                       <h4 class="mb-4"> BENEFITS </h4>
                        <button class="btn1"><a href="{{url('admin/addbenifits')}}"style="color:white">ADD</a></button>
                    </div>

                     <div class="detail">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Description</th>
                                  
                                    <th>Update</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                         
                             <tbody>
                                @foreach($benifits as $b)
                               <tr class="benifits_{{$b->id}}">
                                    <td>
                                         {{$b->title}}
                                    </td>

                                    <td>
                                         {!! $b->description !!}
                                    </td>
            
                                   
                                      <td><button class="btn0 btn2"><a href="{{url('admin/updatebenifits')}}/{{$b->id}}">Update</a></button></td>
                                   
                                   <td><button class="btn3 btn0" onclick="deletebenifits({{$b->id}})"><i class="fa fa-trash" aria-hidden="true"></button></td> 
                                </tr>
                                @endforeach
                                
                            </tbody>
                          
                        </table>
                    </div>

                  </div>
                 
                 
                 
                 
                 
                 
                 <div class="mt-5" id="Open_post">
                       <div class="list1">
                       <h4 class="mb-4">OPEN POSTS  </h4>
                        <button class="btn1"><a href="{{url('admin/addposition')}}"style="color:white">ADD</a></button>
                    </div>

                     <!-- <div class="detail">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Post Name</th>
                                    <th>NO of Vacancy</th>
                                    <th>Type of Vacancy</th>
                                    <th>Country Name</th>
                                    <th>Responsibilities</th>
                                     <th>Requirements</th>
                                    <th>Update</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                         
                             <tbody>
                                @foreach($position as $p)
                               <tr class="position_{{$p->id}}">
                                    <td>
                                         {{$p->name}}
                                    </td>

                                    <td>
                                         {{$p->no_of_vacancy}}
                                    </td>
                                    <td>
                                       @if($p->vacancy_type==1)
                                            CONTRACT 
                                         @elseif($p->vacancy_type==2) 
                                            FULL TIME
                                         @elseif($p->vacancy_type==3) 
                                             INTERNSHIP
                                         @else
                                            PART-TIME
                                         @endif 
                                       
                                    </td>
                                    <td>
                                         {{$p->country}}
                                    </td>
                                    <td>
                                         {{$p->Responsibilities}}
                                    </td>
                                    <td>
                                         {!! $p->Requirements !!}
                                    </td>
                                   
                                      <td><button class="btn0 btn2"><a href="{{url('admin/updateposition')}}/{{$p->id}}">Update</a></button></td>
                                   
                                   <td><button class="btn3 btn0" onclick="deleteposition({{$p->id}})"><i class="fa fa-trash" aria-hidden="true"></button></td> 
                                </tr>
                                @endforeach
                                
                            </tbody>
                          
                        </table>
                    </div> -->

                     <div class="detail">
                        <table class="table table-bordered table-striped">
                        
                             
                          @foreach($position as $key =>$p)
                             <tbody class="position_{{$p->id}}">
                               
                          
                                 <tr>
                                  <td><b>Application NO:</b> {{$key+1}} </td>
                                </tr>

                                <tr>
                                  <td><b>Post Name:</b> {{$p->name}} </td>
                                </tr>

                                <tr>
                                  <td><b>NO of Vacancy:</b>  {{$p->no_of_vacancy}} </td>
                                </tr> 
                                       
                                <tr>                                   
                                  <td><b>Type of Vacancy:</b> @if($p->vacancy_type==1)
                                                                            CONTRACT 
                                                                      @elseif($p->vacancy_type==2) 
                                                                         FULL TIME
                                                                      @elseif($p->vacancy_type==3) 
                                                                          INTERNSHIP
                                                                      @else
                                                                         PART-TIME
                                                                      @endif 
                                                                     </td>
                                </tr>
                                  
                                   <tr>                             
                                      <td><b>Country Name:</b>  {{$p->country}} </td>
                                   </tr>
                                   <tr>
                                      <td><b>Responsibilities:</b> {{$p->Responsibilities}} </td>
                                   </tr>
                                    <tr>
                                      <td><b>Requirements:</b> {!! $p->Requirements !!} </td>
                                   </tr>
                                   

                                    <tr>
                                       <td><button class="btn0 btn2"><a href="{{url('admin/updateposition')}}/{{$p->id}}">Update</a></button>
                                   
                                     <button class="btn0 btn2" onclick="deleteposition({{$p->id}})"><a>Delete</a></button></td> 
                                   </tr>
                    
                                
                            </tbody>
                            @endforeach
                          
                        </table>
                    </div>

                  </div>

                  
            </div>

                   <!--  About page-->
             <div class="page mt-4 faq-page title1">
                 
                 
                   
                
                <!--    About us banner            -->
              <div class="mt-5" id="About_Banner">
                   
                   <h4 class="mb-4">About Us page Banner</h4>
                    
                    <div class="detail">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th> 
                                    <th>Page Name</th>   
                                    <th>Image</th> 
                                    <th>Update</th>
                                   
                                </tr>
                            </thead>
                           @foreach($allbanner as $a)
                           
                           @if($a->name=="About Us")
                             <tbody>
                             
                               <tr>
                                    <td>
                                      {{$a->name}}
                                    </td>

                                      <td>
                                      {{$a->page_name}}
                                    </td>
                                   
                                    <td>

                                       <img src="/uploads/{{$a->image}}" width="400" height="200"><br>
                                       {{$a->image}}  
                                         
                                    </td>

                                     
                             <td><button class="btn0 btn2"><a href="{{url('admin/updatebannerimg')}}/{{$a->id}}">Update</a></button></td>
                                   
                                </tr>
                                
                            </tbody>
                            @endif
                            @endforeach
                           
                        </table>
                    </div>
                 </div>
                <!--   our mission  -->
                 
                   <div class="mt-5" id="Mission">
                       <div class="list1">
                        <h4 class="mb-4">OUR MISSION , OUR VALUES ,OUR PROMISE </h4>
                        
                       </div>

                     <div class="detail">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                  <!--   <th>Image</th>
                                    <th>Mission</th>
                                    <th>Value</th>
                                    <th>Promise</th> -->
                                    <th>Image</th>
                                </tr>
                            </thead>
                         
                             <tbody>
                               @foreach($mission as $m)
                               <tr>
                                    <td>
                                        <img src="/uploads/{{$m->image}}" width="200" height="200"><br>

                                       {{$m->image}}  
                                    </td>

                                  </tr> 
                                       
                                  <tr>
                                    

                                  </tr>
                                   <td><b>{{$m->mission_name}}  </b> </td>
                                   <tr>
                              
                                    <td>
                                       {!!$m->mission!!}
                                    </td>

                                   </tr>
                                   <tr>
                                     <td><b> {{$m->value_name}}</b> </td>
                                   </tr>
                                    <tr>
                                    <td>
                                       {!!$m->value!!}
                                    </td>
                                  </tr>
                                    <tr>
                                     <td><b>{{$m->promise_name}}</b> </td>
                                   </tr>

                                    <tr>

                                    <td>
                                       {!!$m->promise!!}
                                    </td>
                                  </tr>
                                        <td><button class="btn0 btn2"><a href="{{url('admin/updatemission')}}/{{$m->id}}" >Update</a></button></td>
                                   
                        
                               
                               
                                
                            </tbody>
                            @endforeach
                          
                        </table>
                    </div>

                  </div>
                  
                      <!--  Why Choose Us -->
                 <!--  <div class="mt-5">
                       <div class="list1">
                        <h4 class="mb-4">WHY CHOOSE US </h4>
                        
                       </div>

                     <div class="detail">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>title</th>
                                    <th>description</th>
                                    <th>Update</th>
                                </tr>
                            </thead>
                         
                             <tbody>
                               @foreach($whychooseus as $w)
                               <tr>
                                    <td>
                                        <img src="/uploads/{{$w->image}}" width="60" height="60"><br>

                                       {{$w->image}}  
                                    </td>
                                    <td>
                                       {{$w->title}}
                                    </td>
                                    <td>
                                       {!!$w->description!!}
                                    </td>
                                   
                                   <td><button class="btn0 btn2"><a href="{{url('admin/updatewhychooseus')}}/{{$w->id}}" >Update</a></button></td>
                                   
                        
                                </tr>
                               
                                
                            </tbody>
                            @endforeach
                          
                        </table>
                    </div>

                  </div> -->
          
                 
                  <!--   faq  -->
                 
                 
                 <div class="mt-5" id="FAQ">
                       <div class="list1">
                        <h4 class="mb-4">FREQUENTLY ASKED QUESTIONS </h4>
                        <button class="btn1"><a href="{{url('admin/addfaqview')}}"style="color:white">ADD</a></button>
                       </div>

                     <div class="detail">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Question no.</th>
                                    <th>Question</th>
                                    <th>Answer</th>
                                    <th>Update</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                         
                             <tbody>
                               @foreach($faq as $key =>$f)
                               <tr class="faq_{{$f->id}}">
                                    <td>
                                       {{$key+1}} 
                                    </td>

                                    <td>
                                       {{$f->question}}
                                    </td>
                                    <td>
                                       {!! $f->answer !!}
                                    </td>
                                   
                                        <td><button class="btn0 btn2"><a href="{{url('admin/updatefaq')}}/{{$f->id}}" >Update</a></button></td>
                                   
                        
                                    <td><button class="btn3 btn0" onclick="deletefaq({{$f->id}})"><i class="fa fa-trash" aria-hidden="true"></button></td>
                                </tr>
                               
                                
                            </tbody>
                            @endforeach
                          
                        </table>
                    </div>

                  </div>
              </div>
                 
                
              


                <!-- Gallary-->    
        <div class="page mt-4 manage-account-page title1">
             
                  <div class="mt-5" id="Gallery_Banner">
                   
                   <h4 class="mb-4">Gallery page Banner</h4>
                    
                    <div class="detail">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>   
                                    <th>Page Name</th> 
                                     <th>Image</th> 
                                    <th>Update</th>
                                   
                                </tr>
                            </thead>
                           @foreach($allbanner as $a)
                           
                           @if($a->name=="Gallery")
                             <tbody>
                             
                               <tr>
                                    <td>
                                      {{$a->name}}
                                    </td>

                                     <td>
                                      {{$a->page_name}}
                                    </td>
                                   
                                   
                                    <td>

                                       <img src="/uploads/{{$a->image}}" width="400" height="200"><br>
                                       {{$a->image}}  
                                         
                                    </td>

                                     
                             <td><button class="btn0 btn2"><a href="{{url('admin/updatebannerimg')}}/{{$a->id}}">Update</a></button></td>
                                   
                                </tr>
                                
                            </tbody>
                            @endif
                            @endforeach
                           
                        </table>
                    </div>
                 </div>
            
            
                <div class="mt-5" id="Picture">
                     <div class="list1">
                       <h4 class="mb-4"> GALLERY VIEW  </h4>
                        <button class="btn1"><a href="{{url('admin/addgallary')}}" style="color:white">ADD</a></button>
                     </div>
                    
                    <div class="detail" style="display:flex; flex-wrap:wrap ;" > 
                        @foreach($gallary as $g)
                         
                         <div class="image_{{$g->id}}">
 
                          @if ('.mp4'===$g->extension)
                         <div class="gallery">
                          <a target="_blank" href="/uploads/{{$g->file}}">
                            <iframe width="339" height="340" src="/uploads/{{$g->file}}" frameborder="0" allowfullscreen autoplay="false">
                            </iframe>
                              </a>
                             <div class="desc"><button  class="btnsubmit" onclick="deleteimage({{$g->id}})">Delete video</button>
                               </div>

                           </div>
                            
                          @else
                         <div class="gallery">
                          <a target="_blank" href="/uploads/{{$g->file}}">
                          <img src="/uploads/{{$g->file}}" alt="Cinque Terre" width="300" height="400">
                           </a>
                           <div class="desc"><button  class="btnsubmit" onclick="deleteimage({{$g->id}})">Delete Image</button>
                               </div>
                             </div>  
                          @endif    
                           
                      </div>  
                       @endforeach   
                    </div>
                   

                </div>
        </div> 
  
          
                        <!-- team list -->
            <div class="page mt-4 team-page title1">
                
              <div class="mt-5" id="Team_Banner">
                   
                   <h4 class="mb-4">Our Team page Banner</h4>
                    
                    <div class="detail">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>   
                                    <th>Page Name</th> 
                                     <th>Image</th> 
                                    <th>Update</th>
                                   
                                </tr>
                            </thead>
                           @foreach($allbanner as $a)
                           
                           @if($a->name=="Our Team")
                             <tbody>
                             
                               <tr>
                                    <td>
                                      {{$a->name}}
                                    </td>


                                     <td>
                                      {{$a->page_name}}
                                    </td>
                                   
                                    <td>

                                       <img src="/uploads/{{$a->image}}" width="400" height="200"><br>
                                       {{$a->image}}  
                                         
                                    </td>

                                     
                             <td><button class="btn0 btn2"><a href="{{url('admin/updatebannerimg')}}/{{$a->id}}">Update</a></button></td>
                                   
                                </tr>
                                
                            </tbody>
                            @endif
                            @endforeach
                           
                        </table>
                    </div>
                 </div>      
                
                
                   <div class="mt-5" id="Teamview">
                    <div class="list1">
                        <h4 class="mb-4"> Our Team </h4>
                        <button class="btn1"><a href="{{url('admin/teamview')}}"style="color:white">ADD</a></button>
                    </div>
                    <div class="detail">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Type</th>
                                    <th>Facebook Link</th>
                                    <th>Instagram Link</th>
                                    <th>Twitter Link</th>
                                    <th>Indeed Link</th>
                                     <th>Description</th>
                                    <th>Update</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                           
                             <tbody>
                              @foreach($team as $t)
                               <tr class="team_{{$t->id}}">
                                    <td>
                                        @if($t->image !=" ")
                                        <img src="/uploads/{{$t->image}}" width="60" height="60"><br>
                                         {{$t->image}} 
                                         @else
                                         <img src="/image/team.png" width="60" height="60">
                                         @endif
                                    </td>

                                    <td>
                                         {{$t->name}}
                                    </td>
                                    <td>
                                         {{$t->type}}
                                    </td>
                                    <td>
                                        {{$t->fblink}}
                                    </td>
                                    <td>
                                        {{$t->instalink}}
                                    </td>
                                    <td>
                                        {{$t->twitterlink}}
                                    </td>
                                    <td>
                                        {{$t->ineedlink}}
                                    </td>
                                     <td>
                                        {{$t->description}}
                                    </td>
                                    
                          <td><button class="btn0 btn2"><a href="{{url('admin/teamupdate')}}/{{$t->id}}">Update</a></button></td>
                          <td><button class="btn3 btn0" onclick="deleteteam({{$t->id}})"><i class="fa fa-trash" aria-hidden="true"></button></td>
                                </tr>
                               @endforeach 
                            </tbody>
                            
                           
                        </table>
                    </div>
                 </div>
            </div>

                          <!-- admindetail list --> 
            <div class="page mt-4 marketplace-page title1">


                 <div class="mt-5" id="Contact_Banner">
                   
                   <h4 class="mb-4">Contact Us page Banner</h4>
                    
                    <div class="detail">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>   
                                    <th>Page Name</th>
                                     <th>Image</th>  
                                    <th>Update</th>
                                   
                                </tr>
                            </thead>
                           @foreach($allbanner as $a)
                           
                           @if($a->name=="Contact Us")
                             <tbody>
                             
                               <tr>
                                    <td>
                                      {{$a->name}}
                                    </td>
                                     <td>
                                      {{$a->page_name}}
                                    </td>



                                    <td>

                                       <img src="/uploads/{{$a->image}}" width="400" height="200"><br>
                                       {{$a->image}}  
                                         
                                    </td>

                                     
                             <td><button class="btn0 btn2"><a href="{{url('admin/updatebannerimg')}}/{{$a->id}}">Update</a></button></td>
                                   
                                </tr>
                                
                            </tbody>
                            @endif
                            @endforeach
                           
                        </table>
                    </div>
                 </div>      
            
               
                   <div class="mt-5" id="contact_detail">
                    <h4 class="mb-4"> Contact Us Detail </h4>
                     <div class="detail">
                       <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile no</th>
                                    <th>Address</th>
                                     <th>fax number</th>
                                      <th>website</th>
                                    <th>FB Url</th>
                                    <th>Instagram Url </th>
                                    <th>Twitter Url</th>
                                    <th>Update</th>
                                   
                                </tr>
                            </thead>
                               @foreach($admindetail as $a)
                             <tbody>
                                
                                <tr>
                                    <td>
                                        {{$a->name}}
                                    </td>
                                
                    
                                    <td>
                                          {{$a->email}}
                                    </td>
                                    <td>
                                        {{$a->mobileno}}
                                    </td>
                                    <td>
                                        {{$a->address}}
                                   </td>
                                    <td>
                                        {{$a->fax_no}}
                                   </td>
                                    <td>
                                        {{$a->website}}
                                   </td>
                                   <td>
                                        {{$a->fblink}}
                                   </td>
                                   <td>
                                        {{$a->instalink}}
                                   </td>
                                   <td>
                                        {{$a->twitterlink}}
                                   </td>
                                  
                             <td><button class="btn0 btn2"><a href="{{url('admin/updateadmindetail')}}/{{$a->id}}">Update</a></button></td>
                                   
                               
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
                
                
                  
                
                
                
                
            </div>
                           <!-- service list --> 
            <div class="page mt-4 dryfruit-page title1">
                
                
                    <div class="mt-5" id="Services_Banner">
                   
                   <h4 class="mb-4">Services page Banner</h4>
                    
                    <div class="detail">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>  
                                     <th>Page Name</th>  
                                    <th>Image</th> 
                                    <th>Update</th>
                                   
                                </tr>
                            </thead>
                           @foreach($allbanner as $a)
                           
                           @if($a->name=="Services")
                             <tbody>
                             
                               <tr>
                                    <td>
                                      {{$a->name}}
                                    </td>
                                    <td>
                                      {{$a->page_name}}
                                    </td>
                                   
                                    <td>

                                       <img src="/uploads/{{$a->image}}" width="400" height="200"><br>
                                       {{$a->image}}  
                                         
                                    </td>

                                     
                             <td><button class="btn0 btn2"><a href="{{url('admin/updatebannerimg')}}/{{$a->id}}">Update</a></button></td>
                                   
                                </tr>
                                
                            </tbody>
                            @endif
                            @endforeach
                           
                        </table>
                    </div>
                 </div>      
                
        
                  <div class="mt-5" id="our_services">
                    <div class="list1">
                        <h4 class="mb-4"> Our Services </h4>
                        <button class="btn1"><a href="{{url('admin/addserviceview')}}"style="color:white">ADD</a></button>
                    </div>
                    <div class="detail">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Name</th>
                                    <th>Short Description</th>
                                    <th>Long Description</th>
                                    <th>Update</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                           @foreach($service as $s)
                             <tbody>
                             
                               <tr class="service_{{$s->id}}">
                                    <td>
                                        <img src="/uploads/{{$s->image}}" width="60" height="60"><br>
                                       {{$s->image}}  
                                    </td>

                                    <td>
                                       
                                       {{$s->title}} 
                                    </td>
                                    <td>
                                      {{$s->name}}
                                    </td>
                                    <td>
                                      {{$s->short_desc}}
                                    </td>
                                    <td>
                                    {!! $s->long_desc !!}
                                    </td>
                                    
                          <td><button class="btn0 btn2"><a href="{{url('admin/updateservice')}}/{{$s->id}}" >Update</a></button></td>
                                    <td><button class="btn3 btn0" onclick="deleteservice({{$s->id}})"><i class="fa fa-trash" aria-hidden="true"></button></td>
                                </tr>
                                
                            </tbody>
                            @endforeach
                           
                        </table>
                    </div>
                 </div>
                 
                 
            
            </div> 


                         <!--   Home page data list -->
            <div class="page mt-4 category-page title1">
                

                 <div class="mt-5" id="home_banner">

                   <div class="list1">   
                  <h4 class="mb-4">Home Page Banner</h4>
                    <button class="btn1"><a href="{{url('admin/addhomebanner')}}"style="color:white">ADD</a></button>
                    </div>
                    
                    <div class="detail">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Image</th>   
                                    <th>Title</th>
                                    <th>Main Heading</th> 
                                    <th>Update</th>
                                   
                                </tr>
                            </thead>
                           @foreach($banner as $b)
                             <tbody>
                             
                               <tr class="banner_{{$b->id}}">
                                    <td>

                                       <img src="/uploads/{{$b->image}}" width="400" height="200"><br>
                                       {{$b->image}}  
                                         
                                    </td>

                                     <td>
                                      {{$b->title}}
                                    </td>

                                     <td>
                                      @foreach( $more_maintitle as $m)
                                        @if($b->id == $m->banner_id)
                                        <li>{{$m->more_maintitle}}</li>
                                        @endif
                                     @endforeach
                                    </td>
                                    
                           <td><button class="btn0 btn2"><a href="{{url('admin/updatebanner')}}/{{$b->id}}">Update</a></button></td>

                              <td><button class="btn3 btn0" onclick="deletehomebanner({{$b->id}})"><i class="fa fa-trash" aria-hidden="true"></button></td>                      
                            
                            
                                </tr>
                                
                            </tbody>
                            @endforeach
                           
                        </table>
                    </div>
                 </div>  
                 
                   <div class="mt-5" id="Features">
                    <div class="list1">
                        <h4 class="mb-4">FEATURES</h4>
                        <button class="btn1"><a href="{{url('admin/addfeatures')}}"style="color:white">ADD</a></button>
                    </div>
                    <div class="detail">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Icon</th>
                                  
                                    <th>Name</th>
                                    <th>Description</th> 
                                    <th>Update</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                           @foreach($features as $f)
                             <tbody>
                             
                               <tr class="features_{{$f->id}}">
                                    <td>

                                       <i class="{{$f->icon}}"></i>
                                        
                                         
                                    </td>

                                     <td>
                                      {{$f->name}}
                                    </td>
                                   
                                    <td>
                                    {{ $f->description }}
                                    </td>
                                    
                          <td><button class="btn0 btn2"><a href="{{url('admin/updatefeatures')}}/{{$f->id}}">Update</a></button></td>
                                    <td><button class="btn3 btn0" onclick="deletefeatures({{$f->id}})"><i class="fa fa-trash" aria-hidden="true"></button></td>
                                </tr>
                                
                            </tbody>
                            @endforeach
                           
                        </table>
                    </div>
                 </div>
                 
                 
                   <div class="mt-5" id="History">
                   
                      <h4 class="mb-4">History</h4>
                    
                    <div class="detail">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Image</th>   
                                    <th>Title</th>
                                    <th>Description</th> 
                                    <th>Update</th>
                                   
                                </tr>
                            </thead>
                            @foreach($history as $h)
                             <tbody>
                             
                               <tr class="banner_{{$h->id}}">
                                    <td>

                                       <img src="/uploads/{{$h->image}}" width="400" height="200"><br>
                                       {{$h->image}}  
                                         
                                    </td>

                                     <td>
                                      {{$h->title}}
                                    </td>
                                   
                                    <td>
                                      {!! $h->description !!}
                                    </td>
                                    
                           <td><button class="btn0 btn2"><a href="{{url('admin/updatehistory')}}/{{$h->id}}">Update</a></button></td>
                                   
                                </tr>
                                
                            </tbody>
                            @endforeach
                           
                        </table>
                    </div>
                 </div>   
                 
                 
                   <div class="mt-5" id="Services">
                    <div class="list1">
                        <h4 class="mb-4"> Our Services  </h4>
                        <button class="btn1"><a href="{{url('admin/addserviceview')}}"style="color:white">ADD</a></button>
                    </div>
                    <div class="detail">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Name</th>
                                    <th>Short Description</th>
                                   
                                    <th>Update</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                           @foreach($service as $s)
                             <tbody>
                             
                               <tr class="service_{{$s->id}}">
                                    <td>
                                        <img src="/uploads/{{$s->image}}" width="60" height="60"><br>
                                       {{$s->image}}  
                                    </td>

                                    <td>
                                       
                                       {{$s->title}} 
                                    </td>
                                    <td>
                                      {{$s->name}}
                                    </td>
                                    <td>
                                      {{$s->short_desc}}
                                    </td>
                                   
                                    
                          <td><button class="btn0 btn2"><a href="{{url('admin/updateservice')}}/{{$s->id}}" >Update</a></button></td>
                                    <td><button class="btn3 btn0" onclick="deleteservice({{$s->id}})"><i class="fa fa-trash" aria-hidden="true"></button></td>
                                </tr>
                                
                            </tbody>
                            @endforeach
                           
                        </table>
                    </div>
                 </div>

               
                
                
                
                
                
                   <div class="mt-5" id="Testimonial">
                    <div class="list1">
                        <h4 class="mb-4">Testimonial  </h4>
                        <button class="btn1"><a href="{{url('admin/addtestimonial')}}" >ADD</a></button>
                    </div>
                    <div class="detail">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Occupation</th>
                                    <th>Description</th>
                                    <th>Update</th>
                                    <th>Delete</th>
                                   
                                </tr>
                            </thead>
                              @foreach($testimonial as $t)
                             <tbody>
                             
                               <tr class="testimonial_{{$t->id}}">
                                    <td>
                                        @if($t->image !="")
                                        <img src="/uploads/{{$t->image}}" width="60" height="60"><br>
                                         {{$t->image}} 
                                         @else
                                         <img src="/image/team.png" width="60" height="60">
                                         @endif
                                    </td>

                                    <td>
                                       {{$t->name}} 
                                    </td>
                                    <td>
                                       {{$t->occupation}} 
                                    </td>
                                     <td>
                                      {{$t->description}} 

                                    </td>

                                  <td><button class="btn0 btn2"><a href="{{url('admin/updatetestimonial')}}/{{$t->id}}">Update</a></button></td>


                                    <td><button class="btn3 btn0" onclick="deletetestimonial({{$t->id}})"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                                </tr>
                                
                            </tbody>
                            @endforeach
                          </table>
                       </div>  

               
            </div> 

              
               
           </div>

           
  


       
   </div>  

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
   

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript">
                  function openNav() {
            document.getElementById("mySidepanel").style.width = "100%";
        }
                  function closeNav() {
            document.getElementById("mySidepanel").style.width = "0";
        }

        function openForm() {
          document.getElementById("myForm").style.display = "block";
           }
           $(function() {
                 setTimeout(function() { $("#hideDiv").fadeOut(1500); }, 3000)

             });
             
             
                $('.dash>div').click(function(){
         //   alert("test");
           // $('.dryfruit-btn1').find('.active').addClass("test123");
            $(".active").children(".service-update1").slideToggle('slow');
           // $('.service-update1').slideToggle('slow');
           });





 function deleteapplication($id){

     if(confirm("do you want delete this banner ?")){
             $.ajax({

                url:'deleteapplication/'+$id,
                type:'GET',
                dataType: "json",

        success: function(response){
        
                      $('.application_'+$id).hide();
          
                        },

      error: function(response) {


           alert('error');
          
                 
                  },        
          
                });

          }
      }  






    function deletehomebanner($id){

     if(confirm("do you want delete this banner ?")){
             $.ajax({

                url:'deletehomebannerdata/'+$id,
                type:'GET',
                dataType: "json",

        success: function(response){
        
                      $('.banner_'+$id).hide();
          
                        },

      error: function(response) {


           alert('error');
          
                 
                  },        
          
                });

          }
      }  

           



            function deletecareerinquiry($id){

     if(confirm("do you want delete this application ?")){
             $.ajax({

                url:'deletecareerinquiry/'+$id,
                type:'GET',
                dataType: "json",

        success: function(response){
        
                      $('.career_'+$id).hide();
          
                        },

      error: function(response) {


           alert('error');
          
                 
                  },        
          
                });

          }
      }  

      function deletefeatures($id){
    // alert('i am here');

     if(confirm("do you want delete this Inquiry ?")){
             $.ajax({

                url:'deletefeatures/'+$id,
                type:'GET',
                dataType: "json",

        success: function(response){
        
                      $('.features_'+$id).hide();
          
                        },

      error: function(response) {


           alert('error');
          
                 
                  },        
          
                });

          }
      } 
       




function deletequeto($id){
    // alert('i am here');

     if(confirm("do you want delete this Inquiry ?")){
             $.ajax({

                url:'deletequeto/'+$id,
                type:'GET',
                dataType: "json",

        success: function(response){
        
                      $('.queto_'+$id).hide();
          
                        },

      error: function(response) {


           alert('error');
          
                 
                  },        
          
                });

          }
      } 


  function deletequeto1($id){

     if(confirm("do you want delete this Inquiry ?")){
             $.ajax({

                url:'deletequeto1/'+$id,
                type:'GET',
                dataType: "json",

        success: function(response){
        
                      $('.queto1_'+$id).hide();
          
                        },

      error: function(response) {


           alert('error');
          
                 
                  },        
          
                });

          }
      }  


   function deleteposition($id){

     if(confirm("do you want delete this vacancy ?")){
             $.ajax({

                url:'deleteposition/'+$id,
                type:'GET',
                dataType: "json",

        success: function(response){
        
                      $('.position_'+$id).hide();
          
                        },

      error: function(response) {


           alert('error');
          
                 
                  },        
          
                });

          }
      }         


function deletebenifits($id){

     if(confirm("do you want delete this vacancy ?")){
             $.ajax({

                url:'deletebenifits/'+$id,
                type:'GET',
                dataType: "json",

        success: function(response){
        
                      $('.benifits_'+$id).hide();
          
                        },

      error: function(response) {


           alert('error');
          
                 
                  },        
          
                });

          }
      }         


 function deletecontact($id){

     if(confirm("do you want delete this message ?")){
             $.ajax({

                url:'deletecontact/'+$id,
                type:'GET',
                dataType: "json",

        success: function(response){
        
                      $('.contact_'+$id).hide();
          
                        },

      error: function(response) {


           alert('error');
          
    
                  },        
          
                });

          }
      }



 function deleteservice($id){

     if(confirm("do you want delete this service ?")){
             $.ajax({

                url:'deleteservice/'+$id,
                type:'GET',
                dataType: "json",

        success: function(response){
        
                      $('.service_'+$id).hide();
          
                        },

      error: function(response) {


           alert('error');
          
    
                  },        
          
                });

          }
      }


      function deletefaq($id){

     if(confirm("do you want delete this question ?")){
             $.ajax({

                url:'deletefaq/'+$id,
                type:'GET',
                dataType: "json",

        success: function(response){
        
                      $('.faq_'+$id).hide();
          
                        },

      error: function(response) {


           alert('error');
          
    
                  },        
          
                });

          }
      }
          

  function deleteteam($id){

     if(confirm("do you want delete this Team member ?")){
             $.ajax({

                url:'teamdelete/'+$id,
                type:'GET',
                dataType: "json",

        success: function(response){
        
                      $('.team_'+$id).hide();
          
                        },

      error: function(response) {


           alert('error');
          
    
                  },        
          
                });

          }
      }


     function deleteinquiry($id){

     if(confirm("do you want delete this record ?")){
             $.ajax({

                url:'deleteenquiry/'+$id,
                type:'GET',
                dataType: "json",

        success: function(response){
        
                      $('.enquires_'+$id).hide();
          
                        },

      error: function(response) {


           alert('error');
          
                 
                  },        
          
                });

          }
      }


       function deletetestimonial($id){

     if(confirm("do you want delete this testimonial ?")){
             $.ajax({

                url:'deletetestimonial/'+$id,
                type:'GET',
                dataType: "json",

        success: function(response){
        
                      $('.testimonial_'+$id).hide();
          
                        },

      error: function(response) {


           alert('error');
          
 

                 
                  },        
          
                });

          }
      }

     
         function deleteimage($id){

    if(confirm("do you want delete this record ?")){
             $.ajax({

                url:'deleteimage/'+$id,
                type:'GET',
                dataType: "json",

        success: function(response){
        
                       alert('success');
          
                        },

      error: function(response) {
 
        
          var v='image_'+$id;
          /* alert('.image_'+$id);*/

            $('.image_'+$id).hide();  
    /* var x = document.getElementById('image_'+$id);
         
              x.style.display = "none";*/
                 
                  },        
          
                });


          
          }
      }
        

          $('.top-nav a').on('click',function (e) {
        // e.preventDefault();

        var target = this.hash,
        $target = $(target);

       $('html, body').stop().animate({
         'scrollTop': $target.offset().top-90
        }, 800, 'swing', function () {
         window.location.hash = target;
        });
    });


    $(document).ready(function(){
       
        $(".user-details").click(function(){
            $(".main-menu-content").slideToggle("slow");
        })

        $(".btn1").click(function(){
            $(".page1").show();
            $(".hosting-page").hide();
        })

       $("button.btn1.btn2").click(function(){
             $(".page2").show();
             $(".page1").hide();
            $(".dryfruit-page").hide();
         })
      });

    var tl = new TimelineMax();

//Logos
TweenMax.set('.wp-logo', { scale: 1 })
TweenMax.set('.weebly-logo', { scale: 1 })  

// Pages 
TweenMax.set('.dashboard-page', { display: 'none' })
TweenMax.set('.hosting-page', { display: 'block' })
TweenMax.set('.marketplace-page', { display: 'none' })
TweenMax.set('.domain-page', { display: 'none' })
TweenMax.set('.message-page', { display: 'none' })
TweenMax.set('.manage-account-page', { display: 'none' })
TweenMax.set('.dryfruit-page', { display: 'none' })
TweenMax.set('.category-page', { display: 'none' })
TweenMax.set('.team-page', { display: 'none' })
TweenMax.set('.faq-page', { display: 'none' })
TweenMax.set('.career-page', { display: 'none' })
TweenMax.set('.quteo1-page', { display: 'none' })
TweenMax.set('.quteo2-page', { display: 'none' })
TweenMax.set('.inquiry-page', { display: 'none' })
TweenMax.set('.application-page', { display: 'none' })





TweenMax.to('.mobile-nav', 0, { x: -300 })

/* Message Btn Starts */
$('.message-btn').on('click', function(){  
   $('.dashboard-page').css({ display: 'none' })
   $('.hosting-page').css({ display: 'none' })
   $('.marketplace-page').css({ display: 'none' })
   $('.domain-page').css({ display: 'none' })
   $('.manage-account-page').css({ display: 'none' })
   $('.message-page').css({ display: 'block' })
    $('.manage-account-page').css({ display: 'none' })
     $('.dryfruit-page').css({ display: 'none' })
     $('.category-page').css({ display: 'none' })
     $('.team-page').css({ display: 'none' })
     $('.faq-page').css({ display: 'none' })
      $('.career-page').css({ display: 'none' })
       $('.quteo1-page').css({ display: 'none' })
    $('.quteo2-page').css({ display: 'none' })
    $('.inquiry-page').css({ display: 'none' })
    $('.application-page').css({ display: 'none' })
  
     });
/* Message Btn Ends */

// Manage Account Btn STARTS
$('.message-btn').on('click', function(){  
    $(this).addClass('active').removeClass('nav-btn');
    $('.marketplace-btn').removeClass('active').addClass('nav-btn');
    $('.domain-btn').removeClass('active').addClass('nav-btn');
    $('.hosting-btn').removeClass('active').addClass('nav-btn');
    $('.dryfruit-btn').removeClass('active').addClass('nav-btn');
    $('.category-btn').removeClass('active').addClass('nav-btn');
    $('.dashboard-btn').removeClass('active').addClass('nav-btn');
    $('.manage-account-btn').removeClass('active').addClass('nav-btn');
    $('.team-btn').removeClass('active').addClass('nav-btn');
    $('.faq-btn').removeClass('active').addClass('nav-btn');
     $('.career-btn').removeClass('active').addClass('nav-btn');
     $('.quteo1-btn').removeClass('active').addClass('nav-btn');
     $('.quteo2-btn').removeClass('active').addClass('nav-btn');
      $('.inquiry-btn').removeClass('active').addClass('nav-btn');
       $('.application-btn').removeClass('active').addClass('nav-btn');
      

   $('.dashboard-page').css({ display: 'none' })
   $('.hosting-page').css({ display: 'none' })
   $('.marketplace-page').css({ display: 'none' })
   $('.domain-page').css({ display: 'none' })
   $('.manage-account-page').css({ display: 'none' })
   $('.message-page').css({ display: 'block' })
   $('.dryfruit-page').css({ display: 'none' })
   $('.category-page').css({ display: 'none' })
   $('.team-page').css({ display: 'none' })
   $('.faq-page').css({ display: 'none' })
   $('.career-page').css({ display: 'none' })
   $('.quteo1-page').css({ display: 'none' })
   $('.quteo2-page').css({ display: 'none' })
   $('.inquiry-page').css({ display: 'none' })
   $('.application-page').css({ display: 'none' })
  

    });

$('.manage-account-btn').on('click', function(){
    $(this).addClass('active').removeClass('nav-btn');
    $('.marketplace-btn').removeClass('active').addClass('nav-btn');
    $('.domain-btn').removeClass('active').addClass('nav-btn');
    $('.hosting-btn').removeClass('active').addClass('nav-btn');
    $('.dryfruit-btn').removeClass('active').addClass('nav-btn');
    $('.category-btn').removeClass('active').addClass('nav-btn');
    $('.dashboard-btn').removeClass('active').addClass('nav-btn');
    $('.message-btn').removeClass('active').addClass('nav-btn');
    $('.team-btn').removeClass('active').addClass('nav-btn');
    $('.faq-btn').removeClass('active').addClass('nav-btn');
    $('.career-btn').removeClass('active').addClass('nav-btn');
    $('.quteo1-btn').removeClass('active').addClass('nav-btn');
    $('.quteo2-btn').removeClass('active').addClass('nav-btn');
    $('.inquiry-btn').removeClass('active').addClass('nav-btn');
      $('.application-btn').removeClass('active').addClass('nav-btn');
   
   $('.dashboard-page').css({ display: 'none' })
   $('.hosting-page').css({ display: 'none' })
   $('.marketplace-page').css({ display: 'none' })
   $('.domain-page').css({ display: 'none' })
   $('.message-page').css({ display: 'none' })
  $('.manage-account-page').css({ display: 'block' })
  $('.account-info-drop-down').css({ display: 'none' })
  $('.dryfruit-page').css({ display: 'none' })
  $('.category-page').css({ display: 'none' })
  $('.team-page').css({ display: 'none' })
  $('.faq-page').css({ display: 'none' })
  $('.career-page').css({ display: 'none' })
  $('.quteo1-page').css({ display: 'none' })
  $('.quteo2-page').css({ display: 'none' })
  $('.inquiry-page').css({ display: 'none' })
  $('.application-page').css({ display: 'none' })
  
    });

    $('.hosting-btn').on('click', function() {
        $(this).addClass('active').removeClass('nav-btn');
        $('.dashboard-btn').removeClass('active').addClass('nav-btn');
        $('.marketplace-btn').removeClass('active').addClass('nav-btn');
        $('.domain-btn').removeClass('active').addClass('nav-btn');
        $('.dryfruit-btn').removeClass('active').addClass('nav-btn');
        $('.message-btn').removeClass('active').addClass('nav-btn'); 
        $('.manage-account-btn').removeClass('active').addClass('nav-btn');
        $('.team-btn').removeClass('active').addClass('nav-btn');  
        $('.faq-btn').removeClass('active').addClass('nav-btn');
        $('.career-btn').removeClass('active').addClass('nav-btn');
        $('.quteo1-btn').removeClass('active').addClass('nav-btn');
        $('.quteo2-btn').removeClass('active').addClass('nav-btn');
        $('.inquiry-btn').removeClass('active').addClass('nav-btn');
        $('.category-btn').removeClass('active').addClass('nav-btn');
        $('.application-btn').removeClass('active').addClass('nav-btn');

        $('.dashboard-page').css({ display: 'none' })
        $('.hosting-page').css({ display: 'block' })
        $('.marketplace-page').css({ display: 'none' })
        $('.domain-page').css({ display: 'none' })
        $('.message-page').css({ display: 'none' })
        $('.manage-account-page').css({ display: 'none' })
        $('.dryfruit-page').css({ display: 'none' })
        $('.category-page').css({ display: 'none' })
        $('.team-page').css({ display: 'none' })
        $('.faq-page').css({ display: 'none' })
        $('.career-page').css({ display: 'none' })
        $('.quteo1-page').css({ display: 'none' })
        $('.quteo2-page').css({ display: 'none' })
        $('.inquiry-page').css({ display: 'none' })
        $('.application-page').css({ display: 'none' })
  
  
    });

$('.marketplace-btn').on('click', function(){
     $(this).addClass('active').removeClass('nav-btn');
     $('.hosting-btn').removeClass('active').addClass('nav-btn');
     $('.dashboard-btn').removeClass('active').addClass('nav-btn');
     $('.domain-btn').removeClass('active').addClass('nav-btn');
         $('.dryfruit-btn').removeClass('active').addClass('nav-btn');
      $('.category-btn').removeClass('active').addClass('nav-btn');
      $('.message-btn').removeClass('active').addClass('nav-btn'); 
     $('.manage-account-btn').removeClass('active').addClass('nav-btn');
     $('.team-btn').removeClass('active').addClass('nav-btn'); 
    $('.faq-btn').removeClass('active').addClass('nav-btn');
    $('.career-btn').removeClass('active').addClass('nav-btn');
     $('.quteo1-btn').removeClass('active').addClass('nav-btn');
      $('.quteo2-btn').removeClass('active').addClass('nav-btn');
        $('.inquiry-btn').removeClass('active').addClass('nav-btn');
          $('.application-btn').removeClass('active').addClass('nav-btn');
  
     $('.dashboard-page').css({ display: 'none' })
     $('.hosting-page').css({ display: 'none' })
     $('.marketplace-page').css({ display: 'block' })
     $('.domain-page').css({ display: 'none' })
     $('.message-page').css({ display: 'none' })
     $('.manage-account-page').css({ display: 'none' })
     $('.dryfruit-page').css({ display: 'none' })
     $('.category-page').css({ display: 'none' })
     $('.team-page').css({ display: 'none' })
     $('.faq-page').css({ display: 'none' })
     $('.career-page').css({ display: 'none' })
     $('.quteo1-page').css({ display: 'none' })
     $('.quteo2-page').css({ display: 'none' })
     $('.inquiry-page').css({ display: 'none' })
     $('.application-page').css({ display: 'none' })
  
       


   });

$('.domain-btn').on('click', function() {
     $(this).addClass('active').removeClass('nav-btn');
     $('.hosting-btn').removeClass('active').addClass('nav-btn');
     $('.dashboard-btn').removeClass('active').addClass('nav-btn');
     $('.marketplace-btn').removeClass('active').addClass('nav-btn');
     $('.dryfruit-btn').removeClass('active').addClass('nav-btn');
      $('.category-btn').removeClass('active').addClass('nav-btn');
     $('.message-btn').removeClass('active').addClass('nav-btn'); 
     $('.manage-account-btn').removeClass('active').addClass('nav-btn'); 
      $('.team-btn').removeClass('active').addClass('nav-btn');
      $('.faq-btn').removeClass('active').addClass('nav-btn');
      $('.career-btn').removeClass('active').addClass('nav-btn');
       $('.quteo1-btn').removeClass('active').addClass('nav-btn');
        $('.quteo2-btn').removeClass('active').addClass('nav-btn');
          $('.inquiry-btn').removeClass('active').addClass('nav-btn');
            $('.application-btn').removeClass('active').addClass('nav-btn');

     $('.dashboard-page').css({ display: 'none' })
     $('.hosting-page').css({ display: 'none' })
     $('.marketplace-page').css({ display: 'none' })
     $('.domain-page').css({ display: 'block' })
     $('.message-page').css({ display: 'none' })
      $('.manage-account-page').css({ display: 'none' })
      $('.dryfruit-page').css({ display: 'none' })
       $('.category-page').css({ display: 'none' })
        $('.team-page').css({ display: 'none' })
         $('.faq-page').css({ display: 'none' })
          $('.career-page').css({ display: 'none' })
           $('.quteo1-page').css({ display: 'none' })
           $('.quteo2-page').css({ display: 'none' })
            $('.inquiry-page').css({ display: 'none' })
             $('.application-page').css({ display: 'none' })
  


   });

$('.dryfruit-btn').on('click', function() {
     $(this).addClass('active').removeClass('nav-btn');
     $('.hosting-btn').removeClass('active').addClass('nav-btn');
     $('.dashboard-btn').removeClass('active').addClass('nav-btn');
     $('.marketplace-btn').removeClass('active').addClass('nav-btn');
      $('.category-btn').removeClass('active').addClass('nav-btn');
     $('.domain-btn').removeClass('active').addClass('nav-btn');
     $('.message-btn').removeClass('active').addClass('nav-btn'); 
     $('.manage-account-btn').removeClass('active').addClass('nav-btn'); 
     $('.team-btn').removeClass('active').addClass('nav-btn');
     $('.faq-btn').removeClass('active').addClass('nav-btn');
     $('.career-btn').removeClass('active').addClass('nav-btn');
      $('.quteo1-btn').removeClass('active').addClass('nav-btn');
       $('.quteo2-btn').removeClass('active').addClass('nav-btn');
         $('.inquiry-btn').removeClass('active').addClass('nav-btn');
           $('.application-btn').removeClass('active').addClass('nav-btn');
 $(".page1").hide();
  $(".page2").hide();
  
     $('.dashboard-page').css({ display: 'none' })
     $('.hosting-page').css({ display: 'none' })
     $('.marketplace-page').css({ display: 'none' })
     $('.dryfruit-page').css({ display: 'block' })
     $('.message-page').css({ display: 'none' })
      $('.manage-account-page').css({ display: 'none' })
      $('.domain-page').css({ display: 'none' })
       $('.category-page').css({ display: 'none' })
       $('.team-page').css({ display: 'none' })
        $('.faq-page').css({ display: 'none' })
         $('.career-page').css({ display: 'none' })
          $('.quteo1-page').css({ display: 'none' })
          $('.quteo2-page').css({ display: 'none' })
           $('.inquiry-page').css({ display: 'none' })
            $('.application-page').css({ display: 'none' })
  

   });

$('.category-btn').on('click', function() {
     $(this).addClass('active').removeClass('nav-btn');
     $('.hosting-btn').removeClass('active').addClass('nav-btn');
     $('.dashboard-btn').removeClass('active').addClass('nav-btn');
     $('.marketplace-btn').removeClass('active').addClass('nav-btn');
     $('.domain-btn').removeClass('active').addClass('nav-btn');
      $('.dryfruit-btn').removeClass('active').addClass('nav-btn');
     $('.message-btn').removeClass('active').addClass('nav-btn'); 
     $('.manage-account-btn').removeClass('active').addClass('nav-btn');
      $('.team-btn').removeClass('active').addClass('nav-btn');
      $('.faq-btn').removeClass('active').addClass('nav-btn');
      $('.career-btn').removeClass('active').addClass('nav-btn');
       $('.quteo1-btn').removeClass('active').addClass('nav-btn');
        $('.quteo2-btn').removeClass('active').addClass('nav-btn'); 
          $('.inquiry-btn').removeClass('active').addClass('nav-btn');
            $('.application-btn').removeClass('active').addClass('nav-btn');
  
     $('.dashboard-page').css({ display: 'none' })
     $('.hosting-page').css({ display: 'none' })
     $('.marketplace-page').css({ display: 'none' })
     $('.category-page').css({ display: 'block' })
     $('.message-page').css({ display: 'none' })
      $('.dryfruit-page').css({ display: 'none' })
      $('.manage-account-page').css({ display: 'none' })
      $('.domain-page').css({ display: 'none' })
       $('.team-page').css({ display: 'none' })
        $('.faq-page').css({ display: 'none' })
         $('.career-page').css({ display: 'none' })
          $('.quteo1-page').css({ display: 'none' })
          $('.quteo2-page').css({ display: 'none' })
           $('.inquiry-page').css({ display: 'none' })
            $('.application-page').css({ display: 'none' })
  

  });

$('.team-btn').on('click', function() {
     $(this).addClass('active').removeClass('nav-btn');
     $('.hosting-btn').removeClass('active').addClass('nav-btn');
     $('.dashboard-btn').removeClass('active').addClass('nav-btn');
     $('.marketplace-btn').removeClass('active').addClass('nav-btn');
     $('.domain-btn').removeClass('active').addClass('nav-btn');
      $('.dryfruit-btn').removeClass('active').addClass('nav-btn');
     $('.message-btn').removeClass('active').addClass('nav-btn'); 
     $('.manage-account-btn').removeClass('active').addClass('nav-btn');
      $('.category-btn').removeClass('active').addClass('nav-btn');
      $('.faq-btn').removeClass('active').addClass('nav-btn'); 
      $('.career-btn').removeClass('active').addClass('nav-btn');
       $('.quteo1-btn').removeClass('active').addClass('nav-btn');
        $('.quteo2-btn').removeClass('active').addClass('nav-btn');
          $('.inquiry-btn').removeClass('active').addClass('nav-btn');
            $('.application-btn').removeClass('active').addClass('nav-btn');
  
     $('.dashboard-page').css({ display: 'none' })
     $('.hosting-page').css({ display: 'none' })
     $('.marketplace-page').css({ display: 'none' })
     $('.category-page').css({ display: 'none' })
     $('.message-page').css({ display: 'none' })
      $('.dryfruit-page').css({ display: 'none' })
      $('.manage-account-page').css({ display: 'none' })
      $('.domain-page').css({ display: 'none' })
       $('.team-page').css({ display: 'block' })
        $('.faq-page').css({ display: 'none' })
         $('.career-page').css({ display: 'none' })
          $('.quteo1-page').css({ display: 'none' })
          $('.quteo2-page').css({ display: 'none' })
           $('.inquiry-page').css({ display: 'none' })
            $('.application-page').css({ display: 'none' })
  

  });

$('.faq-btn').on('click', function() {
     $(this).addClass('active').removeClass('nav-btn');
     $('.hosting-btn').removeClass('active').addClass('nav-btn');
     $('.dashboard-btn').removeClass('active').addClass('nav-btn');
     $('.marketplace-btn').removeClass('active').addClass('nav-btn');
     $('.domain-btn').removeClass('active').addClass('nav-btn');
      $('.dryfruit-btn').removeClass('active').addClass('nav-btn');
     $('.message-btn').removeClass('active').addClass('nav-btn'); 
     $('.manage-account-btn').removeClass('active').addClass('nav-btn');
      $('.category-btn').removeClass('active').addClass('nav-btn');
      $('.team-btn').removeClass('active').addClass('nav-btn'); 
      $('.career-btn').removeClass('active').addClass('nav-btn');
       $('.quteo1-btn').removeClass('active').addClass('nav-btn');
        $('.quteo2-btn').removeClass('active').addClass('nav-btn');
          $('.inquiry-btn').removeClass('active').addClass('nav-btn');
            $('.application-btn').removeClass('active').addClass('nav-btn');
  
     $('.dashboard-page').css({ display: 'none' })
     $('.hosting-page').css({ display: 'none' })
     $('.marketplace-page').css({ display: 'none' })
     $('.category-page').css({ display: 'none' })
     $('.message-page').css({ display: 'none' })
      $('.dryfruit-page').css({ display: 'none' })
      $('.manage-account-page').css({ display: 'none' })
      $('.domain-page').css({ display: 'none' })
       $('.team-page').css({ display: 'none' })
        $('.faq-page').css({ display: 'block' })
         $('.career-page').css({ display: 'none' })
          $('.quteo1-page').css({ display: 'none' })
          $('.quteo2-page').css({ display: 'none' })
           $('.inquiry-page').css({ display: 'none' })
            $('.application-page').css({ display: 'none' })
  

  });


$('.career-btn').on('click', function() {
     $(this).addClass('active').removeClass('nav-btn');
     $('.hosting-btn').removeClass('active').addClass('nav-btn');
     $('.dashboard-btn').removeClass('active').addClass('nav-btn');
     $('.marketplace-btn').removeClass('active').addClass('nav-btn');
     $('.domain-btn').removeClass('active').addClass('nav-btn');
      $('.dryfruit-btn').removeClass('active').addClass('nav-btn');
     $('.message-btn').removeClass('active').addClass('nav-btn'); 
     $('.manage-account-btn').removeClass('active').addClass('nav-btn');
      $('.category-btn').removeClass('active').addClass('nav-btn');
      $('.team-btn').removeClass('active').addClass('nav-btn'); 
      $('.faq-btn').removeClass('active').addClass('nav-btn');
       $('.quteo1-btn').removeClass('active').addClass('nav-btn');
        $('.quteo2-btn').removeClass('active').addClass('nav-btn');
          $('.inquiry-btn').removeClass('active').addClass('nav-btn');
            $('.application-btn').removeClass('active').addClass('nav-btn');
  
     $('.dashboard-page').css({ display: 'none' })
     $('.hosting-page').css({ display: 'none' })
     $('.marketplace-page').css({ display: 'none' })
     $('.category-page').css({ display: 'none' })
     $('.message-page').css({ display: 'none' })
      $('.dryfruit-page').css({ display: 'none' })
      $('.manage-account-page').css({ display: 'none' })
      $('.domain-page').css({ display: 'none' })
       $('.team-page').css({ display: 'none' })
        $('.faq-page').css({ display: 'none' })
         $('.career-page').css({ display: 'block' })
          $('.quteo1-page').css({ display: 'none' })
          $('.quteo2-page').css({ display: 'none' })
           $('.inquiry-page').css({ display: 'none' })
            $('.application-page').css({ display: 'none' })
  

  });

$('.quteo1-btn').on('click', function() {
     $(this).addClass('active').removeClass('nav-btn');
     $('.hosting-btn').removeClass('active').addClass('nav-btn');
     $('.dashboard-btn').removeClass('active').addClass('nav-btn');
     $('.marketplace-btn').removeClass('active').addClass('nav-btn');
     $('.domain-btn').removeClass('active').addClass('nav-btn');
      $('.dryfruit-btn').removeClass('active').addClass('nav-btn');
     $('.message-btn').removeClass('active').addClass('nav-btn'); 
     $('.manage-account-btn').removeClass('active').addClass('nav-btn');
      $('.category-btn').removeClass('active').addClass('nav-btn');
      $('.team-btn').removeClass('active').addClass('nav-btn'); 
      $('.faq-btn').removeClass('active').addClass('nav-btn');
       $('.career-btn').removeClass('active').addClass('nav-btn');
        $('.quteo2-btn').removeClass('active').addClass('nav-btn');
          $('.inquiry-btn').removeClass('active').addClass('nav-btn');
            $('.application-btn').removeClass('active').addClass('nav-btn');
  
     $('.dashboard-page').css({ display: 'none' })
     $('.hosting-page').css({ display: 'none' })
     $('.marketplace-page').css({ display: 'none' })
     $('.category-page').css({ display: 'none' })
     $('.message-page').css({ display: 'none' })
      $('.dryfruit-page').css({ display: 'none' })
      $('.manage-account-page').css({ display: 'none' })
      $('.domain-page').css({ display: 'none' })
       $('.team-page').css({ display: 'none' })
        $('.faq-page').css({ display: 'none' })
         $('.career-page').css({ display: 'none' })
          $('.quteo1-page').css({ display: 'block' })
          $('.quteo2-page').css({ display: 'none' })
           $('.inquiry-page').css({ display: 'none' })
            $('.application-page').css({ display: 'none' })
  

  });
$('.quteo2-btn').on('click', function() {
     $(this).addClass('active').removeClass('nav-btn');
     $('.hosting-btn').removeClass('active').addClass('nav-btn');
     $('.dashboard-btn').removeClass('active').addClass('nav-btn');
     $('.marketplace-btn').removeClass('active').addClass('nav-btn');
     $('.domain-btn').removeClass('active').addClass('nav-btn');
      $('.dryfruit-btn').removeClass('active').addClass('nav-btn');
     $('.message-btn').removeClass('active').addClass('nav-btn'); 
     $('.manage-account-btn').removeClass('active').addClass('nav-btn');
      $('.category-btn').removeClass('active').addClass('nav-btn');
      $('.team-btn').removeClass('active').addClass('nav-btn'); 
      $('.faq-btn').removeClass('active').addClass('nav-btn');
       $('.career-btn').removeClass('active').addClass('nav-btn');
        $('.quteo1-btn').removeClass('active').addClass('nav-btn');
          $('.inquiry-btn').removeClass('active').addClass('nav-btn');
            $('.application-btn').removeClass('active').addClass('nav-btn');
  
     $('.dashboard-page').css({ display: 'none' })
     $('.hosting-page').css({ display: 'none' })
     $('.marketplace-page').css({ display: 'none' })
     $('.category-page').css({ display: 'none' })
     $('.message-page').css({ display: 'none' })
      $('.dryfruit-page').css({ display: 'none' })
      $('.manage-account-page').css({ display: 'none' })
      $('.domain-page').css({ display: 'none' })
       $('.team-page').css({ display: 'none' })
        $('.faq-page').css({ display: 'none' })
         $('.career-page').css({ display: 'none' })
          $('.quteo1-page').css({ display: 'none' })
          $('.quteo2-page').css({ display: 'block' })
           $('.inquiry-page').css({ display: 'none' })
            $('.application-page').css({ display: 'none' })
  

  });
  
  
  $('.inquiry-btn').on('click', function() {
     $(this).addClass('active').removeClass('nav-btn');
     $('.hosting-btn').removeClass('active').addClass('nav-btn');
     $('.dashboard-btn').removeClass('active').addClass('nav-btn');
     $('.marketplace-btn').removeClass('active').addClass('nav-btn');
     $('.domain-btn').removeClass('active').addClass('nav-btn');
     $('.dryfruit-btn').removeClass('active').addClass('nav-btn');
     $('.message-btn').removeClass('active').addClass('nav-btn'); 
     $('.manage-account-btn').removeClass('active').addClass('nav-btn');
     $('.category-btn').removeClass('active').addClass('nav-btn');
     $('.team-btn').removeClass('active').addClass('nav-btn'); 
     $('.faq-btn').removeClass('active').addClass('nav-btn');
     $('.career-btn').removeClass('active').addClass('nav-btn');
     $('.quteo1-btn').removeClass('active').addClass('nav-btn');
     $('.quteo2-btn').removeClass('active').addClass('nav-btn');
       $('.application-btn').removeClass('active').addClass('nav-btn');
  
     $('.dashboard-page').css({ display: 'none' })
     $('.hosting-page').css({ display: 'none' })
     $('.marketplace-page').css({ display: 'none' })
     $('.category-page').css({ display: 'none' })
     $('.message-page').css({ display: 'none' })
      $('.dryfruit-page').css({ display: 'none' })
      $('.manage-account-page').css({ display: 'none' })
      $('.domain-page').css({ display: 'none' })
       $('.team-page').css({ display: 'none' })
        $('.faq-page').css({ display: 'none' })
         $('.career-page').css({ display: 'none' })
          $('.quteo1-page').css({ display: 'none' })
          $('.quteo2-page').css({ display: 'none' })
           $('.inquiry-page').css({ display: 'block' })
            $('.application-page').css({ display: 'none' })
  

  });


   $('.application-btn').on('click', function() {
     $(this).addClass('active').removeClass('nav-btn');
     $('.hosting-btn').removeClass('active').addClass('nav-btn');
     $('.dashboard-btn').removeClass('active').addClass('nav-btn');
     $('.marketplace-btn').removeClass('active').addClass('nav-btn');
     $('.domain-btn').removeClass('active').addClass('nav-btn');
     $('.dryfruit-btn').removeClass('active').addClass('nav-btn');
     $('.message-btn').removeClass('active').addClass('nav-btn'); 
     $('.manage-account-btn').removeClass('active').addClass('nav-btn');
     $('.category-btn').removeClass('active').addClass('nav-btn');
     $('.team-btn').removeClass('active').addClass('nav-btn'); 
     $('.faq-btn').removeClass('active').addClass('nav-btn');
     $('.career-btn').removeClass('active').addClass('nav-btn');
     $('.quteo1-btn').removeClass('active').addClass('nav-btn');
     $('.quteo2-btn').removeClass('active').addClass('nav-btn');
       $('.inquiry-btn').removeClass('active').addClass('nav-btn');
  
     $('.dashboard-page').css({ display: 'none' })
     $('.hosting-page').css({ display: 'none' })
     $('.marketplace-page').css({ display: 'none' })
     $('.category-page').css({ display: 'none' })
     $('.message-page').css({ display: 'none' })
      $('.dryfruit-page').css({ display: 'none' })
      $('.manage-account-page').css({ display: 'none' })
      $('.domain-page').css({ display: 'none' })
       $('.team-page').css({ display: 'none' })
        $('.faq-page').css({ display: 'none' })
         $('.career-page').css({ display: 'none' })
          $('.quteo1-page').css({ display: 'none' })
          $('.quteo2-page').css({ display: 'none' })
           $('.inquiry-page').css({ display: 'none' })
            $('.application-page').css({ display: 'block' })
  

  });
</script>
</body>
</html>