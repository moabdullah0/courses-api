<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('info Session') }}
        </h2>
    </x-slot>




    <div class="py-12">
        <x-success-status class="mb-4" :status="session('message')" />
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <table class="table" style="width: 100%">
                    <thead>
                      <tr>
                        <th scope="col">id</th>
                        <th scope="col">Title</th>
                        <th scope="col">description</th>
                        <th scope="col">image</th>
                        <th scope="col">status</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                      </tr>
                    </thead>
                    <tbody>

                        @forelse ($courses as $course)
                        <tr>
                        <td scope="row">{{$course->id}}</td>
                        <td scope="row">{{$course->title}}</td>
                        <td scope="row">{{$course->description}}</td>
                        <td scope="row">{{$course->image}}</td>


                        <td scope="row">{{$course->courses_id}}</td>



                        <td scope="row"><a href="{{url('/edit-student/'.$course->id)}}" class="btn btn-warning">Edit</a></td>


                        <td scope="row">
                            <form action="{{url('delete-student/'.$course->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                            <button class="btn btn-danger">Delete</button>
                            </form>
                        </td>


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
