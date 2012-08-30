<?php
// OneFileCMS Language Settings v3.4.0 (same as 3.3.18)

$_['LANGUAGE'] = 'English';
$_['LANG'] = 'EN';

// If no translation or value is desired for a particular setting, do not delete
// the actual setting variable, just set it to an empty string.
// For example:  $_['some_unused_setting'] = '';
//
// Remember to slash-escape any single quotes that may be within the text:  \'
// The back-slash itself may or may not also need to be escaped:  \\
//
// If present as a trailing comment, "## NT ##" means 'Need Translation'.
//
// In some instances, some langauges may use significantly longer words or phrases than others.
// So, a smaller font or less spacing may be desirable in those places to preserve page layout.
//
$_['front_links_font_size'] = '1em';    //Buttons on Index page.
$_['front_links_margin_R']  = '1em';   
$_['button_font_size']      = '.9em';   //Buttons on Edit page.
$_['button_margin_L']       = '.7em';  
$_['button_padding']        = '4px 10px';
$_['image_info_font_size']  = '1em';    //show_img_msg_01  &  _02
$_['image_info_pos']        = '';       //If 1 or true, moves the info down a line for more space.
$_['select_all_label_size'] = '.84em';  //Font size of $_['Select_All']
$_['select_all_div_width']  = '73px';   //Width of space for $_['Select_All']

$_['R'] = 'R'; //R ename
$_['C'] = 'C'; //C opy
$_['D'] = 'D'; //D elete

$_['Admin']   = 'Admin';  
$_['Cancel']  = 'Cancel'; 
$_['Close']   = 'Close';  
$_['Copy']    = 'Copy';   
$_['Copied']  = 'Copied'; 
$_['Create']  = 'Create'; 
$_['Delete']  = 'Delete'; 
$_['DELETE']  = 'DELETE'; 
$_['Deleted'] = 'Deleted';
$_['Edit']    = 'Edit';   
$_['Enter']   = 'Enter';  
$_['errors']  = 'errors'; 
$_['File']    = 'File';   
$_['Folder']  = 'Folder'; 
$_['From']    = 'From';   
$_['Hash']    = 'Hash';   
$_['Move']    = 'Move';   
$_['Moved']   = 'Moved';  
$_['on']      = 'on';     
$_['Password'] = 'Password';

$_['Rename']     = 'Rename';    
$_['successful'] = 'successful';
$_['To']         = 'To';        
$_['Upload']     = 'Upload';    
$_['Username']   = 'Username';  
$_['Log_In']     = 'Log In';    
$_['Log_Out']    = 'Log Out';   

$_['Upload_File']    = 'Upload File';        
$_['New_File']       = 'New File';           
$_['Ren_Move']       = 'Rename / Move';      
$_['Ren_Moved']      = 'Renamed / Moved';    
$_['New_Folder']     = 'New Folder';         
$_['Ren_Folder']     = 'Rename / Move Folder';
$_['Del_Folder']     = 'Delete Folder';      
$_['Submit']         = 'Submit Request';     
$_['Move_Files']     = 'Move File(s)';       
$_['Copy_Files']     = 'Copy File(s)';       
$_['Del_Files']      = 'Delete File(s)';     
$_['Selected_Files'] = 'Selected Files';     
$_['Select_All']     = 'Select All';         
$_['Clear_All']      = 'Clear All';          
$_['New_location']   = 'New Location';       
$_['No_files']       = 'No files selected.'; 
$_['No_action']      = 'No action selected.';
$_['Not_found']      = 'Not found';          
$_['pass_to_hash']   = 'Password to hash:';  
$_['Generate_Hash']  = 'Generate Hash';      

$_['save_1']      = 'Save';
$_['save_2']      = 'SAVE CHANGES!';
$_['reset']       = 'Reset - loose changes';
$_['Wide_View']   = 'Wide View';
$_['Normal_View'] = 'Normal View';

$_['verify_msg_01']  = 'Session expired.';
$_['verify_msg_02']  = 'INVALID POST';

