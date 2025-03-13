@extends('layouts.app')
@section('content')

<h2>Welcome to my laravel app</h2>


<a href="{{ route('students.manage') }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Manage students</a>
<a href="{{ route('courses.manage') }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Manage courses</a>
