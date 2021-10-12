<?php function bellbank_form(){ ?>

<link
  href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css"
  rel="stylesheet"
/>

<style>
  .Funding {
    position: relative;
  }
  .Funding .container {
    margin-top: 40px;
    background: #ffffff;
    padding: 50px 23px;
  }
  .Funding .form-control {
    color: #495057;
    font-size: 0.9rem;
    background-color: #fff;
    background-clip: padding-box;
    border-bottom: 1px solid #ced4da;
    border-top: 0px;
    border-left: 0px;
    border-right: 0px;
    border-radius: 0px;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  }
  .Funding .form-control:focus {
    color: #404346;
    background-color: #fff;
    border-color: #f2f2f3;
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgb(254 254 255 / 98%);
  }
  .Funding .radio {
    float: left;
    margin-left: 10px;
  }
  .Funding .radio-label {
    float: left;
    width: 100%;
    font-size: 0.9rem;
    color: #6c757d;
    margin-left: 10px;
  }
  .inner-card {
    margin: 79px 0px 70px 0px;
  }

  .card-0 {
    margin-top: 100px;
    margin-bottom: 100px;
  }

  .card-1 {
    border-radius: 17px;
    color: black;
    box-shadow: 2px 4px 15px 0px rgb(0, 0, 0, 0.5) !important;
  }

  #accountStatementFiles,
  #driverLicensesFiles,
  #cheFiles {
    border: 2px dashed #92b0b3 !important;
  }

  .color input {
    background-color: #f1f1f1;
  }

  .files:before {
    position: absolute;
    bottom: 60px;
    left: 0;
    width: 100%;
    content: attr(data-before);
    color: #000;
    font-size: 12px;
    font-weight: 600;
    text-align: center;
  }

  #driverLicensesFiles {
    display: inline-block;
    width: 100%;
    padding: 95px 0 0 100%;
    background: url("https://i.imgur.com/VXWKoBD.png") top center no-repeat
      #fff;
    background-size: 55px 55px;
  }
  #cheFiles {
    display: inline-block;
    width: 100%;
    padding: 95px 0 0 100%;
    background: url("https://i.imgur.com/VXWKoBD.png") top center no-repeat
      #fff;
    background-size: 55px 55px;
  }
  #accountStatementFiles {
    display: inline-block;
    width: 100%;
    padding: 95px 0 0 100%;
    background: url("https://i.imgur.com/VXWKoBD.png") top center no-repeat
      #fff;
    background-size: 55px 55px;
  }
  label {
    color: #495057;
    font-size: 0.9rem;
  }
       button#enviar {
    width: 100%;
    background: #297a52;
}
</style>
</head>
<body style="background: #ececec">
<div class="Funding">
  <div class="container">
    <form
      enctype="multipart/form-data"
      action=""
      method="post"
      id="fesForm"
    >
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 form-group">
          <input
            type="text"
            class="form-control"
            name="dni"
            id="dni"
            placeholder="DNI"
          />
        </div>
        <div class="col-sm-12 col-md-12 col-lg-12 form-group">
          <input
            type="text"
            class="form-control"
            name="name"
            id="name"
            placeholder="Nombre"
          />
        </div>
        <div class="col-sm-12 col-md-12 col-lg-12 form-group">
          <input
            type="text"
            class="form-control"
            name="email"
            id="email"
            placeholder="Correo"
          />
        </div>

        <div class="col-sm-12 col-md-12 col-lg-12 form-group">
          <input
            type="text"
            class="form-control"
            name="phone"
            id="phone"
            placeholder="Telefono"
          />
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <!-- Start slider -->
          <label for="amount">¿Cuanto necesitas?</label>
          <input
            type="text"
            id="amount"
            name="amount"
            class="form-control"
            readonly=""
            style="font-weight: bold; color: green; margin-bottom: 15px"
          />

          <div id="slider"></div>
          <br />
          <br />

          <!-- End slider -->
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <!-- Start slider -->
          <label for="how_long">¿Para cuánto tiempo?</label>
          <input
            type="text"
            id="how_long"
            name="how_long"
            class="form-control"
            readonly=""
            style="font-weight: bold; color: green; margin-bottom: 15px"
          />

          <div id="slider2"></div>

          <br />
          <br />
          <!-- End slider -->
        </div>

        <div class="col-sm-12 col-md-12 col-lg-12 form-group">
            
             <input
                type="text"
                class="form-control"
                name="seller_id"
                id="seller_id"
                placeholder="BROKER ID"
              />  
              
        
        </div>
      </div>
      <hr />

      <div class="row">
        <div class="col-md-12">
          <br><br>
          <button type="button" id="enviar">SEND</button>
          
        </div>
        <div class="col-md-12" id="Fes"></div>
      </div>
    </form>
  </div>
