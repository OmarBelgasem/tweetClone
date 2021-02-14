<x-app>
<header class="mb-6 relative">
    <div class="relative">
        <img
            src="https://picsum.photos/1500/800?grayscale"
            alt=""
            class="rounded-bl-full mb-2"
        >

        <img
            src="{{ $user->avatar }}"
            alt=""
            class="rounded-full mr-2 absolute bottom-0"
            width= "150"
        >
    </div>

    <div class="flex justify-between items-center mb-6">

       <div style="max-width:270px;">
          <h2 class="font-bold text-2xl mb-0"> {{ $user->name }} </h2>
          <p class="text-sm"> {{ $user->created_at->diffForHumans() }} </p>
       </div>

       <div class="flex">
       @can('edit', $user)
            <a href="{{ $user->path('edit') }}" class="bg-red-500 rounded-lg shadow py-2 px-4 mr-2 text-white"> Edit Profile </a>
       @endcan
          <x-follow-button :user=$user></x-follow-button>
       </div>
    </div>

    <p class="text-sm"> hey there we are going to do something to all of us! </p>

</header>

@include('_timeline', [
'tweets' => $tweets
])
</x-app>