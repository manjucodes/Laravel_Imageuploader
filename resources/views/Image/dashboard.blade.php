<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
    <div>
        @yield('content')
    </div>    
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                {{-- <h2>Laravel 9 CRUD (Create, Read, Update and Delete) with Image Upload</h2> --}}
            </div>
            <div class="pull-right" style="margin-bottom:10px;">
            <a class="btn btn-success" href="{{ url('upload') }}"> Create New image</a>
            </div>
        </div>
    </div>
     
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <table class="table table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Details</th>
                        <th width="280px">Action</th>
                    </tr>
                    @if(isset($images))
                    @foreach ($images as $image)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td><img src="/images/{{ $image->image }}" width="100px"></td>
                        <td>{{ $image->name }}</td>
                        <td>{{ $image->detail }}</td>
                        <td>
                            <form action="{{ route('destroy',$image->id) }}" method="POST">
                                <a class="btn btn-info" href="{{ route('show',$image->id) }}">Show</a>
                                {{-- <a class="btn btn-primary" href="{{ route('edit',$image->id) }}">Edit</a> --}}
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    @endif
                    NO Images Uploaded Please upload images to See here
                </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
