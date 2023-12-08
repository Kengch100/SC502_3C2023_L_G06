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
            <button onclick="quitarDelCarrito('${item.nombre}', ${item.precio})">Quitar</button>
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