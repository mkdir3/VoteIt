{{-- Filter --}}
    <nav class="hidden md:flex items-center justify-between text-xs text-gray-400">
         <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
            <li><a wire:click.prevent="setStatus('Toutes')" href="" class="border-b-4 pb-3 hover:border-blue hover:text-blue  @if($status === 'Toutes') border-blue text-gray-900 @endif">TOUTES (87)</a></li>
            <li><a wire:click.prevent="setStatus('En attente')" href="" class="transition duration-150 ease-in border-b-4 pb-3 hover:border-blue hover:text-blue @if($status === 'En attente') border-blue text-gray-900 @endif">EN ATTENTE
                    (6)</a></li>
            <li><a wire:click.prevent="setStatus('En cours')" href="" class="transition duration-150 ease-in border-b-4 pb-3 hover:border-blue hover:text-blue @if($status === 'En cours') border-blue text-gray-900 @endif">EN COURS (1)</a></li>
        </ul>

        <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
            <li><a wire:click.prevent="setStatus('Validé')" href="" class="border-b-4 pb-3 hover:border-blue hover:text-blue  @if($status === 'Validé') border-blue text-gray-900 @endif">VALIDÉ (10)</a></li>
            <li><a wire:click.prevent="setStatus('Fermé')" href="" class="transition duration-150 ease-in border-b-4 pb-3 hover:border-blue hover:text-blue @if($status === 'Fermé') border-blue text-gray-900 @endif">CLÔTURÉE
                    (55)</a></li>
        </ul>
    </nav>
