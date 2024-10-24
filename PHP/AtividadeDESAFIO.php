<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<script>
const greetingMessage = () => {
    let h = new Date().toLocaleTimeString('pt-BR', {hour: 'numeric', hour12: false}); // formato 24 horas (0-23)
    if (h >= 0 && h <= 5) { 
      return '<p style='color:red'>Boa madrugada</p>';
    } else if (h >= 6 && h < 12) { 
      return '<p style='color:red'>Bom dia</p>';
    } else if (h >= 12 && h < 18) { 
      return '<p style='color:red'>Boa tarde</p>';
    } else if (h >= 18 && h <= 23) { 
      return '<p style='color:red'>Boa noite</p>';
    }
  }
  
  alert(greetingMessage());
  </script>
</body>
</html>