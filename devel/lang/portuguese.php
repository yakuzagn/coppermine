<?php
// ------------------------------------------------------------------------- //
//  Coppermine Photo Gallery                                                 //
// ------------------------------------------------------------------------- //
//  Copyright (C) 2002,2003  Grégory DEMAR <gdemar@wanadoo.fr>               //
//  http://www.chezgreg.net/coppermine/                                      //
// ------------------------------------------------------------------------- //
//  Based on PHPhotoalbum by Henning Støverud <henning@stoverud.com>         //
//  http://www.stoverud.com/PHPhotoalbum/                                    //
// ------------------------------------------------------------------------- //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
// ------------------------------------------------------------------------- //
//  Translation by Daniel Villoldo (Akela) <dvp@arrakis.es>                  //
//  http://akela.proel334.net/                                               //
// ------------------------------------------------------------------------- //

$lang_charset = 'ISO-8859-1';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bytes', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab');
$lang_month = array('Jan', 'Feb', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez');

// Some common strings
$lang_yes = 'Sim';
$lang_no  = 'N�o';
$lang_back = 'ATRAS';
$lang_continue = 'CONTINUAR';
$lang_info = 'Informa��o';
$lang_error = 'Erro';

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%d de %B de %Y';
$lastcom_date_fmt =  '%d/%m/%y �s %H:%M';
$lastup_date_fmt = '%d de %B de %Y';
$register_date_fmt = '%d de %B de %Y';
$lasthit_date_fmt = '%d de %B de %Y �s %I:%M %p';
$comment_date_fmt =  '%d de %B de %Y �s %I:%M %p';

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names = array(
	'random' => 'Fotos aleat�rias',
	'lastup' => '�ltimas fotos',
	'lastcom' => '�ltimos coment�rios',
	'topn' => 'Mais vistas',
	'toprated' => 'Melhor Classificadas',
	'lasthits' => '�ltimas vistas',
	'search' => 'Resultado da procura'
);

$lang_errors = array(
	'access_denied' => 'N�o tem permiss�o para aceder a esta p�gina.',
	'perm_denied' => 'N�o tem permiss�o para efectuar esta opera��o.',
	'param_missing' => 'Chamada do Script sem os parametros requeridos.',
	'non_exist_ap' => 'O(A) album/foto seleccionado(a) n�o existe!',
	'quota_exceeded' => 'Quota de disco excedida<br /><br />Tem uma quota de disco de [quota]K, as suas fotos actualmente ocupam [space]K, e atendendo a esta foto exceder�as a quota.',
	'gd_file_type_err' => 'Quando se usa a librari�a de imagem GD somente s�o permitidos os tipos JPEG e PNG.',
	'invalid_image' => 'A imagem que enviou est� corrompida ou n�o pode ser tratada pela librari�a GD.',
	'resize_failed' => 'Incapaz de criar thumbnail ou imagem de tamanho reduzido.',
	'no_img_to_display' => 'Nenhuma imagem para mostrar.',
	'non_exist_cat' => 'A categori�a seleccionada n�o existe.',
	'orphan_cat' => 'Uma categora�a n�o t�m pai, execute a op��o "Categori�as" para corrigir este problema.',
	'directory_ro' => 'O direct�rio \'%s\' n�o tem permiss�es de escrita, as fotos n�o podem ser apagadas.',
	'non_exist_comment' => 'O coment�rio seleccionado n�o existe.',
	'pic_in_invalid_album' => '¿¡A foto est� num album que n�o existe (%s)!?'
);

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
	'alb_list_title' => 'Ir para a lista de albuns',
	'alb_list_lnk' => 'Lista de albuns',
	'my_gal_title' => 'Ir para galeria pessoal',
	'my_gal_lnk' => 'Minha galeria',
	'my_prof_lnk' => 'O meu perfil de utilizador',
	'adm_mode_title' => 'Ir para modo administrador',
	'adm_mode_lnk' => 'Modo administrador',
	'usr_mode_title' => 'Ir para modo utilizador',
	'usr_mode_lnk' => 'Modo Utilizador',
	'upload_pic_title' => 'Inserir foto num album',
	'upload_pic_lnk' => 'Inserir foto',
	'register_title' => 'Criar um utilizador',
	'register_lnk' => 'Registar-se',
	'login_lnk' => 'Login',
	'logout_lnk' => 'Logout',
	'lastup_lnk' => '�ltimas fotos',
	'lastcom_lnk' => '�ltimos coment�rios',
	'topn_lnk' => 'Mais vistas',
	'toprated_lnk' => 'Melhor Classificadas',
	'search_lnk' => 'Procurar'
);

$lang_gallery_admin_menu = array(
	'upl_app_lnk' => 'Aprovar Uploads',
	'config_lnk' => 'Configura��o',
	'albums_lnk' => '�lbuns',
	'categories_lnk' => 'Categori�as',
	'users_lnk' => 'Utilizadores',
	'groups_lnk' => 'Grupos',
	'comments_lnk' => 'Coment�rios',
	'searchnew_lnk' => 'Adicionar fotos (Batch)',
);

