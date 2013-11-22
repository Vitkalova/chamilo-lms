<?php /* License: see /license.txt */
//Needed in order to show the plugin title
$strings['plugin_title']        = "Videoconferencias 'OpenMeetings'";
$strings['plugin_comment']      = "Añade una sala de videoconferencia en los cursos de Chamilo con OpenMeetings (om)";

$strings['Videoconference']     = "VideoconferenciaOM";
$strings['MeetingOpened']       = "Sala abierta";
$strings['MeetingClosed']       = "Sala cerrada";
$strings['MeetingClosedComment'] = "Si ha pedido grabar la sesión de videoconferencia en los parámetros del curso, esta grabación aparecerá en la lista siguiente una vez generada.";
$strings['CloseMeeting']        = "Cerrar sala";

$strings['VideoConferenceXCourseX']             = "Videoconferencia #%s, curso %s";
$strings['VideoConferenceAddedToTheCalendar']   = "Videoconferencia añadida al calendario";
$strings['VideoConferenceAddedToTheLinkTool']   = "Videoconferencia añadida como enlace. Puede editar y publicar el enlace en la página principal del curso desde la herramienta de enlace.";

$strings['GoToTheVideoConference']   = "Ir a la videoconferencia";

$strings['Records']             = "Grabación";
$strings['Meeting']             = "Sala de conferencia";

$strings['ViewRecord']          = "Ver grabación";
$strings['CopyToLinkTool']      = "Añadir como enlace del curso";

$strings['EnterConference']     = "Entrar a la videoconferencia";
$strings['RecordList']          = "Lista de grabaciones";
$strings['ServerIsNotRunning']  = "El servidor de videoconferencia no está funcionando";
$strings['ServerIsNotConfigured']  = "El servidor de videoconferencia no está configurado correctamente";

$strings['XUsersOnLine']        = "%s usuario(s) en la sala";

$strings['host'] = 'Host de OpenMeetings';
$strings['host_help'] = 'Este es el nombre del servidor donde su servidor OpenMeetings está corriendo. Puede ser localhost, una dirección IP (ej: 192.168.13.54) o un nombre de dominio (ej: mi.video.com).';

$strings['user'] = 'Usuario';
$strings['user_help'] = 'Ingrese el usuario con el cual de conectará al servidor OpenMeetings';

$strings['pass'] = 'Clave OpenMeetings';
$strings['pass_help'] = 'Esta es la llave de seguridad de su servidor OpenMeetings (llamada "salt" en inglés), que permitirá a su servidor de autentifica la instalación de Chamilo (como autorizada). Refiérese a la documentación de OpenMeetings para ubicarla, o use el comando "bbb-conf --salt" si tiene acceso al servidor en línea de comando.';

$strings['tool_enable'] = 'Herramienta de videoconferencia OpenMeetings activada';
$strings['tool_enable_help'] = "Escoja si desea activar la herramienta de videoconferencia OpenMeetings.
    Una vez activada, se mostrará como una herramienta adicional en todas las páginas principales de cursos, y los profesores podrán iniciar una conferencia en cualquier momento. Los estudiantes no podrían lanzar una conferencia, solo juntarse a una existente. Si no tiene un servidor de videoconferencia OpenMeetings, por favor <a target=\"_blank\" href=\"http://bigbluebutton.org/\">configure uno</a> antes de seguir, o pida una cotización a uno de los proveedores oficiales de Chamilo. OpenMeetings es una herramienta de software libre (y gratuita), pero su instalación requiere de competencias que quizás no sean inmediatamente disponibles para todos. Puede instalarla usted mismo o buscar ayuda profesional. Esta ayuda podría no obstante generar algunos costos (por lo menos el tiempo de la persona quien lo ayude). En el puro espíritu del software libre, le ofrecemos las herramientas para hacer su trabajo más simple, en la medida de nuestras posibilidades, y le recomendamos profesionales (los proveedores oficiales de Chamilo) para ayudarlo en caso esto fuera demasiado complicado.<br />";

$strings['big_blue_button_welcome_message'] = 'Mensaje de bienvenida de ';
$strings['big_blue_button_record_and_store'] = 'Grabar las sesiones de videoconferencia';

$strings['plugin_tool_bbb'] = 'Video';

$strings['ThereAreNotRecordingsForTheMeetings'] = 'No hay grabaciones de sesiones de videoconferencia';
$strings['NoRecording'] = 'No hay grabación';

