@include('layout.head')

<body>
  <section class="h-100 gradient-form">
    <div class="container py-5 h-100">
      <div  class="row d-flex justify-content-center align-items-center h-100"
      style="height: 100% !important">
        <div class="col-xl-10">
          <div class="card rounded-3 text-black">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="card-body p-md-5 mx-md-4">
  
                  <div class="text-center">
                    <img src="{{asset('user/images/logo.png')}}"
                      style="width: 185px;" alt="logo">
                    <h4 class="mt-1 mb-5 pb-1">We are The Apon Team</h4>
                  </div>
  
                  <form method="POST" action="{{ route('login') }}">
                   @csrf
                    <p>Please login to your account</p>
  
                  

                    
                    <div class="form-outline mb-4">
                      <label class="form-label" for="form2Example11">Email</label>
                      <input type="email" id="form2Example11" name="email" class="form-control"
                        placeholder="Enter Username" />
          
                    </div>

                    <div class="form-outline mb-4">
                      <label class="form-label" for="form2Example22">Password</label>
                      <input type="password" id="form2Example22" name="password" class="form-control" placeholder="Enter Password"/>
                    </div>
                      
                   
  
                    <div class="text-center">
                    <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Login </button>
                    <a href="{{route('register')}}"><button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="buttom">Register </button></a>
                    </div>
  
                    <div class="d-flex align-items-center justify-content-center pb-4">
                   
                   </div>
  
                  </form>
  
                </div>
              </div>
              <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                  <!-- <h4 class="mb-4">We are more than just a company</h4>
                  <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  @include('layout.footer')  