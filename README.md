# **Gestión de Cursos - Symfony**

Este proyecto es una plataforma web desarrollada en Symfony para la gestión eficiente de cursos.  
Permite a los administradores crear, editar y eliminar cursos, así como gestionar usuarios. Los usuarios, por su parte, pueden acceder a los cursos disponibles según sus permisos.

---

## **Características principales**
- 🛠️ **Gestión de cursos**:
  - Creación, edición y eliminación de cursos por parte de administradores.
  - Visualización de la lista de cursos disponibles.
- 👥 **Gestión de roles**:
  - **ROLE_ADMIN**: Acceso a herramientas de administración y estadísticas.
  - **ROLE_USER**: Acceso restringido a los cursos disponibles.
- 🔐 **Autenticación y seguridad**:
  - Sistema de inicio de sesión con control basado en roles.
  - Permisos específicos para cada usuario según su rol.
- 📄 **Plantillas personalizadas**:
  - Diferenciación en vistas y funcionalidades según el rol del usuario.

---

## **Uso**

### **Roles de usuario**
#### **Administrador (`ROLE_ADMIN`):**
- Acceso completo para gestionar cursos y usuarios.
- Vista personalizada con herramientas de administración.
- Posibilidad de visualizar su perfil y anotarse en cursos.

#### **Usuario externo:**
- Puede matricularse en cursos externos.

#### **Usuario interno (empleado):**
- Puede matricularse en cursos internos y externos.
- Acceso a su perfil, donde puede:
  - Visualizar sus datos personales.
  - Consultar los cursos en los que está matriculado.
  - Acceder a los certificados de cursos verificados.

---


## **Requisitos del sistema**
- PHP 8.0 o superior.
- Symfony 5.4 o superior.
- Servidor web Apache o Nginx.
- Base de datos MySQL o MariaDB.

---

