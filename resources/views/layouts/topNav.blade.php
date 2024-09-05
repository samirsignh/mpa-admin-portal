<style>
    .brand-logo img {
        max-width: 65px;
        border-radius: 50%;
    }

    .hamburger {
        color: #81838f;
        font-size: 25px;
    }

    .brand-title span {
        color: whitesmoke;
        font-size: 1.3rem;
        letter-spacing: 1px;
        text-transform: uppercase;
    }
    .header .header-content{
        padding-right: 0px !important;
    }
</style>
<div class="nav-header">
    <a href="#" class="brand-logo">
        <img src="{{ asset('images/mpa_logo.jpeg') }}" alt="logo">
        <div class="brand-title">
            <span> MPA(GOA)</span>
        </div>
    </a>

    <div class="nav-control">
        <div class="hamburger">
            <i class="fa-solid fa-bars"></i>
        </div>
    </div>
</div>