$(function (){
    $(document).on("click","#nueva_cita",function(e){
        e.preventDefault();
        console.log("Capturando evento");
        //$('#myModal').modal('show'); para abrir modal
        //$('#myModal').modal('hide'); para cerrar modal
        $('#ModalRegistrar').modal('show');
        $('#nombre').prop('disabled', false);
        $('#apellido').prop('disabled', false);
        $('#telefono').prop('disabled', false);
        $('#fecha_cita').prop('disabled', false);
        $('#hora_cita').prop('disabled', false);
    
        $(".select2").select2({
        }).on("select2:opening", 
            function(){
                $(".modal").removeAttr("tabindex", "-1");
        }).on("select2:close", 
            function(){ 
                $(".modal").attr("tabindex", "-1");
        });
    
    });

    

   

    $(document).on("click","#registrar_cita",function(e){
        e.preventDefault();
        console.log("Capturando evento");
        //$('#myModal').modal('show'); para abrir modal
        //$('#myModal').modal('hide'); para cerrar modal
        $('#nombre').prop('disabled', true);
        $('#apellido').prop('disabled', true);
        $('#telefono').prop('disabled', true);
        $('#fecha_cita').prop('disabled', false);
        $('#hora_cita').prop('disabled', false);

    });

    $(document).on("click","#posponerCita",function(e){
        e.preventDefault();
        console.log("Capturando evento");
        //$('#myModal').modal('show'); para abrir modal
        //$('#myModal').modal('hide'); para cerrar modal
        $('#nombre').prop('disabled', true);
        $('#apellido').prop('disabled', true);
        $('#telefono').prop('disabled', true);
        $('#fecha_cita').prop('disabled', false);
        $('#hora_cita').prop('disabled', false);

    });





});

