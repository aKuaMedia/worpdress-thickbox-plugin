worpdress-thickbox-plugin
=========================

Modificaciones sobre la versión 2.1 del plugin de anieto2k (http://www.anieto2k.com/plugins-themes/mis-plugins/thickbox-21-plugin/)

Para ver la información original del plugin, acceder a:
http://www.anieto2k.com/plugins-themes/mis-plugins/thickbox-21-plugin/
El plugin de anieto2k está construido sobre la base de:
  Thickbox 2.1 - One Box To Rule Them All.
  By Cody Lindley (http://www.codylindley.com)
  Copyright (c) 2006 cody lindley
  Licensed under the MIT License:
    http://www.opensource.org/licenses/mit-license.php
  Thickbox is built on top of the very light weight jQuery library.



**************************************************************

	CAMBIOS APORTADOS POR AKUAMEDIA

**************************************************************



Sobre la versión 2.1 publicada por Andrés Nieto, se han modificado/añadido estos elementos:

a) Se pasa a user un atributo DOM personalizado (group) en lugar del atributo rel para agrupar imáganes. El uso del atributo rel provocaba fallos si se usaba ese atributo para indicar, por ejemplo, nofollow o noindex (su uso habitual).

b) Se elimina la inserción de jQuery de forma constante en el código del plugin y se delega su carga desde jQuery propio de Wordpress

c) El uso de los archivos "js" necesarios para el plugin se deja de hacer de forma directa y se pasa a usar wp_enqueue_script

d) Se cambian las rutas insertadas como constantes en el plugin a rutas compuestas desde la variable proporcionada por Wordpress para averiguar la URL de dichos elementos, haciendo así estos independientes de los nombres de carpetas y ruta real de instalación de wordpress. (permitiendo simlinks, CDNs, etc...)

e) Cambios menores de idioma de textos (a Español)




TO-DO:

a) Internacionalicación de textos o paso por parámetros de textos (anterior, siguiente, Image X de Y, cerrar...)



