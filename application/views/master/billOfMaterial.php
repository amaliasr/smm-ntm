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

    .card-operan:hover {
        background-color: #9AC5F4;
        cursor: pointer;
    }

    .card-operan:active,
    .clicked {
        background-color: #27374D;
        color: white !important;
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

    .list-group-item {
        padding-top: 8px;
        padding-bottom: 8px;
    }

    .list-group .list-group-item {
        background-color: transparent !important;
        font-size: 12px;
        padding-right: 0px;
    }

    .list-material-group {
        padding-left: 16px;
    }

    .card-material {
        background-color: transparent !important;
        cursor: pointer;
    }

    .card-material:hover {
        background-color: #9AC5F4 !important;
        color: white !important;
    }

    table {
        border-collapse: initial !important;
        /* Don't collapse */
        border-spacing: 0px;
        border: 1px solid #c5ccd6 !important;
    }

    th {
        border: 1px solid #c5ccd6 !important;
        padding: 10px !important;
    }

    td {
        border: 1px solid #c5ccd6 !important;
        padding: 10px !important;
    }

    .sticky-col {
        position: -webkit-sticky;
        position: sticky;
        left: 0px;
        background-color: white !important;
        z-index: 1 !important;
        border: 1px solid #c5ccd6 !important;
        /* box-shadow: 1px 0 0 rgba(0, 0, 0, .1); */
    }

    .first-col {
        width: 40px;
        min-width: 40px;
        max-width: 40px;
        left: 0px;
    }

    .second-col {
        width: 100px;
        min-width: 100px;
        max-width: 100px;
        left: 40px;
        /* you have to count the first-col width => your border width */
    }

    .third-col {
        width: 150px;
        min-width: 150px;
        max-width: 150px;
        left: 140px;
        /* you have to count the first-col width => your border width */
    }

    .fourth-col {
        width: 50px;
        min-width: 50px;
        max-width: 50px;
        left: 290px;
        /* you have to count the first-col width => your border width */
    }

    .popover.show {
        opacity: 1;
        pointer-events: auto;
    }

    .popover {
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
    }

    /* CSS Kustom untuk Mengatur Lebar Popover */
    .custom-popover {
        width: 250px !important;
    }

    .btn-outline-grey {
        color: #69707a;
        border-color: #69707a;
    }

    .btn-check:checked+.btn-outline-grey,
    .btn-check:active+.btn-outline-grey,
    .btn-outline-grey:active,
    .btn-outline-grey.active,
    .btn-outline-grey.dropdown-toggle.show {
        color: #fff;
        background-color: #69707a;
        border-color: #69707a;
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
        <!-- RIGHT PANEL -->
        <div class="col-12 bg-white p-3 pt-5 pb-0" id="kerangkaGudangDetail">
            <div class="row">
                <div class="col align-self-center ps-4">
                    <h3 class="text-dark-grey m-0">
                        <b class="small">Bill of Material</b>
                    </h3>
                    <p class="super-small-text m-0 text-light-dark-grey">Pengaturan Material Group dan Material Didalamnya</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="row p-3 pb-1 pt-5" id="menuMaterial">
                        <div class="col-auto pe-1">
                            <select class="form-select form-select-sm" name="state" id="tujuanTransaksi">
                                <!-- <option value="" disabled selected>Pilih Tujuan</option> -->
                                <option value="">SKT</option>
                            </select>
                        </div>
                        <div class="col-auto ps-1 pe-1">
                            <select class="form-select form-select-sm" name="state" id="tujuanTransaksi">
                                <!-- <option value="" disabled selected>Pilih Tujuan</option> -->
                                <option value="">VERPACK SKT</option>
                            </select>
                        </div>
                        <div class="col-auto ps-1 pe-1">
                            <div class="btn-group btn-group-sm" role="group" aria-label="Basic radio toggle button group">
                                <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                                <label class="btn btn-outline-grey" style="padding-top:6px;padding-bottom:6px;" for="btnradio1">VERPACK BANDROL<span class="badge bg-light text-dark ms-2">18</span></label>
                                <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                                <label class="btn btn-outline-grey" style="padding-top:6px;padding-bottom:6px;" for="btnradio2">VERPACK PLASTIK PACK<span class="badge bg-dark-grey ms-2">18</span></label>
                                <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                                <label class="btn btn-outline-grey" style="padding-top:6px;padding-bottom:6px;" for="btnradio3">VERPACK SLOP</label>
                            </div>
                        </div>
                        <!-- <div class="col-auto">
                            <div class="card shadow-none">
                                <div class="card-body p-1 small-text">
                                    VERPACK BANDROL
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="card shadow-none">
                                <div class="card-body p-1 small-text">
                                    VERPACK PLASTIK PACK
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="card shadow-none">
                                <div class="card-body p-1 small-text">
                                    VERPACK SLOP
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="col-12">
                    <div class="card shadow-none border-0">
                        <div class="card-body p-3">
                            <input type="text" class="form-control" placeholder="Search..." id="search_nama" autocomplete="off" style="border-radius:0px;border-bottom:0px;border-color:#c5ccd6;">
                            <div class="table-responsive" id="table-product-trend-wrapper">
                                <table class="table table-hover table-bordered" style="width: 100%;white-space:nowrap;">
                                    <thead>
                                        <tr>
                                            <th class="align-middle super-small-text sticky-col first-col" rowspan="2">#</th>
                                            <th class="align-middle super-small-text sticky-col second-col" rowspan="2">Brand</th>
                                            <th class="align-middle super-small-text sticky-col third-col" rowspan="2">Product</th>
                                            <th class="align-middle super-small-text sticky-col fourth-col" rowspan="2">Sat</th>
                                            <?php for ($i = 0; $i < 21; $i++) { ?>
                                                <th class="align-middle super-small-text" colspan="3">Foil</th>
                                            <?php } ?>
                                        </tr>
                                        <tr>
                                            <?php for ($i = 0; $i < 21; $i++) { ?>
                                                <th class="align-middle super-small-text">Foil Silver 20</th>
                                                <th class="align-middle super-small-text">Foil Red 20</th>
                                                <th class="align-middle super-small-text">Foil Gold 20</th>
                                            <?php } ?>
                                        </tr>
                                    </thead>
                                    <tbody id="listMaterial">
                                        <?php for ($i = 0; $i < 15; $i++) { ?>
                                            <tr>
                                                <td class="align-middle super-small-text text-center sticky-col first-col">1</td>
                                                <td class="align-middle super-small-text text-center sticky-col second-col">
                                                    ABLF
                                                </td>
                                                <td class="align-middle super-small-text sticky-col third-col">
                                                    Armour Black Filter 20
                                                </td>
                                                <td class="align-middle super-small-text text-center sticky-col fourth-col">Box</td>
                                                <?php for ($j = 0; $j < 21; $j++) { ?>
                                                    <?php for ($k = 0; $k < 3; $k++) { ?>
                                                        <td class="align-middle super-small-text text-center jumlah-bom" id="bom<?= $i ?><?= $j ?><?= $k ?>" style="padding: 10px !important;" data-bs-toggle="popover" title='<div class="d-flex justify-content-between align-items-center"><p class="m-0 small-text">ABLF - FOIL</p><span class="pointer btn-close" type="button" id="btnClose<?= $i ?><?= $j ?><?= $k ?>" data-bs-dismiss="popover" aria-label="Close" on></span></div>'>
                                                            <div class="d-flex justify-content-between">
                                                                <p class="m-0 small-text" id="operanHasil<?= $i ?><?= $j ?><?= $k ?>"></p>
                                                                <p class="m-0 small-text" id="variableHasil<?= $i ?><?= $j ?><?= $k ?>"></p>
                                                            </div>
                                                            <div hidden>
                                                                <div data-name="popover-content" id="popover_content<?= $i ?><?= $j ?><?= $k ?>">

                                                                </div>
                                                            </div>
                                                        </td>
                                                    <?php } ?>
                                                <?php } ?>
                                            </tr>
                                        <?php } ?>
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
        draggableTables('table-product-trend-wrapper')
        for (let i = 0; i < 15; i++) {
            for (let j = 0; j < 21; j++) {
                for (let k = 0; k < 3; k++) {
                    var kontenPopover = ''
                    var variable = '' + i + '' + j + '' + k + ''
                    kontenPopover += '<div class="row justify-content-center super-small-text">'

                    kontenPopover += '<div class="col-4 align-self-center mb-1">'
                    kontenPopover += '<b>Variable</b>'
                    kontenPopover += '</div>'

                    kontenPopover += '<div class="col-8 ps-1 mb-1">'
                    kontenPopover += '<input class="form-control form-control-sm nominal" type="text" oninput="setToCell(event,' + "'" + variable + "'" + ')">'
                    kontenPopover += '</div>'

                    kontenPopover += '<div class="col-4 align-self-center">'
                    kontenPopover += '<b>Operan</b>'
                    kontenPopover += '</div>'

                    kontenPopover += '<div class="col-8">'
                    kontenPopover += '<div class="row align-items-center justify-content-center super-small-text w-100">'
                    kontenPopover += '<div class="col-3 p-1">'
                    kontenPopover += '<div class="card shadow-none w-100 card-operan operan' + variable + '" onclick="chooseOperan(this,' + "'" + variable + "'" + ',' + "'+'" + ')">'
                    kontenPopover += '<div class="card-body p-1 text-center">'
                    kontenPopover += '<span class="h3 m-0 textOperan' + variable + '" id="textOperan' + "'" + variable + "'" + '">+</span>'
                    kontenPopover += '</div>'
                    kontenPopover += '</div>'
                    kontenPopover += '</div>'
                    kontenPopover += '<div class="col-3 p-1">'
                    kontenPopover += '<div class="card shadow-none w-100 card-operan operan' + variable + '" onclick="chooseOperan(this,' + "'" + variable + "'" + ',' + "'−'" + ')">'
                    kontenPopover += '<div class="card-body p-1 text-center">'
                    kontenPopover += '<span class="h3 m-0 textOperan' + variable + '" id="textOperan' + "'" + variable + "'" + '">−</span>'
                    kontenPopover += '</div>'
                    kontenPopover += '</div>'
                    kontenPopover += '</div>'
                    kontenPopover += '<div class="col-3 p-1">'
                    kontenPopover += '<div class="card shadow-none w-100 card-operan operan' + variable + '" onclick="chooseOperan(this,' + "'" + variable + "'" + ',' + "'×'" + ')">'
                    kontenPopover += '<div class="card-body p-1 text-center">'
                    kontenPopover += '<span class="h3 m-0 textOperan' + variable + '" id="textOperan' + "'" + variable + "'" + '">×</span>'
                    kontenPopover += '</div>'
                    kontenPopover += '</div>'
                    kontenPopover += '</div>'
                    kontenPopover += '<div class="col-3 p-1">'
                    kontenPopover += '<div class="card shadow-none w-100 card-operan operan' + variable + '" onclick="chooseOperan(this,' + "'" + variable + "'" + ',' + "'÷'" + ')">'
                    kontenPopover += '<div class="card-body p-1 text-center">'
                    kontenPopover += '<span class="h3 m-0 textOperan' + variable + '" id="textOperan' + "'" + variable + "'" + '">÷</span>'
                    kontenPopover += '</div>'
                    kontenPopover += '</div>'
                    kontenPopover += '</div>'
                    kontenPopover += '</div>'
                    kontenPopover += '</div>'

                    kontenPopover += '</div>'
                    $('#popover_content' + i + '' + j + '' + k).html(kontenPopover)
                    $('.nominal').number(true, 2);
                    var popoverTriggerEl = document.querySelector('#bom' + i + '' + j + '' + k);
                    var popover = new bootstrap.Popover(popoverTriggerEl, {
                        // title: '<div class="d-flex justify-content-between align-items-center"><p class="m-0 small-text">ABLF - FOIL</p><span class="fa fa-times pointer btn-close" type="button" id="btnClose' + i + '' + j + '' + k + '" data-bs-dismiss="popover" aria-label="Close" on></span></div>',
                        placement: 'top', // Menentukan posisi popover
                        trigger: 'focus', // Menentukan trigger popover (dalam contoh ini, hover)
                        html: true,
                        // content: kontenPopover,
                        content: $('#popover_content' + i + '' + j + '' + k),
                        customClass: 'custom-popover',
                    });

                    // popoverTriggerEl.addEventListener('shown.bs.popover', function() {
                    //     var popoverElement = this.nextElementSibling; // Dapatkan elemen popover yang ditampilkan
                    //     var btnClose = document.getElementById('btnClose' + i + '' + j + '' + k); // Temukan tombol close
                    //     // var btnClose = popoverElement.querySelector('.btn-close'); // Temukan tombol close
                    //     console.log(popoverElement)
                    //     btnClose.addEventListener('click', function() {
                    //         popover.hide(); // Sembunyikan popover ketika tombol close diklik
                    //     });
                    // });
                }
            }
        }
        loadData()
    })

    function loadData() {
        var data = {
            employeeId: user_id,
        }
        var url = "<?= api_produksi('loadPageStorageManage'); ?>"
        // getData(data, url)
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
            }
        })
    }

    function chooseOperan(example, variable, operan) {
        $('.operan' + variable).removeClass('clicked')
        $('.textOperan' + variable).removeClass('text-white')
        $(example).addClass('clicked')
        $(example).find('.h3').addClass('text-white');
        $('#operanHasil' + variable).html(operan)
    }

    function setToCell(event, variable) {
        var value = event.target.value
        $('#variableHasil' + variable).html(value)
    }
</script>