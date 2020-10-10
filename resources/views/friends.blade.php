<h3 class="font-bold text-xl mb-4">Friends</h3>
<ul>
@foreach(auth()->user()->follows as $friend)
<li class="mb-4">
        <a href="{{ route('profile',$friend->name) }}" class="flex items-center text-sm">
            <img src="https://avatars.dicebear.com/api/avataaars/example.svg" 
            alt="" class="rounded-full mr-2 friends"> {{ $friend->name }}
       </a>
    </li>
@endforeach
</ul>