<x-layout>
    <x-slot:heading>
        Job Listing
    </x-slot:heading>
    <div class="space-y-4">
        @foreach ( $job as $jobs )

        <a href="/jobs/{{$jobs['id']}}" class="block px-4 py-6 border border-gray-200 rounded-lg">
            <div class="text-blue-500 font-bold">{{$jobs->employer->name}}</div>
            <div>
            <strong>{{$jobs['title']}} :</strong> Pay {{$jobs['salary']}} Per Year
            </div>
        </a>

        @endforeach
    </div>

</x-layout>