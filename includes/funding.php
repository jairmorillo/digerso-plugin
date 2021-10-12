<?php  function funding_form(){ ?>   
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

      #driverLicensesFiles1 {
        display: inline-block;
        width: 100%;
        padding: 95px 0 0 100%;
        background: url("https://i.imgur.com/VXWKoBD.png") top center no-repeat
          #fff;
        background-size: 55px 55px;
      }
      #cheFile1s {
        display: inline-block;
        width: 100%;
        padding: 95px 0 0 100%;
        background: url("https://i.imgur.com/VXWKoBD.png") top center no-repeat
          #fff;
        background-size: 55px 55px;
      }
      #accountS1tatementFiles {
        display: inline-block;
        width: 100%;
        padding: 95px 0 0 100%;
        background: url("https://i.imgur.com/VXWKoBD.png") top center no-repeat
          #fff;
        background-size: 55px 55px;
      }
    </style>
   <div class="Funding">
      <div class="container" >
        <form enctype="multipart/form-data" action="" method="post" id="formFunding">
          <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6 form-group">
              <input
                type="text"
                class="form-control"
                name="business_name"
                id="business_name"
                placeholder="Nombre comercial"
                required="required"
              />
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 form-group">
              <input
                type="text"
                class="form-control"
                name="dba"
                id="dba"
                placeholder="DBA"
                required="required"
              />
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 form-group">
              <label class="radio-label">Entidad legal </label>
              <div class="radio">
                <input
                  type="radio"
                  class=""
                  value="Corp"
                  name="legal_entity"
                  id="legal_entity"
                  required="required"
                />
                <label class="" for="">Corp</label>
              </div>
              <div class="radio">
                <input
                  type="radio"
                  class=""
                  value="LLC"
                  name="legal_entity"
                  id="legal_entity"
                  required="required"

                />
                <label class="" for="">LLC</label>
              </div>
              <div class="radio">
                <input
                  type="radio"
                  class=""
                  value="Sole Prop"
                  name="legal_entity"
                  id="legal_entity"
                  required="required"

                />
                <label class="" for="">Sole Prop</label>
              </div>
              <div class="radio">
                <input
                  type="radio"
                  class=""
                  value="LP"
                  name="legal_entity"
                  id="legal_entity"
                  required="required"

                />
                <label class="" for="">LP</label>
              </div>
              <div class="radio">
                <input
                  type="radio"
                  class=""
                  value="Other"
                  name="legal_entity"
                  id="legal_entity"
                  required="required"

                />
                <label class="" for="">Other</label>
              </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 form-group">
              <input
                type="text"
                class="form-control"
                name="tax_id_number"
                id="tax_id_number"
                required="required"
                placeholder="Número de identificación tributaria"
              />
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 form-group">
              <label class="radio-label">Clasificación de La Empresa</label>
              <div class="radio">
                <input
                  type="radio"
                  class=""
                  value="Retail"
                  name="bussines_classification"
                  id="bussines_classification"
                />
                <label class="" for="">Retail</label>
              </div>
              <div class="radio">
                <input
                  type="radio"
                  class=""
                  value="Restaurant"
                  name="bussines_classification"
                  id="bussines_classification"
                />
                <label class="" for="">Restaurant</label>
              </div>
              <div class="radio">
                <input
                  type="radio"
                  class=""
                  value="Services"
                  name="bussines_classification"
                  id="bussines_classification"
                />
                <label class="" for="">Services</label>
              </div>
              <div class="radio">
                <input
                  type="radio"
                  class=""
                  value=" Manufacturer/Wholesaler"
                  name="bussines_classification"
                  id="bussines_classification"
                />
                <label class="" for=""> Manufacturer/Wholesaler </label>
              </div>
              <div class="radio">
                <input
                  type="radio"
                  class=""
                  value="Internet"
                  name="bussines_classification"
                  id="bussines_classification"
                />
                <label class="" for="">Internet</label>
              </div>
              <div class="radio">
                <input
                  type="radio"
                  class=""
                  value=" Mail Order/Telephones Order "
                  name="bussines_classification"
                  id="bussines_classification"
                />
                <label class="" for=""> Mail Order/Telephones Order </label>
              </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 form-group">
              <input
                type="text"
                class="form-control"
                name="physical_address"
                placeholder="Dirección física "
                id="physical_address"
                required="required"

              />
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 form-group">
              <input
                type="text"
                class="form-control"
                name="business_phone"
                placeholder="Teléfono"
                id="business_phone"
                required="required"

              />
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 form-group">
              <input
                type="text"
                class="form-control"
                name="product_sold"
                placeholder="Productos vendidos"
