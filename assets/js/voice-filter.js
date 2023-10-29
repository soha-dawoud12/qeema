
    var expanded = false;

    function showCheckboxes() {
        var checkboxes = document.getElementById("checkboxes");
        if (!expanded) {
            checkboxes.style.display = "block";
            expanded = true;

        } else {
            checkboxes.style.display = "none";
            expanded = false;
        }
    }






    function showCheckboxes2() {
        var checkboxes = document.getElementById("checkboxes2");
        if (!expanded) {
            checkboxes.style.display = "block";
            expanded = true;



        } else {
            checkboxes.style.display = "none";
            expanded = false;
        }
    }

    function showCheckboxes3() {
        var checkboxes = document.getElementById("checkboxes3");
        if (!expanded) {
            checkboxes.style.display = "block";
            expanded = true;



        } else {


            checkboxes.style.display = "none";
            expanded = false;
        }
    }


    $("#one").click( function (){
        checkboxes.style.display = "none";
        expanded = false;
        document.getElementById("sele").innerHTML = " Language | English   ";
    });
    $("#two").click( function (){
        checkboxes.style.display = "none";
        expanded = false;
        document.getElementById("sele").innerHTML = "Language | Arabic";
    });


    
    $("#one2").click( function (){
        checkboxes2.style.display = "none";
        expanded = false;
        document.getElementById("ssless").innerHTML = " Woman";
    });
    $("#two2").click( function (){
        checkboxes2.style.display = "none";
        expanded = false;
        document.getElementById("ssless").innerHTML = " man";
    });


    $("#one3").click( function (){
        checkboxes3.style.display = "none";
        expanded = false;
        document.getElementById("ssles").innerHTML = "Lebanese";
    });
    $("#two3").click( function (){
        checkboxes3.style.display = "none";
        expanded = false;
        document.getElementById("ssles").innerHTML = "Syrian";
    });
    $("#three3").click( function (){
        checkboxes3.style.display = "none";
        expanded = false;
        document.getElementById("ssles").innerHTML = "suadi";
    });
    $("#two3").click( function (){
        checkboxes3.style.display = "none";
        expanded = false;
        document.getElementById("ssles").innerHTML = "Jordanian";
    });

