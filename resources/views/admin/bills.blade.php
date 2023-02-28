@extends('layouts.admin')

@section('content')
<table class="table table-bordered table-hover table-striped">

    <thead style = "background-color: #317874 ">
        <tr class="text-white">
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
            <td class="py2">
                {{ $bill->id }}
            </td>
            <td class="py2">
                {{ $bill->initial }}
            </td>
            <td class="py2">
                {{ $bill->final }}
            </td>
            <td class="py2">
                {{ $bill->month }}
            </td>
            <td class="py2">
                {{ $bill->year }}
            </td>
            <td class="py2">
                {{ $bill->units }}
            </td>
            <td class="py2">
                {{ $bill->amount }}
            </td>
            <td class="py2">
                {{ $bill->status }}
            </td>
            <td class="py2">
                {{$bill->user->name}}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


@endsection