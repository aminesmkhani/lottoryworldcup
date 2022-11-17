@extends('lottery.panel')
@section('title')
Participants 👪
@endsection
@section('content')
    <div class="mt-12 px-4 sm:px-6 lg:px-8">
        <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto">
                <h1 class="text-xl font-semibold text-gray-900">List Of Participants</h1>
                <p class="mt-2 text-sm text-gray-700">A list of all in participants </p>
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
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Phone</th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Game Result</th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Status</th>
                            </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 bg-white">
{{--                            @foreach($winners as $winner)--}}
{{--                            <tr>--}}
{{--                                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">{{$winner->game->team1}} - {{$winner->game->team2}}</td>--}}
{{--                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{$winner->tel}}</td>--}}
{{--                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{$winner->game->team1}} {{$winner->game->team1_goal}} - {{$winner->game->team2}} {{$winner->game->team2_goal}}</td>--}}
{{--                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{$winner->category->title}}</td>--}}
{{--                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">--}}
{{--                                    @if($winner->sms_verify == "yes")--}}
{{--                                        <span class="inline-flex items-center rounded-full bg-green-400--}}
{{--                                         px-2.5 py-0.5 text-xs font-medium text-green-800">Sent</span>--}}
{{--                                    @else--}}
{{--                                        <span class="inline-flex items-center rounded-full bg-yellow-400--}}
{{--                                         px-2.5 py-0.5 text-xs font-medium text-yellow-800">Not Sent</span>--}}
{{--                                    @endif--}}
{{--                                </td>--}}
{{--                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">--}}
{{--                                    <a href="{{route('sendWinnerSms',$winner->id)}}" class="text-blue-600 hover:text-blue-900">Send Sms</a>&nbsp;--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                            @endforeach--}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
