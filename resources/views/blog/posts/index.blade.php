@extends('layouts.app')

@section('content')
    <table>
        @foreach( $items as $item)
            <tr>
                <td>{{$item->item}}</td>
                <td>{{$item->title}}</td>
                <td>{{$item->created_at}}</td>

            </tr>
        @endforeach
    </table>
@endsection