$_['get_get_msg_01']    = 'File does not exist:';
$_['get_get_msg_02']    = 'Invalid page request:';
$_['get_get_msg_03']    = 'Missing information for requested page';
$_['check_path_msg_01'] = 'Directory does not exist:';
$_['ord_msg_01']        = 'A file with that name already exists in the target directory.';
$_['ord_msg_02']        = 'Saving as';
$_['show_img_msg_01']   = 'Image shown at ~';
$_['show_img_msg_02']   = '% of full size (W x H =';

$_['hash_txt_01'] = 'The hashes generated by this page may be used to manually update $HASHWORD in OneFileCMS, or in an external config file.  In either case, make sure you remember the password used to generate the hash!';
$_['hash_txt_06'] = 'Type your desired password in the input field above and hit Enter.';
$_['hash_txt_07'] = 'The hash will be displayed in a yellow message box above that.';
$_['hash_txt_08'] = 'Copy and paste the new hash to the $HASHWORD variable in the config section.';
$_['hash_txt_09'] = 'Make sure to copy ALL of, and ONLY, the hash (no leading or trailing spaces etc).';
$_['hash_txt_10'] = 'A double-click should select it...';
$_['hash_txt_12'] = 'When ready, logout and login.';

$_['login_txt_01']  = 'Username:';
$_['login_txt_02']  = 'Password:';
$_['login_msg_01a'] = 'There have been';
$_['login_msg_01b'] = 'invalid login attempts.';
$_['login_msg_02a'] = 'Please wait';
$_['login_msg_02b'] = 'seconds to try again.';
$_['login_msg_03']  = 'INVALID LOGIN ATTEMPT #';

$_['edit_note_00']  = 'NOTES:';
$_['edit_note_01a'] = 'Remember- your';
$_['edit_note_01b'] = 'is';
$_['edit_note_02']  = 'So save changes before the clock runs out, or the changes will be lost!';
$_['edit_note_03']  = 'With some browsers, such as Chrome, if you click the browser [Back] then browser [Forward], the file state may not be accurate. To correct, click the browser\'s [Reload].';
$_['edit_note_04']  = 'Chrome may disable some javascript in a page if the page even appears to contain inline javascript in certain contexts. This can affect some features of the OneFileCMS edit page when editing files that legitimately contain such code, such as OneFileCMS itself. However, such files can still be edited and saved with OneFileCMS. The primary function lost is the incidental change of background colors (red/green) indicating whether or not the file has unsaved changes. The issue will be noticed after the first save of such a file.';

$_['edit_h2_1']   = 'Viewing:';
$_['edit_h2_2']   = 'Editing:';
$_['edit_txt_01'] = 'Non-text or unkown file type. Edit disabled.';
$_['edit_txt_02'] = 'File possibly contains an invalid character. Edit and view disabled.';
$_['edit_txt_03'] = 'htmlspecialchars() returned an empty string from what may be an otherwise valid file.';
$_['edit_txt_04'] = 'This behavior can be inconsistant from version to version of php.';

$_['too_large_to_edit_01a'] = 'Edit disabled. Filesize >';
$_['too_large_to_edit_01b'] = 'bytes.';
$_['too_large_to_edit_02']  = 'Some browsers (ie: IE) bog down or become unstable while editing a large file in an HTML <textarea>.';
$_['too_large_to_edit_03']  = 'Adjust $MAX_EDIT_SIZE in the configuration section of OneFileCMS as needed.';
$_['too_large_to_edit_04']  = 'A simple trial and error test can determine a practical limit for a given browser/computer.';
$_['too_large_to_view_01a'] = 'View disabled. Filesize >';
$_['too_large_to_view_01b'] = 'bytes.';
$_['too_large_to_view_02']  = 'Click the file name above to view as normally rendered in a browser window.';
$_['too_large_to_view_03']  = 'Adjust $MAX_VIEW_SIZE in the configuration section of OneFileCMS as needed.';
$_['too_large_to_view_04']  = '(The default value for $MAX_VIEW_SIZE is completely arbitrary, and may be adjusted as desired.)';

$_['meta_txt_01'] = 'Filesize:';
$_['meta_txt_02'] = 'bytes.';
$_['meta_txt_03'] = 'Updated:';
$_['edit_msg_01'] = 'File saved:';
$_['edit_msg_02'] = 'bytes written.';
$_['edit_msg_03'] = 'There was an error saving file.';

