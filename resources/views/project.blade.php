@extends('layout.main')

@section('title')
    {{ucfirst($project->name)}}
@endsection
@section('subtitle')
    {{ucfirst($project->category->name)}}
@endsection
@section('hero-footer')
    <nav class="tabs is-centered is-boxed">
        <ul>
            <li class="is-active">
                <a>
                    <span>About</span>
                </a>
            </li>
            <li>
                <a>
                    <span class="icon"><i class="fab fa-readme" aria-hidden="true"></i></span>
                    <span>Read me</span>
                </a>
            </li>
            @if($project->git_link != '')
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-code-branch"></i></span>
                        <span>Git repository</span>
                    </a>
                </li>
            @endif
            @if($project->report_file != '')
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-book"></i></span>
                        <span>Report</span>
                    </a>
                </li>
            @endif
            @if($project->download_link != '')
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-book"></i></span>
                        <span>Downloads</span>
                    </a>
                </li>
            @endif
        </ul>
    </nav>

@endsection
@section('content')
    <div class="section">
        <div class="container">
            <div id="project_description" class="content">
                {{ $project->description }}
            </div>
            <div id="project_readme_content" class="is-hidden content">
                <h1>{{ $project->readmeContent or "No Readme file for this project."}}</h1>
            </div>
            <div id="project_git_tab" class="is-hidden content">
                <h1>Tab in developpement</h1>
            </div>
            <div id="project_download_tab" class="is-hidden content">
                <h1>Tab in developpement</h1>
            </div>
        </div>
    </div>
@endsection
