@extends('layouts.main')
@section('content')
<div class="mx-auto w-auto">
    <h2>Обновить данные об автомобиле</h2>
    <form class="p-4 md:p-5 space-y-4" method="POST" action="{{route('report.update', $report->id)}}">
        @csrf
        @method('put')
        <div class="flex flex-col">
            <div>
                <label for="number" class="block mb-2 text-sm font-medium text-gray-900">Номер отчета</label>
                <input name="number" type="text" id="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="{{$report->number}}" required />
            </div>
            <div>
                <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Описание</label>
                <textarea name="description" type="text" id="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>{{$report->description}}</textarea>
            </div>
            <div>
                <label for="status_id" class="block mb-2 text-sm font-medium text-gray-900">Статус заявки</label>
                <select name="status_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    @foreach($statuses as $status)
                    <option value="{{ $status->id }}">
                        {{ $status->name }}
                    </option>
                    @endforeach
                </select>
            </div>
        </div>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Обновить</button>
    </form>
</div>
@endsection()