<form id="formModForm" onsubmit="return false;"  >

<div class="row">


<input type="hidden" name="variable1" value="<?php echo $id_f29?>" />

    <div class="col-6">
        <select class="form-control" id="emp" name="emp" onchange="">
          <option value="" selected disabled>Seleccione Empresa</option>
                     <?php 
                      $re = $fun->cargar_empresas(3);   
                      foreach($re as $row)      
                          {
                            ?>
                            
                             <option value="<?php echo $row['id_emp'] ?>"><?php echo $row['razon_social_emp']?></option>
                                
                            <?php
                          }    
                      ?>  
      </select>
    </div>
    <div class="col-6 form-control">
        <input type="date" id="fecha" name="fecha" >
    </div>
<br><br>
<div class="btn-group btn-group-toggle col-12 " data-toggle="buttons">
  <label class="col-4 btn btn-secondary active " id ="ivapagado" onclick="calcimpto();seleccion(this.id)">
    <input  type="radio" value="1" name="ivas" id="rbivapagado" autocomplete="off"> IVA Pagado &nbsp;<i class="fa fa-check-square" aria-hidden="true"></i>
  </label>

  <label class="col-4 btn btn-secondary " id ="ivaposter" onclick="calcimptoPoster();seleccion(this.id)">
    <input  type="radio" value="2" name="ivas" id="rbivaposter" autocomplete="off"> IVA Postergado &nbsp;<i class="fa fa-clock-o" aria-hidden="true"></i>
  </label>

  <label class="col-4 btn btn-secondary " id ="ivanopagado" onclick="calcimpto();seleccion(this.id)">
    <input type="radio"  value="3" name="ivas" id="rbivanopagado" autocomplete="off" > IVA No Pagado &nbsp;<i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
  </label>

</div>
<br>
    <!-- Linea 0 -->
    <div class="col-6 f29span ">
        <br>
        <span class="input-group-text f29 f29bold" id="basic-addon4" >IMPUESTO AL VALOR AGREGADO D.L. 825/74</span>
      
    </div>

    <div class="col-3 f29span">
    <br>                  
        <span class="input-group-text f29" id="basic-addon4" >Cantidad de documentos</span>

    </div>


    <div class="col-3 f29span">
    <br>
        <span class="input-group-text f29" id="basic-addon4" >Monto Neto</span>

    </div>
    <!-- END Linea 0 -->

    <!-- Linea 1 -->
    <div class="col-6 f29span f29">

        <span class="input-group-text f29" id="basic-addon4" >1 - Exportaciones </span>
            
    </div>
    <div class="col-3 f29span f29">

        <div class="input-group mb-3 col-12 f29span">
            <div class="input-group-prepend">
                <span class="input-group-text f29 f29span f29num" id="basic-addon4">585</span>
            </div>
            <input type="number" value="0" class="form-control f29 f29inp" id="C585" name="C585"  aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)"  onkeyup="calcularHojauno()" onclick="modcont(this.id)">
        </div>

    </div>


    <div class="col-3 f29span f29">
        <div class="input-group mb-3 col-12 f29span f29">
            <div class="input-group-prepend">
                <span class="input-group-text f29 f29span f29num" id="basic-addon4">20</span>
            </div>
            <input type="text" value="0" class="form-control f29 f29inp" id="C20" name="C20" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onkeyup="format(this)" onclick="modcont(this.id)">
        </div>
    </div>


<!--
    <div class="col-3 f29span f29">
        <div class="input-group mb-3 col-12 f29span f29">
            <div class="input-group-prepend">
                <span class="input-group-text f29 f29span f29num" id="basic-addon4">20</span>
            </div>
            <input type="number" value="0" class="form-control f29 f29inp" id="C20" name="C20" aria-describedby="basic-addon4" onkeyup="calcularHojauno()" >
        </div>
    </div>
                        -->

    <!-- END Linea 1 -->
  
    <!-- Linea 2 -->
    <div class="col-6 f29span f29">

        <span class="input-group-text f29" id="basic-addon4" >2 - Ventas y/o Servicios prestados Exentos, o No Gravados del giro </span>
            
    </div>

    <div class="col-3 f29span f29">

        <div class="input-group mb-3 col-12 f29span">
            <div class="input-group-prepend">
                <span class="input-group-text f29 f29span f29num" id="basic-addon4">586 </span>
            </div>
            <input type="number" value="0" class="form-control f29 f29inp" id="C586"  name="C586" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onkeyup="calcularHojauno()" onclick="modcont(this.id)" >
        </div>

    </div>

    
    <div class="col-3 f29span f29">
        
        <div class="input-group mb-3 col-12 f29span">
            <div class="input-group-prepend">
                <span class="input-group-text f29 f29span f29num" id="basic-addon4">142</span>
            </div>
            <input type="text" value="0" class="form-control f29 f29inp" id="C142"  name="C142" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onkeyup="format(this)" onclick="modcont(this.id)">
        </div>

    </div>
    <!-- END Linea 2 -->

    <!-- Linea 3 -->
        <div class="col-6 f29span f29">

<span class="input-group-text f29" id="basic-addon4" >3 - Ventas con retención sobre el margen de comercialización (contribuyentes retenidos) </span>
    
</div>

<div class="col-3 f29span f29">

<div class="input-group mb-3 col-12 f29span">
    <div class="input-group-prepend">
        <span class="input-group-text f29 f29span f29num" id="basic-addon4">731 </span>
    </div>
    <input type="number" value="0" class="form-control f29 f29inp" id="C731" name="C731" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onkeyup="calcularHojauno()" onclick="modcont(this.id)" >
</div>

</div>


<div class="col-3 f29span f29">

<div class="input-group mb-3 col-12 f29span">
    <div class="input-group-prepend">
        <span class="input-group-text f29 f29span f29num" id="basic-addon4">732</span>
    </div>
    <input type="text" value="0" class="form-control f29 f29inp" id="C732" name="C732" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onkeyup="format(this)" onclick="modcont(this.id)">
</div>

</div>
<!-- END Linea 3 -->
    <!-- Linea 4 -->
    <div class="col-6 f29span f29">

        <span class="input-group-text f29" id="basic-addon4" >4 - Ventas y/o Servicios prestados exentos o No Gravados que no son del giro </span>
            
    </div>

    <div class="col-3 f29span f29">

        <div class="input-group mb-3 col-12 f29span">
            <div class="input-group-prepend">
                <span class="input-group-text f29 f29span f29num" id="basic-addon4">714 </span>
            </div>
            <input type="number" value="0" class="form-control f29 f29inp" id="C714" name="C714" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onkeyup="calcularHojauno()" onclick="modcont(this.id)">
        </div>

    </div>

    
    <div class="col-3 f29span f29">
        
        <div class="input-group mb-3 col-12 f29span">
            <div class="input-group-prepend">
                <span class="input-group-text f29 f29span f29num" id="basic-addon4">715</span>
            </div>
            <input type="text" value="0" class="form-control f29 f29inp" id="C715"  name="C715" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onkeyup="format(this)" onclick="modcont(this.id)">
        </div>

    </div>
    <!-- END Linea 4 -->

    <!-- Linea 5 -->
    <div class="col-6 f29span f29">

    <span class="input-group-text f29" id="basic-addon4" >5 - Facturas de Compra recibidas con retención total (contribuyentes retenidos) y Factura de Inicio emitida</span>
        
    </div>

    <div class="col-3 f29span f29">

    <div class="input-group mb-3 col-12 f29span">
        <div class="input-group-prepend">
            <span class="input-group-text f29 f29span f29num text-center" id="basic-addon4">515 </span>
        </div>
        <input type="number" value="0" class="form-control f29 f29inp" id="C515" name="C515"  aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onkeyup="calcularHojauno()" onclick="modcont(this.id)" >
    </div>

    </div>


    <div class="col-3 f29span f29">

    <div class="input-group mb-3 col-12 f29span">
        <div class="input-group-prepend">
            <span class="input-group-text f29 f29span f29num" id="basic-addon4">587</span>
        </div>
        <input type="text" value="0" class="form-control f29 f29inp" id="C587" name="C587"  aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onkeyup="format(this)" onclick="modcont(this.id)">
    </div>

    </div>
    <!-- END Linea 5 -->
    <!-- Linea 6 -->
    <div class="col-9 f29span f29">

    <span class="input-group-text f29" id="basic-addon4" >6 - Facturas de compras recibidas con retención parcial (Total neto)</span>
        
    </div>

    <div class="col-3 f29span f29">

    <div class="input-group mb-3 col-12 f29span">
        <div class="input-group-prepend">
            <span class="input-group-text f29 f29span f29num text-center" id="basic-addon4">720 </span>
        </div>
        <input type="text" value="0" class="form-control f29 f29inp" id="C720" name="C720" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onkeyup="format(this)" onclick="modcont(this.id)">
    </div>

    </div>

<!-- END Linea 6 -->
<!-- Linea # -->
<div class="col-6 f29span">

<span class="input-group-text f29" id="basic-addon4" ></span>

</div>
<div class="col-3 f29span">

    <span class="input-group-text f29" id="basic-addon4" >Cantidad de documentos</span>

</div>


<div class="col-3 f29span">

    <span class="input-group-text f29 f29bold" id="basic-addon4" >Débitos</span>

</div>
<!-- END Linea # -->
<!-- Linea 7 -->
<div class="col-6 f29span f29">

<span class="input-group-text f29" id="basic-addon4" >7 - Facturas emitidas por ventas y servicios del giro </span>
    
</div>

<div class="col-3 f29span f29">

<div class="input-group mb-3 col-12 f29span">
    <div class="input-group-prepend">
        <span class="input-group-text f29 f29span f29num" id="basic-addon4">503</span>
    </div>
    <input type="number" value="0" class="form-control f29 f29inp" id="C503" name="C503" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)"  onclick="modcont(this.id)" >
</div>

</div>


<div class="col-3 f29span f29">

<div class="input-group mb-3 col-12 f29span f29">
    <div class="input-group-prepend">
        <span class="input-group-text f29 f29span f29num" id="basic-addon4">502</span>
    </div>
    <input type="text" value="0" class="form-control f29 f29inp" id="C502" name="C502" aria-describedby="basic-addon4"  OnBlur="green(this.id,this.value)" onkeyup="format(this)" onchange="calcDebitos()" onclick="modcont(this.id)">
    <div class="input-group-append">
        <span class="input-group-text f29 f29num" id="basic-addon2 ">+</span>
    </div>
</div>

</div>
<!-- END Linea 7 -->
<!-- Linea 8 -->
<div class="col-6 f29span f29">

<span class="input-group-text f29" id="basic-addon4" >8 - Facturas emitidas por la venta de bienes inmuebles afectas a IVA </span>
    
</div>

<div class="col-3 f29span f29">

<div class="input-group mb-3 col-12 f29span">
    <div class="input-group-prepend">
        <span class="input-group-text f29 f29span f29num" id="basic-addon4">763</span>
    </div>
    <input type="number" value="0" class="form-control f29 f29inp" id="C763" name="C763" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onclick="modcont(this.id)" >
</div>

</div>


<div class="col-3 f29span f29">

<div class="input-group mb-3 col-12 f29span f29">
    <div class="input-group-prepend">
        <span class="input-group-text f29 f29span f29num" id="basic-addon4">764</span>
    </div>
    <input type="text" value="0" class="form-control f29 f29inp" id="C764"  name="C764" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onkeyup="format(this)" onchange="calcDebitos()" onclick="modcont(this.id)" >
    <div class="input-group-append">
        <span class="input-group-text f29 f29num" id="basic-addon2 ">+</span>
    </div>
</div>

</div>
<!-- END Linea 8 -->
<!-- Linea 9 -->
<div class="col-6 f29span f29">

<span class="input-group-text f29" id="basic-addon4" >9 - Facturas y Notas de Débitos por ventas y servicios que no son del giro (activo ﬁjo y otros) </span>
    
</div>

<div class="col-3 f29span f29">

<div class="input-group mb-3 col-12 f29span">
    <div class="input-group-prepend">
        <span class="input-group-text f29 f29span f29num" id="basic-addon4">716</span>
    </div>
    <input type="number" value="0" class="form-control f29 f29inp" id="C716" name="C716" aria-describedby="basic-addon4"  OnBlur="green(this.id,this.value)" onclick="modcont(this.id)">
</div>

</div>


<div class="col-3 f29span f29">

<div class="input-group mb-3 col-12 f29span f29">
    <div class="input-group-prepend">
        <span class="input-group-text f29 f29span f29num" id="basic-addon4">717</span>
    </div>
    <input type="text" value="0" class="form-control f29 f29inp" id="C717" name="C717" aria-describedby="basic-addon4"  OnBlur="green(this.id,this.value)" onkeyup="format(this)" onchange="calcDebitos()" onclick="modcont(this.id)">
    <div class="input-group-append">
        <span class="input-group-text f29 f29num" id="basic-addon2 ">+</span>
    </div>
</div>

</div>
<!-- END Linea 9 -->
<!-- Linea 10 -->
<div class="col-6 f29span f29">

<span class="input-group-text f29" id="basic-addon4" >10 - Boletas</span>
    
</div>

<div class="col-3 f29span f29">

<div class="input-group mb-3 col-12 f29span">
    <div class="input-group-prepend">
        <span class="input-group-text f29 f29span f29num" id="basic-addon4">110</span>
    </div>
    <input type="number" value="0" class="form-control f29 f29inp" id="C110" name="C110" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)"  onclick="modcont(this.id)" >
</div>

</div>


<div class="col-3 f29span f29">

<div class="input-group mb-3 col-12 f29span f29">
    <div class="input-group-prepend">
        <span class="input-group-text f29 f29span f29num" id="basic-addon4">111</span>
    </div>
    <input type="text" value="0" class="form-control f29 f29inp" id="C111" name="C111"  aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onkeyup="format(this)" onchange="calcDebitos()" onclick="modcont(this.id)">
    <div class="input-group-append">
        <span class="input-group-text f29 f29num" id="basic-addon2 ">+</span>
    </div>
</div>

</div>
<!-- END Linea 10 -->
<!-- Linea 11 -->
<div class="col-6 f29span f29">

<span class="input-group-text f29" id="basic-addon4" >11 - Comprobantes o Recibos de Pago generados en transacciones pagadas a través de medios electrónicos</span>
    
</div>

<div class="col-3 f29span f29">

<div class="input-group mb-3 col-12 f29span">
    <div class="input-group-prepend">
        <span class="input-group-text f29 f29span f29num" id="basic-addon4">758</span>
    </div>
    <input type="number" value="0" class="form-control f29 f29inp" id="C758" name="C758" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onclick="modcont(this.id)" >
</div>

</div>


<div class="col-3 f29span f29">

<div class="input-group mb-3 col-12 f29span f29">
    <div class="input-group-prepend">
        <span class="input-group-text f29 f29span f29num" id="basic-addon4">759</span>
    </div>
    <input type="text" value="0" class="form-control f29 f29inp" id="C759" name="C759" aria-describedby="basic-addon4"  OnBlur="green(this.id,this.value)" onkeyup="format(this)" onchange="calcDebitos()" onclick="modcont(this.id)">
    <div class="input-group-append">
        <span class="input-group-text f29 f29num" id="basic-addon2 ">+</span>
    </div>
</div>

</div>
<!-- END Linea 11 -->
<!-- Linea 12 -->
<div class="col-6 f29span f29">

<span class="input-group-text f29" id="basic-addon4" >12 - Notas de Débito emitidas asociadas al giro y Notas de Débito recibidas de terceros por retención parcial de cambio de sujeto </span>
    
</div>

<div class="col-3 f29span f29">

<div class="input-group mb-3 col-12 f29span">
    <div class="input-group-prepend">
        <span class="input-group-text f29 f29span f29num" id="basic-addon4">512</span>
    </div> 
    <input type="number" value="0" class="form-control f29 f29inp" id="C512" name="C512" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onclick="modcont(this.id)" >
</div>

</div>


<div class="col-3 f29span f29">

<div class="input-group mb-3 col-12 f29span f29">
    <div class="input-group-prepend">
        <span class="input-group-text f29 f29span f29num" id="basic-addon4">513</span>
    </div>
    <input type="text" value="0" class="form-control f29 f29inp" id="C513" name="C513" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)"onkeyup="format(this)" onchange="calcDebitos()" onclick="modcont(this.id)" >
    <div class="input-group-append">
        <span class="input-group-text f29 f29num" id="basic-addon2 ">+</span>
    </div>
</div>

</div>
<!-- END Linea 12 -->
<!-- Linea 13 -->
<div class="col-6 f29span f29">

<span class="input-group-text f29" id="basic-addon4" >13 - Notas de Crédito emitidas por Facturas asociadas al giro y Notas de Crédito recibidas de terceros por retención parcial de cambio de sujeto </span>
    
</div>

<div class="col-3 f29span f29">

<div class="input-group mb-3 col-12 f29span">
    <div class="input-group-prepend">
        <span class="input-group-text f29 f29span f29num" id="basic-addon4">509</span>
    </div>
    <input type="number" value="0" class="form-control f29 f29inp" id="C509" name="C509" aria-describedby="basic-addon4"  OnBlur="green(this.id,this.value)" onclick="modcont(this.id)">
</div>

</div>


<div class="col-3 f29span f29">

<div class="input-group mb-3 col-12 f29span f29">
    <div class="input-group-prepend">
        <span class="input-group-text f29 f29span f29num" id="basic-addon4">510</span>
    </div>
    <input type="text" value="0" class="form-control f29 f29inp" id="C510"  name="C510" aria-describedby="basic-addon4"  OnBlur="green(this.id,this.value)" onkeyup="format(this)" onchange="calcDebitos()" onclick="modcont(this.id)">
    <div class="input-group-append">
        <span class="input-group-text f29 f29num" id="basic-addon2 ">-</span>
    </div>
</div>

</div>
<!-- END Linea 13 -->
<!-- Linea 14 -->
<div class="col-6 f29span f29">

<span class="input-group-text f29" id="basic-addon4" >14 - Notas de Crédito emitidas por Vales de máquinas autorizadas por el Servicio</span>
    
</div>

<div class="col-3 f29span f29">

<div class="input-group mb-3 col-12 f29span">
    <div class="input-group-prepend">
        <span class="input-group-text f29 f29span f29num" id="basic-addon4">708</span>
    </div>
    <input type="number" value="0" class="form-control f29 f29inp" id="C708" name="C708" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)"  onclick="modcont(this.id)">
</div>

</div>


<div class="col-3 f29span f29">

<div class="input-group mb-3 col-12 f29span f29">
    <div class="input-group-prepend">
        <span class="input-group-text f29 f29span f29num" id="basic-addon4">709</span>
    </div>
    <input type="text" value="0" class="form-control f29 f29inp" id="C709" name="C709" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onkeyup="format(this)" onchange="calcDebitos()" onclick="modcont(this.id)" >
    <div class="input-group-append">
        <span class="input-group-text f29 f29num" id="basic-addon2 ">-</span>
    </div>
</div>

</div>
<!-- END Linea 14 -->
<!-- Linea 15 -->
<div class="col-6 f29span f29">

<span class="input-group-text f29" id="basic-addon4" >15 - Notas de Crédito emitidas por ventas y servicios que no son del giro (activo ﬁjo y otros </span>
    
</div>

<div class="col-3 f29span f29">

<div class="input-group mb-3 col-12 f29span">
    <div class="input-group-prepend">
        <span class="input-group-text f29 f29span f29num" id="basic-addon4">733</span>
    </div>
    <input type="number" value="0" class="form-control f29 f29inp" id="C733"  name="C733" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)"  onclick="modcont(this.id)">
</div>

</div>


<div class="col-3 f29span f29">

<div class="input-group mb-3 col-12 f29span f29">
    <div class="input-group-prepend">
        <span class="input-group-text f29 f29span f29num" id="basic-addon4">734</span>
    </div>
    <input type="text" value="0" class="form-control f29 f29inp" id="C734" name="C734" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onkeyup="format(this)" onchange="calcDebitos()" onclick="modcont(this.id)">
    <div class="input-group-append">
        <span class="input-group-text f29 f29num" id="basic-addon2 ">-</span>
    </div>
</div>

</div>
<!-- END Linea 15 -->
<!-- Linea 16 -->
<div class="col-6 f29span f29">

<span class="input-group-text f29" id="basic-addon4" >16 - Facturas de Compra recibidas con retención parcial (contribuyentes retenidos) </span>
    
</div>

<div class="col-3 f29span f29">

<div class="input-group mb-3 col-12 f29span">
    <div class="input-group-prepend">
        <span class="input-group-text f29 f29span f29num" id="basic-addon4">516</span>
    </div>
    <input type="number" value="0" class="form-control f29 f29inp" id="C516" name="C516" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onclick="modcont(this.id)">
</div>

</div>


<div class="col-3 f29span f29">

<div class="input-group mb-3 col-12 f29span f29">
    <div class="input-group-prepend">
        <span class="input-group-text f29 f29span f29num" id="basic-addon4">517</span>
    </div>
    <input type="text" value="0" class="form-control f29 f29inp" id="C517" name="C517" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onkeyup="format(this)" onchange="calcDebitos()" onclick="modcont(this.id)">
    <div class="input-group-append">
        <span class="input-group-text f29 f29num" id="basic-addon2 ">+</span>
    </div>
