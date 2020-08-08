@if (auth()->user()->isNot($user))
    <form action="{{ route('follow', $user->username) }}" method="POST">
        @csrf
        <button type="submit" href="" class="bg-blue-500 rounded-full shadow py-2 px-2 text-white">
            {{ auth()->user()->following($user) ? 'Unfollow Me' : 'Follow Me' }}
        </button>
    </form>
@endif

