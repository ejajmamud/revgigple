<script src="https://kit.fontawesome.com/57228caf9e.js" crossorigin="anonymous"></script>
<style>
    .icon-style{
        color: #25c0ec; margin-right: 26px;    
    }
    
</style>
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

                <!-- Button trigger modal -->

 
                <div class="hello_three_right">
                    
                    @if(count($projects) != 0)
                        <form action="#">
                            <div class="nullbox">
                                <input type="text" wire.modal="searchItem">
                            </div>
                        </form>
                        <h5 class="hello_three_h">Recent Invictus Blue Group Gigs</h5>
                    
                    @else
                        <h6 class="hello_three_h text-center">Not found!</h6>
                    @endif
                    
                    
                    @foreach($projects as $project)
        
                        <div class="hello_three_wrapper">
                        <div class="hello_three_wrapper_two">
                            <div class="hello_three_child_left marketing_left">
                                <h4 class="hello_three-pera">{{ $project->title }}</h4>
                                <p>{{ substr($project->description, 0,  30) }}...</p>
                                <ul>
                                    
                                    @foreach($this->getCategorySkill($project->id) as $skill)
                                    
                                    <li><a href="#">{{ $skill->name }}</a></li>
                                    
                                    @endforeach
                                    
                                </ul>
                            </div> 
                        </div>
                    </div>
                    
                    @endforeach
                    
                    
                </div>
            </div>
        </div>
    </div>
    <div class="giger_foot mb_100">
        
         {{ $projects->links('livewire.main.pagination.custom') }}
    </div>
</div>


<script>
//     document.addEventListener("DOMContentLoaded", function () {
//         const notificationsButton = document.getElementById("toggleNotifications");
//         const notificationsMenu = document.getElementById("notifications_menu");

//         notificationsButton.addEventListener("click", function () {
//             // Toggle the display style of the notifications menu
//             if (notificationsMenu.style.display === "none") {
//                 notificationsMenu.style.display = "block";
//             } else {
//                 notificationsMenu.style.display = "none";
//             }
//         });
//     });
// </script>