id="product_sold"
              />
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 form-group">
              <input
                type="text"
                class="form-control"
                name="business_fax"
                placeholder="Teléfono fax"
                id="business_fax"

              />
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 form-group">
              <input
                type="number"
                class="form-control"
                name="length_ownership"
                placeholder="Duración en la propiedad"
                id="length_ownership"

              />
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 form-group">
              <input
                type="number"
                class="form-control"
                name="years"
                placeholder="Años"
                id ="years"
              />
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 form-group">
              <input
                type="number"
                class="form-control"
                name="months"
                id ="months"
                placeholder="Meses"
              />
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 form-group">
              <input
                type="text"
                class="form-control"
                name="email"
                id="email"
                placeholder="Email"
                required="required"

              />
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 form-group">
              <input
                type="text"
                class="form-control"
                name="monthly_credit"
                placeholder="Volumen de crédito mensual"
                id="monthly_credit"
              />
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 form-group">
              <input
                type="text"
                class="form-control"
                name="monthly_deposit"
                id="monthly_deposit"
                placeholder="Depósito mensual"
              />
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 form-group">
              <input
                type="text"
                class="form-control"
                name="annual_volume"
                id="annual_volume"
                placeholder="Volumen anual"
              />
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 form-group">
              <input
                type="text"
                class="form-control"
                name="rent_mortage_payment"
                id="rent_mortage_payment"
                placeholder="Pago de alquiler/Hipoteca"
              />
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 form-group">
              <input
                type="text"
                class="form-control"
                name="time_living"
                id="time_living"
                placeholder="¿Cuánto tiempo llevas viviendo allí?"
              />
            </div>
          </div>
          <hr />
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <h4>Propietario 1/ Información principal</h4>
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 form-group">
              <input
                type="text"
                class="form-control"
                name="name"
                id="name"
                placeholder="Nombre"
              />
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 form-group">
              <input
                type="text"
                class="form-control"
                name="birthdate_owne_one"
                id="birthdate_owne_one"
                placeholder="Fecha de Cumpleaños"
              />
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 form-group">
              <input
                type="text"
                class="form-control"
                name="home_phone_owner_one"
                id="home_phone_owner_one"
                placeholder="Teléfono de Casa"
              />
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 form-group">
              <input
                type="text"
                class="form-control"
                name="phone"
                id="phone"
                placeholder="Teléfono"
              />
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 form-group">
              <input
                type="text"
                class="form-control"
                name="home_address_owner_one"
                id="home_address_owner_one"
                placeholder="Dirección de casa"
              />
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 form-group">
              <input
                type="text"
                class="form-control"
                name="title_owner_one"
                id="title_owner_one"
                placeholder="Título"
              />
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 form-group">
              <input
                type="number"
                class="form-control"
                name="percent_ownership_owner_one"
                id="percent_ownership_owner_one"
                placeholder="% de propiedad "
              />
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 form-group">
              <input
                type="number"
                class="form-control"
                name="driver_licens_owner_one"
                id="driver_licens_owner_one"
                placeholder="Licencia de conducir"
              />
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 form-group">
              
              <select name="country_owner_one_id" id="country_owner_one_id"    class="form-control">
                  <option value="" class="" selected>Country</option>               
                  <option value="1" class="" >United States</option>
                  <option value="61" class="" >Dominican Republic</option>

              </select>
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 form-group">
              
              <select name="estate_owner_one_id" id="estate_owner_one_id" class="form-control" >
                <option value="" class="" selected>State</option>             
  
            </select>



            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 form-group">
              <input
                type="text"
                class="form-control"
                name="social_segurity_owner_one"
                id="social_segurity_owner_one"
                placeholder="Número de seguridad social"
              />
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 form-group">
              <input
                type="text"
                class="form-control"
                name="personal_income_owner_one"
                id="personal_income_owner_one"
                placeholder="Ingreso anual personal"
              />
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 form-group"></div>
          </div>
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <h4>Propietario 2/ Información principal</h4>
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 form-group">
              <input
                type="text"
                class="form-control"
                name="name_owner_two"
                id="name_owner_two"
                placeholder="Nombre"
              />
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 form-group">
              <input
                type="text"
                class="form-control"
                name="birthdate_owne_two"
                id="birthdate_owne_two"
                placeholder="Fecha de Cumpleaños"
              />
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 form-group">
              <input
                type="text"
                class="form-control"
                name="home_phone_owner_two"
                id="home_phone_owner_two"
                placeholder="Teléfono de Casa"
              />
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 form-group">
              <input
                type="text"
                class="form-control"
                name="cell_phone_owner_two"
                id="cell_phone_owner_two"
                placeholder="Teléfono"
              />
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 form-group">
              <input
                type="text"
                class="form-control"
                name="home_address_owner_two"
                id="home_address_owner_two"
                placeholder="Dirección de casa"
              />
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 form-group">
              <input
                type="text"
                class="form-control"
                name="title_owner_two"
                id="title_owner_two"
                placeholder="Título"
              />
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 form-group">
              <input
                type="number"
                class="form-control"
                name="percent_ownership_owner_two"
                id="percent_ownership_owner_two"
                placeholder="% de propiedad "
              />
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 form-group">
              <input
                type="number"
                class="form-control"
                name="driver_licens_owner_two"
                id="driver_licens_owner_two"
                placeholder="Licencia de conducir"
              />
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 form-group">
           

              
 
              <select name="country_owner_two_id" id="country_owner_two_id"   class="form-control">
                <option value="" class="" selected>Country</option>               
                  <option value="1" class="" >United States</option>
                  <option value="61" class="" >Dominican Republic</option>
          
  
                </select>



            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 form-group">
             
              <select name="estate_owner_two_id" id="estate_owner_two_id"   class="form-control">
                <option value="" class="" selected>State</option>               
  
               </select>

            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 form-group">
              <input
                type="text"
                class="form-control"
                name="social_segurity_owner_two"
                id="social_segurity_owner_two"
                placeholder="Número de seguridad social"
              />
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 form-group">
              <input
                type="text"
                class="form-control"
                name="personal_income_owner_two"
                id="personal_income_owner_two"
                placeholder="Ingreso anual personal"
              />
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 form-group"></div>
          </div>
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <h4>Información de financiación</h4>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 form-group">
              <input
                type="text"
                class="form-control"
                name="desired_advance_amount"
                id="desired_advance_amount"
                placeholder="Monto anticipado deseado"
              />
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 form-group">
              <input
                type="text"
                class="form-control"
                name="purpose_use_funds"
                id="purpose_use_funds"
                placeholder="Propósito del anticipo / Uso de fondos"
              />
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 form-group">
              <label class="radio-label">¿Anticipo en efectivo actual?</label>
              <div class="radio">
                <input
                  type="radio"
                  class=""
                  value="true"
                  name="current_cash_advance"
                  id="current_cash_advance"
                />
                <label class="" for="">SI</label>
              </div>
              <div class="radio">
                <input
                  type="radio"
                  class=""
                  value="false"
                  name="current_cash_advance"
                  id="current_cash_advance"
                />
                <label class="" for=""> NO </label>
              </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 form-group">
              <input
                type="text"
                class="form-control"
                name="company_name"
                id="company_name"
                placeholder="Nombre de la Compañía "
              />
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 form-group">
              <input
                type="text"
                class="form-control"
                name="balance"
                id="balance"
                placeholder="Balance"
              />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <h4>Documentos</h4>
            </div>
            <div class="col-md-12 col-lg-10 col-12">
              <div class="form-group files">
                <label class="my-auto">Últimos 6 estados de cuenta </label>
                <input
                  id="accountStatementFiles"
                  name="accountStatementFiles"
                  type="file"
                  class="form-control"
                  multiple
                />
              </div>
            </div>
            <div class="col-md-12 col-lg-10 col-12">
              <div class="form-group files">
                <label class="my-auto">Copia de un cheque </label>
                <input
                  id="checkFiles"
                  name="checkFiles"
                  type="file"
                  class="form-control"
                  multiple
                />
              </div>
            </div>
            <div class="col-md-12 col-lg-10 col-12">
              <div class="form-group files">
                <label class="my-auto"
                  >Licencia de conducir (una copia por cada firma)
                </label>
                <input
                  id="driverLicensesFiles"
                  name="driverLicensesFiles"
                  type="file"
                  class="form-control"
                  multiple
                />
              </div>
            </div>
              <div class="col-sm-12 col-md-12 col-lg-12 form-group">
    
                <input
                type="text"
                class="form-control"
                name="seller_id"
                id="seller_id"
                placeholder="Corredor ID"
              />  
            </div>
            
          </div>
          <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <input  type="hidden" name="dni" id="dni" value="000000000"/>
              <button type="button" id="enviar" >Enviar Datos</button>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-12" id="Funding"></div>

          </div>
        </form>
      </div>
    </div>


   

 <script src="https://bill.greendepartment.us/js/jquery-mask-plugin-master/src/jquery.mask.js"></script>
 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script> 
     



	jQuery(document).ready(function($){
  

	    
		$('input#monthly_credit').mask('000,000,000,000,000.00', {reverse: true});
		$('input#monthly_deposit').mask('000,000,000,000,000.00', {reverse: true});
    $('input#annual_volume').mask('000,000,000,000,000.00', {reverse: true});
    $('input#rent_mortage_payment').mask('000,000,000,000,000.00', {reverse: true});
    
    $('input#personal_income_owner_one').mask('000,000,000,000,000.00', {reverse: true});
	  $('input#desired_advance_amount').mask('000,000,000,000,000.00', {reverse: true});
	  $('input#balance').mask('000,000,000,000,000.00', {reverse: true});
	  $('input#personal_income_owner_two').mask('000,000,000,000,000.00', {reverse: true});
	  $( "#birthdate_owne_one" ).datepicker({
              altFormat: "mm-dd-yy",
              dateFormat: "mm-dd-yy"
            });
            
         $( "#birthdate_owne_two" ).datepicker({
              altFormat: "mm-dd-yy",
              dateFormat: "mm-dd-yy"
            });   
            
          $('input#business_phone').mask('(000) 000-0000');
          $('input#home_phone_owner_one').mask('(000) 000-0000');
          $('input#phone').mask('(000) 000-0000');
          $('input#home_phone_owner_two').mask('(000) 000-0000');
          $('input#cell_phone_owner_two').mask('(000) 000-0000');
          $('input#business_fax').mask('(000) 000-0000');

  const selectTwo = document.querySelector("#seller_id");
      const urlTwo = "https://bluebox.digersogroup.com/api/v1/sellers";

      fetch(urlTwo, {
        method: "GET",
      }).then((res) => res.json()).then((data) => {
            console.log(data.data);
           for (var i = 0; i < data.data.length; i++) {
          //   console.log(data.data[i].id);
                 jQuery('#seller_id').niceSelect('update');
                 jQuery("#seller_id").append('<option value="'+data.data[i].id+'">'+ data.data[i].name +'</option>');
               
               
            }        
              jQuery('#seller_id').niceSelect('update');

        })
        .catch(function (error) {
          console.error("¡Error!", error);
        });


      
   /*              
      

    const select = document.querySelector("#country_owner_one_id");
    const url = 'https://staging.digersogroup.com/api/v1/countries/all';

            fetch(url, {
                method: 'GET',
              })
              .then(res => res.json())
              .then(data => {
                 for (let pais of data.data) {
                    if( pais.id === 1 || pais.id === 61){
                        let nuevaOpcion = document.createElement("option");
                      nuevaOpcion.value = pais.id;
                      nuevaOpcion.text = pais.name;
                       jQuery('#country_owner_one_id').niceSelect('update');
                      select.add(nuevaOpcion);
                    }else{
                    
                    }
                  
                }
              })
              .catch(function(error) {
                console.error("¡Error!", error);
              })





        const selectTwo = document.querySelector("#country_owner_two_id");
        const urlTwo = 'https://staging.digersogroup.com/api/v1/countries/all';

          fetch(urlTwo, {
              method: 'GET',
            })
            .then(res => res.json())
            .then(data => {
             for (let paistwo of data.data) {
                let nuevaOpcion = document.createElement("option");
                nuevaOpcion.value = paistwo.id;
                nuevaOpcion.text = paistwo.name;
            jQuery('#country_owner_two_id').niceSelect('update');
                selectTwo.add(nuevaOpcion);
              }
            })
            .catch(function(error) {
              console.error("¡Error!", error);
            })

              function getComboA(selectObject,selectinput) {
                var id = selectObject.value;  
                var select = selectinput;
                 countryState(id,selectinput);
              }

     */
     
    $('select#country_owner_one_id').on('change',function(){
            var id = $(this).val();
               countryState(id,1)
          });




    $('select#country_owner_two_id').on('change',function(){
        var id = $(this).val();
           countryState(id,2)
      });



     function countryState(id,selectinput){      
       
            //  console.log(selectinput);

                  const urlState = 'https://bluebox.digersogroup.com/api/v1/estates/'+id;
                    fetch(urlState, {
                        method: 'GET',
                      })
                      .then(res => res.json())
                      .then(data => {
                        // console.log("Las categorías son:", lista_de_categorias);
                        // alert('HAY ' + lista_de_categorias.length) Puedes poner este alert para ver si la llamada POST te devuelve algo

                        for (let estado of data.data) {
                          let nuevaOpcion = document.createElement("option");
                          nuevaOpcion.value = estado.id;
                          nuevaOpcion.text = estado.name;
                          
                        if(selectinput == 1 ){
                            var  selectStatetemp = document.querySelector("#estate_owner_one_id");
                            selectStatetemp.add(nuevaOpcion);
                            jQuery('#estate_owner_one_id').niceSelect('update');

                          }else{
                            var  selectStatetemp = document.querySelector("#estate_owner_two_id");
                            selectStatetemp.add(nuevaOpcion);
                            jQuery('#estate_owner_two_id').niceSelect('update');

                          }


                          // select.appendChild(nuevaOpcion); <-- Así tambien funciona
                        }
                      })
                      .catch(function(error) {
                        console.error("¡Error!", error);
                      })

     }

                

          $("#enviar").click(function(){

         jQuery("#business_name").removeAttr("style");
         jQuery("#dba").removeAttr("style");
         jQuery("#legal_entity").removeAttr("style");
         jQuery("#tax_id_number").removeAttr("style");
         jQuery("#bussines_classification").removeAttr("style");
         jQuery("#physical_address").removeAttr("style");
         jQuery("#business_phone").removeAttr("style");
         jQuery("#email").removeAttr("style");
         jQuery("#name").removeAttr("style");
         jQuery("#phone").removeAttr("style");
         jQuery("#home_address_owner_one").removeAttr("style");
         jQuery("#home_phone_owner_one").removeAttr("style");
         jQuery("#country_owner_one_id").removeAttr("style");
         jQuery("#estate_owner_one_id").removeAttr("style");
         jQuery("#name_owner_two").removeAttr("style");
         jQuery("#home_phone_owner_two").removeAttr("style");
         jQuery("#country_owner_two_id").removeAttr("style");
         jQuery("#estate_owner_two_id").removeAttr("style");

         
            const bussiness_name = document.getElementById("business_name").value;
          const dba = document.getElementById("dba").value;
          const legal_entity = document.getElementById("legal_entity").value;
          const tax_id_number = document.getElementById("tax_id_number").value;
          const bussines_classification = document.getElementById("bussines_classification").value;
          const physical_address = document.getElementById("physical_address").value;
          const business_phone = document.getElementById("business_phone").value;
          const email = document.getElementById("email").value;
          const name = document.getElementById("name").value;
          const phone = document.getElementById("phone").value;
          const home_address_owner_one = document.getElementById("home_address_owner_one").value;
          const home_phone_owner_one = document.getElementById("home_phone_owner_one").value;
          const country_owner_one_id = document.getElementById("country_owner_one_id").value;
          const estate_owner_one_id = document.getElementById("estate_owner_one_id").value;
          const name_owner_two = document.getElementById("name_owner_two").value;
          const home_phone_owner_two = document.getElementById("home_phone_owner_two").value;
          const country_owner_two_id = document.getElementById("country_owner_two_id").value;
          const estate_owner_two_id = document.getElementById("estate_owner_two_id").value;



          var expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;    
   

          if ( (email == "")  || (name == "") || (phone == "")  ||(country_owner_one_id == "") ||(estate_owner_one_id == "") ) {  //COMPRUEBA CAMPOS VACIOS
            jQuery("#Funding").empty();
                            
                            
         
            if  (email == "")   {
              $("#email").css("border-bottom-color"," #f90101");    
                                

            }
            if  (name == "")  {
              $("#name").css("border-bottom-color"," #f90101");
                                

            } 
            if  (phone == "")  {
              $("#phone").css("border-bottom-color"," #f90101");

            }
         
           
            if ($('#country_owner_one_id').val().trim() === '') {
                  $("#country_owner_one_id").css("border-bottom-color"," #f90101");

             }         

            if ($('#estate_owner_one_id').val().trim() === '') {
                  $("#estate_owner_one_id").css("border-bottom-color"," #f90101");
              }

             $('#Funding').append('<br><br><div class="alert alert-danger" role="alert">Hay Campos Vacios Verifique</div>');

            return false;
                              

            }
          if ( !expr.test(email) ){                
                 jQuery("#Funding").empty();

                $('#Funding').append('<div class="alert alert-danger" role="alert">Formato de correo incorrecto</div>');
                              //COMPRUEBA MAIL
                  return false;
              }



              fundingForm();
});


  

            
	});



