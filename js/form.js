document.querySelector("#submit").addEventListener("click", e => {
  e.preventDefault();

  //INGRESE UN NUMERO DE WHATSAPP VALIDO AQUI:
  let telefono = "573148511171";

  let nombre = document.querySelector("#nombre").value;
  let direccion = document.querySelector("#direccion").value;
  let celular = document.querySelector("#celular").value;
  let mensaje = document.querySelector("#mensaje").value;
  let total = document.querySelector("#total").value;
  let pedido = document.querySelector("#pedido").value;
  /* let servicio = document.querySelector("#servicio").value; */
  let resp = document.querySelector("#respuesta");

  resp.classList.remove("fail");
  resp.classList.remove("send");

  let url = `https://api.whatsapp.com/send?phone=${telefono}&text=
		*Chateo Fast Food*%0A
		*Pedidos enlinea*%0A%0A
		*Nombre*%0A
		${nombre}%0A
		*¿Cuál es tu dirección exacta?*%0A
		${direccion}%0A
		*Numero de contacto*%0A
		${celular}%0A
		*¿Inquietud o petición?*%0A
		${mensaje}%0A
    *¿Pedido?*%0A
		${pedido}%0A
    *¿Total?*%0A
		${total}%0A`;

  if (nombre === "" || direccion === "" || celular === "") {
    resp.classList.add("fail");
    resp.innerHTML = `Faltan algunos datos, ${nombre}`;
    return false;
  }
  resp.classList.remove("fail");
  resp.classList.add("send");
  resp.innerHTML = `Se ha enviado tu reserva, ${nombre}`;

  window.open(url);
});
