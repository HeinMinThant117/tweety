<x-app>

    <header class="mb-6 relative">

        <div class="relative">
            <img src="/images/doro_banner.jpg" alt="">

            <img
                src="{{$user->avatar}}"
                alt=""
                class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
                style="left: 50%"
                width="150"
            >
        </div>


        <div class="flex justify-between items-center mb-6">
            <div style="max-width: 270px">
                <h2 class="font-bold text-2xl mb-2">{{$user->name}}</h2>
                <p class="text-sm mb-4">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div class="flex">
                @can ('edit', $user)
                    <a href="{{ $user->path('edit') }}" class="rounded-full border border-gray-300 py-2 px-4 text-xs mr-2">Edit Profile</a>
                @endcan

              <x-follow-button :user="$user"></x-follow-button>

            </div>
        </div>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At ducimus, earum, ex expedita, ipsam iure magni molestiae mollitia nam nemo officia quaerat sunt ullam? Aliquam beatae cum ipsam itaque libero.</p>





    </header>


    @include ('_timeline', [
'tweets' => $tweets
])

</x-app>