$_['upload_txt_01']  = 'per upload_max_filesize in php.ini.';
$_['upload_txt_02']  = 'per post_max_size in php.ini';
$_['upload_txt_03']  = 'Note: Maximum upload file size is:';

$_['upload_err_01a'] = 'Error 1: File too large.';
$_['upload_err_01b'] = '(From php.ini)';
$_['upload_err_02a'] = 'Error 2: File too large.';
$_['upload_err_02b'] = '(From OneFileCMS)';
$_['upload_err_03']  = 'Error 3: The uploaded file was only partially uploaded.';
$_['upload_err_04']  = 'Error 4: No file was uploaded.';
$_['upload_err_05']  = 'Error 5:';
$_['upload_err_06']  = 'Error 6: Missing a temporary folder.';
$_['upload_err_07']  = 'Error 7: Failed to write file to disk.';
$_['upload_err_08']  = 'Error 8: A PHP extension stopped the file upload.';

$_['upload_msg_01'] = 'No file selected for upload.';
$_['upload_msg_02'] = 'Destination folder does not exist:';
$_['upload_msg_03'] = 'Upload cancelled.';
$_['upload_msg_04'] = 'Uploading:';
$_['upload_msg_05'] = 'Upload successful!';
$_['upload_msg_06'] = 'Upload failed:';

$_['new_file_txt_01'] = 'File will be created in the current folder.';
$_['new_file_txt_02'] = 'Some invalid characters are:';
$_['new_file_msg_01'] = 'New file not created:';
$_['new_file_msg_02'] = 'Name contains invalid character(s):';
$_['new_file_msg_03'] = 'New file not created - no name given';
$_['new_file_msg_04'] = 'File already exists:';
$_['new_file_msg_05'] = 'Created file:';
$_['new_file_msg_06'] = 'Error - new file not created:';

$_['CRM_txt_01']  = 'To move a file or folder, change the path/to/folder/or_file.';
$_['CRM_txt_02']  = 'The new location must already exist.';
$_['CRM_txt_03']  = 'Old name';
$_['CRM_txt_04']  = 'New name';
$_['CRM_msg_01']  = 'Error - new parent location does not exist:';
$_['CRM_msg_02']  = 'Error - source file does not exist:';
$_['CRM_msg_03']  = 'Error - target filename already exists:';
$_['CRM_msg_04']  = 'to';
$_['CRM_msg_05a'] = 'Error during';
$_['CRM_msg_05b'] = 'from the above to the following:';

$_['delete_txt_01'] = 'Are you sure?';
$_['delete_msg_01'] = 'Deleted file:';
$_['delete_msg_02'] = 'Error deleting';

$_['new_folder_txt_1']  = 'Folder will be created in the current folder.';
$_['new_folder_txt_2']  = 'Some invalid characters are:';
$_['new_folder_msg_01'] = 'New folder not created:';
$_['new_folder_msg_02'] = 'Name contains invalid character(s):';
$_['new_folder_msg_03'] = 'New folder not created - no name given.';
$_['new_folder_msg_04'] = 'Folder already exists:';
$_['new_folder_msg_05'] = 'Created folder:';
$_['new_folder_msg_06'] = 'Error - new folder not created:';

$_['delete_folder_txt_01'] = 'Are you sure?';
$_['delete_folder_msg_01'] = 'Folder not empty. Folders must be empty before they can be deleted.';
$_['delete_folder_msg_02'] = 'Deleted folder:';
$_['delete_folder_msg_03'] = 'an error occurred during delete.';

$_['page_title_login']      = 'Log In';                  
$_['page_title_admin']      = 'Administration Options';  
$_['page_title_hash']       = 'Generate a Password Hash';
$_['page_title_change_pw']  = 'Change Password';         
$_['page_title_change_un']  = 'Change Username';         
$_['page_title_edit']       = 'Edit / View File';        
$_['page_title_upload']     = 'Upload File';             
$_['page_title_new_file']   = 'New File';                
$_['page_title_ren']        = 'Rename / Move File';      
$_['page_title_copy']       = 'Copy File(s)';            
$_['page_title_mov']        = 'Move File(s)';            
$_['page_title_del']        = 'Delete File(s)';          
$_['page_title_folder_new'] = 'New Folder';              
$_['page_title_folder_ren'] = 'Rename / Move Folder';    
$_['page_title_folder_del'] = 'Delete Folder';           

