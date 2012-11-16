<?php // $Revision: 1.1.1.1 $
/* vim: set expandtab ts=4 sw=4 sts=4: */

/**
 * $Id: lang_es.php,v 1.1.1.1 2004/11/02 03:30:22 madbear Exp $
 * 
 * Copyright (c) 2003 by the NetOffice developers
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 */
// translator(s): Felipe Jaramillo, Pep Pujad� Mateo, Ricardo D�az
$topicNote = array(1 => 'Phone Conversation',
    2 => 'Conference Notes',
    3 => 'General Notes'
    );

$phaseArraySets = array(
    // Define the names of your phase sets
    'sets' => array(1 => 'Website', 2 => 'Application'), 
    // List the individual items within each phase set.
    // Website Set
    1 => array(0 => 'Concept', 1 => 'Planning', 2 => 'Development',
        3 => 'Testing', 4 => 'Rollout', 5 => 'Maintenance'), 
    // Application Set
    2 => array(0 => 'Concept', 1 => 'Planning', 2 => 'Development',
        3 => 'Testing', 4 => 'Rollout', 5 => 'Maintenance')
    );

$setCharset = "ISO-8859-1";

$byteUnits = array('Bytes', 'KB', 'MB', 'GB');

$dayNameArray = array(1 => "Lunes", 2 => "Martes", 3 => "Miercoles", 4 => "Jueves", 5 => "Viernes", 6 => "Sabado", 7 => "Domingo");

$monthNameArray = array(1 => "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");

$status = array(0 => "Cliente Finalizado", 1 => "Finalizado", 2 => "No Iniciado", 3 => "Abierto", 4 => "Suspendido");

$profil = array(0 => "Administrador", 1 => "Director de Proyecto", 2 => "Usuario", 3 => "Usuario Cliente", 4 => "Deshabilitado", 5 => "Director, Administrador de Proyectos");

$priority = array(0 => "Ninguna", 1 => "Muy baja", 2 => "Baja", 3 => "Media", 4 => "Alta", 5 => "Muy alta");

$statusTopic = array(0 => "Cerrado", 1 => "Abierto");
$statusTopicBis = array(0 => "Si", 1 => "No");

$statusPublish = array(0 => "Si", 1 => "No");

$statusFile = array(0 => "Aprobado", 1 => "Aprobado con Cambios", 2 => "Necesita Aprobacion", 3 => "No Necesita Aprobaci�n", 4 => "No Aprobado");

$phaseStatus = array(0 => "No empezado", 1 => "Abierto", 2 => "Completado", 3 => "Suspendido");

$requestStatus = array(0 => "Nuevo", 1 => "Abierto", 2 => "Completado");