</script>
 
    <script>



       function fundingForm() {
        
        //Validaciones



         //Array de Datos
         //var formData = new URLSearchParams();
          var formData = new FormData();

        formData.append("dni", document.getElementById("dni").value);
        formData.append("business_name", document.getElementById("business_name").value);
        formData.append("dba", document.getElementById("dba").value);
        formData.append("legal_entity", document.getElementById("legal_entity").value);
        formData.append("tax_id_number", document.getElementById("tax_id_number").value);
        formData.append(
          "bussines_classification",
          document.getElementById("bussines_classification").value
        );
        formData.append("physical_address", document.getElementById("physical_address").value);
        formData.append("business_phone", document.getElementById("business_phone").value);
        formData.append("product_sold", document.getElementById("product_sold").value);
        formData.append("business_fax", document.getElementById("business_fax").value);
        formData.append("length_ownership", document.getElementById("length_ownership").value);
        formData.append("years", document.getElementById("years").value);
        formData.append("months", document.getElementById("months").value);
        formData.append("email", document.getElementById("email").value);
        formData.append("monthly_credit", document.getElementById("monthly_credit").value);
        formData.append("monthly_deposit", document.getElementById("monthly_deposit").value);
        formData.append("annual_volume", document.getElementById("annual_volume").value);
        formData.append(
          "rent_mortage_payment",
          document.getElementById("rent_mortage_payment").value
        );
        formData.append("time_living", document.getElementById("time_living").value);
        // owner one
        formData.append("name", document.getElementById("name").value);
        formData.append(
          "birthdate_owne_one",
          document.getElementById("birthdate_owne_one").value
        );
        formData.append(
          "home_phone_owner_one",
          document.getElementById("home_phone_owner_one").value
        );
        formData.append("phone", document.getElementById("phone").value);
        formData.append(
          "home_address_owner_one",
          document.getElementById("home_address_owner_one").value
        );
        formData.append("title_owner_one", document.getElementById("title_owner_one").value);
        formData.append(
          "percent_ownership_owner_one",
          document.getElementById("percent_ownership_owner_one").value
        );
        formData.append(
          "driver_licens_owner_one",
          document.getElementById("driver_licens_owner_one").value
        );
        formData.append(
          "country_owner_one_id",
          document.getElementById("country_owner_one_id").value
        );
        formData.append(
          "estate_owner_one_id",
          document.getElementById("estate_owner_one_id").value
        );
        formData.append(
          "social_segurity_owner_one",
          document.getElementById("social_segurity_owner_one").value
        );
        formData.append(
          "personal_income_owner_one",
          document.getElementById("personal_income_owner_one").value
        );
        formData.append("name_owner_two", document.getElementById("name_owner_two").value);
        formData.append(
          "birthdate_owne_two",
          document.getElementById("birthdate_owne_two").value
        );
        formData.append(
          "home_phone_owner_two",
          document.getElementById("home_phone_owner_two").value
        );
        formData.append(
          "cell_phone_owner_two",
          document.getElementById("cell_phone_owner_two").value
        );
        formData.append(
          "home_address_owner_two",
          document.getElementById("home_address_owner_two").value
        );
        formData.append("title_owner_two", document.getElementById("title_owner_two").value);
        formData.append(
          "percent_ownership_owner_two",
          document.getElementById("percent_ownership_owner_two").value
        );
        formData.append(
          "driver_licens_owner_two",
          document.getElementById("driver_licens_owner_two").value
        );
        formData.append(
          "country_owner_two_id",
          document.getElementById("country_owner_two_id").value
        );
        formData.append(
          "estate_owner_two_id",
          document.getElementById("estate_owner_two_id").value
        );
        formData.append(
          "social_segurity_owner_two",
          document.getElementById("social_segurity_owner_two").value
        );
        formData.append(
          "personal_income_owner_two",
          document.getElementById("personal_income_owner_two").value
        );
        formData.append(
          "desired_advance_amount",
          document.getElementById("desired_advance_amount").value
        );
        formData.append(
          "purpose_use_funds",
          document.getElementById("purpose_use_funds").value
        );
        formData.append(
          "current_cash_advance",
          document.getElementById("current_cash_advance").value
        );
        formData.append("company_name", document.getElementById("company_name").value);
        formData.append(
          "seller_id",
          document.getElementById("seller_id").value
        );
 /*
     var num = document.getElementById('accountStatementFiles').files.length;

            for (var i = 0; i < num; i++) {
                formData.append("accountStatementFiles[]", document.getElementById('accountStatementFiles').files[i]);
            }
                  
      
        var num = document.getElementById('checkFiles').files.length;

            for (var i = 0; i < num; i++) {
                formData.append("checkFiles[]", document.getElementById('checkFiles').files[i]);
            }
                 
      
      
        var num = document.getElementById('driverLicensesFiles').files.length;

            for (var i = 0; i < num; i++) {
                formData.append("driverLicensesFiles[]", document.getElementById('driverLicensesFiles').files[i]);
            }
                 
      */
      

      // var fileInput = document.querySelector('#accountStatementFiles');
      // formData.append("accountStatementFiles[]", fileInput.files[0]);

/*
            var ins = document.getElementById('accountStatementFiles').files.length;
                for (var x = 0; x < ins; x++) {
                    formData.append("accountStatementFiles[]", document.getElementById('accountStatementFiles').files[x]);
                }

*/
      /*      formData.append("accountStatementFiles[]", fileInput.files[1]);
            formData.append("accountStatementFiles[]", fileInput.files[2]);
            formData.append("accountStatementFiles[]", fileInput.files[3]);
            formData.append("accountStatementFiles[]", fileInput.files[4]);
            formData.append("accountStatementFiles[]", fileInput.files[5]);
            formData.append("accountStatementFiles[]", fileInput.files[6]); */
            
            
            /** Roldan Vargas - Instrucciones para agregar archivos al body */
            const fileInput = document.querySelector('#accountStatementFiles');
            for (var x = 0; x < fileInput.files.length; x++) {
                formData.append("accountStatementFiles[]", document.getElementById('accountStatementFiles').files[x]);
            }
            
              const fileInput1 = document.querySelector('#checkFiles');
            for (var x = 0; x < fileInput1.files.length; x++) {
                formData.append("checkFiles[]", document.getElementById('checkFiles').files[x]);
            }
            
            
              const fileInput2 = document.querySelector('#driverLicensesFiles');
            for (var x = 0; x < fileInput2.files.length; x++) {
                formData.append("driverLicensesFiles[]", document.getElementById('driverLicensesFiles').files[x]);
            }
        




            var myHeaders = new Headers();
            myHeaders.append("Authorization", "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIzIiwianRpIjoiMjI5NmNmZWEwMDI0Nzg4ZTY4MmI1ODEzMTRkMzkyYWUxMmZlMWJjYTQ3YjA2ZmJkMmFiOTM4ZDBmNDg0NWVhNTNkMDI1OWNjNGE5OTQ4YzEiLCJpYXQiOjE2MjYxNDY3NTcuMTk0NDc3MDgxMjk4ODI4MTI1LCJuYmYiOjE2MjYxNDY3NTcuMTk0NDc5OTQyMzIxNzc3MzQzNzUsImV4cCI6MTY1NzY4Mjc1Ny4xODk2NTI5MTk3NjkyODcxMDkzNzUsInN1YiI6IiIsInNjb3BlcyI6W119.TCQ9C_0qg0f2tqZ4DeLm2VmSSU3ZQpENUD84lGANg5We0gjHiGOVuBj59K2IQfpEedu7-yNHtqVzul-vm70KHvgGJ45kmwUVs0RWktYuVn8GEZJzDHRGLVmhvPYQ_loNF0qqwJPAGGt1shX4vUo5NJRekUFwhKal0MTdJC6z7lvUdHXkjqa64nAVe4CKrTiPxRZaBYJbzfVXP9N39TKeAcfnVsaRAu7QhL7g8LqNpXcJ1xuf_Jzuz8bxWB8YYHBjq_wT_gPvGAKpB-iAy4zKJLwPstVfpAMOn_NpzyYQ_Pr1wi3VGEKjFhxIoBf9xGuzC2Vxf73gBcTMwN73z_i_mirPXz96kZ-dcDywbtwAjbhz34PQtuvKSauuuLYSOBQ1DP3X-2Q2UOZ0g3jGpUeg4uYTQOdgOFM_bABXtYJErjQX11athwGsxGoludeN9Rx2LADoiIQm7GMk-d3IKn19Y9niG7YGAcwzQt8jprVT3MhCu8TDdqueu4ylEOWrp6h9X1Mfth8-aTJzwA0XQvQMwmamUiL9w9PJB5O8vHOTCM8EFjFJSTd-Oknu8WtUMi3nA93JAi3xqdo5EaSFLehp8hKrqsnPpnBgPAzrqzPP2zixxn4WmGT9RDK_5rTfmoJWoNbjqmQzK2MfWTVkbeMMhY-1IkgMY7HsPS3RWUygoGU");
          //  myHeaders.append("Content-Type", "application/x-www-form-formData"); //Eliminar (para el envío de archivos esto no se debe habilitar)
            //myHeaders.append("Content-Type", "multipart/form-data"); //Eliminar (para el envío de archivos esto no se debe habilitar)


            var requestOptions = {
              method: 'POST',
              headers: myHeaders,
              body: formData,
              redirect: 'follow'
            };

         fetch("https://bluebox.digersogroup.com/api/v1/clients/funding", requestOptions)
          .then(response => response.text())
          .then(result =>{
                 // console.log(result);
                  document.getElementById('formFunding').reset();
                  jQuery("#Funding").empty();
                  jQuery("#formFunding").append('<div class="alert alert-success" role="alert">information sent correctly</div>' );
                  
              } 
          
          )
          .catch(error => console.log('error', error)); 
          
      }
   
   
    </script>
   
   
    </script>


