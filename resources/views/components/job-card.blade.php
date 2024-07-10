@props(['job'])
<x-panel class="flex flex-col text-center">
    <div class="self-start">
        {{$job->employer->name}}
    </div>
    <div class="text-center">
        <h3
            class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white group-hover:text-blue-700 transition-colors duration-200">
            <a href="{{ $job->job_url }}" target="_blank">
                {{ $job->title }}
            </a>
        </h3>
        <p class="font-medium text-gray-700 dark:text-gray-400">{{$job->job_type}} - {{$job->salary}}</p>
    </div>
    <div class="flex justify-between items-center mt-auto">
        <div>
            @foreach ($job->tags as $tag)
            <x-tag :tag="$tag" size="small" />
            @endforeach
        </div>
        <x-employer-logo :width="42" />
    </div>
</x-panel>