<nav id="nav-wrap" class="nav-wrap1 twelve columns">
    <ul id="nav">
        <li class="@if($name_route=="users.index") current @endif">
            <a href="{{ route("users.index") }}">Voir les utilisateurs</a>
        </li>
        <li class="@if($name_route=="users.create") current @endif">
            <a href="{{ route("users.create") }}">Créer un utilisateur</a>
        </li>
    </ul>
</nav>