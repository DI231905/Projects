<html>
<head>
  <title>Mangala Diagnostic Centre</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="/css/home1.css">
  <!--  <link rel="stylesheet" type="text/css" href="/css/upload.css"> -->

  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css">

</head>
<body>  
    <header class="page-header">
      <nav>
        <a href=""class="logo">
           <img src="/image/logo.png" alt="">
          
        </a>
         <div class="main_drop">
            <button class="dropdown-btn"><i class="fas fa-tachometer-alt"></i><span>Inquiry</span>
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
              <a href="{{url('admin/home')}}">Inquiry</a>
             <a href=""></a>
            </div>
        </div>
        <div class="main_drop">
            <button class="dropdown-btn"><i class="fas fa-home"></i><span>Home</span>
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
              <a href="{{url('admin/viewBannerlist')}}">Home page Banner</a>
              <a href="{{url('admin/Featureslist')}}">Features</a>
              <a href="{{url('admin/Homeaboutuslist')}}">Home About Us</a>
              <a href="{{url('admin/wroksteplist')}}">How To Work</a>
              <a href="{{url('admin/recordlist')}}">Record List</a>
              <a href="{{url('admin/testimoniallist')}}">Testimonial List</a>
            </div>
        </div>
          <div class="main_drop">
            <button class="dropdown-btn"><i class="fas fa-file-alt"></i><span>About Us</span>
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
              <a href="{{url('admin/aboutusBannerlist')}}">About Us Page Banner</a>
              <a href="{{url('admin/aboutusdescription')}}">About Us</a>
              <a href="{{url('admin/ourmissionvision')}}">Our Mission-Vision</a>
              <a href="{{url('admin/aboutwork')}}">What We Do</a>
              <a href="{{url('admin/whychooseus')}}"> Why Choose Us</a>
              <a href="{{url('admin/achivementlist')}}"> Our Achivement</a>

             
            </div>
        </div>
        <div class="main_drop">
            <button class="dropdown-btn"><i class="fas fa-chart-pie"></i><span>Doctors</span>
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
              <a href="{{url('admin/doctorbanner')}}">Doctors Page Banner</a>
              <a href="{{url('admin/teamdescription')}}">Description</a>
              <a href="{{url('admin/teamview')}}">Doctors Team</a>
            </div>
        </div>

          <div class="main_drop">
            <button class="dropdown-btn"><i class="fas fa-chart-pie"></i><span>Services</span>
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
              <a href="{{url('admin/hospital_service')}}">Hospital Services</a>
              <a href="{{url('admin/diagnostic_service')}}">Diagnostic Services</a>
              
            </div>
        </div>
      
        <div class="main_drop">
            <button class="dropdown-btn"><i class="fas fa-image"></i><span>Gallery</span>
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
               <a href="{{url('admin/gallarybanner')}}">Gallery Page Banner</a>
              <a href="{{url('admin/gallaryview')}}">Gallery View</a>
           
            </div>
        </div>
        <div class="main_drop">
            <button class="dropdown-btn"><i class="fas fa-phone-alt"></i><span>Contact</span>
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
              <a href="{{url('admin/contactusbanner')}}">Contact Us Page Banner</a>
              <a href="{{url('admin/admindetail')}}">Update Contact</a>
              <a href="{{url('admin/contactlist')}}">GET IN TOUCH</a>
             
            </div>
        </div>
        <div class="main_drop">
            <button class="dropdown-btn"><i class="fas fa-table"></i><span>Footer</span>
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
              <a href="{{url('admin/footeraboutlist')}}">Footer About Us</a>
              
            </div>
        </div>
      </nav>
    </header>
    <section class="mobile_manu">
        <div class="container">
          <div class="row">
              <div class="col-lg-6">
                 <div class="mobile_logo">
                   <a href="index.html"><img src="image/logo-1.png"></a>
                 </div>
              </div>
              <div class="col-lg-6">
                <nav class="nav-bar">
                  <div class="toggle-menu">
                    <div class="line line1"></div>
                    <div class="line line2"></div>
                    <div class="line line3"></div>
                  </div>                 
                  <ul class="nav-list">
                    <li class="nav-list-item">
                      <div class="mobile_logo1">
                         <a href=""><img src="image/logo.png"></a>
                     </div>
                    </li>
                    <li class="nav-list-item">
                      <div class="main_drop">
                          <button class="dropdown-btn">Home
                            <i class="fa fa-caret-down"></i>
                          </button>
                          <div class="dropdown-container">
                            <a href="{{url('admin/viewBannerlist')}}">Home page Banner</a>
                            <a href="{{url('admin/Featureslist')}}">Features</a>
                            <a href="{{url('admin/Homeaboutuslist')}}">Home About Us</a>
                            <a href="{{url('admin/wroksteplist')}}">How To Work</a>
                            <a href="{{url('admin/recordlist')}}">Record List</a>
                            <a href="{{url('admin/testimoniallist')}}">Testimonial List</a>
                          </div>
                      </div>
                    </li>
                    <li class="nav-list-item">
                      <div class="main_drop">
                          <button class="dropdown-btn">About Us
                            <i class="fa fa-caret-down"></i>
                          </button>
                          <div class="dropdown-container">
                            <a href="{{url('admin/aboutusBannerlist')}}">About Us Page Banner</a>
                            <a href="{{url('admin/aboutusdescription')}}">About Us</a>
                            <a href="{{url('admin/ourmissionvision')}}">Our Mission-Vision</a>
                            <a href="{{url('admin/aboutwork')}}">What We Do</a>
                            <a href="{{url('admin/whychooseus')}}"> Why Choose Us</a>
                            <a href="{{url('admin/achivementlist')}}"> Our Achivement</a>
                          </div>
                      </div>
                    </li>
                    <li class="nav-list-item">
                      <div class="main_drop">
                          <button class="dropdown-btn">Doctors 
                            <i class="fa fa-caret-down"></i>
                          </button>
                          <div class="dropdown-container">
                             <a href="{{url('admin/doctorbanner')}}">Doctors Page Banner</a>
                             <a href="{{url('admin/teamdescription')}}">Description</a>
                             <a href="{{url('admin/teamview')}}">Doctors Team</a>
                          </div>
                      </div>
                    </li>
                    <li class="nav-list-item">
                      <div class="main_drop">
                          <button class="dropdown-btn">Services
                            <i class="fa fa-caret-down"></i>
                          </button>
                          <div class="dropdown-container">
                            <a href="{{url('admin/hospital_service')}}">Hospital Services</a>
                            <a href="{{url('admin/diagnostic_service')}}">Diagnostic Services</a>
                          </div>
                      </div>
                    </li>
                    <li class="nav-list-item">
                      <div class="main_drop">
                          <button class="dropdown-btn">Gallery 
                            <i class="fa fa-caret-down"></i>
                          </button>
                          <div class="dropdown-container">
                             <a href="{{url('admin/gallarybanner')}}">Gallery Page Banner</a>
                             <a href="{{url('admin/gallaryview')}}">Gallery View</a>
                          </div>
                      </div>
                    </li>
                    <li class="nav-list-item">
                      <div class="main_drop">
                          <button class="dropdown-btn">Contact Us
                            <i class="fa fa-caret-down"></i>
                          </button>
                          <div class="dropdown-container">
                            <a href="{{url('admin/contactusbanner')}}">Contact Us Page Banner</a>
                            <a href="{{url('admin/admindetail')}}">Update Contact</a>
                           
                          </div>
                      </div>
                    </li>
                  </ul>
                </nav>
              </div>
          </div>
        </div>
    </section>
    <section class="page-content">
      <div class="search-and-user">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-6">
               <ul class="admin-menu">
                 <li>
                    <div class="switch">
                      <input type="checkbox" id="mode" checked>
                      <label for="mode">
                      </label>
                    </div>
                    <button class="collapse-btn" aria-expanded="true" aria-label="collapse menu">
                      <i class="fas fa-bars"></i>
                      <span>Collapse</span>
                    </button>
                 </li>
              </ul>
          </div>
          <div class="col-lg-6 col-md-6 col-6">
              <div class="admin-profile">
                  <span class="greeting">Hello admin</span>
                  <div class="notifications">
                   <!-- <span class="badge">1</span>-->
                    <i class="fas fa-user"></i>
                  </div>
                  <div class="icon">
                 <!--   <div class="dropdown">
                      <button id="myBtn" class="dropbtn"><i class="far fa-bell"></i></button>
                        <div id="myDropdown" class="dropdown-content">
                          <span class="dropdown-it">15 Notifications</span>
                          <div class="dropdown-divider"></div>
                          <a href="#" class="dropdown-item">
                              <i class="fas fa-envelope mr-2"></i> 4 new messages
                              <span class="float-right text-sm">3 mins</span>
                          </a>
                          <div class="dropdown-divider"></div>
                          <a href="#" class="dropdown-item">
                              <i class="fas fa-users mr-2"></i> 8 friend requests
                              <span class="float-right text-sm">12 hours</span>
                          </a>
                          <div class="dropdown-divider"></div>
                          <a href="#" class="dropdown-item">
                              <i class="fas fa-file mr-2"></i> 3 new reports
                              <span class="float-right text-sm">2 days</span>
                          </a>
                          <div class="dropdown-divider"></div>
                          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                        </div>
                    </div>-->
                  </div>
                  <div class="login">
                    <div class="dropdown1">
                      <button id="myBtn1" class="dropbtn1"><i class="fas fa-cog"></i></button>
                        <div id="myDropdown1" class="dropdown-content1">
                          <a href="{{url('admin/changepassword')}}">Change Password</a>
                          <a href="{{url('admin/logout')}}"><i class="fas fa-lock"></i>Logout</a>
                        </div>
                    </div>
                  </div>
              </div>
          </div>
        </div>
      </div>

        @if ($message = Session::get('error'))
            <div  id="hideDiv" class="alert alert-success alert-block" >
                <!--     <input type="text" class="close" data-dismiss="alert"></input> -->
                <strong style="padding-top : 5px !important; display: inline-block;">{{ $message }}</strong>
             </div>
           @endif

	<div>
  @yield('content')
