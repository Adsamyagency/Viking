<div class="container mx-auto px-4 sm:px-8">
    <div class="py-8">
        <div class="flex items-center justify-between">
            <h2 class="text-2xl font-semibold leading-tight">Yacht</h2>

            <a href="{{ url('dashboard/add-yacht') }}">
                <x-primary-button class="ml-auto">Add Yacht</x-primary-button>
            </a>

        </div>
        <div class="  py-4 overflow-x-auto">
            <div class="inline-block min-w-full shadow-md rounded-lg overflow-hidden">
                <table class="min-w-full leading-normal">
                    <thead>
                        <tr>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                Yacht Title
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                Feet
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                People
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($yacht as $y)
                            <tr>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{ $y->yacht }}
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{ $y->feet }}
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{ $y->person }}
                                    </p>
                                </td>


                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <div class="flex gap-5 text-gray-900 whitespace-no-wrap">
                                        <form action="{{ url('/dashboard/yacht/delete/' . $y->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="p-1 bg-red-600 text-white rounded">
                                                <x-delete-icon></x-delete-icon>
                                            </button>
                                        </form>
                                        <a class="bg-sky-500/75 text-white p-1 rounded"
                                            href="{{ url('/dashboard/yacht/edit/' . $y->id) }}">
                                            <x-edit-icon></x-edit-icon>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