</div>
<script src="https://bill.greendepartment.us/js/jquery-mask-plugin-master/src/jquery.mask.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>
  jQuery(document).ready(function ($) {
    $("input#phone").mask("(000) 000-0000");

    $("#slider").slider({
      value: 250000,
      min: 250000,
      max: 25000000,
      step: 50000,
      slide: function (event, ui) {
        var amount = new Intl.NumberFormat("de-DE").format(ui.value);
        $("#amount").val(amount);
      },
    });
    $("#amount").val($("#slider").slider("value"));

    $("#slider2").slider({
      value: 6,
      min: 6,
      max: 240,
      step: 1,
      slide: function (event, ui) {
        //  var how_long = new Intl.NumberFormat("de-DE").format(ui.value);
        $("#how_long").val(ui.value);
      },
    });
    $("#how_long").val($("#slider2").slider("value"));

    const selectTwo = document.querySelector("#seller_id");
    const urlTwo =
      "https://bluebox.digersogroup.com/api/v1/sellers";

    fetch(urlTwo, {
      method: "GET",
    })
      .then((res) => res.json())
      .then((data) => {
        console.log(data.data);
        for (var i = 0; i < data.data.length; i++) {
          console.log(data.data[i].id);
          jQuery("#seller_id").niceSelect("update");
          jQuery("#seller_id").append(
            '<option value="' +
              data.data[i].id +
              '">' +
              data.data[i].name +
              "</option>"
          );
        }
                      jQuery('#seller_id').niceSelect('update');

      })
      .catch(function (error) {
        console.error("¡Error!", error);
      });

    $("#enviar").click(function () {
        
         jQuery("#dni").removeAttr("style");
         jQuery("#email").removeAttr("style");
         jQuery("#name").removeAttr("style");
         jQuery("#phone").removeAttr("style");  
         jQuery("#amount").removeAttr("style");
         jQuery("#how_long").removeAttr("style");  
        
      const dni = document.getElementById("dni").value;
      const name = document.getElementById("name").value;
      const phone = document.getElementById("phone").value;
      const email = document.getElementById("email").value;
      const amount = document.getElementById("amount").value;
      const how_long = document.getElementById("how_long").value;
      var expr =
        /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

      if (email == "" || name == "" || phone == "" || dni == "" ) {
        //COMPRUEBA CAMPOS VACIOS
        jQuery("#Fes").empty();
        $("#Fes").append(
          '<br><br><div class="alert alert-danger" role="alert">Hay Campos Vacios Verifique</div>'
        );
      }

      if (dni == "") {
        $("#dni").css("border-bottom-color", " #f90101");
      }

      if (email == "") {
        $("#email").css("border-bottom-color", " #f90101");
      }
      if (name == "") {
        $("#name").css("border-bottom-color", " F#f90101");
      }
      if (phone == "") {
        $("#phone").css("border-bottom-color", " #f90101");
      }

      if (amount == "") {
        $("#amount").css("border-bottom-color", " #f90101");
      }

      if (how_long == "") {
        $("#how_long").css("border-bottom-color", " #f90101");
      }
      if (!expr.test(email)) {
            jQuery("#Fes").empty();
            $("#Fes").append(
              '<div class="alert alert-danger" role="alert">Email format is incorrect</div>'
            );
            //COMPRUEBA MAIL
            return false;
          }
   

      fesForm();
    });
  });
