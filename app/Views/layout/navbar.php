<nav class="navbar navbar-light bg-light z-index">
    <div class="container-fluid mt-2">
        <span class="navbar-brand mb-0 h1 float-start">Inventaris</span>

        <div class="float-end">
            <a href="/logout" class="text-decoration-none">
                <img src="/icon/logout.svg" class="icon" alt="logout">
                <span class="navbar-brand mb-0 h1">Logout</span>
            </a>
        </div>
    </div>
</nav>
<nav class="navbar navbar-light bg-light z-index">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
            aria-controls="offcanvasExample">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>
<div class="offcanvas offcanvas-start mt-6" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-body">
        <div class="dropdown mt-3">
            <ul>
                <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
            </ul>
            <ul>
                <li><a class="dropdown-item" href="/supplier">Supplier</a></li>
            </ul>
            <ul>
                <li><a class="dropdown-item" href="/barangMasuk">Barang Masuk</a></li>
            </ul>
            <ul>
                <li><a class="dropdown-item" href="/logBarang">Log Barang</a></li>
            </ul>
        </div>
    </div>
</div>