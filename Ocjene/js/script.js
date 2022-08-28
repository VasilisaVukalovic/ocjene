window.onload = function ()
{
    //za sve godine da ucita odma svu tabelu
    getGradesTable(0);


    //ovo je provjera duzine pass posto tamo submit vec nesto radi mi u onload dodamo novu funkciju jer tamo na onclick
    //nesto nece
    var sub=document.getElementById("idSubmit");
    sub.addEventListener("click",function()
    {
        var user=document.getElementById("username").value;
        var pass=document.getElementById("password").value;
        var form=document.getElementById("idForm");

        if( pass.length<6 || user.length==0)
        {
            alert("Password mast be 6 characters long!")
        }
        else
        {
            form.submit();
        }

    } )


}

function getGradesTable(year){
    var  xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function (){
        if(this.readyState == 4 && this.status == 200)
        {
           var tableDiv = document.getElementById("gradesTable");
            tableDiv.innerHTML = this.responseText;
        }
    }

    xhr.open("GET", "/components/gradesTable.php?year="+year);
    xhr.send();
}
function selectionChanged(e)
{
    getGradesTable(e.value);
}


