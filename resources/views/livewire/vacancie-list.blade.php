<div class="grid grid-cols-3 gap-4 mt-8">
    @foreach($vacancies as $vacancie)
    <div class="bg-white shaadow-lg rounded-jg px-4 py-6 text-center">

        {{-- <a href="#">
            <h2 class="text-lg text-gray-600 truncate uppercase">{{$vacancie->title}}</h2>
            <h3 class="text-md text-gray-500">{{$vacancie->excerpt}}</h3>
            <!-- <img src="
            " class="rounded-full mt-4 mx-auto h-16 w-16" alt=""> -->
        </a> --}}
        < x-card :vacancie="$vacancie" />
    </div>
    @endforeach
</div>