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
