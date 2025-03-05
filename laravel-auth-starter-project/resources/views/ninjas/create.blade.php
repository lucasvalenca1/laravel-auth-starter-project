@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create a New Ninja</h1>
    <form action="{{ route('ninjas.store') }}" method="POST">
        @csrf

        <!-- Ninja Name -->
        <div class="form-group">
            <label for="name">Ninja Name:</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" required>
            @error('name')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <!-- Ninja Skill -->
        <div class="form-group">
            <label for="skill">Skill Level (0-100):</label>
            <input type="number" class="form-control" name="skill" id="skill" value="{{ old('skill') }}" min="0" max="100" required>
            @error('skill')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <!-- Ninja Bio -->
        <div class="form-group">
            <label for="bio">Bio:</label>
            <textarea class="form-control" name="bio" id="bio" rows="4" required>{{ old('bio') }}</textarea>
            @error('bio')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <!-- Dojo Dropdown -->
        <div class="form-group">
            <label for="dojo_id">Dojo:</label>
            <select class="form-control" name="dojo_id" id="dojo_id" required>
                <option value="">Select a dojo</option>
                @foreach ($dojos as $dojo)
                    <option value="{{ $dojo->id }}" {{ old('dojo_id') == $dojo->id ? 'selected' : '' }}>
                        {{ $dojo->name }}
                    </option>
                @endforeach
            </select>
            @error('dojo_id')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Create Ninja</button>
    </form>
</div>
@endsection
