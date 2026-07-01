fetch("https://api.exemplo.com/dados")
  .then(response => response.json())
  .then(data => {
    document.getElementById("resultado").innerHTML = "Nome: " + data.nome;
  })
  .catch(error => console.error("Erro:", error));
