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
function formatJamMenit(orginaldate) {
    var date = new Date(orginaldate);
    var jam = date.getHours();
    var menit = date.getMinutes();
    if (menit < 10) {
        menit = "0" + menit;
    }
    if (jam < 10) {
        jam = "0" + jam;
    }
    var date = jam + ":" + menit;
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
    case 5: hari = "Jumat"; break;
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
function formatDateIndonesiaShort(orginaldate) {
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
    case 5: hari = "Jumat"; break;
    case 6: hari = "Sabtu"; break;
    }
    switch(bulan) {
    case 0: bulan = "Jan"; break;
    case 1: bulan = "Feb"; break;
    case 2: bulan = "Mar"; break;
    case 3: bulan = "Apr"; break;
    case 4: bulan = "Mei"; break;
    case 5: bulan = "Jun"; break;
    case 6: bulan = "Jul"; break;
    case 7: bulan = "Agu"; break;
    case 8: bulan = "Sep"; break;
    case 9: bulan = "Okt"; break;
    case 10: bulan = "Nov"; break;
    case 11: bulan = "Des"; break;
    }
    var tampilTanggal = hari + ", " + tanggal + " " + bulan + " " + tahun;
    return tampilTanggal;
}
function formatDateIndonesiaTanggalBulan(orginaldate) {
    var date = new Date(orginaldate);
    var bulan = date.getMonth();
    var tanggal = date.getDate();
    if (tanggal < 10) {
        tanggal = "0" + tanggal;
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
    var tampilTanggal = tanggal + " " + bulan 
    return tampilTanggal;
}
function formatDateIndonesiaTanggalBulanSort(orginaldate) {
    var date = new Date(orginaldate);
    var bulan = date.getMonth();
    var tanggal = date.getDate();
    if (tanggal < 10) {
        tanggal = "0" + tanggal;
    }
    switch(bulan) {
    case 0: bulan = "Jan"; break;
    case 1: bulan = "Feb"; break;
    case 2: bulan = "Mar"; break;
    case 3: bulan = "Apr"; break;
    case 4: bulan = "Mei"; break;
    case 5: bulan = "Jun"; break;
    case 6: bulan = "Jul"; break;
    case 7: bulan = "Agu"; break;
    case 8: bulan = "Sep"; break;
    case 9: bulan = "Okt"; break;
    case 10: bulan = "Nov"; break;
    case 11: bulan = "Des"; break;
    }
    var tampilTanggal = tanggal + " " + bulan 
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
function currentTime() {
    var d = new Date();
    var jam = d.getHours();
    var menit = d.getMinutes();
    if (menit < 10) {
        menit = "0" + menit;
    }
    if (jam < 10) {
        jam = "0" + jam;
    }
    var time = jam + "." + menit;
    return time;
}
function toTitleCase(str) {
    var lcStr = str.toLowerCase();
    return lcStr.replace(/(?:^|\s)\w/g, function(match) {
        return match.toUpperCase();
    });
}
function number_format(x) {
    // return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    var parts = x.toString().split(".");
    parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    return parts.join(",");
}
function roundToTwo(num) {
    return +(Math.round(num + "e+2")  + "e-2");
}
function roundToThree(num) {
    return +(Math.round(num + "e+3")  + "e-3");
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
function currentDateTimeNoSeconds() {
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
    var date = day + "/" + month + "/" + year+' '+jam + ":" + menit 
    return date;
}

function getDateTime(orginaldate) {
    var date = new Date(orginaldate);
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
function getDateStringWithTime(orginaldate) {
    var date = new Date(orginaldate);
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
    switch(month) {
        case 0: month = "Januari"; break;
        case 1: month = "Februari"; break;
        case 2: month = "Maret"; break;
        case 3: month = "April"; break;
        case 4: month = "Mei"; break;
        case 5: month = "Juni"; break;
        case 6: month = "Juli"; break;
        case 7: month = "Agustus"; break;
        case 8: month = "September"; break;
        case 9: month = "Oktober"; break;
        case 10: month = "November"; break;
        case 11: month = "Desember"; break;
        }
    var date = day + " " + month + " " + year+' '+jam + ":" + menit + ":" + detik;
    return date;
}
function groupAndSum(arr, groupKeys, sumKeys) {
    return Object.values(
        arr.reduce((acc, curr) => {
            const group = groupKeys.map(k => curr[k]).join('-');
            acc[group] = acc[group] || Object.fromEntries(groupKeys.map(k => [k, curr[k]]).concat(sumKeys.map(k => [k, 0])));
            sumKeys.forEach(k => acc[group][k] += curr[k]);
            return acc;
        }, {})
    );
}
function shortenName(data, jumlah) {
    var text = data.split(' ')
    var text2 = ""
    for (let i = 0; i < jumlah; i++) {
        if (text[i] == undefined) {
            text2 = text2 + ''
        } else {
            text2 = text2 + '' + text[i] + ' '
        }
    }
    return text2
}
function dateRange(startDate, endDate, steps = 1) {
    const dateArray = [];
    let currentDate = new Date(startDate);
  
    while (currentDate <= new Date(endDate)) {
      dateArray.push(new Date(currentDate));
      // Use UTC date to prevent problems with time zones and DST
      currentDate.setUTCDate(currentDate.getUTCDate() + steps);
    }
  
    return dateArray;
  }
  function dateRangeComplete(startDate, endDate) {
    const dateStart = new Date(startDate);
    const dateEnd = new Date(endDate);
    const dates = [];

    // Mengiterasi setiap hari antara dateStart dan dateEnd
    for (let date = new Date(dateStart); date <= dateEnd; date.setDate(date.getDate() + 1)) {
    const formattedDate = date.toISOString().split("T")[0];
    dates.push(formattedDate);
    }
    return dates
  }
  function removeTags(str) {
    if ((str===null) || (str===''))
        return false;
    else
        str = str.toString();
          
    // Regular expression to identify HTML tags in
    // the input string. Replacing the identified
    // HTML tag with a null string.
    return str.replace( /(<([^>]+)>)/ig, '');
}
function shortenText(text, maxLength) {
    if (text.length <= maxLength) {
      return text; // Mengembalikan teks asli jika panjangnya kurang dari atau sama dengan maxLength
    } else {
      var shortenedText = text.substring(0, maxLength - 3) + '...'; // Memperpendek teks dan menambahkan tanda titik-titik
      return shortenedText;
    }
  }
  function convertTimeFormat(timeString) {
    // Memisahkan jam, menit, dan detik dari string waktu
    var timeParts = timeString.split(":");
    var hour = timeParts[0];
    var minute = timeParts[1];

    // Menggabungkan jam dan menit dengan tanda titik sebagai pemisah
    var formattedTime = hour + "." + minute;

    return formattedTime;
}
  function convertTimeFormat2(timeString) {
    // Memisahkan jam, menit, dan detik dari string waktu
    var timeParts = timeString.split(":");
    var hour = timeParts[0];
    var minute = timeParts[1];

    // Menggabungkan jam dan menit dengan tanda titik sebagai pemisah
    var formattedTime = hour + ":" + minute;

    return formattedTime;
}
function convertToLongLink(word) {
    let longLink = "";
  
    for (let i = 0; i < word.length; i++) {
      longLink += "&#" + word.charCodeAt(i) + ";";
    }
  
    return longLink;
  }
  function decodeHtmlEntities(encodedString) {
    return encodedString.replace(/&#(\d+);/g, (match, dec) => String.fromCharCode(dec));
  }