$lang_user_admin_menu = array(
	'albmgr_lnk' => 'Criar / ordenar �lbuns',
	'modifyalb_lnk' => 'Modificar meus �lbuns',
	'my_prof_lnk' => 'Meu perfil de utilizador',
);

$lang_cat_list = array(
	'category' => 'Categoria',
	'albums' => '�lbuns',
	'pictures' => 'Fotos',
);

$lang_album_list = array(
	'album_on_page' => '%d �lbuns na(s) %d p�gina(s)'
);

$lang_thumb_view = array(
	'date' => 'DATA',
	'name' => 'NOME',
	'sort_da' => 'Ordenado por data ascendente',
	'sort_dd' => 'Ordenado por data descendente',
	'sort_na' => 'Ordenado por nome ascendente',
	'sort_nd' => 'Ordenado por nome descendente',
	'pic_on_page' => '%d foto(s) na(s) %d p�gina(s)',
	'user_on_page' => '%d utilizadore(s) na(s) %d p�gina(s)'
);

$lang_img_nav_bar = array(
	'thumb_title' => 'Voltar ao ͭndice do �lbum',
	'pic_info_title' => 'Mostrar/ocultar informa��o da foto',
	'slideshow_title' => 'Slideshow',
	'ecard_title' => 'Enviar esta foto a um amigo',
	'ecard_disabled' => 'Envio de fotos desativado',
	'ecard_disabled_msg' => 'N�o tem permiss�o para enviar fotos',
	'prev_title' => 'Ver foto anterior',
	'next_title' => 'Ver foto siguinte',
	'pic_pos' => 'FOTO %s/%s',
);

$lang_rate_pic = array(
	'rate_this_pic' => 'Classificar esta foto ',
	'no_votes' => '(No h� votos)',
	'rating' => '(valora��o actual : %s / 5 com %s votos)',
	'rubbish' => 'Muito Fraca',
	'poor' => 'Fraca',
	'fair' => 'Normal',
	'good' => 'Boa',
	'excellent' => 'Excelente',
	'great' => 'Genial',
);

// ------------------------------------------------------------------------- //
// File include/exif.inc.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File include/functions.inc.php
// ------------------------------------------------------------------------- //

$lang_cpg_die = array(
	INFORMATION => $lang_info,
	ERROR => $lang_error,
	CRITICAL_ERROR => 'Error crítico',
	'file' => 'Fichero: ',
	'line' => 'Linea: ',
);

$lang_display_thumbnails = array(
	'filename' => 'Fichero: ',
	'filesize' => 'Tamaño: ',
	'dimensions' => 'Dimensiones: ',
	'date_added' => 'Fecha de alta: '
);

$lang_get_pic_data = array(
	'n_comments' => '%s comentarios',
	'n_views' => '%s veces vista',
	'n_votes' => '(%s votos)'
);

// ------------------------------------------------------------------------- //
// File include/init.inc.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File include/picmgmt.inc.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File include/smilies.inc.php
// ------------------------------------------------------------------------- //

if (defined('SMILIES_PHP')) $lang_smilies_inc_php = array(
	'Exclamation' => 'Exclama��o',
	'Question' => 'Quest�o',
	'Very Happy' => 'Very Happy',
	'Smile' => 'Smile',
	'Sad' => 'triste',
	'Surprised' => 'Surpreendido',
	'Shocked' => 'Chocado',
	'Confused' => 'Confuso',
	'Cool' => 'Cool',
	'Laughing' => 'A rir',
	'Mad' => 'Louco',
	'Razz' => 'Razz',
	'Embarassed' => 'Embara�ado',
	'Crying or Very sad' => 'muito Triste',
	'Evil or Very Mad' => 'Mau',
	'Twisted Evil' => 'Muito Mau',
	'Rolling Eyes' => 'Rolling Eyes',
	'Wink' => 'Wink',
	'Idea' => 'Ideia',
	'Arrow' => 'Seta',
	'Neutral' => 'Neutro',
	'Mr. Green' => 'Mr. Green',
);