</script>

<script>
  function fesForm() {
    const formData = new FormData();
    // const formData = new URLSearchParams();
    formData.append("dni", document.getElementById("dni").value);
    formData.append("name", document.getElementById("name").value);
    formData.append("email", document.getElementById("email").value);
    formData.append("phone", document.getElementById("phone").value);
    formData.append("amount", document.getElementById("amount").value);
    formData.append("how_long", document.getElementById("how_long").value);
    formData.append(
      "seller_id",
      document.getElementById("seller_id").value
    );
    var myHeaders = new Headers();
    myHeaders.append(
      "Authorization",
      "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIzIiwianRpIjoiMjI5NmNmZWEwMDI0Nzg4ZTY4MmI1ODEzMTRkMzkyYWUxMmZlMWJjYTQ3YjA2ZmJkMmFiOTM4ZDBmNDg0NWVhNTNkMDI1OWNjNGE5OTQ4YzEiLCJpYXQiOjE2MjYxNDY3NTcuMTk0NDc3MDgxMjk4ODI4MTI1LCJuYmYiOjE2MjYxNDY3NTcuMTk0NDc5OTQyMzIxNzc3MzQzNzUsImV4cCI6MTY1NzY4Mjc1Ny4xODk2NTI5MTk3NjkyODcxMDkzNzUsInN1YiI6IiIsInNjb3BlcyI6W119.TCQ9C_0qg0f2tqZ4DeLm2VmSSU3ZQpENUD84lGANg5We0gjHiGOVuBj59K2IQfpEedu7-yNHtqVzul-vm70KHvgGJ45kmwUVs0RWktYuVn8GEZJzDHRGLVmhvPYQ_loNF0qqwJPAGGt1shX4vUo5NJRekUFwhKal0MTdJC6z7lvUdHXkjqa64nAVe4CKrTiPxRZaBYJbzfVXP9N39TKeAcfnVsaRAu7QhL7g8LqNpXcJ1xuf_Jzuz8bxWB8YYHBjq_wT_gPvGAKpB-iAy4zKJLwPstVfpAMOn_NpzyYQ_Pr1wi3VGEKjFhxIoBf9xGuzC2Vxf73gBcTMwN73z_i_mirPXz96kZ-dcDywbtwAjbhz34PQtuvKSauuuLYSOBQ1DP3X-2Q2UOZ0g3jGpUeg4uYTQOdgOFM_bABXtYJErjQX11athwGsxGoludeN9Rx2LADoiIQm7GMk-d3IKn19Y9niG7YGAcwzQt8jprVT3MhCu8TDdqueu4ylEOWrp6h9X1Mfth8-aTJzwA0XQvQMwmamUiL9w9PJB5O8vHOTCM8EFjFJSTd-Oknu8WtUMi3nA93JAi3xqdo5EaSFLehp8hKrqsnPpnBgPAzrqzPP2zixxn4WmGT9RDK_5rTfmoJWoNbjqmQzK2MfWTVkbeMMhY-1IkgMY7HsPS3RWUygoGU"
    );
    // myHeaders.append("Content-Type", "application/x-www-form-formData"); //Eliminar (para el envío de archivos esto no se debe habilitar)
    //myHeaders.append("Content-Type", "multipart/form-data"); //Eliminar (para el envío de archivos esto no se debe habilitar)

    var requestOptions = {
      method: "POST",
      headers: myHeaders,
      body: formData,
      redirect: "follow",
    };
    fetch(
      "https://bluebox.digersogroup.com/api/v1/clients/bellbank",
      requestOptions
    )
      .then((response) => response.text())
      .then((result) => {
        console.log(result);
        document.getElementById("fesForm").reset();
        jQuery("#Fes").empty();
        jQuery("#Fes").append(
          '<div class="alert alert-success" role="alert">information sent correctly</div>'
        );
      })
      .catch((error) => console.log("error", error));
  }
</script>
</body>



<?php  } 
add_shortcode('bellbank_form', 'bellbank_form');



