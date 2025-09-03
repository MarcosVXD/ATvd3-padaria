<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Contato - Chico Panificadora</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background: #f7f7f7;
      color: #333;
    }
    header {
      background: #f9c513;
      color: #333;
      text-align: center;
      padding: 15px;
      font-weight: bold;
      font-size: 20px;
    }
    .conteudo {
      max-width: 500px;
      margin: 40px auto;
      padding: 20px;
      background: white;
      border-radius: 10px;
    }
    .conteudo h1 {
      color: #f9c513;
      text-align: center;
      margin-bottom: 20px;
    }
    form {
      display: flex;
      flex-direction: column;
    }
    label {
      margin: 10px 0 5px;
      font-weight: bold;
    }
    input {
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 16px;
    }
    button {
      margin-top: 20px;
      padding: 12px;
      background: #f9c513;
      border: none;
      border-radius: 6px;
      font-weight: bold;
      font-size: 16px;
      cursor: pointer;
    }
    button:hover {
      background: #e6b90e;
    }
    footer {
      background: #f9c513;
      color: #333;
      text-align: center;
      padding: 10px;
      margin-top: 40px;
    }
  </style>
</head>
<body>
  <header>
    CHICO PANIFICADORA
  </header>

  <div class="conteudo">
    <h1>Entre em Contato</h1>
    <form>
      <label for="nome">Nome:</label>
      <input type="text" id="nome" name="nome" required>

      <label for="email">E-mail:</label>
      <input type="email" id="email" name="email" required>

      <label for="telefone">Telefone:</label>
      <input type="tel" id="telefone" name="telefone" placeholder="(00) 00000-0000" required>

      <button type="submit">Enviar</button>
    </form>
  </div>

  <footer>
    © 2025 — Chico Panificadora | Estamos prontos para te atender
  </footer>
</body>
</html>