<!-- Smaller Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <!-- Change modal-lg to modal-md -->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal"
                        aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{-- Notifications menu --}}
                @auth
                    <div class="fixed inset-0 flex z-40">
                        <div style="width:33%" x-show="notifications_menu"
                             style="display: block" x-ref="notifications_menu">
                            <!-- Set the width to 33% for 1/3 of the screen -->

                            {{-- Backdrop --}}
                            <div x-show="notifications_menu" style="display: none"
                                 x-transition:enter="ease-in-out duration-500"
                                 x-transition:enter-start="opacity-0"
                                 x-transition:enter-end="opacity-100"
                                 x-transition:leave="ease-in-out duration-500"
                                 x-transition:leave-start="opacity-100"
                                 x-transition:leave-end="opacity-0"
                                 class="absolute inset-0 bg-gray-500 bg-opacity-75 transition-opacity"
                                 @click="notifications_menu = false"
                                 aria-hidden="true">
                            </div>

                            {{-- Menu --}}
                            <div
                                x-show="notifications_menu"
                                style="display: block"
                                x-transition:enter="transition ease-in-out duration-300 transform"
                                x-transition:enter-start="translate-x-full"
                                x-transition:enter-end="translate-x-0"
                                x-transition:leave="transition ease-in-out duration-300 transform"
                                x-transition:leave-start="translate-x-0"
                                x-transition:leave-end="translate-x-full"
                                class="fixed right-0 max-w-screen-xl w-full bg-white dark:bg-zinc-700 shadow-xl flex flex-col h-full">

                                {{-- Close button --}}
                                <div
                                    x-show="notifications_menu"
                                    x-transition:enter="ease-in-out duration-300"
                                    x-transition:enter-start="opacity-0"
                                    x-transition:enter-end="opacity-100"
                                    x-transition:leave="ease-in-out duration-300"
                                    x-transition:leave-start="opacity-100"
                                    x-transition:leave-end="opacity-0"
                                    class="top-0 right-0 pt-2 block sm:hidden">
                                    <button type="button"
                                            class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                                            @click="notifications_menu = false">
                                        <span class="sr-only">Close sidebar</span>
                                        <svg class="h-6 w-6 text-white"
                                             x-description="Heroicon name: outline/x"
                                             xmlns="http://www.w3.org/2000/svg"
                                             fill="none" viewBox="0 0 24 24"
                                             stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round"
                                                  stroke-linejoin="round"
                                                  stroke-width="2"
                                                  d="M6 18L18 6M6 6l12 12"></path>
                                        </svg>
                                    </button>
                                </div>

                                {{-- Section --}}
                                <div
                                    class="pt-8 px-6 lg:px-6 w-full sm:flex sm:justify-between sm:items-center">
                                    <div class="flex justify-center sm:justify-left">
                                        <h3 class="inline-flex items-center font-semibold">
                                                                            <span
                                                                                class="text-base dark:text-gray-100">@lang('messages.t_notifications')</span>
                                        </h3>
                                    </div>
                                </div>

                                {{-- List of notifications --}}
                                <div
                                    class="w-full overflow-auto h-full scrollbar-thin scrollbar-thumb-gray-300 scrollbar-track-gray-100 dark:scrollbar-thumb-zinc-900 dark:scrollbar-track-zinc-600">
                                    <div class="space-y-2 py-6">
                                        @foreach ($notifications as $n)
                                            <div class="px-6 pb-1 pt-2"
                                                 wire:key="header-notifications-{{ $n->uid }}">
                                                <div class="card mb-3">
                                                    <div class="card-body">
                                                        <div
                                                            class="d-flex align-items-center bg-slate-100 px-4 py-2 rounded dark:bg-zinc-600">
                                                            <div class="flex-shrink-0">
                                        <span
                                            class="rounded-md h-10 w-10 flex items-center justify-center dark:text-zinc-400 dark:border-zinc-500 border border-slate-300 text-slate-400">
                                            <svg class="h-5 w-5" stroke="currentColor" fill="currentColor"
                                                 stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em"
                                                 xmlns="http://www.w3.org/2000/svg"><path
                                                    d="M19 13.586V10c0-3.217-2.185-5.927-5.145-6.742C13.562 2.52 12.846 2 12 2s-1.562.52-1.855 1.258C7.185 4.074 5 6.783 5 10v3.586l-1.707 1.707A.996.996 0 0 0 3 16v2a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1v-2a.996.996 0 0 0-.293-.707L19 13.586zM19 17H5v-.586l1.707-1.707A.996.996 0 0 0 7 14v-4c0-2.757 2.243-5 5-5s5 2.243 5 5v4c0 .266.105.52.293.707L19 16.414V17zm-7 5a2.98 2.98 0 0 0 2.818-2H9.182A2.98 2.98 0 0 0 12 22z"></path></svg>
                                        </span>
                                                            </div>
                                                            <div
                                                                class="ml-3 w-0 flex-1">
                                                                <p class="dark:text-white text-[13px] font-normal text-slate-500 leading-relaxed">
                                                                    @if ($n->params)
                                                                        {!! __('messages.' . $n->text, $n->params) !!}
                                                                    @else
                                                                        {!! __('messages.' . $n->text) !!}
                                                                    @endif
                                                                </p>
                                                                <div
                                                                    class="mt-2 flex space-x-7">

                                                                    {{-- View --}}
                                                                    <a href="{{ $n->action }}"
                                                                       class="btn btn-transparent btn-sm">
                                                                        {{ __('messages.t_view') }}
                                                                    </a>

                                                                    {{-- Mark as read --}}
                                                                    <button
                                                                        wire:click="readNotification('{{ $n->uid }}')"
                                                                        wire:loading.attr="disabled"
                                                                        wire:target="read('{{ $n->uid }}')"
                                                                        type="button"
                                                                        class="btn btn-transparent btn-sm">
                                                                        {{-- Loading indicator --}}
                                                                        <div
                                                                            wire:loading
                                                                            wire:target="readNotification('{{ $n->uid }}')">
                                                    <span class="spinner-border spinner-border-sm" role="status"
                                                          aria-hidden="true"></span>
                                                                        </div>

                                                                        {{-- Button text --}}
                                                                        <div
                                                                            wire:loading.remove
                                                                            wire:target="readNotification('{{ $n->uid }}')">
                                                                            {{ __('messages.t_mark_as_read') }}
                                                                        </div>
                                                                    </button>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                            </div>

                            <button type="button" class="btn btn-secondary"
                                    data-dismiss="modal">X
                            </button>
                        </div>
                    </div>
                @endauth
                {{-- End Notifications menu --}}
            </div>

        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
