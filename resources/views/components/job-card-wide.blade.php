@props(['job'])
<x-panel class="flex gap-x-6">
    <div>
        <x-employer-logo :employer="$job->employer" />
    </div>

    <div class="flex-1 flex flex-col">
        <a href="" class="self-start text-gray-700"> {{$job->employer->name}}</a>
        <h3
            class="mt-2 text-2xl font-bold tracking-tight text-gray-900 group-hover:text-blue-700 transition-colors duration-200 dark:text-white">
            <a href="{{ $job->job_url }}" target="_blank">
                {{ $job->title }}
            </a>
        </h3>
        <p class="font-bold text-gray-500 dark:text-gray-400 mt-auto">{{$job->job_type}} - {{$job->salary}}</p>
    </div>
    <div>
        @foreach ($job->tags as $tag)
        <x-tag :tag="$tag" />
        @endforeach
    </div>
</x-panel>