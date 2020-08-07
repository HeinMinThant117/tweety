<div class="flex p-4 border-b border-gray-300">
    <div class="mr-2 flex-shrink-0">
        <a href="{{ route('profile', $tweet->user) }}">
            <img
                src="{{$tweet->user->avatar}}"
                alt=""
                class="rounded-full mr-2"
            >
        </a>
    </div>
    <div>
        <h5 class="font-bold mb-4 pl" >
            <a href="{{route('profile', $tweet->user)}}">
                {{ $tweet->user->name }}
            </a>
        </h5>

        <div class="text-sm">
            {{$tweet->body}}
        </div>
    </div>
</div>
