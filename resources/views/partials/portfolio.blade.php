<section id="portfolio">

    <div class="container">
        <h2 class="center"><i class="fa fa-folder-open-o"></i>Portfolio</h1>
         <h4 class="center">A sample of my professional work</h3>
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
                    @if( ! empty($project->notes) )
                        <p class="small">{{ $project->notes }}</p>
                    @endif
                    <a href="{{ $project->url }}" target="_new" class="btn">View Project</a>
                </div>
            @endforeach
        @endif
    </div>

</section>
