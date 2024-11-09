<x-layout>
    <x-slot:heading>
        Job Listing
    </x-slot:heading>
    <ul>
        @foreach ( $job as $jobs )
            <li>
                <a href="/jobs/{{$jobs['id']}}">
                    <strong>{{$jobs['title']}} :</strong> Pay {{$jobs['salary']}} Per Year
                </a>
            </li>
        @endforeach
    </ul>

</x-layout>