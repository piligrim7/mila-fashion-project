@extends('layouts/app')

@section('title'){{ __('Main page') }}@endsection

@section('main_content')
<img class="float-right m-3 md:m-4" src="{{ Vite::asset ('resources/images/main.png') }}" alt="Sketch picture"/>
<div class="p-4 md:p-5">
	<h1 class="text-5xl sm:text-6xl font-bold tracking-tight text-zinc-800 dark:text-zinc-100"> Main. Title of a longer featured blog post</h1>
	<p class="my-8 text-xl text-zinc-700 dark:text-zinc-300">Multiple lines of text that form the lede, informing new readers quickly and efficiently
		about what’s most interesting in this post’s contents.</p>
</div>

{{-- <div class="row mb-2"> --}}

{{-- https://flowbite.com/docs/components/card/ --}}
<a href="#" class="flex flex-col items-center m-5 bg-white rounded-lg border shadow-md md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
    <img class="object-cover w-full h-auto rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="{{ Vite::asset ('resources/images/about_me.png') }}" alt="">
    <div class="flex flex-col justify-between p-4 leading-normal">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
        <p class="text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
    </div>
</a>
<a href="#" class="flex flex-col items-center m-5 bg-white rounded-lg border shadow-md md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
    <img class="object-cover w-full h-96 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="{{ Vite::asset ('resources/images/main.png') }}" alt="">
    <div class="flex flex-col justify-between p-4 leading-normal">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
        <p class="text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
    </div>
</a>
<a href="#" class="flex flex-col items-center m-5 bg-white rounded-lg border shadow-md md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
    <img class="object-cover w-full h-96 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="{{ Vite::asset ('resources/images/about_me.png') }}" alt="">
    <div class="flex flex-col justify-between p-4 leading-normal">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
        <p class="text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
    </div>
</a>
<a href="#" class="flex flex-col items-center m-5 bg-white rounded-lg border shadow-md md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
    <img class="object-cover w-full h-96 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="{{ Vite::asset ('resources/images/main.png') }}" alt="">
    <div class="flex flex-col justify-between p-4 leading-normal">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
        <p class="text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order. Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order. Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
    </div>
</a>
	{{-- <div class="col-md-6">
		<div
			class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
			<div class="col p-4 d-flex flex-column position-static">
				<strong class="d-inline-block mb-2 text-primary">World</strong>
				<h3 class="mb-0">Featured post</h3>
				<div class="mb-1 text-muted">Nov 12</div>
				<p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to
					additional content.</p>
				<a href="#" class="stretched-link">Continue reading</a>
			</div>
			<div class="col-auto d-none d-lg-block">
				<svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg"
					preserveAspectRatio="xMidYMid slice" focusable="false" role="img"
					aria-label="Placeholder: Thumbnail"><title>Placeholder</title>
					<rect width="100%" height="100%" fill="#55595c"></rect>
					<text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
				</svg>
			</div>
		</div>
	</div> --}}
{{-- </div> --}}
@endsection