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

    .super-tiny-text {
        font-size: 7px;
    }

    .has-search .form-control {
        padding-left: 2.375rem;
        border: none;
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

    .bg-dark-grey {
        color: white;
        background-color: #5C5470 !important;
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
</style>
<style>
    .bg-cyan-900 {
        color: #fff;
        background-color: #032830;
    }

    .bg-cyan-800 {
        color: #fff;
        background-color: #055160;
    }

    .bg-cyan-700 {
        color: #fff;
        background-color: #087990;
    }

    .bg-cyan-600 {
        color: #000;
        background-color: #0aa2c0;
    }

    .bg-cyan-500 {
        color: #000;
        background-color: #0dcaf0;
    }

    .bg-cyan-400 {
        color: #000;
        background-color: #3dd5f3;
    }

    .bg-cyan-300 {
        color: #000;
        background-color: #6edff6;
    }

    .bg-cyan-200 {
        color: #000;
        background-color: #9eeaf9;
    }

    .bg-cyan-100 {
        color: #000;
        background-color: #cff4fc;
    }

    .select2-container--default .select2-selection--single {
        background-color: #fff;
        border: 1px solid #aaa;
        border-radius: 4px;
        height: 50px;
    }

    .select2-container--default .select2-selection--single .select2-selection__arrow {
        height: 26px;
        position: absolute;
        top: 1px;
        right: 1px;
        width: 20px;
        visibility: hidden;
    }

    .select2-container--default .select2-selection--single .select2-selection__rendered {
        color: grey;
        line-height: 50px;
        font-size: 12px;
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
        <div class="col-12 p-5 pb-4">
            <div class="row">
                <div class="col-1 text-center">
                    <img class="" style="width: 50px;" src="<?= base_url() ?>assets/image/svg/boxes.svg" alt="Icon" />
                </div>
                <div class="col ps-0">
                    <h1 class="m-0">Micro Warehouse</h1>
                    <p class="m-0 small">test</p>
                </div>
                <div class="col align-self-start text-end">
                    <button type="button" class="btn btn-outline-dark shadow-none btn-sm shadow-none me-2" onclick="managementMaterial()"><i class="fa fa-paper-plane-o me-2"></i>Transaction</button>
                    <div class="btn-group">
                        <button class="btn btn-sm btn-outline-dark shadow-none dropdown-toggle position-relative" type="button" id="dropdownMenuClickableInside" data-bs-toggle="dropdown" data-bs-auto-close="false" aria-expanded="false">
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" id="jumlahWaiting"></span>
                            <i class="fa fa-bell-o"></i>
                        </button>
                        <ul class="dropdown-menu shadow-lg" aria-labelledby="dropdownMenuClickableInside" id="notifWaiting">
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 p-5 pb-2 pt-0">
            <div class="card shadow-none">
                <div class="card-body">
                    <div class="row">
                        <div class="col-8 p-3 pt-1">
                            <div class="row">
                                <div class="col">
                                    <p class="m-0 small-text">6 Material</p>
                                    <h4><b>Gudang Kecil SKM</b></h4>
                                </div>
                                <div class="col align-self-end">
                                    <div class="form-group has-search">
                                        <span class="fa fa-search form-control-feedback"></span>
                                        <input type="text" class="form-control" placeholder="Search" id="search_nama" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 pe-2" style="height:250px;overflow-x: hidden;overflow-y: auto;">
                                <div class="row">
                                    <?php for ($i = 0; $i < 100; $i++) { ?>
                                        <div class="col-4">
                                            <div class="card shadow-sm mt-2">
                                                <div class="card-body p-3">
                                                    <div class="row">
                                                        <div class="col-4 align-self-center text-end">
                                                            <p class="m-0 fw-bolder">5,000</p>
                                                            <p class="m-0 super-small-text fw-bolder text-orange">Lembar</p>
                                                        </div>
                                                        <div class="col-8">
                                                            <p class="m-0 super-small-text">RM.04-514</p>
                                                            <p class="m-0 super-small-text fw-bolder">CAP DOZ FEO ARMOUR BOLD 20</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 p-3 pt-1">
                            <p class="m-0 small-text">Preview</p>
                            <h4><b>Machine</b></h4>
                            <div class="row mt-3">
                                <div class="col-12">
                                    <b class="super-small-text">MAKER</b>
                                    <div class="row" style="padding-left: 8px;">
                                        <?php for ($i = 0; $i < 3; $i++) { ?>
                                            <div class="col-auto p-1">
                                                <div class="card shadow-none pointer bg-cyan-900" onclick="managementMaterial()" style="width: 60px;height:60px;">
                                                    <div class="card-body p-1 small-text text-white text-center align-self-center d-flex align-items-center">
                                                        <span>
                                                            <p class="m-0 fw-bolder">MK9-A</p>
                                                            <p class="m-0 super-small-text fw-light">20 ᴓ</p>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <b class="super-small-text">HLP</b>
                                    <div class="row" style="padding-left: 8px;">
                                        <?php for ($i = 0; $i < 4; $i++) { ?>
                                            <div class="col-auto p-1">
                                                <div class="card shadow-none pointer bg-cyan-600" onclick="managementMaterial()" style="width: 60px;height:60px;">
                                                    <div class="card-body p-1 small-text text-white text-center align-self-center d-flex align-items-center">
                                                        <span>
                                                            <p class="m-0 fw-bolder">MK9-A</p>
                                                            <p class="m-0 super-small-text fw-light">10 ᴓ</p>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 p-5 pt-0">
            <div class="card shadow-none">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <p class="m-0 ms-3 small-text"><b>Transaction Mutation</b></p>
                            <p class="m-0 ms-3 small-text">Rabu, 11 Oktober 2023</p>
                        </div>
                        <div class="col text-end align-self-end">
                            <div class="form-group has-search">
                                <span class="fa fa-search form-control-feedback"></span>
                                <input type="text" class="form-control" placeholder="Search" id="search_nama" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="table-responsive">
                                <table class="table table-sm table-hover mt-3">
                                    <thead>
                                        <tr class="border-top">
                                            <th class="small-text text-center p-3 align-middle">#</th>
                                            <th class="small-text text-center p-3 align-middle"></th>
                                            <th class="small-text text-center p-3 align-middle">Time</th>
                                            <th class="small-text text-center p-3 align-middle">User</th>
                                            <th class="small-text text-center p-3 align-middle bg-light">Warehouse</th>
                                            <th class="small-text text-center p-3 align-middle bg-light">Reference</th>
                                            <th class="small-text text-center p-3 align-middle text-success"><i class="fa fa-plane me-1"></i>Direct</th>
                                            <th class="small-text text-center p-3 align-middle">Items / Materials</th>
                                            <th class="small-text text-center p-3 align-middle">QTY</th>
                                            <th class="small-text text-center p-3 align-middle">Satuan</th>
                                            <th class="small-text text-center p-3 align-middle">Status</th>
                                            <th class="small-text text-center p-3 align-middle"></th>
                                        </tr>
                                    </thead>
                                    <tbody id="tableDetail">
                                        <tr class="">
                                            <td class="small-text align-middle text-center">1</td>
                                            <td class="small-text align-middle text-center">
                                                <i class="fa fa-arrow-up text-danger"></i>
                                            </td>
                                            <td class="small-text align-middle text-center">
                                                11-10-2023 23:00
                                            </td>
                                            <td class="small-text align-middle text-center">
                                                Amalia
                                            </td>
                                            <td class="small-text align-middle text-center bg-light">
                                                Gudang Kecil
                                            </td>
                                            <td class="small-text align-middle text-center bg-light">
                                                <p class="m-0">MK9-A</p>
                                            </td>
                                            <td class="small-text align-middle text-center">MK9-B</td>
                                            <td class="small-text align-middle text-center">RM.04-514</td>
                                            <td class="small-text align-middle text-end fw-bolder text-orange text-nowrap">240</td>
                                            <td class="small-text align-middle">Lembar</td>
                                            <td class="small-text align-middle text-center">
                                                <span class="badge rounded-pill bg-light text-dark-grey">Waiting</span>
                                            </td>
                                            <td class="small-text align-middle">
                                                <button type="button" class="btn btn-outline-dark shadow-none btn-sm" onclick="detailWaiting()"><i class="fa fa-eye"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
<?php $this->load->view('components/modal_static') ?>
<script src="https://cdn.jsdelivr.net/npm/litepicker/dist/litepicker.js"></script>
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
        $(location).html('<div class="row"><div class="col-12 align-self-center text-center"><div class="card shadow-none" style="border:0px;height:' + height + ';"><div class="card-body h-100 p-5 m-5"><lottie-player style="margin:auto;width: 200px; height: 100%;" src="<?= base_url() ?>assets/json/lf20_s8pbrcfw.json" mode="bounce" background="transparent" speed="2" loop autoplay></lottie-player><p class="small"><i>' + text + '</i></p></div></div></div></div>')
    }

    function emptyReturn(text, height) {
        var html = '<div class="row"><div class="col-12 align-self-center text-center"><div class="card shadow-none" style="border:0px;height:' + height + ';"><div class="card-body h-100 p-5 m-5"><lottie-player style="margin:auto;width: 200px; height: 100%;" src="<?= base_url() ?>assets/json/lf20_s8pbrcfw.json" mode="bounce" background="transparent" speed="2" loop autoplay></lottie-player><p class="small"><i>' + text + '</i></p></div></div></div></div>'
        return html
    }

    function emptyText(location, text) {
        $(location).html('<div class="row h-100"><div class="col-12 align-self-center text-center"><div class="card shadow-none border-0" style="border:0px;height:100%;background-color:transparent"><div class="card-body h-100 m-5"><p class="small"><i>' + text + '</i></p></div></div></div></div>')
    }

    function emptyTextReturn(text) {
        var html = '<div class="row h-100"><div class="col-12 align-self-center text-center"><div class="card shadow-none border-0" style="border:0px;height:100%;background-color:transparent"><div class="card-body h-100 m-5"><p class="small"><i>' + text + '</i></p></div></div></div></div>'
        return html
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
        clearModal();
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
                nilai = number_format(trays) + ' <span class="text-dark-grey">' + satuanBesar + '</span> ' + number_format(remainingStik) + ' <span class="text-dark-grey">' + satuanKecil + '</span>'
            } else {
                nilai = number_format(remainingStik) + ' <span class="text-dark-grey">' + satuanKecil + '</span>'
            }
        } else {
            nilai = number_format(trays) + ' <span class="text-dark-grey">' + satuanBesar + '</span>'
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
    var choosenId

    $(document).ready(function() {
        // loadData()
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

            }
        })
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

    function managementMaterial() {
        const tinggiModal1 = parseFloat(window.innerHeight) - (59.2 + 24 + 62.48);
        const tinggiModal2 = parseFloat(window.innerHeight) - (59.2 + 62.48 + 70.31);
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-fullscreen modal-dialog-scrollable modal-xl');
        var html_header = '';
        html_header += '<h5 class="modal-title">Machine Material Management</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);
        var html_body = '';
        html_body += '<div class="row">'

        html_body += '<div class="col-2 bg-light-grey p-3 pe-2 pt-4">'

        html_body += '<div class="pe-2" style="height: ' + tinggiModal1 + 'px;overflow-x: hidden;overflow-y: auto;">'
        html_body += '<p class="m-0 small-text"><b>Warehouse</b></p>'
        html_body += '<div class="card shadow-sm mt-2 pointer card-hoper">'
        html_body += '<div class="card-body p-3">'
        html_body += '<div class="row">'
        html_body += '<div class="col-12">'
        html_body += '<p class="m-0 fw-bolder small">GUDANG KECIL</p>'
        html_body += '<p class="m-0 super-small-text">20 Materials</p>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '<p class="m-0 small-text mt-2"><b>Machine</b></p>'
        for (let i = 0; i < 7; i++) {
            html_body += '<div class="card shadow-sm mt-2 pointer card-hoper">'
            html_body += '<div class="card-body p-3">'
            html_body += '<div class="row">'
            html_body += '<div class="col-12">'
            html_body += '<p class="m-0 fw-bolder small">MAKER 9 A</p>'
            html_body += '<p class="m-0 super-small-text">20 Materials</p>'
            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
        }
        html_body += '</div>'

        html_body += '</div>'

        html_body += '<div class="col-3 p-3 pt-4 border-end">'
        html_body += '<div class="row">'
        html_body += '<div class="col align-self-center">'
        html_body += '<p class="m-0 small-text"><b>Materials</b></p>'
        html_body += '</div>'
        html_body += '<div class="col align-self-center text-end">'
        html_body += '<div class="form-check" style="padding-left: 80px;">'
        html_body += '<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">'
        html_body += '<label class="form-check-label small-text" for="flexCheckDefault">Select All</label>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '<div style="height: ' + tinggiModal2 + 'px;overflow-x: hidden;overflow-y: auto;" class="pe-2">'
        for (let i = 0; i < 20; i++) {
            html_body += '<div class="card shadow-sm mt-2 pointer card-hoper">'
            html_body += '<div class="card-body p-3">'
            html_body += '<div class="row">'
            html_body += '<div class="col-10">'
            html_body += '<p class="m-0 super-small-text">RM.04-514</p>'
            html_body += '<p class="m-0 super-small-text fw-bolder">CAP DOZ FEO ARMOUR BOLD 20</p>'
            html_body += '<p class="m-0 super-small-text fw-bolder text-orange">5000 Lembar</p>'
            html_body += '</div>'
            html_body += '<div class="col-2 align-self-center">'
            html_body += '<i class="fa fa-check text-grey"></i>'
            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
            html_body += '</div>'
        }
        html_body += '</div>'
        html_body += '</div>'
        html_body += '<div class="col-7 p-3 pt-4" id="manageMachineMaterial">'
        html_body += emptyReturn('Pilih Material Terlebih Dahulu', '100%')
        html_body += '</div>'

        html_body += '</div>'
        $('#modalBody').html(html_body).addClass('pt-0 pb-0')
        $('.nominal').number(true);
        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>'
        $('#modalFooter').html(html_footer).removeClass('d-none')
        manageMachineMaterial()
    }

    function manageMachineMaterial() {
        var html = ''
        const tinggiModal2 = parseFloat(window.innerHeight) - (59.2 + 62.48 + 70.31);
        html += '<div class="row">'
        html += '<div class="col-7">'
        html += '<p class="m-0 small-text"><b>Choosen Material <span class="text-orange">(20)</span></b></p>'
        html += '<div class="mt-3 pe-2" id="listChoosenMaterial" style="height: ' + tinggiModal2 + 'px;overflow-x: hidden;overflow-y: auto;">'
        for (let i = 0; i < 20; i++) {
            html += '<div class="card shadow-none card-hoper mb-2 bg-light">'
            html += '<div class="card-body p-3">'
            html += '<div class="row w-100">'
            html += '<div class="col-5 align-self-center">'
            html += '<p class="m-0 super-small-text">CAP DOZ FEO ARMOUR BOLD 20</p>'
            html += '</div>'
            html += '<div class="col-4 align-self-center">'
            html += '<input type="text" id="qty" class="form-control form-control-sm nominal" required="required"  autocomplete="off"  style="background-color:transparent;border:0px;">'
            html += '<hr class="m-0">'
            html += '</div>'
            html += '<div class="col-2 align-self-center">'
            html += '<p class="m-0 super-tiny-text"><b>Lembar</b></p>'
            html += '</div>'
            html += '<div class="col-1 align-self-center text-end pointer">'
            html += '<i class="fa fa-times text-danger"></i>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
        }
        html += '</div>'
        html += '</div>'
        html += '<div class="col-5">'
        html += '<p class="m-0 small-text mb-3"><b>Properties</b></p>'
        html += '<select name="" class="form-control selectGudang" id="selectGudang" data-id="" style="height: 40px;" onchange="listTujuan()">'
        html += '<option value="" selected disabled>Pilih Tujuan</option>'
        html += '<option value="1">GUDANG KECIL</option>'
        html += '<option value="2">MESIN</option>'
        html += '</select>'
        html += '<div class="mt-2 w-100" id="listTujuan">'
        html += emptyTextReturn('Pilih Tujuan Terlebih Dahulu')
        html += '</div>'
        html += '</div>'
        html += '</div>'
        $('#manageMachineMaterial').html(html)
        $('.selectGudang').select2({
            closeOnSelect: true,
            dropdownParent: $('#modal'),
            width: '100%',
        })

    }

    function listTujuan() {
        var html = ''
        var value = $('#selectGudang').val()
        if (value == 1) {

        } else {
            html += '<div class="row">'
            html += '<div class="col-12">'
            html += '<div class="card shadow-none">'
            html += '<div class="card-body p-3 text-center">'
            html += '<p class="m-0 small-text">MAKER 9 B</p>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
        }
        $('#listTujuan').html(html)
    }
</script>