// ------------------------------------------------------------------------- //
// File addpic.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
	0 => 'A sair do modo administrador...',
	1 => 'A entrar no modo administrador...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
	'alb_need_name' => 'Os �lbuns deven ter um nome!',
	'confirm_modifs' => 'Tem a certeza que quer efectuar estas altera��es?',
	'no_change' => 'N�o foi efectuada nenhuma altera��o!',
	'new_album' => 'Novo �lbum',
	'confirm_delete1' => 'Tem a certeza que quer apagar este �lbum?',
	'confirm_delete2' => 'Todas as fotos e coment�rios que contem ir�o perder-se!',
	'select_first' => 'Selecione primeiro um �lbum',
	'alb_mrg' => 'Administrador de Albuns',
	'my_gallery' => '* Minha galeria *',
	'no_category' => '* Sem categori�a *',
	'delete' => 'Apagar',
	'new' => 'Novo',
	'apply_modifs' => 'Aplicar modifica��es',
	'select_category' => 'Seleccionar categori�a',
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
	'miss_param' => 'Os par�metros requeridos para a opera��o : \'%s\' n�o foram fornecidos!',
	'unknown_cat' => 'A categori�a seleccionada n�o existe na base de dados',
	'usergal_cat_ro' => 'As categori�as de galeri�as de utilizador n�o podem ser apagadas!',
	'manage_cat' => 'Gestor de categori�as',
	'confirm_delete' => 'Tem a certeza que quer apagar esta categoria',
	'category' => 'Categoria',
	'operations' => 'Opera��es',
	'move_into' => 'Mover para',
	'update_create' => 'Modificar/Criar categori�a',
	'parent_cat' => 'Categoria pai',
	'cat_title' => 'T�tulo da categori�a',
	'cat_desc' => 'Descri��o da categori�a'
);

// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //

if (defined('CONFIG_PHP')) $lang_config_php = array(
	'title' => 'Configura��o',
	'restore_cfg' => 'Restaurar valores por defeito',
	'save_cfg' => 'Guardar a nova configura��o',
	'notes' => 'Notas',
	'info' => 'Informa��o',
	'upd_success' => 'A configura��o de Coppermine foi actualizada',
	'restore_success' => 'Valores por defeicto de Coppermine restaurados',
	'name_a' => 'Ascendente por nome',
	'name_d' => 'Descendente por nome',
	'date_a' => 'Ascendente por data',
	'date_d' => 'Descendente por data'
);

if (defined('CONFIG_PHP')) $lang_config_data = array(
	'Par�metros Gerais',
	array('Nome da galeri�a', 'gallery_name', 0),
	array('Descri��o da galeria', 'gallery_description', 0),
	array('Correio electr�nico do administrador', 'gallery_admin_email', 0),
	array('Endere�o web associado a \'Ver más fotos\' aos e-cards', 'ecards_more_pic_target', 0),
	array('Linguagem', 'lang', 5),
	array('Tema (aspecto)', 'theme', 6),

	'Aspecto da lista de �lbuns',
	array('Largura da tabela principal (pixels o %)', 'main_table_width', 0),
	array('N�mero de n�veis de categori�as a mostrar', 'subcat_level', 0),
	array('N�mero de �lbuns a mostrar', 'albums_per_page', 0),
	array('N�mero de colunas na lista de �lbuns', 'album_list_cols', 0),
	array('Tamanho dos thumbnails em pixeis', 'alb_list_thumb_size', 0),
	array('Conte�do da p�gina principal', 'main_page_layout', 0),

	'Aspecto da vista de Thumbnails',
	array('N�mero de colunas na p�gina de thumbnails', 'thumbcols', 0),
	array('N�mero de linha na p�gina de thumbnails', 'thumbrows', 0),
	array('M�ximo n�mero de tabs a mostrar', 'max_tabs', 0),
	array('Mostrar captura de imagem (al�m do t�tulo) debaixo do thumbnail', 'caption_in_thumbview', 1),
	array('Mostrar el n�mero de coment�rios debaixo do thumbnail', 'display_comment_count', 1),
	array('Ordem por defeito das fotos', 'default_sort_order', 3),
	array('M�nimo n�mero de votos para que uma foto apare�a na lista de \'Más Valoradas\' list', 'min_votes_for_rating', 0),

	'Vista da foto e Configura��o de coment�rios',
	array('Largura da tabela onde mostra a foto (pixels o %)', 'picture_table_width', 0),
	array('Informa��o da foto vis�vel por defeito', 'display_pic_info', 1),
	array('Filtrar palavras impr�prias nos coment�rios', 'filter_bad_words', 1),
	array('Permitir Emoticons nos coment�rios', 'enable_smilies', 1),
	array('Tamanho m�ximo da descri��o de uma foto', 'max_img_desc_length', 0),
	array('N�mero m�ximo de caracteres numa palavra', 'max_com_wlength', 0),
	array('N�mero m�ximo de lineas num coment�rio', 'max_com_lines', 0),
	array('Tamanho m�ximo de um coment�rio', 'max_com_size', 0),

	'Configura��o das fotos e thumbnails',
	array('Qualidade dos ficheros JPEG', 'jpeg_qual', 0),
	array('Largura m�xima dos thumbnails <b>*</b>', 'thumb_width', 0),
	array('Criar fotos de tamanho interm�dio','make_intermediate',1),
	array('Largura m�xima das fotos de tamanho interm�dio <b>*</b>', 'picture_width', 0),
	array('Tamanho m�ximo das fotos de utilizadores por upload (KB)', 'max_upl_size', 0),
	array('Dimens�es m�ximas das fotos de utilizadores por upload (pixeis)', 'max_upl_width_height', 0),

	'Configura��o de utilizadores',
	array('Permitir o registo de novos utilizadores', 'allow_user_registration', 1),
	array('Registo de utilizadores requer verifica��o de e-mail', 'reg_requires_valid_email', 1),
	array('Permitir a dois utilizadores terem o mesmo e-mail', 'allow_duplicate_emails_addr', 1),
	array('Os utilizadores poden ter �lbuns privados', 'allow_private_albums', 1),

	'Campos extra para descri��o de fotos (dejar en blanco si no los usas)',
	array('Nome do campo 1', 'user_field1_name', 0),
	array('Nome do campo 2', 'user_field2_name', 0),
	array('Nome do campo 3', 'user_field3_name', 0),
	array('Nome do campo 4', 'user_field4_name', 0),

	'Configura��o avan�ada de fotos e thumbnails',
	array('Caracteres proibidos nos nomes das fotos', 'forbiden_fname_char',0),
	array('Exten��es de ficheros admitidas nos uploads', 'allowed_file_extensions',0),
	array('M�todo para organiza��o das fotos','thumb_method',2),
	array('Path da ferramenta ImageMagick (por exemplo /usr/bin/X11/)', 'impath', 0),
	array('Tipos de ficheiros admitidos (v�lidos somente com ImageMagick)', 'allowed_img_types',0),
	array('Comandos de linha para ImageMagick', 'im_options', 0),
	array('Ler dados EXIF em ficheiros do tipo JPEG', 'read_exif_data', 1),
	array('Direct�rio base dos �lbuns <b>*</b>', 'fullpath', 0),
	array('Direct�rio para as fotos submetidas pelos usu�rios <b>*</b>', 'userpics', 0),
	array('Prefixo para as fotos de tamanho interm�dio <b>*</b>', 'normal_pfx', 0),
	array('Prefixo para os thumbnails <b>*</b>', 'thumb_pfx', 0),
	array('Modo por defeito dos direct�rios', 'default_dir_mode', 0),
	array('Modo por defeito para as fotos', 'default_file_mode', 0),

	'Configura��o de cookies e Conjunto de Caracteres',
	array('Nome dos cookies usados pelo script', 'cookie_name', 0),
	array('Path dos cookies usados pelo script', 'cookie_path', 0),
	array('Conjunto de caracteres', 'charset', 4),

	'Outras Configura��es',
	array('Activar modo debug', 'debug_mode', 1),

	'<br /><div align="center">(*) Os campos marcados com * n�o devem ser substitu�dos se j� existem fotos nas galeri�as</div><br />'
);

// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
	'empty_name_or_com' => 'Tem de inserir o seu nome e um coment�rio',
	'com_added' => 'O seu coment�rio foi adicionado',
	'alb_need_title' => 'Tem de introduzir um t�tulo para o album!',
	'no_udp_needed' => 'N�o � necess�ria nenhuma altera��o',
	'alb_updated' => 'O album foi actualizado',
	'unknown_album' => 'O album seleccionado n�o existe ou n�o tem permiss�o para adicionar fotos neste album',
	'no_pic_uploaded' => 'Nenhuma foto foi adicionada!<br /><br />Se seleccionou uma foto para adicionar, verifique se o servidor admite o upload de ficheiros...',
	'err_mkdir' => 'Erro ao criar o(s) direct�rio(s)!',
	'dest_dir_ro' => 'O(s) direct�rio(s) destino n�o tem permiss�es de escrita!',
	'err_move' => 'Imposs�vel mover %s a %s !',
	'err_fsize_too_large' => 'O tamanho da foto que quer inserir � demasiado grande (o m�ximo permitido � de %s x %s)',
	'err_imgsize_too_large' => 'O tamanho do ficheiro da foto que quer inserir � demasiado grande (o m�ximo permitido � de %s KB)',
	'err_invalid_img' => 'O ficheiro que quer inserir n�o � uma imagem v�lida',
	'allowed_img_types' => 'Pode inserir somente %s fotos.',
	'err_insert_pic' => 'A foto \'%s\' n�o pode ser inserida no album ',
	'upload_success' => 'A foto foi inserida correctamente<br /><br />Ser� vis�vel logo que aprovada pelos administradores.',
	'info' => 'Informa��o',
	'com_added' => 'Coment�rio adicionado',
	'alb_updated' => 'Album actualizado',
	'err_comment_empty' => 'O coment�rio est� vazio!',
	'err_invalid_fext' => 'Somente s�o admitidas fotos com as seguintes extens�es : <br /><br />%s.',
	'no_flood' => 'Desculpe mas � o autor/a do �ltimo coment�rio introduzido para esta foto<br /><br />Pode editar o coment�rio para modific�-lo',
	'redirect_msg' => 'Est� a ser redireccionado.<br /><br /><br />Prima \'CONTINUAR\' se a p�gina n�o se actualizar autom�ticamente',
	'upl_success' => 'A foto foi adicionada correctamente',
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
	'caption' => 'Caption',
	'fs_pic' => 'imagem em tamanho completo',
	'del_success' => 'apagada correctamente',
	'ns_pic' => 'imagem tamanho normal',
	'err_del' => 'n�o pode ser apagado',
	'thumb_pic' => 'thumbnail',
	'comment' => 'coment�rio',
	'im_in_alb' => 'fotos no album',
	'alb_del_success' => 'Album \'%s\' apagado',
	'alb_mgr' => 'Gestor de albums',
	'err_invalid_data' => 'Dados inv�lidos recebidos em \'%s\'',
	'create_alb' => 'Criando o album \'%s\'',
	'update_alb' => 'Actualizando album \'%s\' com o t��tulo \'%s\' e o indice \'%s\'',
	'del_pic' => 'Apagar foto',
	'del_alb' => 'Apagar album',
	'del_user' => 'Apagar utilizador',
	'err_unknown_user' => 'O utilizador seleccionado n�o existe!',
	'comment_deleted' => 'O coment�rio foi apagado',
);

