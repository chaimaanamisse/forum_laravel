<x-app-layout>
    <x-slot name="header">
    
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New') }}
        </h2>
    </x-slot>

    <div class="container">
        <h1>Créer un topic</h1>
        <hr>
        <form action="{{ route('topics.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Titre du topic</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title">
            @error('title')
            <div class="invalid-feedback">{{ $errors->first('title') }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="content">Votre sujet</label>
            <textarea name="content" id="content" class="form-control @error('content') is-invalid @enderror" rows="5"></textarea>
            @error('content')
            <div class="invalid-feedback">{{ $errors->first('content') }}</div>
            @enderror
        </div>
        
        <button type="submit" class="btn btn-primary">Créer mon topic</button>
        </form>
    </div>

 

  
    
   


    
</x-app-layout>