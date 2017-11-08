<section id="code-lab">

    <div class="container">
        <h2 class="center"><i class="fa fa-code"></i>Code Lab</h1>
        <h4 class="center">A collection of code samples and experiments</h3>
    </div>

    <div class="container project-container">
        @if(! empty($codepen_projects) )
            @foreach($codepen_projects as $project)
                <div class="project">
                    <div class="embed-container">
                            <p data-theme-id="0" data-slug-hash="{{ $project->codepen_id }}" data-default-tab="result" data-user="bglaz" data-embed-version="2" data-pen-title="{{ $project->title }}" data-preview="true" class="codepen">See the Pen <a href="https://codepen.io/bglaz/pen/{{ $project->codepen_id }}/">{{ $project->title }}</a> by Brian (<a href="https://codepen.io/bglaz">@bglaz</a>) on <a href="https://codepen.io">CodePen</a>.</p>
                    </div>
                    <h3 class="title">{{ $project->title }}</h3>
                    @if( ! empty($project->sub_title ))
                        <h4 class="description">{{ $project->sub_title }}</h4>
                    @endif
                    @if( ! empty($project->description ))
                        {!! $project->description !!}
                    @endif
                    @if( ! empty($project->notes) )
                        <p class="small">{{ $project->notes }}</p>
                    @endif
                     <a href="http://codepen.io/bglaz/pen/{{ $project->codepen_id }}" target="_new" class="btn">View On Codepen</a>
                </div>
            @endforeach
        @endif
    </div>

</section>
<script async src="https://production-assets.codepen.io/assets/embed/ei.js"></script>