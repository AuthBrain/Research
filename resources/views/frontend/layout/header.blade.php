<header>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('allJournals') }}">ScienceDirect</a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <div class="custom-toggler-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-book icon-spacing"></i> Journals & Books
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-question-circle icon-spacing"></i> Help
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link search-toggle" href="#">
                            <i class="fas fa-search icon-spacing"></i> Search
                        </a>
                        <div class="custom-search-box">
                            <input type="text" class="custom-search-input" placeholder="Search...">
                            <button type="submit" class="custom-search-submit">Go</button>
                            <button class="custom-search-cancel"><i class="fas fa-times"></i></button>
                        </div>

                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-user icon-spacing"></i> My account
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('signIn') }}">
                            <i class="fas fa-sign-in-alt icon-spacing"></i> Sign in
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
