<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{asset("img/fav.png")}}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.css"
          integrity="sha512-8D+M+7Y6jVsEa7RD6Kv/Z7EImSpNpQllgaEIQAtqHcI0H6F4iZknRj0Nx1DCdB+TwBaS+702BGWYC0Ze2hpExQ=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    @vite(["resources/css/app.css","resources/js/app.js"])
    <title>Dashboard</title>
</head>
<body class="grid grid-cols-[minmax(250px,300px)_1fr] grid-rows-[auto_1fr] gap-3 h-screen bg-gray-100">
<nav class="col-span-2 w-full px-5 py-3 bg-white shadow-md flex justify-between items-center">
    <a href="{{route("home")}}" class="block font-bold text-2xl font-italic ">E KART</a>
    <ul class="flex items-center justify-end gap-x-6">
        <li class="cursor-pointer">
            {{Auth::user()->name}}
        </li>
        <li class="w-10 h-10 bg-blue-600 rounded-full cursor-pointer overflow-hidden">
            <img src="{{asset("img/blog/c2.jpg")}}" alt="User Image" class="w-full h-full object-cover">
        </li>
        <li class="bg-red-400 px-3 py-1 rounded-md font-bold text-white">
            <form action="{{route("logout")}}" method="POST">
                @csrf
                <button href="/" type="submit">Logout</button>
            </form>
        </li>
    </ul>
</nav>

<x-dashboard-aside/>
<main class="h-full overflow-scroll">
    {{$slot}}
</main>
<script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js"
        integrity="sha512-zlWWyZq71UMApAjih4WkaRpikgY9Bz1oXIW5G0fED4vk14JjGlQ1UmkGM392jEULP8jbNMiwLWdM8Z87Hu88Fw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    const type = "{{ Session::get('message')}}";
    console.log(type);

    if(type){
        $.toast({
            heading: 'Information',
            text: type,
            showHideTransition: 'slide',
            icon: 'success'
        })
    }

</script>
</body>
</html>
