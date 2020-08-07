<h3 class="font-bold text-xl mb-4">Following</h3>

<ul>
    @foreach (auth()->user()->follows as $user)
        <li class="mb-3">

            <a class="flex items-center text-sm" href="{{ route('profile', $user) }}">
                <img
                    src="{{$user->avatar}}"
                    alt=""
                    class="rounded-full mr-2"
                >

                {{ $user->name }}


            </a>

        </li>
    @endforeach
</ul>