</div>

</div>
<!-- END Linea 16 -->
<!-- Linea 17 -->
<div class="col-6 f29span f29">

<span class="input-group-text f29" id="basic-addon4" >17 - Liquidación y Liquidación Factura </span>
    
</div>

<div class="col-3 f29span f29">

<div class="input-group mb-3 col-12 f29span">
    <div class="input-group-prepend">
        <span class="input-group-text f29 f29span f29num" id="basic-addon4">500</span>
    </div>
    <input type="number" value="0" class="form-control f29 f29inp" id="C500" name="C500" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onclick="modcont(this.id)">
</div>

</div>


<div class="col-3 f29span f29">

<div class="input-group mb-3 col-12 f29span f29">
    <div class="input-group-prepend">
        <span class="input-group-text f29 f29span f29num" id="basic-addon4">501</span>
    </div>
    <input type="text" value="0" class="form-control f29 f29inp" id="C501" name="C501" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onkeyup="format(this)" onchange="calcDebitos()" onclick="modcont(this.id)" >
    <div class="input-group-append">
        <span class="input-group-text f29 f29num" id="basic-addon2 ">+</span>
    </div>
</div>

</div>
<!-- END Linea 17 -->
    <!-- Linea 18 -->
    <div class="col-9 f29span f29">

    <span class="input-group-text f29" id="basic-addon4" >18 - Adiciones al Débito Fiscal del mes, originadas en devoluciones excesivas registradas en otros períodos por Art.27 bis </span>
        
    </div>

    <div class="col-3 f29span f29">

    <div class="input-group mb-3 col-12 f29span">
        <div class="input-group-prepend">
            <span class="input-group-text f29 f29span f29num text-center" id="basic-addon4">154 </span>
        </div>
        <input type="text" value="0" class="form-control f29 f29inp" id="C154"  name="C154" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onkeyup="format(this)" onchange="calcDebitos()" onclick="modcont(this.id)">
        <div class="input-group-append">
        <span class="input-group-text f29 f29num" id="basic-addon2 ">+</span>
    </div>
    </div>

    </div>

<!-- END Linea 18 -->
    <!-- Linea 19 -->
    <div class="col-9 f29span f29">

    <span class="input-group-text f29" id="basic-addon4" >19 - Restitución Adicional por proporción de operaciones exentas y/o no gravadas por concepto Art.27 bis, inc.2° (Ley 19.738/01)</span>
        
    </div>

    <div class="col-3 f29span f29">

    <div class="input-group mb-3 col-12 f29span">
        <div class="input-group-prepend">
            <span class="input-group-text f29 f29span f29num text-center" id="basic-addon4">518 </span>
        </div>
        <input type="text" value="0" class="form-control f29 f29inp" id="C518" name="C518" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onkeyup="format(this)" onchange="calcDebitos()" onclick="modcont(this.id)">
        <div class="input-group-append">
        <span class="input-group-text f29 f29num" id="basic-addon2 ">+</span>
    </div>
    </div>

    </div>

<!-- END Linea 19 -->
    <!-- Linea 20 -->
    <div class="col-9 f29span f29">

    <span class="input-group-text f29" id="basic-addon4" >20 - Reintegro del Impuesto de Timbres y Estampillas, Art 3° Ley N° 20.259 e IVA determinado en el Arrendamiento esporádico de BBRR amoblados </span>
        
    </div>

    <div class="col-3 f29span f29">

    <div class="input-group mb-3 col-12 f29span">
        <div class="input-group-prepend">
            <span class="input-group-text f29 f29span f29num text-center" id="basic-addon4">713 </span>
        </div>
        <input type="text" value="0" class="form-control f29 f29inp" id="C713" name="C713" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onkeyup="format(this)" onchange="calcDebitos()" onclick="modcont(this.id)">
        <div class="input-group-append">
        <span class="input-group-text f29 f29num" id="basic-addon2 ">+</span>
    </div>
    </div>

    </div>

<!-- END Linea 20 -->
 <!-- Linea 21 -->
    <div class="col-6 f29span f29">
        
        <div class="col-12 f29span f29">

        <div class="input-group-prepend">   
            <span class="input-group-text f29" id="basic-addon4" >21 - Adiciones al Débito por IEPD Ley 20.765</span>
            <span class="input-group-text f29 f29span  text-center" id="basic-addon4">M3 </span>
            <span class="input-group-text f29 f29span  text-center" id="basic-addon4">738 </span>
            <input type="number" value="0" class="form-control f29 f29inp" id="C738" name="C738" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)"  onclick="modcont(this.id)">
            <span class="input-group-text f29 f29span  text-center" id="basic-addon4">Base </span>
            <span class="input-group-text f29 f29span  text-center" id="basic-addon4">739 </span>
            <input type="number" value="0" class="form-control f29 f29inp" id="C739" name="C739" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)"  onclick="modcont(this.id)">
        </div>    
            
            
        </div>
        
        
        
    </div>

    <div class="col-6 f29">

        <div class="row f29span f29">
        <div class="col-6 f29span f29">

            <div class="input-group-prepend">   
                <span class="input-group-text f29" id="basic-addon4" >Variable</span>
                <span class="input-group-text f29 f29span text-center" id="basic-addon4">740 </span>
                <input type="number" value="0" class="form-control f29 f29inp" id="C740" name="C740" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onclick="modcont(this.id)">
                
            </div>    


            </div>

            <div class="col-6 f29span f29">

            <div class="input-group-prepend">   

                <span class="input-group-text f29 f29span f29num text-center" id="basic-addon4">741 </span>
                <input type="text" value="0" class="form-control f29 f29inp" id="C741" name="C741" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onkeyup="format(this)" onchange="calcDebitos()" onclick="modcont(this.id)">
                <div class="input-group-append">
                    <span class="input-group-text f29 f29num" id="basic-addon2 ">+</span>
                </div>
            </div>    


            </div>
        </div>
        

    </div>  
 <!-- ENDLinea 21 -->
 <!-- Linea 22 -->
 <div class="col-9 f29span ">

<span class="input-group-text f29 f29bold" id="basic-addon4" >22 - TOTAL DÉBITOS</span>
    
</div>

<div class="col-3 f29span">

    <div class="input-group-prepend">   

        <span class="input-group-text f29 f29span f29num text-center" id="basic-addon4">538 </span>
        <input type="text"  value="0" class="form-control f29 f29inp" id="C538" name="C538" aria-describedby="basic-addon4" >
        <div class="input-group-append">
        <span class="input-group-text f29 f29num" id="basic-addon2 ">=</span>
    </div>
    </div> 

</div>
<!-- END Linea 22 -->
<hr>
 <!-- Linea ~Sin numero -->
 <div class="col-6 f29span ">

<span class="input-group-text f29 f29bold" id="basic-addon4" >IMPUESTO AL VALOR AGREGADO D.L. 825/74</span>
    
</div>

<div class="col-3 f29span">

<span class="input-group-text f29 f29bold" id="basic-addon4" >Con derecho a Crédito</span>

</div>


<div class="col-3 f29span">

<span class="input-group-text f29 f29bold" id="basic-addon4" >Sin derecho a Crédito</span>

</div>
 <!-- END Linea ~Sin numero -->
<!-- Linea 23 -->
     <div class="col-6 f29span f29">

<span class="input-group-text f29" id="basic-addon4" >23 - IVA por documentos electrónicos recibidos </span>
    
</div>

<div class="col-3 f29span f29">

<div class="input-group mb-3 col-12 f29span">
    <div class="input-group-prepend">
        <span class="input-group-text f29 f29span f29num" id="basic-addon4">511</span>
    </div>
    <input type="text" value="0" class="form-control f29 f29inp" id="C511" name="C511" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onclick="modcont(this.id)" onkeyup="format(this)"  >
</div>

</div>


<div class="col-3 f29span f29">

<div class="input-group mb-3 col-12 f29span f29">
    <div class="input-group-prepend">
        <span class="input-group-text f29 f29span f29num" id="basic-addon4">514</span>
    </div>
    <input type="text" value="0" class="form-control f29 f29inp" id="C514"  name="C514" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onkeyup="format(this)"  onclick="modcont(this.id)" >
</div>

</div>
<!-- END Linea 23 -->
<!-- Linea # -->
<div class="col-6 f29span">

<span class="input-group-text f29" id="basic-addon4" ></span>

</div>
<div class="col-3 f29span">

    <span class="input-group-text f29 f29bold" id="basic-addon4" >Cantidad de documentos</span>

</div>


<div class="col-3 f29span">

    <span class="input-group-text f29 f29bold" id="basic-addon4" >Monto Neto</span>

</div>
<!-- END Linea # -->
<!-- Linea 24 -->
<div class="col-6 f29span f29">

<span class="input-group-text f29" id="basic-addon4" >24 - Internas afectas </span>
    
</div>

<div class="col-3 f29span f29">

<div class="input-group mb-3 col-12 f29span">
    <div class="input-group-prepend">
        <span class="input-group-text f29 f29span f29num" id="basic-addon4">564</span>
    </div>
    <input type="text" value="0" class="form-control f29 f29inp" id="C564" name="C564" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onkeyup="format(this)"  onclick="modcont(this.id)" >
</div>

</div>


<div class="col-3 f29span f29">

<div class="input-group mb-3 col-12 f29span f29">
    <div class="input-group-prepend">
        <span class="input-group-text f29 f29span f29num" id="basic-addon4">521</span>
    </div>
    <input type="text" value="0" class="form-control f29 f29inp" id="C521" name="C521" aria-describedby="basic-addon4"  OnBlur="green(this.id,this.value)" onkeyup="format(this)"  onclick="modcont(this.id)">
</div>

</div>
<!-- END Linea 24 -->
<!-- Linea 25 -->
<div class="col-6 f29span f29">

<span class="input-group-text f29" id="basic-addon4" >25 - Importaciones</span>
    
</div>

<div class="col-3 f29span f29">

<div class="input-group mb-3 col-12 f29span">
    <div class="input-group-prepend">
        <span class="input-group-text f29 f29span f29num" id="basic-addon4">566</span>
    </div>
    <input type="text" value="0" class="form-control f29 f29inp" id="C566"  name="C566" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onkeyup="format(this)"  onclick="modcont(this.id)" >
</div>

</div>


<div class="col-3 f29span f29">

<div class="input-group mb-3 col-12 f29span f29">
    <div class="input-group-prepend">
        <span class="input-group-text f29 f29span f29num" id="basic-addon4">560</span>
    </div>
    <input type="text" value="0" class="form-control f29 f29inp" id="C560" name="C560" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onkeyup="format(this)"  onclick="modcont(this.id)" >
