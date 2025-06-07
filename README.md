<<<<<<< HEAD
# 💳 MASS-CC-CHECKER

Una herramienta web sencilla para verificar la validez de números de tarjetas de crédito. Utiliza HTML, CSS y Bootstrap para el front-end, y PHP para el back-end.

---

### 🪪 Autor y créditos
**Creado por Izan's Lab**  
🔸 Para el grupo **💳 ESCUELA BINS Y CCS SOLO AMIGOS 💸**  
🔸 Hecho solo con fines **educativos**

---

### ✨ Características
- Verifica la validez de tarjetas de crédito (formato `card_number|month|year|cvv`)
- Muestra tarjetas en estado: **Live**, **Dead**, o **Unknown**
- Actualización en tiempo real del conteo

---

### ⚙️ Instalación

1. Clona el repositorio:
   ```bash
   git clone https://github.com/IZANTAR/mass-cc-checker-Izans-Lab.git
   cd mass-cc-checker-Izans-Lab
   ```

2. Sube los archivos a un servidor que soporte PHP (ver más abajo).

---

### 🌐 Dónde alojarlo
Recomendaciones gratuitas:

- https://www.freehostia.com
- https://infinityfree.net

También puedes usar cualquier otro servidor compatible con PHP.

---

### 🧠 Uso

1. Ingresa las tarjetas en el formato:  
   ```
   1234567812345678|12|2026|123
   ```

2. Haz clic en el botón `START`

3. El sistema mostrará en tiempo real cuántas son:
   - ✅ **Live**
   - ❌ **Die**
   - ❓ **Unknown**

---

### 🧷 Advertencias

- ⚠️ Esto es solo con fines **educativos**
- ❌ **No vendas** este script, es 100% gratuito
- 🛑 El mal uso del script es responsabilidad del usuario

---

### 🤝 Contribuciones

¡Se aceptan pull requests! Si deseas mejorar la herramienta, puedes bifurcar este repositorio y enviar mejoras.

---

### 📬 Contacto

Para soporte o dudas, abre un [Issue](https://github.com/IZANTAR/mass-cc-checker-Izans-Lab/issues).

---

### 🏷️ Badges

![Version](https://img.shields.io/badge/version-2025-blue)
![Status](https://img.shields.io/badge/status-active-brightgreen)
![License](https://img.shields.io/badge/license-free-lightgrey)

---

> © 2025 por Izan's Lab • Grupo 💳 ESCUELA BINS Y CCS SOLO AMIGOS 💸

=======
# MASS-CC-CHECKER - Izan's Lab

### 💳 ESCUELA BINS Y CCS SOLO AMIGOS 💸

Herramienta desarrollada con fines **educativos y de aprendizaje**, especialmente pensada para estudiar integraciones de pasarelas de pago como **Braintree**.

---

## 🛠 Tecnologías utilizadas

* PHP 8+
* Braintree API (entorno sandbox)
* Bootstrap 5.3
* jQuery
* Composer (para dependencias)
* Python (opcional para servidor local)
* XAMPP / Termux (como entornos de despliegue)

---

## 🚀 Instalación local

### Opcion A: Usando XAMPP (Windows/Linux/Mac)

1. Clona el repositorio:

```bash
git clone https://github.com/IZANTAR/mass-cc-checker-Izans-Lab.git
```

2. Copia los archivos en `htdocs/` de XAMPP.
3. Arranca Apache desde el Panel de Control de XAMPP.
4. Accede desde tu navegador:

```
http://localhost/mass-cc-checker-Izans-Lab
```

### Opcion B: Usando Termux (Android)

```bash
pkg update && pkg upgrade
pkg install php git unzip
cd ~
git clone https://github.com/IZANTAR/mass-cc-checker-Izans-Lab.git
cd mass-cc-checker-Izans-Lab
php -S localhost:8080
```

Luego abre en el navegador:

```
http://localhost:8080
```

### Opcion C: Usando Python (servidor simple)

```bash
cd mass-cc-checker-Izans-Lab
python -m http.server 8080
```

Y visita:

```
http://localhost:8080
```

---

## 🔐 Configuración de Braintree

1. Crea una cuenta en: [https://sandbox.braintreegateway.com/](https://sandbox.braintreegateway.com/)
2. Accede a la pestaña "API Keys" y genera credenciales.
3. Crea el archivo `.env` (usando `.env.example` como referencia):

```
BRAINTREE_ENVIRONMENT=sandbox
BRAINTREE_MERCHANT_ID=tu_merchant_id
BRAINTREE_PUBLIC_KEY=tu_public_key
BRAINTREE_PRIVATE_KEY=tu_private_key
```

4. Protegido por `.gitignore`, este archivo **no se sube a GitHub**.

---

## ✅ Características principales

* Verificación simulada de tarjetas con datos ficticios.
* Integración funcional con Braintree Sandbox.
* Código organizado por componentes (API, estilos, configuración).
* Diseño responsive con Bootstrap.

---

## 🧠 Aviso legal

> Esta herramienta es para uso **estrictamente educativo**.
> No fomenta ni permite usos ilegales.
> Las pruebas con tarjetas son simuladas y en entorno sandbox.

---

## 🤝 Contribuciones

Pull Requests bienvenidas. Si deseas contribuir:

1. Realiza un fork.
2. Crea tu rama (`git checkout -b feature/nueva-funcion`).
3. Haz tus cambios y haz commit.
4. Sube tu rama y abre un Pull Request.

---

## 🧩 Autor y soporte

Proyecto creado por **Izan's Lab**

Soporte en:

* GitHub: [issues](https://github.com/IZANTAR/mass-cc-checker-Izans-Lab/issues)

---

## 📜 Licencia

Este proyecto está licenciado bajo **The Unlicense**, dominio público.

Para más información visita: [https://unlicense.org](https://unlicense.org)

---

© 2025 Izan's Lab • Grupo 💳 ESCUELA BINS Y CCS SOLO AMIGOS 💸
>>>>>>> dfb277d (Actualización: nuevos archivos (.env.example, verify.php) y mejoras en index.php)