// ------------------------------------------------------------------------- //
// File displayecard.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYIMAGE_PHP')){

$lang_display_image_php = array(
	'confirm_del' => 'Tem a certeza que quer apagar esta foto? \\n Os coment�rios ser�o tambem apagados.',
	'del_pic' => 'APAGAR ESTA FOTO',
	'size' => '%s x %s pixeis',
	'views' => '%s visualiza��es',
	'slideshow' => 'Slideshow',
	'stop_slideshow' => 'PARAR SLIDESHOW',
	'view_fs' => 'Prima aqui para ver a imagem em tamanho completo',
);

$lang_picinfo = array(
	'title' =>'Informa��o da foto',
	'Filename' => 'Nome do fichero',
	'Album name' => 'Nome do album',
	'Rating' => 'Clasifica��o (%s votos)',
	'Keywords' => 'Palavras chave',
	'File Size' => 'Tamanho do ficheiro',
	'Dimensions' => 'Dimens�es',
	'Displayed' => 'Visualizado',
	'Camera' => 'Camera',
	'Date taken' => 'Data da la foto',
	'Aperture' => 'Abertura',
	'Exposure time' => 'Tempo de exposi��o',
	'Focal length' => 'Dist�ncia Focal ',
	'Comment' => 'Coment�rio'
);

$lang_display_comments = array(
	'OK' => 'OK',
	'edit_title' => 'Editar o coment�rio',
	'confirm_delete' => 'Tem a certeza que quer apagar o coment�rio?',
	'add_your_comment' => 'Adicionar um coment�rio',
	'your_name' => 'Nome',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
	'title' => 'Enviar foto a um amigo',
	'invalid_email' => '<b>Aten��o</b> : Endere�o e-mail incorrecto!',
	'ecard_title' => 'Uma foto de %s para ti',
	'view_ecard' => 'Se a foto n�o se visualizar correctamente, prime este link',
	'view_more_pics' => 'Prime aqui para ver mais fotos!',
	'send_success' => 'A foto foi enviada',
	'send_failed' => 'O servidor n�o conseguiu enviar esta foto...',
	'from' => 'De',
	'your_name' => 'Nome',
	'your_email' => 'Endere�o de e-mail',
	'to' => 'Para',
	'rcpt_name' => 'Nome da pessoa de destino',
	'rcpt_email' => 'Endere�o de e-mail de destino',
	'greetings' => 'T�tulo da mensagem',
	'message' => 'Mensagem',
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
	'pic_info' => 'Informa��o',
	'album' => 'Album',
	'title' => 'T��tulo',
	'desc' => 'Descri��o',
	'keywords' => 'Keywords',
	'pic_info_str' => '%sx%s - %sKB - %s vezes visualizada - %s votos',
	'approve' => 'Aprovar la foto',
	'postpone_app' => 'Enviar aprova��o da foto',
	'del_pic' => 'Apagar foto',
	'reset_view_count' => 'Por a zero o contador de izualiza��es',
	'reset_votes' => 'Por a zero os votos',
	'del_comm' => 'Apagar coment�rios',
	'upl_approval' => 'Aprovar uploads',
	'edit_pics' => 'Editar fotos',
	'see_next' => 'Ir para as fotos seguintes',
	'see_prev' => 'If para as fotos anteriores',
	'n_pic' => '%s foto/s',
	'n_of_pic_to_disp' => 'N�mero de fotos a mostrar',
	'apply' => 'Validar as altera��es'
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
	'group_name' => 'Nome do grupo',
	'disk_quota' => 'Quota de disco',
	'can_rate' => 'Podem classificar fotos',
	'can_send_ecards' => 'Podem enviar ecards',
	'can_post_com' => 'Podem colocar coment�rios',
	'can_upload' => 'Podem enviar fotos',
	'can_have_gallery' => 'Podem ter galeri�as pessoais',
	'apply' => 'Validar as altera��es',
	'create_new_group' => 'Criar novo grupo',
	'del_groups' => 'Apagar o/os grupo(s) seleccionados',
	'confirm_del' => 'Aten��o, quando apaga um grupo, los utilizadores que pertemcem a esse grupo ser�o transferidos ao grupo \'Registered\'!\n\n Deseja continuar?',
	'title' => 'Configurar grupos de utilizadores',
	'approval_1' => 'Aprova��o album p�blico (1)',
	'approval_2' => 'Aprova��o album privado (2)',
	'note1' => '<b>(1)</b> Adicionar fotos a um album p�blico requer aprova��o dos administradores',
	'note2' => '<b>(2)</b> Adicionar fotos a um album que pertenece ao utilizador requer aprova��o dos administradores',
	'notes' => 'Notas'
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
	'welcome' => 'Benvindo!'
);