</div>

</div>
<!-- END Linea 25 -->
<!-- Linea 26 -->
<div class="col-6 f29span f29">

<span class="input-group-text f29" id="basic-addon4" >26 - Internas exentas, o no gravadas
</span>
    
</div>

<div class="col-3 f29span f29">

<div class="input-group mb-3 col-12 f29span">
    <div class="input-group-prepend">
        <span class="input-group-text f29 f29span f29num" id="basic-addon4">584</span>
    </div>
    <input type="text" value="0" class="form-control f29 f29inp" id="C584" name="C584" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onkeyup="format(this)"  onclick="modcont(this.id)" >
</div>

</div>


<div class="col-3 f29span f29">

<div class="input-group mb-3 col-12 f29span f29">
    <div class="input-group-prepend">
        <span class="input-group-text f29 f29span f29num" id="basic-addon4">562</span>
    </div>
    <input type="text" value="0" class="form-control f29 f29inp" id="C562" name="C562" aria-describedby="basic-addon4"  OnBlur="green(this.id,this.value)" onkeyup="format(this)"  onclick="modcont(this.id)">
</div>

</div>
<!-- END Linea 26 -->
<!-- Linea # -->
<div class="col-6 f29span">

<span class="input-group-text f29" id="basic-addon4" ></span>

</div>
<div class="col-3 f29span">

    <span class="input-group-text f29 f29bold" id="basic-addon4" >Cantidad de documentos</span>

</div>


<div class="col-3 f29span">

    <span class="input-group-text f29 f29bold" id="basic-addon4" >Crédito, Recuperación y Reintegro</span>

</div>
<!-- END Linea # -->
<!-- Linea 27 -->
<div class="col-6 f29span f29">

<span class="input-group-text f29" id="basic-addon4" >27 - Facturas recibidas del giro y Facturas de compra emitidas </span>
    
</div>

<div class="col-3 f29span f29">

<div class="input-group mb-3 col-12 f29span">
    <div class="input-group-prepend">
        <span class="input-group-text f29 f29span f29num" id="basic-addon4">519</span>
    </div>
    <input type="number" value="0" class="form-control f29 f29inp" id="C519" name="C519" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onclick="modcont(this.id)" >
</div>

</div>


<div class="col-3 f29span f29">

<div class="input-group mb-3 col-12 f29span f29">
    <div class="input-group-prepend">
        <span class="input-group-text f29 f29span f29num" id="basic-addon4">520</span>
    </div>
    <input type="text" value="0" class="form-control f29 f29inp" id="C520"  name="C520" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onkeyup="format(this)" onchange="calcCreditos()"  onclick="modcont(this.id)">
    <div class="input-group-append">
        <span class="input-group-text f29 f29num" id="basic-addon2 ">+</span>
    </div>
</div>

</div>
<!-- END Linea 27 -->
<!-- Linea 28 -->
<div class="col-6 f29span f29">

<span class="input-group-text f29" id="basic-addon4" >28 - Facturas recibidas de Proveedores: Supermercados y Comercios similares, Art. 23 N°4 D.L.825, de 1974 (Ley N°20.780) </span>
    
</div>

<div class="col-3 f29span f29">

<div class="input-group mb-3 col-12 f29span">
    <div class="input-group-prepend">
        <span class="input-group-text f29 f29span f29num" id="basic-addon4">761</span>
    </div>
    <input type="number" value="0" class="form-control f29 f29inp" id="C761" name="C761"  aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onclick="modcont(this.id)">
</div>

</div>


<div class="col-3 f29span f29">

<div class="input-group mb-3 col-12 f29span f29">
    <div class="input-group-prepend">
        <span class="input-group-text f29 f29span f29num" id="basic-addon4">762</span>
    </div>
    <input type="text" value="0" class="form-control f29 f29inp" id="C762"  name="C762" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onkeyup="format(this)" onchange="calcCreditos()"  onclick="modcont(this.id)">
    <div class="input-group-append">
        <span class="input-group-text f29 f29num" id="basic-addon2 ">+</span>
    </div>
</div>

</div>
<!-- END Linea 28 -->
<!-- Linea 29 -->
<div class="col-6 f29span f29">

<span class="input-group-text f29" id="basic-addon4" >29 - Facturas recibidas por Adquisición o Construcción de Bienes Inmuebles, Art.8° transitorio (Ley N°20.780) </span>
    
</div>

<div class="col-3 f29span f29"> 

<div class="input-group mb-3 col-12 f29span">
    <div class="input-group-prepend">
        <span class="input-group-text f29 f29span f29num" id="basic-addon4">765</span>
    </div>
    <input type="number" value="0" class="form-control f29 f29inp" id="C765" name="C765" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onclick="modcont(this.id)">
</div>

</div>


<div class="col-3 f29span f29">

<div class="input-group mb-3 col-12 f29span f29">
    <div class="input-group-prepend">
        <span class="input-group-text f29 f29span f29num" id="basic-addon4">766</span>
    </div>
    <input type="text" value="0" class="form-control f29 f29inp" id="C766" name="C766" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onkeyup="format(this)" onchange="calcCreditos()"  onclick="modcont(this.id)">
    <div class="input-group-append">
        <span class="input-group-text f29 f29num" id="basic-addon2 ">+</span>
    </div>
</div>

</div>
<!-- END Linea 29 -->
<!-- Linea 30 -->
<div class="col-6 f29span f29">

<span class="input-group-text f29" id="basic-addon4" >30 - Facturas activo fijo </span>
    
</div>

<div class="col-3 f29span f29">

<div class="input-group mb-3 col-12 f29span">
    <div class="input-group-prepend">
        <span class="input-group-text f29 f29span f29num" id="basic-addon4">524</span>
    </div>
    <input type="number" value="0" class="form-control f29 f29inp" id="C524" name="C524" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)"  onclick="modcont(this.id)">
</div>

</div>


<div class="col-3 f29span f29">

<div class="input-group mb-3 col-12 f29span f29">
    <div class="input-group-prepend">
        <span class="input-group-text f29 f29span f29num" id="basic-addon4">525</span>
    </div>
    <input type="text" value="0" class="form-control f29 f29inp" id="C525"  name="C525" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onkeyup="format(this)" onchange="calcCreditos()"  onclick="modcont(this.id)">
    <div class="input-group-append">
        <span class="input-group-text f29 f29num" id="basic-addon2 ">+</span>
    </div>
</div>

</div>
<!-- END Linea 30 -->
<!-- Linea 31 -->
<div class="col-6 f29span f29">

<span class="input-group-text f29" id="basic-addon4" >31 - Notas de Crédito recibidas y Notas de Crédito emitidas por retención de cambio de sujeto </span>
    
</div>

<div class="col-3 f29span f29">

<div class="input-group mb-3 col-12 f29span">
    <div class="input-group-prepend">
        <span class="input-group-text f29 f29span f29num" id="basic-addon4">527</span>
    </div>
    <input type="number" value="0" class="form-control f29 f29inp" id="C527" name="C527" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onclick="modcont(this.id)">
</div>

</div>


<div class="col-3 f29span f29">

<div class="input-group mb-3 col-12 f29span f29">
    <div class="input-group-prepend">
        <span class="input-group-text f29 f29span f29num" id="basic-addon4">528</span>
    </div>
    <input type="text" value="0" class="form-control f29 f29inp" id="C528" name="C528" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onkeyup="format(this)" onchange="calcCreditos()"  onclick="modcont(this.id)">
    <div class="input-group-append">
        <span class="input-group-text f29 f29num" id="basic-addon2 ">-</span>
    </div>
</div>

</div>
<!-- END Linea 31 -->
<!-- Linea 32 -->
<div class="col-6 f29span f29">

<span class="input-group-text f29" id="basic-addon4" >32 - Notas de Débito recibidas y Notas de Débito emitidas por retención de cambio de sujeto </span>
    
</div>

<div class="col-3 f29span f29">

<div class="input-group mb-3 col-12 f29span">
    <div class="input-group-prepend">
        <span class="input-group-text f29 f29span f29num" id="basic-addon4">531</span>
    </div>
    <input type="number" value="0" class="form-control f29 f29inp" id="C531" name="C531" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onclick="modcont(this.id)" >
</div>

</div>


<div class="col-3 f29span f29">

<div class="input-group mb-3 col-12 f29span f29">
    <div class="input-group-prepend">
        <span class="input-group-text f29 f29span f29num" id="basic-addon4">532</span>
    </div>
    <input type="text" value="0" class="form-control f29 f29inp" id="C532" name="C532" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onkeyup="format(this)" onchange="calcCreditos()" onclick="modcont(this.id)" >
    <div class="input-group-append">
        <span class="input-group-text f29 f29num" id="basic-addon2 ">+</span>
    </div>
</div>

</div>
<!-- END Linea 32 -->
<!-- Linea 33 -->
<div class="col-6 f29span f29">

<span class="input-group-text f29" id="basic-addon4" >33 - Declaraciones de Ingreso (DIN) importaciones del giro</span>
    
</div>

<div class="col-3 f29span f29">

<div class="input-group mb-3 col-12 f29span">
    <div class="input-group-prepend">
        <span class="input-group-text f29 f29span f29num" id="basic-addon4">534</span>
    </div>
    <input type="number" value="0" class="form-control f29 f29inp" id="C534" name="C534" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onclick="modcont(this.id)" >
</div>

</div>


<div class="col-3 f29span f29">

<div class="input-group mb-3 col-12 f29span f29">
    <div class="input-group-prepend">
        <span class="input-group-text f29 f29span f29num" id="basic-addon4">535</span>
    </div>
    <input type="text" value="0" class="form-control f29 f29inp" id="C535"  name="C535" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onkeyup="format(this)" onchange="calcCreditos()"  onclick="modcont(this.id)" >
    <div class="input-group-append">
        <span class="input-group-text f29 f29num" id="basic-addon2 ">+</span>
    </div>
</div>

</div>
<!-- END Linea 33 -->
<!-- Linea 34 -->
<div class="col-6 f29span f29">

    <span class="input-group-text f29" id="basic-addon4" >34 - Declaraciones de Ingreso (DIN) importaciones activo fijo</span>
    
</div>

<div class="col-3 f29span f29">

    <div class="input-group mb-3 col-12 f29span">
        <div class="input-group-prepend">
            <span class="input-group-text f29 f29span f29num" id="basic-addon4">536</span>
        </div>
        <input type="number" value="0" class="form-control f29 f29inp" id="C536" name="C536" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onclick="modcont(this.id)" >
    </div>

</div>


<div class="col-3 f29span f29">

