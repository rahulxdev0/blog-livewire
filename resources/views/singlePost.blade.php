@extends('layout')

@section('content')
    <!-- Blog Post Container -->
    <div class="flex px-[5%] py-5 w-full">
        <livewire:public.single-view :post_id="$post_id"/>
    </div>
@endsection
