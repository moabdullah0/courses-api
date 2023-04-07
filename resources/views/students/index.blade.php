@extends('dashboard')
@section('link')
show-users
@endsection

@section('content')
<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add Student') }}
        </h2>
    </x-slot>




    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <table class="table" style="width: 100%">
                    <thead>
                      <tr>
                        <th scope="col">id</th>
                        <th scope="col">NAme</th>
                        <th scope="col">Email</th>


                        <th scope="col">password</th>
                        <th scope="col">status</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                      </tr>
                    </thead>
                    <tbody>

                        @forelse ($user as $student)
                        <tr>
                        <td scope="row">{{$student->id}}</td>
                        <td scope="row">{{$student->name}}</td>
                        <td scope="row">{{$student->email}}</td>


                        <td scope="row">{{$student->password}}</td>





                      </tr>

                        @empty
<tr>
    <td>No REcord Found</td>
</tr>
                        @endforelse

                    </tbody>
                  </table>
    </div>
</div>
</div>

</x-app-layout>
@endsection
