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
    {{-- Idea Container --}}
    <div class="idea-container bg-white rounded-xl flex mt-4">
        {{-- Right Part --}}
        <div class="flex flex-1 px-4 py-6">
            <div class="flex-none">
                <a href="">
                    <img src="https://gravatar.com/avatar/000000000000000000000000000000000000?d=mp&f=y" alt="avatar"
                        class="w-14 h-14 rounded-xl">
                </a>
            </div>

            <div class="w-full mx-4">
                <h4 class="text-xl font-semibold">
                    <a href="#" class="hover:underline">Un magnifique titre</a>
                </h4>
                <div class="text-gray-600 mt-3 line-clamp-3">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis numquam quo libero perferendis odit,
                    dolore voluptate molestias dignissimos sapiente autem quod commodi fugiat cum deserunt sint eligendi
                    ea et magnam? Alias reiciendis unde minus, sapiente rem nobis. Quo sint natus ipsam voluptatibus
                    nulla adipisci pariatur ratione assumenda provident, iste rerum eum praesentium magni aliquam cum
                    nisi dolorem minima, alias, velit doloremque? Est, quasi quae. Exercitationem, atque! Recusandae qui
                    sunt, quasi dolorum, officia velit quod eligendi maiores itaque corrupti vitae explicabo repellat
                    facilis sapiente perferendis sit quae est tempore. Necessitatibus similique voluptatem odit
                    voluptatum minus officiis totam nam ipsa, quo culpa?
                </div>
                <div class="flex items-center justify-between mt-6">
                    <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                        <div class="font-bold text-gray-900">John Doe</div>
                        <div>&bull;</div>
                        <div>Il y a 10 heures</div>
                        <div>&bull;</div>
                        <div>Catégorie 1</div>
                        <div>&bull;</div>
                        <div class="text-gray-900">3 commentaires</div>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div
                            class="bg-gray-100 hover:bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full transition duration-150 ease-in text-center w-28 h-7 py-2 px-4">
                            Ouvrir</div>
                    </div>
                    <button
                        class="relative bg-gray-100 hover:bg-gray-200 border rounded-full h-7 transition duration-150 ease-in py-2 px-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
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
        {{-- End Right Part --}}
    </div>
    {{-- End Idea Container --}}

    {{-- Buttons Container --}}
    <div class="buttons-container flex items-center justify-between mt-6">
        <div class="flex items-center space-x-4 ml-6">
            {{-- Reply Button --}}
            <div class="relative">
                <button type="button"
                    class="flex items-center justify-center h-11 w-32 text-xs bg-blue font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3 text-white">
                    Commenter
                </button>
                {{-- Post Comment --}}
                <div class="absolute z-10 w-104 text-left font-semibold text-sm bg-white shadow-dialog rounded-xl mt-2">
                    <form action="#" class="space-y-4 px-4 py-6">
                        <div>
                            <textarea name="post_comment" id="post_comment" cols="30" rows="4"
                                class="w-full text-xs bg-gray-100 rounded-xl border-none px-4 py-2"
                                placeholder="Allez-y, ne soyez pas timide. Partagez vos pensées..."></textarea>
                        </div>
                        <div class="flex items-center space-x-3">
                            <button type="button"
                                class="flex items-center justify-center h-11 w-1/2 text-xs bg-blue font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3 text-white">
                                Envoyer
                            </button>
                            <button type="button"
                                class="flex items-center justify-center w-32 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 text-gray-600 transform -rotate-45"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                                </svg>
                                <span class="ml-1">Joindre</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            {{-- Set Status Button --}}
            <div class="relative">
                <button type="button"
                    class="flex items-center justify-center w-36 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3">
                    <span class="ml-1">Ajouter un statut</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="absolute z-20 w-76 text-left font-semibold text-sm bg-white shadow-dialog rounded-xl mt-2">
                    <form action="#" class="space-y-4 px-4 py-6">
                        <div class="space-y-2">
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="bg-gray-200 text-gray-600 border-none" name="status" value="1" checked>
                                    <span class="ml-2">Ouvrir</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="bg-gray-200 text-purple border-none" name="status" value="2">
                                    <span class="ml-2">En attente</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="bg-gray-200 text-yellow border-none" name="status" value="3">
                                    <span class="ml-2">En cours</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="bg-gray-200 text-green border-none" name="status" value="3">
                                    <span class="ml-2">Validé</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="bg-gray-200 text-red border-none" name="status" value="3">
                                    <span class="ml-2">Fermé</span>
                                </label>
                            </div>
                        </div>

                        <div>
                            <textarea name="update_comment" id="update_comments" cols="30" rows="3" class="w-full text-xs bg-gray-100 rounded-xl border-none px-4 py-2" placeholder="Ajouter un commentaire (optionnel)"></textarea>
                        </div>

                        <div class="flex items-center justify-between space-x-3">
                            <button
                                type="button"
                                class="flex items-center justify-center w-1/2 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3"
                            >
                                <svg class="text-gray-600 w-4 transform -rotate-45" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                                </svg>
                                <span class="ml-1">Joindre</span>
                            </button>
                            <button
                                type="submit"
                                class="flex items-center justify-center w-1/2 h-11 text-xs bg-blue text-white font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3"
                            >
                                <span class="ml-1">Mettre à jour</span>
                            </button>
                        </div>

                        <div>
                            <label class="font-normal inline-flex items-center">
                                <input type="checkbox" name="notify_voters" class="rounded bg-gray-200" checked="">
                                <span class="ml-2">Notifier les votants</span>
                            </label>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        {{-- Votes --}}
        <div class="flex items-center space-x-3">
            <div class="bg-white font-semibold text-center rounded-xl px-3 py-2">
                <div class="text-xl leading-snug">12</div>
                <div class="text-gray-400 text-xs leading-none">Votes</div>
            </div>
            <button type="button"
                class="w-36 h-11 text-xs bg-gray-200 font-semibold uppercase rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3">
                <span class="ml-1">Votez</span>
            </button>
        </div>
    </div>
    {{-- End Buttons Container --}}

    {{-- Comments Container --}}
    <div class="comments-container relative space-y-6 ml-22 my-8 mt-1 pt-4">
        {{-- Comment User Container --}}
        <div class="comment-container relative  bg-white rounded-xl flex mt-4">
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
