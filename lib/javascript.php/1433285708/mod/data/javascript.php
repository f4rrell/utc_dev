function insert_field_tags(selectlist){var value=selectlist.options[selectlist.selectedIndex].value,editorname='template';if(typeof tinyMCE=='undefined'){var element=document.getElementsByName(editorname)[0];insertAtCursor(element,value)}else tinyMCE.execInstanceCommand(editorname,'mceInsertContent',false,value)}
function showHideAdvSearch(checked){var divs=document.getElementsByTagName('div');for(i=0;i<divs.length;i++)if(divs[i].id.match('data_adv_form')){if(checked){divs[i].style.display='inline'}else divs[i].style.display='none'}else if(divs[i].id.match('reg_search'))if(!checked){divs[i].style.display='inline'}else divs[i].style.display='none'};M.data_urlpicker={};M.data_urlpicker.init=function(Y,options){options.formcallback=M.data_urlpicker.callback;if(!M.core_filepicker.instances[options.client_id])M.core_filepicker.init(Y,options);Y.on('click',function(e,client_id){e.preventDefault();M.core_filepicker.instances[client_id].show()},'#filepicker-button-'+options.client_id,null,options.client_id)};M.data_urlpicker.callback=function(params){document.getElementById('field_url_'+params.client_id).value=params.url}