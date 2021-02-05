@extends('layout')

@section('content')
    <table class="table">
        <tr>
            <th scope="col">Photo </th>
            <th scope="col">Name </th>
            <th scope="col">Report Subject </th>
            <th scope="col">E-Mail </th>
        </tr>
    @foreach($data as $member)
        <div class="container" style="text-align: left">

                    @if (isset($member['photo']))
                        <tr>
                <td><img src="media/{{$member['photo']}}" width="100 px" height="100 px"></td>
                    @else
                        <th scope="col"><img src="media/default.jpg" width="100 px" height="100 px"></th>
                    @endif
                <td>{{$member['firstname']}} {{$member['lastname']}}</td>
                <td>{{$member['report_subject']}}</td>
                    <th scope="col"><a href="{{$member['email']}}">{{$member['email']}}</a></th>
                </tr>


    @endforeach
    </table>
    </div>

@endsection
