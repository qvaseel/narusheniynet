
<x-app-layout>
    <x-slot name="header">
        <h2 class="text-3xl font-bold py-5">{{ __('Создание нового заявления')}}</h2>
    </x-slot>
    
    <form class="mx-auto max-w-7xl p-4 md:p-5 space-y-4 flex flex-col gap-5" method="POST" action="{{route('report.store')}}">
        @csrf
        <div class="flex flex-col gap-5">
            <!-- Number -->
            <div>
                <x-input-label for="number" :value="__('Регистрационный номер автомобиля')"/>
                <x-text-input id="number" class="block mt-1" type="text" name="number" required/>
                <x-input-error :messages="$errors->get('number')" class="mt-2" />
                <!-- <input name="number" type="text" id="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Номер" required /> -->
            </div>
            <!-- Desription -->
            <div>
                <x-input-label for="description" :value="__('Описание нарушенения')"/>
                <x-textarea id="description" class="block mt-1 w-5/6" rows="10" name="description" required/>
                <x-input-error :messages="$errors->get('description')" class="mt-2" />
                <!-- <textarea name="description" type="text" id="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Описание" required></textarea> -->
            </div>
            <!-- Status -->
            <!-- <div>
                <label for="status_id" class="block mb-2 text-sm font-medium text-gray-900">Статус заявки</label>
                <select name="status_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    @foreach($statuses as $status)
                    <option value="{{ $status->id }}">
                        {{ $status->name }}
                    </option>
                    @endforeach
                </select>
                </div>
            </div> -->
            <div>
                <x-primary-button class="ms-3">
                    {{__('Создать заявление')}}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-app-layout>