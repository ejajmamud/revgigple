


<div>

    <?php
    $route = "{{ url('giggers') }}";
    if ($route === "{{ url('giggers') }}") {
        // $cssFiles = [
        //     "public/css/new-css/bootstrap.min.css",
        //     "public/css/new-css/fontawesome.min.css",
        //     "public/css/new-css/owl.carousel.min.css",
        //     "public/css/new-css/magnific-popup.css",
        //     "public/css/new-css/helper.css",
        //     "public/css/new-css/style.css",
        //     "public/css/new-css/responsive.css"
        // ];

        // foreach ($cssFiles as $cssFile) {
        //     echo '<link rel="stylesheet" type="text/css" href="' . $cssFile . '">';
        // }

        // Get the main div element by its id
        // const mainDiv = document.getElementById("lets-started");

        // // Change the background color to red

        // mainDiv.classList.add("");
    } else {
        // mainDiv.style.backgroundColor = "none";

        // mainDiv.classList.add("");
    }
    ?>


    <style>

        .about-us {
            background: -o-linear-gradient(330deg, rgba(249, 240, 130, 1) 0%, rgba(239, 237, 134, 1) 16%, rgba(214, 232, 147, 1) 36%, rgba(172, 222, 168, 1) 60%, rgba(114, 209, 197, 1) 82%, rgba(42, 193, 233, 1) 100%);
            background: linear-gradient(120deg, rgba(249, 240, 130, 1) 0%, rgba(239, 237, 134, 1) 16%, rgba(214, 232, 147, 1) 36%, rgba(172, 222, 168, 1) 60%, rgba(114, 209, 197, 1) 82%, rgba(42, 193, 233, 1) 100%);
        }
    </style>


    <div id="about-us"></div>
    <div id="about-us-one"></div>
    

    <div class="giggers_heading">
        <div class="container">
            <h2>Search Giggers</h2>
            <p>Find the right candidate for your gigs today.</p>
        </div>
    </div>


    <div class="giggers_box">


        <div class="giggers_wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                
                         
                        <!--  {{ var_export($locations) }}-->
                        
                        <!--<br><br><br><br>-->
                        <!--{{ var_export($search) }}-->
                        <!--<br><br><br><br>-->
                        <!--{{ $this->ifConditionStatus }}-->
                        <!--<br><br><br><br>-->
                        
                        
                        <!--{{ settings('currency')->code }}-->
                        
                        
                        
                        
                        
                            @if($users->count() == 0)
                                <h6 class="text-center"> No data found </h6>
                            @endif
                            @foreach ($users as $user)
    
    
                                
                                <div class="giggers_main marketing_left">
                                    <div class="gigers_child">
                                        <!--<img class="gigers_circle" src="{{ asset('/public/storage/avatars').'/'.$user->profile_img }}" alt="">-->
                                        
                                        <div class="gigers_content">
                                            <h2>
                                           
                                                
                                                
                                                @if(auth()->check() && $user->fullname)
                                                
                                                    {{ $user->fullname }}
                                                    
                                                @elseif(auth()->check() && !$user->fullname)
                                                
                                                    {{ $user->first_name." " }}{{ $user->last_name }}
                                                    
                                                @elseif($user->fullname)   
                                                    
                                                    <?php echo substr($user->fullname, 0, 2) . "****"; ?>
                                                                                                       
                                                @elseif(!$user->fullname)   
                                                    
                                                    <?php echo substr($user->first_name, 0, 2) . "****"; ?>
                                                  

                                                @endif
                                                
                                            
                                            </h2>
                                            <p>{{ $user->headline }}</p>
                                            <p>{{ $this->getCountryName($user->country_id) }}</p>
                                        </div>
                                    </div>
                                    <ul>
                                        @if(!is_null($this->getSkrillName($user->id)) || !empty($this->getSkrillName($user->id)) )
                                            @foreach($this->getSkrillName($user->id) as $item)
                                                <li><a href="#">{{ $item->name }}</a></li>
                                            @endforeach
                                        @endif
                                    </ul>
                                    <div class="giggerrs_new_area">
                                        <a href="{{ url('profile').'/'.$user->username }}" class="button">VIEW DETAILS</a>
                                    </div>
                                </div>
    
                            @endforeach
                     

                    </div>


                    <div class="col-lg-4 mt-5 mt-lg-0">
                        <!--<form action="#">-->
                        <!--<form wire:submit.prevent="search">-->
                        <div class="input_group">
                            <label>SEARCH</label>
                            <input type="text" wire:model="search" id="searchInput">
                        </div>
                        
                        <label class="only_label">LOCATION (S)</label>
                            
                        @foreach ($countries as $key => $country)
                            <div class="form-group form-group_new">

                                <input type="checkbox" wire:model="locations" value="{{ $country->id }}"
                                       id="{{ $country->id }}">

                                <label for="{{ $country->id }}">{{ $country->name }}</label>
                            </div>
                        @endforeach

                        <label class="only_label">CURRENCY</label>
                        <div class="radio_box">
                            <input type="radio" wire:model='currency' id="html" name="fav_language" value="USD" checked>
                              <label for="html">USD</label>
                            <br>
                            <input type="radio" wire:model='currency' id="css" name="fav_language" value="RM">
                              <label for="css">RM</label>
                        </div>


                        <!--</form>-->
                        <!--</form>-->
                    </div>

                </div>
            </div>
        </div>


        <div class="giger_foot">
            <div class="container">

                {{ $users->links('livewire.main.pagination.custom') }}


            </div>
        </div>


    </div>


    <!--  <script>
        // Check if the current route matches the desired URL
        // if (window.location.href === "{{ url('giggers') }}") {


        //     var cssFiles = [
        //         "public/css/new-css/bootstrap.min.css",
        //         "public/css/new-css/fontawesome.min.css",
        //         "public/css/new-css/owl.carousel.min.css",
        //         "public/css/new-css/magnific-popup.css",
        //         "public/css/new-css/helper.css",
        //         "public/css/new-css/style.css",
        //         "public/css/new-css/responsive.css"
        //     ];

        //     cssFiles.forEach(function (cssFile) {
        //         var link = document.createElement("link");
        //         link.rel = "stylesheet";
        //         link.type = "text/css";
        //         link.href = cssFile;
        //         document.head.appendChild(link);
        //     });


            // Get the main div element by its id
            // const mainDiv = document.getElementById("lets-started");

            // // Change the background color to red

            // mainDiv.classList.add("");
        // } else {
        //     // mainDiv.style.backgroundColor = "none";

        //     // mainDiv.classList.add("");
        // }


    </script>-->

</div>
