<x-layout>
    <x-slot:heading>
        Job Listing
    </x-slot:heading>
    @foreach ( $job as $jobs )
        <li><strong>{{$jobs['title']}} :</strong> Pay {{$jobs['salary']}} Per Year</li>
    @endforeach
</x-layout>