function bellbank_form_en(){ ?>

<link
  href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css"
  rel="stylesheet"
/>

<style>
  .Funding {
    position: relative;
  }
  .Funding .container {
    margin-top: 40px;
    background: #ffffff;
    padding: 50px 23px;
  }
  .Funding .form-control {
    color: #495057;
    font-size: 0.9rem;
    background-color: #fff;
    background-clip: padding-box;
    border-bottom: 1px solid #ced4da;
    border-top: 0px;
    border-left: 0px;
    border-right: 0px;
    border-radius: 0px;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  }
  .Funding .form-control:focus {
    color: #404346;
    background-color: #fff;
    border-color: #f2f2f3;
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgb(254 254 255 / 98%);
  }
  .Funding .radio {
    float: left;
    margin-left: 10px;
  }
  .Funding .radio-label {
    float: left;
    width: 100%;
    font-size: 0.9rem;
    color: #6c757d;
    margin-left: 10px;
  }
  .inner-card {
    margin: 79px 0px 70px 0px;
  }

  .card-0 {
    margin-top: 100px;
    margin-bottom: 100px;
  }

  .card-1 {
    border-radius: 17px;
    color: black;
    box-shadow: 2px 4px 15px 0px rgb(0, 0, 0, 0.5) !important;
  }

  #accountStatementFiles,
  #driverLicensesFiles,
  #cheFiles {
    border: 2px dashed #92b0b3 !important;
  }

  .color input {
    background-color: #f1f1f1;
  }

  .files:before {
    position: absolute;
    bottom: 60px;
    left: 0;
    width: 100%;
    content: attr(data-before);
    color: #000;
    font-size: 12px;
    font-weight: 600;
    text-align: center;
  }

  #driverLicensesFiles {
    display: inline-block;
    width: 100%;
    padding: 95px 0 0 100%;
    background: url("https://i.imgur.com/VXWKoBD.png") top center no-repeat
      #fff;
    background-size: 55px 55px;
  }
  #cheFiles {
    display: inline-block;
    width: 100%;
    padding: 95px 0 0 100%;
    background: url("https://i.imgur.com/VXWKoBD.png") top center no-repeat
      #fff;
    background-size: 55px 55px;
  }
  #accountStatementFiles {
    display: inline-block;
    width: 100%;
    padding: 95px 0 0 100%;
    background: url("https://i.imgur.com/VXWKoBD.png") top center no-repeat
      #fff;
    background-size: 55px 55px;
  }
  label {
    color: #495057;
    font-size: 0.9rem;
  }
       button#enviar {
    width: 100%;
    background: #297a52;
}
</style>
</head>
<body style="background: #ececec">
<div class="Funding">
  <div class="container">
    <form
      enctype="multipart/form-data"
      action=""
      method="post"
      id="fesForm"
    >
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 form-group">
          <input
            type="text"
            class="form-control"
            name="dni"
            id="dni"
            placeholder="DNI"
          />
        </div>
        <div class="col-sm-12 col-md-12 col-lg-12 form-group">
          <input
            type="text"
            class="form-control"
            name="name"
            id="name"
            placeholder="Name"
          />
        </div>
        <div class="col-sm-12 col-md-12 col-lg-12 form-group">
          <input
            type="text"
            class="form-control"
            name="email"
            id="email"
            placeholder="Email"
          />
        </div>

        <div class="col-sm-12 col-md-12 col-lg-12 form-group">
          <input
            type="text"
            class="form-control"
            name="phone"
            id="phone"
            placeholder="Phone"
          />
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <!-- Start slider -->
          <label for="amount">¿Cuanto necesitas?</label>
          <input
            type="text"
            id="amount"
            name="amount"
            class="form-control"
            readonly=""
            style="font-weight: bold; color: green; margin-bottom: 15px"
          />

          <div id="slider"></div>
          <br />
          <br />

          <!-- End slider -->
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <!-- Start slider -->
          <label for="how_long">¿Para cuánto tiempo?</label>
          <input
            type="text"
            id="how_long"
            name="how_long"
            class="form-control"
            readonly=""
            style="font-weight: bold; color: green; margin-bottom: 15px"
          />

          <div id="slider2"></div>

          <br />
          <br />
          <!-- End slider -->
        </div>

        <div class="col-sm-12 col-md-12 col-lg-12 form-group">
             <input
                type="text"
                class="form-control"
                name="seller_id"
                id="seller_id"
                placeholder="Broker ID"
              />  
         
        </div>
      </div>
      <hr />

      <div class="row">
        <div class="col-md-12">
          <br><br>
          <button type="button" id="enviar">SEND</button>
          
        </div>
        <div class="col-md-12" id="Fes"></div>
      </div>
    </form>
  </div>
