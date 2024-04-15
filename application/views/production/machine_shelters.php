<style>
    html {
        scroll-behavior: smooth;
    }

    #overlay {
        background-color: rgba(0, 0, 0, 0.8);
        z-index: 999999;
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        display: none;
    }

    .nominal {
        text-align: right;
    }

    .text-grey {
        color: #D8D9CF;
    }

    .text-dark-grey {
        color: #B2B2B2;
    }

    .bg-dark-grey {
        color: #D8D9CF !important;
    }

    .bg-grey {
        background-color: #EDEDED !important;
        color: #B2B2B2;
    }

    .bg-light-grey {
        background-color: #fafafa;
    }

    .text-random {
        color: #425F57;
    }

    .bg-random {
        background-color: #425F57;
    }

    .card-hoper:hover {
        background-color: #F7F7F7;
        cursor: pointer;
    }

    input.bawahaja {
        outline: 0;
        border-width: 0 0 2px;
        border-color: #00ABB3;
    }

    #profileImage {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: rgb(194, 25, 162);
        background: linear-gradient(66deg, rgba(194, 25, 162, 1) 0%, rgba(58, 63, 111, 1) 46%, rgba(15, 232, 219, 1) 100%);
        font-size: 15px;
        color: #fff;
        text-align: center;
        padding: 2px;
        line-height: 39px;
        vertical-align: middle;
        margin: 0 auto;
    }

    .dots-lead {
        display: flex;
    }

    .dots-lead::after {
        background-image: radial-gradient(circle, currentcolor 1px, transparent 1.5px);
        background-position: bottom;
        background-size: 1ex 4.5px;
        background-repeat: space no-repeat;
        content: "";
        flex-grow: 1;
        height: 1em;
        order: 2;
    }

    .gambar-miring {
        -ms-transform: rotate(20deg);
        /* IE 9 */
        transform: rotate(20deg);
        opacity: 0.3;
    }

    .vertical-text {
        writing-mode: vertical-rl;
        -webkit-transform: rotate(-180deg);
        -moz-transform: rotate(-180deg);
        vertical-align: middle;
        display: inline-block;
    }

    .bg-skm {
        background-color: #276A6F;
    }

    .bg-skt {
        background-color: #FEC868;
    }

    .bd-callout-0 {
        border-left-color: #9b5fe0;
        border-left-width: 10px;
    }

    .bd-callout-1 {
        border-left-color: #16a4d8;
        border-left-width: 10px;
    }

    .bd-callout-2 {
        border-left-color: #60dbe8;
        border-left-width: 10px;
    }

    .bd-callout-3 {
        border-left-color: #8bd346;
        border-left-width: 10px;
    }

    .bd-callout-4 {
        border-left-color: #efdf48;
        border-left-width: 10px;
    }

    .bd-callout-5 {
        border-left-color: #f9a52c;
        border-left-width: 10px;
    }

    .bd-callout-6 {
        border-left-color: #d64e12;
        border-left-width: 10px;
    }

    .bg-callout-0 {
        background-color: #9b5fe0;
    }

    .bg-callout-1 {
        background-color: #16a4d8;
    }

    .bg-callout-2 {
        background-color: #60dbe8;
    }

    .bg-callout-3 {
        background-color: #8bd346;
    }

    .bg-callout-4 {
        background-color: #efdf48;
    }

    .bg-callout-5 {
        background-color: #f9a52c;
    }

    .bg-callout-6 {
        background-color: #d64e12;
    }

    .bg-callout-7 {
        background-color: #245953;
    }

    .bg-callout-8 {
        background-color: #D25380;
    }

    .bg-callout-9 {
        background-color: #E08E6D;
    }

    .bg-callout-10 {
        background-color: #537188;
    }

    .bg-callout-11 {
        background-color: #CBB279;
    }

    .bg-callout-12 {
        background-color: #B04759;
    }

    .bg-callout-13 {
        background-color: #4C3D3D;
    }

    .bg-callout-14 {
        background-color: #617A55;
    }

    .bg-callout-15 {
        background-color: #394867;
    }

    .text-callout-0 {
        color: #9b5fe0;
    }

    .text-callout-1 {
        color: #16a4d8;
    }

    .text-callout-2 {
        color: #60dbe8;
    }

    .text-callout-3 {
        color: #8bd346;
    }

    .text-callout-4 {
        color: #efdf48;
    }

    .text-callout-5 {
        color: #f9a52c;
    }

    .text-callout-6 {
        color: #d64e12;
    }

    .font-small {
        font-size: 9px;
    }


    .fixed-right {
        position: fixed;
        right: 0;
        width: 120px;
        z-index: 1030;
    }

    .bg-gradient-material_request {
        background-color: #9A1663 !important;
        background-image: linear-gradient(135deg,
                #9A1663 0%,
                rgba(224, 20, 76, 0.8) 100%) !important;
    }

    .bg-pinku {
        color: white;
        background-color: #F56EB3;
    }

    .bg-lembut {
        background: #9a2697;
        background: -webkit-linear-gradient(141deg, #9a2697 0%, #5d09b0 100%);
        background: linear-gradient(141deg, #9a2697 0%, #5d09b0 100%);
    }

    .bg-glass {
        background: rgba(255, 255, 255, 0.8);
        -webkit-backdrop-filter: blur(10px);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.4);
    }

    .text-dark-grey {
        color: #686767 !important;
    }

    .shadow-good {
        -webkit-box-shadow: 2px 1px 23.5px -4px #dddddd !important;
        -moz-box-shadow: 2px 1px 23.5px -4px #dddddd !important;
        box-shadow: 2px 1px 23.5px -4px #dddddd !important;
    }

    .bg-abu-muda {
        background-color: #EAEAEA;
    }

    .small-text {
        font-size: 11px;
    }

    .super-small-text {
        font-size: 9px;
    }

    .pro-super-small-text {
        font-size: 7px;
    }

    .has-search .form-control {
        padding-left: 2.375rem;
    }

    .has-search .form-control-feedback {
        position: absolute;
        z-index: 2;
        display: block;
        width: 2.375rem;
        height: 2.375rem;
        line-height: 2.375rem;
        text-align: center;
        pointer-events: none;
        color: #aaa;
    }

    .bg-skm {
        background-color: #276A6F;
    }

    .bg-skt {
        background-color: #FED049;
    }

    .select2-container--default .select2-selection--multiple {
        font-size: 11px;
    }

    .cursor-klik {
        cursor: pointer;
    }
</style>
<!-- loading CSS -->
<style type="text/css">
    @keyframes ldio-4vsyzdoqibk {
        0% {
            transform: translate(6px, 40px) scale(0);
        }

        25% {
            transform: translate(6px, 40px) scale(0);
        }

        50% {
            transform: translate(6px, 40px) scale(1);
        }

        75% {
            transform: translate(40px, 40px) scale(1);
        }

        100% {
            transform: translate(74px, 40px) scale(1);
        }
    }

    @keyframes ldio-4vsyzdoqibk-r {
        0% {
            transform: translate(74px, 40px) scale(1);
        }

        100% {
            transform: translate(74px, 40px) scale(0);
        }
    }

    @keyframes ldio-4vsyzdoqibk-c {
        0% {
            background: #e15b64
        }

        25% {
            background: #abbd81
        }

        50% {
            background: #f8b26a
        }

        75% {
            background: #f47e60
        }

        100% {
            background: #e15b64
        }
    }

    .ldio-4vsyzdoqibk div {
        position: absolute;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        transform: translate(40px, 40px) scale(1);
        background: #e15b64;
        animation: ldio-4vsyzdoqibk 1s infinite cubic-bezier(0, 0.5, 0.5, 1);
    }

    .ldio-4vsyzdoqibk div:nth-child(1) {
        background: #f47e60;
        transform: translate(74px, 40px) scale(1);
        animation: ldio-4vsyzdoqibk-r 0.25s infinite cubic-bezier(0, 0.5, 0.5, 1), ldio-4vsyzdoqibk-c 1s infinite step-start;
    }

    .ldio-4vsyzdoqibk div:nth-child(2) {
        animation-delay: -0.25s;
        background: #e15b64;
    }

    .ldio-4vsyzdoqibk div:nth-child(3) {
        animation-delay: -0.5s;
        background: #f47e60;
    }

    .ldio-4vsyzdoqibk div:nth-child(4) {
        animation-delay: -0.75s;
        background: #f8b26a;
    }

    .ldio-4vsyzdoqibk div:nth-child(5) {
        animation-delay: -1s;
        background: #abbd81;
    }

    .loadingio-spinner-ellipsis-6qq63lm6xx6 {
        width: 71px;
        height: 71px;
        display: inline-block;
        overflow: hidden;
        background: none;
    }

    .ldio-4vsyzdoqibk {
        width: 100%;
        height: 100%;
        position: relative;
        transform: translateZ(0) scale(0.71);
        backface-visibility: hidden;
        transform-origin: 0 0;
        /* see note above */
    }

    .ldio-4vsyzdoqibk div {
        box-sizing: content-box;
    }

    /* generated by https://loading.io/ */
</style>

<!-- EVENT CALENDAR -->
<style>
    .md-meal-type {
        font-size: 14px;
        font-weight: 600;
        opacity: .6;
    }

    .md-meal-planner-popup .mbsc-popup .mbsc-popup-header {
        padding-top: 8px;
        padding-bottom: 8px;
    }

    .md-meal-planner-cont {
        position: relative;
        padding-left: 10px;
        text-align: left;
    }

    .md-meal-planner-title {
        font-size: 20px;
    }

    .md-meal-planner-kcal {
        color: #929292;
    }

    .md-meal-planner-icon {
        position: absolute;
        left: 0;
    }

    .md-meal-planner-calendar.mbsc-calendar .mbsc-schedule-event-all-day-inner {
        height: 40px;
        display: flex;
        align-items: center;
    }

    .md-meal-planner-calendar .md-meal-planner-event-title {
        font-size: 12px;
    }

    .md-meal-planner-calendar .md-meal-planner-event-desc {
        opacity: .6;
    }

    .md-meal-planner-popup .mbsc-segmented-item:first-child .mbsc-selected.mbsc-material,
    .md-meal-planner-popup .mbsc-segmented-item:first-child .mbsc-selected.mbsc-windows,
    .md-meal-planner-popup .mbsc-segmented-item:first-child .mbsc-segmented-selectbox-inner {
        background: #f08786;
    }

    .md-meal-planner-popup .mbsc-segmented-item:nth-child(2) .mbsc-selected.mbsc-material,
    .md-meal-planner-popup .mbsc-segmented-item:nth-child(2) .mbsc-selected.mbsc-windows,
    .md-meal-planner-popup .mbsc-segmented-item:nth-child(2) .mbsc-segmented-selectbox-inner {
        background: #8abe89;
    }

    .md-meal-planner-popup .mbsc-segmented-item:nth-child(3) .mbsc-selected.mbsc-material,
    .md-meal-planner-popup .mbsc-segmented-item:nth-child(3) .mbsc-selected.mbsc-windows,
    .md-meal-planner-popup .mbsc-segmented-item:nth-child(3) .mbsc-segmented-selectbox-inner {
        background: #99d3ef;
    }

    .md-meal-planner-popup .mbsc-segmented-item:nth-child(4) .mbsc-selected.mbsc-material,
    .md-meal-planner-popup .mbsc-segmented-item:nth-child(4) .mbsc-selected.mbsc-windows,
    .md-meal-planner-popup .mbsc-segmented-item:nth-child(4) .mbsc-segmented-selectbox-inner {
        background: #f0ce8e;
    }

    .md-meal-planner-popup .mbsc-segmented-item:last-child .mbsc-selected.mbsc-material,
    .md-meal-planner-popup .mbsc-segmented-item:last-child .mbsc-selected.mbsc-windows,
    .md-meal-planner-popup .mbsc-segmented-item:last-child .mbsc-segmented-selectbox-inner {
        background: #b48bce;
    }
</style>
<style>
    .full-height {
        height: 100vh;
    }

    .bg-left-panel {
        background-color: #fcfcfc;
    }

    .text-light-dark-grey {
        color: #B2B2B2;
    }

    .text-small {
        font-size: 10px;
    }

    .filter-border {
        border-bottom: 2px solid #27374D;
    }

    .bg-dongker {
        background-color: #27374D !important;
        color: white;
    }

    .border-dongker {
        border: 1px solid #27374d;
    }

    .bg-light-blue {
        background-color: #9DB2BF;
    }

    a {
        cursor: pointer;
    }

    .btn-list-planning:hover {
        background-color: #9AC5F4;
        cursor: pointer;
        color: white;
    }

    .btn-list-planning:active,
    .clicked {
        background-color: #27374D;
        color: white;
    }

    .card-list-planning {
        transition: opacity 0.3s ease;
    }

    .card-list-planning.hidden {
        opacity: 0;
    }

    .card-shift-produksi:hover {
        background-color: #DDDDDD !important;
        color: #434242;
    }

    a:hover {
        text-decoration: none;
    }

    .avatars {
        display: inline-flex;
        flex-direction: row;
    }

    .avatar {
        position: relative;
        border: 2px solid #fff;
        border-radius: 50%;
        overflow: hidden;
        width: 30px;
        height: 30px;
        /* Sesuaikan dengan ukuran yang diinginkan */
    }

    .avatar:not(:last-child) {
        margin-right: -20px;
        /* Mengatur jarak antara gambar */
    }

    .avatar img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        /* Memastikan gambar tetap terlihat utuh dalam lingkaran */
        display: block;
    }

    .avatar canvas {
        width: 100%;
        height: 100%;
        object-fit: cover;
        /* Memastikan gambar tetap terlihat utuh dalam lingkaran */
        display: block;
    }

    .plus-avatar {
        background-color: #27374D;
        width: 30px;
        height: 30px;
        display: flex;
        color: white;
        justify-content: center;
        align-items: center;
    }

    .plus-avatar-grey {
        background-color: #EFF5F5;
        width: 30px;
        height: 30px;
        display: flex;
        color: grey;
        justify-content: center;
        align-items: center;
    }

    .plus-icon {
        font-size: 10px;
        font-weight: bold;
    }

    .bg-shift-42 {
        background-color: #9DB2BF;
        color: white;
        border-width: 2px;
        border-color: #1D5B79;
    }

    .bg-shift-39 {
        background-color: #EA906C;
        color: white;
        border-width: 2px;
        border-color: #B31312;
    }

    .bg-shift-44 {
        background-color: #526D82;
        color: white;
        border-width: 2px;
        border-color: #1D5B79;
    }

    .bg-shift-41 {
        background-color: #B31312;
        color: white;
        border-width: 2px;
        border-color: #470707;
    }

    .bg-no-workplan {
        background-color: white;
        border: 2px dashed #9BA4B5;
    }

    .manPower:active,
    .active {
        border-width: 3px;
        border-color: #4A55A2;
        color: #4A55A2 !important;
    }

    .machinePower:active,
    .active {
        border-width: 3px;
        border-color: #4A55A2;
        color: #4A55A2 !important;
    }

    .accordion-item:first-of-type .accordion-button {
        border-radius: 0px;
    }

    .accordion-button:not(.collapsed) {
        color: #69707a;
        background-color: #fff;
        border: 0;
    }

    .accordion-button.machine:not(.collapsed)::after {
        background-image: none !important;
    }

    .accordion-button.machine::after {
        background-image: none !important;
    }

    .bg-position {
        background-color: #DDE6ED;
        color: grey;
    }

    .bg-position-filled {
        background-color: #526D82 !important;
        color: white !important;
    }

    .bg-selected-collapse {
        /* background-color: #F3DEBA !important; */
    }

    .form-control:focus {
        border: 1px solid #c5ccd6;
        box-shadow: none;
    }

    .btn-addnew-production:hover {
        background-color: #27374D !important;
        color: white;
        border: 1px solid #27374D !important;
    }

    .btn-addnew-shift:hover,
    .btn-addnew-shift .active {
        background-color: #27374D !important;
        color: white;
        border: 1px solid #27374D !important;
    }

    .btn-choose-shift:hover {
        color: #FD8D14 !important;
    }

    textarea {
        resize: none;
    }

    .accordion-button::after {
        background: none;
        flex-shrink: none;
        width: 0px;
        height: 0px;
        margin-left: none;
    }

    .accordion-button:not(.collapsed)::after {
        background: none;
        flex-shrink: none;
        width: 0px;
        height: 0px;
        margin-left: none;
    }

    .bg-unavailable {
        background-color: #f3f3f5 !important;
    }
