@extends('layouts.main-layout')

@section('content')

<h1>Employees:</h1>

<ul>

    @foreach ($employees as $employee)

        <li>

           <h3>

                {{$employee -> lastname}} {{$employee -> firstname}} -->

                {{$employee -> location -> street}} ({{$employee -> location -> state}})

            </h3>

            <h5>Task ({{$employee -> tasks -> count() }}):</h5>
            <ul>

                <li>

                    @foreach ($employee -> tasks as $task)

                        <li class="task">

                           <h5>-{{ $task -> name}}</h5>

                        </li>

                    @endforeach

                </li>

            </ul>

        </li>

    @endforeach

</ul>

@endsection
