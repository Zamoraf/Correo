<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea correo</title> 
    <style>
        body {
            background-color: #FFF;
            font-family: Verdana ;
            font-size: 14px;
        }
        .contact {
            max-width: 450px;
            margin: 0 auto;
            padding: 15px;
            background-color: #E8C2CA;
            border-radius: 15px;     
        }
        .form-group {
            margin-bottom: 12px;
        }
        .form-control {
            width: 93%;
            padding: 15px;
            border-radius: 15px;
            background-color: #FFF;
            border: none ;
            font-family: Verdana;
            font-size: 14px;

        }
        #destinatarios input {
            margin-top: 15px;

        }
        button.btn-secondary {
            background-color: #735D78;
            color: #fff; 
            border: none;
            padding: 15px 20px;
            cursor: pointer;
            font-family: Verdana;
            font-size: 14px;
        }
        footer {
            background-color: #DCDCDC;
            color: #535353;
            padding: 20px; 
            text-align: center; 
            font-size: 10px;
        }

    </style>
</head>
<body><br>
    <form id="contact-form" class="contact" name="contact-form" method="post" action="enviar.php">
        <div class="form-group">
            <input type="text" name="nombre" class="form-control name-field" required="required" placeholder="Nombre">
        </div>
        <div class="form-group">
            <input type="email" name="email" class="form-control mail-field" required="required" placeholder="Email remitente">
        </div>
        <div class="form-group">
            <textarea name="mensaje" id="message" required="required" class="form-control" rows="8" placeholder="Mensaje"></textarea>
        </div>
        <div class="form-group">
            <label for="num_destinatarios"><br>Num. destinatario</label>
            <input type="number" id="num_destinatarios" name="num_destinatarios" min="1" required>
        </div>
        <div id="destinatarios"></div>
        <div class="form-group"><center><br>
        <button type="submit" class="btn btn-secondary">Enviar</button></center>
    </form></div>
    

<script>
document.addEventListener("DOMContentLoaded", function () {
    const numDestinatariosInput = document.getElementById("num_destinatarios");
    const destinatariosDiv = document.getElementById("destinatarios");

    numDestinatariosInput.addEventListener("input", function () {
        const numDestinatarios = parseInt(this.value, 10);
        destinatariosDiv.innerHTML = ""; // Limpiar campos anteriores

        for (let i = 1; i <= numDestinatarios; i++) {
            const emailInput = document.createElement("input");
            emailInput.type = "email";
            emailInput.name = "destinatario" + i;
            emailInput.required = true;
            emailInput.placeholder = "Destinatario " + i;
            destinatariosDiv.appendChild(emailInput);
        }
    });
});
</script><br>
<footer>
    <p>Fany Marily Zamora Moreno<br>Construccion de sistemas distribuidos <br> Otoño 2023 
    <br>Licenciatura en ingeniera en computacion<br>Ing. Ruben Peralta Gonzaga <br> UAMCC 
    <br>UATx<br></p>
</footer>
</body>
</html>
