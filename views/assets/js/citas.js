// Función para validar la hora antes de enviar el formulario
$('#formularioCita').submit(function (e) {
    e.preventDefault();
    var horaSeleccionada = document.getElementById('horaInicio').value;

    // Realiza la validación en el lado del cliente
    var resultadoValidacion = validarHora(horaSeleccionada);

    if (resultadoValidacion.valida) {
        // La hora es válida, puedes enviar el formulario
        var nombre = $('#nombre').val();
        var correo = $('#correo').val();
        var telefono = $('#telefono').val();
        var fecha = $('#fecha').val();
        var horaInicio = $('#horaInicio').val();
        var horaFin = $('#horaFin').val();
        var servicio = $('#servicio').val();
        var id_estilista = $('#id_estilista').val();
        {
            // Realizar la solicitud AJAX 
            $.ajax({
                url: '../controllers/agendar_cita.php',
                type: 'POST',
                data: {
                    nombreCliente: nombre,
                    correoCliente: correo,
                    telefono: telefono,
                    fechaCita: fecha,
                    horaInicio: horaInicio,
                    horaFin: horaFin,
                    servicio: servicio,
                    id_estilista:id_estilista
                },
                
                success: function (response) {
                    if (response.startsWith('Error')) {
                        Swal.fire('Cita', response, 'error');
                    } else {
                        Swal.fire('Cita', response, 'success');                        
                    }
                },
                error: function (xhr, status, error) {
                    Swal.fire('Error', 'Hubo un error al procesar la solicitud', 'error');
                },
            });
            document.getElementById("formularioCita").reset();   
        }
    } else {
        // La hora no es válida, muestra un mensaje de error con SweetAlert
        mostrarMensajeError(resultadoValidacion.mensaje);
    }

});

// Función para validar la hora (puedes ajustar los criterios según tus necesidades)
function validarHora(horaInicio) {
    // Define las horas de operación del negocio y las horas de almuerzo
    var horaApertura = '09:00';
    var horaCierre = '18:00';
    var horaInicioAlmuerzo = '12:00';
    var horaFinAlmuerzo = '13:00';

    // Convierte las cadenas de hora a objetos Date para facilitar las comparaciones
    var horaSeleccionadaDate = new Date('2023-01-01 ' + horaInicio);
    var horaAperturaDate = new Date('2023-01-01 ' + horaApertura);
    var horaCierreDate = new Date('2023-01-01 ' + horaCierre);
    var horaInicioAlmuerzoDate = new Date('2023-01-01 ' + horaInicioAlmuerzo);
    var horaFinAlmuerzoDate = new Date('2023-01-01 ' + horaFinAlmuerzo);

    // Verifica si la hora seleccionada está dentro de las horas de operación y fuera del tiempo de almuerzo
    if (horaSeleccionadaDate >= horaAperturaDate && horaSeleccionadaDate <= horaCierreDate) {
        if (horaSeleccionadaDate < horaInicioAlmuerzoDate || horaSeleccionadaDate > horaFinAlmuerzoDate) {
            // La hora es válida
            return { valida: true };
        } else {
            // La hora está durante el tiempo de almuerzo
            return { valida: false, mensaje: 'Disculpe las citas no están permitidas durante el tiempo de almuerzo' };
        }
    } else {
        // La hora está fuera del horario de trabajo
        return { valida: false, mensaje: 'Disculpe las citas solo están permitidas entre ' + horaApertura + ' y ' + horaCierre };
    }
}

// Función para mostrar mensaje de error con SweetAlert
function mostrarMensajeError(mensaje) {
    Swal.fire({
        icon: 'error',
        title: 'Error',
        text: mensaje,
    }); 
}


cargarEstilistas();
function cargarEstilistas() {
    $.ajax({
        type: 'GET',
        url: '../controllers/obtener_estilista.php', 
        dataType: 'json', 
        success: function(estilistas) {
            
            $('#id_estilista').empty();

            // opciones al select
            estilistas.forEach(function(estilista) {
                $('#id_estilista').append('<option value="' + estilista.id_estilista + '">' + estilista.nombre_estilista + '</option>');
            });
        },
        error: function(xhr, status, error) {
            console.error('Error al cargar los estilistas:', error);
            
            Swal.fire('Error', 'Hubo un error al cargar los estilistas', 'error');
        }
    });
}


function mostrarAlertaExito() {
    Swal.fire({
        icon: 'success',
        title: '¡Inicio de sesión exitoso!',
        text: 'Ahora estás en la página principal',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'OK'
    });
}


var carrito = [];
var total = 0;

function agregarAlCarrito(nombre, precio) {
    carrito.push({ nombre, precio });
    total += precio;
    actualizarCarrito();
    mostrarAlerta(`Se ha agregado "${nombre}" al carrito`);
}

function quitarDelCarrito(nombre, precio) {
    carrito = carrito.filter(item => item.nombre !== nombre);
    total -= precio;
    actualizarCarrito();
    mostrarAlerta(`Se ha quitado "${nombre}" del carrito`);
}

function mostrarCarrito() {
    if (carrito.length === 0) {
        mostrarAlerta('El carrito está vacío');
    } else {
        var contenidoCarrito = carrito.map(item => `
            ${item.nombre} - $${item.precio.toFixed(2)}
            <button onclick="quitarDelCarrito('${item.nombre}', ${item.precio})" type="button" class="btn btn-outline-danger">Quitar</button>
            <br>`).join('');

        var sumaTotal = carrito.reduce((total, item) => total + item.precio, 0).toFixed(2);

        Swal.fire({
            title: 'Carrito de Compras',
            html: `${contenidoCarrito}<br><br>Total: $${sumaTotal}`,
            icon: 'info',
            confirmButtonText: 'Cerrar'
        });
    }
}

function mostrarAlerta(mensaje) {
    Swal.fire({
        icon: 'success',
        title: '¡Éxito!',
        text: mensaje,
        timer: 2000,
        timerProgressBar: true,
        showConfirmButton: false
    });
}

function actualizarCarrito() {
    var contadorCarrito = document.getElementById("carrito-contador");
    contadorCarrito.textContent = carrito.length.toString();
}

// Inicializa Owl Carousel después de que el documento esté cargado
document.addEventListener('DOMContentLoaded', function () {
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        loop: true,
        margin: 10,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 2,
                nav: false
            },
            1000: {
                items: 3,
                nav: true,
                loop: false
            }
        }
    });
});


    
