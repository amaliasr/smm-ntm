<style type="text/css">
    .cf:after {
        visibility: hidden;
        display: block;
        font-size: 0;
        content: " ";
        clear: both;
        height: 0;
    }

    * html .cf {
        zoom: 1;
    }

    *:first-child+html .cf {
        zoom: 1;
    }

    html {
        margin: 0;
        padding: 0;
    }

    body {
        font-size: 100%;
        margin: 0;
        font-family: 'Helvetica Neue', Arial, sans-serif;
    }

    h1 {
        font-size: 1.75em;
        margin: 0 0 0.6em 0;
    }

    a {
        color: #2996cc;
    }

    a:hover {
        text-decoration: none;
    }

    p {
        line-height: 1.5em;
    }

    .small {
        color: #666;
        font-size: 0.875em;
    }

    .large {
        font-size: 1.25em;
    }

    /**
 * Nestable
 */

    .dd {
        position: relative;
        display: block;
        margin: 0;
        padding: 0;
        /* max-width: 600px; */
        list-style: none;
        font-size: 13px;
        line-height: 20px;
    }

    .dd-list {
        display: block;
        position: relative;
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .dd-list .dd-list {
        padding-left: 30px;
    }

    .dd-collapsed .dd-list {
        display: none;
    }

    .dd-item,
    .dd-empty,
    .dd-placeholder {
        display: block;
        position: relative;
        margin: 0;
        padding: 0;
        min-height: 20px;
        font-size: 13px;
        line-height: 20px;
    }

    .dd-handle {
        display: block;
        height: 30px;
        margin: 5px 0;
        padding: 5px 10px;
        color: #333;
        text-decoration: none;
        font-weight: bold;
        border: 1px solid #ccc;
        background: #fcfcfc;
        /* background: -webkit-linear-gradient(top, #fafafa 0%, #eee 100%);
        background: -moz-linear-gradient(top, #fafafa 0%, #eee 100%);
        background: linear-gradient(top, #fafafa 0%, #eee 100%); */
        -webkit-border-radius: 3px;
        border-radius: 3px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }

    .dd-handle:hover {
        color: var(--bs-primary);
        background: #fff;
    }

    .dd-item>button {
        display: block;
        position: relative;
        cursor: pointer;
        float: left;
        width: 25px;
        height: 20px;
        margin: 5px 0;
        padding: 0;
        text-indent: 100%;
        white-space: nowrap;
        overflow: hidden;
        border: 0;
        background: transparent;
        font-size: 12px;
        line-height: 1;
        text-align: center;
        font-weight: bold;
    }

    .dd-item>button:before {
        content: '+';
        display: block;
        position: absolute;
        width: 100%;
        text-align: center;
        text-indent: 0;
    }

    .dd-item>button[data-action="collapse"]:before {
        content: '-';
    }

    .dd-placeholder,
    .dd-empty {
        margin: 5px 0;
        padding: 0;
        min-height: 30px;
        background: #f2fbff;
        border: 1px dashed #b6bcbf;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }

    .dd-empty {
        border: 1px dashed #bbb;
        min-height: 100px;
        background-color: #e5e5e5;
        background-image: -webkit-linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff),
            -webkit-linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff);
        background-image: -moz-linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff),
            -moz-linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff);
        background-image: linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff),
            linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff);
        background-size: 60px 60px;
        background-position: 0 0, 30px 30px;
    }

    .dd-dragel {
        position: absolute;
        pointer-events: none;
        z-index: 9999;
    }

    .dd-dragel>.dd-item .dd-handle {
        margin-top: 0;
    }

    .dd-dragel .dd-handle {
        -webkit-box-shadow: 2px 4px 6px 0 rgba(0, 0, 0, .1);
        box-shadow: 2px 4px 6px 0 rgba(0, 0, 0, .1);
    }

    /**
 * Nestable Extras
 */

    .nestable-lists {
        display: block;
        clear: both;
        padding: 30px 0;
        width: 100%;
        border: 0;
        border-top: 2px solid #ddd;
        border-bottom: 2px solid #ddd;
    }

    #nestable-menu {
        padding: 0;
        margin: 20px 0;
    }

    #nestable-output,
    #nestable2-output {
        width: 100%;
        height: 7em;
        font-size: 0.75em;
        line-height: 1.333333em;
        font-family: Consolas, monospace;
        padding: 5px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }

    #nestable2 .dd-handle {
        color: #fff;
        border: 1px solid #999;
        background: #bbb;
        background: -webkit-linear-gradient(top, #bbb 0%, #999 100%);
        background: -moz-linear-gradient(top, #bbb 0%, #999 100%);
        background: linear-gradient(top, #bbb 0%, #999 100%);
    }

    #nestable2 .dd-handle:hover {
        background: #bbb;
    }

    #nestable2 .dd-item>button:before {
        color: #fff;
    }

    .dd-hover>.dd-handle {
        background: var(--bs-primary) !important;
    }

    /**
 * Nestable Draggable Handles
 */

    .dd3-content {
        display: block;
        height: 30px;
        margin: 5px 0;
        padding: 5px 10px 5px 40px;
        color: #333;
        text-decoration: none;
        font-weight: bold;
        border: 1px solid #ccc;
        background: #fafafa;
        background: -webkit-linear-gradient(top, #fafafa 0%, #eee 100%);
        background: -moz-linear-gradient(top, #fafafa 0%, #eee 100%);
        background: linear-gradient(top, #fafafa 0%, #eee 100%);
        -webkit-border-radius: 3px;
        border-radius: 3px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }

    .dd3-content:hover {
        color: var(--bs-primary);
        background: #fff;
    }

    .dd-dragel>.dd3-item>.dd3-content {
        margin: 0;
    }

    .dd3-item>button {
        margin-left: 30px;
    }

    .dd3-handle {
        position: absolute;
        margin: 0;
        left: 0;
        top: 0;
        cursor: pointer;
        width: 30px;
        text-indent: 100%;
        white-space: nowrap;
        overflow: hidden;
        border: 1px solid #aaa;
        background: #ddd;
        background: -webkit-linear-gradient(top, #ddd 0%, #bbb 100%);
        background: -moz-linear-gradient(top, #ddd 0%, #bbb 100%);
        background: linear-gradient(top, #ddd 0%, #bbb 100%);
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
    }

    .dd3-handle:before {
        content: '≡';
        display: block;
        position: absolute;
        left: 0;
        top: 3px;
        width: 100%;
        text-align: center;
        text-indent: 0;
        color: #fff;
        font-size: 20px;
        font-weight: normal;
    }

    .dd3-handle:hover {
        background: #ddd;
    }
</style>

<main>
    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
        <div class="container-xl px-4">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i data-feather="menu"></i></div>
                            Menu Navigasi
                        </h1>
                        <div class="page-header-subtitle">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</div>
                    </div>
                </div>
                <nav class="mt-4 rounded" aria-label="breadcrumb">
                    <ol class="breadcrumb px-3 py-2 rounded mb-0">
                        <li class="breadcrumb-item"><a href="#">...</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </header>
    <!-- Main page content-->
    <div class="container-xl px-4 mt-n10">
        <div class="card card-header-actions">
            <div class="card-header">
                Manajemen Menu Navigasi
                <div class="float-end">
                    <button class="btn btn-primary btn-sm" id="btn-add"><i data-feather="plus"></i>Tambah</button>
                </div>
            </div>
            <div class="card-body">
                <div class="dd col-12" id="nestable">
                </div>

                <div class="pt-2">
                    <button class="btn btn-secondary btn-sm float-end"><i data-feather="check"></i> Simpan</button>
                </div>
            </div>
        </div>
    </div>
</main>

<?php $this->load->view('components/modal_static') ?>

<script>
    var modal = new bootstrap.Modal($('#modal'));

    const btnAdd = $('#btn-add');
    btnAdd.on('click', event => {
        var dialog = $('.modal-dialog');

        // large modal
        dialog.addClass("modal-lg");

        var title = '';
        title += 'Tambah Menu';
        $('#modal-title').html(title);

        var body = '';
        body += '<form class="requires-validation" novalidate>';
        body += '<div class="mb-3">';
        body += '<div class="row">';

        body += '<div class="col-md-10">';
        body += '<div class="form-group">';
        body += '<label for="title">Judul <sup class="text-danger">*</sup></label>';
        body += '<input class="form-control form-control-solid form-control-sm" type="text" id="title" placeholder="Pegawai" required>';
        body += '</div>';
        body += '</div>';

        body += '<div class="col-md-2 d-flex justify-content-start justify-content-md-center align-items-center mt-md-4">';
        body += '<div class="form-check">';
        body += '<label for="isHeader">Header</label>';
        body += '<input class="form-check-input form-check-sm" type="checkbox" id="isHeader">';
        body += '</div>';
        body += '</div>';

        body += '<div class="col-12 mt-3">';
        body += '<div class="form-group">';
        body += '<label for="url">URL <sup class="text-danger">*</sup></label>';
        body += '<div class="input-group">'
        body += '<input autocomplete="off" class="form-control form-control-solid form-control-sm" id="in-url" type="text" placeholder="https://pt-bks.com/hr-quiz/management/Master/employee" required>';
        body += '<button class="btn btn-primary btn-sm" type="button" id="tryUrl" data-bs-toggle="tooltip" data-bs-placement="top" title="Coba URL"><i data-feather="zap"></i></button>';
        body += '</div>';
        body += '</div>';
        body += '</div>';

        body += '<div class="col-10 mt-3">';
        body += '<div class="form-group">';
        body += '<label for="icon">Icon <sup class="text-danger">*</sup></label>';
        body += '<select class="form-select form-select-sm form-control-solid" id="icons" onchange="changeIcon(this)">';
        $.each(feathericons, function(key, value) {
            body += '<option value="' + value + '">' + value + '</option>';
        })
        body += '</select>';
        body += '</div>';
        body += '</div>';

        body += '<div class="col-2 d-flex justify-content-center align-items-end mt-3">';
        body += '<div class="form-group">';
        body += '<button class="btn btn-light btn-icon" type="button" id="iconWrapper">';
        body += '<i class="fw-bold" data-feather="activity" id="out-icons"></i>';
        body += '</button>';
        body += '</div>';
        body += '</div>';

        body += '</div>';
        body += '</div>';
        body += '</form>';
        $('#modal-body').html(body);

        var footer = '';
        footer += '<div class="form-check form-switch me-auto">';
        footer += '<input class="form-check-input" type="checkbox" role="switch" id="is-active" checked>';
        footer += '<label class="form-check-label" for="is-active">Status</label>';
        footer += '</div>';
        footer += '<button class="btn btn-secondary btn-sm" type="button" data-bs-dismiss="modal">Tutup</button>';
        footer += '<button class="btn btn-primary btn-sm" type="button" id="submit">Simpan</button>';
        $('#modal-footer').html(footer);

        feather.replace();

        // run tooltip after modal created
        var tooltip = new bootstrap.Tooltip($('#tryUrl'));
        $('#tryUrl').on('click', function() {
            var input = $('#in-url').val();
            window.open(
                input, '_blank'
            );
        });

        $('#submit').click(function(e) {
            var forms = $('.requires-validation');
            var validated = bsValidation(forms);

            if (validated) {
                var title = $('#title').val();
                var category = $('#isHeader').is(":checked") == true ? 'HEADER' : 'SINGLE MENU';
                var url = $('#in-url').val();
                var icon = $('#icons').val();
                var status = $('#is-active').is(":checked") == true ? 1 : 0;

                var data = {
                    "title": title,
                    "category": category,
                    "url": url,
                    "icon": icon,
                    "isActive": status,
                    "appName": "HR" //buat menu untuk aplikasi HR
                }
                insertMenu(data);
            }
        });

        modal.toggle();
    });

    function insertMenu(data) {
        var restURL = api_assesment_url + "setMenuInsert";

        $.ajax({
            type: "POST",
            url: restURL,
            headers: {
                'Authorization': authKey
            },
            data: data,
            error: function(xhr, status, error) {
                var myErrText = error ? error : "Tidak Terhubung ke Server"
                toast('error', 'Kode ' + xhr.status + ' - ' + myErrText);
            },
            beforeSend: function() {
                $("#submit").html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> <span>Loading...</span>');
                $("#submit").prop('disabled', true); // disable button
            },
            success: function(data) {
                var status = data['success'] == true ? 'success' : 'error';
                var response = data['message'];
                toast(status, response);
                loadMenu();
                manageMenu();
                modal.toggle();
            }
        });

        return false;
    }

    function updateMenuDialog(data) {
        data = decodeURI(data);
        data = JSON.parse(data, true);

        var thisID = data['id'];
        var thisCategory = data['category'];

        var dialog = $('.modal-dialog');

        // large modal
        dialog.addClass("modal-lg");

        var title = '';
        title += 'Update Menu';
        $('#modal-title').html(title);

        var body = '';
        body += '<form class="requires-validation" novalidate>';
        body += '<div class="mb-3">';
        body += '<div class="row">';

        body += '<div class="col-md-10">';
        body += '<div class="form-group">';
        body += '<label for="title">Judul <sup class="text-danger">*</sup></label>';
        body += '<input class="form-control form-control-solid form-control-sm" type="text" id="title" placeholder="Pegawai" value="' + data['title'] + '" required>';
        body += '</div>';
        body += '</div>';

        body += '<div class="col-md-2 d-flex justify-content-start justify-content-md-center align-items-center mt-md-4">';
        body += '<div class="form-check">';
        body += '<label for="isHeader">Header</label>';

        var isheader = data['category'] == 'HEADER' ? 'checked' : '';
        var hasparent = (data['parentId'] == 0 && data['hasChildren'] == false) ? '' : 'disabled';
        body += '<input class="form-check-input form-check-sm" type="checkbox" id="isHeader" ' + isheader + ' ' + hasparent + '>';
        body += '</div>';
        body += '</div>';

        body += '<div class="col-12 mt-3">';
        body += '<div class="form-group">';
        body += '<label for="url">URL <sup class="text-danger">*</sup></label>';
        body += '<div class="input-group">'
        var url = data['url'] != null ? data['url'] : base_url;
        body += '<input autocomplete="off" class="form-control form-control-solid form-control-sm" id="in-url" type="text" value="' + url + '" placeholder="https://pt-bks.com/hr-quiz/management/Master/employee" required>';
        body += '<button class="btn btn-primary btn-sm" type="button" id="tryUrl" data-bs-toggle="tooltip" data-bs-placement="top" title="Coba URL"><i data-feather="zap"></i></button>';
        body += '</div>';
        body += '</div>';
        body += '</div>';

        body += '<div class="col-10 mt-3">';
        body += '<div class="form-group">';
        body += '<label for="icon">Icon <sup class="text-danger">*</sup></label>';
        body += '<select class="form-select form-select-sm form-control-solid" id="icons" onchange="changeIcon(this)">';
        $.each(feathericons, function(key, value) {
            body += '<option value="' + value + '">' + value + '</option>';
        })
        body += '</select>';
        body += '</div>';
        body += '</div>';

        body += '<div class="col-2 d-flex justify-content-center align-items-end mt-3">';
        body += '<div class="form-group">';
        body += '<button class="btn btn-light btn-icon" type="button" id="iconWrapper">';
        body += '<i class="fw-bold" data-feather="activity" id="out-icons"></i>';
        body += '</button>';
        body += '</div>';
        body += '</div>';

        body += '</div>';
        body += '</div>';
        body += '</form>';
        $('#modal-body').html(body);

        if (data['icon'] != null) {
            $("#icons").val(data['icon']);
        }

        var footer = '';
        footer += '<div class="form-check form-switch me-auto">';

        var status = data['status'] == 1 ? 'checked' : null;
        footer += '<input class="form-check-input" type="checkbox" role="switch" id="is-active" ' + status + '>';
        footer += '<label class="form-check-label" for="is-active">Status</label>';
        footer += '</div>';
        footer += '<button class="btn btn-secondary btn-sm" type="button" data-bs-dismiss="modal">Tutup</button>';
        footer += '<button class="btn btn-primary btn-sm" type="button" id="submit">Simpan</button>';
        $('#modal-footer').html(footer);

        feather.replace();

        // run tooltip after modal created
        var tooltip = new bootstrap.Tooltip($('#tryUrl'));
        $('#tryUrl').on('click', function() {
            var input = $('#in-url').val();
            window.open(
                input, '_blank'
            );
        });

        $('#submit').click(function(e) {
            var forms = $('.requires-validation');
            var validated = bsValidation(forms);

            if (validated) {
                var title = $('#title').val();
                var category = $('#isHeader').is(":checked") == true ? 'HEADER' : $('#isHeader').is(":checked") == false && thisCategory == 'HEADER' ? 'SINGLE MENU' : thisCategory;
                var url = $('#in-url').val();
                var icon = $('#icons').val();
                var status = $('#is-active').is(":checked") == true ? 1 : 0;

                var data = {
                    "id": thisID,
                    "title": title,
                    "category": category,
                    "url": url,
                    "icon": icon,
                    "isActive": status,
                    "appName": "HR" //buat menu untuk aplikasi HR
                }
                updateMenu(data);
            }
        });

        modal.toggle();
    }

    function updateMenu(data) {
        var restURL = api_assesment_url + "setMenuUpdate";

        $.ajax({
            type: "POST",
            url: restURL,
            headers: {
                'Authorization': authKey
            },
            data: data,
            error: function(xhr, status, error) {
                var myErrText = error ? error : "Tidak Terhubung ke Server"
                toast('error', 'Kode ' + xhr.status + ' - ' + myErrText);
            },
            beforeSend: function() {
                $("#submit").html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> <span>Loading...</span>');
                $("#submit").prop('disabled', true); // disable button
            },
            success: function(data) {
                console.log(data);
                var status = data['success'] == true ? 'success' : 'error';
                var response = data['message'];
                toast(status, response);
                loadMenu();
                manageMenu();
                modal.toggle();
            }
        });

        return false;
    }

    function deleteMenu(id, menu) {
        confirmDialog({
            title: "Hapus Data",
            html: "Apakah anda yakin ingin menghapus <span class='text-gray-600 text-capitalize'><b>menu " + menu + "</b></span> ?",
            confirmColor: "#d73f30",
            cancelColor: "#c5ccd6",
            confirmText: "Hapus Menu",
            cancelText: "Batal"
        }).then((result) => {
            if (result.isConfirmed) {
                var restURL = api_assesment_url + "setMenuDelete";

                $.ajax({
                    type: "POST",
                    url: restURL,
                    headers: {
                        'Authorization': authKey
                    },
                    data: {
                        id: id
                    },
                    error: function(xhr, status, error) {
                        var myErrText = error ? error : "Tidak Terhubung ke Server"
                        toast('error', 'Kode ' + xhr.status + ' - ' + myErrText);
                    },
                    success: function(data) {
                        var status = data['success'] == true ? 'success' : 'error';
                        var response = data['message'];
                        toast(status, response);
                        loadMenu();
                        manageMenu();
                    }
                });

                return false;
            }
        })
    }

    function changeIcon(input) {
        $('#iconWrapper').html('<i class="fw-bold" data-feather="' + input.value + '"></i>');
        feather.replace();
    }

    function clear() {
        $('#nestable').html('');
    }
</script>

<script>
    $(document).ready(manageMenu);

    function manageMenu() {
        clear();

        var restURL = api_assesment_url + "getMenu";

        $.ajax({
            type: "GET",
            url: restURL,
            headers: {
                'Authorization': authKey
            },
            data: {
                userId: 1,
                isActive: [0, 1]
            },
            error: function(xhr, status, error) {
                var myErrText = error ? error : "Tidak Terhubung ke Server"
                toast('error', 'Kode ' + xhr.status + ' - ' + myErrText);
            },
            success: function(data) {
                data = JSON.parse(data['data']);
                console.log(data);
                manageMenuData(document.getElementById("nestable"), data);
                feather.replace();
            }
        }).done(function() {
            nestable();
        });

        return false;
    }

    var html = '';

    function manageMenuData(container, menu) {
        if (!menu || !menu.length) return;
        const ol = document.createElement("ol");
        ol.className = 'dd-list';
        // console.log(menu);
        for (const {
                id,
                parent_id,
                icon,
                url,
                category,
                title,
                is_active,
                submenu
            } of menu) {
            const liz = document.createElement("li");
            if (submenu) {
                $(liz).addClass("dd-item");
                $(liz).attr("data-id", id);
                var dataMenu = '';
                var muted = '';
                if (is_active == 0) {
                    muted = 'text-muted opacity-25';
                }
                dataMenu += '<div class="dd-handle text-capitalize ' + muted + '">';
                if (icon != null) {
                    dataMenu += '<i data-feather="' + icon + '"></i> ';
                }
                dataMenu += title;
                if (category == 'HEADER') {
                    dataMenu += '<small class="text-capitalized text-muted"> (' + category.toLowerCase() + ') </small>';
                }
                dataMenu += '<div class="float-end">';

                has_children = submenu.length > 0;

                var data = {
                    "id": id,
                    "icon": icon,
                    "url": url,
                    "category": category,
                    "title": title,
                    "status": is_active,
                    "parentId": parent_id,
                    "hasChildren": has_children
                }

                dataMenu += '<span role="button" class="text-warning dd-nodrag" onclick="updateMenuDialog(\'' + encodeURI(JSON.stringify(data)) + '\')"><i data-feather="edit"></i></span>';
                dataMenu += '<span role="button" class="text-danger dd-nodrag" onclick="deleteMenu(' + id + ',\'' + title + '\')"><i data-feather="trash"></i></span>';
                dataMenu += '</div>';
                dataMenu += '</div>';
                $(liz).append(dataMenu);
                this.manageMenuData(liz, submenu);
            }
            ol.appendChild(liz);
        }
        container.appendChild(ol);
    }
</script>

<script>
    function nestable() {
        var updateOutput = function(e) {
            var list = e.length ? e : $(e.target),
                output = list.data('output');
            if (window.JSON) {
                console.log(window.JSON.stringify(list.nestable('serialize'))); //, null, 2));
            } else {
                // console.log('JSON browser support required for this demo.');
            }
        };

        // activate Nestable for list 1
        $('#nestable').nestable({
                group: 1
            })
            .on('change', updateOutput);

        // activate Nestable for list 2
        $('#nestable2').nestable({
                group: 1
            })
            .on('change', updateOutput);

        // output initial serialised data
        updateOutput($('#nestable').data('output', $('#nestable-output')));
        updateOutput($('#nestable2').data('output', $('#nestable2-output')));

        $('#nestable-menu').on('click', function(e) {
            var target = $(e.target),
                action = target.data('action');
            if (action === 'expand-all') {
                $('.dd').nestable('expandAll');
            }
            if (action === 'collapse-all') {
                $('.dd').nestable('collapseAll');
            }
        });

        $('#nestable3').nestable();
    }
</script>