$_['session_warning']  = 'Warning: Session timeout soon!';
$_['session_expired']  = 'SESSION EXPIRED';
$_['unload_unsaved']   = ' Unsaved changes will be lost!';
$_['confirm_reset']    = 'Reset file and loose unsaved changes?';
$_['OFCMS_requires']   = 'OneFileCMS requires PHP';
$_['logout_msg']       = 'You have successfully logged out.';
$_['folder_del_msg']   = 'Folder not empty. Folders must be empty before they can be deleted.';
$_['upload_error_01a'] = 'Upload Error. Total POST data (mostly filesize) exceeded post_max_size =';
$_['upload_error_01b'] = '(from php.ini)';
$_['edit_caution_01']  = 'CAUTION';
$_['edit_caution_02']  = 'You are editing the active copy of OneFileCMS - BACK IT UP & BE CAREFUL !!';
$_['time_out_txt']     = 'Session time out in:';

$_['error_reporting_01'] = 'Display errors is';        
$_['error_reporting_02'] = 'Log errors is';            
$_['error_reporting_03'] = 'Error reporting is set to';
$_['error_reporting_04'] = 'Showing error types';      
$_['error_reporting_05'] = 'Unexpected early output';  
$_['error_reporting_06'] = '(nothing, not even white-space, should have been output yet)';

$_['admin_txt_00'] = 'Old Backup Found';
$_['admin_txt_01'] = 'A backup file was created in case of an error during a username or password change. Therefore, it may contain old information and should be deleted if not needed. In any case, it will automatically be overwritten on the next password or username change.';
$_['admin_txt_02'] = 'General Information';
$_['admin_txt_04'] = 'As of version 3.3.13, OneFileCMS no longer maintains a plain text password option, and only stores a password hash, as most login systems do.';
$_['admin_txt_12'] = 'However, due to a number of considerations, this change was largely an academic exersize. That is, in this application, take the idea that it adds much of an improvement to security with a grain of cryptographic salt. Never-the-less, it does eliminate the storage of your password in plain text (if that option was used), which is generally considered to be a good thing.';
$_['admin_txt_14'] = 'For another small improvement to security, change the default salt and/or method used by OneFileCMS to hash the password (and keep them secret, of course). Every little bit helps...';
$_['admin_txt_16'] = 'Also, you can still use OneFileCMS to edit itself. However, be sure to have a backup ready for the inevitable ytpo...';

$_['pw_change']  = 'Change Password';            
$_['pw_current'] = 'Current Password';           
$_['pw_new']     = 'New Password';               
$_['pw_confirm'] = 'Confirm New Password';       
$_['pw_txt_02']  = 'Password / Username rules:'; 
$_['pw_txt_04']  = 'They are case-sensitive!';   
$_['pw_txt_06']  = 'They must contain at least one non-space character.';
$_['pw_txt_08']  = 'They may contain spaces in the middle. Ex: "This is a password or username!"';
$_['pw_txt_10']  = 'Leading and trailing spaces are removed.';
$_['pw_txt_12']  = 'To record the change, only one file is updated: either the active copy of OneFileCMS, or, if specified, an external configuration file.';
$_['pw_txt_14']  = 'If an incorrect current password is entered, you will be logged out, but you may log back in.';

$_['change_pw_01'] = 'Password changed!';                              
$_['change_pw_02'] = 'Password NOT changed:';                          
$_['change_pw_03'] = 'Incorrect current password. Login to try again.';
$_['change_pw_04'] = 'New and "Confirm New" values do not match.';     
$_['change_pw_05'] = 'Updating';                                       
$_['change_pw_06'] = 'external config file';                           

$_['un_change']     = 'Change Username';                      
$_['un_new']        = 'New Username';                         
$_['un_confirm']    = 'Confirm New Username';                 
$_['change_un_01']  = 'Username changed!';                    
$_['change_un_02']  = 'Username NOT changed:';                
$_['update_failed'] = 'Update failed - could not save file.'; 
$_['mcd_msg_01']    = 'files moved successfully.';            
$_['mcd_msg_02']    = 'files copied successfully.';           
$_['mcd_msg_03']    = 'files deleted successfully.';          

