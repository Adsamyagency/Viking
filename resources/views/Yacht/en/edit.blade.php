<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Yahct') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-3">
                <form action="{{ url('/dashboard/yacht/edit') . '/' . $yacht->id }}" class="bg-white px-2" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="w-full max-w-xs">
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="Yacht Title">
                                Yacht Title
                            </label>
                            <input value="{{ $yacht->yacht }}" name="yacht" required
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="Yacht Title" type="text" placeholder="Yacht Title...">
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="Feet">
                                Feet
                            </label>
                            <input value="{{ $yacht->feet }}" name="feet" required
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="Feet" type="text" placeholder="Feet...">
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="People">
                                People
                            </label>
                            <input value="{{ $yacht->person }}" name="person" required
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="People" type="text" placeholder="People...">
                        </div>
                    </div>

                    <div class="mt-5">
                        <x-primary-button>{{ __('Save Data') }}</x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
