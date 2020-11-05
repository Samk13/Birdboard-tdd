<div>
    @foreach ($projects as $project)
    <ul>
        <li>{{ $project->title }}</li>
    </ul>

    @endforeach
</div>
