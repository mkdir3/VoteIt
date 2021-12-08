<x-app-layout>
    {{-- Filters --}}
    <div class="filters flex flex-col md:flex-row md:space-x-6 md:space-y-0 space-y-2">
        <div class="w-full md:w-1/3">
            <select name="category" id="category" class="w-full rounded-xl border-none px-4 py-2 text-xs">
                <option value="Category 1">Nouvelle Catégorie</option>
                <option value="Category 2">Nouvelle Catégorie</option>
                <option value="Category 3">Nouvelle Catégorie</option>
            </select>
        </div>
        <div class="w-full md:w-1/3">
            <select name="other_filters" id="other_filters" class="w-full rounded-xl border-none px-4 py-2 text-xs">
                <option value="Filters 1">Nouveau Filtre</option>
                <option value="Filters 2">Nouveau Filtre</option>
                <option value="Filters 3">Nouveau Filtre</option>
            </select>
        </div>
        <div class="w-full md:w-2/3 relative">
            <input type="search" placeholder="Rechercher ici"
                class="w-full rounded-xl border-none bg-white px-4 py-2 pl-8 text-xs placeholder-gray-900">
            <div class="absolute top-0 flex items-center h-full ml-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 text-gray-700" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
        </div>
    </div>
    {{-- End Filters --}}
    {{-- Ideas Container --}}
    <div class="ideas-container space-y-6 my-6">
        @foreach ($ideas as $idea)
        <livewire:idea-index :idea="$idea" :votesCount="$idea->votes_count"/>
        @endforeach
        
        <div class="my-8">
            {{ $ideas->links() }}
        </div>
    </div>
    {{-- End Ideas Container --}}
</x-app-layout>
