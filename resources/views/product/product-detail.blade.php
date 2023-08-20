@pushonce("styles")
    <style>
        .content{
            display: flex;
            flex-direction: column;
            padding: 30px 30px;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .title{
            margin-top: 20px;
            font-size: 30px;
            text-transform: uppercase;
        }

        .desc{
            font-size: 18px;
        }
    </style>
@endpushonce

<x-app-layout>
    <x-about-banner title="{{$product->name}}"/>
    <div class="content">
        <div class="">
            <img src="{{asset($product->imageUrl)}}" alt="Product Image">
        </div>
        <h1 class="title">{{$product->name}}</h1>
        <p class="desc">{{$product->description}}</p>
    </div>
</x-app-layout>
