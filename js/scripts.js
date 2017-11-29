function guardarm() {

    var nombre = document.getElementById("mascota").value;
    var paterno = document.getElementById("raza").value;
    var materno = document.getElementById("edad").value;

    var persona = {
        nombre: nombre,
        paterno: paterno,
        materno: materno
    }

    if (nombre != "") {
        if (paterno != "") {
            if (materno != "") {
                //agregar();

                personas.push(persona);
                document.formMascota.submit(persona);

                document.getElementById("mascota").value;
                document.getElementById("raza").value;
                document.getElementById("edad").value;

                console.log(personas);



            } else {
                alert("Falta llenar el campo de apellido materno");
            }
        } else {
            alert("Falta llenar el campo de apellido paterno");
        }
    } else {
        alert("Falta llenar el campo de nombre");
    }
};

var personas = [];
var prof = [];

function guardar() {

    var nombre = document.getElementById("nombre").value;
    var paterno = document.getElementById("apaterno").value;
    var materno = document.getElementById("amaterno").value;
    var telefono = document.getElementById("telefono").value;
    var correo = document.getElementById("email").value;
    var contrasenia = document.getElementById("password").value;
    var pcontrasenia = document.getElementById("cpassword").value;



    var persona = {
        nombre: nombre,
        paterno: paterno,
        materno: materno,
        correo: correo,
        telefono: telefono,
        contrasenia: contrasenia,
        pcontrasenia: pcontrasenia

    }

    if (nombre != "") {
        if (paterno != "") {
            if (materno != "") {
                if (correo != "") {
                    if (telefono != "") {
                        if (contrasenia != "") {
                            if (pcontrasenia != "") {
                                if (contrasenia == pcontrasenia) {
                                    //agregar();
                                    
                                    personas.push(persona);
                                    document.form.submit(persona);
                                    
                                    document.getElementById("nombre").value;
                                    document.getElementById("apaterno").value;
                                    document.getElementById("amaterno").value;
                                    document.getElementById("email").value;
                                    document.getElementById("telefono").value;
                                    document.getElementById("password").value;
                                    document.getElementById("cpassword").value;
                                    
                                    console.log(personas);
                                    
                                } else {
                                    alert("Estan mal las contraseñas");
                                }
                            } else {
                                alert("Falta llenar el campo confirmar contraseña");
                            }
                        } else {
                            alert("Falta llenar el campo de contraseña");
                        }
                    } else {
                        alert("Falta llenar el campo de telefono");
                    }
                } else {
                    alert("Falta llenar el campo de correo");
                }
            } else {
                alert("Falta llenar el campo de apellido materno");
            }
        } else {
            alert("Falta llenar el campo de apellido paterno");
        }
    } else {
        alert("Falta llenar el campo de nombre");
    }
};

var mascota = [];
var prof = [];

