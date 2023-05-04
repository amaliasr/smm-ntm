<style>
    .nav-link {
        display: block !important;
        line-height: normal;
        /* margin: 0rem !important;
        padding: 0rem !important;

        padding-top: 0.35rem !important;
        margin-top: 0.35rem !important;

        padding-bottom: 0.55rem !important;
        margin-bottom: 0.55rem !important;

        padding-left: 0.5rem !important;
        margin-left: 0.5rem !important; */

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
                <div class="sidenav-menu-heading">Main Menu</div>
                <a class="nav-link" href="<?= base_url(); ?>">
                    <div class="nav-link-icon"><i class="fa fa-home"></i></div>
                    Beranda
                </a>
                <!-- Sidenav Accordion Production-->
                <?php if (job_spv_smd() || job_foreman() || job_logistik_warehouse() || job_supply_sparepart()) { ?>
                    <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseDashboards0" aria-expanded="true" aria-controls="collapseDashboards0">
                        <div class="nav-link-icon"><i class="fa fa-industry"></i></div>
                        Production
                        <div class="sidenav-collapse-arrow"><i class="fa fa-angle-down"></i></div>
                    </a>
                    <div class="collapse show" id="collapseDashboards0" data-bs-parent="#accordionSidenav">
                        <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages">
                            <?php if (job_spv_smd() || job_foreman() || job_supply_sparepart()) { ?>
                                <a class="nav-link" href="<?= base_url(); ?>production/planning/smd">SMD Planning</a>
                            <?php } ?>
                            <?php if (job_spv_smd() || job_foreman() || job_supply_sparepart() || job_logistik_warehouse()) { ?>
                                <a class="nav-link" href="<?= base_url(); ?>production/materialRequest">Material Request</a>
                            <?php } ?>
                            <?php if (job_logistik_warehouse() || job_foreman() || job_supply_sparepart() || job_spv_smd()) { ?>
                                <a class="nav-link" href="<?= base_url(); ?>production/managementMaterialRequest">Manage Material Request</a>
                            <?php } ?>
                        </nav>
                    </div>
                <?php } ?>
                <!-- Sidenav Accordion Warehouse-->
                <?php if (is_logistik()) { ?>
                    <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseDashboards1" aria-expanded="true" aria-controls="collapseDashboards1">
                        <div class="nav-link-icon"><i class="fa fa-cubes"></i></div>
                        Warehouse
                        <div class="sidenav-collapse-arrow"><i class="fa fa-angle-down"></i></div>
                    </a>
                    <div class="collapse show" id="collapseDashboards1" data-bs-parent="#accordionSidenav">
                        <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages">
                            <!-- <a class="nav-link" href="<?= base_url(); ?>warehouse">Cek Gudang</a> -->
                            <!-- <a class="nav-link" href="<?= base_url(); ?>warehouse/materialRequest">Material Request</a> -->
                            <!-- <a class="nav-link" href="<?= base_url(); ?>production/managementWarehouse">Manage Warehouse</a> -->
                            <?php if (is_logistik()) { ?>
                                <a class="nav-link" href="<?= base_url(); ?>warehouse/kelolaStok">Stok Gudang</a>
                                <a class="nav-link" href="<?= base_url(); ?>warehouse/opname">Opname</a>
                            <?php } ?>
                        </nav>
                    </div>
                <?php } ?>
                <!-- Sidenav Accordion Order-->
                <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseDashboards2" aria-expanded="true" aria-controls="collapseDashboards2">
                    <div class="nav-link-icon"><i class="fa fa-truck"></i></div>
                    Order
                    <div class="sidenav-collapse-arrow"><i class="fa fa-angle-down"></i></div>
                </a>
                <div class="collapse show" id="collapseDashboards2" data-bs-parent="#accordionSidenav2">
                    <nav class="sidenav-menu-nested nav accordion" id="accordionSidenav2Pages">
                        <a class="nav-link" href="<?= base_url(); ?>order/purchaseOrder">Request & Order</a>
                        <?php if (is_accounting() || is_fat()) { ?>
                            <a class="nav-link" href="<?= base_url(); ?>order/payments">Payments</a>
                        <?php } ?>
                        <?php if (is_purchasing() || is_direktur()) { ?>
                            <a class="nav-link" href="<?= base_url(); ?>order/transaction">Transaction</a>
                        <?php } ?>
                        <?php if (is_logistik()) { ?>
                            <a class="nav-link" href="<?= base_url(); ?>order/logistic">Logistic</a>
                        <?php } ?>
                    </nav>
                </div>
                <!-- Sidenav Accordion Master-->
                <?php if (is_purchasing() || is_direktur()) { ?>
                    <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseDashboards3" aria-expanded="true" aria-controls="collapseDashboards3">
                        <div class="nav-link-icon"><i class="fa fa-file"></i></div>
                        Master
                        <div class="sidenav-collapse-arrow"><i class="fa fa-angle-down"></i></div>
                    </a>
                    <div class="collapse show" id="collapseDashboards3" data-bs-parent="#accordionSidenav3">
                        <nav class="sidenav-menu-nested nav accordion" id="accordionSidenav3Pages">
                            <a class="nav-link" href="<?= base_url(); ?>master/items">Items</a>
                            <a class="nav-link" href="<?= base_url(); ?>master/supplier">Supplier</a>
                        </nav>
                    </div>
                <?php } ?>

                <!-- Sidenav Accordion Rekap-->
                <?php if (is_accounting() || is_direktur() || is_purchasing()) { ?>
                    <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseDashboards5" aria-expanded="true" aria-controls="collapseDashboards5">
                        <div class="nav-link-icon"><i class="fa fa-table"></i></div>
                        Rekap
                        <div class="sidenav-collapse-arrow"><i class="fa fa-angle-down"></i></div>
                    </a>
                    <div class="collapse show" id="collapseDashboards5" data-bs-parent="#accordionSidenav5">
                        <nav class="sidenav-menu-nested nav accordion" id="accordionSidenav5Pages">
                            <a class="nav-link" href="<?= base_url(); ?>rekap/rekapPO">Rekap PO</a>
                        </nav>
                    </div>
                <?php } ?>
                <!-- Sidenav Accordion Report-->
                <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseDashboards4" aria-expanded="true" aria-controls="collapseDashboards4">
                    <div class="nav-link-icon"><i class="fa fa-book"></i></div>
                    Report
                    <div class="sidenav-collapse-arrow"><i class="fa fa-angle-down"></i></div>
                </a>
                <div class="collapse show" id="collapseDashboards4" data-bs-parent="#accordionSidenav4">
                    <nav class="sidenav-menu-nested nav accordion" id="accordionSidenav4Pages">
                        <?php if (is_accounting() || is_direktur() || is_purchasing()) { ?>
                            <a class="nav-link" href="<?= base_url(); ?>report/reportPO">Report PO</a>
                        <?php } ?>
                        <?php if (is_accounting() || is_direktur() || is_logistik() || is_purchasing()) { ?>
                            <a class="nav-link" href="<?= base_url(); ?>report/reportMutasiGudang">Report Mutasi Gudang</a>
                        <?php } ?>
                        <?php if (is_accounting() || is_direktur() || is_logistik() || is_purchasing()) { ?>
                            <a class="nav-link" href="<?= base_url(); ?>report/reportOpname">Report Opname</a>
                        <?php } ?>
                        <?php if (job_logistik_warehouse() || job_foreman() || job_spv_smd() || job_supply_sparepart()) { ?>
                            <a class="nav-link" href="<?= base_url(); ?>report/reportMachine">Report Machine</a>
                        <?php } ?>
                    </nav>
                </div>
                <!-- <a class="nav-link" href="<?= base_url(); ?>report">
                    <div class="nav-link-icon"><i class="fa fa-book"></i></div>
                    Report
                </a> -->
            </div>
        </div>
        <!-- Sidenav Footer-->
        <div class="sidenav-footer">
            <div class="sidenav-footer-content">
                <div class="row">
                    <div class="col-3 align-self-center text-center">
                        <img src="<?= base_url() ?>assets/image/gif/astronaut-1.svg" style="width: 50px;">
                    </div>
                    <div class="col-9 align-self-center">
                        <div class="sidenav-footer-subtitle">Logged in as:</div>
                        <div class="sidenav-footer-title lh-1"><?= $this->session->userdata('full_name') ?></div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>

<script type="text/javascript">
    // $(document).ready(loadMenu);

    // function loadActiveMenu() {
    //     var url = window.location.href;
    //     $('.nav-link').find('a').each(function() {
    //         var anchor = $(this).attr('href')
    //         if (anchor == url) {
    //             $(this).parents().children('li.nav-link div.nav-link-wrapper').addClass('active');
    //             $(this).addClass('active');
    //             $(this).parents().closest('li.nav-link').removeClass('collapsed');
    //         }
    //     });

    //     setupBreadcrumb();
    // }

    // function clearSidenav() {
    //     $('#accordionSidenav').html('');
    // }

    // function loadMenu() {
    //     clearSidenav();

    //     var restURL = api_assesment_url + "getMenu";

    //     $.ajax({
    //         type: "GET",
    //         url: restURL,
    //         headers: {
    //             'Authorization': authKey
    //         },
    //         data: {
    //             userId: 1,
    //             isActive: [1]
    //         },
    //         error: function(xhr, status, error) {
    //             var myErrText = error ? error : "Tidak Terhubung ke Server"
    //             toast('error', 'Kode ' + xhr.status + ' - ' + myErrText);
    //         },
    //         success: function(data) {
    //             data = JSON.parse(data['data']);
    //             console.log(data);
    //             menu(document.getElementById("accordionSidenav"), data);
    //             feather.replace();
    //         }
    //     }).done(function() {
    //         loadActiveMenu();
    //     })

    //     return false;
    // }

    // var html = '';

    // function menu(container, menu) {
    //     if (!menu || !menu.length) return;
    //     const ul = document.createElement("ul");
    //     for (const {
    //             id,
    //             parent_id,
    //             icon,
    //             url,
    //             category,
    //             title,
    //             submenu
    //         } of menu) {

    //         const li = document.createElement("li");
    //         if (submenu) {
    //             if (category == "HEADER") {
    //                 li.textContent = title;
    //                 li.className = "sidenav-menu-heading";
    //             } else {
    //                 if (category == "DROPDOWN MENU" && parent_id == 0) {
    //                     li.className = "nav-link collapsed";
    //                     li.innerHTML = '<div class="nav-link-wrapper" onclick="toggleDropdown(this)"><div class="nav-link-icon float-start"><i data-feather="' + icon + '"></i></div><span class="nav-link-text">' + title + '</span><div class="sidenav-collapse-arrow float-end me-3"><i class="fas fa-angle-down"></i></div></div>';

    //                     li.addEventListener("click", (e) => {
    //                         if (e.target !== e.currentTarget) return;
    //                         // e.target.classList.toggle("expanded");
    //                         e.target.classList.toggle("collapsed");
    //                     });
    //                 } else if (category == "DROPDOWN MENU" && parent_id != 0) {
    //                     ul.className = "sidenav-menu-nested nav accordion";
    //                     li.className = "nav-link collapsed nav-sub";
    //                     li.innerHTML = '<div class="nav-link-wrapper" onclick="toggleDropdown(this)"><span class="nav-link-text">' + title + '</span><div class="sidenav-collapse-arrow float-end me-3"><i class="fas fa-angle-down"></i></div></div>';

    //                     li.addEventListener("click", (e) => {
    //                         if (e.target !== e.currentTarget) return;
    //                         // e.target.classList.toggle("expanded");
    //                         e.target.classList.toggle("collapsed");
    //                     });
    //                 } else if (category == "SUB MENU") {
    //                     ul.className = "sidenav-menu-nested nav accordion";
    //                     // li.className = "nav-link";
    //                     li.innerHTML = '<a class="nav-link nav-sub" href="' + url + '"><span class="nav-link-text">' + title + '</span></a>';
    //                 } else if (category == "SINGLE MENU") {
    //                     li.className = "nav-link";
    //                     li.innerHTML = '<div class="nav-link-wrapper"><div class="nav-link-icon float-start"><i data-feather="' + icon + '"></i></div><span class="nav-link-text">' + title + '</span></div>';
    //                 } else {
    //                     // li.className = "nav-link";
    //                     if (parent_id != 0) {
    //                         li.innerHTML = '<a class="nav-link nav-sub" href="' + url + '"><span class="nav-link-text">' + title + '</span></a>';
    //                     } else {
    //                         li.innerHTML = '<a class="nav-link" href="' + url + '"><span class="nav-link-text">' + title + '</span></a>';
    //                     }
    //                 }
    //             }
    //             this.menu(li, submenu);
    //         }
    //         ul.appendChild(li);
    //     }
    //     container.appendChild(ul);
    // }

    // function toggleDropdown(state) {
    //     $(state).closest('.nav-link').toggleClass('collapsed');
    // }
</script>