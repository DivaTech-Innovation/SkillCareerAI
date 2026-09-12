{{-- =====================================================
    NAVBAR SKILLCAREER AI
===================================================== --}}

<nav class="navbar" id="navbar">

    <div class="nav-container">


        {{-- =================================================
            LOGO
        ================================================== --}}

        <a href="{{ url('/') }}" class="logo">
            <span>
                SkillCareer <b>AI</b>
            </span>
        </a>


        {{-- =================================================
            DESKTOP MENU
        ================================================== --}}

        <div class="nav-menu" id="navMenu">


            {{-- BERANDA --}}

            <a href="{{ url('/') }}#home" class="nav-link">
                Beranda
            </a>


            {{-- FITUR --}}

            <a href="{{ url('/') }}#fitur" class="nav-link">
                Fitur
            </a>

            {{-- Roadmap --}}

            <a href="{{ url('/') }}#skill-project" class="nav-link">
                Roadmap
            </a>

            {{-- Journey --}}

            <a href="{{ url('/') }}#mulai" class="nav-link">
                Journey
            </a>


            {{-- FAQ --}}

            <a href="{{ url('/') }}#faq" class="nav-link">
                FAQ
            </a>



            {{-- TENTANG KAMI --}}

            <a href="{{ url('/') }}#tentang" class="nav-link">
                Tentang Kami
            </a>

            <a href="{{ route('community') }}" class="nav-link {{ request()->is('community*') ? 'active' : '' }}">
                Community
            </a>

        </div>



        {{-- =================================================
            RIGHT BUTTON
        ================================================== --}}

        <div class="nav-actions">


            {{-- LOGIN --}}

            <a href="{{ route('login') }}" class="btn-login">
                Login
            </a>


            {{-- MULAI SEKARANG --}}

            <a href="{{ route('register') }}" class="btn-primary nav-start">
                Mulai Sekarang
            </a>

        </div>



        {{-- =================================================
            MOBILE MENU BUTTON
        ================================================== --}}

        <button class="mobile-menu-btn" onclick="toggleMenu()" aria-label="Buka menu">
            ☰
        </button>


    </div>

</nav>



<style>
/* =====================================================
   NAVBAR
===================================================== */

.navbar {

    position: fixed;

    top: 0;
    left: 0;

    width: 100%;

    height: 78px;

    z-index: 9999;

    background:
        rgba(255, 255, 255, .92);

    backdrop-filter:
        blur(18px);

    -webkit-backdrop-filter:
        blur(18px);

    border-bottom:
        1px solid rgba(230, 234, 244, .65);

    transition:
        .3s ease;

}


/* =====================================================
   NAVBAR SAAT SCROLL
===================================================== */

.navbar.scrolled {

    background:
        rgba(255, 255, 255, .97);

    box-shadow:
        0 8px 30px rgba(25, 35, 70, .07);

}


/* =====================================================
   NAV CONTAINER
===================================================== */

.nav-container {

    width:
        min(1450px, calc(100% - 70px));

    height:
        100%;

    margin:
        0 auto;

    display:
        flex;

    align-items:
        center;

    justify-content:
        space-between;

}


/* =====================================================
   LOGO
===================================================== */

.logo {

    display:
        inline-flex;

    align-items:
        center;

    text-decoration:
        none;

    color:
        #172033;

    font-size:
        25px;

    font-weight:
        850;

    letter-spacing:
        -1px;

    white-space:
        nowrap;

}


.logo b {

    color:
        #3155ff;

    font-weight:
        850;

}


/* =====================================================
   DESKTOP MENU
===================================================== */

.nav-menu {

    display:
        flex;

    align-items:
        center;

    gap:
        38px;

    margin-left:
        auto;

    margin-right:
        48px;

}


/* =====================================================
   NAV LINK
===================================================== */

.nav-link {

    position:
        relative;

    display:
        inline-flex;

    align-items:
        center;

    height:
        78px;

    color:
        #374151;

    text-decoration:
        none;

    font-size:
        15px;

    font-weight:
        600;

    white-space:
        nowrap;

    transition:
        color .25s ease;

}


/* =====================================================
   GARIS BAWAH
===================================================== */

