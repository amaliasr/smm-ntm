<?php
// Periksa apakah cookie kunjungan ada
if (isset($_COOKIE['visiting'])) {
    $visits = $_COOKIE['visiting'] + 1;
    setcookie('visiting', $visits, time() + 3600 * 24 * 365); // Perbarui nilai cookie
} else {
    $visits = 1;
    setcookie('visiting', $visits, time() + 3600 * 24 * 365); // Buat cookie baru
}



?>
<style>
    /* @import url("https://fonts.googleapis.com/css2?family=Russo+One&display=swap"); */

    svg {
        /* font-family: "Russo One", sans-serif; */
        width: 100%;
        height: 100%;
    }

    svg text {
        animation: stroke 5s 1 alternate;
        stroke-width: 0;
        font-size: 1rem;
    }

    @keyframes stroke {
        0% {
            fill: rgba(0, 0, 0, 0);
            stroke: rgba(0, 0, 0, 1);
            stroke-dashoffset: 25%;
            stroke-dasharray: 0 50%;
            stroke-width: 1;
        }

        70% {
            fill: rgba(0, 0, 0, 0);
            stroke: rgba(0, 0, 0, 1);
        }

        80% {
            fill: rgba(0, 0, 0, 0);
            stroke: rgba(0, 0, 0, 1);
            stroke-width: 1;
        }

        100% {
            fill: rgba(0, 0, 0, 1);
            stroke: rgba(0, 0, 0, 0);
            stroke-dashoffset: -25%;
            stroke-dasharray: 50% 0;
            stroke-width: 1;
        }
    }

    .topnav .navbar-brand {
        width: 15em;
    }
</style>
<nav class="topnav navbar navbar-expand shadow justify-content-between justify-content-sm-start navbar-light bg-white" id="sidenavAccordion">
    <!-- Sidenav Toggle Button-->
    <button class="btn btn-icon btn-transparent-dark order-1 order-lg-0 me-2 ms-lg-2 me-lg-0" id="sidebarToggle" onclick="toggleNavbarState()"><i data-feather="menu"></i></button>
    <!-- Navbar Brand-->
    <!-- * * Tip * * You can use text or an image for your navbar brand.-->
    <!-- * * * * * * When using an image, we recommend the SVG format.-->
    <!-- * * * * * * Dimensions: Maximum height: 32px, maximum width: 240px-->
    <a class="navbar-brand pe-3 ps-4 ps-lg-2" href="<?= base_url() ?>dashboard" style="color: #CCA922;">
        <div class="wrapper">
            <svg style="height: 3.625rem;">
                <text x="50%" y="50%" dy=".35em" text-anchor="middle">
                    PT. SINAR MAHKOTA MAS
                </text>
            </svg>
        </div>
        <?= $title; ?>
    </a>
    <!-- Navbar Items-->
    <ul class="navbar-nav align-items-center ms-auto">
        <!-- User Dropdown-->
        <li class="nav-item dropdown no-caret dropdown-user me-3 me-lg-4">
            <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="img-fluid" src="<?= base_url('assets/img/illustrations/profiles/profile-2.png') ?>" /></a>
            <div class="dropdown-menu dropdown-menu-end border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownUserImage">
                <h6 class="dropdown-header d-flex align-items-center">
                    <img class="dropdown-user-img" src="<?= base_url('assets/img/illustrations/profiles/profile-2.png') ?>" />
                    <div class="dropdown-user-details">
                        <div class="dropdown-user-details-name" id="name"><?= $this->session->userdata('full_name') ?></div>
                        <div class="dropdown-user-details-email"><?= $this->session->userdata('username') ?></div>
                    </div>
                </h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#!">
                    <div class="dropdown-item-icon"><i data-feather="settings"></i></div>
                    Account
                </a>
                <a class="dropdown-item" href="#!" id="logout">
                    <div class="dropdown-item-icon"><i data-feather="log-out"></i></div>
                    Logout
                </a>
            </div>
        </li>
    </ul>
</nav>

<script>
    var akun = '<?= $this->session->userdata('username') ?>'
    $(document).ready(function() {
        // $('#name').html(sessionStorage.getItem('full_name'))
        cookieTitle()
    })
    $(document).on('click', "#logout", function() {
        var url = '<?= base_url('Auth/logout') ?>'
        window.location.href = url
    })

    function cookieTitle() {
        var titles = '<?= $title ?>'
        var text = titles
        var regex = /<title>(.*?)\s\|/;
        var match = regex.exec(text);
        var dashboard = match[1];
        // inisialisasi array
        if (getCookie('arrayVisited') != 'undefined' && getCookie('arrayVisited') != null) {
            // jika cookie ada isinya
            var dataJson = JSON.parse(getCookie('arrayVisited'))
            var dataFiltered = dataJson.find((v, k) => {
                if (v.name == dashboard && v.akun == akun) return true
            })
            if (!dataFiltered) {
                // jika tidak ada (create)
                dataJson.push({
                    'akun': akun,
                    'name': dashboard,
                    'count': 1,
                    'link': window.location.href
                })
            } else {
                // jika ada (update)
                var index = dataJson.findIndex(function(obj) {
                    return obj.name == dashboard && obj.akun == akun;
                });
                dataJson[index].count = dataJson[index].count + 1
            }
            setCookie('arrayVisited', JSON.stringify(dataJson))
        } else {
            // jika cookie kosongan
            var data = []
            data.push({
                'akun': akun,
                'name': dashboard,
                'count': 1,
                'link': window.location.href
            })
            var dataJson = JSON.stringify(data)
            setCookie('arrayVisited', dataJson)
        }
        // console.log(JSON.parse(getCookie('arrayVisited')))
    }
    // Menyimpan data ke dalam cookie dengan masa berlaku yang panjang
    function setCookie(name, value) {
        var expirationDate = new Date();
        expirationDate.setFullYear(expirationDate.getFullYear() + 10); // Masa berlaku 10 tahun

        var cookie = name + "=" + encodeURIComponent(value) + "; expires=" + expirationDate.toUTCString() + "; path=/";
        document.cookie = cookie;
    }

    // Mengambil nilai dari cookie
    function getCookie(name) {
        var cookies = document.cookie.split(';');
        for (var i = 0; i < cookies.length; i++) {
            var cookie = cookies[i].trim();
            if (cookie.indexOf(name + "=") === 0) {
                return decodeURIComponent(cookie.substring(name.length + 1));
            }
        }
        return null;
    }
</script>