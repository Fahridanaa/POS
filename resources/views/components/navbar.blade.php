<?php
$categories = [
    ['name' => 'Food Beverage', 'link' => '/category/food-beverage'],
    ['name' => 'Beauty Health', 'link' => '/category/beauty-health'],
    ['name' => 'Home Care', 'link' => '/category/home-care'],
    ['name' => 'Baby Kid', 'link' => '/category/baby-kid']
];
?>

<style>
    .hover-effect::after {
        content: "";
        position: absolute;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 2px;
        transform-origin: left center;
        transform: scaleX(0);
        background-color: currentColor;
        transition: transform 0.3s ease-out;
        will-change: transform;
    }
    .hover-effect:hover::after {
        transform: scaleX(.8);
    }
</style>
<div class="flex border-b-2 justify-between items-center px-4 py-2 sticky">
    <h1 class="text-xl font-bold"><a href={{url('/')}}>HOME</a></h1>
    <ul id="categories" class="flex flex-auto justify-evenly">
        @foreach($categories as $category)
            <li class="font-medium text-2xl relative overflow-hidden hover-effect"><a href="{{ url($category['link']) }}">{{ $category['name'] }}</a></li>
        @endforeach
    </ul>
    <div class="flex ml-auto">
        <button class="border-r-2 pr-2">
            <a href="{{ url('/transaction') }}"  class="btn btn-primary">Penjualan</a>
        </button>
        <button class="ml-2">
            <a href="{{ url('/user/1/name/Fahri') }}"  class="btn btn-primary">Profile</a>
        </button>
    </div>
</div>
