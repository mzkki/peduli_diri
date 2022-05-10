

    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                {{-- <div class="text-center"> --}}
                    <img src="https://source.unsplash.com/150x150" class="rounded float-end" alt="...">
                {{-- </div> --}}
            </div>
            <div class="col-sm-9">
                <div class="header">
                    <h3>PEDULI DIRI</h3>
                    <p>Catatan Perjalanan</p>
                </div>
                <div class="link">
                    <nav class="nav">
                        <a class="nav-link nav-first" href="/">Home</a> |
                        <a class="nav-link" href="/history">Catatan Perjalanan</a>|
                        <a class="nav-link" href="#">Isi Data</a>
                    </nav>
                </div>
                
                @yield('main')
                
            </div>
        </div>
    </div>