</style>
<style>
    .border-light-dark {
        border-color: #a6aabb !important;
    }

    .text-light-dark {
        color: #a6aabb !important;
    }

    .nav-link {
        color: #61677A;
        border-color: #27374D #27374D #27374D;
    }

    .nav-tabs .nav-link.active,
    .nav-tabs .nav-item.show .nav-link {
        color: white !important;
        background-color: #27374D;
        border-color: #27374D #27374D #27374D;
    }

    .nav-tabs .nav-link {
        margin-bottom: -1px;
        background: none;
        border-top-left-radius: 0.35rem;
        border-top-right-radius: 0.35rem;
        border-top: 1px solid #27374D;
        border-right: 1px solid #27374D;
        border-left: 1px solid #27374D;
        border-bottom: 1px none rgba(229, 124, 35, 0);
    }

    th {
        padding: 20px;
    }

    .bg-light-success {
        background-color: #e9f4e0;
    }

    .bg-light-danger {
        background-color: #e8d6d6;
    }
</style>
<style type="text/css">
    .progress-bulat {
        width: 90px;
        height: 90px;
        background: none;
        position: relative;
    }

    .progress-bulat::after {
        content: "";
        width: 100%;
        height: 100%;
        border-radius: 50%;
        border: 10px solid #eee;
        position: absolute;
        top: 0;
        left: 0;
    }

    .progress-bulat>span {
        width: 50%;
        height: 100%;
        overflow: hidden;
        position: absolute;
        top: 0;
        z-index: 1;
    }

    .progress-bulat .progress-left {
        left: 0;
    }

    .progress-bulat .progress-bar {
        width: 100%;
        height: 100%;
        background: none;
        border-width: 10px;
        border-style: solid;
        position: absolute;
        top: 0;
    }

    .progress-bulat .progress-left .progress-bar {
        left: 100%;
        border-top-right-radius: 80px;
        border-bottom-right-radius: 80px;
        border-left: 0;
        -webkit-transform-origin: center left;
        transform-origin: center left;
    }

    .progress-bulat .progress-right {
        right: 0;
    }

    .progress-bulat .progress-right .progress-bar {
        left: -100%;
        border-top-left-radius: 80px;
        border-bottom-left-radius: 80px;
        border-right: 0;
        -webkit-transform-origin: center right;
        transform-origin: center right;
    }

    .progress-bulat .progress-value {
        position: absolute;
        top: 0;
        left: 0;
    }

    .litepicker {
        z-index: 1000000 !important;
    }

    .litepicker .container__months .month-item {
        box-sizing: content-box !important;
        width: 280px !important;
    }

    .container__months {
        width: 280px !important;
    }

    .offcanvas.show {
        transform: none;
        z-index: 100000;
    }

    .selected {
        background-color: #F8F0E5;
    }

    .highlighted-date {
        background-color: #f0ad4e;
    }


    .circle-shape {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0 auto;
    }

    .bg-light-dongker {
        background-color: #7d8794;
    }

    .bg-light-primary {
        background-color: #f7f9fc;
    }

    /* .dateInput .day:not(.disabled) {
        background-color: #84b0e2;
        border-radius: 0px;
        color: white;
    }

    .datepicker table tr td.active {
        color: white !important;
    } */
    .swal-wide {
        width: 650px !important;
    }
</style>
<style>
    /* ANIMATION */
    .shake-bottom {
        -webkit-animation: shake-bottom 1s cubic-bezier(0.455, 0.030, 0.515, 0.955) infinite both;
        animation: shake-bottom 1s cubic-bezier(0.455, 0.030, 0.515, 0.955) infinite both;
    }

    @-webkit-keyframes shake-bottom {

        0%,
        100% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
            -webkit-transform-origin: 50% 100%;
            transform-origin: 50% 100%;
        }

        10% {
            -webkit-transform: rotate(2deg);
            transform: rotate(2deg);
        }

        20%,
        40%,
        60% {
            -webkit-transform: rotate(-4deg);
            transform: rotate(-4deg);
        }

        30%,
        50%,
        70% {
            -webkit-transform: rotate(4deg);
            transform: rotate(4deg);
        }

        80% {
            -webkit-transform: rotate(-2deg);
            transform: rotate(-2deg);
        }

        90% {
            -webkit-transform: rotate(2deg);
            transform: rotate(2deg);
        }
    }

    @keyframes shake-bottom {

        0%,
        100% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
            -webkit-transform-origin: 50% 100%;
            transform-origin: 50% 100%;
        }

        10% {
            -webkit-transform: rotate(2deg);
            transform: rotate(2deg);
        }

        20%,
        40%,
        60% {
            -webkit-transform: rotate(-4deg);
            transform: rotate(-4deg);
        }

        30%,
        50%,
        70% {
            -webkit-transform: rotate(4deg);
            transform: rotate(4deg);
        }

        80% {
            -webkit-transform: rotate(-2deg);
            transform: rotate(-2deg);
        }

        90% {
            -webkit-transform: rotate(2deg);
            transform: rotate(2deg);
        }
    }

    input[type="time"] {
        position: relative;
    }

    input[type="time"]::-webkit-calendar-picker-indicator {
        display: block;
        top: 0;
        right: 0;
        height: 100%;
        width: 100%;
        position: absolute;
        background: transparent;
    }

    .scro::-webkit-scrollbar {
        display: none;
    }

    .has-search .form-control {
        padding-left: 2.375rem;
        border-radius: 20px;
    }

    .has-search .form-control-feedback {
        position: absolute;
        z-index: 2;
        display: block;
        width: 2.4rem;
        height: 2rem;
        line-height: 2rem;
        text-align: center;
        pointer-events: none;
        color: #aaa;
    }

    .card-item-stock {
        transition: 0.5s;
    }

    .card-item-stock:hover {
        transform: translateY(-20px);
        z-index: 9999999;
    }

    .bd-callout {
        padding: 1.25rem;
        margin-top: 1.25rem;
        margin-bottom: 1.25rem;
        border: 1px solid #e9ecef;
        border-left-width: 0.25rem;
        border-radius: 0.25rem;
    }

    .bd-callout-warning {
        border-left-color: #FF9843 !important;
    }

    .timeline.timeline-sm .timeline-item .timeline-item-content {
        padding-bottom: 1rem;
    }

    .timeline .timeline-item .timeline-item-content {
        border-left: solid 0.15rem #e5e5e5 !important;
    }

    .timeline-item-marker-indicator {
        background-color: #e5e5e5 !important;
    }
</style>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<link rel="stylesheet" href="<?= base_url() ?>assets/css/mobiscroll.jquery.min.css">
<script src="<?= base_url() ?>assets/js/mobiscroll.jquery.min.js"></script>
<script src="https://use.fontawesome.com/d80f210d12.js"></script>
<!-- Chart js -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="<?= base_url(); ?>assets/smm/format.js"></script>
<!-- QR CODE -->
<script type="text/javascript" src="<?= base_url() ?>assets/js/vendor/qrcode.js"></script>
<main>
    <div class="row">
        <!-- LEFT PANEL -->
        <div class="col-2 bg-left-panel full-height p-5 pt-2 pe-2">
            <div class="row p-3">
                <div class="col align-self-center p-0">
                    <h3 class="text-dark-grey m-0">
                        <b class="small">Machine Shelters<br>Management</b>
                    </h3>
                    <p class="super-small-text m-0 text-light-dark-grey">Pengelolaan Penampungan Sementara Mesin</p>
                </div>

                <div class="col-12 p-0 pt-4 pb-2" id="listGudang">
                </div>
            </div>
        </div>
        <!-- RIGHT PANEL -->
        <div class="col-10 bg-white p-4" id="kerangkaGudangDetail">

        </div>
    </div>
</main>



<!-- Modal -->
<div class="modal fade" id="modal" role="dialog" aria-hidden="true" data-bs-backdrop="static">
    <div class="modal-dialog" role="document" id="modalDialog">
        <div class="modal-content">
            <div class="modal-header" id="modalHeader">

            </div>
            <div class="modal-body" id="modalBody">

            </div>
            <div class="modal-footer" id="modalFooter">

            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal2" role="dialog" aria-hidden="true" data-bs-backdrop="static">
    <div class="modal-dialog" role="document" id="modalDialog2">
        <div class="modal-content">
            <div class="modal-header" id="modalHeader2">

            </div>
            <div class="modal-body" id="modalBody2" style="overflow-x: hidden">

            </div>
            <div class="modal-footer" id="modalFooter2">

            </div>
        </div>
    </div>
</div>
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel" data-bs-backdrop="true">
    <div class="offcanvas-header p-5" id="canvasHeader">
    </div>
    <div class="offcanvas-body p-5" id="canvasBody">
    </div>
