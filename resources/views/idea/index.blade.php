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
           {{-- Idea Container --}}
        <div
            x-data
            @click="
                const clicked = $event.target;
                const target = clicked.tagName.toLowerCase();
                const ignores = ['button', 'svg', 'path', 'a'];

                if(! ignores.includes(target)) {
                    $event.target.closest('.idea-container').querySelector('.idea-link').click();
                }
            "
            class="idea-container hover:shadow-card transition duration-150 ease-in bg-white rounded-xl flex cursor-pointer">
            {{-- Left Part --}}
            <div class="hidden md:block border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-500">Votes</div>
                </div>

                <div class="mt-8">
                    <button
                        class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 font-bold text-xxs uppercase rounded-xl px-4 py-3 transition duration-150 ease-in">Vote</button>
                </div>
            </div>
            {{-- End Left Part --}}
            {{-- Right Part --}}
            <div class="flex flex-col md:flex-row flex-1 px-2 py-6">
                <div class="flex-none mx-2 md:mx-4">
                    <a href="">
                        <img src="{{ $idea->user->getAvatar() }}"
                            alt="avatar" class="w-14 h-14 rounded-xl">
                    </a>
                </div>

                <div class="w-full flex flex-col justify-between mx-2 md:mx-4">
                    <h4 class="text-xl font-semibold mt-2 md:mt-0">
                        <a href="{{ route('idea.show', $idea) }}" class="hover:underline idea-link">{{ $idea->title }}</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        {{ $idea->description }}
                    </div>
                    <div class="flex flex-col md:flex-row md:items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div>{{ $idea->created_at->diffForHumans() }}</div>
                            <div>&bull;</div>
                            <div>{{ $idea->category->name }}</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 commentaires</div>
                        </div>
                        <div 
                        x-data = "{ isOpen: false }"
                        class="flex items-center space-x-2 mt-4 md:mt-0">
                            <div
                                class="bg-gray-100 hover:bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full transition duration-150 ease-in text-center w-28 h-7 py-2 px-4">
                                Ouvrir</div>
                            <button
                                @click="isOpen = !isOpen"
                                class="relative bg-gray-100 hover:bg-gray-200 border rounded-full h-7 transition duration-150 ease-in py-2 px-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                </svg>
                                <ul
                                    x-cloak
                                    x-show.transition.origin.top.left.duration.500ms="isOpen"
                                    @click.away ="isOpen= false"
                                    @keydown.escape.window="isOpen = false"
                                    class="absolute w-44 font-semibold text-xs text-left bg-white shadow-dialog rounded-xl py-3 md:ml-6 top-8 md:top-6 right-0 md-left-0">
                                    <li><a href=""
                                            class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Marquer
                                            comme Spam</a></li>
                                    <li><a href=""
                                            class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Supprimer
                                            le post</a></li>
                                </ul>
                            </button>
                        </div>
                        {{-- Responsive Votings --}}
                        <div class="flex items-center md:hidden mt-4 md:mt-0">
                            <div class="bg-gray-100 text-center rounded-xl h-10 px-4 py-2 pr-8">
                                <div class="text-sm font-bold leading-none">12</div>
                                <div class="text-xxs font-semibold leading-none text-gray-400">Votes</div>
                            </div>
                            <button class="w-20 -mx-5 bg-gray-200 border border-gray-200 font-bold text-xxs uppercase rounded-xl hover:border-gray-400 transition duration-150 ease-in px-4 py-3">
                                Vote
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- End Right Part --}}
        </div>
        {{-- End Idea Container --}} 
        @endforeach
        
        <div class="my-8">
            {{ $ideas->links() }}
        </div>
    </div>
    {{-- End Ideas Container --}}
</x-app-layout>
