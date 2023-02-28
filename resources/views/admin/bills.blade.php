@extends('layouts.admin')

@section('content')
<table class="table">

    <thead>
        <tr>
            <th>
                Id
            </th>
            <th>
                Initial
            </th>
            <th>
                Final
            </th>
            <th>
                Month
            </th>
            <th>
                Year
            </th>
            <th>
                Units
            </th>
            <th>
                Amount
            </th>
            <th>
                Status
            </th>
            <th>
                User
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($bills as $bill)
        <tr>
            <td>
                {{ $bill->id }}
            </td>
            <td>
                {{ $bill->initial }}
            </td>
            <td>
                {{ $bill->final }}
            </td>
            <td>
                {{ $bill->month }}
            </td>
            <td>
                {{ $bill->year }}
            </td>
            <td>
                {{ $bill->units }}
            </td>
            <td>
                {{ $bill->amount }}
            </td>
            <td>
                {{ $bill->status }}
            </td>
            <td>
                {{$bill->user->name}}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection