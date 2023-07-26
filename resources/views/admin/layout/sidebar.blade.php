<aside class="menu-sidebar js-right-sidebar d-block">
    <div class="logo">
        <a href="#">
            <img src="{{ asset('admin/images/logo-blue.png')}}" alt="SarchHolm" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar2">
        <nav class="navbar-sidebar2">
            <ul class="list-unstyled navbar__list">
                <li>
                    <a class="active" href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        <i class="ion-ios-gear-outline"></i>Dashboard
                    </a>
                </li>
                <li>
                    <a href="db-messages.html">
                        <i class="ion-ios-email-outline"></i>Mensagens</a>
                    <span class="inbox-num pending">3</span>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="ion-social-buffer-outline"></i>Imóveis
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">

                        <li>
                            <a href="{{ route('category.index') }}">Categorias</a>
                            {{-- <span class="inbox-num active"></span> --}}
                        </li>
                        <li>
                            <a href="{{ route('imoveis.type.index') }}">Tipo de Imóveis</a>
                            {{-- <span class="inbox-num active"></span> --}}
                        </li>

                    </ul>
                </li>
                <li>
                    <a href="db-bookings.html">
                        <i class="ion-ios-copy-outline"></i>Agendamentos</a>
                </li>
                <li>
                    <a href="db-favourites.html">
                        <i class="ion-ios-heart-outline"></i>Favourite Properties</a>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="ion-ios-star-outline"></i>Property Reviews
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="db-recieve-reviews.html">
                                Recieved Reviews</a>
                            <span class="inbox-num active">6</span>
                        </li>
                        <li>
                            <a href="db-submit-reviews.html">
                                Submitted reviews</a>
                            <span class="inbox-num pending">8</span>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="db-add-listing.html">
                        <i class="ion-ios-plus-outline"></i>Novo Imóvel</a>
                </li>
                <li>
                    <a href="db-my-profile.html">
                        <i class="ion-ios-person-outline"></i>Meu Perfil</a>
                </li>
                <li>
                    <a href="db-invoices.html">
                        <i class="ion-ios-printer-outline"></i>Invoices</a>
                </li>
                <li>
                    <a href="#">
                        <i class="ion-ios-upload-outline"></i>Sair</a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
