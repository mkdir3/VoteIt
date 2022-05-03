{{-- Filter --}}
<nav class="hidden items-center justify-between text-xs text-gray-400 md:flex">
    <ul class="flex space-x-10 border-b-4 pb-3 font-semibold uppercase">
        <li><a wire:click.prevent="setStatus('Toutes')" href=""
                class="hover:border-blue hover:text-blue @if ($status === 'Toutes') border-blue text-gray-900 @endif border-b-4 pb-3">TOUTES
                ({{ $statusCount['all_statuses'] }})</a></li>
        <li><a wire:click.prevent="setStatus('En attente')" href=""
                class="hover:border-blue hover:text-blue @if ($status === 'En attente') border-blue text-gray-900 @endif border-b-4 pb-3 transition duration-150 ease-in">EN
                ATTENTE
                ({{ $statusCount['open'] }})</a></li>
        <li><a wire:click.prevent="setStatus('En cours')" href=""
                class="hover:border-blue hover:text-blue @if ($status === 'En cours') border-blue text-gray-900 @endif border-b-4 pb-3 transition duration-150 ease-in">EN
                COURS ({{ $statusCount['considering'] }})</a></li>
    </ul>

    <ul class="flex space-x-10 border-b-4 pb-3 font-semibold uppercase">
        <li><a wire:click.prevent="setStatus('Validé')" href=""
                class="hover:border-blue hover:text-blue @if ($status === 'Validé') border-blue text-gray-900 @endif border-b-4 pb-3">VALIDÉ
                ({{ $statusCount['implemented'] }})</a></li>
        <li><a wire:click.prevent="setStatus('Fermé')" href=""
                class="hover:border-blue hover:text-blue @if ($status === 'Fermé') border-blue text-gray-900 @endif border-b-4 pb-3 transition duration-150 ease-in">CLÔTURÉE
                ({{ $statusCount['closed'] }})</a></li>
    </ul>
</nav>
