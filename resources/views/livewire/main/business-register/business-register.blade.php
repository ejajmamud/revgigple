<div>
    {{-- Stop trying to control. --}}
    
    <style>
      .hello_one_area::before{
            
            background-image: url(/../public/storage/about-us/bg_d_f.png) !important;
        }
        </style>
    
      <div class="hello_one_area">
                <div class="container">
                    <div class="row justify-content-end">
                        <div class="col-lg-6">
                            <h2 class="herro_hed">Hello!</h2>
                            <p class="herro_pera">Sign up to get started</p>
                            <div class="hello_area_wrapper">
                                <form action="#">
                                        <div class="input_group input_group_hello">
                                             <label>FULL NAME</label>
                                              <input type="text">
                                        </div>
                                        <div class="input_group input_group_hello hello_finger">
                                              <input type="text" placeholder="Company Logo">
                                              <img src=" {{ asset('/public/storage/about-us/finger.svg') }}" alt="">
                                        </div>
                            
                                        <div class="input_group input_group_hello hello_finger">
                                              <input type="text" placeholder="SSM Document">
                                              <img src=" {{ asset('/public/storage/about-us/finger.svg') }}" alt="">
                                        </div>
                                        <div class="input_group input_group_hello">
                                             <label>EMAIL ADDRESS</label>
                                              <input type="email">
                                        </div>
                                      <div class="button_area">
                                           <button type="submit" class="button">GET STARTED</button>
                                           <div class="line"></div>
                                       </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>