$strings["please_login"] = "Acceder a la intranet";
$strings["requirements"] = "Requerimientos de Sistema";
$strings["login"] = "Acceder";
$strings["no_items"] = "No hay elementos para mostrar ";
$strings["logout"] = "Salir";
$strings["preferences"] = "Preferencias";
$strings["my_tasks"] = "Mis Tareas";
$strings["edit_task"] = "Modificar Tarea";
$strings["copy_task"] = "Copiar Tarea";
$strings["add_task"] = "A�adir Tarea";
$strings["delete_tasks"] = "Eliminar Tareas";
$strings["assignment_history"] = "Historial de Asignaci�n";
$strings["assigned_on"] = "Asignado el ";
$strings["assigned_by"] = "Asignado por";
$strings["to"] = "Para";
$strings["comment"] = "Comentario";
$strings["task_assigned"] = "Tarea asignada a ";
$strings["task_unassigned"] = "Tarea asignada a Sin asignar (Sin asignar)";
$strings["edit_multiple_tasks"] = "Modificar Tareas Multiples ";
$strings["tasks_selected"] = "tareas seleccionadas. Elija nuevos valores para las tareas seleccionadas o [Sin Cambios] para mantener los valores actuales.";
$strings["assignment_comment"] = "Comentario de Asignacion ";
$strings["no_change"] = "[Sin Cambio]";
$strings["my_discussions"] = "Mis Foros de Debate ";
$strings["discussions"] = "Foros de Debate";
$strings["delete_discussions"] = "Eliminar foros de Debate";
$strings["delete_discussions_note"] = "Nota: Las discusiones no podr&aacute;n abrirse una vez sean eliminadas.";
$strings["topic"] = "Tema";
$strings["posts"] = "Mensajes";
$strings["latest_post"] = "Ultimo Mensaje";
$strings["my_reports"] = "Mis Informes";
$strings["reports"] = "Informes";
$strings["create_report"] = "Crear Informe";
$strings["report_intro"] = "Seleccione los par�metros para crear el informe
de sus tareas y guarde la consulta en la p�gina de resultados despu�s de ejecutar la misma.";
$strings["admin_intro"] = "Configuraci�n del Proyecto.";
$strings["copy_of"] = "Copia de ";
$strings["add"] = "A�adir";
$strings["delete"] = "Eliminar";
$strings["remove"] = "Retirar";
$strings["copy"] = "Copiar";
$strings["view"] = "Ver";
$strings["edit"] = "Modificar";
$strings["update"] = "Actualizar";
$strings["details"] = "Detalles";
$strings["none"] = "Ninguno";
$strings["close"] = "Cerrar";
$strings["new"] = "Nuevo";
$strings["select_all"] = "Seleccionar Todos";
$strings["unassigned"] = "Sin Asignar";
$strings["administrator"] = "Administrador";
$strings["my_projects"] = "Mis Proyectos";
$strings["project"] = "Proyecto";
$strings["active"] = "Activo";
$strings["inactive"] = "Inactivo";
$strings["project_id"] = "ID de Proyecto";
$strings["edit_project"] = "Modificar Proyecto";
$strings["copy_project"] = "Copia de Proyecto";
$strings["add_project"] = "A�adir Proyecto";
$strings["clients"] = "Clientes";
$strings["organization"] = "Cliente";
$strings["client_projects"] = "Proyectos del Cliente";
$strings["client_users"] = "Usuarios del Cliente";
$strings["edit_organization"] = "Modificar Cliente";
$strings["add_organization"] = "A�adir Cliente";
$strings["organizations"] = "Clientes";
$strings["info"] = "Informaci�n";
$strings["status"] = "Estado";
$strings["owner"] = "Due&ntilde;o";
$strings["home"] = "Inicio";
$strings["projects"] = "Proyectos";
$strings["files"] = "Archivos";
$strings["search"] = "Buscar";
$strings["admin"] = "Administrador";
$strings["user"] = "Usuario";
$strings["project_manager"] = "Director de Proyecto";
$strings["due"] = "Entrega";
$strings["task"] = "Tarea";
$strings["tasks"] = "Tareas";
$strings["team"] = "Equipo";
$strings["add_team"] = "A�adir Miembros del Equipo";
$strings["team_members"] = "Miembros del Equipo";
$strings["full_name"] = "Nombre completo";
$strings["title"] = "Titulo";
$strings["user_name"] = "Nombre de usuario";
$strings["work_phone"] = "Tel&eacute;fono de trabajo";
$strings["priority"] = "Prioridad";
$strings["name"] = "Nombre";
$strings["id"] = "ID";
$strings["description"] = "Descripci�n";
$strings["phone"] = "Tel&eacute;fono";
$strings["url"] = "URL";
$strings["address"] = "Direcci�n";
$strings["comments"] = "Comentarios";
$strings["created"] = "Creado";
$strings["assigned"] = "Sin Asignar";
$strings["modified"] = "Modificado";
$strings["assigned_to"] = "Asignado a";
$strings["due_date"] = "Fecha de Entrega";
$strings["estimated_time"] = "Tiempo Estimado";
$strings["actual_time"] = "Tiempo Actual";
$strings["delete_following"] = "Eliminar lo siguiente?";
$strings["cancel"] = "Cancelar";
$strings["and"] = "y";
$strings["administration"] = "Administraci�n";
$strings["user_management"] = "Administraci�n de Usuarios";
$strings["system_information"] = "Informaci�n del Sistema";
$strings["product_information"] = "Information del Producto";
$strings["system_properties"] = "Propiedades de Sistema";
$strings["create"] = "Crear";
$strings["report_save"] = "Guarde la consulta de este informe en su sitio web para ejecutarla de nuevo.";
$strings["report_name"] = "Nombre del Informe";
$strings["save"] = "Guardar";
$strings["matches"] = "Encontrados";
$strings["match"] = "Encontrado";
$strings["report_results"] = "Informe Resultados";
$strings["success"] = "La Operaci�n se ha realizado satisfactoriamente";
$strings["addition_succeeded"] = "Insertardo satisfactoriamente";
$strings["deletion_succeeded"] = "La Eliminaci�n se ha realizado satisfactoriamente ";
$strings["report_created"] = "Informe creado";
$strings["deleted_reports"] = "Informes eliminados";
$strings["modification_succeeded"] = "La Modificaci�n se ha realizado satisfactoriamente";
$strings["errors"] = "Errores encontrados!";
$strings["blank_user"] = "El usuario no fue encontrado";
$strings["blank_organization"] = "EL cliente no fue localizada.";
$strings["blank_project"] = "El proyecto no pudo ser localizado.";
$strings["user_profile"] = "Perfil de Usuario";
$strings["change_password"] = "Cambiar Contrase�a";
$strings["change_password_user"] = "Cambiar la Contrase�a del usuario.";
$strings["old_password_error"] = "La Contrase�a antigua que introduzco no es correcta. Por favor, introduzca de nuevo la contrase�a antigua.";
$strings["new_password_error"] = "Las dos contrase�as introducidas no concuerdan. Por favor introduzca otra vez la nueva contrase�as.";
$strings["notifications"] = "Notificaciones";
$strings["change_password_intro"] = "Introduzca su contrase�a antigua y confirme la nueva.";
$strings["old_password"] = "Contrase�a Antigua ";
$strings["password"] = "Contrase�a";
$strings["new_password"] = "Nueva Contrase�a";
$strings["confirm_password"] = "Confirme la Contrase�a";
$strings["email"] = "E-Mail";
$strings["home_phone"] = "Tel&eacute;fono Particular";
$strings["mobile_phone"] = "Tel&eacute;fono M�vil";
$strings["fax"] = "Fax";
$strings["permissions"] = "Permisos";
$strings["administrator_permissions"] = "Permisos de Administrador";
$strings["project_manager_permissions"] = "Permisos de Director de Proyecto";
$strings["user_permissions"] = "Permisos de Usuario";
$strings["account_created"] = "Cuenta Creada";
$strings["edit_user"] = "Modificar Usuario";
$strings["edit_user_details"] = "Modificar los detalles de la Cuenta.";
$strings["change_user_password"] = "Cambiar la contrase�a del usuario.";
$strings["select_permissions"] = "Establecer permisos para este usuario";
$strings["add_user"] = "A�adir Usuario";
$strings["enter_user_details"] = "Introduzca los detalles de la cuenta de usuario que est&aacute; creando.";
$strings["enter_password"] = "Introduzca la contrase�a del usuario.";
$strings["success_logout"] = "Ha salido correctamente. Puede entrar de nuevo escribiendo su nombre de usuario y contrase�a.";
$strings["invalid_login"] = "Este usuario y/o contrase�a que introdujo no es valido. Por favor, intentelo de nuevo.";
$strings["profile"] = "Perfil";
$strings["user_details"] = "Detalles de la cuenta de Usuario.";
$strings["edit_user_account"] = "Modificar la informaci�n de su cuenta.";
$strings["no_permissions"] = "Usted no tiene suficientes permisos para llevar a cabo esta operaci�n.";
$strings["discussion"] = "Foros de Debate";
$strings["retired"] = "Retirado";
$strings["last_post"] = "Ultimo Mensaje";
$strings["post_reply"] = "Responder";
$strings["posted_by"] = "Escrito por";
$strings["when"] = "Fecha";
$strings["post_to_discussion"] = "Publique una foro de Debate";
$strings["message"] = "Mensaje";
$strings["delete_reports"] = "Eliminar Informes";
$strings["delete_projects"] = "Eliminar Proyectos";
$strings["delete_organizations"] = "Eliminar Cliente";
$strings["delete_organizations_note"] = "Nota: Esto eliminar&aacute; a todos los usuarios de estas organizaciones, y todos los proyectos abiertos de esta organizaci�n ser&aacute;n desasociados..";
$strings["delete_messages"] = "Eliminar Mensajes";
$strings["attention"] = "Atenci�n";
$strings["delete_teamownermix"] = "Retiro exitoso, pero el due&ntilde;o del proyecto no puede ser retirado del equipo de proyecto.";
$strings["delete_teamowner"] = "Usted no puede retirar al due&ntilde;o del proyecto del equipo.";
$strings["enter_keywords"] = "Introduzca palabras clave";
$strings["search_options"] = "Palabras Clave y Opciones de B&uacute;squeda";
$strings["search_note"] = "Debe introducir la informaci�n en el campo de B&uacute;squeda.";
$strings["search_results"] = "Resultados de B&uacute;squeda";
$strings["users"] = "Usuarios";
$strings["search_for"] = "Buscar";
$strings["results_for_keywords"] = "Buscar palabras clave en los resultados";
$strings["add_discussion"] = "A�adir Foro de Debate";
$strings["delete_users"] = "Eliminar cuentas de Usuario";
$strings["reassignment_user"] = "Reasignaci�n de Proyecto y Tareas";
$strings["there"] = "Existen ";
$strings["owned_by"] = "que pertenecen a los usuarios arriba";
$strings["reassign_to"] = "Antes de eliminar usuarios, reasignar estos a";
$strings["no_files"] = "No hay archivos vinculados ";
$strings["published"] = "Publicado";
$strings["project_site"] = "Sitio de proyecto";
$strings["approval_tracking"] = "Estado de la Aprobaci�n";
$strings["size"] = "Tama&ntilde;o";
$strings["add_project_site"] = "A�adir al Sitio de Proyecto";
$strings["remove_project_site"] = "Retirar del Sitio de Proyecto";
$strings["more_search"] = "M&aacute;s opciones de b&uacute;squeda";
$strings["results_with"] = "Buscar Resultados con";
$strings["search_topics"] = "Buscar Temas";
$strings["search_properties"] = "Propiedades de B&uacute;squeda";
$strings["date_restrictions"] = "Restricciones de Fecha";
$strings["case_sensitive"] = "Sensible a las May&uacute;sculas";
$strings["yes"] = "Si";
$strings["no"] = "No";
$strings["sort_by"] = "Ordenar por";
$strings["type"] = "Tipo";
$strings["date"] = "Fecha";
$strings["all_words"] = "todas las palabras";
$strings["any_words"] = "cualquier palabra";
$strings["exact_match"] = "coincidir exactamente";
$strings["all_dates"] = "Todas las fechas";
$strings["between_dates"] = "Entre las fechas";
$strings["all_content"] = "Todo el contenido";
$strings["all_properties"] = "Todas las propiedades";
$strings["no_results_search"] = "No se ha encontrado ning�n resultado de la busqueda solicitada.";
$strings["no_results_report"] = "No se ha encontrado ning�n resultado del informe solicitado.";
$strings["schema_date"] = "DD/MM/AAAA";
$strings["hours"] = "horas";
$strings["choice"] = "Elecci�n";
$strings["missing_file"] = "Falta archivo !";
$strings["project_site_deleted"] = "El Sitio de Proyecto fue eliminado satisfactoriamente.";
$strings["add_user_project_site"] = "Se le otorg� permiso al usuario para acceder el Sitio de Proyecto.";
$strings["remove_user_project_site"] = "Los permisos de usuario fueron retirados con exito.";
$strings["add_project_site_success"] = "La adici�n al Sitio de Proyecto fue un exito.";
$strings["remove_project_site_success"] = "El retiro del Sitio de Proyecto fue un exito.";
$strings["add_file_success"] = "1 elemento vinculado.";
$strings["delete_file_success"] = "La desvinculaci�n se ha realizado con exito.";
$strings["update_comment_file"] = "El comentario al archivo fu&eacute; actualizado exitosamente.";
$strings["session_false"] = "Error de Sesi�n";
$strings["logs"] = "Registros";
$strings["logout_time"] = "Auto Log Out";
$strings["noti_foot1"] = "Esta notificaci�n ha sido generada por Phpcollab";
$strings["noti_foot2"] = "Para ver su p�gina Phpcollab , visite:";
$strings["noti_taskassignment1"] = "Nueva Tarea:";
$strings["noti_taskassignment2"] = "Le ha sido asignado/a una nueva Tarea:";
$strings["noti_moreinfo"] = "Para m�s informaci�n.Por favor, visite:";
$strings["noti_prioritytaskchange1"] = "La prioridad de la Tarea ha sido modificada:";
$strings["noti_prioritytaskchange2"] = "La prioridad de la siguiente Tarea ha sido modificada:";
$strings["noti_statustaskchange1"] = "El estado de la tarea ha sido modificado:";
$strings["noti_statustaskchange2"] = "El estado de la siguiente tarea ha sido modificado:";
$strings["login_username"] = "Por favor, introduzca su nombre de usuario.";
$strings["login_password"] = "Por favor, introduzca su su contrase�a.";
$strings["login_clientuser"] = "Los datos introducidos corresponden a una cuenta cliente.  Usted no tiene acceso a Phpcollab con dicha cuenta.";
$strings["user_already_exists"] = "Ya existe un usuario con este nombre.Por favor, Elija una variaci�n del nombre del usuario.";
$strings["noti_duedatetaskchange1"] = "La fecha de la tarea ha sido modificada:";
$strings["noti_duedatetaskchange2"] = "La fecha de la tarea siguiente ha sido modificada :";
$strings["company"] = "Empresa";
$strings["show_all"] = "Mostrar todo";
$strings["information"] = "Informaci�n";
$strings["delete_message"] = "Borrar este mensaje";
$strings["project_team"] = "Equipo del proyecto";
$strings["document_list"] = "Listado de documentos";
$strings["bulletin_board"] = "Foros de debate";
$strings["bulletin_board_topic"] = "Comentario del foro de debate";
$strings["create_topic"] = "Crear nuevo comentario";
$strings["topic_form"] = "Formulario de comentarios";
$strings["enter_message"] = "Entre su mensaje";
$strings["upload_file"] = "Subir un archivo";
$strings["upload_form"] = "Formulario para subir archivos";
$strings["upload"] = "Subir archivo";
$strings["document"] = "Documento";
$strings["approval_comments"] = "Comentarios aprobados";
$strings["client_tasks"] = "Tareas del cliente";
$strings["team_tasks"] = "Tareas del equipo";
$strings["team_member_details"] = "Detalle del componente del equipo de este proyecto";
$strings["client_task_details"] = "Detalle de las Tareas del cliente";
$strings["team_task_details"] = "Detalle de las Tareas del equipo";
$strings["language"] = "Idioma";
$strings["welcome"] = "Bienvenido";
$strings["your_projectsite"] = "a su sitio del proyecto";
$strings["contact_projectsite"] = "Si usted tiene alguna duda acerca de la extranet o informaci�n de su contenido. por favor contacte con el administrador";
$strings["company_details"] = "Detalle de la Empresa";

