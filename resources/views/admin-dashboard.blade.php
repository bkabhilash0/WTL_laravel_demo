@php
    use \Illuminate\Support\Facades\Auth;
    $user = Auth::user();
@endphp

<x-dashboard-layout>
    <div class="w-full h-full bg-white py-6 px-6 flex flex-col items-center gap-y-5">
        @if($errors->any())
            <div class="flex flex-col gap-3">
                @foreach($errors->all() as $error)
                    <p class="w-full py-3 px-5 bg-red-400 rounded-md text-white">{{$error}}</p>
                @endforeach
            </div>
        @endif
        <form action="{{route("profile.update")}}"
              class="bg-gray-200 p-5 flex flex-col gap-y-5 items-center w-full max-w-screen-sm" method="POST">
            @method('PATCH')
            @csrf
            <div class="w-32 h-32 rounded-full bg-blue-500 overflow-hidden">
                <img src="{{asset("img/blog/c2.jpg")}}" alt="User DP" class="w-full h-full object-cover">
            </div>
            <div class="grid grid-cols-[100px_1fr] items-center gap-x-5 w-full">
                <label for="FullName" class="w-full">Full Name</label>
                <input type="text" id="FullName" value="{{$user->name}}" class="outline-0 border-0 rounded-sm "
                       name="name">
            </div>
            <div class="grid grid-cols-[100px_1fr] items-center gap-x-5 w-full">
                <label for="email" class="w-full">Email</label>
                <input type="text" id="email" value="{{$user->email}}" class="outline-0 border-0 rounded-sm "
                       name="email">
            </div>
            <button class="bg-indigo-600 px-10 py-3 text-white rounded-full hover:bg-indigo-500 transition-all">Save
            </button>
        </form>
    </div>
</x-dashboard-layout>
