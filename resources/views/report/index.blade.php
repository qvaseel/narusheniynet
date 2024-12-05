<x-app-layout>
    <x-slot name="header">
        <div class="w-full flex justify-between items-center">
            <h2 class="text-3xl font-bold py-5">{{ __('Список заявлений')}}</h2>
            <!-- <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 h-12 text-center" type="button">
                Создать
            </button> -->
            <x-nav-link :href="route('report.create')" class="">
                {{__('Создать заявление')}}
            </x-nav-link>
        </div>
    </x-slot>
    <div class="max-w-7xl mx-auto py-6 px-4 flex flex-col gap-5 flex-wrap justify-between">

        @foreach ($reports as $report)
        <div class="bg-white flex flex-col gap-5 p-4 border-2 rounded-xl">
            <p class="text-red-700 font-bold">
                {{\Carbon\Carbon::parse($report->created_at)->toDateString()}}
            </p>
            <div class="flex justify-between">
                <p class="font-bold">
                    <a href="{{route('report.show',$report->id)}}">
                        {{ $report->number }}
                    </a>
                </p>
                <p class="text-left">{{ $report['description'] }}</p>
                <p id="statusText" class="font-bold statusText">{{ $report->status->name }}</p>
            </div>
            
        </div>
        @endforeach
    </div>
</x-app-layout>