</div>
<script src="https://bill.greendepartment.org/js/jquery-mask-plugin-master/src/jquery.mask.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>
  jQuery(document).ready(function ($) {
    $("input#phone").mask("(000) 000-0000");

    $("#slider").slider({
      value: 250000,
      min: 250000,
      max: 25000000,
      step: 50000,
      slide: function (event, ui) {
        var amount = new Intl.NumberFormat("de-DE").format(ui.value);
        $("#amount").val(amount);
      },
    });
    $("#amount").val($("#slider").slider("value"));

    $("#slider2").slider({
      value: 6,
      min: 6,
      max: 240,
      step: 1,
      slide: function (event, ui) {
        //  var how_long = new Intl.NumberFormat("de-DE").format(ui.value);
        $("#how_long").val(ui.value);
      },
    });
    $("#how_long").val($("#slider2").slider("value"));

    const selectTwo = document.querySelector("#seller_id");
    const urlTwo =
      "https://bluebox.digersogroup.com/api/v1/sellers";

    fetch(urlTwo, {
      method: "GET",
    })
      .then((res) => res.json())
      .then((data) => {
        console.log(data.data);
        for (var i = 0; i < data.data.length; i++) {
          console.log(data.data[i].id);
          jQuery("#seller_id").niceSelect("update");
          jQuery("#seller_id").append(
            '<option value="' +
              data.data[i].id +
              '">' +
              data.data[i].name +
              "</option>"
          );
        }
                      jQuery('#seller_id').niceSelect('update');

      })
      .catch(function (error) {
        console.error("¡Error!", error);
      });

    $("#enviar").click(function () {
        
         jQuery("#dni").removeAttr("style");
         jQuery("#email").removeAttr("style");
         jQuery("#name").removeAttr("style");
         jQuery("#phone").removeAttr("style");  
         jQuery("#amount").removeAttr("style");
         jQuery("#how_long").removeAttr("style");  
        
      const dni = document.getElementById("dni").value;
      const name = document.getElementById("name").value;
      const phone = document.getElementById("phone").value;
      const email = document.getElementById("email").value;
      const amount = document.getElementById("amount").value;
      const how_long = document.getElementById("how_long").value;
      var expr =
        /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

      if (email == "" || name == "" || phone == "" || dni == "" ) {
        //COMPRUEBA CAMPOS VACIOS
        jQuery("#Fes").empty();
        $("#Fes").append(
          '<br><br><div class="alert alert-danger" role="alert">Hay Campos Vacios Verifique</div>'
        );
      }

      if (dni == "") {
        $("#dni").css("border-bottom-color", " #f90101");
      }

      if (email == "") {
        $("#email").css("border-bottom-color", " #f90101");
      }
      if (name == "") {
        $("#name").css("border-bottom-color", " F#f90101");
      }
      if (phone == "") {
        $("#phone").css("border-bottom-color", " #f90101");
      }

      if (amount == "") {
        $("#amount").css("border-bottom-color", " #f90101");
      }

      if (how_long == "") {
        $("#how_long").css("border-bottom-color", " #f90101");
      }
      if (!expr.test(email)) {
            jQuery("#Fes").empty();
            $("#Fes").append(
              '<div class="alert alert-danger" role="alert">Email format is incorrect</div>'
            );
            //COMPRUEBA MAIL
            return false;
          }
   

      fesForm();
    });
  });