<div class="input-group mb-3 col-12 f29span f29">
    <div class="input-group-prepend">
        <span class="input-group-text f29 f29span f29num" id="basic-addon4">553</span>
    </div>
    <input type="text" value="0" class="form-control f29 f29inp" id="C553"  name="C553" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onkeyup="format(this)" onchange="calcCreditos()"  onclick="modcont(this.id)" >
    <div class="input-group-append">
        <span class="input-group-text f29 f29num" id="basic-addon2 ">+</span>
    </div>
</div>

</div>
<!-- END Linea 34 -->
<!-- Linea 35 -->
    <div class="col-9 f29span f29">

    <span class="input-group-text f29" id="basic-addon4" >35 - Remanente Crédito Fiscal mes anterior </span>
        
    </div>

    <div class="col-3 f29span f29">

    <div class="input-group mb-3 col-12 f29span">
        <div class="input-group-prepend">
            <span class="input-group-text f29 f29span f29num text-center" id="basic-addon4">504 </span>
        </div>
        <input type="text" value="0" class="form-control f29 f29inp" id="C504" name="C504" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onkeyup="format(this)" onchange="calcCreditos()"  onclick="modcont(this.id)" >
        <div class="input-group-append">
        <span class="input-group-text f29 f29num" id="basic-addon2 ">+</span>
    </div>
    </div>

    </div>

<!-- END Linea 35 -->
<!-- Linea 36 -->
<div class="col-9 f29span f29">

<span class="input-group-text f29" id="basic-addon4" >36 - Devolución Solicitud Art. 36 (Exportadores) </span>
    
</div>

<div class="col-3 f29span f29">

<div class="input-group mb-3 col-12 f29span">
    <div class="input-group-prepend">
        <span class="input-group-text f29 f29span f29num text-center" id="basic-addon4">593 </span>
    </div>
    <input type="text" value="0" class="form-control f29 f29inp" id="C593"  name="C593" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onkeyup="format(this)" onchange="calcCreditos()"  onclick="modcont(this.id)" >
    <div class="input-group-append">
    <span class="input-group-text f29 f29num" id="basic-addon2 ">-</span>
</div>
</div>

</div>

<!-- END Linea 36 -->
<!-- Linea 37 -->
<div class="col-9 f29span f29">

<span class="input-group-text f29" id="basic-addon4" >37 - Devolución Solicitud Art. 27 bis (Activo fijo)  </span>
    
</div>

<div class="col-3 f29span f29">

<div class="input-group mb-3 col-12 f29span">
    <div class="input-group-prepend">
        <span class="input-group-text f29 f29span f29num text-center" id="basic-addon4">594 </span>
    </div>
    <input type="text" value="0" class="form-control f29 f29inp" id="C594" name="C594" aria-describedby="basic-addon4"  OnBlur="green(this.id,this.value)" onkeyup="format(this)" onchange="calcCreditos()"  onclick="modcont(this.id)">
    <div class="input-group-append">
    <span class="input-group-text f29 f29num" id="basic-addon2 ">-</span>
</div>
</div>

</div>

<!-- END Linea 37 -->
<!-- Linea 38 -->
<div class="col-9 f29span f29">

<span class="input-group-text f29" id="basic-addon4" >38 - Certificado Imputación Art. 27 bis (Activo fijo) </span>
    
</div>

<div class="col-3 f29span f29">

<div class="input-group mb-3 col-12 f29span">
    <div class="input-group-prepend">
        <span class="input-group-text f29 f29span f29num text-center" id="basic-addon4">592 </span>
    </div>
    <input type="text" value="0" class="form-control f29 f29inp" id="C592" name="C592" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onkeyup="format(this)" onchange="calcCreditos()"  onclick="modcont(this.id)">
    <div class="input-group-append">
    <span class="input-group-text f29 f29num" id="basic-addon2 ">-</span>
</div>
</div>

</div>

<!-- END Linea 38 -->
<!-- Linea 39 -->
<div class="col-9 f29span f29">

<span class="input-group-text f29" id="basic-addon4" >39 - Devolución Solicitud Art. 3° (Cambio de Sujeto) </span>
    
</div>

<div class="col-3 f29span f29">

<div class="input-group mb-3 col-12 f29span">
    <div class="input-group-prepend">
        <span class="input-group-text f29 f29span f29num text-center" id="basic-addon4">539 </span>
    </div>
    <input type="text" value="0" class="form-control f29 f29inp" id="C539" name="C539" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onkeyup="format(this)" onchange="calcCreditos()"  onclick="modcont(this.id)" >
    <div class="input-group-append">
    <span class="input-group-text f29 f29num" id="basic-addon2 ">-</span>
</div>
</div>

</div>

<!-- END Linea 39 -->
<!-- Linea 40 -->
<div class="col-9 f29span f29">

<span class="input-group-text f29" id="basic-addon4" >40 - Devolución Solicitud Ley N° 20.258 por remanente CF IVA originado en Impuesto Específico Petróleo Diesel (Generadoras Eléctricas) </span>
    
</div>

<div class="col-3 f29span f29">

<div class="input-group mb-3 col-12 f29span">
    <div class="input-group-prepend">
        <span class="input-group-text f29 f29span f29num text-center" id="basic-addon4">718 </span>
    </div>
    <input type="text" value="0" class="form-control f29 f29inp" id="C718" name="C718" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onkeyup="format(this)" onchange="calcCreditos()"  onclick="modcont(this.id)" >
    <div class="input-group-append">
    <span class="input-group-text f29 f29num" id="basic-addon2 ">-</span>
</div>
</div>

</div>

<!-- END Linea 40-->
<!-- Linea 41 -->
<div class="col-9 f29span f29">

<span class="input-group-text f29" id="basic-addon4" >41 - Monto Reintegrado por Devolución Indebida de Crédito Fiscal D.S. 348 (Exportadores)</span>
    
</div>

<div class="col-3 f29span f29">

<div class="input-group mb-3 col-12 f29span">
    <div class="input-group-prepend">
        <span class="input-group-text f29 f29span f29num text-center" id="basic-addon4">164 </span>
    </div>
    <input type="text" value="0" class="form-control f29 f29inp" id="C164"  name="C164" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onkeyup="format(this)" onchange="calcCreditos()"  onclick="modcont(this.id)" >
    <div class="input-group-append">
    <span class="input-group-text f29 f29num" id="basic-addon2 ">+</span>
</div>
</div>

</div>

<!-- END Linea 41 -->

<!-- Linea % -->
<div class="col-3 f29span f29">

<span class="input-group-text f29" id="basic-addon4" ></span>
    
</div>

<div class="col-3 f29span f29">

<span class="input-group-text f29" id="basic-addon4" >M3 Comprados con derecho a crédito</span>
    
</div>

<div class="col-3 f29span f29">

<span class="input-group-text f29" id="basic-addon4" > Componentes del Impuesto</span>
    
</div>

<div class="col-3 f29span f29">

<span class="input-group-text f29" id="basic-addon4" ></span>
    
</div>

<!-- END Linea % -->

 <!-- Linea 42 -->
 <div class="col-3 f29span f29x2">
        <div class="col-12 f29span f29x2">
            <div class="input-group-prepend">   
                <span class="input-group-text f29x2" id="basic-addon4" style="text-align: left;" >42 - Recuperación del Impuesto Especíﬁco al Petróleo Diesel</span>
            </div>        
        </div>   
    </div>


    <div class="col-3 f29span f29">

        <div class="input-group-prepend">
                
        <span class="input-group-text f29x2 f29x2num f29span  text-center" id="basic-addon4">730 </span>
            <input type="number" value="0" class="form-control f29x2 f29inp" id="C730" name="C730" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)"  onclick="modcont(this.id)" >
            
        </div>                 
    </div>


    <div class="col-3 f29span f29">

        <div class="input-group-prepend">
            <span class="input-group-text f29 f29span  text-center" id="basic-addon4">Base </span>
            <span class="input-group-text f29 f29span  text-center" id="basic-addon4">742 </span>
            <input type="number" value="0" class="form-control f29 f29inp" id="C742" name="C742" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)"  onclick="modcont(this.id)" >
        
        </div>                 
        
        <div class="input-group-prepend">
            <span class="input-group-text f29 f29span text-center" id="basic-addon4">Variable </span>
            <span class="input-group-text f29 f29span text-center" id="basic-addon4">743 </span>
            <input type="number" value="0" class="form-control f29 f29inp" id="C743" name="C743"  aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onclick="modcont(this.id)" >
        
        </div>                 
    </div>

    <div class="col-3 f29span f29">

                <div class="input-group-prepend">   
                <span class="input-group-text f29x2 f29span f29x2num text-center" id="basic-addon4">127 </span>
                <input type="text" value="0" class="form-control f29x2 f29inp" id="C127" name="C127" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onkeyup="format(this)" onchange="calcCreditos()"  onclick="modcont(this.id)" >
                <div class="input-group-append">
                    <span class="input-group-text f29x2 f29num" id="basic-addon2 ">+</span>
                </div>
                </div>    
    </div>
 <!-- ENDLinea 42 -->
  <!-- Linea 43 -->
  <div class="col-3 f29span f29x2">
        <div class="col-12 f29span f29x2">
            <div class="input-group-prepend">   
                <span class="input-group-text f29x2" id="basic-addon4" style="text-align: left;" >43 - Recuperación del Impuesto Especíﬁco al<br>Petróleo Diesel soportado por Transportistas de Carga</span>
            </div>        
        </div>   
    </div>


    <div class="col-3 f29span f29">

        <div class="input-group-prepend">
                
                <span class="input-group-text f29x2 f29x2num f29span  text-center" id="basic-addon4">729 </span>
                <input type="number" value="0" class="form-control f29x2 f29inp" id="C729" name="C729" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)"  onclick="modcont(this.id)" >
            
        </div>                 
    </div>


    <div class="col-3 f29span f29">

        <div class="input-group-prepend">
            <span class="input-group-text f29 f29span  text-center" id="basic-addon4">Base </span>
            <span class="input-group-text f29 f29span  text-center" id="basic-addon4">744 </span>
            <input type="number" value="0" class="form-control f29 f29inp" id="C744" name="C744" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onclick="modcont(this.id)" > 
        
        </div>                 
        
        <div class="input-group-prepend">
            <span class="input-group-text f29 f29span  text-center" id="basic-addon4">Variable </span>
            <span class="input-group-text f29 f29span  text-center" id="basic-addon4">745 </span>
            <input type="number" value="0" class="form-control f29 f29inp" id="C745" name="C745" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onclick="modcont(this.id)" > 
        
        </div>                 
        

    </div>

    <div class="col-3 f29span f29">

                <div class="input-group-prepend">   
                    <span class="input-group-text f29x2 f29span f29x2num text-center" id="basic-addon4">544 </span>
                    <input type="text" value="0" class="form-control f29x2 f29inp" id="C544" name="C544" aria-describedby="basic-addon4"  OnBlur="green(this.id,this.value)" onkeyup="format(this)" onchange="calcCreditos()"  onclick="modcont(this.id)">
                    <div class="input-group-append">
                        <span class="input-group-text f29x2 f29num" id="basic-addon2 ">+</span>
                    </div>
                </div>    
    </div>
<!-- ENDLinea 43 -->
 <!-- Linea 44 -->
<div class="col-9 f29span f29">

<span class="input-group-text f29" id="basic-addon4" >44 - Crédito del Art. 11º Ley 18.211 (correspondiente a Zona Franca de Extensión)  </span>
    
</div>

<div class="col-3 f29span f29">

<div class="input-group mb-3 col-12 f29span">
    <div class="input-group-prepend">
        <span class="input-group-text f29 f29span f29num text-center" id="basic-addon4">523 </span>
    </div>
    <input type="text" value="0" class="form-control f29 f29inp" id="C523" name="C523" aria-describedby="basic-addon4"  OnBlur="green(this.id,this.value)" onkeyup="format(this)" onchange="calcCreditos()"  onclick="modcont(this.id)">
    <div class="input-group-append">
    <span class="input-group-text f29 f29num" id="basic-addon2 ">-</span>
</div>
</div>

</div>

<!-- END Linea 44 -->
 <!-- Linea 45 -->
 <div class="col-9 f29span f29">

<span class="input-group-text f29" id="basic-addon4" >45 - Crédito por Impuesto de Timbres y Estampillas, Art. 3º Ley 20.259</span>
    
</div>

<div class="col-3 f29span f29">

<div class="input-group mb-3 col-12 f29span">
    <div class="input-group-prepend">
        <span class="input-group-text f29 f29span f29num text-center" id="basic-addon4">712 </span>
    </div>
    <input type="text" value="0" class="form-control f29 f29inp" id="C712"  name="C712" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onkeyup="format(this)" onchange="calcCreditos()" onclick="modcont(this.id)">
    <div class="input-group-append">
    <span class="input-group-text f29 f29num" id="basic-addon2 ">-</span>
</div>
</div>

</div>

<!-- END Linea 45 -->
 <!-- Linea 46 -->
 <div class="col-9 f29span f29">

<span class="input-group-text f29" id="basic-addon4" >46 - Crédito  por  IVA restituido a aportantes sin domicilio ni residencia en Chile (Art. 83, del artículo primero Ley 20.712) </span>
    
</div>

<div class="col-3 f29span f29">

<div class="input-group mb-3 col-12 f29span">
    <div class="input-group-prepend">
        <span class="input-group-text f29 f29span f29num text-center" id="basic-addon4">757 </span>
    </div>
    <input type="text" value="0" class="form-control f29 f29inp" id="C757" name="C757" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onkeyup="format(this)" onchange="calcCreditos()"  onclick="modcont(this.id)">
    <div class="input-group-append">
    <span class="input-group-text f29 f29num" id="basic-addon2 ">-</span>
</div>
</div>

</div>

<!-- END Linea 46 -->
 <!-- Linea 47 -->
 <div class="col-9 f29span ">

<span class="input-group-text f29 f29bold" id="basic-addon4" >47 - TOTAL CRÉDITOS</span>
    
</div>

<div class="col-3 f29span">

    <div class="input-group-prepend">   

        <span class="input-group-text f29 f29span f29num text-center" id="basic-addon4">537 </span>
        <input type="text" value="0" class="form-control f29 f29inp" id="C537" name="C537" aria-describedby="basic-addon4" >
        <div class="input-group-append">
        <span class="input-group-text f29 f29num" id="basic-addon2 ">=</span>
    </div>
    </div> 

</div>
<!-- END Linea 47 -->
<hr>
<!-- Linea ~Sin numero -->
<div class="col-9 f29span ">

<span class="input-group-text f29 f29bold" id="basic-addon4" ></span>
    
</div>




<div class="col-3 f29span">

<span class="input-group-text f29 f29bold" id="basic-addon4" >IMPUESTO DETERMINADO</span>

</div>
 <!-- END Linea ~Sin numero -->


<!-- Linea 48 -->
<div class="col-4 f29span f29">

    <span class="input-group-text f29" id="basic-addon4" >48 - Remanente de crédito fiscal para el período siguiente</span>
    
</div>

<div class="col-3  f29span f29">

    <div class="input-group mb-3 col-12 f29span">
        <div class="input-group-prepend">
            <span class="input-group-text f29 f29span f29num" id="basic-addon4">77</span>
        </div>
        <input type="number" value="0" class="form-control f29 f29inp" id="C77" name="C77" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)"  >

    </div>
</div>

<div class="col-2 f29span f29">

    <span class="input-group-text f29" id="basic-addon4" >IVA determinado</span>
    
</div>

<div class="col-3 f29span f29">

<div class="input-group mb-3 col-12 f29span f29">
    <div class="input-group-prepend">
        <span class="input-group-text f29 f29span f29num" id="basic-addon4">89</span>
    </div>
    <input type="number" value="0" class="form-control f29 f29inp" id="C89"  name="C89" aria-describedby="basic-addon4"  OnBlur="green(this.id,this.value)" >
    <div class="input-group-append">
        <span class="input-group-text f29 f29num" id="basic-addon2 ">+</span>
    </div>
</div>

</div>
<!-- END Linea 48 -->
<!-- Linea 49 -->
<div class="col-9 f29span f29">

<span class="input-group-text f29" id="basic-addon4" >49 - Restitución de devolución por concepto de Art. 27 ter D.L. 825, de 1974, inc. 2° (Ley N° 20.720)</span>
    
</div>

<div class="col-3 f29span f29">

<div class="input-group mb-3 col-12 f29span">
    <div class="input-group-prepend">
        <span class="input-group-text f29 f29span f29num text-center" id="basic-addon4">760 </span>
    </div>
    <input type="text" value="0" class="form-control f29 f29inp" id="C760" name="C760" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onkeyup="format(this)" onchange="calcimpto()"  onclick="modcont(this.id)" >
    <div class="input-group-append">
    <span class="input-group-text f29 f29num" id="basic-addon2 ">+</span>
</div>
</div>

</div>

<!-- END Linea 49 -->
<!-- Linea 50-->
<div class="col-9 f29span f29">

<span class="input-group-text f29" id="basic-addon4" >50 - Retención Impuesto Primera Categoría por rentas de capitales mobiliarios del Art.20 N°2, según Art.73 LIR</span>
    
</div>

<div class="col-3 f29span f29">

<div class="input-group mb-3 col-12 f29span">
    <div class="input-group-prepend">
        <span class="input-group-text f29 f29span f29num text-center" id="basic-addon4">50 </span>
    </div>
    <input type="text" value="0" class="form-control f29 f29inp" id="C50" name="C50" aria-describedby="basic-addon4"  OnBlur="green(this.id,this.value)" onkeyup="format(this)" onchange="calcimpto()"  onclick="modcont(this.id)">
    <div class="input-group-append">
    <span class="input-group-text f29 f29num" id="basic-addon2 ">+</span>
</div>
</div>

</div>

<!-- END Linea 50 -->

<!-- Linea 51 -->
<div class="col-4 f29span f29">

    <span class="input-group-text f29" id="basic-addon4" >51 - Retención Impuesto Único a los Trabajadores, según Art. 74 N° 1 LIR </span>
    
</div>

<div class="col-3  f29span f29">

    <div class="input-group mb-3 col-12 f29span">
        <div class="input-group-prepend">
            <span class="input-group-text f29 f29span f29num" id="basic-addon4">751</span>
        </div>
        <input type="text" value="0" class="form-control f29 f29inp" id="C751" name="C751" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)"  onclick="modcont(this.id)">
        <div class="input-group-prepend">
            <span class="input-group-text f29 f29span f29num" id="basic-addon4">735</span>
        </div>
        <input type="text" value="0" class="form-control f29 f29inp" id="C735" name="C735" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)"  onclick="modcont(this.id)">
    </div>
</div>

<div class="col-2 f29span f29">

    <span class="input-group-text f29" id="basic-addon4" >Impuesto Único 2da. Categoría a Pagar</span>
    
</div>

<div class="col-3 f29span f29">

<div class="input-group mb-3 col-12 f29span f29">
    <div class="input-group-prepend">
        <span class="input-group-text f29 f29span f29num" id="basic-addon4">48</span>
    </div>
    <input type="text" value="0" class="form-control f29 f29inp" id="C48"  name="C48" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onkeyup="format(this)" onchange="calcimpto()"  onclick="modcont(this.id)" >
    <div class="input-group-append">
        <span class="input-group-text f29 f29num" id="basic-addon2 ">+</span>
    </div>
</div>

</div>
<!-- END Linea 51 -->

<!-- Linea 52-->
<div class="col-9 f29span f29">

<span class="input-group-text f29" id="basic-addon4" >52 - Retención de Impuesto con tasa del 10% sobre las rentas del Art. 42 N°2, según Art. 74 N°2  LIR </span>
    
</div>

<div class="col-3 f29span f29">

<div class="input-group mb-3 col-12 f29span">
    <div class="input-group-prepend">
        <span class="input-group-text f29 f29span f29num text-center" id="basic-addon4">151 </span>
    </div>
    <input type="text" value="0" class="form-control f29 f29inp" id="C151" name="C151" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onkeyup="format(this)" onchange="calcimpto()"  onclick="modcont(this.id)">
    <div class="input-group-append">
    <span class="input-group-text f29 f29num" id="basic-addon2 ">+</span>
</div>
</div>

</div>

<!-- END Linea 52 -->
<!-- Linea 53-->
<div class="col-9 f29span f29">

<span class="input-group-text f29" id="basic-addon4" >53 - Retención de Impuesto con tasa del 10% sobre las rentas del Art. 48, según Art. 74 N°3 LIR </span>
    
</div>

<div class="col-3 f29span f29">

<div class="input-group mb-3 col-12 f29span">
    <div class="input-group-prepend">
        <span class="input-group-text f29 f29span f29num text-center" id="basic-addon4">153 </span>
    </div>
    <input type="text" value="0" class="form-control f29 f29inp" id="C153" name="C153" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onkeyup="format(this)" onchange="calcimpto()"  onclick="modcont(this.id)" >
    <div class="input-group-append">
    <span class="input-group-text f29 f29num" id="basic-addon2 ">+</span>
</div>
</div>

</div>

<!-- END Linea 53 -->
<!-- Linea 54-->
<div class="col-9 f29span f29">

