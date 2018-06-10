<?php
/**
 * Root category for this navbar item
 * @var App\Category $root
 */
?>
<div class="navbar-item has-dropdown is-hoverable">
    <a class="navbar-link">
        @if($root->icon != '')
            <span class="icon">
            <i class="{{ $root->icon }}" aria-hidden="true"></i>
        </span>
        @endif
        <span>{{ $root->name }}</span>
    </a>

    <div class="navbar-dropdown">
        <div class="container is-fluid">
            <div class="columns">
                @foreach($root->children->where('published', true) as $child)
                    <div class="column">
                        <h1 class="title is-6 is-mega-menu-title">
                            @if($child->icon != '')
                                <span class="icon navbar-icon"><i class="{{ $child->icon }}"
                                                                  aria-hidden="true"></i></span>
                            @endif
                            <span>{{ $child->name }}</span>
                        </h1>
                        @foreach($child->children->where('published', true) as $childChild)
                            <a class="navbar-item">
                                @if($childChild->icon != '')
                                    <span class="icon navbar-icon"><i class="{{ $childChild->icon }}"
                                                                      aria-hidden="true"></i></span>
                                @endif
                                <span>{{ $childChild->name }}</span>
                            </a>
                            @if($loop->last)
                                <hr class="navbar-divider"/>
                            @endif
                        @endforeach
                        @foreach($child->projects as $project)
                            <a class="navbar-item">
                                {{ $project->name }}
                            </a>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
