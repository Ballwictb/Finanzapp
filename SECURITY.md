# Seguridad en FinanzApp

Este repositorio está dedicado a la parte visual de la aplicación FinanzApp, lo que incluye la interfaz de usuario (UI), el diseño y la interacción del cliente. Sin embargo, **toda la lógica relacionada con las APIs, el registro de usuarios, el inicio de sesión y la gestión de datos personales** se maneja a través de nuestro servidor remoto en [finanzapp.es](https://finanzapp.es).

## Consideraciones de Seguridad

### 1. Servidor Remoto
El backend, que incluye las funcionalidades de **registro de usuarios**, **inicio de sesión**, y el manejo de datos personales y financieros, **no se encuentra en este repositorio**. Esta parte de la aplicación está gestionada de manera segura en el servidor remoto `finanzapp.es`, donde se implementan medidas de seguridad adicionales para proteger la privacidad de nuestros usuarios.

### 2. API y Seguridad
Las comunicaciones entre el cliente (este repositorio) y el servidor remoto (finanzapp.es) se realizan de forma segura a través de **protocolos HTTPS** para garantizar que toda la información transmitida entre el cliente y el servidor esté cifrada.

### 3. Control de Accesos
En este repositorio, no se gestionan tokens de autenticación, credenciales o cualquier otro dato sensible. Todo el manejo de accesos y autenticación se lleva a cabo de forma segura en el servidor remoto.

### 4. Vulnerabilidades de Seguridad
Si encuentras alguna vulnerabilidad relacionada con la parte visual de la aplicación o sospechas que hay alguna debilidad en la implementación de este repositorio, por favor abre un "issue" en el repositorio o contacta con nosotros directamente.

### 5. Reporte de Problemas de Seguridad
Si descubres una vulnerabilidad de seguridad en el servidor remoto o en la API que maneja datos sensibles, por favor, notifícalo de inmediato a nuestro equipo de seguridad a través del siguiente correo electrónico:  
**seguridad@finanzapp.es**.

Apreciamos mucho la colaboración de la comunidad para mantener nuestra aplicación segura.

## Disclaimer
Este repositorio está enfocado únicamente en la parte visual y no debe considerarse como un componente completo de la aplicación, ya que la lógica del backend está separada y gestionada de manera independiente en nuestro servidor.

Gracias por contribuir a hacer de FinanzApp una plataforma segura y eficiente.
