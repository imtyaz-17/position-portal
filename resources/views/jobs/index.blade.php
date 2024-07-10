<x-layout>
    <div class="space-y-8">
        <section class="text-center">
            <h1 class="font-bold text-4xl text-blue-300 m-3">Let's Find Your Next Job</h1>
            <form action="">
                <input type="text" placeholder="Sogtware Engineer ..." class="rounded-xl bg-white p-3 w-full max-w-xl">
            </form>
        </section>
        <section class="pt-10">
            <x-section-heading>
                Featured Jobs
            </x-section-heading>
            <div class="grid lg:grid-cols-3 gap-8 mt-4">
                @foreach ($featuredJobs as $job)
                <x-job-card :job="$job" />
                @endforeach
            </div>
        </section>
        <section>
            <x-section-heading>
                Tags
            </x-section-heading>
            <div class="mt-4 space-x-1">
                @foreach ($tags as $tag)
                <x-tag :tag="$tag" />
                @endforeach

            </div>
        </section>
        <section>
            <x-section-heading>
                Recent Jobs
            </x-section-heading>
            <div class="mt-4 space-y-5">
                @foreach ($jobs as $job)
                <x-job-card-wide :job="$job" />
                @endforeach
            </div>
        </section>
    </div>
</x-layout>