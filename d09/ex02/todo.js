function myonclik(elem) {
    var box;
    box = prompt("enter of \"To Do\"");
    if (typeof myonclik.counter == 'undefined')
        myonclik.counter = cunt_cookie();
    if (box)
        add_do(box, myonclik.counter++, elem)
}
function add_do(name, id, elem) {
    var _div = document.getElementById("ft_list");
    var para = document.createElement("div");
    para.setAttribute("id", id)
    para.setAttribute("class", "to_do")
    para.setAttribute("onclick", "del(this)")
    para.innerHTML = name;
    _div.insertBefore(para, elem.childNodes[0]);
    var d = new Date();
    document.cookie = id + "=" + name + "; expires=" + d.setDate((d.getDate) + (24 * 60 * 60 * 1000));
}
function del(element) {
    if (confirm("are you sure to delete \"" + element.innerHTML + "\" ?!")) {
        remove_cook(element.id);
        element.remove();
    }
}

function cunt_cookie() {
    var tab;
    tab = document.cookie.split(';');
    return (tab.length);
}
function remove_cook(id_el) {
    var tab;
    var cnt;
    var name;

    cnt = 0;
    tab = document.cookie.split(';');
    while (cnt < tab.length) {
        name = tab[cnt++].split('=')
        if (parseInt(name[0]) == id_el) {
            document.cookie = name[0] + "=" + name[1] + "; expires=Thu, 01 Jan 1970 00:00:00 GMT";
            break;
        }
    }
}
function read_cookie(){
    var tab;
    var name;
    var cnt;

    tab = document.cookie.split(';');
    cnt = -1;
    while (++cnt < tab.length) {
        name = tab[cnt].split('=');
        if (name[1]) {
            document.cookie = name[0] + "=" + name[1] + "; expires=Thu, 01 Jan 1970 00:00:00 GMT";
            elem = document.getElementById("button");
            add_do(name[1], cnt, elem);
        }
    }
}
window.addEventListener('DOMContentLoaded', read_cookie());