
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{__('Административная панель')}}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white  overflow-hidden shadow-sm sm:rounded-lg">
                @foreach($reports as $report)
                    <p>{{\Carbon\Carbon::parse($report->created_at)->translatedFormat('j F Y')}}</p>
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
                    
                @endforeach
            </div>
        </div>
    </div>

</xч>
