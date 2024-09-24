function dadosForm() {
  const form = document.querySelector("form");
  form.addEventListener("submit", async (event) => {
    event.preventDefault();
    const formData = new FormData(form);
    const params = new URLSearchParams(formData).toString();

    fetch(`./back-end/envio_dados.php?${params}`)
      .then((response) => response.json())
      .then((data) => {
        document.getElementById("media").innerText = `Média: ${data}`;
      })
      .catch((err) => console.log("Erro de solicitação", err));
  });
}

function eventos() {
  document.getElementById("btnCalcular").addEventListener("click", async () => {
    const primeiroCampo = (document.getElementById("nota1").value !== null) ? document.getElementById("nota1").value : 0;
    const segundoCampo = (document.getElementById("nota2").value !== null) ? document.getElementById("nota2").value : 0;
    const terceiroCampo = (document.getElementById("nota3").value !== null) ? document.getElementById("nota3").value : 0;

    const valido = await validaCampos(primeiroCampo,segundoCampo,terceiroCampo);
  });
}

function validaCampos(primeiroCampo,segundoCampo,terceiroCampo) {

  console.log(primeiroCampo);
  console.log(segundoCampo);
  console.log(terceiroCampo);
}

document.addEventListener("DOMContentLoaded", () => {
  dadosForm();
  eventos();
});