<?php  } 

add_shortcode('funding_form', 'funding_form');


function funding_form_en(){ ?>   
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

      #driverLicensesFiles1 {
        display: inline-block;
        width: 100%;
        padding: 95px 0 0 100%;
        background: url("https://i.imgur.com/VXWKoBD.png") top center no-repeat
          #fff;
        background-size: 55px 55px;
      }
      #cheFile1s {
        display: inline-block;
        width: 100%;
        padding: 95px 0 0 100%;
        background: url("https://i.imgur.com/VXWKoBD.png") top center no-repeat
          #fff;
        background-size: 55px 55px;
      }
      #accountS1tatementFiles {
        display: inline-block;
        width: 100%;
        padding: 95px 0 0 100%;
        background: url("https://i.imgur.com/VXWKoBD.png") top center no-repeat
          #fff;
        background-size: 55px 55px;
      }
    </style>
   <div class="Funding">
      <div class="container" >
        <form enctype="multipart/form-data" action="" method="post" id="formFunding">
          <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6 form-group">
              <input
                type="text"
                class="form-control"
                name="business_name"
                id="business_name"
                placeholder="Tradename"
                required="required"
              />
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 form-group">
              <input
                type="text"
                class="form-control"
                name="dba"
                id="dba"
                placeholder="DBA"
                required="required"
              />
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 form-group">
              <label class="radio-label">Legal entity </label>
              <div class="radio">
                <input
                  type="radio"
                  class=""
                  value="Corp"
                  name="legal_entity"
                  id="legal_entity"
                  required="required"
                />
                <label class="" for="">Corp</label>
              </div>
              <div class="radio">
                <input
                  type="radio"
                  class=""
                  value="LLC"
                  name="legal_entity"
                  id="legal_entity"
                  required="required"

                />
                <label class="" for="">LLC</label>
              </div>
              <div class="radio">
                <input
                  type="radio"
                  class=""
                  value="Sole Prop"
                  name="legal_entity"
                  id="legal_entity"
                  required="required"

                />
                <label class="" for="">Sole Prop</label>
              </div>
              <div class="radio">
                <input
                  type="radio"
                  class=""
                  value="LP"
                  name="legal_entity"
                  id="legal_entity"
                  required="required"

                />
                <label class="" for="">LP</label>
              </div>
              <div class="radio">
                <input
                  type="radio"
                  class=""
                  value="Other"
                  name="legal_entity"
                  id="legal_entity"
                  required="required"

                />
                <label class="" for="">Other</label>
              </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 form-group">
              <input
                type="text"
                class="form-control"
                name="tax_id_number"
                id="tax_id_number"
                required="required"
                placeholder="Tax identification number"
              />
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 form-group">
              <label class="radio-label">Company Classification</label>
              <div class="radio">
                <input
                  type="radio"
                  class=""
                  value="Retail"
                  name="bussines_classification"
                  id="bussines_classification"
                />
                <label class="" for="">Retail</label>
              </div>
              <div class="radio">
                <input
                  type="radio"
                  class=""
                  value="Restaurant"
                  name="bussines_classification"
                  id="bussines_classification"
                />
                <label class="" for="">Restaurant</label>
              </div>
              <div class="radio">
                <input
                  type="radio"
                  class=""
                  value="Services"
                  name="bussines_classification"
                  id="bussines_classification"
                />
                <label class="" for="">Services</label>
              </div>
              <div class="radio">
                <input
                  type="radio"
                  class=""
                  value=" Manufacturer/Wholesaler"
                  name="bussines_classification"
                  id="bussines_classification"
                />
                <label class="" for=""> Manufacturer/Wholesaler </label>
              </div>
              <div class="radio">
                <input
                  type="radio"
                  class=""
                  value="Internet"
                  name="bussines_classification"
                  id="bussines_classification"
                />
                <label class="" for="">Internet</label>
              </div>
              <div class="radio">
                <input
                  type="radio"
                  class=""
                  value=" Mail Order/Telephones Order "
                  name="bussines_classification"
                  id="bussines_classification"
                />
                <label class="" for=""> Mail Order/Telephones Order </label>
              </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 form-group">
              <input
                type="text"
                class="form-control"
                name="physical_address"
                placeholder="Physical address "
                id="physical_address"
                required="required"

              />
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 form-group">
              <input
                type="text"
                class="form-control"
                name="business_phone"
                placeholder="Phone"
                id="business_phone"
                required="required"

              />
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 form-group">
              <input
                type="text"
                class="form-control"
                name="product_sold"
                placeholder="Sold products"
