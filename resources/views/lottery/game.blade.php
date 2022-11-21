@extends('lottery.panel')
@section('title')
Games 🎮
@endsection
@section('content')
    <form class="mt-6 space-y-8 divide-y divide-gray-200" method="post" action="{{route('storeGame')}}" >
        @csrf
        <div class="space-y-8 divide-y divide-gray-200 sm:space-y-5">
            <div class="space-y-6 pt-8 sm:space-y-5 sm:pt-10">
                <div>
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Definition of Games</h3>
                </div>
                <div class="space-y-6 sm:space-y-5">
                    <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="team1" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Team1 Name</label>
                        <div class="mt-1 sm:col-span-2 sm:mt-0">
                            @if(Session::has('success'))
                                <div class="rounded-md bg-green-50 p-4">
                                    <div class="flex">
                                        <div class="flex-shrink-0">
                                            <!-- Heroicon name: mini/check-circle -->
                                            <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <div class="ml-3">
                                            <p class="text-sm font-medium text-green-800">{!! Session::get('success') !!}</p>
                                        </div>
                                        <div class="ml-auto pl-3">
                                            <div class="-mx-1.5 -my-1.5">
                                                <button type="button" class="inline-flex rounded-md bg-green-50 p-1.5 text-green-500 hover:bg-green-100 focus:outline-none focus:ring-2 focus:ring-green-600 focus:ring-offset-2 focus:ring-offset-green-50">
                                                    <span class="sr-only">Dismiss</span>
                                                    <!-- Heroicon name: mini/x-mark -->
                                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @endif
                            <input type="text" name="team1" id="team1" autocomplete="given-name" class="block w-full max-w-lg rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:max-w-xs sm:text-sm" required>
                        </div>
                    </div>
                </div>
                <div class="space-y-6 sm:space-y-5">
                    <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="team2" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Team2 Name</label>
                        <div class="mt-1 sm:col-span-2 sm:mt-0">
                            <input type="text" name="team2" id="team2" autocomplete="given-name" class="block w-full max-w-lg rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:max-w-xs sm:text-sm" required>
                            @if($errors->any())
                                <div class="rounded-md bg-red-50 p-4">
                                    <div class="flex">
                                        <div class="flex-shrink-0">
                                            <!-- Heroicon name: mini/x-circle -->
                                            <svg class="h-5 w-5 text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.28 7.22a.75.75 0 00-1.06 1.06L8.94 10l-1.72 1.72a.75.75 0 101.06 1.06L10 11.06l1.72 1.72a.75.75 0 101.06-1.06L11.06 10l1.72-1.72a.75.75 0 00-1.06-1.06L10 8.94 8.28 7.22z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <div class="ml-3">
                                            <h3 class="text-sm font-medium text-red-800"> {{ implode('', $errors->all(':message')) }}</h3>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pt-5">
            <div class="flex justify-end">
                <button type="submit" class="ml-3 inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
            </div>
        </div>
    </form>

    <div class="mt-12 px-4 sm:px-6 lg:px-8">
        <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto">
                <h1 class="text-xl font-semibold text-gray-900">List Of Games</h1>
                <p class="mt-2 text-sm text-gray-700">A list of all in games </p>
            </div>
        </div>
        <div class="mt-8 flex flex-col">
            <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                    <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-300">
                            <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Game Title</th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Game Result</th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Status</th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Actions</th>
                            </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 bg-white">
                            @foreach($games as $game)
                            <tr>
                                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">{{$game->team1}} - {{$game->team2}}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                    @if($game->team1_goal == -1)
                                        The game is not over
                                    @else
                                        {{$game->team1}} {{$game->team1_goal}} - {{$game->team2}} {{$game->team2_goal}}
                                    @endif
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                    @if($game->active == "yes")
                                        <span class="inline-flex items-center rounded-full bg-green-400
                                         px-2.5 py-0.5 text-xs font-medium text-green-800">Active</span>
                                    @else
                                        <span class="inline-flex items-center rounded-full bg-yellow-400
                                         px-2.5 py-0.5 text-xs font-medium text-yellow-800">disable</span>
                                    @endif
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                    <a href="{{route('deleteGame',$game->id)}}" class="text-red-600 hover:text-red-900">Remove</a>&nbsp;
                                    @if($game->active == 'no')
                                        @if($game->team1_goal == -1)
                                            <a href="{{route('activeGame',$game->id)}}" class="text-red-600 hover:text-red-900">Active</a>
                                        @endif
                                    @else
                                        <button onclick="toggleModal()" type="button" class="inline-flex items-center rounded border border-transparent bg-indigo-600 px-2.5 py-1.5 text-xs font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Set Result 📈</button>
                                        <div class="fixed z-10 overflow-y-auto top-0 w-full left-0 hidden" id="modal">
                                            <div class="flex items-center justify-center min-height-100vh pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                                                <div class="fixed inset-0 transition-opacity">
                                                    <div class="absolute inset-0 bg-gray-900 opacity-75"></div>
                                                </div>
                                                <span class="hidden sm:inline-block sm:align-middle sm:h-screen">&#8203;</span>
                                                <div class="inline-block align-center bg-gray-900 rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                                                    <div class="py-6 px-6 lg:px-8">
                                                        <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Record the result 📈</h3>
                                                            <form class="space-y-6" action="{{route('setResultGame')}}" method="post">
                                                                @csrf
                                                            <div>
                                                                <label for="team1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Team1 - {{$game->team1}}</label>
                                                                <input type="number" name="team1" id="team1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                                                            </div>
                                                            <div>
                                                                <label for="team2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Team2 - {{$game->team2}}</label>
                                                                <input type="number" name="team2" id="team2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                                                            </div>
                                                                <input type="hidden" value="{{$game->id}}" name="gameId">
                                                                <button  type="submit" class="py-2 px-4 bg-indigo-500 text-white rounded hover:bg-indigo-700 mr-2">Save</button>
                                                            </form>
                                                    </div>
                                                    <div class="bg-gray-900 px-4 py-3 text-right">
                                                        <button type="button" class="py-2 px-4 bg-gray-500 text-white rounded hover:bg-gray-700 mr-2" onclick="toggleModal()"><i class="fas fa-times"></i> Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function toggleModal() {
            document.getElementById('modal').classList.toggle('hidden')
        }
    </script>
@endsection
