<?php
/**
 * Root category for this navbar item
 * @var App\Category $root
 */
?>
<div class="navbar-item has-dropdown is-hoverable navbar-category-dropwdown">
    <a class="navbar-link">
        @if($root->icon != '')
            <span class="icon">
            <i class="{{ $root->icon }}" aria-hidden="true"></i>
        </span>
        @endif
        {{ $root->name }}
    </a>
    <div class="navbar-dropdown">
        @foreach($root->projects as $project)
            <a class="navbar-item">
                {{ $project->name }}
            </a>
            @if($loop->last)
                <hr class="navbar-divider"/>
            @endif
        @endforeach
        @foreach($root->children->where('published', true) as $childrenCategory)
            <a class="navbar-item">
                @if($childrenCategory->icon != '')
                    <span class="icon navbar-icon">
                        <i class="{{ $childrenCategory->icon }}" aria-hidden="true"></i>
                    </span>
                @endif
                {{ $childrenCategory->name }}
            </a>
        @endforeach
    </div>
</div>