$lang_album_admin_menu = array(
	'confirm_delete' => 'Tem a certeza que quer apagar este album \\nTodas as fotos e coment�rios ser�o tamb�m apagados.',
	'delete' => 'APAGAR',
	'modify' => 'MODIFICAR',
	'edit_pics' => 'EDITAR FOTOS',
);

$lang_list_categories = array(
	'home' => 'Home',
	'stat1' => '<b>[pictures]</b> fotos em <b>[albums]</b> albuns y <b>[cat]</b> categorias com <b>[comments]</b> coment�rios, visualizadas <b>[views]</b> vezes',
	'stat2' => '<b>[pictures]</b> fotos em <b>[albums]</b> albuns, visualizadas <b>[views]</b> vezes',
	'xx_s_gallery' => 'Galeri�a de %s',
	'stat3' => '<b>[pictures]</b> fotos em <b>[albums]</b> albuns com <b>[comments]</b> coment�rios, visualizadas <b>[views]</b> vezes'
);

$lang_list_users = array(
	'user_list' => 'Lista de utilizadores',
	'no_user_gal' => 'N�oo existem utilizadores com permiss�es para ter albums',
	'n_albums' => '%s album(s)',
	'n_pics' => '%s foto(s)'
);

$lang_list_albums = array(
	'n_pictures' => '%s fotos',
	'last_added' => ', �ltima adicionada em %s'
);

}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
	'login' => 'Login',
	'enter_login_pswd' => 'Introduza o seu nome de utilizador e a sua palavra passe para entrar',
	'username' => 'Nome de utilizador',
	'password' => 'Palavra passe',
	'remember_me' => 'Lembrar-me',
	'welcome' => 'Benvindo %s ...',
	'err_login' => '*** Login incorrecto. Tentar de novo ***',
	'err_already_logged_in' => 'J� estava validado no sistema!',
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
	'logout' => 'Sair',
	'bye' => 'Volte sempre, %s ...',
	'err_not_loged_in' => 'Erro! N�o est� validado no sistema!',
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
	'upd_alb_n' => 'Modificar album %s',
	'general_settings' => 'Configura��es gerais',
	'alb_title' => 'T�tulo do album',
	'alb_cat' => 'Categori�a do album',
	'alb_desc' => 'Descri��o do album',
	'alb_thumb' => 'Thumbnail do album',
	'alb_perm' => 'Permiss�es para este album',
	'can_view' => 'Este album pode ser visto por',
	'can_upload' => 'Os visitantes podem adicionar fotos',
	'can_post_comments' => 'Os visitantes poden adicionar coment�rios',
	'can_rate' => 'Os visitantes podem classificar as fotos',
	'user_gal' => 'Galeria de utilizador',
	'no_cat' => '* Sem categori�a *',
	'alb_empty' => 'O album est� vazio',
	'last_uploaded' => '�ltima foto adicionada',
	'public_alb' => 'Todo o mundo (album p�blico)',
	'me_only' => 'Somente eu (album privado)',
	'owner_only' => 'Somente el dono do album (%s)',
	'groupp_only' => 'Membros do grupo \'%s\'',
	'err_no_alb_to_modify' => 'N�o pode modificar nenhum album na la base de dados.',
	'update' => 'Modificar album'
);

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
	'already_rated' => 'desculpe mas j� votou nesta foto',
	'rate_ok' => 'O seu voto foi contabilizado',
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
Muito embora os administradores de {SITE_NAME} tentarem eliminar ou editar qualquer material desagrad�vel t�o rapidamente quanto poss�vel, � impossivel verificar todos os envios que se realizam. Por isso deve ter em conta que todos os envi�os feitos nesta web expressam os pontos de vista e opini�es dos seus autores e n�o  os dos administradores ou webmasters (excepto os adicionados por eles pr�prios).<br />
<br />
Concorda n�o adicionar nenhum material abusivo, obsceno, vulgar, escandaloso, odioso, amea�ador, de orienta��o sexual, ou algum outro que possa violar qualquer lei aplic�vel.  Concorda que o webmaster, o administrador e os acessores de { SITE_NAME } tenham o direito de iliminar ou de corrigir qualquer conte�do em qualquer momento se o consideram necess�rio.  Como utilizador, concorda que  qualquer informa��o enviada seja armazenada nuna base de dados.  Garantindo que esta informa��o, n�o ser� divulgada a terceiros sem o seu consentimento.  O webmaster e o administrador n�o podem ser considerados respons�veis por alguma tentativa de destrui��o da base de dados que possa conduzir � perda da mesma.<br />
<br />
Este site utiliza cookies para armazenar a informa��o no seu processador.  Estes cookies servem para melhorar a navega��o neste site.  O endere�o de e-mail  � utilizado somente para confirmar os seus dados e a password de registo.<br />
<br />
Premindo 'Concordo' expressa o seu acordo com estas condi��es.
EOT;

