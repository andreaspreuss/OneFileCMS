<?php
// OneFileCMS Language Settings v3.5.20

$_['LANGUAGE'] = 'Russian';
$_['LANG'] = 'RU';

// If no translation or value is desired for a particular setting, do not delete
// the actual setting variable, just set it to an empty string.
// For example:  $_['some_unused_setting'] = '';
//
// Remember to slash-escape any single quotes that may be within the text:  \'
// The back-slash itself may or may not also need to be escaped:  \\
//
// If present as a trailing comment, "## NT ##" means 'Need Translation'.
//
// These first few settings control a few font and layout settings.
// In some instances, some langauges may use significantly longer words or phrases than others.
// So, a smaller font or less spacing may be desirable in those places to preserve page layout.
$_['front_links_font_size']  = '0.9em';   //Buttons on Index page.
$_['front_links_margin_L']   = '0.7em';
$_['MCD_margin_R']           = '1.0em';   //[Move] [Copy] [Delete] buttons
$_['button_font_size']       = '0.8em';   //Buttons on Edit page.
$_['button_margin_L']        = '0.7em';
$_['button_padding']         = '4px 5px'; //T R B L
$_['image_info_font_size']   = '1em';     //show_img_msg_01  &  _02
$_['image_info_pos']         = '';        //If 1 or true, moves the info down a line for more space.
$_['select_all_label_size']  = '.84em';   //Font size of $_['Select_All']
$_['select_all_label_width'] = '72px';    //Width of space for $_['Select_All']

$_['HTML']    = 'HTML';
$_['WYSIWYG'] = 'WYSIWYG';

$_['Admin']    = 'Админка';
$_['bytes']    = 'байт';
$_['Cancel']   = 'Отмена';
$_['cancelled'] = 'отменен';
$_['Close']    = 'Закрыть';
$_['Copy']     = 'Копия';
$_['Copied']   = 'Копировать';
$_['Create']   = 'Создать';
$_['Date']     = 'Дата';
$_['Delete']   = 'Удалить';
$_['DELETE']   = 'УДАЛИТЬ';
$_['Deleted']  = 'Удалено';
$_['Edit']     = 'Редактировать';
$_['Enter']    = 'Вход';
$_['Error']    = 'Ошибка';
$_['errors']   = 'ошибки';
$_['ext']      = 'ext';
$_['File']     = 'Файл';
$_['files']    = 'файлы';
$_['Folder']   = 'Папка';
$_['folders']  = 'папки';
$_['From']     = 'из';
$_['Hash']     = 'Хэш';
$_['Move']     = 'Переместить';
$_['Moved']    = 'Перемещено';
$_['Name']     = 'имя';
$_['on']       = 'в';
$_['off']      = 'от';
$_['Password'] = 'Пароль';
$_['Rename']   = 'Rename';  //## NT ##
$_['reset']    = 'Сбросить';
$_['save_1']   = 'Сохранить';
$_['save_2']   = 'СОХРАНИТЬ ИЗМЕНЕНИЯ';
$_['Size']     = 'Размер';
$_['Source']   = 'Source';  //## NT ##
$_['successful'] = 'успешно';
$_['To']       = 'В';
$_['Upload']   = 'Загрузить';
$_['Username'] = 'Логин';
$_['View']     = 'вид';

$_['Working']      = 'Working - please wait...'; //## NT ##
$_['Log_In']       = 'Войти';
$_['Log_Out']      = 'Выйти';
$_['Admin_Options'] = 'Настройки Администратора';
$_['Are_you_sure'] = 'Вы уверены?';
$_['View_Raw']     = 'View Raw'; //## NT ##
$_['Open_View']    = 'Открыть/Открыть в окне браузера';
$_['Edit_View']    = 'Ред. / Смотреть';
$_['Wide_View']    = 'Широкий Обзор';
$_['Normal_View']  = 'Нормальный Обзор';
$_['Word_Wrap']    = 'Word Wrap'; //## NT ##
$_['Line_Wrap']    = 'Line Wrap'; //## NT ##
$_['Upload_File']  = 'Загрузить файл';
$_['New_File']     = 'Новый файл';
$_['Ren_Move']     = 'Переименовать / Переместить';
$_['Ren_Moved']    = 'Переименованно / Перемещенно';
$_['folders_first'] = 'folders first'; //## NT ##
$_['folders_first_info'] = 'Sort folders first, but don\'t change primary sort.'; //## NT ##
$_['New_Folder']   = 'Новая папка';
$_['Ren_Folder']   = 'Переименовать / Переместить папку';
$_['Submit']       = 'Отправить изменения';
$_['Move_Files']   = 'Переместить Файл(ы)';
$_['Copy_Files']   = 'Копировать Файл(ы)';
$_['Del_Files']    = 'Удалить Файл(ы)';
$_['Selected_Files'] = 'Выбранные Папки и Файлы';
$_['Select_All']   = 'Выбрать все';
$_['Clear_All']    = 'Очистить всё';
$_['New_Location'] = 'Новая локализация';
$_['No_files']     = 'Нет выбранных файлов.';
$_['Not_found']    = 'Не найдено';
$_['Invalid_path'] = 'Invalid path'; //## NT ##

