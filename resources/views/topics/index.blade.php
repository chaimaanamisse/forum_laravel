<x-app-layout>
    <x-slot name="header">
    
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

  
    
    <div class="py-12">
    @foreach ($topics as $topic)
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <h4><a href="{{ route('topics.show', $topic) }}">{{ $topic->title }}</a></h4>
                <p>{{ $topic->content }}</p>
                <div class="d-flex flex-column">
                <small>Posté le {{ $topic->created_at->format('d/m/Y') }}  par <span >{{ $topic->user->name }}</span></small>
                </div>
                </div>
            </div>
        </div>
        @endforeach
        <div class="d-flex justify-content-center mt-3">
            {{ $topics->links() }}
        </div>
    </div>

    </div>


    
</x-app-layout>