$lang_register_php = array(
	'page_title' => 'Registo de novo utilizador',
	'term_cond' => 'Termos e condi��es',
	'i_agree' => 'Estou de acordo',
	'submit' => 'Enviar pedido de registo',
	'err_user_exists' => 'O nome de utilizador escolhido j� existe, por favor escolha outro diferente',
	'err_password_mismatch' => 'As duas palavras-passe n�o s�o iguais, por favor volte a introduzi-las',
	'err_uname_short' => 'O nome do utilizador deve ter pelo menos 2 carecteres',
	'err_password_short' => 'A palavra-passe deve ter pelo menos 2 caracteres',
	'err_uname_pass_diff' => 'O nome de utilizador e a palavra-passe devem ser diferentes',
	'err_invalid_email' => 'O endere�o de e-mail n�o � v�lido',
	'err_duplicate_email' => 'Outro utilizador j� se encontra registado com o endere�o de e-amil que forneceu',
	'enter_info' => 'Introduza a informa��o de registo',
	'required_info' => 'Informa��o requerida',
	'optional_info' => 'Informa��o opcional',
	'username' => 'Nome de utilizador',
	'password' => 'Palavra-passe',
	'password_again' => 'Reescrever palavra-passe',
	'email' => 'E-mail',
	'location' => 'Local',
	'interests' => 'Interesses',
	'website' => 'P�gina web',
	'occupation' => 'Ocupa��o',
	'error' => 'ERRO',
	'confirm_email_subject' => '%s - Confirma��o de registo',
	'information' => 'Informa��o',
	'failed_sending_email' => 'O e-mail de confirma��o de registo n�o pode ser enviado!',
	'thank_you' => 'Obrigado por se registar.<br /><br />Enviamos um e-mail com informa��o sobre a activa��o da sua conta para o endere�o de e-mail fornecido.',
	'acct_created' => 'A sua conta de utilizador foi criada e j� pode aceder ao sistema com o seu nome de utilizador e palavra-passe',
	'acct_active' => 'A sua conta de utilizador est� activa e j� pode aceder ao sistema com o seu nome de utilizador e palavra-passe',
	'acct_already_act' => 'A sua conta j� estava activa!',
	'acct_act_failed' => 'Esta conta n�o pode ser activada!',
	'err_unk_user' => 'O utilizador seleccionado n�o existe!',
	'x_s_profile' => 'Perfil de %s',
	'group' => 'Grupo',
	'reg_date' => 'Data de registo',
	'disk_usage' => 'Uso de disco',
	'change_pass' => 'Alterar palavra passe',
	'current_pass' => 'Palavra-passe actual',
	'new_pass' => 'Nova palavra-passe',
	'new_pass_again' => 'Reescrever nova palavra passe',
	'err_curr_pass' => 'A palavra passe actual � incorrecta',
	'apply_modif' => 'Guardar as altera��es',
	'change_pass' => 'Alterar palavra-passe',
	'update_success' => 'O seu perfil foi actualizado',
	'pass_chg_success' => 'A tua palavra passe foi alterada ',
	'pass_chg_error' => 'A sua palavra passe n�o foi alterada',
);

$lang_register_confirm_email = <<<EOT
Obrigado por se registar em {SITE_NAME}

O seu nome de utilizador �: "{USER_NAME}"
A sua palavra passe �: "{PASSWORD}"

Para terminar de activar a sua conta, deve clickar sobre o link que
aparece abaixo ou copi�-lo e col�r-lo no seu browser de Internet.

{ACT_LINK}

Comprimentos.

Os administradores de {SITE_NAME}

EOT;

}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
	'title' => 'Rever coment�rios',
	'no_comment' => 'N�o existem coment�rios para mostrar',
	'n_comm_del' => '%s coment�rio(s) apagado(s)',
	'n_comm_disp' => 'N�mero de coment�rios a mostrar',
	'see_prev' => 'Ver o anterior',
	'see_next' => 'Ver o siguiente',
	'del_comm' => 'Apagar coment�rios seleccionados',
);


// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //

if (defined('SEARCH_PHP')) $lang_search_php = array(
	0 => 'Procorar entre todas as fotos',
);

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
	'page_title' => 'Procurar novas fotos',
	'select_dir' => 'Selecciona direct�rio',
	'select_dir_msg' => 'Esta fun��o permite adicionar de forma autom�tica as fotos que carregou para o seu servidoratrav�s de FTP.<br /><br />Seleccione o direct�rio para onde carregou as suas fotos',
	'no_pic_to_add' => 'N�oo h� nenhuma foto para adicionar',
	'need_one_album' => 'Necessita de pelo menos um album para utilizar esta func�o',
	'warning' => 'Aten��o',
	'change_perm' => 'O script n�oo pode escrierr neste direct�rio, necessita alterar as suas permiss�es para modo 755 ou 777 antes de tentar de novo!',
	'target_album' => '<b>Colocar as fotos do direct�rio &quot;</b>%s<b>&quot; no album </b>%s',
	'folder' => 'Pasta',
	'image' => 'Foto',
	'album' => 'Album',
	'result' => 'Resultado',
	'dir_ro' => 'N�o � poss�vel escrever. ',
	'dir_cant_read' => 'N�o � poss�vel ler. ',
	'insert' => 'Adicionar novas fotos � galeria',
	'list_new_pic' => 'Lista de novas fotos',
	'insert_selected' => 'Adicionar as fotos seleccionadas',
	'no_pic_found' => 'N�o se encontrou nenhuma foto nova',
	'be_patient' => 'Por favor, s� paciente, o script necessita de tempo para adicionar as fotos',
	'notes' =>  '<ul>'.
				'<li><b>OK</b> : significa que a foto foi adicionada sem problemas'.
				'<li><b>DP</b> : significa que a foto � um duplicado e j� existe na base de dados'.
				'<li><b>PB</b> : significa que a foto n�o pode ser adicionada, por favor verifica a configura��o e as permiss�es dos direct�rios onde est�o as fotos'.
				'<li>Se os icones OK, DP, PB n�o aparecerem, prime sobre o icone de imagem n�o carregada para ver o erro produzido pelo PHP'.
				'<li>Se o browser faz um timeout, prime o �cone Actualizar'.
				'</ul>',
);


// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void


// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
	'title' => 'Inserir nova foto',
	'max_fsize' => 'O tamanho m�ximo de fichero admitido � de %s KB',
	'album' => 'Album',
	'picture' => 'Foto',
	'pic_title' => 'T��tulo da foto',
	'description' => 'Descri��o da foto',
	'keywords' => 'Palavras chave (separadas por espa�os)',
	'err_no_alb_uploadables' => 'Desculpe, mas n�o h� nenhum album onde seja permitido inserir novas fotos',
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
	'title' => 'Administrar utilizadores',
	'name_a' => 'Ascendente por nome',
	'name_d' => 'Descendente por nome',
	'group_a' => 'Ascendente por grupo',
	'group_d' => 'Descendente por grupo',
	'reg_a' => 'Ascendente por data de registo',
	'reg_d' => 'Descendente por data de registo',
	'pic_a' => 'Ascendente por total de fotos',
	'pic_d' => 'Descendente por total de fotos',
	'disku_a' => 'Ascendente por uso de disco',
	'disku_d' => 'Descendente por uso de disco',
	'sort_by' => 'Ordenar utilizadores por',
	'err_no_users' => 'A tabela de utilizadores est� vazia!',
	'err_edit_self' => 'N�o pode editar o seu pr�prio perfil, use a op��on \'Meu perfil de utilizador\' para isso',
	'edit' => 'EDITAR',
	'delete' => 'APAGAR',
	'name' => 'Nome de utilizador',
	'group' => 'Grupo',
	'inactive' => 'Inactivo',
	'operations' => 'Opera��es',
	'pictures' => 'Fotos',
	'disk_space' => 'Espa�o usado / Quota',
	'registered_on' => 'Registado no dia',
	'u_user_on_p_pages' => '%d utilizadores na %d p�gina(s)',
	'confirm_del' => 'tem a certeza que quer apagar esta utilizador? \\nTodas as suas fotos e albuns ser�o tambem apagados.',
	'mail' => 'MAIL',
	'err_unknown_user' => 'O utilizador selecionado n�o existe!',
	'modify_user' => 'Modificar utilizador',
	'notes' => 'Notas',
	'note_list' => '<li>Se n�o quizer alterar a palavra-passe actual, deixe o campo "palavra-passe" vazi�o',
	'password' => 'Palavra-passe',
	'user_active' => 'O utilizador activo',
	'user_group' => 'Grupo de utilizadores',
	'user_email' => 'E-mail do utilizador',
	'user_web_site' => 'P�gina web do utilizador',
	'create_new_user' => 'Criar novo utilizador',
	'user_location' => 'Local do utilizador',
	'user_interests' => 'Interesses do utilizador',
	'user_occupation' => 'Ocupa��o do utilizador',
);
?>