<span class="input-group-text f29" id="basic-addon4" >54 - Retención a Suplementeros, según Art. 74 N° 5  (tasa 0,5%) LIR</span>
    
</div>

<div class="col-3 f29span f29">

<div class="input-group mb-3 col-12 f29span">
    <div class="input-group-prepend">
        <span class="input-group-text f29 f29span f29num text-center" id="basic-addon4">54 </span>
    </div>
    <input type="text" value="0" class="form-control f29 f29inp" id="C54" name="C54" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onkeyup="format(this)" onchange="calcimpto()"  onclick="modcont(this.id)">
    <div class="input-group-append">
    <span class="input-group-text f29 f29num" id="basic-addon2 ">+</span>
</div>
</div>

</div>

<!-- END Linea 54 -->
<!-- Linea 55-->
<div class="col-9 f29span f29">

<span class="input-group-text f29" id="basic-addon4" >55 - Retención por compra de productos mineros, según Art. 74 N° 6 LIR</span>
    
</div>

<div class="col-3 f29span f29">

<div class="input-group mb-3 col-12 f29span">
    <div class="input-group-prepend">
        <span class="input-group-text f29 f29span f29num text-center" id="basic-addon4">56 </span>
    </div>
    <input type="text" value="0" class="form-control f29 f29inp" id="C56" name="C56" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onkeyup="format(this)" onchange="calcimpto()"  onclick="modcont(this.id)" >
    <div class="input-group-append">
    <span class="input-group-text f29 f29num" id="basic-addon2 ">+</span>
</div>
</div>

</div>

<!-- END Linea 55 -->
<!-- Linea 56-->
<div class="col-9 f29span f29">

<span class="input-group-text f29" id="basic-addon4" >56 - Retención sobre cantidades pagadas en cumplimiento de Seguros Dotales del Art.17, N°3  (tasa 15%)</span>
    
</div>

<div class="col-3 f29span f29">

<div class="input-group mb-3 col-12 f29span">
    <div class="input-group-prepend">
        <span class="input-group-text f29 f29span f29num text-center" id="basic-addon4">588 </span>
    </div>
    <input type="text" value="0" class="form-control f29 f29inp" id="C588" name="C588" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onkeyup="format(this)" onchange="calcimpto()"  onclick="modcont(this.id)" >
    <div class="input-group-append">
    <span class="input-group-text f29 f29num" id="basic-addon2 ">+</span>
</div>
</div>

</div>

<!-- END Linea 56 -->
<!-- Linea 57-->
<div class="col-9 f29span f29">

<span class="input-group-text f29" id="basic-addon4" >57 - Retención sobre retiros de Ahorro Previsional Voluntario del Art. 42 bis LIR (tasa 15%)</span>
    
</div>

<div class="col-3 f29span f29">

<div class="input-group mb-3 col-12 f29span">
    <div class="input-group-prepend">
        <span class="input-group-text f29 f29span f29num text-center" id="basic-addon4">589 </span>
    </div>
    <input type="text" value="0" class="form-control f29 f29inp" id="C589" name="C589" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onkeyup="format(this)" onchange="calcimpto()"  onclick="modcont(this.id)">
    <div class="input-group-append">
    <span class="input-group-text f29 f29num" id="basic-addon2 ">+</span>
</div>
</div>

</div>

<!-- END Linea 57 -->


<!-- Linea sin N° X-->
<div class="col-3 f29span f29">

    <span class="input-group-text f29" id="basic-addon4" >Acogido a suspensión PPM (Art 1º bis Ley 19.420 y 1º bis Ley 19.606</span>
    
    
</div>

<div class="col-6 f29span f29">




           
           <div class="input-group-prepend">



                        <div class="col-3 f29span f29">
                            <div class="input-group-prepend">
                                 <span class="input-group-text f29" id="basic-addon4" >Monto Pérdida Art. 90 </span>
                                
                            </div>
                        </div>
                        <div class="col-3 f29span f29">
                            <div class="input-group-prepend">
                                 <span class="input-group-text f29" id="basic-addon4" >Base Imponible </span>
                                
                            </div>
                        </div>
                        <div class="col-3 f29span f29">
                            <div class="input-group-prepend">
                                 <span class="input-group-text f29" id="basic-addon4" >Tasa</span>
                                
                            </div>
                        </div>
                        <div class="col-3 f29span f29">
                            <div class="input-group-prepend">
                                 <span class="input-group-text f29" id="basic-addon4" >Crédito/Tope Suspención PPM </span>
                                
                            </div>
                        </div>




                
           </div>
           
                
           

    
               
        
        
  

        

</div>


<div class="col-3 f29span f29">

    <span class="input-group-text f29" id="basic-addon4" >PPM Neto Determinado</span>
    

</div>

<!-- END Linea x -->




<!-- Linea sin N° 58-->
<div class="col-3 f29span f29">

    <span class="input-group-text f29" id="basic-addon4" >58 - 1ra. Categoría Art. 84 a) </span>
    
    
</div>

<div class="col-6 f29span f29">




           
           <div class="input-group-prepend">

                        <div class="col-3 f29span f29">
                            <div class="input-group-prepend">
                                <span class="input-group-text f29 f29span f29num text-center" id="basic-addon4">30 </span>
                                <input type="text" value="0" class="form-control f29 f29inp" id="C30" name="C30" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onkeyup="format(this)"  onclick="modcont(this.id)" >
                            </div>
                        </div>


                        <div class="col-3 f29span f29">
                            <div class="input-group-prepend">
                                <span class="input-group-text f29 f29span f29num text-center" id="basic-addon4">563 </span>
                                <input type="text" value="0" class="form-control f29 f29inp" id="C563" name="C563" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)"  onkeyup="format(this)" onchange="calcimpto()" onclick="modcont(this.id)" >
                            </div>
                        </div>


                        <div class="col-3 f29span f29">
                            <div class="input-group-prepend">
                                <span class="input-group-text f29 f29span f29num text-center" id="basic-addon4">115 </span>
                                <input type="number" value="0" step=".01" class="form-control f29 f29inp" id="C115" name="C115" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onchange="calcimpto()"  onclick="modcont(this.id)" >
                            </div>
                        </div>

                        <div class="col-3 f29span f29">
                            <div class="input-group-prepend">
                                <span class="input-group-text f29 f29span f29num text-center" id="basic-addon4">68 </span>
                                <input type="text" value="0" class="form-control f29 f29inp" id="C68" name="C68" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onkeyup="format(this)" onchange="calcimpto()"  onclick="modcont(this.id)" >
                            </div>
                        </div>

           </div>
 </div>


<div class="col-3 f29span f29">

                    <div class="input-group-prepend">
                        <span class="input-group-text f29 f29span f29num text-center" id="basic-addon4">62  </span>
                        <input type="text"  value="0" class="form-control f29 f29inp" id="C62" name="C62" aria-describedby="basic-addon4" OnBlur="greenStrings(this.id,this.value)" >
                        <span class="input-group-text f29 f29num" id="basic-addon2 ">+</span>
                    </div>
    

</div>

<!-- END Linea sin 58 -->

<!-- Linea sin N° 59-->
<div class="col-3 f29span f29">

    <span class="input-group-text f29" id="basic-addon4" >59 - Mineros Art. 84 a)</span>
    
    
</div>

<div class="col-6 f29span f29">




           
           <div class="input-group-prepend">

                        <div class="col-3 f29span f29">
                            <div class="input-group-prepend">
                                <span class="input-group-text f29 f29span f29num text-center" id="basic-addon4">565 </span>
                                <input type="text" value="0" class="form-control f29 f29inp" id="C565" name="C565" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onkeyup="format(this)"  onclick="modcont(this.id)" >
                            </div>
                        </div>


                        <div class="col-3 f29span f29">
                            <div class="input-group-prepend">
                                <span class="input-group-text f29 f29span f29num text-center" id="basic-addon4">120 </span>
                                <input type="text" value="0" class="form-control f29 f29inp" id="C120" name="C120" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)"  onkeyup="format(this)" onchange="calcimpto()" onclick="modcont(this.id)" >
                            
                            </div>
                        </div>


                        <div class="col-3 f29span f29">
                            <div class="input-group-prepend">
                                <span class="input-group-text f29 f29span f29num text-center" id="basic-addon4">542 </span>
                                <input type="number" value="0" step=".01" class="form-control f29 f29inp" id="C542" name="C542" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)"   onchange="calcimpto()" onclick="modcont(this.id)">
                            </div>
                        </div>

                        <div class="col-3 f29span f29">
                            <div class="input-group-prepend">
                                <span class="input-group-text f29 f29span f29num text-center" id="basic-addon4">122 </span>
                                <input type="text" value="0" class="form-control f29 f29inp" id="C122"  name="C122" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onkeyup="format(this)" onchange="calcimpto()" onclick="modcont(this.id)">
                            </div>
                        </div>

           </div>
 </div>


<div class="col-3 f29span f29">

                    <div class="input-group-prepend">
                        <span class="input-group-text f29 f29span f29num text-center" id="basic-addon4">123  </span>
                        <input type="text" value="0" class="form-control f29 f29inp" id="C123"  name="C123" aria-describedby="basic-addon4" OnBlur="greenStrings(this.id,this.value)">
                        <span class="input-group-text f29 f29num" id="basic-addon2 ">+</span>
                    </div>
    

</div>

<!-- END Linea sin 59 -->

<!-- Linea sin N° 60-->
<div class="col-3 f29span f29">

    <span class="input-group-text f29" id="basic-addon4" >60 - Explotador Minero Art. 84 h) </span>
    
    
</div>

<div class="col-6 f29span f29">




           
           <div class="input-group-prepend">

                        <div class="col-3 f29span f29">
                            <div class="input-group-prepend">
                                <span class="input-group-text f29 f29span f29num text-center" id="basic-addon4">700 </span>
                                <input type="text" value="0" class="form-control f29 f29inp" id="C700" name="C700" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onkeyup="format(this)"  onclick="modcont(this.id)" >
                            </div>
                        </div>


                        <div class="col-3 f29span f29">
                            <div class="input-group-prepend">
                                <span class="input-group-text f29 f29span f29num text-center" id="basic-addon4">701 </span>
                                <input type="text" value="0" class="form-control f29 f29inp" id="C701" name="C701" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onkeyup="format(this)" onchange="calcimpto()" onclick="modcont(this.id)" >
                            </div>
                        </div>


                        <div class="col-3 f29span f29">
                            <div class="input-group-prepend">
                                <span class="input-group-text f29 f29span f29num text-center" id="basic-addon4">702 </span>
                                <input type="number" value="0" step=".01" class="form-control f29 f29inp" id="C702" name="C702" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onchange="calcimpto()"  onclick="modcont(this.id)" >
                            </div>
                        </div>

                        <div class="col-3 f29span f29">
                            <div class="input-group-prepend">
                                <span class="input-group-text f29 f29span f29num text-center" id="basic-addon4">711 </span>
                                <input type="text" value="0" class="form-control f29 f29inp" id="C711" name="C711" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onkeyup="format(this)" onchange="calcimpto()"   onclick="modcont(this.id)" >
                            </div>
                        </div>

           </div>
 </div>


