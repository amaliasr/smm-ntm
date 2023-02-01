function formatDate(orginaldate) {
    var date = new Date(orginaldate);
    var day = date.getDate();
    var month = date.getMonth() + 1;
    var year = date.getFullYear();
    if (day < 10) {
        day = "0" + day;
    }
    if (month < 10) {
        month = "0" + month;
    }
    var date = year + "-" + month + "-" + day;
    return date;
}
function formatInternationalDate(orginaldate) {
    var date = new Date(orginaldate);
    var tahun = date.getFullYear();
    var bulan = date.getMonth();
    var tanggal = date.getDate();
    if (tanggal < 10) {
        tanggal = "0" + tanggal;
    }
    switch(bulan) {
    case 0: bulan = "January"; break;
    case 1: bulan = "February"; break;
    case 2: bulan = "March"; break;
    case 3: bulan = "April"; break;
    case 4: bulan = "May"; break;
    case 5: bulan = "June"; break;
    case 6: bulan = "July"; break;
    case 7: bulan = "August"; break;
    case 8: bulan = "September"; break;
    case 9: bulan = "October"; break;
    case 10: bulan = "November"; break;
    case 11: bulan = "December"; break;
    }
    var tampilTanggal = tanggal + " " + bulan + " " + tahun;
    return tampilTanggal;
}

function formatTime(orginaldate) {
    var date = new Date(orginaldate);
    var jam = date.getHours();
    var menit = date.getMinutes();
    var detik = date.getSeconds();
    if (detik < 10) {
        detik = "0" + detik;
    }
    if (menit < 10) {
        menit = "0" + menit;
    }
    if (jam < 10) {
        jam = "0" + jam;
    }
    var date = jam + ":" + menit + ":" + detik;
    return date;
}
function formatDateIndonesia(orginaldate) {
    var date = new Date(orginaldate);
    var tahun = date.getFullYear();
    var bulan = date.getMonth();
    var tanggal = date.getDate();
    var hari = date.getDay();
    switch(hari) {
    case 0: hari = "Minggu"; break;
    case 1: hari = "Senin"; break;
    case 2: hari = "Selasa"; break;
    case 3: hari = "Rabu"; break;
    case 4: hari = "Kamis"; break;
    case 5: hari = "Jum'at"; break;
    case 6: hari = "Sabtu"; break;
    }
    switch(bulan) {
    case 0: bulan = "Januari"; break;
    case 1: bulan = "Februari"; break;
    case 2: bulan = "Maret"; break;
    case 3: bulan = "April"; break;
    case 4: bulan = "Mei"; break;
    case 5: bulan = "Juni"; break;
    case 6: bulan = "Juli"; break;
    case 7: bulan = "Agustus"; break;
    case 8: bulan = "September"; break;
    case 9: bulan = "Oktober"; break;
    case 10: bulan = "November"; break;
    case 11: bulan = "Desember"; break;
    }
    var tampilTanggal = hari + ", " + tanggal + " " + bulan + " " + tahun;
    return tampilTanggal;
}
function currentDate() {
    var d = new Date();
    var month = d.getMonth() + 1;
    var day = d.getDate();
    var current_date = d.getFullYear() + '-' +
        (month < 10 ? '0' : '') + month + '-' +
        (day < 10 ? '0' : '') + day
    return current_date;
}
function toTitleCase(str) {
    var lcStr = str.toLowerCase();
    return lcStr.replace(/(?:^|\s)\w/g, function(match) {
        return match.toUpperCase();
    });
}
function number_format(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}
function roundToTwo(num) {
    return +(Math.round(num + "e+2")  + "e-2");
}
function romanize(num) {
    if (isNaN(num))
        return NaN;
    var digits = String(+num).split(""),
        key = ["","C","CC","CCC","CD","D","DC","DCC","DCCC","CM",
               "","X","XX","XXX","XL","L","LX","LXX","LXXX","XC",
               "","I","II","III","IV","V","VI","VII","VIII","IX"],
        roman = "",
        i = 3;
    while (i--)
        roman = (key[+digits.pop() + (i * 10)] || "") + roman;
    return Array(+digits.join("") + 1).join("M") + roman;
}
function getNumberWeek(orginaldate) {
    var currentDate = new Date(orginaldate);
    var year =  new Date(currentDate.getFullYear(), 0, 1);
    var days =  Math.floor((currentDate - year) / (24 * 60 * 60 * 1000));
    var week = Math.ceil(( currentDate.getDay() + 1 + days) / 7);
    if (week < 10) {
        week = "0" + week;
    }
    return week;
}
function currentDateTime() {
    var date = new Date();
    var day = date.getDate();
    var month = date.getMonth() + 1;
    var year = date.getFullYear();
    var jam = date.getHours();
    var menit = date.getMinutes();
    var detik = date.getSeconds();
    if (detik < 10) {
        detik = "0" + detik;
    }
    if (menit < 10) {
        menit = "0" + menit;
    }
    if (jam < 10) {
        jam = "0" + jam;
    }
    if (day < 10) {
        day = "0" + day;
    }
    if (month < 10) {
        month = "0" + month;
    }
    var date = year + "-" + month + "-" + day+' '+jam + ":" + menit + ":" + detik;
    return date;
}
