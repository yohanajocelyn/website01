@if($project)
<x-layout>
    <x-slot:layoutTitle>{{ $pageTitle }}</x-slot:layoutTitle>
    <div class="mt-4 p-5 bg-blue-300 text-blue-900 rounded-md mx-4">
        <h1>{{ $project['title'] }}</h1>
        <p>Course: {{ $project['course'] }}</p>
        <p>Code: {{ $project['code'] }}</p>
    </div>
</x-layout>
@else
    <p>Project NOT found</p>
@endif
