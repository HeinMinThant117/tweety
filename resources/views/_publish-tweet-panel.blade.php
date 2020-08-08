<div class="border border-blue-400 rounded-l px-8 py-6 mb-8">
    <form action="/tweets" method="POST">
        @csrf
        <textarea
            name="body"
            class="w-full"
            placeholder="Do it !"
            autofocus
            required
        >

        </textarea>

        <hr class="my-4">

        <footer class="flex justify-between items-center">
            <img
                src="{{auth()->user()->avatar}}"
                alt=""
                class="rounded-full mr-2"
                width="50"
                height="50"
            >

            <button type="submit" class="bg-blue-500 hover:bg-blue-600  rounded-lg shadow px-10 text-sm text-white h-10">Tweet a roo</button>
        </footer>
    </form>

    @error('body')
        <p class="text-red-500 pt-4 text-sm">{{ $message }}</p>
    @enderror
</div>
