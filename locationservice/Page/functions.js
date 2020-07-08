function splitToUpdate(source, to1, to2) {
    if (!source || !to1 || !to2) {
        return false;
    }
    else {
        source = source.nodeType == 1 ? source : document.getElementById(source);
        to1 = to1.nodeType == 1 ? to1 : document.getElementById(to1);
        to2 = to2.nodeType == 1 ? to2 : document.getElementById(to2);

        var selOpt = source.selectedIndex,
            vals = source.getElementsByTagName('option')[selOpt].value;
        to1.value = vals.split(' ')[0];
        to2.value = vals.split(' ')[1];
    }
}

var sel = document.getElementById('user_select'),
    opt1 = document.getElementById('fore_name'),
    opt2 = document.getElementById('sur_name');

    sel.onchange = function(){
        splitToUpdate('user_select', 'fore_name', 'sur_name');
    };

    function showTime(){
        var date = new Date();
        var h = date.getHours(); // 0 - 23
        var m = date.getMinutes(); // 0 - 59
        var s = date.getSeconds(); // 0 - 59
        var session = "AM";
        
        if(h == 0){
            h = 12;
        }
        
        if(h > 12){
            h = h - 12;
            session = "PM";
        }
        
        h = (h < 10) ? "0" + h : h;
        m = (m < 10) ? "0" + m : m;
        s = (s < 10) ? "0" + s : s;
        
        var time = h + ":" + m + ":" + s + " " + session;
        document.getElementById("MyClockDisplay").innerText = time;
        document.getElementById("MyClockDisplay").textContent = time;
        
        setTimeout(showTime, 1000);
        
    }
    showTime();
    