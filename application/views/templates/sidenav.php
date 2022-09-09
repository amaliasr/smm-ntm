<style>
    .nav-link {
        display: block !important;
        line-height: normal;
        margin: 0rem !important;
        padding: 0rem !important;

        padding-top: 0.35rem !important;
        margin-top: 0.35rem !important;

        padding-bottom: 0.55rem !important;
        margin-bottom: 0.55rem !important;

        padding-left: 0.5rem !important;
        margin-left: 0.5rem !important;

        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
    }

    .nav-sub {
        padding-top: 0.35rem !important;
        margin-top: 0.35rem !important;

        padding-bottom: 0.35rem !important;
        margin-bottom: 0.35rem !important;
    }

    .nav-link-text {
        font-size: .95em;
    }

    .nav-link-text.active {
        font-size: .95em;
        font-weight: 600;
    }

    li.nav-link {
        padding-bottom: 0rem !important;
    }

    .nav-link-wrapper {
        transition: 0.1s;
    }

    li.nav-link:hover:not(.active) {
        color: var(--bs-dark) !important;
    }

    .nav-link-wrapper:hover {
        color: var(--bs-primary) !important;
    }

    .nav-link-wrapper.active {
        font-weight: 600;
        color: var(--bs-primary) !important;
    }

    .nav-link-wrapper.active>.nav-link-icon {
        font-weight: 600;
        color: var(--bs-primary) !important;
    }

    .collapsed>ul {
        visibility: hidden;
        opacity: 0;
        max-height: 0;
    }

    ul {
        margin: 0.75rem, 0;
        padding: 0;
        list-style: none;
        cursor: pointer;
        /* transition: all .3s; */
    }

    ul.sidenav-menu-nested {
        /* padding-top: 0.75rem !important; */
        margin-top: 0.75rem !important;
        padding-left: 0.45rem !important;
        margin-left: 0.45rem !important;
    }
</style>

<div id="layoutSidenav_nav">
    <nav class="sidenav shadow-right sidenav-light">
        <div class="sidenav-menu">
            <div class="nav accordion text-capitalize" id="accordionSidenav">
                <!-- Ini adalah halaman menu -->
                <ul>
                    <li class="sidenav-menu-heading">Core</li>
                    <li class="nav-link" data-bs-toggle="collapse" data-bs-target="#collapseMasters">
                        <div class="nav-link-wrapper">
                            <div class="nav-link-icon float-start"><i data-feather="activity"></i></div>
                            <span class="nav-link-text">Masters</span>
                            <div class="sidenav-collapse-arrow float-end me-3"><i class="fas fa-angle-down"></i></div>
                        </div>
                        <ul class="sidenav-menu-nested nav accordion">
                            <a class="nav-link" href="http://localhost/hr-quiz/management/Master/navigationMenu">Navigation Menu</a>
                            <a class="nav-link" href="http://localhost/hr-quiz/management/Master/employee">Menu</a>
                            <a class="nav-link" href="#!">Default</a>
                            <li class="nav-link" data-bs-toggle="collapse" data-bs-target="#collapseMasters">
                                <div class="nav-link-wrapper">
                                    <span class="nav-link-text">Masters 2</span>
                                    <div class="sidenav-collapse-arrow float-end me-3"><i class="fas fa-angle-down"></i></div>
                                </div>
                                <ul class="sidenav-menu-nested nav accordion">
                                    <a class="nav-link" href="http://localhost/hr-quiz/management/Master/scheduleTest">Jadwal Test</a>
                                    <a class="nav-link" href="#!">Default</a>
                                    <a class="nav-link" href="#!">Default</a>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="sidenav-menu-heading">Core</li>
                    <li class="nav-link" data-bs-toggle="collapse" data-bs-target="#collapseMasters">
                        <div class="nav-link-wrapper">
                            <div class="nav-link-icon float-start"><i data-feather="activity"></i></div>
                            <span class="nav-link-text">Masters</span>
                            <div class="sidenav-collapse-arrow float-end me-3"><i class="fas fa-angle-down"></i></div>
                        </div>
                        <ul class="sidenav-menu-nested nav accordion">
                            <a class="nav-link" href="#!">Navigation Menu</a>
                            <a class="nav-link" href="http://localhost/hr-quiz/management/Master/employee">Menu</a>
                            <a class="nav-link" href="#!">Default</a>
                            <li class="nav-link" data-bs-toggle="collapse" data-bs-target="#collapseMasters">
                                <div class="nav-link-wrapper">
                                    <span class="nav-link-text">Masters 2</span>
                                    <div class="sidenav-collapse-arrow float-end me-3"><i class="fas fa-angle-down"></i></div>
                                </div>
                                <ul class="sidenav-menu-nested nav accordion">
                                    <a class="nav-link" href="http://localhost/hr-quiz/management/Master/scheduleTest">Jadwal Test</a>
                                    <a class="nav-link" href="#!">Default</a>
                                    <a class="nav-link" href="#!">Default</a>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Sidenav Footer-->
        <div class="sidenav-footer">
            <div class="sidenav-footer-content">
                <div class="sidenav-footer-subtitle">Logged in as:</div>
                <div class="sidenav-footer-title">Amalia Safira</div>
            </div>
        </div>
    </nav>
</div>

<script type="text/javascript">
</script>