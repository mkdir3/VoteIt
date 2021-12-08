<x-app-layout>
    <div>
        <a href="/" class="flex items-center font-semibold hover:underline">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            <span class="ml-2">Toutes les idées</span>
        </a>
    </div>

    <livewire:idea-show :idea="$idea" :votesCount="$votesCount" />

    {{-- Comments Container --}}
    <div class="comments-container relative space-y-6 md:ml-22 my-8 mt-1 pt-4">
        {{-- Comment User Container --}}
        <div class="comment-container relative  bg-white rounded-xl flex mt-4">
            <div class="flex flex-col md:flex-row flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="">
                        <img src="https://gravatar.com/avatar/000000000000000000000000000000000000?d=mp&f=y"
                            alt="avatar" class="w-14 h-14 rounded-xl">
                    </a>
                </div>

                <div class="w-full md:mx-4">
                    {{-- <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">Un magnifique titre</a>
                    </h4> --}}
                    <div class="text-gray-600 text-xs mt-2 md:mt-0">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis numquam quo libero perferendis
                        odit.
                    </div>
                    <div x-data="{ isOpen: false }" class="flex items-center justify-between mt-4">
                        <div class="flex items-center text-xxs text-gray-400 font-semibold space-x-2">
                            <div class="font-bold text-gray-900">John Doe</div>
                            <div>&bull;</div>
                            <div>Il y a 10 heures</div>
                        </div>
                        <div class="flex items-center space-x-2">
                        </div>
                        <button @click="isOpen = !isOpen"
                            class="relative bg-gray-100 hover:bg-gray-200 border rounded-full h-7 transition duration-150 ease-in py-2 px-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                            </svg>
                            <ul x-cloak x-show.transition.origin.top.left.duration.500ms="isOpen"
                                @click.away="isOpen= false" @keydown.escape.window="isOpen = false"
                                class="absolute w-44 font-semibold text-xs text-left bg-white shadow-dialog rounded-xl py-3 ml-6 z-10 md:ml-6 top-8 md:top-6 right-0 md-left-0">
                                <li><a href=""
                                        class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Marquer
                                        comme Spam</a></li>
                                <li><a href=""
                                        class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Supprimer
                                        le post</a></li>
                            </ul>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Comment User Container --}}

        {{-- Comment Admin Container --}}
        <div class="is-admin comment-container relative bg-white rounded-xl flex mt-4">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="">
                        <img src="https://gravatar.com/avatar/000000000000000000000000000000000000?d=mp&f=y"
                            alt="avatar" class="w-14 h-14 rounded-xl">
                    </a>
                    <div class="text-center uppercase text-blue text-xxs font-bold mt-2">Admin</div>
                </div>

                <div class="w-full mx-4">
                    <h4 class="text-md font-semibold">
                        Statut passé "En Cours"
                    </h4>
                    <div class="text-gray-600 text-xs mt-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis numquam quo libero perferendis
                        odit.
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <div class="flex items-center text-xxs text-gray-400 font-semibold space-x-2">
                            <div class="font-bold text-blue">Andrea</div>
                            <div>&bull;</div>
                            <div>Il y a 10 heures</div>
                        </div>
                        <div class="flex items-center space-x-2">
                        </div>
                        <button
                            class="relative bg-gray-100 hover:bg-gray-200 border rounded-full h-7 transition duration-150 ease-in py-2 px-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                            </svg>
                            <ul
                                class="absolute hidden w-44 font-semibold text-xs text-left bg-white shadow-dialog rounded-xl py-3 ml-6">
                                <li><a href=""
                                        class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Marquer
                                        comme Spam</a></li>
                                <li><a href=""
                                        class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Supprimer
                                        le post</a></li>
                            </ul>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Comment Admin Container --}}

        {{-- Comment User Container --}}
        <div class="comment-container relative bg-white rounded-xl flex mt-4">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="">
                        <img src="https://gravatar.com/avatar/000000000000000000000000000000000000?d=mp&f=y"
                            alt="avatar" class="w-14 h-14 rounded-xl">
                    </a>
                </div>

                <div class="w-full mx-4">
                    {{-- <h4 class="text-xl font-semibold">
                                <a href="#" class="hover:underline">Un magnifique titre</a>
                            </h4> --}}
                    <div class="text-gray-600 text-xs {{-- mt-3 --}}">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis numquam quo libero perferendis
                        odit.
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <div class="flex items-center text-xxs text-gray-400 font-semibold space-x-2">
                            <div class="font-bold text-gray-900">John Doe</div>
                            <div>&bull;</div>
                            <div>Il y a 10 heures</div>
                        </div>
                        <div class="flex items-center space-x-2">
                        </div>
                        <button
                            class="relative bg-gray-100 hover:bg-gray-200 border rounded-full h-7 transition duration-150 ease-in py-2 px-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                            </svg>
                            <ul
                                class="absolute hidden w-44 font-semibold text-xs text-left bg-white shadow-dialog rounded-xl py-3 ml-6">
                                <li><a href=""
                                        class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Marquer
                                        comme Spam</a></li>
                                <li><a href=""
                                        class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Supprimer
                                        le post</a></li>
                            </ul>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Comment User Container --}}
    </div>
    {{-- End Comments Container --}}
</x-app-layout>