$_['verify_msg_01']     = 'Сессия истекла.';
$_['verify_msg_02']     = 'НЕВЕРНЫЙ ЗАПРОС';
$_['get_get_msg_01']    = 'Файл не существует:';
$_['get_get_msg_02']    = 'Неверный запрос к странице:';
$_['check_path_msg_02'] = '"точка" или "точка точка" недопустимая сегментация пути.';
$_['check_path_msg_03'] = 'Ппуть или имя файла содержит недопустимые символы:';
$_['ord_msg_01']        = 'Файл с таким именем уже существует в главной директории.';
$_['ord_msg_02']        = 'Сохранить как';
$_['rCopy_msg_01']      = 'Папка не может быть скопированна в одну из своих под-папок.';
$_['show_img_msg_01']   = 'Изображене показано на ~';
$_['show_img_msg_02']   = '% от полного размера (Ш x Д =';

$_['hash_txt_01']   = 'Хэш сгенерированный на этой странице может быть использован для обновления вручную $HASHWORD в OneFileCMS, или во внешнем файле конфигурации. В любом случае, убедитесь, что вы помните пароль, используемый для создания хэш!';
$_['hash_txt_06']   = 'Введите желаемый пароль в поле ввода выше и нажмите Enter.';
$_['hash_txt_07']   = 'Хэш будет отображаться в желтом окне сообщения, которое выше.';
$_['hash_txt_08']   = 'Скопируйте и вставьте новый хэш $HASHWORD переменную в файл конфига.';
$_['hash_txt_09']   = 'Убедитесь в том, чтобы вы полностью скопировали хэш (пробелов, кавычек и т.д..';
$_['hash_txt_10']   = 'Нажмите 2 раза, для того что-бы выбрать его...';
$_['hash_txt_12']   = 'Когда будете готовы, выйдите из системы и войдите снова.';
$_['pass_to_hash']  = 'Пароль для хеширования:';
$_['Generate_Hash'] = 'Сгенерировать Хэш';

$_['login_txt_01']  = 'Логин:';
$_['login_txt_02']  = 'Пароль:';
$_['login_msg_01a'] = 'Имело место быть';
$_['login_msg_01b'] = 'неудачных попыток входа в систему.';
$_['login_msg_02a'] = 'Пожалуйста подождите';
$_['login_msg_02b'] = 'несколько секунд, чтобы попробовать ещё раз.';
$_['login_msg_03']  = 'ПРОБЛЕМА ПРИ ПОПЫТКЕ ВХОДА #';

$_['edit_note_00']  = 'ПРИМЕЧАНИЕ:';
$_['edit_note_01a'] = 'Поните- ваша';
$_['edit_note_01b'] = 'это';
$_['edit_note_02']  = 'Сохранить изменения перед окончаниеи сессии, иначе они будут утеряны!';
$_['edit_note_03']  = 'В некоторых браузерах, таких как Chrome, если вы перемещаетесь [Назад] или [Вперед], измения могут обновиться. Для этого нажмите клавишу F5, либо в браузере нажмите [Обновить]..';

$_['edit_h2_1']   = 'Просмотреть:';
$_['edit_h2_2']   = 'Редактировать:';
$_['edit_txt_00'] = 'Edit disabled.'; //## NT ##
$_['edit_txt_01'] = 'Неизвестный текст или неизвестный тип файла. Редактирование невозможно.';
$_['edit_txt_02'] = 'Возможно файл содержит недопустимый символ. Редактирование и Просмотр невозможны.';
$_['edit_txt_03'] = 'htmlspecialchars() возвращает к предыдущим обновлениям файла.';
$_['edit_txt_04'] = 'Это поведение зависит от версии вашего PHP.';

