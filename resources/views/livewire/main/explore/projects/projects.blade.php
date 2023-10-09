<style>
.active>.page-link, .page-link.active {
    z-index: 3;
    color: var(--bs-pagination-active-color);
    background-color: #26c0ec;
    border-color: #26c0ec;;
}
</style>

<div class="gig_area pathner_wrapper">
    <div class="container">
        <h5 class="hig_top"><span>GIG TITLE, KEYWORD, COMPANY</span></h5>

        <div class="hero_content_two hero_content">
            <form action="{{ url('explore/projects') }}" accept="GET">
                <button type="submit"><i class="far fa-search"></i></button>
                <input id="gsearch" type="search" name="q" wire:model.defer="q">
            </form>
        </div>

        {{-- Latest projects --}}
        @if ($projects && $projects->count())
 
            
            
            <?php 
            
            //echo json_encode( $projects[0] )
            
            ?>
            
            

            @foreach ($projects as $project)

                <div class="gig_wrapper">

                    <div>
                        <img class="trangle" src="{{ placeholder_img() }}" data-src="{{ src($project->thumbnail) }}" alt="">
                    </div>
                    <div>
                        <div class="marketing_wrapper">
                            <h2>{{ $project->title }}</h2>
                            <h5>
                                
                                @foreach($this->getCategoryname($project->id) as $catName)
                                             {{ $catName->name }}
                                @endforeach
                            
                                </h5>
                            <div class="marketing_main">
                                <div class="marketing_left">
                                    <p>{{ add_3_dots($project->description, 890) }}</p>
                                    <ul>
                                        @foreach($this->getCategorySkill($project->id) as $skill)
                                            <li><a>{{ $skill->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="marketing_right">
                                    <p>RM {{  $project->budget_min }}/RM {{  $project->budget_max }}</p>
                                    <div>
                                        <a href="{{ url('project/' . $project->pid . '/' . $project->slug) }}" class="button market_buton">APPLY</a>
                                        <a href="{{ url('project/' . $project->pid . '/' . $project->slug) }}" class="button button_new">VIEW DETAILS</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            @endforeach

        @endif


        <!--<div class="button_area button_area_mar">-->
        <!--    <a href="#" class="button market_btn">VIEW MORE</a>-->
        <!--    <div class="line"></div>-->
        <!--</div>-->
        <br> <br> <br>
        {{ $projects->links() }} 

    </div>
</div>























<div class="w-full" style="display: none">

   
 
    {{-- Latest projects --}}
    @if ($projects && $projects->count())
        <div class="w-full mt-8 lg:mt-20">
 

            {{-- Section body --}}
            <div class="grid grid-cols-1 gap-4 lg:gap-8">
                @foreach ($projects as $project)

                    @livewire('main.cards.project', [ 'id' => $project->uid ], key('project-card-id-' . $project->uid))

                @endforeach
            </div>

            {{-- Section footer --}}
            @if ($projects->hasPages())
                <hr class="my-10">
                <div class="px-4 py-5 sm:px-6 flex justify-center">
                    {!! $projects->links('pagination::tailwind') !!}
                </div>
            @endif

        </div>
    @endif

</div>

@push('scripts')
    <script defer type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Init featured categories slick
            $('#projects-categories-slick').slick({
                dots: false,
                autoplay: true,
                infinite: true,
                speed: 300,
                slidesToShow: 6,
                slidesToScroll: 1,
                arrows: false,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 800,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
            $('#featured-categories-slick').removeClass('hidden');
        });
    </script>
@endpush

@push('styles')
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" type="text/css"/>
@endpush