$strings["database"] = "Copia de seguridad y reestablecer base de datos";
$strings["company_info"] = "Modificar datos de su empresa";
$strings["create_projectsite"] = "Crear sitio del proyecto";
$strings["projectsite_url"] = "Sitio del proyecto";
$strings["design_template"] = "Dise�os";
$strings["preview_design_template"] = "Visualizaci�n previa del dise�o";
$strings["delete_projectsite"] = "Borrar sitio del proyecto";
$strings["add_file"] = "A�adir archivo";
$strings["linked_content"] = "Archivos adjuntos";
$strings["edit_file"] = "Modificar detalles del archivo";
$strings["permitted_client"] = "Usuarios permitos del cliente";
$strings["grant_client"] = "No dispone de permisos para visualizar este proyecto";
$strings["add_client_user"] = "A�adir usuario del cliente";
$strings["edit_client_user"] = "Modificar usuario del cliente";
$strings["client_user"] = "Usuario cliente";
$strings["client_change_status"] = "Cambie el estado de la Tarea una vez completada.";
$strings["project_status"] = "Estado del proyecto";
$strings["view_projectsite"] = "Ver sitio del proyecto";
$strings["enter_login"] = "Por favor, introduzca su nombre de usuario y recibir� su nueva contrase�a por E-mail.";
$strings["send"] = "Enviado";
$strings["no_login"] = "El nombre de usuario no existe el la base de datos";
$strings["email_pwd"] = "contrase�a enviada";
$strings["no_email"] = "El usuario no dispone de e-mail";
$strings["forgot_pwd"] = "Ha olvidado su contrase�a ?";
$strings["project_owner"] = "Usted puede realizar cambios solamente en sus propios proyectos.";
$strings["connected"] = "Conectado";
$strings["session"] = "Session";
$strings["last_visit"] = "Ultima visita";
$strings["compteur"] = "Total";
$strings["ip"] = "Ip";
$strings["task_owner"] = "Usted no es un componente del equipo de este proyecto";
$strings["export"] = "Exportar";
$strings["browse_cvs"] = "Ver CVS";
$strings["repository"] = "CVS Repository";
$strings["reassignment_clientuser"] = "Tarea reasignada";
$strings["organization_already_exists"] = "El nombre ya existe en el sistema. Por favor, introduzca otro.";
$strings["blank_organization_field"] = "Entre el nombre de la empresa del cliente.";
$strings["blank_fields"] = "campos requeridos";
$strings["projectsite_login_fails"] = "Confirmaci�n del nombre de usuario y contrase�a.";
$strings["start_date"] = "Fecha de inicio";
$strings["completion"] = "Completado";
$strings["update_available"] = "Actualizaci�n disponible!";
$strings["version_current"] = "usando versi�n";
$strings["version_latest"] = "La ultima versi�n es";
$strings["sourceforge_link"] = "Para visualizar el proyecto, por favor, visite sourceforge";
$strings["demo_mode"] = "Modo demostrativo. Las acciones estan desactivadas.";
$strings["setup_erase"] = "Por favor, borre el archivo setup.php!!";
$strings["no_file"] = "No ha seleccionado ningun archivo";
$strings["exceed_size"] = "Tama�o del archivo excedido";
$strings["no_php"] = "Archivo Php file no encontrado";
$strings["approval_date"] = "Fecha acceptada";
$strings["approver"] = "Aprobado";
$strings["error_database"] = "No se puede conectar con la base de datos";
$strings["error_server"] = "No se puede conectar con el servidor";
$strings["version_control"] = "Control de Versi�n";
$strings["vc_status"] = "Estado";
$strings["vc_last_in"] = "Fecha de la ultima modificaci�n";
$strings["ifa_comments"] = "Comentarios de Aprobaci�n";
$strings["ifa_command"] = "Cambie el estado de la aprobaci�n";
$strings["vc_version"] = "Versi�n";
$strings["ifc_revisions"] = "Revisiones";
$strings["ifc_revision_of"] = "Revisi�n de la versi�n";
$strings["ifc_add_revision"] = "A�adir revisi�n";
$strings["ifc_update_file"] = "Actualizar archivo";
$strings["ifc_last_date"] = "Fecha de la ultima modificaci�n";
$strings["ifc_version_history"] = "Historial de la versi�n";
$strings["ifc_delete_file"] = "Borrar el archivo con las versiones y revisiones dependientes";
$strings["ifc_delete_version"] = "Borrar la versi�n selecionada";
$strings["ifc_delete_review"] = "Borrar la revisi�n seleccionada";
$strings["ifc_no_revisions"] = "Actualmente no hay revisiones de este documento.";
$strings["unlink_files"] = "Eliminar archivos";
$strings["remove_team"] = "Borrar los miembros del equipo";
$strings["remove_team_info"] = "Borrar este usuario del equipo del proyecto?";
$strings["remove_team_client"] = "Borrar los permisos para visualizar el Sitio del Proyecto";
$strings["note"] = "Nota";
$strings["notes"] = "Notas";
$strings["subject"] = "Asunto";
$strings["delete_note"] = "Borrar las notas entradas";
$strings["add_note"] = "A�adir nota";
$strings["edit_note"] = "Modificar Nota";
$strings["version_increm"] = "Seleccione el cambio de la versi�n:";
$strings["url_dev"] = "Enlace de desarrollo del site";
$strings["url_prod"] = "Enlace final del site";
$strings["note_owner"] = "Solo puede modificar sus notas.";
$strings["alpha_only"] = "Alpha-num�ricos solo en la autentificaci�n";
$strings["edit_notifications"] = "Preferencias de las notificaciones por E-mail de";
$strings["edit_notifications_info"] = "Seleccione las notificaciones que quiere recibir por E-mail.";
$strings["select_deselect"] = "Seleccionar/Deseleccionar Todo";
$strings["noti_addprojectteam1"] = "A�adir al equipo del proyecto:";
$strings["noti_addprojectteam2"] = "Le han agregado al equipo de proyecto para :";
$strings["noti_removeprojectteam1"] = "Borrar del equipo del proyecto :";
$strings["noti_removeprojectteam2"] = "Le han quitado del equipo del proyecto para :";
$strings["noti_newpost1"] = "Nuevo tema :";
$strings["noti_newpost2"] = "Nuevo tema ha sido a�adido al foro de debate siguiente :";
$strings["edit_noti_taskassignment"] = "Cuando se me asigne una tarea.";
$strings["edit_noti_statustaskchange"] = "El estado de una de mis tareas sea cambiada.";
$strings["edit_noti_prioritytaskchange"] = "La prioridad de una de mis tareas sea cambiada.";
$strings["edit_noti_duedatetaskchange"] = "Cuando la fecha de una de mis tareas sea cambiada.";
$strings["edit_noti_addprojectteam"] = "Cuando sea a�adido al equipo de un proyecto.";
$strings["edit_noti_removeprojectteam"] = "Cuando sea apartado al equipo de un proyecto.";
$strings["edit_noti_newpost"] = "Cuando se realize un mensaje del foro de Debate.";
$strings["add_optional"] = "A�adir opcional";
$strings["assignment_comment_info"] = "A�adir comentarios sobre la asignaci�n de esta tarea";
$strings["my_notes"] = "Mis Notas";
$strings["edit_settings"] = "Editar la configuraci�n";
$strings["max_upload"] = "Tama�o m�ximo del archivo";
$strings["project_folder_size"] = "Tama�o del directorio del proyecto";
$strings["calendar"] = "Calendario";
$strings["date_start"] = "Fecha de inicio";
$strings["date_end"] = "Fecha de finalizaci�n";
$strings["time_start"] = "Hora de inicio";
$strings["time_end"] = "Hora de finalizaci�n";
$strings["calendar_reminder"] = "Recordar";
$strings["shortname"] = "Abreviatura";
$strings["calendar_recurring"] = "El acontecimiento se repite cada semana en este d�a";
$strings["edit_database"] = "Editar la base de datos";
$strings["noti_newtopic1"] = "Nuevo foro de debate :";
$strings["noti_newtopic2"] = "Se ha a�adido un nuevo foro de debate al siguiente proyecto :";
$strings["edit_noti_newtopic"] = "Se ha a�adido un nuevo mensaje al foro de debate.";
$strings["today"] = "Hoy";
$strings["previous"] = "Anterior";
$strings["next"] = "Siguiente";
$strings["help"] = "Ayuda";
$strings["complete_date"] = "Fecha completada";
$strings["scope_creep"] = "situaci�n del alcance";
$strings["days"] = "D�as";
$strings["logo"] = "Logo";
$strings["remember_password"] = "Recordar contrase�a";
$strings["client_add_task_note"] = "Nota: La tarea ingresada est� registrada en la base de datos, aparece aqu� de cualquier forma solamente si ha sido reasignada a un miembro del equipo!";
$strings["noti_clientaddtask1"] = "Tarea agregada por el cliente :";
$strings["noti_clientaddtask2"] = "Una nueva tarea ha sido agregada por el cliente desde el sitio del proyecto al siguiente proyecto :";
$strings["phase"] = "Fase";
$strings["phases"] = "Fases";
$strings["phase_id"] = "ID Fase";
$strings["current_phase"] = "Fase(s) Activa(s)";
$strings["total_tasks"] = "Total Tareas";
$strings["uncomplete_tasks"] = "Tareas incompletas";
$strings["no_current_phase"] = "Ninguna fase esta actualmente activa";
$strings["true"] = "Verdadero";
$strings["false"] = "Falso";
$strings["enable_phases"] = "Modo Fases Activo";
$strings["phase_enabled"] = "Fase activa";
$strings["order"] = "Orden";
$strings["options"] = "Opciones";
$strings["support"] = "Soporte";
$strings["support_request"] = "Solicitud de soporte";
$strings["support_requests"] = "Solicitudes de soporte";
$strings["support_id"] = "Solicitud ID";
$strings["my_support_request"] = "Mis solicitudes de soporte";
$strings["introduction"] = "Introducci�n";
$strings["submit"] = "Enviar";
$strings["support_management"] = "Administraci�n de Soporte";
$strings["date_open"] = "Fecha de apertura";
$strings["date_close"] = "Fecha de soluci�n";
$strings["add_support_request"] = "Agegar una solicitud de soporte";
$strings["add_support_response"] = "Agergar una respuesta a la solicitud de soporte";
$strings["respond"] = "Respuesta";
$strings["delete_support_request"] = "Solicitud de soporte eliminada";
$strings["delete_request"] = "Eliminar solicitud de soporte";
$strings["delete_support_post"] = "Eliminar publicaci�n de soporte";
$strings["new_requests"] = "Solicitudes Nuevas";
$strings["open_requests"] = "Solicitudes Abiertas";
$strings["closed_requests"] = "Solicitudes Completadas";
$strings["manage_new_requests"] = "Administrar solicitudes nuevas";
$strings["manage_open_requests"] = "Administrar solicitudes abiertas";
$strings["manage_closed_requests"] = "Administrar solicitudes completadas";
$strings["responses"] = "Respuestas";
$strings["edit_status"] = "Editar status";
$strings["noti_support_request_new2"] = "Usted ha enviado una solicitud que hace referencia a :";
$strings["noti_support_post2"] = "Una nueva respuesta a su solicitud ha sido publicada. Por favor revise los detalles a continuaci�n.";
$strings["noti_support_status2"] = "Su solicitud de soporte ha sido actualizada. Por favor revise los detalles a continuaci�n.";
$strings["noti_support_team_new2"] = "Una nueva solicitud de soporte ha sido agregada al proyecto :";
// 2.0
$strings["delete_subtasks"] = "Subtareas eliminadas";
$strings["add_subtask"] = "Agregar subtarea";
$strings["edit_subtask"] = "Editar subtarea";
$strings["subtask"] = "Subtarea";
$strings["subtasks"] = "Subtareas";
$strings["show_details"] = "Mostrar detalles";
$strings["updates_task"] = "Historial de actualizaci�n de tareas";
$strings["updates_subtask"] = "Historial de actualizaci�n de subtareas";
// 2.1
$strings["go_projects_site"] = "Ir al sitio del proyecto";
$strings["bookmark"] = "Favorito";
$strings["bookmarks"] = "Favoritos";
$strings["bookmark_category"] = "Categor�a";
$strings["bookmark_category_new"] = "Nueva Categor�a";
$strings["bookmarks_all"] = "Todas";
$strings["bookmarks_my"] = "Mis Favoritos";
$strings["my"] = "Mias";
$strings["bookmarks_private"] = "Privadas";
$strings["shared"] = "Compartidas";
$strings["private"] = "Privadas";
$strings["add_bookmark"] = "Agregar favorito";
$strings["edit_bookmark"] = "Editar favorito";
$strings["delete_bookmarks"] = "Eliminar Favorito";
$strings["team_subtask_details"] = "Detalles de la subtarea del equipo";
$strings["client_subtask_details"] = "Detalles de la subtarea del cliente";
$strings["client_change_status_subtask"] = "Cambie su status a continuaci�n cuando usted haya terminado esta subtarea";
$strings["disabled_permissions"] = "Deshabilitar cuenta";
$strings["user_timezone"] = "Zona de tiempo (GMT)";
// 2.2
$strings["project_manager_administrator_permissions"] = "Administrador de Directores de Proyecto";
$strings["bug"] = "Rastreo de Errores";
// 2.3
$strings["report"] = "Report";
$strings["license"] = "License";
// 2.4
$strings["settings_notwritable"] = "Settings.php file is not writable";

?>