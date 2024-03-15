<ul class="navbar-nav">
    <?php //$menus = \App\Models\Menu::all(); ?><!---->
    @foreach($menus as $menu)
        <li class="nav-item">
            <a class="nav-link" href="{{ $menu->slug }}" wire:navigate> {{ $menu->name }} </a>
        </li>
    @endforeach
</ul>
