function stdForm(){
    var std = document.getElementById("stdForm");
    var tea = document.getElementById("teaForm");
    var reg = document.getElementById("regForm");

    std.classlist.remove("hide");
    std.classlist.add("unhide");

    tea.classlist.remove("unhide");
    tea.classlist.add("hide");

    reg.classlist.remove("unhide");
    reg.classlist.add("hide");
}

function teaForm(){
    var std = document.getElementById("stdForm");
    var tea = document.getElementById("teaForm");
    var reg = document.getElementById("regForm");

    std.classlist.remove("unhide");
    std.classlist.add("hide");

    tea.classlist.remove("hide");
    tea.classlist.add("unhide");

    reg.classlist.remove("unhide");
    reg.classlist.add("hide");
}

function regForm(){
    var std = document.getElementById("stdForm");
    var tea = document.getElementById("teaForm");
    var reg = document.getElementById("regForm");

    std.classlist.remove("unhide");
    std.classlist.add("hide");

    tea.classlist.remove("unhide");
    tea.classlist.add("hide");

    reg.classlist.remove("hide");
    reg.classlist.add("unhide");
}