$(document).ready(function(){

    var obj=document.getElementById('si_no');
    window.addEventListener("load",Desabilitar,false);
    obj.addEventListener("change",Desabilitar,false);


    $('#btn_agrega').on('click', function(){
        Insertar_Opcion();
    });

    $('#btn_elimina').on('click', function(){
        Eliminar_Opcion();
    });

    $(document).on('click', '.next',function(){
        SeleccionaTodo();
    });

    function Insertar_Opcion()
    {
        var aText = document.getElementById('n_opcion');

        var nOpcion = document.createElement('option');
        if (aText.value=='')
            return;
        nOpcion.text=aText.value;
        nOpcion.value=aText.value;

        var eSel = document.getElementById('opciones');
        eSel.add(nOpcion,null);
        aText.value='';
    }

    function Eliminar_Opcion()
    {
        var eSel = document.getElementById('opciones');
        for (var i = eSel.length - 1; i>=0; --i) {
            if (eSel.options[i].selected)
                eSel.remove(i);
        }
    }

    function Desabilitar(e)
    {
        //alert("Si he hecho esto " + obj.checked);
        var aText = document.getElementById('n_opcion');
        var eSel = document.getElementById('opciones');
        var b1 = document.getElementById('btn_agrega');
        var b2 = document.getElementById('btn_elimina');
        if (obj.checked==true) {
            aText.disabled=true;
            eSel.disabled=true;
            b1.disabled=true;
            b2.disabled=true;
        } else {
            aText.disabled=false;
            eSel.disabled=false;
            b1.disabled=false;
            b2.disabled=false;
        }
    }
    function SeleccionaTodo()
    {
        var ObjSel = document.getElementById('opciones');
        for (var i=0; i<ObjSel.options.length; ++i)
            ObjSel.options[i].selected = true;
    }

});