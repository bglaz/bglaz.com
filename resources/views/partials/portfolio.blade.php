<section id="portfolio">

    <div class="container">
        <h2 class="center"><i class="fa fa-folder-open-o"></i>Portfolio</h1>
    </div>

    <div class="container project-container">
        @if( ! empty($projects)) 
            @foreach($projects as $project)
                <div class="project">
                     <a href="{{ $project->url }}" target="_new">
                        <div class="project-thumb">
                            <img src="/images/project-screenshots/{{ $project->img_file }}" alt="{{ $project->title }}" />
                            <div class="project-thumb-hover">
                                 <span href="{{ $project->url }}" target="_new" class="btn">View Project</span>
                            </div>
                        </div>
                    </a>
                    <h3 class="title">{{ $project->title }}</h3>
                    <h4 class="description">{{ $project->description }}</h4>
                    <p><b>What I Did: </b>{{ $project->technologies }}</p>
                    <a href="{{ $project->url }}" target="_new" class="btn">View Project</a>
                </div>
                {{-- var_dump($project) --}}
            @endforeach
        @endif
    </div>

</section>
