console.log("corecto");

window.onload = function() {
    var boton = document.getElementById('botonVerMas');
    boton. addEventListener("click", traerDatos);

    function traerDatos(){
        const xhttp = new XMLHttpRequest();
        xhttp.open('GET', '/js/cars.json', true);
        xhttp.send();
        xhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                console.log(this.responseText);
                let datos = JSON.parse(this.responseText);
                let contadorLabel = 7;
                let contadorData = 6;
                let res = document.getElementById("carusel");
                console.log(datos);
                for(let item of datos){
                    console.log(item);
                    res.innerHtml += `
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to=${contadorData} aria-label="Slide ${contadorLabel}"></button>
                    </div>
                    `
                    contadorData++;
                    contadorLabel++;
                } 
                for(let item of datos){
                    res.innerHTML += `  
                    <div class="carousel-inner">
                        <div class="carousel-item">
                            <div class="overlay"></div>
                            <img src=${item.imagen} class=" d-block w-100 h-100" alt="...">
                            <div class="carousel-caption">
                                <h5>${item.nombre}</h5>
                                <p>${item.descripcion}</p>
                                <button type="button" class="btn btn-outline-light" onclick="window.location='{{ url("/automovil/detalle") }}'">Ver vehículo</button>
                            </div>
                        </div>
                    </div>
                    `
                } 
            }
        }
    }
}