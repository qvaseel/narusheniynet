
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{__('Административная панель')}}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl  mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col gap-4 overflow-hidden sm:rounded-lg">
                @foreach($reports as $report)
                <div class="border-2 rounded-xl w-1/3 p-5 bg-white shadow-sm ">
                    <p>{{\Carbon\Carbon::parse($report->created_at)->toDateString()}}</p>
                    <p>{{ $report->user->fullName() }}</p>
                    <p>{{ $report->number }}</p>
                    <p>{{ $report->description }}</p>
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
                        <p>{{ $report->status->name }}</p>
                    @endif
                    </div>    
                @endforeach
            </div>
        </div>
    </div>

</x-app-layout>
