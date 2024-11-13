@extends('layout')

@section('content')
    <div class="flex felx-1 px-[5%] bg-slate-200 gap-10">
        <div class="flex w-3/12">
            <livewire:public.sidebar/>
        </div>
        <div class="flex w-9/12">
            <livewire:public.post-section/>
        </div>
    </div>
@endsection
