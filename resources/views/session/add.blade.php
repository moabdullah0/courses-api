
<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add Courses') }}
        </h2>
    </x-slot>




    <div class="py-12">
        <x-success-status class="mb-4" :status="session('message')" />
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
               <form action="{{url('add-session')}}" method="POST" enctype="multipart/form-data">
@csrf
<div>

    <div class="form-row py-3 pt-5">
        <div class="offset-1 col-lg-10">
        <x-input-label for="photo" :value="__('Session image')" />
        <input id="image" class="block mt-1 w-full inp px-3  let username btn" type="file" name="image" :value="old('image')" required autofocus autocomplete="username" />
        </div>

    <div class="form-row py-3 pt-5">
        <div class="offset-1 col-lg-10">
        <x-input-label for="title" :value="__('Session title')" />
        <x-text-input id="title" class="block mt-1 w-full inp px-3  let username" type="text" name="title" :value="old('title')" required autofocus autocomplete="username" />
        </div>

       <!-- <div class="form-row py-3 pt-5">
            <div class="offset-1 col-lg-10">
            <x-input-label for="description" :value="__('Session description')" />
            <x-text-input id="description" class="block mt-1 w-full inp px-3  let username" type="text" name="description" :value="old('description')" required autofocus autocomplete="username" />
            </div>-->

            <div class="form-row py-3 pt-5">
                <div class="offset-1 col-lg-10">
            <select class="form-select" aria-label="Default select example" name="courses_id" id="courses_id">
                <option value="">نوع الكورس</option>
                @forelse ($courses as $course)

                <option value="{{$course->id}}">{{$course->title}}</option>
                @empty
                <tr>
                    <td>No REcord Found</td>
                </tr>
            @endforelse
              </select>

            </div>
        </div>

            <div class="form-row py-3 pt-5">
                <div class="offset-1 col-lg-10">
                <x-input-label for="description" :value="__('description Course')" />
                <input id="description" class="block mt-1 w-full inp px-3  let username" type="text" name="description" :value="old('description')" required autofocus autocomplete="username" />
                </div>
        </div>
        <div class="form-row ">
        <x-primary-button class="ml-3 btn1 btn btn-info sign-up " >
            {{ __('Save Course') }}
        </x-primary-button>
        </div>
    </form>
            </div>
        </div>
    </div>

</x-app-layout>