</script>

<script>
  function fesForm() {
    const formData = new FormData();
    // const formData = new URLSearchParams();
    formData.append("dni", document.getElementById("dni").value);
    formData.append("name", document.getElementById("name").value);
    formData.append("email", document.getElementById("email").value);
    formData.append("phone", document.getElementById("phone").value);
    formData.append("amount", document.getElementById("amount").value);
    formData.append("how_long", document.getElementById("how_long").value);
    formData.append(
      "seller_id",
      document.getElementById("seller_id").value
    );
    var myHeaders = new Headers();
    myHeaders.append(
      "Authorization",
      "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIzIiwianRpIjoiMjI5NmNmZWEwMDI0Nzg4ZTY4MmI1ODEzMTRkMzkyYWUxMmZlMWJjYTQ3YjA2ZmJkMmFiOTM4ZDBmNDg0NWVhNTNkMDI1OWNjNGE5OTQ4YzEiLCJpYXQiOjE2MjYxNDY3NTcuMTk0NDc3MDgxMjk4ODI4MTI1LCJuYmYiOjE2MjYxNDY3NTcuMTk0NDc5OTQyMzIxNzc3MzQzNzUsImV4cCI6MTY1NzY4Mjc1Ny4xODk2NTI5MTk3NjkyODcxMDkzNzUsInN1YiI6IiIsInNjb3BlcyI6W119.TCQ9C_0qg0f2tqZ4DeLm2VmSSU3ZQpENUD84lGANg5We0gjHiGOVuBj59K2IQfpEedu7-yNHtqVzul-vm70KHvgGJ45kmwUVs0RWktYuVn8GEZJzDHRGLVmhvPYQ_loNF0qqwJPAGGt1shX4vUo5NJRekUFwhKal0MTdJC6z7lvUdHXkjqa64nAVe4CKrTiPxRZaBYJbzfVXP9N39TKeAcfnVsaRAu7QhL7g8LqNpXcJ1xuf_Jzuz8bxWB8YYHBjq_wT_gPvGAKpB-iAy4zKJLwPstVfpAMOn_NpzyYQ_Pr1wi3VGEKjFhxIoBf9xGuzC2Vxf73gBcTMwN73z_i_mirPXz96kZ-dcDywbtwAjbhz34PQtuvKSauuuLYSOBQ1DP3X-2Q2UOZ0g3jGpUeg4uYTQOdgOFM_bABXtYJErjQX11athwGsxGoludeN9Rx2LADoiIQm7GMk-d3IKn19Y9niG7YGAcwzQt8jprVT3MhCu8TDdqueu4ylEOWrp6h9X1Mfth8-aTJzwA0XQvQMwmamUiL9w9PJB5O8vHOTCM8EFjFJSTd-Oknu8WtUMi3nA93JAi3xqdo5EaSFLehp8hKrqsnPpnBgPAzrqzPP2zixxn4WmGT9RDK_5rTfmoJWoNbjqmQzK2MfWTVkbeMMhY-1IkgMY7HsPS3RWUygoGU"
    );
    // myHeaders.append("Content-Type", "application/x-www-form-formData"); //Eliminar (para el envío de archivos esto no se debe habilitar)
    //myHeaders.append("Content-Type", "multipart/form-data"); //Eliminar (para el envío de archivos esto no se debe habilitar)

    var requestOptions = {
      method: "POST",
      headers: myHeaders,
      body: formData,
      redirect: "follow",
    };
    fetch(
      "https://bluebox.digersogroup.com/api/v1/clients/bellbank",
      requestOptions
    )
      .then((response) => response.text())
      .then((result) => {
        console.log(result);
        document.getElementById("fesForm").reset();
        jQuery("#Fes").empty();
        jQuery("#Fes").append(
          '<div class="alert alert-success" role="alert">information sent correctly</div>'
        );
      })
      .catch((error) => console.log("error", error));
  }
</script>
</body>



<?php  } 
add_shortcode('bellbank_form_en', 'bellbank_form_en');
?>