$_['too_large_to_edit_01'] = 'Редактирование невозожно. Размер файла >';
$_['too_large_to_edit_02'] = 'В некоторых браузерах, таких как (ie: IE) неустойчивое редактирование HTML кода в файлах большого размера <textarea>.';
$_['too_large_to_edit_03'] = 'Настройте $MAX_EDIT_SIZE в конфигураторе OneFileCMS по мере необходимости.';
$_['too_large_to_edit_04'] = 'Простым методом тестирования проб и ошибок можно определить практический предел для данного браузера / компьютера.';
$_['too_large_to_view_01'] = 'Просмотр невозможен. Размер файла >';
$_['too_large_to_view_02'] = 'Нажмите на название файла, чтобы просмотреть, как обычно он отображается в окне браузера.';
$_['too_large_to_view_03'] = 'Настройте $MAX_VIEW_SIZE в конфигураторе OneFileCMS по мере необходимости.';
$_['too_large_to_view_04'] = '(Значения по умолчанию $MAX_VIEW_SIZE установлены произвольно, и могут быть скорректированны по желанию.)';

$_['meta_txt_01'] = 'Размер файла:';
$_['meta_txt_03'] = 'Обновлен:';

$_['edit_msg_01'] = 'Файл сохранён:';
$_['edit_msg_02'] = 'записанных байт.';
$_['edit_msg_03'] = 'Существовала ошибка сохраниния файла .';

$_['upload_txt_03'] = 'Максимальный размер каждого файла:';
$_['upload_txt_01'] = '(php.ini: upload_max_filesize)'; //## NT ##
$_['upload_txt_04'] = 'Максимальный суммарный размер загружаемого:';
$_['upload_txt_02'] = '(php.ini: post_max_size)'; //## NT ##
$_['upload_txt_05'] = 'Для загруженных файлов, которые уже существуют: ';
$_['upload_txt_06'] = 'Переименование (в файле filename.ext.001 и.т.д...)';
$_['upload_txt_07'] = 'Заменить';

$_['upload_err_01'] = 'Ошибка 1: Файл слишком большой. Из php.ini:';
$_['upload_err_02'] = 'Ошибка 2: Файл слишком большой. (Превышает MAX_FILE_SIZE HTML элементов)';
$_['upload_err_03'] = 'Ошибка 3: Загруженный файл был загружен лишь частично.';
$_['upload_err_04'] = 'Ошибка 4: Файл не был загружен.';
$_['upload_err_05'] = 'Ошибка 5:';
$_['upload_err_06'] = 'Ошибка 6: Отсутствует временная папка.';
$_['upload_err_07'] = 'Ошибка 7: Не удалось записать файл на диск.';
$_['upload_err_08'] = 'Ошибка 8: Расширение PHP остановило загрузку файлов.';
$_['upload_error_01a'] = 'Ошибка при загрузке. Общий объём данных  (размер файла) превысил post_max_size =';
$_['upload_error_01b'] = '(из php.ini)';

$_['upload_msg_02'] = 'Папка назначения недействительна:';
$_['upload_msg_03'] = 'Загрузка отменена.';
$_['upload_msg_04'] = 'Загружается:';
$_['upload_msg_05'] = 'Загрузка прошла успешно!';
$_['upload_msg_06'] = 'Загрузка не удалась:';
$_['upload_msg_07'] = 'предварительно существующий файл был перезаписан.';

$_['new_file_txt_01'] = 'Файл или папка могут быть созданы в текущей директории.';
$_['new_file_txt_02'] = 'Содержатся некоторые недопустимые символы:';
$_['new_file_msg_01'] = 'Файл или папка не создаются:';
$_['new_file_msg_02'] = 'Название содержит недопустимый символ:';
$_['new_file_msg_04'] = 'Файл или папка уже существуют:';
$_['new_file_msg_05'] = 'Созданный файл:';
$_['new_file_msg_07'] = 'Созданная папка:';

$_['CRM_txt_02'] = 'Новая локализация уже должна существовать.';
$_['CRM_txt_04'] = 'Новое Имя';
$_['CRM_msg_01'] = 'Ошибка - новая локализация не существует:';
$_['CRM_msg_02'] = 'Ошибка - исходный файл не существует:';
$_['CRM_msg_03'] = 'Ошибка - новый файл или папка уже существуют:';
$_['CRM_msg_05'] = 'Ошибка при';