id="product_sold"
              />
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 form-group">
              <input
                type="text"
                class="form-control"
                name="business_fax"
                placeholder="Telephone fax"
                id="business_fax"

              />
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 form-group">
              <input
                type="number"
                class="form-control"
                name="length_ownership"
                placeholder="Duration in ownership"
                id="length_ownership"

              />
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 form-group">
              <input
                type="number"
                class="form-control"
                name="years"
                placeholder="Years"
                id ="years"
              />
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 form-group">
              <input
                type="number"
                class="form-control"
                name="months"
                id ="months"
                placeholder="Months"
              />
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 form-group">
              <input
                type="text"
                class="form-control"
                name="email"
                id="email"
                placeholder="Email"
                required="required"

              />
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 form-group">
              <input
                type="text"
                class="form-control"
                name="monthly_credit"
                placeholder="Monthly credit volume"
                id="monthly_credit"
              />
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 form-group">
              <input
                type="text"
                class="form-control"
                name="monthly_deposit"
                id="monthly_deposit"
                placeholder="Monthly deposit"
              />
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 form-group">
              <input
                type="text"
                class="form-control"
                name="annual_volume"
                id="annual_volume"
                placeholder="Annual volume"
              />
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 form-group">
              <input
                type="text"
                class="form-control"
                name="rent_mortage_payment"
                id="rent_mortage_payment"
                placeholder="Rent / Mortgage Payment"
              />
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 form-group">
              <input
                type="text"
                class="form-control"
                name="time_living"
                id="time_living"
                placeholder="How long have you lived there?"
              />
            </div>
          </div>
          <hr />
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <h4>Owner 1 / Main information</h4>
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 form-group">
              <input
                type="text"
                class="form-control"
                name="name"
                id="name"
                placeholder="Name"
              />
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 form-group">
              <input
                type="text"
                class="form-control"
                name="birthdate_owne_one"
                id="birthdate_owne_one"
                placeholder="Birthday date"
              />
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 form-group">
              <input
                type="text"
                class="form-control"
                name="home_phone_owner_one"
                id="home_phone_owner_one"
                placeholder="Home phone"
              />
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 form-group">
              <input
                type="text"
                class="form-control"
                name="phone"
                id="phone"
                placeholder="Cell phone"
              />
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 form-group">
              <input
                type="text"
                class="form-control"
                name="home_address_owner_one"
                id="home_address_owner_one"
                placeholder="Home address"
              />
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 form-group">
              <input
                type="text"
                class="form-control"
                name="title_owner_one"
                id="title_owner_one"
                placeholder="Qualification"
              />
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 form-group">
              <input
                type="number"
                class="form-control"
                name="percent_ownership_owner_one"
                id="percent_ownership_owner_one"
                placeholder="% of ownership "
              />
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 form-group">
              <input
                type="number"
                class="form-control"
                name="driver_licens_owner_one"
                id="driver_licens_owner_one"
                placeholder="Driver's license"
              />
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 form-group">
              
              <select name="country_owner_one_id" id="country_owner_one_id"    class="form-control">
                  <option value="" class="" selected>Country</option>               
                  <option value="1" class="" >United States</option>
                  <option value="61" class="" >Dominican Republic</option>

              </select>
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 form-group">
              
              <select name="estate_owner_one_id" id="estate_owner_one_id" class="form-control" >
                <option value="" class="" selected>State</option>             
  
            </select>



            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 form-group">
              <input
                type="text"
                class="form-control"
                name="social_segurity_owner_one"
                id="social_segurity_owner_one"
                placeholder="Social Security number"
              />
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 form-group">
              <input
                type="text"
                class="form-control"
                name="personal_income_owner_one"
                id="personal_income_owner_one"
                placeholder="Personal annual income"
              />
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 form-group"></div>
          </div>
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <h4>Owner 2 / Main information</h4>
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 form-group">
              <input
                type="text"
                class="form-control"
                name="name_owner_two"
                id="name_owner_two"
                placeholder="Name"
              />
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 form-group">
              <input
                type="text"
                class="form-control"
                name="birthdate_owne_two"
                id="birthdate_owne_two"
                placeholder="Birthday date"
              />
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 form-group">
              <input
                type="text"
                class="form-control"
                name="home_phone_owner_two"
                id="home_phone_owner_two"
                placeholder="Home phone"
              />
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 form-group">
              <input
                type="text"
                class="form-control"
                name="cell_phone_owner_two"
                id="cell_phone_owner_two"
                placeholder="Cell phone"
              />
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 form-group">
              <input
                type="text"
                class="form-control"
                name="home_address_owner_two"
                id="home_address_owner_two"
                placeholder="Home address"
              />
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 form-group">
              <input
                type="text"
                class="form-control"
                name="title_owner_two"
                id="title_owner_two"
                placeholder="Qualification"
              />
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 form-group">
              <input
                type="number"
                class="form-control"
                name="percent_ownership_owner_two"
                id="percent_ownership_owner_two"
                placeholder="% of ownership "
              />
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 form-group">
              <input
                type="number"
                class="form-control"
                name="driver_licens_owner_two"
                id="driver_licens_owner_two"
                placeholder="Driver's license"
              />
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 form-group">
           

              
 
              <select name="country_owner_two_id" id="country_owner_two_id"   class="form-control">
                <option value="" class="" selected>Country</option>               
                  <option value="1" class="" >United States</option>
                  <option value="61" class="" >Dominican Republic</option>
          
  
                </select>



            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 form-group">
             
              <select name="estate_owner_two_id" id="estate_owner_two_id"   class="form-control">
                <option value="" class="" selected>State</option>               
  
               </select>

            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 form-group">
              <input
                type="text"
                class="form-control"
                name="social_segurity_owner_two"
                id="social_segurity_owner_two"
                placeholder="Social Security number"
              />
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 form-group">
              <input
                type="text"
                class="form-control"
                name="personal_income_owner_two"
                id="personal_income_owner_two"
                placeholder="Personal annual income"
              />
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 form-group"></div>
          </div>
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <h4>Financing information</h4>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 form-group">
              <input
                type="text"
                class="form-control"
                name="desired_advance_amount"
                id="desired_advance_amount"
                placeholder="Desired advance amount"
              />
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 form-group">
              <input
                type="text"
                class="form-control"
                name="purpose_use_funds"
                id="purpose_use_funds"
                placeholder="Purpose of advance / Use of funds"
              />
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 form-group">
              <label class="radio-label">Current cash advance?</label>
              <div class="radio">
                <input
                  type="radio"
                  class=""
                  value="true"
                  name="current_cash_advance"
                  id="current_cash_advance"
                />
                <label class="" for="">SI</label>
              </div>
              <div class="radio">
                <input
                  type="radio"
                  class=""
                  value="false"
                  name="current_cash_advance"
                  id="current_cash_advance"
                />
                <label class="" for=""> NO </label>
              </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 form-group">
              <input
                type="text"
                class="form-control"
                name="company_name"
                id="company_name"
                placeholder="Name of the company "
              />
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 form-group">
              <input
                type="text"
                class="form-control"
                name="balance"
                id="balance"
                placeholder="Balance"
              />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <h4>Documents</h4>
            </div>
            <div class="col-md-12 col-lg-10 col-12">
              <div class="form-group files">
                <label class="my-auto">Last 6 account statements </label>
                <input
                  id="accountStatementFiles"
                  name="accountStatementFiles"
                  type="file"
                  class="form-control"
                  multiple
                />
              </div>
            </div>
            <div class="col-md-12 col-lg-10 col-12">
              <div class="form-group files">
                <label class="my-auto">Copy of a check </label>
                <input
                  id="checkFiles"
                  name="checkFiles"
                  type="file"
                  class="form-control"
                  multiple
                />
              </div>
            </div>
            <div class="col-md-12 col-lg-10 col-12">
              <div class="form-group files">
                <label class="my-auto"
                  >Driver's license (one copy for each signature)
                </label>
                <input
                  id="driverLicensesFiles"
                  name="driverLicensesFiles"
                  type="file"
                  class="form-control"
                  multiple
                />
              </div>
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
          <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <input  type="hidden" name="dni" id="dni" value="000000000"/>
              <button type="button" id="enviar" >Send data</button>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-12" id="Funding"></div>

          </div>
        </form>
      </div>
    </div>


   

 <script src="https://bill.greendepartment.us/js/jquery-mask-plugin-master/src/jquery.mask.js"></script>
 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script> 
     



	jQuery(document).ready(function($){
  

	    
		$('input#monthly_credit').mask('000,000,000,000,000.00', {reverse: true});
		$('input#monthly_deposit').mask('000,000,000,000,000.00', {reverse: true});
    $('input#annual_volume').mask('000,000,000,000,000.00', {reverse: true});
    $('input#rent_mortage_payment').mask('000,000,000,000,000.00', {reverse: true});
    
    $('input#personal_income_owner_one').mask('000,000,000,000,000.00', {reverse: true});
	  $('input#desired_advance_amount').mask('000,000,000,000,000.00', {reverse: true});
	  $('input#balance').mask('000,000,000,000,000.00', {reverse: true});
	  $('input#personal_income_owner_two').mask('000,000,000,000,000.00', {reverse: true});
	  $( "#birthdate_owne_one" ).datepicker({
              altFormat: "mm-dd-yy",
              dateFormat: "mm-dd-yy"
            });
            
         $( "#birthdate_owne_two" ).datepicker({
              altFormat: "mm-dd-yy",
              dateFormat: "mm-dd-yy"
            });   
            
          $('input#business_phone').mask('(000) 000-0000');
          $('input#home_phone_owner_one').mask('(000) 000-0000');
          $('input#phone').mask('(000) 000-0000');
          $('input#home_phone_owner_two').mask('(000) 000-0000');
          $('input#cell_phone_owner_two').mask('(000) 000-0000');
          $('input#business_fax').mask('(000) 000-0000');

  const selectTwo = document.querySelector("#seller_id");
      const urlTwo = "https://bluebox.digersogroup.com/api/v1/sellers";

      fetch(urlTwo, {
        method: "GET",
      }).then((res) => res.json()).then((data) => {
            console.log(data.data);
           for (var i = 0; i < data.data.length; i++) {
          //   console.log(data.data[i].id);
                 jQuery('#seller_id').niceSelect('update');
                 jQuery("#seller_id").append('<option value="'+data.data[i].id+'">'+ data.data[i].name +'</option>');
               
               
            }        
              jQuery('#seller_id').niceSelect('update');

        })
        .catch(function (error) {
          console.error("¡Error!", error);
        });


      
   /*              
      

    const select = document.querySelector("#country_owner_one_id");
    const url = 'https://staging.digersogroup.com/api/v1/countries/all';

            fetch(url, {
                method: 'GET',
              })
              .then(res => res.json())
              .then(data => {
                 for (let pais of data.data) {
                    if( pais.id === 1 || pais.id === 61){
                        let nuevaOpcion = document.createElement("option");
                      nuevaOpcion.value = pais.id;
                      nuevaOpcion.text = pais.name;
                       jQuery('#country_owner_one_id').niceSelect('update');
                      select.add(nuevaOpcion);
                    }else{
                    
                    }
                  
                }
              })
              .catch(function(error) {
                console.error("¡Error!", error);
              })





        const selectTwo = document.querySelector("#country_owner_two_id");
        const urlTwo = 'https://staging.digersogroup.com/api/v1/countries/all';

          fetch(urlTwo, {
              method: 'GET',
            })
            .then(res => res.json())
            .then(data => {
             for (let paistwo of data.data) {
                let nuevaOpcion = document.createElement("option");
                nuevaOpcion.value = paistwo.id;
                nuevaOpcion.text = paistwo.name;
            jQuery('#country_owner_two_id').niceSelect('update');
                selectTwo.add(nuevaOpcion);
              }
            })
            .catch(function(error) {
              console.error("¡Error!", error);
            })

              function getComboA(selectObject,selectinput) {
                var id = selectObject.value;  
                var select = selectinput;
                 countryState(id,selectinput);
              }

     */
     
    $('select#country_owner_one_id').on('change',function(){
            var id = $(this).val();
               countryState(id,1)
          });




    $('select#country_owner_two_id').on('change',function(){
        var id = $(this).val();
           countryState(id,2)
      });



     function countryState(id,selectinput){      
       
            //  console.log(selectinput);

                  const urlState = 'https://bluebox.digersogroup.com/api/v1/estates/'+id;
                    fetch(urlState, {
                        method: 'GET',
                      })
                      .then(res => res.json())
                      .then(data => {
                        // console.log("Las categorías son:", lista_de_categorias);
                        // alert('HAY ' + lista_de_categorias.length) Puedes poner este alert para ver si la llamada POST te devuelve algo

                        for (let estado of data.data) {
                          let nuevaOpcion = document.createElement("option");
                          nuevaOpcion.value = estado.id;
                          nuevaOpcion.text = estado.name;
                          
                        if(selectinput == 1 ){
                            var  selectStatetemp = document.querySelector("#estate_owner_one_id");
                            selectStatetemp.add(nuevaOpcion);
                            jQuery('#estate_owner_one_id').niceSelect('update');

                          }else{
                            var  selectStatetemp = document.querySelector("#estate_owner_two_id");
                            selectStatetemp.add(nuevaOpcion);
                            jQuery('#estate_owner_two_id').niceSelect('update');

                          }


                          // select.appendChild(nuevaOpcion); <-- Así tambien funciona
                        }
                      })
                      .catch(function(error) {
                        console.error("¡Error!", error);
                      })

     }

                

          $("#enviar").click(function(){

         jQuery("#business_name").removeAttr("style");
         jQuery("#dba").removeAttr("style");
         jQuery("#legal_entity").removeAttr("style");
         jQuery("#tax_id_number").removeAttr("style");
         jQuery("#bussines_classification").removeAttr("style");
         jQuery("#physical_address").removeAttr("style");
         jQuery("#business_phone").removeAttr("style");
         jQuery("#email").removeAttr("style");
         jQuery("#name").removeAttr("style");
         jQuery("#phone").removeAttr("style");
         jQuery("#home_address_owner_one").removeAttr("style");
         jQuery("#home_phone_owner_one").removeAttr("style");
         jQuery("#country_owner_one_id").removeAttr("style");
         jQuery("#estate_owner_one_id").removeAttr("style");
         jQuery("#name_owner_two").removeAttr("style");
         jQuery("#home_phone_owner_two").removeAttr("style");
         jQuery("#country_owner_two_id").removeAttr("style");
         jQuery("#estate_owner_two_id").removeAttr("style");

         
            const bussiness_name = document.getElementById("business_name").value;
          const dba = document.getElementById("dba").value;
          const legal_entity = document.getElementById("legal_entity").value;
          const tax_id_number = document.getElementById("tax_id_number").value;
          const bussines_classification = document.getElementById("bussines_classification").value;
          const physical_address = document.getElementById("physical_address").value;
          const business_phone = document.getElementById("business_phone").value;
          const email = document.getElementById("email").value;
          const name = document.getElementById("name").value;
          const phone = document.getElementById("phone").value;
          const home_address_owner_one = document.getElementById("home_address_owner_one").value;
          const home_phone_owner_one = document.getElementById("home_phone_owner_one").value;
          const country_owner_one_id = document.getElementById("country_owner_one_id").value;
          const estate_owner_one_id = document.getElementById("estate_owner_one_id").value;
          const name_owner_two = document.getElementById("name_owner_two").value;
          const home_phone_owner_two = document.getElementById("home_phone_owner_two").value;
          const country_owner_two_id = document.getElementById("country_owner_two_id").value;
          const estate_owner_two_id = document.getElementById("estate_owner_two_id").value;



          var expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;    
   

          if ( (email == "")  || (name == "") || (phone == "")  ||(country_owner_one_id == "") ||(estate_owner_one_id == "") ) {  //COMPRUEBA CAMPOS VACIOS
            jQuery("#Funding").empty();
                            
                            
         
            if  (email == "")   {
              $("#email").css("border-bottom-color"," #f90101");    
                                

            }
            if  (name == "")  {
              $("#name").css("border-bottom-color"," #f90101");
                                

            } 
            if  (phone == "")  {
              $("#phone").css("border-bottom-color"," #f90101");

            }
         
           
            if ($('#country_owner_one_id').val().trim() === '') {
                  $("#country_owner_one_id").css("border-bottom-color"," #f90101");

             }         

            if ($('#estate_owner_one_id').val().trim() === '') {
                  $("#estate_owner_one_id").css("border-bottom-color"," #f90101");
              }

             $('#Funding').append('<br><br><div class="alert alert-danger" role="alert">There are empty fields please verify</div>');

            return false;
                              

            }
          if ( !expr.test(email) ){                
                 jQuery("#Funding").empty();

                $('#Funding').append('<div class="alert alert-danger" role="alert">Wrong email format</div>');
                              //COMPRUEBA MAIL
                  return false;
              }



              fundingForm();
});


  

            
	});



