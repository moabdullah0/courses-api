@extends('dashboard')
@section('link')
show-sessions
@endsection
@section('content')
<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Info Course') }}
        </h2>
    </x-slot>




    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="container text-center py-4 ">

                    </div>

                    <div class="row text-center m-1">

                        @foreach ($sessions as $course)

                    <div class="col-sm-3  py-3 c1 fotimg">

                    <div class="card">
                    <div class="card-body bg-dark text-light">


                  <h5 class="card-title text-center">{{$course->title}}</h5>
                  <br>
                  <h5 class="card-title">{{$course->description}}</h5>
                  <h5 class="card-title">{{$course->link}}</h5>






                    </div>

                    </div>

                    </div>
                    @endforeach
                    </div>
            </div>
        </div>
            </x-app-layout>
        </a>
        @endsection
