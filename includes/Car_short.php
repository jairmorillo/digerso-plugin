
<?php  function Car_short_form(){ ?>  
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css"
      rel="stylesheet"
    />
       <style>
    .Funding {
            position: relative;
            width: 100% !important;
        }
      .Funding .container {
            margin-top: 40px;
            background: transparent;
            padding: 0px 0px;
            width: 100% !important;
        }
      .Funding .form-control {
        color: #495057;
        font-size: 0.9rem;
        background-color: #fff;
        background-clip: padding-box;
        border-bottom: 1px solid #ced4da;
        border-top: 1px solid #ced4da;
        border-left: 1px solid #ced4da;
        border-right: 1px solid #ced4da;
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
    color: #fff;
    font-size: .9rem;
}
      .form-group {
    margin-bottom: 0px;
}
.Funding hr {
    margin: 15px !important;
}
button#enviar {
    border-radius: 8px;
    background: #cd2c4e;
    border: none;
    color: #fff;
    height: 50px;
    width: 150px;
}


button#enviar2 {
    border-radius: 8px;
    background: #cd2c4e;
    border: none;
    color: #fff;
    height: 50px;
    width: 150px;
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
          id="CarFormshort"
        >
          <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6 form-group">
              <input
                type="text"
                class="form-control"
                name="name"
                id="name"
                pattern="^[A-Za-z]+$"
                maxlength="20"
                placeholder="Nombre"
              />
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 form-group">
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
              <label for="amount">Año</label>
              <input
                type="text"
                id="year"
                name="year"
                class="form-control"
                readonly=""
                style="font-weight: bold; color: green; margin-bottom: 15px"
              />

              <div id="slider"></div>
              <br />
              <br />

              <!-- End slider -->
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 form-group">
              <select name="brandA" id="brandA" class="form-control">
                <option value="">Elige una marca...</option>
          <option value="Alfa Romeo">Alfa Romeo     </option>
