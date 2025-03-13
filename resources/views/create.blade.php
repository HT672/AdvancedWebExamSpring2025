@extends('layouts.app')
@section('content')
 

<form action="{{ route('courses.store') }}" method="POST" class="max-w-sm mx-auto">
  <div class="mb-5">
    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Course Name</label>
    <input type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@flowbite.com" required />
  </div>
  <div class="mb-5">
    <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Course Description</label>
    <input type="text" id="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
  </div>
</form>

@foreach ($courses as $course)
 <li class="list-group-item">
 <a href="{{ route('courses.show', $course->id) }}">{{ $course->name }}</a>
 <form action="{{ route('courses.destroy', $course->id) }}" method="POST" 
class="d-inline">
 @csrf
 @method('DELETE')
 <button class="btn btn-sm btn-danger">Delete</button>
 </form>
 </li>
 @endforeach
@endsection