.nav-link::after {

    content:
        "";

    position:
        absolute;

    left:
        50%;

    bottom:
        10px;

    width:
        0;

    height:
        3px;

    border-radius:
        999px;

    background:
        linear-gradient(90deg,
            #3155ff,
            #7048ff);

    transform:
        translateX(-50%);

    transition:
        width .28s cubic-bezier(.4, 0, .2, 1);

}


/* =====================================================
   HOVER
===================================================== */

.nav-link:hover {

    color:
        #3155ff;

}


.nav-link:hover::after {

    width:
        100%;

}


/* =====================================================
   ACTIVE
===================================================== */

.nav-link.active {

    color:
        #3155ff;

}


.nav-link.active::after {

    width:
        100%;

}


/* =====================================================
   RIGHT ACTIONS
===================================================== */

.nav-actions {

    display:
        flex;

    align-items:
        center;

    gap:
        14px;

}


/* =====================================================
   LOGIN BUTTON
===================================================== */

.btn-login {

    display:
        inline-flex;

    align-items:
        center;

    justify-content:
        center;

    min-width:
        110px;

    height:
        46px;

    padding:
        0 20px;

    border:
        1px solid #dfe4ee;

    border-radius:
        13px;

    background:
        #ffffff;

    color:
        #3155ff;

    text-decoration:
        none;

    font-size:
        14px;

    font-weight:
        750;

    transition:
        .25s ease;

}


.btn-login:hover {

    border-color:
        #c7d0ff;

    background:
        #f7f8ff;

    transform:
        translateY(-2px);

    box-shadow:
        0 8px 20px rgba(49, 85, 255, .08);

}


/* =====================================================
   PRIMARY BUTTON
===================================================== */

.btn-primary {

    display:
        inline-flex;

    align-items:
        center;

    justify-content:
        center;

    text-decoration:
        none;

}


.nav-start {

    min-width:
        168px;

    height:
        46px;

    padding:
        0 22px;

    border-radius:
        13px;

    background:
        linear-gradient(135deg,
            #3155ff,
            #5b45ff);

    color:
        #ffffff;

    font-size:
        14px;

    font-weight:
        800;

    box-shadow:
        0 10px 25px rgba(49, 85, 255, .20);

    transition:
        .25s ease;

}


.nav-start:hover {

    transform:
        translateY(-2px);

    box-shadow:
        0 14px 30px rgba(49, 85, 255, .28);

}


/* =====================================================
   MOBILE BUTTON
===================================================== */

.mobile-menu-btn {

    display:
        none;

    width:
        42px;

    height:
        42px;

    border:
        1px solid #e1e5ee;

    border-radius:
        10px;

    background:
        #ffffff;

    color:
        #172033;

    font-size:
        21px;

    cursor:
        pointer;

}


/* =====================================================
   MOBILE
===================================================== */

@media (max-width: 1050px) {

    .nav-container {

        width:
            calc(100% - 35px);

    }


    .nav-menu {

        gap:
            22px;

        margin-right:
            25px;

    }


    .nav-link {

        font-size:
            13px;

    }


    .nav-start {

        min-width:
            140px;

    }

}


/* =====================================================
   TABLET / MOBILE
===================================================== */

@media (max-width: 850px) {

    .navbar {

        height:
            70px;

    }


    .nav-container {

        width:
            calc(100% - 30px);

    }


    .nav-menu {

        position:
            absolute;

        top:
            70px;

        left:
            15px;

        right:
            15px;

        display:
            none;

        flex-direction:
            column;

        align-items:
            stretch;

        gap:
            0;

        margin:
            0;

        padding:
            10px;

        border:
            1px solid #e5e9f2;

        border-radius:
            16px;

        background:
            rgba(255, 255, 255, .98);

        box-shadow:
            0 20px 45px rgba(30, 40, 80, .12);

    }


    .nav-menu.show {

        display:
            flex;

    }


    .nav-link {

        height:
            48px;

        padding:
            0 15px;

        border-radius:
            10px;

        font-size:
            14px;

    }


    .nav-link::after {

        left:
            15px;

        bottom:
            7px;

        transform:
            none;

        width:
            0;

    }


    .nav-link:hover::after,
    .nav-link.active::after {

        width:
            calc(100% - 30px);

    }


    .nav-actions {

        display:
            none;

    }


    .mobile-menu-btn {

        display:
            flex;

        align-items:
            center;

        justify-content:
            center;

    }


    .logo {

        font-size:
            22px;

    }

}


/* =====================================================
   SMALL MOBILE
===================================================== */

@media (max-width: 480px) {

    .nav-container {

        width:
            calc(100% - 24px);

    }


    .logo {

        font-size:
            20px;

    }


    .mobile-menu-btn {

        width:
            40px;

        height:
            40px;

    }

}
</style>



<script>
/* =====================================================
   MOBILE MENU
===================================================== */

function toggleMenu() {

    const menu =
        document.querySelector('.nav-menu');

    menu.classList.toggle('show');

}


/* =====================================================
   CLOSE MOBILE MENU
   KETIKA LINK DIKLIK
===================================================== */

document
    .querySelectorAll('.nav-link')
    .forEach(link => {

        link.addEventListener(
            'click',
            function() {

                const menu =
                    document.querySelector('.nav-menu');

                menu.classList.remove('show');

            }
        );

    });


/* =====================================================
   NAVBAR SCROLL EFFECT
===================================================== */

window.addEventListener(
    'scroll',
    function() {

        const navbar =
            document.getElementById('navbar');


        if (window.scrollY > 20) {

            navbar.classList.add('scrolled');

        } else {

            navbar.classList.remove('scrolled');

        }

    }
);
</script>