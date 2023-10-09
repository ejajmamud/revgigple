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
                            
                            
                            
                            <div class="hello_three_right">
                                
                                
                                <!--@if(count($notifications)==0)-->
                                <!--    <h6 class="text-center">No notification found!</h6>-->
                                <!--@endif-->
                                
                                <!-- @foreach ($notifications as $n)-->
                                    
                                <!--    @if ($n->params)-->
                                <!--        {!! __('messages.' . $n->text, $n->params) !!}-->
                                <!--    @else-->
                                <!--        {!! __('messages.' . $n->text) !!}-->
                                <!--    @endif-->
                                                        
                                <!--@endforeach-->
                               
                               
                               
                               <div class="space-y-2 py-6">
                                    @foreach ($notifications as $n)
                                        <div class="px-6 pb-1 pt-2" wire:key="header-notifications-{{ $n->uid }}">
                                            <div
                                                class="flex items-center bg-slate-100 px-4 py-2 rounded dark:bg-zinc-600">
                                                <div class="flex-shrink-0">
                        <span
                            class="rounded-md h-10 w-10 flex items-center justify-center dark:text-zinc-400 dark:border-zinc-500 border border-slate-300 text-slate-400">
                            <svg class="h-5 w-5" stroke="currentColor" fill="currentColor"
                                 stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em"
                                 xmlns="http://www.w3.org/2000/svg"><path
                                    d="M19 13.586V10c0-3.217-2.185-5.927-5.145-6.742C13.562 2.52 12.846 2 12 2s-1.562.52-1.855 1.258C7.185 4.074 5 6.783 5 10v3.586l-1.707 1.707A.996.996 0 0 0 3 16v2a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1v-2a.996.996 0 0 0-.293-.707L19 13.586zM19 17H5v-.586l1.707-1.707A.996.996 0 0 0 7 14v-4c0-2.757 2.243-5 5-5s5 2.243 5 5v4c0 .266.105.52.293.707L19 16.414V17zm-7 5a2.98 2.98 0 0 0 2.818-2H9.182A2.98 2.98 0 0 0 12 22z"></path></svg>
                        </span>
                                                </div>
                                                <div class="ml-3 w-0 flex-1">
                                                    <p class="dark:text-white text-[13px] font-normal text-slate-500 leading-relaxed">
                                                        @if ($n->params)
                                                            {!! __('messages.' . $n->text, $n->params) !!}
                                                        @else
                                                            {!! __('messages.' . $n->text) !!}
                                                        @endif
                                                    </p>
                                                    <div class="mt-2 flex space-x-7">

                                                        {{-- View --}}
                                                        <a href="{{ $n->action }}"
                                                           class="bg-transparent rounded-md text-primary-600 hover:text-primary-700 focus:outline-none text-xs tracking-wide dark:text-zinc-200 dark:hover:text-white">
                                                            {{ __('messages.t_view') }}
                                                        </a>

                                                        {{-- Mark as read --}}
                                                        <button wire:click="readNotification('{{ $n->uid }}')"
                                                                wire:loading.attr="disabled"
                                                                wire:target="read('{{ $n->uid }}')"
                                                                type="button"
                                                                class="bg-transparent rounded-md text-gray-700 hover:text-gray-500 focus:outline-none text-xs tracking-wide dark:text-zinc-200 dark:hover:text-white">
                                                            {{-- Loading indicator --}}
                                                            <div wire:loading
                                                                 wire:target="readNotification('{{ $n->uid }}')">
                                                                <svg role="status"
                                                                     class="inline w-4 h-4 text-gray-700 animate-spin"
                                                                     viewBox="0 0 100 101" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                                                                        fill="#E5E7EB"/>
                                                                    <path
                                                                        d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                                                                        fill="currentColor"/>
                                                                </svg>
                                                            </div>

                                                            {{-- Button text --}}
                                                            <div wire:loading.remove
                                                                 wire:target="readNotification('{{ $n->uid }}')">
                                                                {{ __('messages.t_mark_as_read') }}
                                                            </div>
                                                        </button>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                               
                                
                                
                            </div>
                        </div>
                    </div>
                </div> 
            </div>

</div>