</div>
<div class="fixed-top d-flex justify-content-center align-items-center" style="z-index: 99999;">
    <div class="bg-gray-500 text-white super-small-text p-2 text-center m-1 rounded-pill top-0 start-100 d-none align-items-center align-self-center justify-content-center" style="width: 300px;min-height:40px;" id="offlineModePane" hidden>
        <span class="m-0 align-middle"><i class="fa fa-wifi me-2"></i>Offline Mode</span><span><i id="textAutoSave"></i></span><span id="buttonSaveOfflineMode" hidden><span id="" class="ms-2 btn btn-outline-dark text-white p-2 super-small-text" onclick="loadSimpanOfflineMode()"><i class="fa fa-eye me-1"></i>View</span><button id="btnSimpanOffline" class="ms-2 btn btn-dark p-2 super-small-text" onclick="autoSaveAtOfflineMode()"><i class="fa fa-save me-1"></i>Send All</button></span>
    </div>
</div>
<?php $this->load->view('components/modal_static') ?>
<script src="https://cdn.jsdelivr.net/npm/litepicker/dist/litepicker.js"></script>
<link href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.css">
<link href="https://cdn.datatables.net/fixedcolumns/4.3.0/css/fixedColumns.dataTables.min.css">
<script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/fixedcolumns/4.3.0/js/dataTables.fixedColumns.min.js"></script>
<script>
    function getMissingDates(existingDates) {
        if (existingDates.length === 0) {
            return []; // Tidak ada tanggal yang hilang jika tidak ada tanggal yang ada
        }

        // Menghitung tanggal minimum dan maksimum dari existingDates
        const minDate = new Date(Math.min(...existingDates.map(date => new Date(date))));
        const maxDate = new Date(Math.max(...existingDates.map(date => new Date(date))));

        // Menghitung bulan dan tahun dari minDate dan maxDate
        const startYear = minDate.getFullYear();
        const startMonth = minDate.getMonth();
        const endYear = maxDate.getFullYear();
        const endMonth = maxDate.getMonth();

        const missingDates = [];
        const currentDate = new Date(startYear, startMonth, 1); // Mulai dari tanggal 1 bulan pertama

        while (currentDate <= maxDate) {
            const formattedDate = currentDate.toISOString().split('T')[0];
            if (!existingDates.includes(formattedDate)) {
                missingDates.push(formattedDate);
            }

            currentDate.setDate(currentDate.getDate() + 1);

            // Jika currentDate telah mencapai akhir bulan, lanjut ke bulan berikutnya
            if (currentDate.getMonth() > endMonth || currentDate.getFullYear() > endYear) {
                currentDate.setDate(1); // Reset ke tanggal 1
                currentDate.setMonth(currentDate.getMonth() + 1); // Pindah ke bulan berikutnya
            }
        }

        return missingDates;
    }

    function getAliases(data) {
        const aliases = data.map(item => item.item.alias);
        return aliases.join(', ');
    }

    function getStartAndEndDate(data) {
        if (data.length === 0) {
            return null; // Handle empty input array
        }

        const firstDate = new Date(data[0]);
        const lastDate = new Date(data[data.length - 1]);

        const year = firstDate.getFullYear();
        const month = firstDate.getMonth() + 1; // Bulan dimulai dari 0 (Januari) hingga 11 (Desember)

        // Tanggal awal bulan
        const dateStart = `${year}-${month.toString().padStart(2, '0')}-01`;

        // Tanggal akhir bulan
        const lastDay = new Date(year, month, 0).getDate();
        const nextMonth = month === 12 ? 1 : month + 1;
        const nextYear = month === 12 ? year + 1 : year;
        const dateEnd = `${nextYear}-${nextMonth.toString().padStart(2, '0')}-${lastDay.toString().padStart(2, '0')}`;

        return {
            dateStart,
            dateEnd
        };
    }


    function notFound(location) {
        $(location).html('<lottie-player src="<?= base_url() ?>assets/json/lf20_RaWlll5IJz.json" mode="bounce" background="transparent" speed="2" style="width: 100%; height: 400px;" loop autoplay></lottie-player>')
    }

    function empty(location, text, height) {
        $(location).html('<div class="row"><div class="col-12 align-self-center text-center"><div class="card shadow-none" style="border:0px;height:' + height + ';"><div class="card-body h-100 p-5 m-5"><lottie-player style="margin:auto;width: 150px; height: 100%;" src="<?= base_url() ?>assets/json/lf20_s8pbrcfw.json" mode="bounce" background="transparent" speed="2" loop autoplay></lottie-player><p class="small"><i>' + text + '</i></p></div></div></div></div>')
    }

    function emptyText(location, text) {
        $(location).html('<div class="row h-100"><div class="col-12 align-self-center text-center"><div class="card shadow-none border-0" style="border:0px;height:100%;background-color:transparent"><div class="card-body h-100 m-5"><p class="small"><i>' + text + '</i></p></div></div></div></div>')
    }

    function formatNames(data) {
        var firstNames = data.map(function(item) {
            var firstName = item.name.split(' ')[0];
            return firstName;
        });
        return firstNames.join(', ');
    }

    function deepCopy(obj) {
        return JSON.parse(JSON.stringify(obj));
    }

    function clearModal() {
        $('#modalDialog').removeClass();
        $('#modalDialog').removeAttr('style');
        $('#modalHeader').html('');
        $('#modalBody').html('');
        $('#modalFooter').html('');
    }

    function clearModal2() {
        $('#modalDialog2').removeClass();
        $('#modalDialog2').removeAttr('style');
        $('#modalHeader2').html('');
        $('#modalBody2').html('');
        $('#modalFooter2').html('');
    }

    $('#modal').on('hidden.bs.modal', function(e) {
        checkModalVisible()
        clearModal();
    })
    $('#modal').on('shown.bs.modal', function(e) {
        checkModalVisible()
    })
    $('#modal2').on('hidden.bs.modal', function(e) {
        clearModal2();
    })

    function conversiToTarget(input, multiplier, satuanBesar, satuanKecil) {
        const trays = Math.floor(input / multiplier);
        const remainingStik = input % multiplier;

        var nilai = ''
        if (remainingStik) {
            if (trays) {
                if (satuanBesar != satuanKecil) {
                    nilai = number_format(roundToTwo(trays)) + ' <span class="text-dark-grey">' + satuanBesar + '</span> ' + number_format(roundToTwo(remainingStik)) + ' <span class="text-dark-grey">' + satuanKecil + '</span>'
                } else {
                    nilai = number_format(roundToTwo(parseFloat(remainingStik) + parseFloat(trays))) + ' <span class="text-dark-grey">' + satuanKecil + '</span>'
                }
            } else {
                nilai = number_format(roundToTwo(remainingStik)) + ' <span class="text-dark-grey">' + satuanKecil + '</span>'
            }
        } else {
            nilai = number_format(roundToTwo(trays)) + ' <span class="text-dark-grey">' + satuanBesar + '</span>'
        }
        return nilai
    }

    function calculateConvertedMaterial(id) {
        var totalDefault = 0
        var valueItem = $('.qty_item' + id).map(function() {
            return $(this).val();
        }).get();
        var unitItem = $('.qty_item' + id).map(function() {
            return $(this).data('unit');
        }).get();
        var jenisUnitItem = $('.qty_item' + id).map(function() {
            return $(this).data('tipe');
        }).get();
        // console.log(jenisUnitItem)
        var dataProductsDefault = deepCopy(dataDetail.currentStock.find((v, k) => {
            if (v.item.id == id) return true
        }))
        for (let i = 0; i < jenisUnitItem.length; i++) {
            if (dataProductsDefault) {
                if (!valueItem[i]) {
                    valueItem[i] = 0
                }
                totalDefault = parseFloat(totalDefault) + (parseFloat(valueItem[i]) * eval(`dataProductsDefault.${jenisUnitItem[i]}.multiplier`))
            } else {
                totalDefault = parseFloat(totalDefault) + parseFloat(valueItem[i])
            }
        }
        return {
            totalDefault: totalDefault,
            dataProductsDefault: dataProductsDefault,
        }
    }

    function isModalVisible() {
        return $("#modal").is(":visible");
    }

    function checkModalVisible() {
        console.log(isModalVisible())
        if (isModalVisible()) {
            // jika muncul modal
            noConnection()
        } else {
            // jika tidak
            if (variableSaveMaterialOffline.materialPickup.length) {
                noConnection()
            } else [
                yesConnection()
            ]
        }
    }

    function noConnection() {
        offlineMode = true
        $('#offlineModePane').prop("hidden", false).addClass('d-flex').removeClass('d-none')
        setIntervalOfflineMode()
    }

    function yesConnection() {
        offlineMode = false
        $('#offlineModePane').prop("hidden", true).addClass('d-none').removeClass('d-flex')
        setIntervalOfflineMode()
    }
    var intervalId

    function setIntervalOfflineMode() {
        if (!offlineMode) {
            clearInterval(intervalId);
        } else {
            // tiap satu menit
            intervalId = setInterval(autoSaveAtOfflineMode, 30 * 1000);
        }
    }

    function getMaterialMain(idProduct, idStep, idUnit, qtyInput) {
        // dataEntry.productMaterial
        var data = dataEntry.machineStepProfile.find((v, k) => {
            if (v.item_id_product == idProduct) return true
        })
        var item_ids_material_main = []
        if (data) {
            var dataMachineStep = data.machine_step_profiles.find((v, k) => {
                if (v.id == idStep) return true
            })
            if (dataMachineStep) {
                item_ids_material_main = dataMachineStep.item_ids_material_main
            }
        }
        var dataCollect = []
        dataEntry.productMaterial.forEach(e => {
            e.material_group.forEach(el => {
                if (el) {
                    for (let i = 0; i < item_ids_material_main.length; i++) {
                        if (item_ids_material_main[i] == el.item_id_default) {
                            var dataUnit = el.item_default.unit_option.find((v, k) => {
                                if (v.id == el.requirement.unit_id) return true
                            })
                            eval('var qty = qtyInput ' + dataUnit.operator + ' ' + dataUnit.multiplier)
                            dataCollect.push({
                                'item_id': item_ids_material_main[i],
                                'unit_id_input': el.requirement.unit_id,
                                'qty_input': qtyInput,
                                'unit_id': el.item_default.unit.id,
                                'qty': qty,
                            })
                        }
                    }
                }
            });
        });
        return dataCollect
    }