$_['delete_msg_03']   = 'Удалить ошибку:';
$_['session_warning'] = 'Внимание: Близится окончание сессии!';
$_['session_expired'] = 'ВРЕМЯ СЕССИИ ИСТЕКЛО';
$_['unload_unsaved']  = ' Несохраненные изменения будут потеряны!';
$_['confirm_reset']   = 'Сбросить файл с несохранёнными изменениями?';
$_['OFCMS_requires']  = 'OneFileCMS требует PHP';
$_['logout_msg']      = 'Вы успешно вышли из системы.';
$_['edit_caution_01'] = 'ВНИМАНИЕ';
$_['edit_caution_02'] = 'Осторожно редактируйте активную копию OneFileCMS - Сделайте резервную копию !!';
$_['time_out_txt']    = 'Сессия закончится через::';

$_['error_reporting_01'] = 'Вывести ошибки в';
$_['error_reporting_02'] = 'Лог ошибок в';
$_['error_reporting_03'] = 'Ошибки отчётности установленны в';
$_['error_reporting_04'] = 'Показаны типы ошибок';
$_['error_reporting_05'] = 'Неожиданный ранний выход';
$_['error_reporting_06'] = '(ничего нет, даже пробела)';

$_['admin_txt_00'] = 'Найти старую резервную копию';
$_['admin_txt_01'] = 'Файл резервной копии был создан в случае ошибки при изменении имени пользователя и пароля. Таким образом, он может содержать устаревшую информацию и должен быть удален. В любом случае, он будет автоматически заменен на файл с новым паролем или логином пользователя.';
$_['admin_txt_02'] = 'Общая информация';
$_['admin_txt_14'] = 'Для небольшого улучшения безопасности в OneFileCMS изменён метод хеширования паролей (его нужно держать в тайне как и основной пароль). Каждый в дальнейшем может Вам понадобиться..';
$_['admin_txt_16'] = 'OneFileCMS может быть использована для редактирования себе. Однако, будьте уверены, что у Вас есть резервная копия...';

$_['pw_current'] = 'Текущий Пароль';
$_['pw_change']  = 'Изменить Пароль';
$_['pw_new']     = 'Новый Пароль';
$_['pw_confirm'] = 'Подтверждение Нового Пароля';

$_['un_change']  = 'Подтверждение Логина';
$_['un_new']     = 'Новый Логин';
$_['un_confirm'] = 'Подтверждение Нового Логина';

$_['pw_txt_02'] = 'Пароль / Логин правила:';
$_['pw_txt_04'] = 'С учётом регистра: "A" =/= "a"';
$_['pw_txt_06'] = 'Не должен начинаться или заканчиваться с пробелов и различных символов.';
$_['pw_txt_08'] = 'Может содержать пробелы в середине. Пример: "Это мой логин или пароль!"';
$_['pw_txt_10'] = 'Пробелы в начале и конце игнорируются.';
$_['pw_txt_12'] = 'При записи изменения обновляется лишь только один активный файл OneFileCMS, при этом сразу создаётся его старая копия.';
$_['pw_txt_14'] = 'Если неправильный текущий пароль будет введён или зарегистрирован, Вы можете воспользоваться бекапом.';

$_['change_pw_01'] = 'Пароль изменён!';
$_['change_pw_02'] = 'Пароль не изменён.';
$_['change_pw_03'] = 'Неправильный текущий пароль, войдите заново чтобы повторить попытку.';
$_['change_pw_04'] = 'Данные "Нового пароля" и "Подтверждения нового пароля" не совпадают.';
$_['change_pw_05'] = 'Обновить';
$_['change_pw_06'] = 'внежнюю конфигурацию файла';
$_['change_pw_07'] = 'All fields are required.'; //## NT ##

$_['change_un_01'] = 'Логин изменён!';
$_['change_un_02'] = 'Логин НЕ изменён.';

$_['update_failed'] = 'Обновление не удалось - файл не сохранился.';

$_['mcd_msg_01'] = 'файлы перемещаются.';
$_['mcd_msg_02'] = 'файлы копируются.';
$_['mcd_msg_03'] = 'файлы удалены.';

