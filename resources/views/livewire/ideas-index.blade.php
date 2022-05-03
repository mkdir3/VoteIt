<div>
    {{-- Filters --}}
    <div class="filters flex flex-col space-y-2 md:flex-row md:space-x-6 md:space-y-0">
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
        <div class="relative w-full md:w-2/3">
            <input type="search" placeholder="Rechercher ici"
                class="w-full rounded-xl border-none bg-white px-4 py-2 pl-8 text-xs placeholder-gray-900">
            <div class="absolute top-0 ml-2 flex h-full items-center">
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
    <div class="ideas-container my-6 space-y-6">
        @foreach ($ideas as $idea)
        <livewire:idea-index :key="$idea->id" :idea="$idea" :votesCount="$idea->votes_count" />
        @endforeach

        <div class="my-8">
            {{-- {{ $ideas->links() }} --}}
            {{ $ideas->appends(request()->query())->links() }}
        </div>
    </div>
    {{-- End Ideas Container --}}
</div>