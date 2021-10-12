<?php  function Car_long_form(){ ?>  

    
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
            <div class="col-sm-12 col-md-6 col-lg-6 form-group">
              <input
                type="text"
                class="form-control"
                name="name2"
                id="name2"
                pattern="^[A-Za-z]+$"
                maxlength="20"
                placeholder="Nombre"
              />
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 form-group">
              <input
                type="text"
                class="form-control"
                name="email2"
                id="email2"
                placeholder="Correo"
              />
            </div>

            <div class="col-sm-12 col-md-12 col-lg-12 form-group">
              <input
                type="text"
                class="form-control"
                name="phone2"
                id="phone2"
                placeholder="Telefono"
              />
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <!-- Start slider -->
              <label for="amoun2t">Año</label>
              <input
                type="text"
                id="year2"
                name="year2"
                class="form-control"
                readonly=""
                style="font-weight: bold; color: green; margin-bottom: 15px"
              />

              <div id="slider2"></div>
              <br />
              <br />

              <!-- End slider -->
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 form-group">
              <select name="brand2A" id="brand2A" class="form-control">
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
                name="model2"
                id="model2"
                maxlength="35"
                placeholder="Modelo"
              />
            </div>
            <div  id="otros2"> </div>
            <div class="col-sm-12 col-md-6 col-lg-6 form-group">
              <input
                type="text"
                class="form-control"
                name="owner_name2"
                id="owner_name2"
                maxlength="35"
                placeholder="Nombre del dueño del vehículo"
              />
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 form-group">
              <input
                type="text"
                class="form-control"
                name="chassis_number2"
                id="chassis_number2"
                maxlength="35"
                placeholder="Número de chasis"
              />
            </div>

            <div class="col-sm-12 col-md-12 col-lg-12 form-group">
              <label>Observaciones de la solicitud</label>
              <textarea
                name="observations2"
                id="observations2"
                cols="30"
                rows="5"
                class="form-control"
              >
              </textarea>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 form-group">
                 <input
                type="text"
                class="form-control"
                name="seller_id2"
                id="seller_id2"
                placeholder="BROKER ID"
              />  
              
              
            </div>
          </div>
          <hr />
          <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
              <input type="hidden" name="has_car2" id="has_car2" value="1" />
              <button type="button" id="enviar2">Enviar</button
              ><br /><br /><br />
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-12" id="Fes2"></div>
          </div>
        </form>
      </div>
    </div>
   
    <script src="https://bill.greendepartment.org/js/jquery-mask-plugin-master/src/jquery.mask.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script>
      jQuery(document).ready(function (jQuery) {
        jQuery("input#phone2").mask("(000) 000-0000");


           jQuery('#brand2A').on('change', function() {
            const brand2A = document.getElementById("brand2A").value
            if( brand2A =='Otros'){
                jQuery("#otros2").empty();
                jQuery("#otros2").append('<div class="col-sm-12 col-md-12 col-lg-12 form-group"><input type="text"  class="form-control"  name="brand2B"     id="brand2B"    placeholder="Otras Marcas"   /></div>' );
            }else{
                jQuery("#otros2").empty();
            }
        });



        jQuery("#slider2").slider({
          value: 2016,
          min: 2016,
          max: 2021,
          step: 1,
          slide: function (event, ui) {
            //  var amount = new Intl.NumberFormat("de-DE").format(ui.value);
            jQuery("#year2").val(ui.value);
          },
        });
        jQuery("#year2").val(jQuery("#slider2").slider("value"));

        const selectTwo = document.querySelector("#seller_id");
        const urlTwo ="https://bluebox.digersogroup.com/api/v1/sellers";

        fetch(urlTwo, {
          method: "GET",
        })
          .then((res) => res.json())
          .then((data) => {
            console.log(data.data);
            for (var i = 0; i < data.data.length; i++) {
              console.log(data.data[i].id);
              jQuery("#seller_id2").niceSelect("update");
              jQuery("#seller_id2").append(
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

        jQuery("#enviar2").click(function () {
          jQuery("#year2").removeAttr("style");
          jQuery("#email2").removeAttr("style");
          jQuery("#name2").removeAttr("style");
          jQuery("#phone2").removeAttr("style");
          jQuery("#model2").removeAttr("style");
          jQuery("#brand2").removeAttr("style");
          jQuery("#owner_name2").removeAttr("style");
          jQuery("#chassis_number2").removeAttr("style");

          const name = document.getElementById("name2").value;
          const phone = document.getElementById("phone2").value;
          const email = document.getElementById("email2").value;
          const year = document.getElementById("year2").value;
          const model = document.getElementById("model2").value;
          const brand = document.getElementById("brand2A").value;
          const owner_name = document.getElementById("owner_name2").value;
          const chassis_number =
            document.getElementById("chassis_number2").value;

          var expr =
            /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

          if (email == "" || name == "" || phone == "") {
            //COMPRUEBA CAMPOS VACIOS
            jQuery("#Fes2").empty();
            jQuery("#Fes2").append(
              '<br><br><div class="alert alert-danger" role="alert">Hay Campos Vacios Verifique</div>'
            );
          }

          if (email == "") {
            jQuery("#email2").css("border-bottom-color", " #f90101");
          }
          if (name == "") {
            jQuery("#name2").css("border-bottom-color", " F#f90101");
          }
          if (phone == "") {
            jQuery("#phone2").css("border-bottom-color", " #f90101");
          }

          if (model == "") {
            jQuery("#model2").css("border-bottom-color", " #f90101");
          }

          if (brand == "") {
            jQuery("#brand2A").css("border-bottom-color", " #f90101");
          }
          if (owner_name == "") {
            jQuery("#owner_name2").css("border-bottom-color", " #f90101");
          }
          if (chassis_number == "") {
            jQuery("#chassis_number2").css("border-bottom-color", " #f90101");
          }

          if (!expr.test(email)) {
            jQuery("#Fes2").append(
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
        formData.append("name", document.getElementById("name2").value);
        formData.append("email", document.getElementById("email2").value);
        formData.append("phone", document.getElementById("phone2").value);
        formData.append("year", document.getElementById("year2").value);
        formData.append("model", document.getElementById("model2").value);
        

             brands = document.getElementById("brand2A").value ;
            if( brands =='Otros'){
                formData.append("brand",document.getElementById("brand2B").value );
            }else{  
                formData.append("brand",document.getElementById("brand2A").value );
            }
            
        
        formData.append(
          "owner_name",
          document.getElementById("owner_name2").value
        );
        formData.append(
          "chassis_number",
          document.getElementById("chassis_number2").value
        );
        formData.append(
          "observations",
          document.getElementById("observations2").value
        );
        formData.append("has_car", document.getElementById("has_car2").value);
        formData.append(
          "seller_id",
          document.getElementById("seller_id2").value
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
            jQuery("#year2").val("2016");
            var miSelect = jQuery("#brand2A");
            miSelect.val(miSelect.children("option:first").val());
            jQuery("#Fes2").empty();
            jQuery("#Fes2").append(
              '<div class="alert alert-success" role="alert">information sent correctly</div>'
            );
            jQuery("#otros2").empty();

          })
          .catch((error) => console.log("error", error));
      }
    </script>

<?php  } 
add_shortcode('Car_long_form', 'Car_long_form');
?>