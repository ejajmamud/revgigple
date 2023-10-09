<script src="https://kit.fontawesome.com/57228caf9e.js" crossorigin="anonymous"></script>
<style>
    .icon-style{
        color: #25c0ec; margin-right: 26px;    
    }
    
</style>

<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    

     <div class="hello_three_main">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            
                            {{-- Authenticated user --}}
                            
                            <div class="hello_three_left">
                    <p class="h_three_p mt_45">Welcome
                        back, {{ __('messages.t_logged_in_as_username', ['username' => auth()->user()->username]) }}</p>
                    <ul class="three_list">
                       <li>
                            <a href="{{ url('business/dashshboard') }}">
                                <img src=" {{ asset('/public/storage/about-us/hello1.svg') }}" alt="not found">DASHBARD
                            </a>
                        </li>

                        @if (settings('projects')->is_enabled && auth()->user()->account_type === 'buyer')
                            {{-- Project --}}
                            <li>
                                <a href="{{ url('account/projects') }}">
                                    <i class="fa-solid fa-diagram-project icon-style"></i>
                                    {{ __('messages.t_my_projects') }}
                                </a>
                            </li>
                            <li>
                                {{-- Post a project --}}
                                @if (settings('projects')->who_can_post === 'both' || settings('projects')->who_can_post === auth()->user()->account_type)
                                    <a href="{{ url('post/project') }}" class="dropdown-item">
                                        <i class="fa-solid fa-list-check icon-style"></i>
                                        {{ __('messages.t_post_project') }}
                                    </a>
                                @endif
                                @endif
                            </li>
                            <li>
                                <a href="{{ url('profile', auth()->user()->username) }}">
                                
                                    <i class="fa-solid fa-id-card icon-style"></i>
                                    {{ __('messages.t_view_profile') }}
                                </a>
                            </li>

                        
                            {{-- Submitted offers --}}
                            @if (settings('publish')->enable_custom_offers)
                                <li>
                                    <a href="{{ url('account/offers') }}">
                                        
                                        <i class="fa-solid fa-address-card icon-style"></i>
                                        
                                        {{ __('messages.t_submitted_offers') }}
                                    </a>
                                </li>
                            @endif
                             
                            <li>
                                <a href="{{ url('account/profile') }}">
                                    <i class="fa-regular fa-address-card icon-style"></i> 
                                    {{ __('messages.t_edit_profile') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('account/settings') }}">
                                    <i class="fa-solid fa-gears icon-style"></i>
                                    {{ __('messages.t_account_settings') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('account/password') }}">
                                    <i class="fa-solid fa-lock icon-style"></i>
                                    {{ __('messages.t_update_password') }}
                                </a>
                            </li>
                            {{-- Content --}}
                            <li>
                                <a href="{{ url('account/deposit') }}">
                                    <i class="fa-solid fa-money-bill-transfer icon-style"></i>
                                    {{ __('messages.t_deposit') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('account/orders') }}">
                                    <i class="fa-solid fa-cart-shopping icon-style"></i>
                                    {{ __('messages.t_my_orders') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('inbox') }}">
                                    <i class="fa-solid fa-envelope icon-style"></i>
                                    {{ __('messages.t_messages') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('account/reviews') }}">
                                    <i class="fa-solid fa-star-half-stroke icon-style"></i>
                                    {{ __('messages.t_reviews') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('account/refunds') }}">
                                    <i class="fa-solid fa-diagram-project icon-style"></i>
                                    {{ __('messages.t_refunds') }}
                                </a>
                            </li>
                            @if (auth()->user()->status !== 'verified')
                                <li>
                                    <a href="{{ url('account/verification') }}">
                                        <i class="fa-solid fa-money-check-dollar icon-style"></i>
                                        {{ __('messages.t_verification_center') }}
                                    </a>
                                </li>
                            @endif
                            <li>
                                <a href="{{ url('business/gigple') }}"><img
                                        src=" {{ asset('/public/storage/about-us/hello4.svg') }}" alt="not found">GIGPLE</a>
                            </li>
                            <li>
                                <a href="{{ url('business/probation') }}">
                                    <i class="fa-solid fa-rectangle-ad icon-style"></i>
                                    PROBATION
                                    </a>
                            </li>
                            <li>
                                <a href="{{ url('business/long-term') }}"><img
                                        src=" {{ asset('/public/storage/about-us/hello6.svg') }}" alt="not found">LONG
                                    TERM</a>
                            <li>


                            <li style="padding-bottom: 0; margin-top:-1.5rem;">
                                <a href="{{ url('business/notifications') }}">
                                    <i class="fa-solid fa-bell icon-style"></i>
                                    NOTIFICATION</a></li>
                            <li>
  
                            <li>
                                <a href="{{ url('auth/logout') }}">                                    
                                    <img src=" {{ asset('/public/storage/about-us/hello8.svg') }}" alt="not found">
                                    LOGOUT
                                </a>
                            </li>


                    </ul>
                </div>

 
                            
                        </div>
                        <div class="col-lg-8">
                            
                            
                            <div>
                                
                                This page is under construction
                            </div>
                            <div style="display:none"  class="hello_three_right">
                                <form action="#">
                                   <div class="nullbox">
                                       <input type="text">
                                   </div>      
                                </form>
                                <h5 class="hello_three_h">Recent Invictus Blue Group Gigs</h5>
                                <div class="hello_three_wrapper">
                                    <div class="hello_three_wrapper_two">
                                        <div class="hello_three_child_left marketing_left">
                                            <h4 class="hello_three-pera">SENIOR ART DIRECTOR [AUTOMOTIVE]</h4>
                                            <p>your responsibilities are to oversee the design and execution of visual projects for advertising, ma...</p>
                                            <ul>
                                                <li><a href="#">canva</a></li>
                                                <li><a href="#">Lightroom photo editing</a></li>
                                                <li><a href="#">Image editing</a></li>
                                                <li><a href="#">Instagram post design</a></li>
                                            </ul>
                                        </div>
                                        <div class="hello_three_child_right">
                                           <h5>START:</h5>
                                           <p>01/06/2023</p>
                                           <h5>END:</h5>
                                           <p>01/06/2023</p>
                                           <span>CLOSED</span>
                                        </div>
                                    </div>
                                    <div class="hello_three_line"></div>
                                    <div class="h_three_ul">
                                        <ul>
                                            <li>INVITED<SPAN>0</SPAN></li>
                                            <li>APPLIED<SPAN>10</SPAN></li>
                                            <li>CONTACTED   <SPAN>0</SPAN></li>
                                        </ul>
                                    </div>
                                    <div class="hello_btn">
                                        <a href="#" class="button mt_25">MANAGE</a>
                                        <a href="#" class="button mt_25">SHOW MATCHES</a>
                                        <a href="#" class="button mt_25">MILESTONE FUND</a>
                                    </div>
                                </div>
                                <div class="hello_three_wrapper">
                                    <div class="hello_three_wrapper_two">
                                        <div class="hello_three_child_left marketing_left">
                                            <h4 class="hello_three-pera">SENIOR ART DIRECTOR [AUTOMOTIVE]</h4>
                                            <p>your responsibilities are to oversee the design and execution of visual projects for advertising, ma...</p>
                                            <ul>
                                                <li><a href="#">canva</a></li>
                                                <li><a href="#">Lightroom photo editing</a></li>
                                                <li><a href="#">Image editing</a></li>
                                                <li><a href="#">Instagram post design</a></li>
                                            </ul>
                                        </div>
                                        <div class="hello_three_child_right">
                                           <h5>START:</h5>
                                           <p>01/06/2023</p>
                                           <h5>END:</h5>
                                           <p>01/06/2023</p>
                                           <span>CLOSED</span>
                                        </div>
                                    </div>
                                    <div class="hello_three_line"></div>
                                    <div class="h_three_ul">
                                        <ul>
                                            <li>INVITED<SPAN>0</SPAN></li>
                                            <li>APPLIED<SPAN>10</SPAN></li>
                                            <li>CONTACTED   <SPAN>0</SPAN></li>
                                        </ul>
                                    </div>
                                    <div class="hello_btn">
                                        <a href="#" class="button mt_25">MANAGE</a>
                                        <a href="#" class="button mt_25">SHOW MATCHES</a>
                                        <a href="#" class="button mt_25">MILESTONE FUND</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="giger_foot mb_100">
                    <div  style="display:none" class="container">
                        <ul>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">6</a></li>
                            <li><a href="#">...</a></li>
                        </ul>
                    </div>
                </div>
            </div>

</div>