</div>
  </section>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
      const html = document.documentElement;
      const body = document.body;
      const menuLinks = document.querySelectorAll(".admin-menu a");
      const collapseBtn = document.querySelector(".admin-menu .collapse-btn");
      const toggleMobileMenu = document.querySelector(".toggle-mob-menu");
      const switchInput = document.querySelector(".switch input");
      const switchLabel = document.querySelector(".switch label");
      const switchLabelText = switchLabel.querySelector("span:last-child");
      const collapsedClass = "collapsed";
      const lightModeClass = "light-mode";

      collapseBtn.addEventListener("click", function () {
        body.classList.toggle(collapsedClass);
        this.getAttribute("aria-expanded") == "true"
          ? this.setAttribute("aria-expanded", "false")
          : this.setAttribute("aria-expanded", "true");
        this.getAttribute("aria-label") == "collapse menu"
          ? this.setAttribute("aria-label", "expand menu")
          : this.setAttribute("aria-label", "collapse menu");
      });

      toggleMobileMenu.addEventListener("click", function () {
        body.classList.toggle("mob-menu-opened");
        this.getAttribute("aria-expanded") == "true"
          ? this.setAttribute("aria-expanded", "false")
          : this.setAttribute("aria-expanded", "true");
        this.getAttribute("aria-label") == "open menu"
          ? this.setAttribute("aria-label", "close menu")
          : this.setAttribute("aria-label", "open menu");
      });

      for (const link of menuLinks) {
        link.addEventListener("mouseenter", function () {
          if (
            body.classList.contains(collapsedClass) &&
            window.matchMedia("(min-width: 768px)").matches
          ) {
            const tooltip = this.querySelector("span").textContent;
            this.setAttribute("title", tooltip);
          } else {
            this.removeAttribute("title");
          }
        });
      }

      if (localStorage.getItem("dark-mode") === "false") {
        html.classList.add(lightModeClass);
        switchInput.checked = false;
        switchLabelText.textContent = "Light";
      }

      switchInput.addEventListener("input", function () {
        html.classList.toggle(lightModeClass);
        if (html.classList.contains(lightModeClass)) {
          switchLabelText.textContent = "Light";
          localStorage.setItem("dark-mode", "false");
        } else {
          switchLabelText.textContent = "Dark";
          localStorage.setItem("dark-mode", "true");
        }
      });
    </script>
    <script type="text/javascript">
      document.getElementById("myBtn").onclick = function() {myFunction()};
      function myFunction() {
          document.getElementById("myDropdown").classList.toggle("show");
      }
      window.onclick = function(event) {
        
        if (!event.target.matches('.dropbtn')) {

          var dropdowns = document.getElementsByClassName("dropdown-content");
            
          for (let i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
              openDropdown.classList.remove('show');
            }
          }
        }
      }
    </script>
    <script type="text/javascript">
        document.getElementById("myBtn1").onclick = function() {myFunction1()};
      function myFunction1() {
          document.getElementById("myDropdown1").classList.toggle("show");
      }
      window.onclick = function(event) {
        
        if (!event.target.matches('.dropbtn1')) {

          var dropdowns1 = document.getElementsByClassName("dropdown-content1");
            
          for (let i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
              openDropdown.classList.remove('show');
            }
          }
        }
      }
    </script>
    <script type="text/javascript">
        var dropdown = document.getElementsByClassName("dropdown-btn");
        var i;

        for (i = 0; i < dropdown.length; i++) {
          dropdown[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
              dropdownContent.style.display = "none";
            } else {
              dropdownContent.style.display = "block";
            }
          });
        }
    </script>
    <script type="text/javascript">
      const toggleButton = document.querySelector('.toggle-menu');
      const navBar = document.querySelector('.nav-bar');
      toggleButton.addEventListener('click', () => {
        navBar.classList.toggle('toggle');
      });

                 $(function() {
                 setTimeout(function() { $("#hideDiv").fadeOut(1500); }, 3000)

             });
             
    </script>
</body>
</html>