<option value="Audi">Audi           </option>
<option value="Baic">Baic           </option>
<option value="Bajaj">Bajaj          </option>
<option value="Bentley">Bentley        </option>
<option value="BMW">BMW            </option>
<option value="Brilliance">Brilliance     </option>
<option value="BYD">BYD            </option>
<option value="Cadillac">Cadillac       </option>
<option value="Changan">Changan        </option>
<option value="Chery">Chery          </option>
<option value="Chevrolet">Chevrolet      </option>
<option value="Chrysler">Chrysler       </option>
<option value="Citroen">Citroen        </option>
<option value="Daewoo">Daewoo         </option>
<option value="Daihatsu">Daihatsu       </option>
<option value="Datsun">Datsun         </option>
<option value="DFM">DFM            </option>
<option value="Dodge">Dodge          </option>
<option value="Dongfeng">Dongfeng       </option>
<option value="Ferrari">Ferrari        </option>
<option value="Fiat">Fiat           </option>
<option value="Ford">Ford           </option>
<option value="Formula">Formula        </option>
<option value="Foton">Foton          </option>
<option value="GMC">GMC            </option>
<option value="Go Electric">Go Electric    </option>
<option value="Higer">Higer          </option>
<option value="Hino">Hino           </option>
<option value="Honda">Honda          </option>
<option value="Hummer">Hummer         </option>
<option value="Hyundai">Hyundai        </option>
<option value="Infiniti">Infiniti       </option>
<option value="Isuzu">Isuzu          </option>
<option value="Jac">Jac            </option>
<option value="Jaguar">Jaguar         </option>
<option value="Jeep">Jeep           </option>
<option value="Jin-Bei">Jin-Bei        </option>
<option value="JMC">JMC            </option>
<option value="Kia">Kia            </option>
<option value="Lamborghini">Lamborghini    </option>
<option value="Lancia">Lancia         </option>
<option value="Land Rover">Land Rover     </option>
<option value="Lexus">Lexus          </option>
<option value="Lincoln">Lincoln        </option>
<option value="Mahindra">Mahindra       </option>
<option value="">Maserati       </option>
<option value="Maserati">Maxus          </option>
<option value="Mazda">Mazda          </option>
<option value="McLaren">McLaren        </option>
<option value="Mercedes-Benz">Mercedes-Benz  </option>
<option value="Mercury">Mercury        </option>
<option value="MG">MG             </option>
<option value="Mini">Mini           </option>
<option value="Mitsubishi">Mitsubishi     </option>
<option value="Nissan">Nissan         </option>
<option value="Peugeot">Peugeot        </option>
<option value="Piaggio">Piaggio        </option>
<option value="Plymouth">Plymouth       </option>
<option value="Porsche">Porsche        </option>
<option value="Ram">Ram            </option>
<option value="Renault">Renault        </option>
<option value="Rolls Royce">Rolls Royce    </option>
<option value="Samsung">Samsung        </option>
<option value="Seat">Seat           </option>
<option value="Shineray">Shineray       </option>
<option value="Skoda">Skoda          </option>
<option value="Smart">Smart          </option>
<option value="SsangYong ">SsangYong      </option>
<option value="Subaru">Subaru         </option>
<option value="Suzuki">Suzuki         </option>
<option value="Tesla">Tesla          </option>
<option value="Toyota">Toyota         </option>
<option value="Victory">Victory        </option>
<option value="Volkswagen">Volkswagen     </option>
<option value="Volvo">Volvo          </option>
                <option value="Otros">Otros</option>
              </select>
            </div>
               
            <div class="col-sm-12 col-md-6 col-lg-6 form-group">
              <input
                type="text"
                class="form-control"
                name="model"
                id="model"
                maxlength="35"
                placeholder="Modelo"
              />
            </div>
          <div  id="otros">
                
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
            <div class="col-md-4"></div>
            <div class="col-md-4">
              <input type="hidden" name="has_car" id="has_car" value="" />
              <button type="button" id="enviar">Enviar</button><br><br><br>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-12" id="Fes"></div>
          </div>
        </form>
      </div>
    </div>
  
    <script src="https://bill.greendepartment.org/js/jquery-mask-plugin-master/src/jquery.mask.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script>
      jQuery(document).ready(function (jQuery) {
        jQuery("input#phone").mask("(000) 000-0000");

        jQuery('#brandA').on('change', function() {
            const brandA = document.getElementById("brandA").value
            if( brandA =='Otros'){
                jQuery("#otros").empty();
                jQuery("#otros").append('<div class="col-sm-12 col-md-12 col-lg-12 form-group"><input type="text"  class="form-control"  name="brandB"     id="brandB"    placeholder="Otras Marcas"   /></div>' );
            }else{
                jQuery("#otros").empty();
            }
        });
            

        jQuery("#slider").slider({
          value: 2016,
          min: 2016,
          max: 2021,
          step: 1,
          slide: function (event, ui) {
            //  var amount = new Intl.NumberFormat("de-DE").format(ui.value);
            jQuery("#year").val(ui.value);
          },
        });
        jQuery("#year").val(jQuery("#slider").slider("value"));

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

        jQuery("#enviar").click(function () {
         jQuery("#year").removeAttr("style");
         jQuery("#email").removeAttr("style");
         jQuery("#name").removeAttr("style");
         jQuery("#phone").removeAttr("style");  
         jQuery("#model").removeAttr("style");  
         jQuery("#brandA").removeAttr("style");  

            
          const name = document.getElementById("name").value;
          const phone = document.getElementById("phone").value;
          const email = document.getElementById("email").value;
          const year = document.getElementById("year").value;
          const model = document.getElementById("model").value;
          const brand = document.getElementById("brandA").value;

          var expr =
            /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

          if (email == "" || name == "" || phone == "") {
            //COMPRUEBA CAMPOS VACIOS
            jQuery("#Fes").empty();
            jQuery("#Fes").append(
              '<br><br><div class="alert alert-danger" role="alert">Hay Campos Vacios Verifique</div>'
            );
          }

          if (email == "") {
            jQuery("#email").css("border-bottom-color", " #f90101");
          }
          if (name == "") {
            jQuery("#name").css("border-bottom-color", " F#f90101");
          }
          if (phone == "") {
           jQuery("#phone").css("border-bottom-color", " #f90101");
          }

          if (model == "") {
            jQuery("#model").css("border-bottom-color", " #f90101");
          }

          if (brand == "") {
            jQuery("#brand").css("border-bottom-color", " #f90101");
          }

          if (!expr.test(email)) {
            jQuery("#Fes").append(
              '<div class="alert alert-danger" role="alert">Email format is incorrect</div>'
            );
            //COMPRUEBA MAIL
            return false;
          }

          fesForm1();
        });
      });
    </script>

    <script>
      function fesForm1() {
        const formData = new FormData();
        // const formData = new URLSearchParams();
        formData.append("name", document.getElementById("name").value);
        formData.append("email", document.getElementById("email").value);
        formData.append("phone", document.getElementById("phone").value);
        formData.append("year", document.getElementById("year").value);
        formData.append("model", document.getElementById("model").value);
        
         brands = document.getElementById("brandA").value ;
            if( brands =='Otros'){
                formData.append("brand",document.getElementById("brandB").value );
            }else{  
                formData.append("brand",document.getElementById("brandA").value );
            }
            
        
        
        formData.append("has_car", document.getElementById("has_car").value);
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
          "https://bluebox.digersogroup.com/api/v1/clients/car",
          requestOptions
        )
          .then((response) => response.text())
          .then((result) => {
            console.log(result);
            document.getElementById("fesForm").reset();
            jQuery("#year").val('2016');
            var miSelect = jQuery('#brandA');
             miSelect.val(miSelect.children('option:first').val());
            jQuery("#Fes").empty();
            jQuery("#Fes").append(
              '<div class="alert alert-success" role="alert">information sent correctly</div>'
            );
              jQuery("#otros").empty();

          })
          .catch((error) => console.log("error", error));
      }
    </script>



<?php  } 
add_shortcode('Car_short_form', 'Car_short_form');
?>