<div class="col-3 f29span f29">

                    <div class="input-group-prepend">
                        <span class="input-group-text f29 f29span f29num text-center" id="basic-addon4">703  </span>
                        <input type="text" value="0" class="form-control f29 f29inp" id="C703" name="C703" aria-describedby="basic-addon4" OnBlur="greenStrings(this.id,this.value)" >
                        <span class="input-group-text f29 f29num" id="basic-addon2 ">+</span>
                    </div>
    

</div>

<!-- END Linea sin 60 -->

<!-- Linea 61-->
<div class="col-9 f29span f29">

<span class="input-group-text f29" id="basic-addon4" >61 - Transportistas acogidos a Renta Presunta, Art. 84, e) y f) (tasa de 0,3%)</span>
    
</div>

<div class="col-3 f29span f29">

<div class="input-group mb-3 col-12 f29span">
    <div class="input-group-prepend">
        <span class="input-group-text f29 f29span f29num text-center" id="basic-addon4">66 </span>
    </div>
    <input type="text" value="0" class="form-control f29 f29inp" id="C66" name="C66" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onkeyup="format(this)" onchange="calcimpto()"  onclick="modcont(this.id)" >
    <div class="input-group-append">
    <span class="input-group-text f29 f29num" id="basic-addon2 ">+</span>
</div>
</div>

</div>

<!-- END Linea 611 -->

<!-- Linea 62-->
<div class="col-3 f29span f29">

<span class="input-group-text f29" id="basic-addon4" >62 - Crédito Capacitación, Ley 19.518/97 </span>
    
</div>

<div class="col-9 f29span f29">

    
        <div class="input-group-prepend">
            <span class="input-group-text f29 f29bold" id="basic-addon4" >DECLARAR  POR  INTERNET </span>
            <span class="input-group-text f29 f29num" id="basic-addon2 ">-</span>
        </div>
    
</div>



<!-- END Linea 62 -->




<!-- Linea 63-->
<div class="col-9 f29span f29">

<span class="input-group-text f29" id="basic-addon4" >63 - 2da. Categoría Art. 84, b) (tasa 10%)</span>
    
</div>

<div class="col-3 f29span f29">

<div class="input-group mb-3 col-12 f29span">
    <div class="input-group-prepend">
        <span class="input-group-text f29 f29span f29num text-center" id="basic-addon4">152 </span>
    </div>
    <input type="text" value="0" class="form-control f29 f29inp" id="C152" name="C152" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onkeyup="format(this)" onchange="calcimpto()"  onclick="modcont(this.id)" >
    <div class="input-group-append">
    <span class="input-group-text f29 f29num" id="basic-addon2 ">+</span>
</div>
</div>

</div>

<!-- END Linea 63 -->


<!-- Linea 64-->
<div class="col-9 f29span f29">

<span class="input-group-text f29" id="basic-addon4" >64 - Taller artesanal Art. 84, c) (tasa de 1,5% o 3%)</span>
    
</div>

<div class="col-3 f29span f29">

<div class="input-group mb-3 col-12 f29span">
    <div class="input-group-prepend">
        <span class="input-group-text f29 f29span f29num text-center" id="basic-addon4">70 </span>
    </div>
    <input type="text" value="0" class="form-control f29 f29inp" id="C70" name="C70" aria-describedby="basic-addon4"  OnBlur="green(this.id,this.value)" onkeyup="format(this)" onchange="calcimpto()"  onclick="modcont(this.id)">
    <div class="input-group-append">
    <span class="input-group-text f29 f29num" id="basic-addon2 ">+</span>
</div>
</div>

</div>

<!-- END Linea 64 -->

<hr>


<!-- Linea 65-->
<div class="col-9 f29span f29">

<span class="input-group-text f29 f29bold" id="basic-addon4" >65 - SUB TOTAL IMPUESTO DETERMINADO ANVERSO. (Suma de las líneas 49 a 64, columna Impuesto y/o PPM determinado)</span>
    
</div>

<div class="col-3 f29span f29">

<div class="input-group mb-3 col-12 f29span">
    <div class="input-group-prepend">
        <span class="input-group-text f29 f29span f29bold f29num text-center" id="basic-addon4">595 </span>
    </div>
    <input type="number" value="0"  class="form-control f29 f29inp" id="C595" name="C595" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onclick="modcont(this.id)" >
    <div class="input-group-append">
    <span class="input-group-text f29 f29num f29bold" id="basic-addon2 ">=</span>
</div>
</div>

</div>

<!-- END Linea 65 -->

<hr>

<!-- Linea datos personales-->
<div class="col-6 f29span f29">
    <div class="input-group-prepend">
        <span class="input-group-text f29 f29span f29bold f29num text-center" id="basic-addon4">01 </span>
        <span class="input-group-text f29 f29bold" id="basic-addon4" >Apellido Paterno o Razón Social</span>
    </div>
</div>

<div class="col-3 f29span f29">
    <div class="input-group-prepend">
        <span class="input-group-text f29 f29span f29bold f29num text-center" id="basic-addon4">02 </span>
        <span class="input-group-text f29 f29bold" id="basic-addon4" >Apellido Materno</span>
    </div>
</div>

<div class="col-3 f29span f29">
    <div class="input-group-prepend">
        <span class="input-group-text f29 f29span f29bold f29num text-center" id="basic-addon4">05 </span>
        <span class="input-group-text f29 f29bold" id="basic-addon4" >Nombres</span>
    </div>
</div>
<!-- END Linea datos personales -->

<!-- Linea datos personales valores-->
<div class="col-6 f29span f29">
    <div class="input-group-prepend">
    <input type="text" placeholder = "Apellido Paterno o Razón Social" class="form-control f29 f29inp" id="C1"  name="C1" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)"  onclick="modcont(this.id)" >
    </div>
</div>

<div class="col-3 f29span f29">
<div class="input-group-prepend">
    <input type="text" placeholder = "Apellido Materno" class="form-control f29 f29inp" id="C2" name="C2" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)"  onclick="modcont(this.id)" >
    </div>
</div>

<div class="col-3 f29span f29">
<div class="input-group-prepend">
    <input type="text" placeholder = "Nombres" class="form-control f29 f29inp" id="C5" name="C5" aria-describedby="basic-addon4"  OnBlur="green(this.id,this.value)"  onclick="modcont(this.id)">
    </div>
</div>
<!-- END Linea datos personales valores -->

<div class="col-12 f29span f29">

    <div class="col-6 f29span f29">
        <div class="input-group-prepend">
            <span class="input-group-text f29 f29bold" id="basic-addon4" >Cambia datos de Domicilio</span>
            <span class="input-group-text f29 f29span f29bold f29num text-center" id="basic-addon4">583 </span>
            <input type="text" placeholder = "(Si marca con X el casillero, registre los cambios al reverso)" class="form-control f29 f29inp" id="C583" name="C583" aria-describedby="basic-addon4" OnBlur="green(this.id,this.value)" onclick="modcont(this.id)" >
        </div>
    </div>

</div>

<hr>

<div class="input-group col-12 f29span f29">
  <div class="input-group-prepend col align-self-end">
    
  </div>

  <span class="input-group-text f29 f29bold" id="basic-addon3" style="width: 300px;font-weight: bold;">119 - TOTAL A PAGAR EN PLAZO LEGAL </span><br>
  <span class="input-group-text f29 f29span f29bold f29num text-center" id="basic-addon3" style="width: 60px;">91</span>
  <input type="number" value="0" class="form-control f29 f29inp" id="C91" name="C91" aria-describedby="basic-addon3" OnBlur="green(this.id,this.value)"  onclick="modcont(this.id)">
  <span class="input-group-text f29 f29num f29bold" id="basic-addon2 ">=</span>
</div>

<div class="input-group col-12 f29span f29">
  <div class="input-group-prepend col align-self-end">
    
  </div>

  <span class="input-group-text f29 f29bold" id="basic-addon3" style="width: 300px;font-weight: bold;">120 - Más IPC</span><br>
  <span class="input-group-text f29 f29span f29bold f29num text-center" id="basic-addon3" style="width: 60px;">92</span>
  <input type="number" value="0" class="form-control f29 f29inp" id="C92" name="C92" aria-describedby="basic-addon3" OnBlur="green(this.id,this.value)" OnBlur="green(this.id,this.value)" onkeyup="calcularHojauno()" onclick="modcont(this.id)">
  <span class="input-group-text f29 f29num f29bold" id="basic-addon2 ">+</span>
</div>

<div class="input-group col-12 f29span f29">
  <div class="input-group-prepend col align-self-end">
    
  </div>

  <span class="input-group-text f29 f29bold" id="basic-addon3" style="width: 300px;font-weight: bold;">121 - Más Intereses y multas </span><br>
  <span class="input-group-text f29 f29span f29bold f29num text-center" id="basic-addon3" style="width: 60px;">93</span>
  <input type="number" value="0" class="form-control f29 f29inp" id="C93" name="C93" aria-describedby="basic-addon3" OnBlur="green(this.id,this.value)" OnBlur="green(this.id,this.value)" onkeyup="calcularHojauno()" onclick="modcont(this.id)">
  <span class="input-group-text f29 f29num f29bold" id="basic-addon2 ">+</span>
</div>


<div class="input-group col-12 f29span f29">
  <div class="input-group-prepend col align-self-end">
    
  </div>

  <span class="input-group-text f29 f29bold" id="basic-addon3" style="width: 300px;font-weight: bold;">122 -  TOTAL A PAGAR CON RECARGO </span><br>
  <span class="input-group-text f29 f29span f29bold f29num text-center" id="basic-addon3" style="width: 60px;">94</span>
  <input type="number" value="0" class="form-control f29 f29inp" id="C94" name="C94" aria-describedby="basic-addon3" OnBlur="green(this.id,this.value)" OnBlur="green(this.id,this.value)" onkeyup="calcularHojauno()" onclick="modcont(this.id)">
  <span class="input-group-text f29 f29num f29bold" id="basic-addon2 ">=</span>
</div>
<hr>
</div>

<div class="col-12 text-center">
    <input type="submit" class="btn btn-outline-success" id="btnAc" name="btnAc" value="Modificar Formulario" >                                         
  </div>