</script>
<script>
    var user_id = '<?= $this->session->userdata('employee_id') ?>'
    var divisi_id = '<?= $this->session->userdata('division_id') ?>'
    var job_spv_smd = '<?= job_spv_smd() ?>'
    var job_foreman = '<?= job_foreman() ?>'
    var job_logistik_warehouse = '<?= job_logistik_warehouse() ?>'
    var job_supply_sparepart = '<?= job_supply_sparepart() ?>'
    var dataListWarehouse
    var dataDetail
    var itemIdSelected = []
    var choosenId = 4
    var variableSaveMaterialOffline = {
        materialPickup: [],
        materialPickupDetail: [],
        deletedId: {
            materialPickup: [],
            materialPickupDetail: [],
        },
    }
    var offlineMode = false
    var dateStart = '2024-03-28'
    var dateEnd = '2024-03-28'
    var menuKategoriTransaksi = [{
        'index': 0,
        'name': 'Ambil Material',
        'text': 'Pekerja Verpack mengambil material pertama untuk setoran baru nya sesuai permintaan dari mandor',
        'icon': 'send_box',
    }, {
        'index': 1,
        'name': 'Tukar Material',
        'text': 'Pekerja Verpack menukar material yang rusak dengan yang baru',
        'icon': 'swap',
    }]
    // var variableSave = {
    //     materialPickup: [{
    //         id,
    //         warehouse_id,
    //         employee_id_pickup,
    //         employee_id_admin,
    //         is_pickup,
    //         pickup_at,
    //         note
    //     }],
    //     materialPickupDetail: [{
    //         id,
    //         material_pickup_id,
    //         item_id,
    //         unit_id_input,
    //         qty_input,
    //         unit_id,
    //         qty
    //     }],
    //     deletedId: {
    //         materialPickup: [],
    //         materialPickupDetail: []
    //     }
    // }

    $(document).ready(function() {
        loadData()
    })

    function loadData() {
        var data = {
            employeeId: user_id,
        }
        var url = "<?= api_produksi('loadPageStorageManage'); ?>"
        getData(data, url)
    }

    function getData(data, url) {
        $.ajax({
            url: url,
            method: "GET",
            dataType: 'JSON',
            data: data,
            error: function(xhr) {
                showOverlay('hide')
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Error Data'
                });
            },
            beforeSend: function() {
                showOverlay('show')
            },
            success: function(response) {
                showOverlay('hide')
                dataListWarehouse = response.data
                if (dataListWarehouse.warehouse.length) {
                    listGudang()
                } else {
                    emptyText('#kerangkaGudangDetail', 'Tidak Ada Data Tersedia')
                }
            }
        })
    }

    function listGudang() {
        var html = ''
        var a = 0
        dataListWarehouse.warehouse.forEach(e => {
            if (a == 2 && !choosenId) {
                choosenId = e.id
            }
            html += '<div class="card shadow-none mb-2 btn-list-planning" id="btnWarehouse' + e.id + '" onclick="chooseWarehouse(' + e.id + ')">'
            html += '<div class="card-body pt-3 pb-3">'
            html += '<div class="row">'
            html += '<div class="col-lg-10 col-md-9 align-self-center wrap-text">'
            html += '<b class="small-text">' + e.name + '</b>'
            html += '</div>'
            html += '<div class="col-lg-2 col-md-3 text-center align-self-center">'
            html += '<i class="fa fa-chevron-right"></i>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
            a++
        });
        $('#listGudang').html(html)
        // empty('#kerangkaGudangDetail', 'Pilih Gudang Terlebih Dahulu', '500px')
        chooseWarehouse(choosenId)
    }

    function chooseWarehouse(id, start = '2024-03-28', end = '2024-03-28') {
        choosenId = id
        colorizedMenu(id)
        var data = {
            // warehouseId: 1,
            warehouseId: id,
        }
        if (start || end) {
            data.dateStart = start
            data.dateEnd = end
        }
        var url = "<?= api_produksi('getWarehouseStockInfo'); ?>"
        $.ajax({
            url: url,
            method: "GET",
            dataType: 'JSON',
            data: data,
            error: function(xhr) {
                showOverlay('hide')
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Error Data'
                });
            },
            beforeSend: function() {
                showOverlay('show')
            },
            success: function(response) {
                showOverlay('hide')
                dataDetail = response.data
                kerangkaGudangDetail(id)
            }
        })
    }

    function colorizedMenu(id) {
        $('.btn-list-planning').removeClass('clicked')
        $('#btnWarehouse' + id).addClass('clicked')
    }

    var nameStorage = ''

    function kerangkaGudangDetail(id) {
        var data = dataListWarehouse.warehouse.find((v, k) => {
            if (v.id == id) return true
        })
        nameStorage = data.name
        var html = ''
        html += '<div class="row">'
        html += '<div class="col-6">'
        // html += '<p class="m-0 super-small-text" id="date">-</p>'
        html += '<b>' + data.name + '</b>'
        html += '<p class="m-0 small-text">' + formatDateIndonesia(dataDetail.dateStart) + ' - ' + formatDateIndonesia(dataDetail.dateEnd) + '</p>'
        html += '</div>'
        html += '<div class="col-6 text-end align-self-center">'
        html += '<button type="button" class="btn btn-primary shadow-none btn-sm shadow-none me-2" onclick="openModalScanner()"><i class="fa fa-qrcode me-2"></i>QR Scanner</button>'
        html += '<button type="button" class="btn btn-outline-dark shadow-none btn-sm shadow-none me-2" onclick="loadData()"><i class="fa fa-refresh me-2"></i>Refresh</button>'
        html += '<div class="btn-group">'
        html += '<button class="btn btn-sm btn-outline-dark shadow-none dropdown-toggle position-relative" type="button" id="dropdownMenuClickableInside" data-bs-toggle="dropdown" data-bs-auto-close="false" aria-expanded="false">'
        html += '<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" id="jumlahWaiting"></span>'
        html += '<i class="fa fa-bell-o"></i>'
        html += '</button>'
        html += '<ul class="dropdown-menu shadow-lg" aria-labelledby="dropdownMenuClickableInside" id="notifWaiting">'
        html += '</ul>'
        html += '</div>'
        html += '<button type="button" class="btn btn-primary shadow-none btn-sm shadow-none ms-2" onclick="filterCanvas()"><i class="fa fa-filter"></i></button>'

        html += '</div>'
        html += '<div class="col-12 pt-3">'
        html += '<div class="card shadow-none">'
        html += '<div class="card-body pt-3">'
        html += '<div class="row">'
        html += '<div class="col align-self-center">'
        html += '<b class="m-0 small-text">Item Stock</b>'
        html += '</div>'
        html += '<div class="col-3 align-self-center text-end">'
        html += ' <div class="form-group has-search me-2">'
        html += '<span class="fa fa-search form-control-feedback"></span>'
        html += '<input type="text" class="form-control-sm form-control" placeholder="Search Item" id="search_nama" autocomplete="off">'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        // html += '<div class="mt-2" id="listCurrentStock">'
        html += '<div class="mt-0">'
        // 
        html += '<div class="d-flex scro" style="min-width: 1200px;overflow-x: auto;overflow-y: hidden;padding-top:20px;padding-bottom:5px;" id="listCurrentStock">'
        html += '</div>'
        // 
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '<div class="col-12 pt-3">'
        html += '<div class="card shadow-none h-100">'
        html += '<div class="card-body p-0 pt-3">'
        html += '<div class="row">'

        html += '<div class="col">'
        html += '<b class="m-0 ms-3 small-text">Detail Transaction</b>'

        html += '</div>'

        html += '<div class="col text-end">'
        html += '<button type="button" class="btn btn-outline-dark shadow-none btn-sm shadow-none me-3" onclick="formTransaction()"><i class="fa fa-paper-plane-o me-2"></i>Transaction</button>'

        html += '</div>'

        html += '<div class="col-12 pt-3">'
        html += '<table class="table table-sm table-hover w-100" id="tableForm">'
        html += '<thead>'
        html += '<tr>'
        html += '<th class="small-text text-center align-middle border-top" style="height:40px;">#</th>'
        html += '<th class="small-text text-center align-middle border-top" style="height:40px;"></th>'
        html += '<th class="small-text text-center align-middle border-top" style="height:40px;">Time</th>'
        html += '<th class="small-text text-center align-middle border-top" style="height:40px;">User</th>'
        html += '<th class="small-text text-center align-middle border-top  style="height:40px;"bg-light">Warehouse</th>'
        html += '<th class="small-text text-center align-middle border-top  style="height:40px;"bg-light">Reference</th>'
        html += '<th class="small-text text-center align-middle border-top  style="height:40px;"text-success"><i class="fa fa-plane me-1"></i>Direct</th>'
        html += '<th class="small-text text-center align-middle border-top" style="height:40px;">Items / Materials</th>'
        html += '<th class="small-text text-center align-middle border-top" style="height:40px;">Jenis<br>Transaksi</th>'
        html += '<th class="small-text text-center align-middle border-top" style="height:40px;">QTY</th>'
        html += '<th class="small-text text-center align-middle border-top" style="height:40px;">Status</th>'
        html += '<th class="small-text text-center align-middle border-top" style="height:40px;"></th>'
        html += '</tr>'
        html += '</thead>'
        html += '<tbody id="tableDetail">'
        html += '</tbody>'
        html += '</table>'
        html += '</div>'

        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        $('#kerangkaGudangDetail').html(html)
        $('#dropdownMenuClickableInside').removeClass('shake-bottom')
        if (dataDetail.mutationStockWaiting.length) {
            $('#jumlahWaiting').removeClass('d-none')
            $('#dropdownMenuClickableInside').addClass('shake-bottom')
            if (dataDetail.mutationStockWaiting.length > 100) {
                $('#jumlahWaiting').html('<p class="m-0">99+</p>')
            } else {
                $('#jumlahWaiting').html('<p class="m-0">' + dataDetail.mutationStockWaiting.length + '</p>')
            }
        } else {
            $('#jumlahWaiting').addClass('d-none')
        }
        notifWaiting()
    }

    function notifWaiting() {
        var html = ''
        html += '<div class="p-0" style="width: 300px;max-height: 400px;overflow-x: hidden;overflow-y: auto;">'
        dataDetail.mutationStockWaiting.forEach(e => {
            html += '<li><a class="dropdown-item p-3 border-bottom" href="javascript:void(0)" onclick="detailWaiting(' + e.id + ')">'
            html += '<div class="row">'
            html += '<div class="col-4 text-center">'
            html += '<div class="circle-shape bg-light-dongker">'
            html += '<p class="m-0 text-wrap small-text text-white">' + e.subject_sender.name + '</p>'
            html += '</div>'
            html += '</div>'
            html += '<div class="col-8 align-self-center">'

            html += '<div class="row">'
            html += '<div class="col-6 p-0">'
            html += '<p class="m-0 super-small-text text-dark"><b>' + shortenName(e.employee_sender.name, 2) + '</b></p>'
            html += '</div>'
            html += '<div class="col-6 ps-0 text-end">'
            html += '<p class="m-0 super-small-text text-dark-grey text-wrap">' + formatDateIndonesiaTanggalBulanSort(e.time) + ' ' + formatJamMenit(e.time) + '</p>'
            html += '</div>'
            html += '<div class="col-12 p-0 pt-2">'
            html += '<p class="m-0 text-wrap small-text">' + shortenText('Anda mendapatkan permintaan persetujuan untuk ' + getAliases(e.machine_transfer_detail), 100) + '</p>'
            if (e.machine_next) {
                html += '<p class="m-0 mt-2 text-wrap super-small-text text-success"><i class="fa fa-paper-plane me-2"></i>Send to ' + e.machine_next.name + '</p>'
            }
            html += '</div>'
            html += '</div>'

            html += '</div>'
            html += '</div>'
            html += '</a></li>'
        })
        if (!dataDetail.mutationStockWaiting.length) {
            html += '<div class="card border-0 shadow-none">'
            html += '<div class="card-body p-5 text-center">'
            html += '<p class="m-0 super-small-text"><i>Tidak Notifikasi</i></p>'
            html += '</div>'
            html += '</div>'
        }
        html += '</div>'
        html += '<li><hr class="dropdown-divider mt-0"></li>'
        html += '<li class="text-center p-1" onclick="seeAllWaiting()"><p class="m-0 small-text text-primary">See All</p></li>'
        $('#notifWaiting').html(html)
        listCurrentStock()
    }

    function listCurrentStock() {
        var html = ''
        var a = 0
        if (dataDetail.mutationSummary.length) {
            dataDetail.mutationSummary.forEach(e => {
                html += listCurrentStock_cardModel(a, e)
                a++
            })
            $('#listCurrentStock').html(html)
            draggableTables('listCurrentStock')
        } else {
            emptyText('#listCurrentStock', 'Tidak Ada Data yang Tersedia')
        }
        tableDetail()
    }

    function listCurrentStock_cardModel(a, data) {
        var dataSummary = dataDetail.mutationSummary.find((v, k) => {
            if (v.item.id == data.item.id) return true
        })
        var html = ''
        html += '<div class="card shadow-sm me-2 card-item-stock" style="min-width:180px;max-width:180px;" id="card_search' + a + '">'
        html += '<div class="card-body p-0 m-0">'
        html += '<div class="row p-0 m-0">'
        html += '<div class="col-12 p-3 border-bottom" style="height:80px;">'
        var name = data.item.alias
        if (!name) {
            name = shortenText(data.item.name, 30)
        }
        html += '<p class="mb-1 fw-bolder small lh-1 text_search" data-id="' + a + '">' + name + '</p>'
        html += '<p class="m-0 small-text">' + data.unit_target.name + '</p>'
        html += '</div>'
        html += '<div class="col-12 p-3">'

        html += '<p class="m-0 super-small-text fw-bold">Detail</p>'
        html += '<div class="row mt-1">'
        html += '<div class="col-5 pe-0 super-small-text">S. Awal</div>'
        var stockAwal = conversiToTarget(dataSummary.stok_awal, dataSummary.unit_target.multiplier, dataSummary.unit_target.name, dataSummary.unit_input.name)
        html += '<div class="col-7 ps-0 align-self-center pro-super-small-text fw-bolder text-end">' + stockAwal + '</div>'
        html += '<div class="col-5 pe-0 super-small-text"><i class="me-2 fa fa-caret-down text-success"></i>In</div>'
        var stockIn = conversiToTarget(dataSummary.qty_in, dataSummary.unit_target.multiplier, dataSummary.unit_target.name, dataSummary.unit_input.name)
        html += '<div class="col-7 ps-0 align-self-center pro-super-small-text fw-bolder text-end">' + stockIn + '</div>'
        html += '<div class="col-5 pe-0 super-small-text"><i class="me-2 fa fa-caret-up text-danger"></i>Out</div>'
        var stockOut = conversiToTarget(dataSummary.qty_out, dataSummary.unit_target.multiplier, dataSummary.unit_target.name, dataSummary.unit_input.name)
        html += '<div class="col-7 ps-0 align-self-center pro-super-small-text fw-bolder text-end">' + stockOut + '</div>'
        html += '<div class="col-5 pe-0 super-small-text">S. Akhir</div>'
        var stockAkhir = conversiToTarget(dataSummary.stok_akhir, dataSummary.unit_target.multiplier, dataSummary.unit_target.name, dataSummary.unit_input.name)
        html += '<div class="col-7 ps-0 align-self-center pro-super-small-text fw-bolder text-end">' + stockAkhir + '</div>'
        html += '</div>'

        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        return html
    }

    function listCurrentStock_oldModel(a, data) {
        var html = ''
        html += '<div class="card shadow-none border-end-0 border-start-0" style="border-radius:0px;" id="card_search' + a + '">'
        html += '<div class="card-body">'
        html += '<div class="row">'
        html += '<div class="col">'
        html += '<p class="m-0 super-small-text text_search" data-id="' + a + '">' + data.item.code + '</p>'
        html += '<p class="m-0 super-small-text"><b class="text_search" data-id="' + a + '">' + data.item.name + '</b></p>'
        html += '</div>'
        html += '<div class="col-auto text-end align-self-center">'
        var nilaiConversi = conversiToTarget(data.qty, data.unit_target.multiplier, data.unit_target.name, data.unit_input.name)
        html += '<h5 class="m-0 text-orange small-text"><b>' + nilaiConversi + '</b></h5>'
        // html += '<p class="m-0 small-text">' + data.unit.name + '</p>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        return html
    }

    function ubahTeks(input) {
        return input.replace(/_/g, '<br>').toUpperCase();
    }

    function tableDetail() {
        var html = ''
        if (dataDetail.mutationStock.length) {
            var a = 1
            dataDetail.mutationStock.forEach(e => {
                // console.log(e)
                var arrow = '<i class="fa fa-arrow-down text-success"></i>'
                if (e.action == 'OUT') {
                    arrow = '<i class="fa fa-arrow-up text-danger"></i>'
                }
                if (e.status == 'WAITING') {
                    var status = '<span class="badge rounded-pill bg-light text-dark-grey">Waiting</span>'
                } else if (e.status == 'RECEIVE') {
                    var status = '<span class="badge rounded-pill bg-success">Diterima</span>'
                } else if (e.status == 'REJECTED') {
                    var status = '<span class="badge rounded-pill bg-danger">Ditolak</span>'
                } else {
                    var status = ''
                }
                var colorToday = ''
                if (formatDate(e.time) == currentDate()) {
                    colorToday = 'bg-light-primary'
                }
                var employeeName = '-'
                if (e.employee) {
                    employeeName = e.employee.name.split(' ')[0]
                }
                var employeeReferenceName = ''
                if (e.employee_reference) {
                    employeeReferenceName = e.employee_reference.name.split(' ')[0]
                }
                html += '<tr class="' + colorToday + '">'
                html += '<td class="small-text align-middle text-center">' + a++ + '</td>'
                html += '<td class="small-text align-middle text-center">' + arrow + '</td>'
                html += '<td class="small-text align-middle text-center">' + formatDateIndonesiaTanggalBulanSort(e.time) + ' ' + formatJamMenit(e.time) + '</td>'
                html += '<td class="small-text align-middle text-center">' + employeeName + '</td>'
                html += '<td class="small-text align-middle text-center bg-light">' + e.warehouse.name + '</td>'
                html += '<td class="small-text align-middle text-center bg-light">'
                html += '<p class="m-0">' + e.reference.name + '</p>'
                html += '<p class="m-0 super-small-text fw-bolder">' + employeeReferenceName + '</p>'
                html += '</td>'
                var next = '-'
                if (e.machine_next) {
                    next = '<span class="text-success fw-bolder">' + e.machine_next.name + '</span>'
                }
                html += '<td class="small-text align-middle text-center">' + next + '</td>'
                html += '<td class="small-text align-middle text-center">' + e.item.alias + '</td>'
                html += '<td class="small-text align-middle text-center">' + ubahTeks(e.reference_table) + '</td>'
                var nilaiConversi = conversiToTarget(e.qty, e.unit_target.multiplier, e.unit_target.name, e.unit_input.name)
                html += '<td class="small-text align-middle text-end fw-bolder text-orange text-nowrap">' + nilaiConversi + '</td>'
                html += '<td class="small-text align-middle text-center">' + status + '</td>'
                html += '<td class="small-text align-middle">'
                html += '<button type="button" class="btn btn-outline-dark shadow-none btn-sm" onclick="detailWaiting(' + e.id + ')"><i class="fa fa-eye"></i></button>'
                html += '</td>'
                html += '</tr>'
            });
            $('#tableDetail').html(html)
            $('#tableForm').DataTable({
                ordering: false, // Menonaktifkan pengurutan
                pageLength: 200,
                scrollY: "500px",
                scrollX: true,
                scrollCollapse: true,
                paging: false,
                fixedHeader: true,
                searching: false,
                info: false,
            })
        } else {
            html += '<tr>'
            html += '<td class="text-center p-5" colspan="11"><i class="small-text">Tidak Ada Data yang Tersedia</i></td>'
            html += '</tr>'
            $('#tableDetail').html(html)
        }
    }

    function viewDetail() {
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg');
        var html_header = '';
        html_header += '<h5 class="modal-title">Machine Stock</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);
        var html_body = '';
        html_body += '<div class="row p-3">'
        html_body += '</div>'
        $('#modalBody').html(html_body).removeClass('pt-0 pb-0 p-0')
        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>'
        $('#modalFooter').html(html_footer).removeClass('d-none');
    }

    // search multi
    $(document).on('keyup', '#search_nama', function(e) {
        searching()
    })

    function unique(array) {
        return array.filter(function(el, index, arr) {
            return index == arr.indexOf(el);
        });
    }

    function searching() {
        var value = $('#search_nama').val().toLowerCase();
        var cards = $('.text_search').map(function() {
            return $(this).text();
        }).get();
        var id_cards = $('.text_search').map(function() {
            return $(this).data('id');
        }).get();
        var array = []
        for (let i = 0; i < cards.length; i++) {
            var element = cards[i].toLowerCase().indexOf(value);
            $('#card_search' + id_cards[i]).addClass('d-none')
            if (element > -1) {
                array.push(id_cards[i])
            }
        }
        var array_arranged = unique(array)
        for (let i = 0; i < array_arranged.length; i++) {
            $('#card_search' + array_arranged[i]).removeClass('d-none')
        }
    }
    // search multi 2
    $(document).on('keyup', '#search_nama2', function(e) {
        searching2()
    })

    function searching2() {
        var value = $('#search_nama2').val().toLowerCase();
        var cards = $('.text_search2').map(function() {
            return $(this).text();
        }).get();
        var id_cards = $('.text_search2').map(function() {
            return $(this).data('id');
        }).get();
        var array = []
        for (let i = 0; i < cards.length; i++) {
            var element = cards[i].toLowerCase().indexOf(value);
            $('#card_search2' + id_cards[i]).addClass('d-none')
            if (element > -1) {
                array.push(id_cards[i])
            }
        }
        var array_arranged = unique(array)
        for (let i = 0; i < array_arranged.length; i++) {
            $('#card_search2' + array_arranged[i]).removeClass('d-none')
        }
    }

    function formTransaction() {
        itemIdSelected = []
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl');
        var html_header = '';
        html_header += '<h5 class="modal-title">Transaction</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);
        var html_body = '';
        html_body += '<div class="row">'
        html_body += '<div class="col-3 border-end ps-0">'

        html_body += '<div class="row p-0">'
        html_body += '<div class="col-auto align-self-center p-4 pb-0">'
        html_body += '<p class="small-text"><b>Item Stock</b></p>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '<div class="row">'
        html_body += '<input type="text" class="form-control mt-3" placeholder="Search" id="search_nama2" autocomplete="off" style="border-radius:0px;border-left:0px;border-right:0px;">'
        html_body += '<div class="p-0 m-0" style="height: 400px;overflow-x: hidden;overflow-y: auto;">'
        var a = 0
        dataDetail.currentStock.forEach(e => {
            html_body += '<div class="card shadow-none border-end-0 border-start-0 pointer" style="border-radius:0px;" id="card_search2' + e.item.id + '" onclick="chooseItem(' + e.item.id + ')">'
            html_body += '<div class="card-body">'
            html_body += '<div class="row">'
            html_body += '<div class="col">'
            html_body += '<p class="m-0 super-small-text text_search2" data-id="' + e.item.id + '">' + e.item.code + '</p>'
            html_body += '<p class="m-0 super-small-text"><b class="text_search2" data-id="' + e.item.id + '">' + e.item.name + '</b></p>'
            html_body += '</div>'
            html_body += '<div class="col-auto text-end align-self-center">'
            var nilaiConversi = conversiToTarget(e.qty, e.unit_target.multiplier, e.unit_target.name, e.unit_input.name)
            html_body += '<h5 class="m-0 text-orange small-text"><b>' + nilaiConversi + '</b></h5>'
            // html_body += '<p class="m-0 small-text">' + e.unit.name + '</p>'
            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
            a++
        })

        html_body += '</div>'
        html_body += '</div>'

        html_body += '</div>'
        html_body += '<div class="col-9">'

        html_body += '<div class="row p-0">'
        html_body += '<div class="col-auto align-self-center p-4 pb-0">'
        html_body += '<p class="small-text"><b>Form Transaction</b></p>'
        html_body += '</div>'
        html_body += '<div class="col-12" id="listFormTransaction">'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody').html(html_body).addClass('pt-0 pb-0').removeClass('p-0')
        $('.nominal').number(true);
        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>'
        html_footer += '<button type="button" class="btn btn-primary btn-sm" id="btnSimpan" disabled onclick="arrangeVariableInsert()">Simpan</button>'
        $('#modalFooter').html(html_footer).removeClass('d-none')
        empty('#listFormTransaction', 'Belum Ada Data yang Terpilih', '300px')
    }

    function chooseItem(id) {
        if ($('#card_search2' + id).hasClass('selected')) {
            $('#card_search2' + id).removeClass('selected')
            itemIdSelected = itemIdSelected.filter(e => e.item.id != id);
        } else {
            $('#card_search2' + id).addClass('selected')
            var data = deepCopy(dataDetail.currentStock.find((v, k) => {
                if (v.item.id == id) return true
            }))
            data.qty_fill = 0
            if (data) {
                itemIdSelected.push(data)
            }
        }
        listFormTransaction()
    }

    function listFormTransaction() {
        var html = ''
        if (itemIdSelected.length) {
            html += '<div class="row">'
            html += '<div class="col-8">'
            itemIdSelected.forEach(e => {
                var nilaiConversi = conversiToTarget(e.qty, e.unit_target.multiplier, e.unit_target.name, e.unit_input.name)
                // card
                html += '<div class="card shadow-none mb-2" id="cardHasil' + e.item.id + '">'
                html += '<span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle" style="width: 20px; height: 20px; display: flex; justify-content: center; align-items: center;cursor:pointer;" onclick="chooseItem(' + e.item.id + ')"><i class="small-text fa fa-times text-light"></i></span>'
                html += '<div class="card-body">'
                html += '<div class="row">'


                html += '<div class="row">'
                html += '<div class="col-6">'
                html += '<p class="m-0 super-small-text text-orange"><b>' + e.item.code + '</b></p>'
                html += '<p class="m-0 small-text"><b>' + e.item.name + '</b></p>'
                html += '</div>'
                html += '<div class="col-6">'

                html += '<div class="row">'
                if (e.unit_target.id != e.unit.id) {
                    html += '<div class="col-8 mb-2">'
                    html += '<input type="text" id="qty" class="form-control form-control-sm nominal qty qty_item' + e.item.id + '" required="required" onkeyup="fillForm(event,' + e.item.id + ')" autocomplete="off" value="' + e.qty_fill + '" data-item="' + e.item.id + '" data-unit="' + e.unit_target.id + '" style="background-color:transparent;border:0px;" data-stok="' + e.qty + '" data-tipe="' + "unit_target" + '">'
                    html += '<hr class="m-0">'
                    html += '</div>'
                    html += '<div class="col-4 mb-2 align-self-center">'
                    html += '<p class="m-0 small"><b>' + e.unit_target.name + '</b></p>'
                    html += '</div>'
                }
                html += '<div class="col-8">'
                html += '<input type="text" id="qty" class="form-control form-control-sm nominal qty qty_item' + e.item.id + '" required="required" onkeyup="fillForm(event,' + e.item.id + ')" autocomplete="off" value="' + e.qty_fill + '" data-item="' + e.item.id + '" data-unit="' + e.unit.id + '" style="background-color:transparent;border:0px;" data-stok="' + e.qty + '" data-tipe="' + "unit_input" + '">'
                html += '<hr class="m-0">'
                html += '<p class="m-0 mt-2 float-end super-small-text">Sisa Stok : <b class="text-orange">' + nilaiConversi + '</b></p>'
                html += '</div>'
                html += '<div class="col-4 align-self-center">'
                html += '<p class="m-0 small"><b>' + e.unit.name + '</b></p>'
                html += '</div>'

                html += '</div>'

                html += '</div>'
                html += '</div>'

                html += '</div>'
                html += '</div>'
                html += '</div>'
                // card
            });
            html += '</div>'

            html += '<div class="col-4">'

            html += '<div class="card shadow-none">'
            html += '<div class="card-body">'
            html += '<p class="small-text"><b>Tujuan Transaksi</b></p>'
            html += '<select class="form-select" name="state" id="tujuanTransaksi" onchange="eventButton();findTanggalTransaksi()">'
            html += '<option value="" disabled selected>Pilih Tujuan</option>'
            dataDetail.warehouseTransferDestination.forEach(e => {
                html += '<optgroup label="' + e.type + '">'
                if (e.data) {
                    e.data.forEach(el => {
                        var gudang = ''
                        if (el.gudang_id) {
                            gudang = el.gudang_id
                        }
                        html += '<option value="' + el.id + '" data-variable="' + el.variable + '" data-gudang="' + gudang + '" data-type="' + e.type + '">' + el.name + '</option>'
                    });
                }
                html += '</optgroup>'
            });
            html += '</select>'
            html += '<p class="small-text mt-3"><b>Tanggal Transaksi</b></p>'
            html += '<input class="form-control datepicker" type="text" id="dateInput" placeholder="Tanggal" style="padding:0.875rem 3.375rem 0.875rem 1.125rem" onchange="eventButton()" disabled>'
            html += '<p class="small-text mt-3"><b>Waktu (Jam)</b></p>'
            html += '<input type="time" id="waktu" class="form-control" value="" required="required" oninput="eventButton()" disabled>'
            html += '<p class="small-text mt-3"><b>Notes</b></p>'
            html += '<textarea class="form-control" rows="8" placeholder="Tuliskan catatan disini" id="notes"></textarea>'
            html += '</div>'
            html += '</div>'

            html += '</div>'

            html += '</div>'
            $('#listFormTransaction').html(html)
            eventButton()
            // $('#dateInput').datepicker({
            //     format: "yyyy-mm-dd",
            //     orientation: "auto",
            //     multidate: true,
            //     startDate: '2023-08-01',
            //     endDate: '2023-08-31',
            //     datesDisabled: [],
            //     todayHighlight: true,
            //     minDate: 0,
            // });
        } else {
            empty('#listFormTransaction', 'Belum Ada Data yang Terpilih', '300px')
        }
        $('.nominal').number(true);
    }

    function detailWaiting(id) {
        var jenis = 'parent'
        var data = dataDetail.mutationStockWaiting.find((v, k) => {
            if (v.id == id) return true
        })
        if (!data) {
            jenis = 'detail'
            var data = dataDetail.mutationStock.find((v, k) => {
                if (v.id == id) return true
            })
            var sender = data.employee.name
            var sender_subject = 'Warehouse'
            var sender_name = data.warehouse.name
            var receiver_subject = 'Reference'
            var receiver_name = data.reference.name
        } else {
            var sender = data.employee_sender.name
            var sender_subject = toTitleCase(data.subject_sender.subject) + ' Asal'
            var sender_name = data.subject_sender.name
            var receiver_subject = toTitleCase(data.subject_receiver.subject) + ' Tujuan'
            var receiver_name = data.subject_receiver.name
        }
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-dialog-scrollable');
        var html_header = '';
        html_header += '<h5 class="modal-title">Detail Transaction</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);
        var html_body = '';
        html_body += '<div class="row">'
        html_body += '<div class="col-12">'

        html_body += '<div class="row">'

        html_body += '<div class="col-3">'
        html_body += '<p class="m-0 small-text"><b>Waktu Transaksi</b></p>'
        html_body += '</div>'
        html_body += '<div class="col-9">'
        html_body += '<p class="m-0 small-text">' + getDateStringWithTime(data.time) + '</p>'
        html_body += '</div>'
        html_body += '<div class="col-12">'
        html_body += '<hr>'
        html_body += '</div>'
        html_body += '<div class="col-3">'
        html_body += '<p class="m-0 small-text"><b>Dibuat Oleh</b></p>'
        html_body += '</div>'
        html_body += '<div class="col-9">'
        html_body += '<p class="m-0 small-text">' + sender + '</p>'
        html_body += '</div>'
        html_body += '<div class="col-12">'
        html_body += '<hr>'
        html_body += '</div>'
        html_body += '<div class="col-3">'
        html_body += '<p class="m-0 small-text"><b>' + sender_subject + '</b></p>'
        html_body += '</div>'
        html_body += '<div class="col-9">'
        html_body += '<p class="m-0 small-text">' + sender_name + '</p>'
        html_body += '</div>'
        html_body += '<div class="col-12">'
        html_body += '<hr>'
        html_body += '</div>'
        html_body += '<div class="col-3">'
        html_body += '<p class="m-0 small-text"><b>' + receiver_subject + '</b></p>'
        html_body += '</div>'
        html_body += '<div class="col-9">'
        html_body += '<p class="m-0 small-text">' + receiver_name + '</p>'
        html_body += '</div>'
        html_body += '<div class="col-12">'
        html_body += '<hr>'
        html_body += '</div>'
        html_body += '<div class="col-3">'
        if (data.machine_next) {
            html_body += '<p class="m-0 small-text text-success"><b><i class="fa fa-plane me-1"></i>Direct</b></p>'
            html_body += '</div>'
            html_body += '<div class="col">'
            html_body += '<p class="m-0 small-text text-success fw-bolder">' + data.machine_next.name + '</p>'
            html_body += '</div>'
            html_body += '<div class="col">'
            // html_body += '<p class="m-0" style="font-size:8px;">*) Jika Disetujui maka Item tersebut akan diteruskan ke Direct yang dituju</p>'
        } else {
            html_body += '<p class="m-0 small-text"><b><i class="fa fa-plane me-1"></i>Direct</b></p>'
            html_body += '</div>'
            html_body += '<div class="col-9">'
            html_body += '<p class="m-0 small-text">No</p>'
        }
        html_body += '</div>'
        html_body += '<div class="col-12">'
        html_body += '<hr>'
        html_body += '</div>'
        html_body += '<div class="col-3">'
        html_body += '<p class="m-0 small-text"><b>Waktu Persetujuan</b></p>'
        html_body += '</div>'
        html_body += '<div class="col-9">'
        if (data.status == 'WAITING') {
            html_body += '<div class="row">'
            html_body += '<div class="col">'
            html_body += '<input class="form-control form-control-sm datepicker" type="text" id="dateTransaction" placeholder="Tanggal" style="padding:0.875rem 3.375rem 0.875rem 1.125rem" value="' + formatDate(data.time) + '">'
            html_body += '</div>'
            html_body += '<div class="col">'
            html_body += '<input type="time" id="timeTransaction" class="form-control form-control-sm" style="padding:0.875rem 3.375rem 0.875rem 1.125rem" value="' + formatTime(data.time) + '" required="required">'
            html_body += '</div>'
            html_body += '</div>'
        } else {
            html_body += '<p class="m-0 small-text">' + formatDate(data.time) + ' ' + formatTime(data.time) + '</p>'
        }

        html_body += '</div>'
        html_body += '<div class="col-12">'
        html_body += '<hr>'
        html_body += '</div>'
        html_body += '<div class="col-3">'
        html_body += '<p class="m-0 small-text"><b>Detail</b></p>'
        html_body += '</div>'
        html_body += '<div class="col-9">'
        // detail
        html_body += '<div class="row">'
        if (jenis == 'parent') {
            data.machine_transfer_detail.forEach(el => {
                var nilaiConversi = conversiToTarget(el.qty, el.unit_target.multiplier, el.unit_target.name, el.unit_input.name)
                html_body += '<div class="col">'
                html_body += '<p class="m-0 small-text">' + el.item.name + '</p>'
                html_body += '</div>'
                html_body += '<div class="col-auto text-end">'
                html_body += '<p class="m-0 small-text"><span class="text-orange"><b>' + nilaiConversi + '</b></span></p>'
                html_body += '</div>'
            });
        } else {
            var nilaiConversi = conversiToTarget(data.qty, data.unit_target.multiplier, data.unit_target.name, data.unit_input.name)
            html_body += '<div class="col">'
            html_body += '<p class="m-0 small-text">' + data.item.name + '</p>'
            html_body += '</div>'
            html_body += '<div class="col-auto text-end">'
            html_body += '<p class="m-0 small-text"><span class="text-orange"><b>' + nilaiConversi + '</b></span></p>'
            html_body += '</div>'
        }
        html_body += '</div>'
        // detail
        html_body += '</div>'

        html_body += '</div>'

        html_body += '</div>'
        html_body += '<div class="col-12">'
        if (data.status == 'WAITING') {
            var next_id = null
            var next_name = null
            if (data.machine_next) {
                next_id = data.machine_next.id
                next_name = data.machine_next.name
            }
            html_body += '<div class="row pt-5">'
            html_body += '<div class="col" style="height:50px;">'
            html_body += '<button class=" w-100 h-100 btn btn-sm btn-outline-danger" onclick="approvalData(' + "'" + id + "'" + ',0,' + next_id + ',' + "'" + next_name + "'" + ')"><i class="me-2 fa fa-times"></i> Reject</button>'
            html_body += '</div>'
            html_body += '<div class="col" style="height:50px;">'
            html_body += '<button class=" w-100 h-100 btn btn-sm btn-outline-success" onclick="approvalData(' + "'" + id + "'" + ',1,' + next_id + ',' + "'" + next_name + "'" + ')"><i class="me-2 fa fa-check"></i> Accept</button>'
            html_body += '</div>'
            html_body += '</div>'
        }
        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody').html(html_body).removeClass('pt-0 pb-0 p-0')
        $('.nominal').number(true);
        $('#dateTransaction').datepicker({
            format: "yyyy-mm-dd",
            orientation: "auto",
            todayHighlight: true,
        });
        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>'
        html_footer += '<button type="button" class="btn btn-primary btn-sm" id="btnSimpan" disabled onclick="">Simpan</button>'
        $('#modalFooter').html(html_footer).addClass('d-none');
    }

    function approvalData(id, approval, machine_next, machine_next_name) {
        var status = 'menolak'
        if (approval) {
            status = 'menyetujui'
        }
        var isSendNextMachine = 0
        var dataSwal = {
            text: 'Apakah anda yakin ingin ' + status + ' data tersebut ?',
            icon: 'warning',
            showCancelButton: true,
            showConfirmButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yakin',
            cancelButtonText: 'Batal',
        }
        if (machine_next) {
            isSendNextMachine = 1
            dataSwal = {
                text: 'Anda diminta menentukan untuk otomatis terkirim ke ' + machine_next_name + ' atau hanya masuk ke stok ' + nameStorage + ' ?',
                icon: 'warning',
                showCancelButton: true,
                showConfirmButton: true,
                showDenyButton: true,
                denyButtonColor: '#3085d6',
                confirmButtonColor: '#5cb85c',
                denyButtonText: 'Tetap ke ' + nameStorage,
                cancelButtonText: 'Batal',
                customClass: 'swal-wide',
                confirmButtonText: 'Lanjut ke ' + machine_next_name,
            }
        }

        var receivedAt = $('#dateTransaction').val() + ' ' + $('#timeTransaction').val()
        if (dataDetail.mutationStockWaiting.length) {
            var dataFind = dataDetail.mutationStockWaiting.find((v, k) => {
                if (v.id == id) return true
            })
            if (dataFind) {
                receivedAt = dataFind.time
            }
        }
        Swal.fire(dataSwal).then((result) => {
            if (result.isConfirmed) {
                var type = 'POST'
                var button = '#btnSimpan'
                var url = '<?php echo api_produksi('setMachineTransferReceive'); ?>'
                var data = {
                    id: id,
                    isReceive: approval,
                    employeeId: user_id,
                    isSendNextMachine: isSendNextMachine,
                    receivedAt: receivedAt,
                }
                kelolaData(data, type, url, button)
            } else if (result.isDenied) {
                var type = 'POST'
                var button = '#btnSimpan'
                var url = '<?php echo api_produksi('setMachineTransferReceive'); ?>'
                var data = {
                    id: id,
                    isReceive: approval,
                    employeeId: user_id,
                    isSendNextMachine: 0,
                    receivedAt: receivedAt,
                }
                kelolaData(data, type, url, button)
            }
        })

    }

    function kelolaData(data, type, url, button) {
        $.ajax({
            url: url,
            type: type,
            data: data,
            error: function(xhr) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Error Data'
                });
                $(button).prop("disabled", false);
            },
            beforeSend: function() {
                $(button).prop("disabled", true);
            },
            success: function(response) {
                $(button).prop("disabled", false);
                $('#modal').modal('hide')
                chooseWarehouse(choosenId)
                fillDataWaiting()
            }
        });
    }

    function fillForm(event, id) {
        const value = event.target.value;
        const stok = event.target.dataset.stok;
        const tipe = event.target.dataset.tipe;
        colorizedValue(removeCommas(value), stok, id, tipe)
    }

    function removeCommas(numberWithCommas) {
        return numberWithCommas.replace(/,/g, '');
    }

    function colorizedValue(value, stok, id, material_id, tipe) {
        var data = itemIdSelected.find((v, k) => {
            if (v.item.id == id) return true
        })
        value = calculateConvertedMaterial(id).totalDefault
        data.qty_fill = value
        if (value) {
            if (parseFloat(value) <= parseFloat(stok)) {
                $('#cardHasil' + id).removeClass('bg-light-danger')
                $('#cardHasil' + id).addClass('bg-light-success')
            } else if (parseFloat(value) > parseFloat(stok)) {
                $('#cardHasil' + id).removeClass('bg-light-success')
                $('#cardHasil' + id).addClass('bg-light-danger')
            }
        } else {
            $('#cardHasil' + id).removeClass('bg-light-success')
            $('#cardHasil' + id).removeClass('bg-light-danger')
        }
        eventButton()
    }

    function eventButton() {
        var available = checkDataValidity(itemIdSelected)
        if (available) {
            $('#btnSimpan').removeAttr('disabled', true)
        } else {
            $('#btnSimpan').attr('disabled', true)
        }
        if ($('#dateInput').val()) {
            $('#waktu').removeAttr('disabled', true)
        } else {
            $('#waktu').attr('disabled', true)
        }
    }

    function findTanggalTransaksi() {
        if ($('#tujuanTransaksi').val()) {
            var data = {}
            var value = $("#tujuanTransaksi").val()
            var type = $("#tujuanTransaksi").find(':selected').data('type')
            if (type == 'MACHINE') {
                data.machineId = value
            } else {
                data.warehouseId = value
            }
            $.ajax({
                url: '<?php echo api_produksi('getWorkPlanDate'); ?>',
                type: 'GET',
                data: data,
                error: function(xhr) {
                    showOverlay('hide')
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Error Data'
                    });
                },
                beforeSend: function() {
                    showOverlay('show')
                },
                success: function(response) {
                    showOverlay('hide')
                    $('#dateInput').removeAttr('disabled', true)
                    var dataDate = getMissingDates(response.data)
                    var dateRange = getStartAndEndDate(response.data)
                    $('#dateInput').datepicker({
                        format: "yyyy-mm-dd",
                        orientation: "auto",
                        startDate: dateRange.dateStart,
                        endDate: dateRange.dateEnd,
                        datesDisabled: dataDate,
                        todayHighlight: true,
                        minDate: 0,
                        autoclose: true,
                    });
                }
            });
        }
    }

    function checkDataValidity(data) {
        for (let i = 0; i < data.length; i++) {
            const item = data[i];

            if (parseFloat(item.qty_fill) > parseFloat(item.qty)) {
                return 0;
            }
        }
        if (!$('#tujuanTransaksi').val() || !$('#dateInput').val() || !$('#waktu').val()) {
            return 0
        }
        return 1;
    }

    function arrangeVariableInsert() {
        var qty = $(".qty").map(function() {
            return $(this).val();
        }).get();
        var itemId = $(".qty").map(function() {
            return $(this).data('item');
        }).get();
        var unit = $(".qty").map(function() {
            return $(this).data('unit');
        }).get();
        var uniqueItemId = [...new Set(itemId)];
        var tujuanTransaksi = $("#tujuanTransaksi").val()
        var tujuanTransaksiVariable = $("#tujuanTransaksi").find(':selected').data('variable')
        var tujuanTransaksiGudang = $("#tujuanTransaksi").find(':selected').data('gudang')
        var data = {}
        data.machineTransfer = []
        var id = new Date().getTime()
        data.machineTransfer.push({
            id: id,
            machine_id: tujuanTransaksi,
            send_at: $('#dateInput').val() + ' ' + $('#waktu').val() + ':00',
            employee_id_sender: user_id,
            action: 'IN',
            tag: 'TRANSFER',
            note: $('#notes').val(),
            gudang_id: choosenId
        })
        data.machineTransferDetail = []
        // for (let i = 0; i < qty.length; i++) {
        //     if (qty[i]) {
        //         data.machineTransferDetail.push({
        //             id: id + '' + i,
        //             machine_transfer_id: id,
        //             item_id: itemId[i],
        //             unit_id: unit[i],
        //             qty: qty[i]
        //         })
        //     }
        // }
        var index = 0
        uniqueItemId.forEach(e => {
            var dataProductsDefault = deepCopy(dataDetail.currentStock.find((v, k) => {
                if (v.item.id == e) return true
            }))
            var total = calculateConvertedMaterial(e).totalDefault
            data.machineTransferDetail.push({
                id: id + '' + index,
                machine_transfer_id: id,
                item_id: e,
                unit_id: dataProductsDefault.unit.id,
                qty: total
            })
        })
        simpanData(data)
    }

    function simpanData(data) {
        var type = 'POST'
        var button = '#btnSimpan'
        var url = '<?php echo api_produksi('setMachineTransfer'); ?>'
        kelolaData(data, type, url, button)
    }

    function filterCanvas() {
        $('.offcanvas').offcanvas('show')
        var header = ''
        header += '<h5 id="offcanvasRightLabel">Filter</h5>'
        header += '<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>'
        $('#canvasHeader').html(header)
        var body = ''
        body += '<div class="row">'
        body += '<div class="col-12">'
        body += '<b class="small">Tanggal Mulai</b>'
        body += '<input class="form-control datepicker mb-3" type="text" id="dateStart" placeholder="Tanggal Mulai" style="padding:0.875rem 3.375rem 0.875rem 1.125rem" value="' + dataDetail.dateStart + '" autocomplete="off">'
        body += '</div>'
        body += '<div class="col-12">'
        body += '<b class="small">Tanggal Akhir</b>'
        body += '<input class="form-control datepicker mb-3" type="text" id="dateEnd" placeholder="Tanggal Akhir" style="padding:0.875rem 3.375rem 0.875rem 1.125rem" value="' + dataDetail.dateEnd + '" autocomplete="off">'
        body += '</div>'
        body += '</div>'
        $('#canvasBody').html(body)
        new Litepicker({
            element: document.getElementById('dateStart'),
            elementEnd: document.getElementById('dateEnd'),
            singleMode: false,
            allowRepick: true,
            firstDay: 0,
            setup: (picker) => {
                picker.on('selected', (date1, date2) => {
                    // dateStart = formatDate(date1['dateInstance'])
                    // dateEnd = formatDate(date2['dateInstance'])
                    dateStart = '2024-03-28'
                    dateEnd = '2024-03-28'
                    chooseWarehouse(choosenId, dateStart, dateEnd)
                });
            },
        })
    }

    function seeAllWaiting() {
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-dialog-scrollable modal-lg');
        var html_header = '';
        html_header += '<h5 class="modal-title">Unprocessed Data</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);
        var html_body = '';
        html_body += '<div class="row p-3">'

        html_body += '<nav>'
        html_body += '<div class="nav nav-tabs" id="nav-tab" role="tablist">'
        html_body += '<button class="nav-link small-text active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Today</button>'
        html_body += '<button class="nav-link small-text" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">All Pending</button>'
        html_body += '</div>'
        html_body += '</nav>'
        html_body += '<div class="tab-content" id="nav-tabContent">'
        html_body += '<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">'
        // today
        // today
        html_body += '</div>'
        html_body += '<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">'
        // all
        // all
        html_body += '</div>'
        html_body += '</div>'

        html_body += '</div>'
        $('#modalBody').html(html_body).removeClass('pt-0 pb-0 p-0')
        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>'
        $('#modalFooter').html(html_footer).removeClass('d-none');
        fillDataWaiting()
    }

    function fillDataWaiting() {
        if (dataDetail.mutationStockWaiting.length) {
            var data = dataDetail.mutationStockWaiting.filter((v, k) => {
                if (formatDate(v.time) == currentDate()) return true
            })
            var html2 = ''
            dataDetail.mutationStockWaiting.forEach(e => {
                html2 += templateWaiting(e)
            });
            $('#nav-profile').html(html2)
            if (data.length) {
                var html = ''
                data.forEach(e => {
                    html += templateWaiting(e)
                });
                $('#nav-home').html(html)
            } else {
                emptyText('#nav-home', 'Tidak Ada Data Tersedia')
            }
        } else {
            emptyText('#nav-profile', 'Tidak Ada Data Tersedia')
            emptyText('#nav-home', 'Tidak Ada Data Tersedia')
        }


    }

    function templateWaiting(data) {
        var html = ''
        html += '<div class="card rounded-0 border-top-0 border-start-0 border-end-0 shadow-none">'
        html += '<div class="card-body">'
        html += '<div class="row">'
        html += '<div class="col-2 text-center">'
        html += '<div class="circle-shape bg-light-dongker">'
        html += '<p class="m-0 text-wrap small-text text-white">' + data.subject_sender.name + '</p>'
        html += '</div>'
        html += '</div>'
        html += '<div class="col align-self-center">'
        html += '<p class="m-0 small-text text-orange"><b>' + data.employee_sender.name + '</b></p>'
        html += '<p class="m-0 small-text text-dark-grey"><b>' + getDateStringWithTime(data.time) + '</b></p>'
        html += '<p class="m-0 mt-2 small-text text-dark-grey">'
        var a = 0
        data.machine_transfer_detail.forEach(e => {
            html += e.item.name + ' <span class="fw-bolder">(' + e.qty + ')</span>'
            a++
            if (a < data.machine_transfer_detail.length) {
                html += ', '
            }
        });
        html += '</p>'
        html += '</div>'
        html += '<div class="col align-self-center text-center">'
        var next_id = null
        if (data.machine_next) {
            next_id = data.machine_next.id
        }
        html += '<div class="row">'
        html += '<div class="col">'
        html += '<button class=" w-100 h-100 btn btn-sm btn-outline-danger" onclick="approvalData(' + data.id + ',0,' + next_id + ')"><i class="me-2 fa fa-times"></i> Reject</button>'
        html += '</div>'
        html += '<div class="col">'
        html += '<button class=" w-100 h-100 btn btn-sm btn-outline-success" onclick="approvalData(' + data.id + ',1,' + next_id + ')"><i class="me-2 fa fa-check"></i> Accept</button>'
        html += '</div>'
        html += '</div>'

        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        return html
    }

    function openModalScanner() {
        $('#modal').modal('show')
        scannerQR()
    }

    function scannerQR() {
        $('#modalDialog').removeClass('modal-xl')
        $('#modalDialog').addClass('modal-dialog modal-dialog-centered modal-dialog-scrollable').removeClass('modal-lg')
        var html_header = '';
        html_header += '<h5 class="modal-title">QR Scanner</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);
        var html_body = '';
        html_body += '<div class="row p-3 pb-5">'
        html_body += '<div class="col-12 text-center">'
        html_body += '<p class="m-0 small" id="dateCurrent">Rabu, 28 Februari 2024</p>'
        html_body += '</div>'
        html_body += '<div class="col-12 p-5 text-center">'
        html_body += '<img src="<?= base_url() ?>assets/image/svg/barcode.svg" style="width: 30%">'
        html_body += '</div>'
        html_body += '<div class="col-12 pt-5 px-5">'
        html_body += '<input class="form-control rounded-pill form-leave" style="text-align: center;" role="dialog" placeholder="ID Pekerja" id="codeQR" autocomplete="off">'
        html_body += '</div>'
        html_body += '<div class="col-12 px-5 pt-2">'
        html_body += '<div class="row">'
        html_body += '<div class="col-9 pe-0">'
        html_body += '<button class="btn btn-primary rounded-pill w-100" onclick="scannedPerson()">Cari</button>'
        html_body += '</div>'
        html_body += '<div class="col-3">'
        html_body += '<button class="w-100 btn btn-outline-primary rounded-pill" onclick="chooseWarehouse(' + choosenId + ',' + "'" + dateStart + "'" + ',' + "'" + dateEnd + "'" + ')"><i class="fa fa-refresh"></i></button>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '<div class="col-12 px-5">'
        html_body += '<div class="bd-callout bd-callout-warning super-small-text">Pastikan text scanner berada pada isi kolom diatas. Jika scanner sedang dalam masalah, anda dapat mengetikkan ID Pekerja kemudian klik <b>Cari</b>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody').html(html_body).removeClass('pt-0 pb-0 p-0')
        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>'
        $('#modalFooter').html(html_footer).addClass('d-none');
        setTimeout(function() {
            $('#codeQR').focus();
        }, 100);
        $("#codeQR").keypress(function(event) {
            // Periksa apakah tombol yang ditekan adalah 'Enter' (kode 13)
            if (event.keyCode === 13) {
                scannedPerson()
            }
        });
    }

    function scannedPerson() {
        var eid = $('#codeQR').val()
        if (dataDetail.employeeWorkerPickup.length && dataDetail.employeeWorkerPickup) {
            var data = deepCopy(dataDetail.employeeWorkerPickup.find((v, k) => {
                if (v.eid == eid) return true
            }))
            if (data) {
                formScanPerson(data)
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Tidak Ada Data'
                });
            }
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Gudang ini tidak memiliki akses untuk Material Pickup Worker'
            });
        }
    }

    function formScanPerson(data) {
        $('#modalDialog').addClass('modal-xl')
        var html_header = '';
        html_header += '<h5 class="modal-title">Scan QR - 28 Februari 2024</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);
        var html_body = ''
        html_body += '<div class="row p-0 m-0">'

        html_body += '<div class="col-8 p-5" id="detailSteps">'

        html_body += '</div>'
        html_body += '<div class="col-4 p-5 border-start">'
        html_body += '<div class="row">'

        html_body += '<div class="col-3">'
        html_body += '<div class="card shadow-none bg-orange">'
        html_body += '<div class="card-body p-2 text-center">'
        var rowcode = '-'
        if (data.row_code) {
            rowcode = data.row_code
        }
        html_body += '<p class="m-0 small text-white">' + rowcode + '</p>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '<div class="col-9">'
        html_body += '<p class="m-0 small text-orange">' + data.job_title_name + '</p>'
        html_body += '<p class="m-0 h1 fw-bolder">' + data.name + '</p>'
        html_body += '</div>'

        html_body += '<div class="col-12">'
        html_body += '<div class="row">'
        html_body += '<div class="col-12 mt-5 mb-2">'
        html_body += '<p class="m-0 fw-bolder small-text">History Transation</p>'
        html_body += '</div>'
        html_body += '<div class="col-12" style="height: 400px;overflow-x: hidden;overflow-y: auto;" id="historyPerson">'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '</div>'
        html_body += '</div>'

        html_body += '</div>'
        $('#modalBody').html(html_body).addClass('pt-0 pb-0 p-0')
        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>'
        $('#modalFooter').html(html_footer).removeClass('d-none');
        firstStep(data)
        if (data.material_pickups) {
            historyPerson(data)
        } else {
            empty('#historyPerson', 'Tidak Ada History')
        }
    }

    function firstStep(data) {
        var html = ''
        html += '<div class="row">'
        html += '<div class="col-12 pt-5">'
        html += '<p class="fw-bolder">Kategori Transaksi</p>'
        html += '</div>'
        html += '<div class="col-12 pt-5">'

        menuKategoriTransaksi.forEach(e => {
            html += '<div class="card shadow-sm card-hoper mb-3" onclick="nextStep(' + e.index + ',' + data.id + ')">'
            html += '<div class="card-body">'
            html += '<div class="row">'
            html += '<div class="col-2">'
            html += '<img src="<?= base_url() ?>assets/image/svg/' + e.icon + '.svg" style="width: 100%">'
            html += '</div>'
            html += '<div class="col-9 px-5 align-self-center">'
            html += '<p class="fw-bolder h2">' + e.name + '</p>'
            html += '<p class="m-0 small-text">' + e.text + '</p>'
            html += '</div>'
            html += '<div class="col-1 align-self-center text-center">'
            html += '<i class="fa fa-chevron-right fa-2x text-grey"></i>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
        });

        html += '</div>'
        html += '</div>'
        $('#detailSteps').html(html)
    }

    function nextStep(index, idWorker) {
        var dataKategori = menuKategoriTransaksi.find((v, k) => {
            if (v.index == index) return true
        })
        var dataEmployee = deepCopy(dataDetail.employeeWorkerPickup.find((v, k) => {
            if (v.id == idWorker) return true
        }))
        secondStep(dataKategori, dataEmployee)
    }

    function timeNow() {
        var d = new Date();
        var jam = d.getHours();
        var menit = d.getMinutes();
        if (menit < 10) {
            menit = "0" + menit;
        }
        if (jam < 10) {
            jam = "0" + jam;
        }
        var time = jam + ":" + menit;
        return time;
    }

    function secondStep(dataKategori, dataEmployee) {
        console.log(dataEmployee)
        var html = ''
        html += '<div class="row">'

        html += '<div class="col-2 text-center">'
        html += '<img src="<?= base_url() ?>assets/image/svg/' + dataKategori.icon + '.svg" style="width: 50%">'
        html += '</div>'
        html += '<div class="col-8 align-self-center">'
        html += '<p class="m-0 fw-bolder h2">' + dataKategori.name + '</p>'
        html += '<p class="m-0 small-text">' + dataKategori.text + '</p>'
        html += '</div>'

        html += '<div class="col-12 mt-5">'

        html += '<div class="card shadow-sm">'
        html += '<div class="card-body">'

        html += '<div class="row justify-content-center">'
        html += '<div class="col text-center">'
        html += '<p class="m-0 small-text fw-bolder">Brand</p>'
        html += '<p class="m-0 text-orange fw-bolder">' + dataEmployee.open_deliv.item_chain_material[0].item.name + '</p>'
        html += '</div>'
        html += '<div class="col border-start border-end text-center">'
        html += '<p class="m-0 small-text fw-bolder">Jumlah Target</p>'
        html += '<p class="m-0 text-orange fw-bolder">' + dataEmployee.open_deliv.qty_target + '</p>'
        html += '</div>'
        html += '<div class="col text-center">'
        html += '<p class="m-0 small-text fw-bolder">Unit</p>'
        html += '<p class="m-0 text-orange fw-bolder">' + dataEmployee.open_deliv.item_chain_material[0].unit.name + '</p>'
        html += '</div>'
        html += '</div>'

        html += '</div>'
        html += '</div>'

        html += '</div>'

        html += '<div class="col-12 mt-2">'
        html += '<div class="card shadow-sm">'
        html += '<div class="card-body">'

        html += '<div class="row justify-content-end">'
        html += '<div class="col-12 mb-5">'
        html += '<p class="m-0 fw-bolder small-text">Form Pengisian</p>'
        html += '</div>'
        html += '<div class="col-6 mb-2 text-end align-self-center"><p class="m-0 fw-bolder">Jumlah</p></div>'
        html += '<div class="col-6 mb-2">'
        html += '<input class="form-control form-control-lg nominal form-delivery form-invisible-line" type="text" placeholder="0" autocomplete="off" id="jumlahGood" value="' + dataEmployee.open_deliv.qty_target + '" tabindex="1" role="dialog">'
        html += '</div>'
        html += '<div class="col-6 mb-2 text-end align-self-center"><p class="m-0 fw-bolder">Jam</p></div>'
        html += '<div class="col-6 mb-2">'
        var time = timeNow()
        html += '<input class="form-control form-control-lg form-invisible-line" style="text-align:right" type="time" placeholder="0" autocomplete="off" id="jamSetoran" value="' + time + '">'
        html += '</div>'
        html += '<div class="col-6 align-self-end">'
        // html += '<p class="small-text m-0 text-danger pointer">Hapus Data ?</p>'
        html += '</div>'
        html += '<div class="col-6 text-end">'
        html += '<button class="btn btn-success btn-lg" onclick="arrangeVariableInsert(' + dataEmployee.id + ')">Simpan</button>'
        html += '</div>'
        html += '</div>'

        html += '</div>'
        html += '</div>'
        html += '</div>'

        html += '</div>'
        $('#detailSteps').html(html)
        $('.nominal').on('keypress', handleNumericInput);
        $('#jumlahGood').removeAttr('onblur', 'this.focus()')
    }

    function arrangeVariableInsert(idWorker) {
        var dataEmployee = deepCopy(dataDetail.employeeWorkerPickup.find((v, k) => {
            if (v.id == idWorker) return true
        }))
        var materialPickup = []
        dataEmployee.open_deliv.material_pickup.forEach(e => {
            materialPickup.push({
                id: e.id,
                employee_id_admin: user_id,
                is_pickup: 1,
                pickup_at: currentDateTime()
            })
        });
        var data = {
            materialPickup: materialPickup
        }
        // console.log(data)
        simpanVariableOffline(data)
    }

    function simpanVariableOffline(data) {
        data.materialPickup.forEach(e => {
            variableSaveMaterialOffline.materialPickup.push(e)
        });
        buttonSaveOfflineMode(variableSaveMaterialOffline.materialPickup)
        scannerQR()
    }

    function buttonSaveOfflineMode(data) {
        if (data.length) {
            $('#buttonSaveOfflineMode').prop("hidden", false);
        } else {
            $('#buttonSaveOfflineMode').prop("hidden", true);
        }
    }

    function handleNumericInput(event) {
        var allowChars = [48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 8, 37, 39];
        if (allowChars.indexOf(event.which) === -1) {
            event.preventDefault();
        }

        var inputValue = $(this).val();
        $(this).val(inputValue.replace(/[^\d]/g, ''));
    }

    function historyPerson(data) {
        var html = ''
        var a = 0
        html += '<div class="timeline timeline-sm mt-2">'
        data.material_pickups.forEach(e => {
            if (e.is_pickup != null) {
                a++
                e.material_pickup_details.forEach(el => {
                    html += '<div class="timeline-item">'
                    html += '<div class="timeline-item-marker">'
                    html += '<div class="timeline-item-marker-indicator"></div>'
                    html += '</div>'
                    html += '<div class="timeline-item-content" style="font-size: 11px;">'
                    html += '<b>' + formatJamMenit(e.pickup_at) + '</b>'
                    html += '<div class="card shadow-none">'
                    html += '<div class="card-body p-3">'
                    html += '<div class="row">'
                    html += '<div class="col-8">'
                    html += '<p class="small-text m-0"><span class="text-orange fw-bolder">AMBIL</span> - Amalia Safira</p>'
                    html += '<p class="m-0 fw-bolder">' + el.item.name + '</p>'
                    html += '</div>'
                    html += '<div class="col-4 text-end">'
                    html += '<p class="m-0 small-text text-orange">' + el.qty + '</p>'
                    html += '<p class="m-0 small-text">' + el.unit.name + '</p>'
                    html += '</div>'
                    html += '</div>'
                    html += '</div>'
                    html += '</div>'
                    html += '</div>'
                    html += '</div>'
                });
            }
        });
        html += '</div>'
        $('#historyPerson').html(html)
        if (a == 0) {
            empty('#historyPerson', 'Tidak Ada History')
        }
    }

    function autoSaveAtOfflineMode() {
        var type = 'POST'
        var button = '#btnSimpanOffline'
        var url = '<?php echo api_produksi('setMaterialPickup'); ?>'
        var data = deepCopy(variableSaveMaterialOffline)
        if (data.materialPickup.length) {
            kelolaDataSaveAutoMaterial(data, type, url, button)
        }
    }

    function kelolaDataSaveAutoMaterial(data, type, url, button) {
        $.ajax({
            url: url,
            type: type,
            data: data,
            error: function(xhr) {
                $(button).prop("disabled", false).html('<i class="fa fa-save me-1"></i>Send All')
            },
            beforeSend: function() {
                $(button).prop("disabled", true).html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Menyimpan...')
            },
            success: function(response) {
                // Buat salinan data agar data asli tidak berubah
                var dataToDelete = deepCopy(data.materialPickup)
                var newData = deepCopy(variableSaveMaterialOffline.materialPickup).slice();
                dataToDelete.forEach(itemToDelete => {
                    newData = newData.filter(item => JSON.stringify(item) !== JSON.stringify(itemToDelete));
                });
                variableSaveMaterialOffline.materialPickup = newData

                $(button).prop("disabled", false).html('<i class="fa fa-save me-1"></i>Send All')
                if (!variableSaveMaterialOffline.materialPickup.length) {
                    $('#textAutoSave').html('<span class="ms-2 super-small-text">Tersimpan Otomatis</span>')
                }
                buttonSaveOfflineMode(variableSaveMaterialOffline.materialPickup)
                loadData()
            }
        });
    }
</script>