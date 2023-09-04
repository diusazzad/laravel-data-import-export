@extends('layouts.app')

@section('content')
<div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    <h2 class="text-2xl font-semibold mb-4">Import Data</h2>

    @if(session('success'))
    <div class="bg-green-200 border-l-4 border-green-500 text-green-700 p-4 mb-4" role="alert">
        {{ session('success') }}
    </div>
    @endif

    @if(session('error'))
    <div class="bg-red-200 border-l-4 border-red-500 text-red-700 p-4 mb-4" role="alert">
        {{ session('error') }}
    </div>
    @endif

    <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="file">
                Choose a CSV file to import:
            </label>
            <input type="file" name="file" id="file"
                class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('file')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex items-center justify-between">
            <button type="submit"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Import
            </button>
        </div>
    </form>
</div>
@endsection
