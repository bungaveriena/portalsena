<nav id="navbar" class="navbar">
    <ul>
        <li><a class="nav-link scrollto active" href="/login">General Affair</a></li>
        @foreach($division as $div)
        <li><a class="nav-link scrollto" href="/portal/{{ $div->link}}">{{ $div->name }}</a></li>
        @endforeach
        <!-- <li><a class="nav-link scrollto" href="/sdm">SDM & Umum</a></li>
        <li><a class="nav-link scrollto " href="/keuangan">Keuangan</a></li>
        <li><a class="nav-link scrollto" href="/komersial">Komersial</a></li> -->
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
</nav>