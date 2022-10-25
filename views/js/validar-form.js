// Referencias HTML
const camposGenerales = document.getElementsByClassName('form-control');
const codigoProducto = document.getElementById('codigo');
const cantidadProducto = document.getElementById('cantidad');
const btnAdd = document.getElementById('btnAdd');
const btnSubmit = document.getElementById('submit');
const divError = document.getElementById('error');
const previewFactura = document.getElementById('preview-factura');
const cuentaTotal = document.getElementById('cuenta-total');
const montoTotal = document.getElementById('monto-total');


btnAdd.addEventListener('click', (e) => {

    if (divError.hasChildNodes()) {
        divError.removeChild(divError.firstChild);
    }

    if (codigoProducto.value == '' || cantidadProducto.value == '') {
        divError.innerHTML = '<div class="alert alert-danger" role="alert">Por favor ingresa el código o la cantidad</div>';
    } else {
        const data = `<tr><td>${codigoProducto.value}</td><td>Algo</td><td>${cantidadProducto.value}</td><td>100 $</td></tr>`;
        previewFactura.innerHTML += data;
    }

});



btnSubmit.addEventListener('click', (e) => {
    for (let i = 0; i < camposGenerales.length; i++) {
        if (camposGenerales[i].value == '') {
            e.preventDefault;
            divError.innerHTML = '<div class="alert alert-danger" role="alert">Por favor rellena todos los campos</div>';
        }
        
    }
})
