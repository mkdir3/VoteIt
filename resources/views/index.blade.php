<x-app-layout>
    {{-- Filters --}}
    <div class="filters flex space-x-6">
        <div class="w-1/3">
            <select name="category" id="category" class="w-full rounded-xl border-none px-4 py-2 text-xs">
                <option value="Category 1">Nouvelle Catégorie</option>
                <option value="Category 2">Nouvelle Catégorie</option>
                <option value="Category 3">Nouvelle Catégorie</option>
            </select>
        </div>
        <div class="w-1/3">
            <select name="other_filters" id="other_filters" class="w-full rounded-xl border-none px-4 py-2 text-xs">
                <option value="Filters 1">Nouveau Filtre</option>
                <option value="Filters 2">Nouveau Filtre</option>
                <option value="Filters 3">Nouveau Filtre</option>
            </select>
        </div>
        <div class="w-2/3 relative">
            <input type="search" placeholder="Rechercher ici" class="w-full rounded-xl border-none bg-white px-4 py-2 pl-8 text-xs placeholder-gray-900">
            <div class="absolute top-0 flex items-center h-full ml-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
        </div>
    </div>
    {{-- End Filters --}}
    {{-- Ideas Container --}}
    <div class="ideas-container space-y-6 my-6">
        {{-- Idea Container --}}
        <div class="idea-container hover:shadow-card transition duration-150 ease-in bg-white rounded-xl flex cursor-pointer">
            {{-- Left Part --}}
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-500">Votes</div>
                </div>

                <div class="mt-8">
                    <button class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 font-bold text-xxs uppercase rounded-xl px-4 py-3 transition duration-150 ease-in">Vote</button>
                </div>
            </div>
            {{-- End Left Part --}}
            {{-- Right Part --}}
            <div class="flex px-2 py-6">
                <a href="" class="flex-none">
                    <img src="https://gravatar.com/avatar/000000000000000000000000000000000000?d=mp&f=y" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">Un magnifique titre</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis numquam quo libero perferendis odit, dolore voluptate molestias dignissimos sapiente autem quod commodi fugiat cum deserunt sint eligendi ea et magnam? Alias reiciendis unde minus, sapiente rem nobis. Quo sint natus ipsam voluptatibus nulla adipisci pariatur ratione assumenda provident, iste rerum eum praesentium magni aliquam cum nisi dolorem minima, alias, velit doloremque? Est, quasi quae. Exercitationem, atque! Recusandae qui sunt, quasi dolorum, officia velit quod eligendi maiores itaque corrupti vitae explicabo repellat facilis sapiente perferendis sit quae est tempore. Necessitatibus similique voluptatem odit voluptatum minus officiis totam nam ipsa, quo culpa?
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div>Il y a 10 heures</div>
                            <div>&bull;</div>
                            <div>Catégorie 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 commentaires</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="bg-gray-100 hover:bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full transition duration-150 ease-in text-center w-28 h-7 py-2 px-4">Ouvrir</div>
                        </div>
                        <button class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-2 px-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                              </svg>
                              <ul class="absolute w-44 font-semibold text-xs text-left bg-white shadow-dialog rounded-xl py-3 ml-6">
                                  <li><a href="" class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Marquer comme Spam</a></li>
                                  <li><a href="" class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Supprimer le post</a></li>
                              </ul>
                        </button>
                    </div>
                </div>
            </div>
            {{-- End Right Part --}}
        </div>
        {{-- End Idea Container --}}
        {{-- Idea Container --}}
        <div class="idea-container hover:shadow-card transition duration-150 ease-in bg-white rounded-xl flex cursor-pointer">
            {{-- Left Part --}}
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-500">Votes</div>
                </div>

                <div class="mt-8">
                    <button class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 font-bold text-xxs uppercase rounded-xl px-4 py-3 transition duration-150 ease-in">Vote</button>
                </div>
            </div>
            {{-- End Left Part --}}
            {{-- Right Part --}}
            <div class="flex px-2 py-6">
                <a href="" class="flex-none">
                    <img src="https://gravatar.com/avatar/000000000000000000000000000000000000?d=mp&f=y" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">Un magnifique titre</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis numquam quo libero perferendis odit, dolore voluptate molestias dignissimos sapiente autem quod commodi fugiat cum deserunt sint eligendi ea et magnam? Alias reiciendis unde minus, sapiente rem nobis. Quo sint natus ipsam voluptatibus nulla adipisci pariatur ratione assumenda provident, iste rerum eum praesentium magni aliquam cum nisi dolorem minima, alias, velit doloremque? Est, quasi quae. Exercitationem, atque! Recusandae qui sunt, quasi dolorum, officia velit quod eligendi maiores itaque corrupti vitae explicabo repellat facilis sapiente perferendis sit quae est tempore. Necessitatibus similique voluptatem odit voluptatum minus officiis totam nam ipsa, quo culpa?
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div>Il y a 10 heures</div>
                            <div>&bull;</div>
                            <div>Catégorie 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 commentaires</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="bg-gray-100 hover:bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full transition duration-150 ease-in text-center w-28 h-7 py-2 px-4">Ouvrir</div>
                        </div>
                        <button class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-2 px-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                              </svg>
                              <ul class="absolute w-44 font-semibold text-xs text-left bg-white shadow-dialog rounded-xl py-3 ml-6">
                                  <li><a href="" class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Marquer comme Spam</a></li>
                                  <li><a href="" class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Supprimer le post</a></li>
                              </ul>
                        </button>
                    </div>
                </div>
            </div>
            {{-- End Right Part --}}
        </div>
        {{-- End Idea Container --}}
        {{-- Idea Container --}}
        <div class="idea-container hover:shadow-card transition duration-150 ease-in bg-white rounded-xl flex cursor-pointer">
            {{-- Left Part --}}
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-500">Votes</div>
                </div>

                <div class="mt-8">
                    <button class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 font-bold text-xxs uppercase rounded-xl px-4 py-3 transition duration-150 ease-in">Vote</button>
                </div>
            </div>
            {{-- End Left Part --}}
            {{-- Right Part --}}
            <div class="flex px-2 py-6">
                <a href="" class="flex-none">
                    <img src="https://gravatar.com/avatar/000000000000000000000000000000000000?d=mp&f=y" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">Un magnifique titre</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis numquam quo libero perferendis odit, dolore voluptate molestias dignissimos sapiente autem quod commodi fugiat cum deserunt sint eligendi ea et magnam? Alias reiciendis unde minus, sapiente rem nobis. Quo sint natus ipsam voluptatibus nulla adipisci pariatur ratione assumenda provident, iste rerum eum praesentium magni aliquam cum nisi dolorem minima, alias, velit doloremque? Est, quasi quae. Exercitationem, atque! Recusandae qui sunt, quasi dolorum, officia velit quod eligendi maiores itaque corrupti vitae explicabo repellat facilis sapiente perferendis sit quae est tempore. Necessitatibus similique voluptatem odit voluptatum minus officiis totam nam ipsa, quo culpa?
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div>Il y a 10 heures</div>
                            <div>&bull;</div>
                            <div>Catégorie 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 commentaires</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="bg-gray-100 hover:bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full transition duration-150 ease-in text-center w-28 h-7 py-2 px-4">Ouvrir</div>
                        </div>
                        <button class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-2 px-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                              </svg>
                              <ul class="absolute w-44 font-semibold text-xs text-left bg-white shadow-dialog rounded-xl py-3 ml-6">
                                  <li><a href="" class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Marquer comme Spam</a></li>
                                  <li><a href="" class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Supprimer le post</a></li>
                              </ul>
                        </button>
                    </div>
                </div>
            </div>
            {{-- End Right Part --}}
        </div>
        {{-- End Idea Container --}}
    </div>
    {{-- End Ideas Container --}}
</x-app-layout>