</script>
 
    <script>



       function fundingForm() {
        
        //Validaciones



         //Array de Datos
         //var formData = new URLSearchParams();
          var formData = new FormData();

        formData.append("dni", document.getElementById("dni").value);
        formData.append("business_name", document.getElementById("business_name").value);
        formData.append("dba", document.getElementById("dba").value);
        formData.append("legal_entity", document.getElementById("legal_entity").value);
        formData.append("tax_id_number", document.getElementById("tax_id_number").value);
        formData.append(
          "bussines_classification",
          document.getElementById("bussines_classification").value
        );
        formData.append("physical_address", document.getElementById("physical_address").value);
        formData.append("business_phone", document.getElementById("business_phone").value);
        formData.append("product_sold", document.getElementById("product_sold").value);
        formData.append("business_fax", document.getElementById("business_fax").value);
        formData.append("length_ownership", document.getElementById("length_ownership").value);
        formData.append("years", document.getElementById("years").value);
        formData.append("months", document.getElementById("months").value);
        formData.append("email", document.getElementById("email").value);
        formData.append("monthly_credit", document.getElementById("monthly_credit").value);
        formData.append("monthly_deposit", document.getElementById("monthly_deposit").value);
        formData.append("annual_volume", document.getElementById("annual_volume").value);
        formData.append(
          "rent_mortage_payment",
          document.getElementById("rent_mortage_payment").value
        );
        formData.append("time_living", document.getElementById("time_living").value);
        // owner one
        formData.append("name", document.getElementById("name").value);
        formData.append(
          "birthdate_owne_one",
          document.getElementById("birthdate_owne_one").value
        );
        formData.append(
          "home_phone_owner_one",
          document.getElementById("home_phone_owner_one").value
        );
        formData.append("phone", document.getElementById("phone").value);
        formData.append(
          "home_address_owner_one",
          document.getElementById("home_address_owner_one").value
        );
        formData.append("title_owner_one", document.getElementById("title_owner_one").value);
        formData.append(
          "percent_ownership_owner_one",
          document.getElementById("percent_ownership_owner_one").value
        );
        formData.append(
          "driver_licens_owner_one",
          document.getElementById("driver_licens_owner_one").value
        );
        formData.append(
          "country_owner_one_id",
          document.getElementById("country_owner_one_id").value
        );
        formData.append(
          "estate_owner_one_id",
          document.getElementById("estate_owner_one_id").value
        );
        formData.append(
          "social_segurity_owner_one",
          document.getElementById("social_segurity_owner_one").value
        );
        formData.append(
          "personal_income_owner_one",
          document.getElementById("personal_income_owner_one").value
        );
        formData.append("name_owner_two", document.getElementById("name_owner_two").value);
        formData.append(
          "birthdate_owne_two",
          document.getElementById("birthdate_owne_two").value
        );
        formData.append(
          "home_phone_owner_two",
          document.getElementById("home_phone_owner_two").value
        );
        formData.append(
          "cell_phone_owner_two",
          document.getElementById("cell_phone_owner_two").value
        );
        formData.append(
          "home_address_owner_two",
          document.getElementById("home_address_owner_two").value
        );
        formData.append("title_owner_two", document.getElementById("title_owner_two").value);
        formData.append(
          "percent_ownership_owner_two",
          document.getElementById("percent_ownership_owner_two").value
        );
        formData.append(
          "driver_licens_owner_two",
          document.getElementById("driver_licens_owner_two").value
        );
        formData.append(
          "country_owner_two_id",
          document.getElementById("country_owner_two_id").value
        );
        formData.append(
          "estate_owner_two_id",
          document.getElementById("estate_owner_two_id").value
        );
        formData.append(
          "social_segurity_owner_two",
          document.getElementById("social_segurity_owner_two").value
        );
        formData.append(
          "personal_income_owner_two",
          document.getElementById("personal_income_owner_two").value
        );
        formData.append(
          "desired_advance_amount",
          document.getElementById("desired_advance_amount").value
        );
        formData.append(
          "purpose_use_funds",
          document.getElementById("purpose_use_funds").value
        );
        formData.append(
          "current_cash_advance",
          document.getElementById("current_cash_advance").value
        );
        formData.append("company_name", document.getElementById("company_name").value);
        formData.append(
          "seller_id",
          document.getElementById("seller_id").value
        );
 /*
     var num = document.getElementById('accountStatementFiles').files.length;

            for (var i = 0; i < num; i++) {
                formData.append("accountStatementFiles[]", document.getElementById('accountStatementFiles').files[i]);
            }
                  
      
        var num = document.getElementById('checkFiles').files.length;

            for (var i = 0; i < num; i++) {
                formData.append("checkFiles[]", document.getElementById('checkFiles').files[i]);
            }
                 
      
      
        var num = document.getElementById('driverLicensesFiles').files.length;

            for (var i = 0; i < num; i++) {
                formData.append("driverLicensesFiles[]", document.getElementById('driverLicensesFiles').files[i]);
            }
                 
      */
      

      // var fileInput = document.querySelector('#accountStatementFiles');
      // formData.append("accountStatementFiles[]", fileInput.files[0]);

/*
            var ins = document.getElementById('accountStatementFiles').files.length;
                for (var x = 0; x < ins; x++) {
                    formData.append("accountStatementFiles[]", document.getElementById('accountStatementFiles').files[x]);
                }

*/
      /*      formData.append("accountStatementFiles[]", fileInput.files[1]);
            formData.append("accountStatementFiles[]", fileInput.files[2]);
            formData.append("accountStatementFiles[]", fileInput.files[3]);
            formData.append("accountStatementFiles[]", fileInput.files[4]);
            formData.append("accountStatementFiles[]", fileInput.files[5]);
            formData.append("accountStatementFiles[]", fileInput.files[6]); */
            
            
            /** Roldan Vargas - Instrucciones para agregar archivos al body */
            const fileInput = document.querySelector('#accountStatementFiles');
            for (var x = 0; x < fileInput.files.length; x++) {
                formData.append("accountStatementFiles[]", document.getElementById('accountStatementFiles').files[x]);
            }
            
              const fileInput1 = document.querySelector('#checkFiles');
            for (var x = 0; x < fileInput1.files.length; x++) {
                formData.append("checkFiles[]", document.getElementById('checkFiles').files[x]);
            }
            
            
              const fileInput2 = document.querySelector('#driverLicensesFiles');
            for (var x = 0; x < fileInput2.files.length; x++) {
                formData.append("driverLicensesFiles[]", document.getElementById('driverLicensesFiles').files[x]);
            }
        




            var myHeaders = new Headers();
            myHeaders.append("Authorization", "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIzIiwianRpIjoiMjI5NmNmZWEwMDI0Nzg4ZTY4MmI1ODEzMTRkMzkyYWUxMmZlMWJjYTQ3YjA2ZmJkMmFiOTM4ZDBmNDg0NWVhNTNkMDI1OWNjNGE5OTQ4YzEiLCJpYXQiOjE2MjYxNDY3NTcuMTk0NDc3MDgxMjk4ODI4MTI1LCJuYmYiOjE2MjYxNDY3NTcuMTk0NDc5OTQyMzIxNzc3MzQzNzUsImV4cCI6MTY1NzY4Mjc1Ny4xODk2NTI5MTk3NjkyODcxMDkzNzUsInN1YiI6IiIsInNjb3BlcyI6W119.TCQ9C_0qg0f2tqZ4DeLm2VmSSU3ZQpENUD84lGANg5We0gjHiGOVuBj59K2IQfpEedu7-yNHtqVzul-vm70KHvgGJ45kmwUVs0RWktYuVn8GEZJzDHRGLVmhvPYQ_loNF0qqwJPAGGt1shX4vUo5NJRekUFwhKal0MTdJC6z7lvUdHXkjqa64nAVe4CKrTiPxRZaBYJbzfVXP9N39TKeAcfnVsaRAu7QhL7g8LqNpXcJ1xuf_Jzuz8bxWB8YYHBjq_wT_gPvGAKpB-iAy4zKJLwPstVfpAMOn_NpzyYQ_Pr1wi3VGEKjFhxIoBf9xGuzC2Vxf73gBcTMwN73z_i_mirPXz96kZ-dcDywbtwAjbhz34PQtuvKSauuuLYSOBQ1DP3X-2Q2UOZ0g3jGpUeg4uYTQOdgOFM_bABXtYJErjQX11athwGsxGoludeN9Rx2LADoiIQm7GMk-d3IKn19Y9niG7YGAcwzQt8jprVT3MhCu8TDdqueu4ylEOWrp6h9X1Mfth8-aTJzwA0XQvQMwmamUiL9w9PJB5O8vHOTCM8EFjFJSTd-Oknu8WtUMi3nA93JAi3xqdo5EaSFLehp8hKrqsnPpnBgPAzrqzPP2zixxn4WmGT9RDK_5rTfmoJWoNbjqmQzK2MfWTVkbeMMhY-1IkgMY7HsPS3RWUygoGU");
          //  myHeaders.append("Content-Type", "application/x-www-form-formData"); //Eliminar (para el envío de archivos esto no se debe habilitar)
            //myHeaders.append("Content-Type", "multipart/form-data"); //Eliminar (para el envío de archivos esto no se debe habilitar)


            var requestOptions = {
              method: 'POST',
              headers: myHeaders,
              body: formData,
              redirect: 'follow'
            };

         fetch("https://bluebox.digersogroup.com/api/v1/clients/funding", requestOptions)
          .then(response => response.text())
          .then(result =>{
                 // console.log(result);
                  document.getElementById('formFunding').reset();
                  jQuery("#Funding").empty();
                  jQuery("#formFunding").append('<div class="alert alert-success" role="alert">information sent correctly</div>' );
                  
              } 
          
          )
          .catch(error => console.log('error', error)); 
          
      }
   
   
    </script>
   
   
    </script>


<?php  } 

add_shortcode('funding_form_en', 'funding_form_en');

?>


