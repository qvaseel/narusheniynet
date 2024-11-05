@extends('layouts.main')
@section('content')
<div class="mx-auto w-auto">
    <h2>админ-панель</h2>
    <div class="flex flex-col mx-auto my-5">
        <div class="flex">
            <p class="w-1/4 text-center border-2 font-semibold">Номер заявки</p>
            <p class="w-1/4 text-center border-2 font-semibold">Номер машины</p>
            <p class="w-1/4 text-center border-2 font-semibold">Описание заявки</p>
            <p class="w-1/4 text-center border-2 font-semibold">Статус заявки</p>
        </div>
            @foreach($reports as $report)
            <div class="flex">
                <p class="w-1/4 text-center border-2">{{ $report['id'] }}</p>
                <p class="w-1/4 text-center border-2">{{ $report['number'] }}</p>
                <p class="w-1/4 text-center border-2">{{ $report['description'] }}</p>
                <p class="w-1/4 text-center border-2">{{ $report->status->name }}</p>
            </div>
            @endforeach
    </div>

</div>
@endsection()