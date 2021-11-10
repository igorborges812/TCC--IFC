
  function updateTextArea() {
    if ($("input:checked").length == 1) {
    
      var allNameVals = [];
      var allSeatsVals = [];
  
      //Storing in Array
      allNameVals.push($("#Username").val());
      $("#seatsBlock :checked").each(function () {
        allSeatsVals.push($(this).val());
      });
  
      //Displaying
      $("#nameDisplay").val(allNameVals);
      $("#seatsDisplay").val(allSeatsVals);
    } else {
      alert("Por Favor Selecione Apenas 1 Armário");
    }
  }
  
  function myFunction() {
    alert($("input:checked").length);
  }
  
  
  $(":checkbox").click(function () {
    if ($("input:checked").length == $("#Numseats").val()) {
      $(":checkbox").prop("disabled", true);
      $(":checked").prop("disabled", false);
    } else {
      $(":checkbox").prop("disabled", false);
    }
  });
  
  

  

  
  