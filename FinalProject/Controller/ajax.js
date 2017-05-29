$(document).ready(function () {

  var id;



//---------Ordenar por el Valor del select ------------------------------check--------//

//Ordenar
  $('select#campos').on('change', function () {
    load(1);
  });
//Ordenar
  $('select#forma').on('change', function () {
    load(1);
  });
  load(1);
//Fin de ordenar
//---------------------------------------------check--------------------------------------------------------------------
  
  //Crea nueva fila al final de la tabla
  
  
  //Con dos nuevos botones (guardarnuevo y cancelarnuevo)
  //**********Valido el formulario de alta************************
  $("#formNew").validate({
     errorClass: "rojo",
      validClass: "verde",
    rules: {
    	formatDate: {
        required: true
        
      },
      nickname: {
        required: true
      },
      score: {
        required: true
      }
    },
    messages: {
      formatDate:{
       required: "Introducir la fecha"

       },
     nickname: "El campo nombre esta vacio",
      score: "El campo dueno esta vacio"
    }

  });
//--------Dialogo--------------check-----------------//
  $("#dialogueNew").dialog({
    autoOpen: false,
    resizable: false,
    modal: true,
    buttons: {
      "Guardar": function () {
       if ($("#formNew").valid()) {
        $.post("../Controller/RankingAdd.php", {
          idNew: $("#idNew").val(),
          formatDateNew: $("#formatDateNew").val(),
          nicknameNew: $("#nicknameNew").val(),
          scoreNew: $("#scoreNew").val(),
                  //Campio los valores antes de que actualize
        }, function (data, status) {
          // $(".container-fluid").html(data);
          load(1);

        })//get			

        $(this).dialog("close");
      }
      },
      "Cancelar": function () {
        $(this).dialog("close");

      }
    }//buttons
  });
  $(document).on("click", "#new", function () {
    $("#dialogueNew").dialog("open")
  });  
  
  //------------Fin de nuevo----check-----------------------------------

  //Se ejecuta en el tiempo de espera del servidor
  function cargar() {
    //Muestra el gráfico de cargar
    $("#cargando").show();
  }

  //Una vez cargado vuelve a ocultar el gif animado		donde coño esta el gif	
  function fin() {
    $("#cargando").hide();
  }
///Date piker 
//Muestro un formulario hecho con jquery
 // $("#formatDateUpdate").datepicker({
   // dateFormat: "dd-mm-yy"
  //});





});//Fin Ready
//--- PAGINACION ----------------check---------------------------------
//--------------------------------------------------------------------------------------------------
////document ready
//Carga la pagina
function load(page) {
  var ordena_Formas = $("select#forma").val();
  var ordena_Campos = $("select#campos").val();
  var parametros = {"action": "ajax", "page": page, "ordenar": ordena_Campos, "forma": ordena_Formas};
  $("#loader").fadeIn('slow');
  $.ajax({
    url: 'ListController.php',
    data: parametros,
    beforeSend: function (objeto) {
      $("#loader").html("<img src='../View/img/loader.gif'>");
    },
    success: function (data) {
      $(".outer_div").html(data).fadeIn('slow');
      $("#loader").html("");
    }
  });//Ajax
//-----------Fin de la carga del listad--------------------------------------
//--------------------------------------------------------------------------------------------
//-----------Comienzo DIALOGO DE BORRADO ------------------------------------------
  
  $("#dialogueDelete").dialog({
    autoOpen: false,
    resizable: false,
    modal: true,
    buttons: {
      //BOTON DE BORRAR
      "Borrar": function () {
        //Ajax con get
        $.get("../Controller/RankingDelete.php", {"id": id}, function (data, status) {
          $("#ranking_" + id).fadeOut(1000);
        });//get			
        //Cerrar la ventana de dialogo				
        $(this).dialog("close");
      },
      "Cancelar": function () {
        //Cerrar la ventana de dialogo
        $(this).dialog("close");
      }
    }//buttons
  });//Fin de dialogo borrar

  //Evento click que pulsa el boton borrar
  $(document).on("click", "#delete", function () {
    //a traves del atributo idrecord del tr
    id = $(this).parents("tr").data("id");
    //Accion para mostrar el dialogo de borrar
    $("#dialogueDelete").dialog("open");
  });
//-----------------------------------------------------------------------------------------------
//**************Validate del fomulario modificar ************************
   $("#formulario").validate({
     errorClass: "rojo",
      validClass: "verde",
    rules: {
    	date: {
        required: true
      
      },
      nickname: {
        required: true
      },
      score: {
        required: true
      }
    },
    messages: {
        
    	date: "Debe introducir la fecha.",
        
    	nickname: "El campo nombre esta vacio",
    	score: "El campo dueno esta vacio",

    }

  });//FIn de la validacion 
  
  //-----------------------------------check----------------------------------------------------------
  //-----MODIFICAR ----------------------------------------------
  
  $("#dialogueUpdate").dialog({
    autoOpen: false,
    resizable: false,
    modal: true,
    buttons: {
      "Guardar": function () {
        if ($("#formulario").valid()) {


          $.post("../Controller/RankingUpdate.php", {
        	  idUpdate: id,
        	  formatDateUpdate: $("#formatDateUpdate").val(),
        	  nicknameUpdate: $("#nicknameUpdate").val(),
        	  scoreUpdate: $("#scoreUpdate").val()
                    //Campio los valores antes de que actualize
          }, function (data, status) {
            //$(".container-fluid").html(data);
            //Cambio los dadtos al instante 
            $("#ranking_" + id + " td.date").html($("#formatDateUpdate").val());
            $("#ranking_" + id + " td.nickname").html($("#nicknameUpdate").val());
            $("#ranking_" + id + " td.score").html($("#scoreUpdate").val());



          })//get			

          $(this).dialog("close");
        }
      },
      "Cancelar": function () {
        $(this).dialog("close");
      }
    }//buttons
  });//Fin de dialogo modificar

  //Boton Modificar	
  //Pinto los datos de cada campo
  $(document).on("click", "#update", function () {
    //Obtenemos lo valores de la fila que queremos modificar
   
    id = $(this).parents("tr").data("id");
    //muentra el valor de esa fila 
    $("#idUpdate").val($(this).parent().siblings("td.id").html());
    //Para que ponga el campo de la fecha de alta con su val
    $("#formatDateUpdate").val($(this).parent().siblings("td.date").html());
   
    $("#nicknameUpdate").val($(this).parent().siblings("td.nickname").html());
  
    $("#scoreUpdate").val($(this).parent().siblings("td.score").html());


    //Muestro el dialogo
    $("#dialogueUpdate").dialog("open");

  });


//----------------------------------------------------


//Se ejecuta en el tiempo de espera del servidor
  function cargar() {
    //Muestra el gráfico de cargar
    $("#cargando").show();
  }

//Una vez cargado vuelve a ocultar el gif animado			
  function fin() {
    $("#cargando").hide();
  }
//-------Buscador -------------//

}
