<style>
    .nav-link {
        display: block !important;
        line-height: normal;
        font-size: .90em;
        padding-top: 10px !important;
        padding-bottom: 10px !important;
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
                <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseDashboards0" aria-expanded="true" aria-controls="collapseDashboards0">
                    <div class="nav-link-icon"><i class="fa fa-industry"></i></div>
                    Production
                    <div class="sidenav-collapse-arrow"><i class="fa fa-angle-down"></i></div>
                </a>
                <div class="collapse show" id="collapseDashboards0" data-bs-parent="#accordionSidenav">
                    <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages">
                        <!-- <?php if (true) { ?>
                                <a class="nav-link" href="<?= base_url(); ?>production/managementTSG">TSG Management</a>
                                <?php } ?> -->
                        <?php if (if_smd_planning()) { ?>
                            <a class="nav-link" href="<?= base_url(); ?>production/planning/smd">SMD Planning</a>
                        <?php } ?>
                        <?php if (if_material_request()) { ?>
                            <a class="nav-link" href="<?= base_url(); ?>production/materialRequest">Material Request</a>
                        <?php } ?>
                        <?php if (if_manage_material_request()) { ?>
                            <a class="nav-link" href="<?= base_url(); ?>production/managementMaterialRequest">Manage Material Request</a>
                        <?php } ?>
                        <?php if (if_production_portal()) { ?>
                            <a class="nav-link" href="<?= base_url(); ?>production/productionPortals">Production Portals</a>
                        <?php } ?>
                        <?php if (if_machine_shelters()) { ?>
                            <a class="nav-link" href="<?= base_url(); ?>production/machineShelters">
                                <div class="row">
                                    <div class="col-2 pe-0">
                                        <i class="fa fa-database"></i>
                                    </div>
                                    <div class="col-10 ps-0">
                                        Machine Shelters
                                    </div>
                                </div>
                            </a>
                            <!-- <a class="nav-link" href="<?= base_url(); ?>production/machineShelters"><i class="fa fa-database me-1"></i>Machine Shelters</a> -->
                        <?php } ?>
                        <!-- <a class="nav-link" href="<?= base_url(); ?>production/manageProduction">
                            <div class="row">
                                <div class="col-2 pe-0">
                                    <i class="fa fa-bar-chart-o"></i>
                                </div>
                                <div class="col-10 ps-0">
                                    Production Workspace
                                </div>
                            </div>
                        </a> -->
                        <?php if (if_rest_absence()) { ?>
                            <a class="nav-link" href="<?= base_url(); ?>production/restAbsence">
                                <div class="row">
                                    <div class="col-2 pe-0">
                                        <i class="fa fa-clock-o"></i>
                                    </div>
                                    <div class="col-10 ps-0">
                                        Break Time
                                    </div>
                                </div>
                            </a>
                        <?php } ?>
                        <!-- <a class="nav-link" href="<?= base_url(); ?>production/productionOutTerminal">
                            <div class="row">
                                <div class="col-2 pe-0">
                                    <i class="fa fa-database"></i>
                                </div>
                                <div class="col-10 ps-0">
                                    Pick Point
                                </div>
                            </div>
                        </a> -->
                        <!-- <a class="nav-link" href="<?= base_url(); ?>production/microWarehouse"><i class="fa fa-database me-1"></i>Micro Warehouse</a> -->
                        <!-- <a class="nav-link" href="<?= base_url(); ?>production/sktPortal"><i class="fa fa-leaf me-1"></i>SKT Portal</a> -->
                        <a class="nav-link" href="<?= base_url(); ?>production/finishGood">Finish Good Handover</a>
                        <a class="nav-link" href="<?= base_url(); ?>production/ShipmentOrder"><i class="fa fa-truck me-1"></i>Shipment Order</a>
                        <a class="nav-link" href="<?= base_url(); ?>production/outgoingShipment"><i class="fa fa-arrow-up me-1"></i>Outgoing Shipment</a>
                        <a class="nav-link" href="<?= base_url(); ?>production/incomingShipment"><i class="fa fa-arrow-down me-1"></i>Incoming Shipment</a>
                    </nav>
                </div>
                <!-- Sidenav Accordion Warehouse-->
                <?php if (if_warehouse()) { ?>
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
                            <?php if (if_stok_gudang()) { ?>
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
                        <!-- <a class="nav-link" href="<?= base_url(); ?>order/purchaseOrder">Request & Order</a> -->
                        <a class="nav-link" href="<?= base_url(); ?>order/managePR">Purchase Requisition (PR) <span class="badge bg-danger ms-2 p-1 pb-0" style="font-size: 7px !important;">NEW</span></a>
                        <?php if (if_po()) { ?>
                            <a class="nav-link" href="<?= base_url(); ?>order/managePO">Purchase Order (PO) <span class="badge bg-danger ms-2 p-1 pb-0" style="font-size: 7px !important;">NEW</span></a>
                        <?php } ?>
                        <?php if (if_payments()) { ?>
                            <!-- <a class="nav-link" href="<?= base_url(); ?>order/payments">Payments</a> -->
                            <a class="nav-link" href="<?= base_url(); ?>order/po_payments">Invoices & Payments <span class="badge bg-danger ms-2 p-1 pb-0" style="font-size: 7px !important;">NEW</span></a>
                        <?php } ?>
                        <?php if (if_transaction()) { ?>
                            <a class="nav-link" href="<?= base_url(); ?>order/transactionSuratJalan">Tracking Surat Jalan <span class="badge bg-danger ms-2 p-1 pb-0" style="font-size: 7px !important;">NEW</span></a>
                            <a class="nav-link" href="<?= base_url(); ?>order/transaction">Transaction</a>
                        <?php } ?>
                        <?php if (if_logistik()) { ?>
                            <!-- <a class="nav-link" href="<?= base_url(); ?>order/logistic">Logistic</a> -->
                            <a class="nav-link" href="<?= base_url(); ?>order/logisticNew">Logistic <span class="badge bg-danger ms-2 p-1 pb-0" style="font-size: 7px !important;">NEW</span></a>
                        <?php } ?>
                    </nav>
                </div>
                <!-- Sidenav Accordion Master-->
                <?php if (if_master()) { ?>
                    <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseDashboards3" aria-expanded="true" aria-controls="collapseDashboards3">
                        <div class="nav-link-icon"><i class="fa fa-file"></i></div>
                        Master
                        <div class="sidenav-collapse-arrow"><i class="fa fa-angle-down"></i></div>
                    </a>
                    <div class="collapse show" id="collapseDashboards3" data-bs-parent="#accordionSidenav3">
                        <nav class="sidenav-menu-nested nav accordion" id="accordionSidenav3Pages">
                            <?php if (if_master_purchasing()) { ?>
                                <a class="nav-link" href="<?= base_url(); ?>master/items">Items</a>
                                <a class="nav-link" href="<?= base_url(); ?>master/supplier">Supplier</a>
                            <?php } ?>
                            <?php if (if_master_production()) { ?>
                                <a class="nav-link" href="<?= base_url(); ?>master/machine">Machine</a>
                                <a class="nav-link" href="<?= base_url(); ?>master/groupMaterial">Group Material</a>
                                <a class="nav-link" href="<?= base_url(); ?>master/wasteGroup">Waste Group</a>
                                <a class="nav-link" href="<?= base_url(); ?>master/billOfMaterial">Bill of Material</a>
                            <?php } ?>
                            <?php if (if_master_fat()) { ?>
                                <a class="nav-link" href="<?= base_url(); ?>master/generalLedger">General Ledger</a>
                            <?php } ?>
                        </nav>
                    </div>
                <?php } ?>

                <!-- Sidenav Accordion Rekap-->
                <?php if (if_rekap()) { ?>
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
                        <?php if (if_report_pr()) { ?>
                            <a class="nav-link" href="<?= base_url(); ?>report/reportPR">Report PR</a>
                        <?php } ?>
                        <?php if (if_report_po()) { ?>
                            <a class="nav-link" href="<?= base_url(); ?>report/reportPO">Report PO</a>
                        <?php } ?>
                        <?php if (if_report_mutasi_gudang()) { ?>
                            <a class="nav-link" href="<?= base_url(); ?>report/reportMutasiGudang">Report Mutasi Gudang</a>
                        <?php } ?>
                        <?php if (if_report_opname()) { ?>
                            <a class="nav-link" href="<?= base_url(); ?>report/reportOpname">Report Opname</a>
                        <?php } ?>
                        <!-- <?php if (if_report_machine()) { ?>
                                        <a class="nav-link" href="<?= base_url(); ?>report/reportMachine">Report Machine</a>
                                        <?php } ?> -->
                        <?php if (if_so_production()) { ?>
                            <a class="nav-link" href="<?= base_url(); ?>production/stockOpnameProduction">Report SO Production</a>
                        <?php } ?>
                        <!-- <?php if (if_report_production()) { ?>
                                                <a class="nav-link" href="<?= base_url(); ?>report/reportProduction">Report Production</a>
                                                <?php } ?> -->
                        <?php if (if_report_result_production()) { ?>
                            <a class="nav-link" href="<?= base_url(); ?>report/reportResultProduction">Report Result Production</a>
                        <?php } ?>
                        <?php if (if_history_po_payment()) { ?>
                            <a class="nav-link" href="<?= base_url(); ?>report/historyPayment">History Payments</a>
                        <?php } ?>
                        <?php if (if_history_material_request()) { ?>
                            <a class="nav-link" href="<?= base_url(); ?>report/historyMaterialRequest">History Material Request</a>
                        <?php } ?>
                        <p class="nav-link m-0 small-text fw-bolder" style="color: #cccccc">Giling</p>
                        <?php if (if_report_production_daily()) { ?>
                            <a class="nav-link" href="<?= base_url(); ?>report/reportProductionDaily">
                                <div class="row">
                                    <div class="col-2 pe-0">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <div class="col-10 ps-0">
                                        Report Production Daily
                                    </div>
                                </div>
                                <!-- <i class="fa fa-calendar me-1"></i>Report Production Daily -->
                            </a>
                        <?php } ?>
                        <?php if (if_report_person_earn()) { ?>
                            <a class="nav-link" href="<?= base_url(); ?>report/reportPersonEarn">
                                <div class="row">
                                    <div class="col-2 pe-0">
                                        <i class="fa fa-dollar"></i>
                                    </div>
                                    <div class="col-10 ps-0">
                                        Report Person Salary
                                    </div>
                                </div>
                                <!-- <i class="fa fa-dollar me-1"></i>Report Person Salary -->
                            </a>
                        <?php } ?>
                        <?php if (if_report_incomplete()) { ?>
                            <!-- <a class="nav-link" href="<?= base_url(); ?>report/reportIncomplete">Report Incomplete</a> -->
                        <?php } ?>
                        <?php if (if_report_production_skt()) { ?>
                            <a class="nav-link" href="<?= base_url(); ?>report/reportProductionGiling">
                                <div class="row">
                                    <div class="col-2 pe-0">
                                        <i class="fa fa-file-pdf-o"></i>
                                    </div>
                                    <div class="col-10 ps-0">
                                        Form Report Giling
                                    </div>
                                </div>
                                <!-- <i class="fa fa-check-circle-o me-1"></i>Report Person Quality -->
                            </a>
                        <?php } ?>
                        <p class="nav-link m-0 small-text fw-bolder" style="color: #cccccc">Verpack</p>
                        <?php if (if_report_production_daily()) { ?>
                            <a class="nav-link" href="<?= base_url(); ?>report/reportProductionDailyVerpack">
                                <div class="row">
                                    <div class="col-2 pe-0">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <div class="col-10 ps-0">
                                        Report Production Daily
                                    </div>
                                </div>
                            </a>
                        <?php } ?>
                        <?php if (if_report_person_earn()) { ?>
                            <a class="nav-link" href="<?= base_url(); ?>report/reportPersonEarnVerpack">
                                <div class="row">
                                    <div class="col-2 pe-0">
                                        <i class="fa fa-dollar"></i>
                                    </div>
                                    <div class="col-10 ps-0">
                                        Report Person Salary
                                    </div>
                                </div>
                            </a>
                        <?php } ?>
                        <p class="nav-link m-0 small-text fw-bolder" style="color: #cccccc">Other</p>
                        <?php if (if_report_production_worker()) { ?>
                            <a class="nav-link" href="<?= base_url(); ?>report/reportProductionWorker">
                                <div class="row">
                                    <div class="col-2 pe-0">
                                        <i class="fa fa-male"></i>
                                    </div>
                                    <div class="col-10 ps-0">
                                        Report Prod.Worker
                                    </div>
                                </div>
                            </a>
                        <?php } ?>
                        <?php if (if_report_person_quality()) { ?>
                            <a class="nav-link" href="<?= base_url(); ?>report/reportPersonQuality">
                                <div class="row">
                                    <div class="col-2 pe-0">
                                        <i class="fa fa-check-circle-o"></i>
                                    </div>
                                    <div class="col-10 ps-0">
                                        Report Person Quality
                                    </div>
                                </div>
                                <!-- <i class="fa fa-check-circle-o me-1"></i>Report Person Quality -->
                            </a>
                        <?php } ?>
                        <?php if (if_report_leave_pass()) { ?>
                            <a class="nav-link" href="<?= base_url(); ?>report/reportLeavePass">
                                <div class="row">
                                    <div class="col-2 pe-0">
                                        <i class="fa fa-coffee"></i>
                                    </div>
                                    <div class="col-10 ps-0">
                                        Report Leave Pass
                                    </div>
                                </div>
                                <!-- <i class="fa fa-check-circle-o me-1"></i>Report Person Quality -->
                            </a>
                        <?php } ?>
                    </nav>
                </div>
                <!-- Sidenav Accordion Raw Data-->
                <?php if (if_extras()) { ?>
                    <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseDashboards6" aria-expanded="true" aria-controls="collapseDashboards6">
                        <div class="nav-link-icon"><i class="fa fa-database"></i></div>
                        Extras
                        <div class="sidenav-collapse-arrow"><i class="fa fa-angle-down"></i></div>
                    </a>
                    <div class="collapse show" id="collapseDashboards6" data-bs-parent="#accordionSidenav5">
                        <nav class="sidenav-menu-nested nav accordion" id="accordionSidenav6Pages">
                            <a class="nav-link" href="<?= base_url(); ?>extra/rawData">Raw Data</a>
                        </nav>
                    </div>
                <?php } ?>
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
    $(document).ready(function() {
        var targetURL = window.location.href
        $("#layoutSidenav_nav .nav-link").removeClass("active");
        $("#layoutSidenav_nav .nav-link").each(function() {
            var href = $(this).attr("href");
            if (href === targetURL) {
                $(this).addClass("active");
            }
        });
    });
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