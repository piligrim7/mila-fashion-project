@extends('layouts/app')

@section('title')
	{{ __('My work') }} - {{ __('Landscapes') }}
@endsection

@section('main_content')
<img class="float-right m-3 md:m-4" src="{{ Vite::asset ('resources/images/about_me.png') }}" alt="Sketch picture"/>
<div class="p-4 md:p-5">
	<h1 class="text-5xl sm:text-6xl font-bold tracking-tight text-zinc-800 dark:text-zinc-100"> Landscapes. Title of a longer featured blog post</h1>
	<p class="my-8 text-xl text-zinc-700 dark:text-zinc-300">Multiple lines of text that form the lede, informing new readers quickly and efficiently
		about what’s most interesting in this post’s contents.</p>
</div>
@endsection