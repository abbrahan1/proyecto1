$(document).ready(function(){
    $.ajax({
        url: "select.php",
        type: 'POST',
        success: function(response) {
            let  res = JSON.parse(response);
            console.log(res)
            res.forEach(dato => {
                // console.log(dato.idtarea);
                let tabla = `
                <div class="mostrar">
        <div class="text">
             <h4>${dato.nom}</h4>  
             <h4>${dato.email}</h4>
             <h4>${dato.contrasena}</h4>  
            </div>
        <div class="accion">
            <button class="edit"><a href='edit.php?q=${dato.autor_id}' id=${dato.autor_id}'>Editar</a></button>
            <button class="delete"><a href='eliminar.php?q=${dato.autor_id}'>Eliminar</a></button>
        </div>
    </div>`
                $('#tabla').append(tabla)
            });
        }})
})
        