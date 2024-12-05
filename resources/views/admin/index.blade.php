
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{__('Административная панель')}}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl  mx-auto sm:px-6 lg:px-8">
            <table class="overflow-hidden sm:rounded-lg w-full">
                <thead>
                    <tr class="bg-blue-800">
                        <th class="text-white font-semibold p-3 text-left">Дата</th>
                        <th class="text-white font-semibold p-3 text-left">ФИО подавшего</th>
                        <th class="text-white font-semibold p-3 text-left">Номер автомобиля</th>
                        <th class="text-white font-semibold p-3 text-left">Описание заявленя</th>
                        <th class="text-white font-semibold p-3 text-left">Статус</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($reports as $report)
                    <tr class="odd:bg-white even:bg-slate-100">
                        <td class="p-3">
                            {{\Carbon\Carbon::parse($report->created_at)->toDateString()}}
                        </td>
                        <td class="p-3">{{ $report->user->fullName() }}</td>
                        <td class="p-3">{{ $report->number }}</td>
                        <td class="p-3">{{ $report->description }}</td>
                        <td class="p-3">

                        
                    @if ($report->status_id == 1)
                        <form id="form-update-{{$report->id}}" action="{{route('report.update')}}" method="POST">
                            @csrf
                            @method('PATCH')
                            <input type="hidden" name="id" value="{{$report->id}}">
                            <select name="status_id" onchange="document.getElementById('form-update-{{$report->id}}').submit()">
                                @foreach ($statuses as $status)
                                    <option value="{{$status->id}}">{{$status->name}}</option>
                                @endforeach
                            </select>
                        </form>
                        @else
                            <span class="font-bold statusText" id="statusText">{{ $report->status->name }}</span>
                        @endif
                        </td>
                    </tr>    
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script>
        
    </script>
</x-app-layout>
