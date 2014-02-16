<?php require_once('settings.php'); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title><?php echo $title; ?></title>
    <link href="img/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
    <script src="js/mootools-core.js" type="text/javascript"></script>
    <script src="js/core.js" type="text/javascript"></script>
    <script src="js/caption.js" type="text/javascript"></script>
    <script src="js/mootools-more.js" type="text/javascript"></script>
    <script type="text/javascript">
        window.addEvent('load', function() {
            new JCaption('img.caption');
            //<![CDATA[
            function HideCheckboxes(){inputs=document.getElementsByTagName("input");for(var a=0;a<inputs.length;++a)"checkbox"==inputs[a].getAttribute("type")&&"foxcheckbox"==inputs[a].getAttribute("class")&&HideCheckbox(inputs[a])}function HideCheckbox(a){document.getElementById("s"+a.getAttribute("name")).className=a.checked?"fox_cbspan fox_cbspan_true":"fox_cbspan fox_cbspan_false";a.style.display="none"}
            function HideCheckboxById(a){var b=document.getElementById("c"+a);document.getElementById("s"+a).className=b.checked?"checkbox_true":"checkbox_false";b.style.display="none"}function ChangeCheckboxState(a){var b=document.getElementById("c"+a),a=document.getElementById("s"+a);b.checked?(b.checked="",a.className="fox_cbspan fox_cbspan_false"):(b.checked="checked",a.className="fox_cbspan fox_cbspan_true")};
//]]>

//<![CDATA[
            function InitializeDropdowns(){dropdowns=document.getElementsByTagName("select");for(var a=0;a<dropdowns.length;++a)!1!==strpos(dropdowns[a].getAttribute("class"),"fox_dropdown",0)&&(DropdownSetStyle(dropdowns[a]),DropdownAlignValue(dropdowns[a]));spans=document.getElementsByTagName("span");for(a=0;a<spans.length;++a)!1!==strpos(spans[a].getAttribute("class"),"outer_dropdown",0)&&SpanSetStyle(spans[a])}
            function DropdownAlignValue(a){var b=document.getElementById("ddi"+a.name),a=a.options[a.selectedIndex].text;document.all?b.innerText=a:b.textContent=a}function DropdownSetStyle(a){a.style.opacity="0";a.style.position="absolute";a.style.height="28px";document.all&&(a.style.filter="alpha(opacity = 0)",a.style.zoom="1")}function SpanSetStyle(a){a.style.display="table"}function strpos(a,b,c){a=(a+"").indexOf(b,c||0);return-1===a?!1:a}function ResetFoxControls(){ResetCheckboxes();ResetDropdowns()}
            function ResetCheckboxes(){inputs=document.getElementsByTagName("input");for(var a=0;a<inputs.length;++a)if("checkbox"==inputs[a].getAttribute("type")&&"foxcheckbox"==inputs[a].getAttribute("class")){var b=inputs[a].getAttribute("name");document.getElementById("s"+b).className="fox_cbspan fox_cbspan_false"}}
            function ResetDropdowns(){dropdowns=document.getElementsByTagName("select");for(var a=0;a<dropdowns.length;++a)if(!1!==strpos(dropdowns[a].getAttribute("class"),"fox_dropdown",0)){var b=document.getElementById("ddi"+dropdowns[a].name);document.all?b.innerText="":b.textContent=""}};
//]]>

//<![CDATA[
            function createUploader(a,b,c){var d=new qq.FileUploader({element:document.getElementById(a),action:"/components/com_foxcontact/lib/file-uploader.php",params:{cid:b,mid:c},debug:true})}var qq=qq||{};qq.extend=function(a,b){for(var c in b){a[c]=b[c]}};qq.indexOf=function(a,b,c){if(a.indexOf)return a.indexOf(b,c);c=c||0;var d=a.length;if(c<0)c+=d;for(;c<d;c++){if(c in a&&a[c]===b){return c}}return-1};qq.getUniqueId=function(){var a=0;return function(){return a++}}();qq.attach=function(a,b,c){if(a.addEventListener){a.addEventListener(b,c,false)}else if(a.attachEvent){a.attachEvent("on"+b,c)}};qq.detach=function(a,b,c){if(a.removeEventListener){a.removeEventListener(b,c,false)}else if(a.attachEvent){a.detachEvent("on"+b,c)}};qq.preventDefault=function(a){if(a.preventDefault){a.preventDefault()}else{a.returnValue=false}};qq.insertBefore=function(a,b){b.parentNode.insertBefore(a,b)};qq.remove=function(a){a.parentNode.removeChild(a)};qq.contains=function(a,b){if(a==b)return true;if(a.contains){return a.contains(b)}else{return!!(b.compareDocumentPosition(a)&8)}};qq.toElement=function(){var a=document.createElement("div");return function(b){a.innerHTML=b;var c=a.firstChild;a.removeChild(c);return c}}();qq.css=function(a,b){if(b.opacity!=null){if(typeof a.style.opacity!="string"&&typeof a.filters!="undefined"){b.filter="alpha(opacity="+Math.round(100*b.opacity)+")"}}qq.extend(a.style,b)};qq.hasClass=function(a,b){var c=new RegExp("(^| )"+b+"( |$)");return c.test(a.className)};qq.addClass=function(a,b){if(!qq.hasClass(a,b)){a.className+=" "+b}};qq.removeClass=function(a,b){var c=new RegExp("(^| )"+b+"( |$)");a.className=a.className.replace(c," ").replace(/^\s+|\s+$/g,"")};qq.setText=function(a,b){a.innerText=b;a.textContent=b};qq.children=function(a){var b=[],c=a.firstChild;while(c){if(c.nodeType==1){b.push(c)}c=c.nextSibling}return b};qq.getByClass=function(a,b){if(a.querySelectorAll){return a.querySelectorAll("."+b)}var c=[];var d=a.getElementsByTagName("*");var e=d.length;for(var f=0;f<e;f++){if(qq.hasClass(d[f],b)){c.push(d[f])}}return c};qq.obj2url=function(a,b,c){var d=[],e="&",f=function(a,c){var e=b?/\[\]$/.test(b)?b:b+"["+c+"]":c;if(e!="undefined"&&c!="undefined"){d.push(typeof a==="object"?qq.obj2url(a,e,true):Object.prototype.toString.call(a)==="[object Function]"?encodeURIComponent(e)+"="+encodeURIComponent(a()):encodeURIComponent(e)+"="+encodeURIComponent(a))}};if(!c&&b){e=/\?/.test(b)?/\?$/.test(b)?"":"&":"?";d.push(b);d.push(qq.obj2url(a))}else if(Object.prototype.toString.call(a)==="[object Array]"&&typeof a!="undefined"){for(var g=0,h=a.length;g<h;++g){f(a[g],g)}}else if(typeof a!="undefined"&&a!==null&&typeof a==="object"){for(var g in a){f(a[g],g)}}else{d.push(encodeURIComponent(b)+"="+encodeURIComponent(a))}return d.join(e).replace(/^&/,"").replace(/%20/g,"+")};var qq=qq||{};qq.FileUploaderBasic=function(a){this._options={debug:false,action:"/server/upload",params:{},button:null,multiple:true,maxConnections:3,allowedExtensions:[],sizeLimit:0,minSizeLimit:0,onSubmit:function(a,b){},onProgress:function(a,b,c,d){},onComplete:function(a,b,c){},onCancel:function(a,b){},messages:{typeError:"{file} has invalid extension. Only {extensions} are allowed.",sizeError:"{file} is too large, maximum file size is {sizeLimit}.",minSizeError:"{file} is too small, minimum file size is {minSizeLimit}.",emptyError:"{file} is empty, please select files again without it.",onLeave:"The files are being uploaded, if you leave now the upload will be cancelled."},showMessage:function(a){alert(a)}};qq.extend(this._options,a);this._filesInProgress=0;this._handler=this._createUploadHandler();if(this._options.button){this._button=this._createUploadButton(this._options.button)}this._preventLeaveInProgress()};qq.FileUploaderBasic.prototype={setParams:function(a){this._options.params=a},getInProgress:function(){return this._filesInProgress},_createUploadButton:function(a){var b=this;return new qq.UploadButton({element:a,multiple:this._options.multiple&&qq.UploadHandlerXhr.isSupported(),onChange:function(a){b._onInputChange(a)}})},_createUploadHandler:function(){var a=this,b;if(qq.UploadHandlerXhr.isSupported()){b="UploadHandlerXhr"}else{b="UploadHandlerForm"}var c=new qq[b]({debug:this._options.debug,action:this._options.action,maxConnections:this._options.maxConnections,onProgress:function(b,c,d,e){a._onProgress(b,c,d,e);a._options.onProgress(b,c,d,e)},onComplete:function(b,c,d){a._onComplete(b,c,d);a._options.onComplete(b,c,d)},onCancel:function(b,c){a._onCancel(b,c);a._options.onCancel(b,c)}});return c},_preventLeaveInProgress:function(){var a=this;qq.attach(window,"beforeunload",function(b){if(!a._filesInProgress){return}var b=b||window.event;b.returnValue=a._options.messages.onLeave;return a._options.messages.onLeave})},_onSubmit:function(a,b){this._filesInProgress++},_onProgress:function(a,b,c,d){},_onComplete:function(a,b,c){this._filesInProgress--;if(c.error){this._options.showMessage(c.error)}},_onCancel:function(a,b){this._filesInProgress--},_onInputChange:function(a){if(this._handler instanceof qq.UploadHandlerXhr){this._uploadFileList(a.files)}else{if(this._validateFile(a)){this._uploadFile(a)}}this._button.reset()},_uploadFileList:function(a){for(var b=0;b<a.length;b++){if(!this._validateFile(a[b])){return}}for(var b=0;b<a.length;b++){this._uploadFile(a[b])}},_uploadFile:function(a){var b=this._handler.add(a);var c=this._handler.getName(b);if(this._options.onSubmit(b,c)!==false){this._onSubmit(b,c);this._handler.upload(b,this._options.params)}},_validateFile:function(a){var b,c;if(a.value){b=a.value.replace(/.*(\/|\\)/,"")}else{b=a.fileName!=null?a.fileName:a.name;c=a.fileSize!=null?a.fileSize:a.size}if(!this._isAllowedExtension(b)){this._error("typeError",b);return false}else if(c===0){this._error("emptyError",b);return false}else if(c&&this._options.sizeLimit&&c>this._options.sizeLimit){this._error("sizeError",b);return false}else if(c&&c<this._options.minSizeLimit){this._error("minSizeError",b);return false}return true},_error:function(a,b){function d(a,b){c=c.replace(a,b)}var c=this._options.messages[a];d("{file}",this._formatFileName(b));d("{extensions}",this._options.allowedExtensions.join(", "));d("{sizeLimit}",this._formatSize(this._options.sizeLimit));d("{minSizeLimit}",this._formatSize(this._options.minSizeLimit));this._options.showMessage(c)},_formatFileName:function(a){if(a.length>33){a=a.slice(0,19)+"..."+a.slice(-13)}return a},_isAllowedExtension:function(a){var b=-1!==a.indexOf(".")?a.replace(/.*[.]/,"").toLowerCase():"";var c=this._options.allowedExtensions;if(!c.length){return true}for(var d=0;d<c.length;d++){if(c[d].toLowerCase()==b){return true}}return false},_formatSize:function(a){var b=-1;do{a=a/1024;b++}while(a>99);return Math.max(a,.1).toFixed(1)+["kB","MB","GB","TB","PB","EB"][b]}};qq.FileUploader=function(a){qq.FileUploaderBasic.apply(this,arguments);qq.extend(this._options,{element:null,listElement:null,template:'<div class="qq-uploader">'+'<div class="qq-upload-drop-area"><span>Drop files here to upload</span></div>'+'<div class="qq-upload-button" style="float:left;"><span class="qq-upload-button-caption">You Can Click Here To Upload Your File</span></div>'+'<ul class="qq-upload-list"></ul>'+"</div>",fileTemplate:'<li style="background-position:left;">'+'<span class="qq-upload-file" style="float:left;"></span>'+'<span class="qq-upload-spinner" style="float:left;"></span>'+'<span class="qq-upload-size" style="float:left;"></span>'+'<a class="qq-upload-cancel" href="#">Cancel</a>'+'<span class="qq-upload-failed-text" style="background-position:left;">Failed</span>'+'<span class="qq-upload-success-text" style="background-position:left;">Success</span>'+"</li>",classes:{button:"qq-upload-button",drop:"qq-upload-drop-area",dropActive:"qq-upload-drop-area-active",list:"qq-upload-list",file:"qq-upload-file",spinner:"qq-upload-spinner",size:"qq-upload-size",cancel:"qq-upload-cancel",success:"qq-upload-success",fail:"qq-upload-fail"}});qq.extend(this._options,a);this._element=this._options.element;this._element.innerHTML=this._options.template;this._listElement=this._options.listElement||this._find(this._element,"list");this._classes=this._options.classes;this._button=this._createUploadButton(this._find(this._element,"button"));this._bindCancelEvent();this._setupDragDrop()};qq.extend(qq.FileUploader.prototype,qq.FileUploaderBasic.prototype);qq.extend(qq.FileUploader.prototype,{_find:function(a,b){var c=qq.getByClass(a,this._options.classes[b])[0];if(!c){throw new Error("element not found "+b)}return c},_setupDragDrop:function(){var a=this,b=this._find(this._element,"drop");var c=new qq.UploadDropZone({element:b,onEnter:function(c){qq.addClass(b,a._classes.dropActive);c.stopPropagation()},onLeave:function(a){a.stopPropagation()},onLeaveNotDescendants:function(c){qq.removeClass(b,a._classes.dropActive)},onDrop:function(c){b.style.display="none";qq.removeClass(b,a._classes.dropActive);a._uploadFileList(c.dataTransfer.files)}});b.style.display="none";qq.attach(document,"dragenter",function(a){if(!c._isValidFileDrag(a))return;b.style.display="block"});qq.attach(document,"dragleave",function(a){if(!c._isValidFileDrag(a))return;var d=document.elementFromPoint(a.clientX,a.clientY);if(!d||d.nodeName=="HTML"){b.style.display="none"}})},_onSubmit:function(a,b){qq.FileUploaderBasic.prototype._onSubmit.apply(this,arguments);this._addToList(a,b)},_onProgress:function(a,b,c,d){qq.FileUploaderBasic.prototype._onProgress.apply(this,arguments);var e=this._getItemByFileId(a);var f=this._find(e,"size");f.style.display="inline";var g;if(c!=d){g=Math.round(c/d*100)+"% / "+this._formatSize(d)}else{g=this._formatSize(d)}qq.setText(f,g)},_onComplete:function(a,b,c){qq.FileUploaderBasic.prototype._onComplete.apply(this,arguments);var d=this._getItemByFileId(a);qq.remove(this._find(d,"cancel"));qq.remove(this._find(d,"spinner"));if(c.success){qq.addClass(d,this._classes.success)}else{qq.addClass(d,this._classes.fail)}},_addToList:function(a,b){var c=qq.toElement(this._options.fileTemplate);c.qqFileId=a;var d=this._find(c,"file");qq.setText(d,this._formatFileName(b));this._find(c,"size").style.display="none";this._listElement.appendChild(c)},_getItemByFileId:function(a){var b=this._listElement.firstChild;while(b){if(b.qqFileId==a)return b;b=b.nextSibling}},_bindCancelEvent:function(){var a=this,b=this._listElement;qq.attach(b,"click",function(b){b=b||window.event;var c=b.target||b.srcElement;if(qq.hasClass(c,a._classes.cancel)){qq.preventDefault(b);var d=c.parentNode;a._handler.cancel(d.qqFileId);qq.remove(d)}})}});qq.UploadDropZone=function(a){this._options={element:null,onEnter:function(a){},onLeave:function(a){},onLeaveNotDescendants:function(a){},onDrop:function(a){}};qq.extend(this._options,a);this._element=this._options.element;this._disableDropOutside();this._attachEvents()};qq.UploadDropZone.prototype={_disableDropOutside:function(a){if(!qq.UploadDropZone.dropOutsideDisabled){qq.attach(document,"dragover",function(a){if(a.dataTransfer){a.dataTransfer.dropEffect="none";a.preventDefault()}});qq.UploadDropZone.dropOutsideDisabled=true}},_attachEvents:function(){var a=this;qq.attach(a._element,"dragover",function(b){if(!a._isValidFileDrag(b))return;var c=b.dataTransfer.effectAllowed;if(c=="move"||c=="linkMove"){b.dataTransfer.dropEffect="move"}else{b.dataTransfer.dropEffect="copy"}b.stopPropagation();b.preventDefault()});qq.attach(a._element,"dragenter",function(b){if(!a._isValidFileDrag(b))return;a._options.onEnter(b)});qq.attach(a._element,"dragleave",function(b){if(!a._isValidFileDrag(b))return;a._options.onLeave(b);var c=document.elementFromPoint(b.clientX,b.clientY);if(qq.contains(this,c))return;a._options.onLeaveNotDescendants(b)});qq.attach(a._element,"drop",function(b){if(!a._isValidFileDrag(b))return;b.preventDefault();a._options.onDrop(b)})},_isValidFileDrag:function(a){var b=a.dataTransfer,c=navigator.userAgent.indexOf("AppleWebKit")>-1;return b&&b.effectAllowed!="none"&&(b.files||!c&&b.types.contains&&b.types.contains("Files"))}};qq.UploadButton=function(a){this._options={element:null,multiple:false,name:"file",onChange:function(a){},hoverClass:"qq-upload-button-hover",focusClass:"qq-upload-button-focus"};qq.extend(this._options,a);this._element=this._options.element;qq.css(this._element,{position:"relative",overflow:"hidden",direction:"ltr"});this._input=this._createInput()};qq.UploadButton.prototype={getInput:function(){return this._input},reset:function(){if(this._input.parentNode){qq.remove(this._input)}qq.removeClass(this._element,this._options.focusClass);this._input=this._createInput()},_createInput:function(){var a=document.createElement("input");if(this._options.multiple){a.setAttribute("multiple","multiple")}a.setAttribute("type","file");a.setAttribute("name",this._options.name);qq.css(a,{position:"absolute",right:0,top:0,fontFamily:"Arial",fontSize:"118px",margin:0,padding:0,cursor:"pointer",opacity:0});this._element.appendChild(a);var b=this;qq.attach(a,"change",function(){b._options.onChange(a)});qq.attach(a,"mouseover",function(){qq.addClass(b._element,b._options.hoverClass)});qq.attach(a,"mouseout",function(){qq.removeClass(b._element,b._options.hoverClass)});qq.attach(a,"focus",function(){qq.addClass(b._element,b._options.focusClass)});qq.attach(a,"blur",function(){qq.removeClass(b._element,b._options.focusClass)});if(window.attachEvent){a.setAttribute("tabIndex","-1")}return a}};qq.UploadHandlerAbstract=function(a){this._options={debug:false,action:"/upload.php",maxConnections:999,onProgress:function(a,b,c,d){},onComplete:function(a,b,c){},onCancel:function(a,b){}};qq.extend(this._options,a);this._queue=[];this._params=[]};qq.UploadHandlerAbstract.prototype={log:function(a){if(this._options.debug&&window.console)console.log("[uploader] "+a)},add:function(a){},upload:function(a,b){var c=this._queue.push(a);var d={};qq.extend(d,b);this._params[a]=d;if(c<=this._options.maxConnections){this._upload(a,this._params[a])}},cancel:function(a){this._cancel(a);this._dequeue(a)},cancelAll:function(){for(var a=0;a<this._queue.length;a++){this._cancel(this._queue[a])}this._queue=[]},getName:function(a){},getSize:function(a){},getQueue:function(){return this._queue},_upload:function(a){},_cancel:function(a){},_dequeue:function(a){var b=qq.indexOf(this._queue,a);this._queue.splice(b,1);var c=this._options.maxConnections;if(this._queue.length>=c){var d=this._queue[c-1];this._upload(d,this._params[d])}}};qq.UploadHandlerForm=function(a){qq.UploadHandlerAbstract.apply(this,arguments);this._inputs={}};qq.extend(qq.UploadHandlerForm.prototype,qq.UploadHandlerAbstract.prototype);qq.extend(qq.UploadHandlerForm.prototype,{add:function(a){a.setAttribute("name","qqfile");var b="qq-upload-handler-iframe"+qq.getUniqueId();this._inputs[b]=a;if(a.parentNode){qq.remove(a)}return b},getName:function(a){return this._inputs[a].value.replace(/.*(\/|\\)/,"")},_cancel:function(a){this._options.onCancel(a,this.getName(a));delete this._inputs[a];var b=document.getElementById(a);if(b){b.setAttribute("src","javascript:false;");qq.remove(b)}},_upload:function(a,b){var c=this._inputs[a];if(!c){throw new Error("file with passed id was not added, or already uploaded or cancelled")}var d=this.getName(a);var e=this._createIframe(a);var f=this._createForm(e,b);f.appendChild(c);var g=this;this._attachLoadEvent(e,function(){g.log("iframe loaded");var b=g._getIframeContentJSON(e);g._options.onComplete(a,d,b);g._dequeue(a);delete g._inputs[a];setTimeout(function(){qq.remove(e)},1)});f.submit();qq.remove(f);return a},_attachLoadEvent:function(a,b){qq.attach(a,"load",function(){if(!a.parentNode){return}if(a.contentDocument&&a.contentDocument.body&&a.contentDocument.body.innerHTML=="false"){return}b()})},_getIframeContentJSON:function(iframe){var doc=iframe.contentDocument?iframe.contentDocument:iframe.contentWindow.document,response;this.log("converting iframe's innerHTML to JSON");this.log("innerHTML = "+doc.body.innerHTML);try{response=eval("("+doc.body.innerHTML+")")}catch(err){response={}}return response},_createIframe:function(a){var b=qq.toElement('<iframe src="javascript:false;" name="'+a+'" />');b.setAttribute("id",a);b.style.display="none";document.body.appendChild(b);return b},_createForm:function(a,b){var c=qq.toElement('<form method="post" enctype="multipart/form-data"></form>');var d=qq.obj2url(b,this._options.action);c.setAttribute("action",d);c.setAttribute("target",a.name);c.style.display="none";document.body.appendChild(c);return c}});qq.UploadHandlerXhr=function(a){qq.UploadHandlerAbstract.apply(this,arguments);this._files=[];this._xhrs=[];this._loaded=[]};qq.UploadHandlerXhr.isSupported=function(){var a=document.createElement("input");a.type="file";return"multiple"in a&&typeof File!="undefined"&&typeof (new XMLHttpRequest).upload!="undefined"};qq.extend(qq.UploadHandlerXhr.prototype,qq.UploadHandlerAbstract.prototype);qq.extend(qq.UploadHandlerXhr.prototype,{add:function(a){if(!(a instanceof File)){throw new Error("Passed obj in not a File (in qq.UploadHandlerXhr)")}return this._files.push(a)-1},getName:function(a){var b=this._files[a];return b.fileName!=null?b.fileName:b.name},getSize:function(a){var b=this._files[a];return b.fileSize!=null?b.fileSize:b.size},getLoaded:function(a){return this._loaded[a]||0},_upload:function(a,b){var c=this._files[a],d=this.getName(a),e=this.getSize(a);this._loaded[a]=0;var f=this._xhrs[a]=new XMLHttpRequest;var g=this;f.upload.onprogress=function(b){if(b.lengthComputable){g._loaded[a]=b.loaded;g._options.onProgress(a,d,b.loaded,b.total)}};f.onreadystatechange=function(){if(f.readyState==4){g._onComplete(a,f)}};b=b||{};b["qqfile"]=d;var h=qq.obj2url(b,this._options.action);f.open("POST",h,true);f.setRequestHeader("X-Requested-With","XMLHttpRequest");f.setRequestHeader("X-File-Name",encodeURIComponent(d));f.setRequestHeader("Content-Type","application/octet-stream");f.send(c)},_onComplete:function(id,xhr){if(!this._files[id])return;var name=this.getName(id);var size=this.getSize(id);this._options.onProgress(id,name,size,size);if(xhr.status==200){this.log("xhr - server response received");this.log("responseText = "+xhr.responseText);var response;try{response=eval("("+xhr.responseText+")")}catch(err){response={}}this._options.onComplete(id,name,response)}else{this._options.onComplete(id,name,{})}this._files[id]=null;this._xhrs[id]=null;this._dequeue(id)},_cancel:function(a){this._options.onCancel(a,this.getName(a));this._files[a]=null;if(this._xhrs[a]){this._xhrs[a].abort();this._xhrs[a]=null}}})

//]]>
        });
    </script>
    <!-- start - swMenuFree javascript and CSS links -->
    <!--<script type="text/javascript" src="js/jquery-1.6.min.js"></script>-->
    <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="js/jquery.corner.js"></script>
    <script type="text/javascript" src="js/DropDownMenuX_Packed.js"></script>
    <script type="text/javascript" src="js/template.js"></script>

    <!-- file upload -->
    <script type="text/javascript" src="js/jquery.uploadfile.js"></script>

    <style type="text/css">
        <!--
        #swmenu table,
        #swmenu,
        #swmenu tr,
        #swmenu td{
            border:0 !important;
        }
        #outerwrap {
            top: 0px !important ;
            left: 0px;
            border:0px solid #CC2F7D  ;
            padding:8px 8px 5px 0px  !important;
            display: block;
            position: relative;
            z-index: 99;
        }
        .ddmx a.item1,
        .ddmx a.item1:hover,
        .ddmx a.item1-active,
        .ddmx a.item1-active:hover {
            padding: 6px 0px 5px 20px  !important ;
            font-size: 14px !important ;
            font-family: Arial, Helvetica, sans-serif !important ;
            text-align: left !important ;
            font-weight: bold !important ;
            color: #EBEFF5  ;
            font-style: normal !important;
            text-decoration: none !important;
            text-transform: none !important;
            border: 0px solid #F34AFF;
            display: block;
            white-space: normal;
            position: relative;
            z-index: 200;
            margin:4px 0px 0px 0px  ;
            background-image: URL("img/button_off.png") !important ;
            width:200px;
        }
        .ddmx td.item11.last a.item1-active,
        .ddmx td.item11.last a.item1 {
            border: 0px solid #F34AFF;
        }
        .ddmx a.item1-active,
        .ddmx a.item1-active:hover ,
        .ddmx .last a:hover,
        .ddmx .acton.last a,
        .ddmx a.item1:hover{
            white-space: normal;
            background-image: URL("img/button_on.png") !important;
        }
        .ddmx .item11:hover,
        .ddmx .item11.acton:hover,
        .ddmx .item11.last:hover,
        .ddmx .item11.acton a.item1,
        .ddmx .item11.acton a:hover,
        .ddmx .item11 a:hover,
        .ddmx .item11.last a:hover,
        .ddmx a.item1-active,
        .ddmx a.item1-active:hover {
            color: #E1EBE4  ;
        }
        .ddmx .acton a.item1-active,
        .ddmx .acton a.item1:hover,
        .ddmx .acton a.item1 {
            white-space: normal;
            background-image:none !important;
            color: #24111D !important ;
        }
        .ddmx a.item2,
        .ddmx a.item2:hover,
        .ddmx a.item2-active,
        .ddmx a.item2-active:hover {
            padding: 5px 26px 5px 8px  !important ;
            font-size: 14px !important ;
            font-family: Arial, Helvetica, sans-serif !important ;
            text-align: left !important ;
            font-weight: bold !important ;
            font-style: normal !important;
            text-decoration: none !important;
            text-transform: none !important;
            display: block;
            white-space: nowrap !important;
            opacity:0.9;
            filter:alpha(opacity=90)
        }
        .ddmx a.item2-active ,
        .ddmx a.item2 {
            background-image:none !important;
            background-color: #9E0202 !important ;
            color: #FEFFF5 !important ;
            border-top: 0px solid #94FFB4 !important ;
            border-left: 0px solid #94FFB4 !important ;
            border-right: 0px solid #94FFB4 !important ;
        }
        .ddmx a.item2-active.last,
        .ddmx a.item2.last {
            border-bottom: 0px solid #94FFB4 !important ;
            z-index:500;
        }
        .ddmx .section a.item2:hover,
        .ddmx a.item2-active,
        .ddmx a.item2-active:hover {
            background-image:none !important;
            background-color: #FF3108 !important ;
            color: #0A1F14 !important ;
            border-top: 0px solid #94FFB4 !important ;
            border-left: 0px solid #94FFB4 !important ;
            border-right: 0px solid #94FFB4 !important ;
        }
        .ddmx .section {
            border: 0px solid #061C1B ;
            position: absolute;
            visibility: hidden;
            display: block;
            z-index: -1;
        }
        .ddmx .inner_section {
            background-color: #9E0202 ;
            display: block;
        }
        .ddmx .subsection a{
            width:200px;
            white-space:normal !important;
        }
        .ddmxframe {
            border: 0px solid #061C1B !important ;
        }
        * html .ddmx td { position: relative; } /* ie 5.0 fix */
        .ddmx .item2-active img,
        .ddmx .item2 img,
        .ddmx .item1-active img,
        .ddmx .item1 img{
            border:none;
        }

        -->
    </style>
    <!-- end - swMenuFree javascript and CSS links -->

    <link rel="stylesheet" href="css/template.css" type="text/css">
    <link rel="stylesheet" href="css/neon.css" type="text/css">

    <!-- file upload stylesheet -->
    <link rel="stylesheet" href="css/uploadfile.css" type="text/css">

</head>

<body>



<table border="0" width="100%" cellspacing="0" cellpadding="0">
    <tbody><tr>
        <td width="100%" bgcolor="111111" style="background-image: url('img/headerbck.gif'); background-repeat: no-repeat">


            <table border="0" width="100%" cellspacing="0" cellpadding="0">
                <tbody><tr>
                    <td width="100%">

                        <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="980" height="283" id="header" align="middle">
                            <param name="allowScriptAccess" value="sameDomain">
                            <param name="movie" value="/header.swf"><param name="quality" value="high"><param name="wmode" value="transparent"><param name="bgcolor" value="#000000"><embed src="swf/header.swf" quality="high" wmode="transparent" bgcolor="#000000" width="980" height="283" name="header" align="middle" allowscriptaccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer">
                        </object>

                    </td>
                </tr>
                </tbody></table>


            <table border="0" width="100%" cellspacing="0" cellpadding="8">
                <tbody><tr>
                    <td width="1%" valign="top">



                        <!--swMenuFree7.2_J2.5 mygosumenu by http://www.swmenupro.com-->
                        <table id="outertable" align="left" class="outer"><tbody><tr><td><div id="outerwrap" style="border-top-left-radius: 24px; border-bottom-right-radius: 24px;">
                                        <table cellspacing="0" border="0" cellpadding="0" id="swmenu" class="ddmx">
                                            <tbody><tr>
                                                <td class="item11">
                                                    <a href="/" class="item1" id="swmenu-0">Home Page</a><div class="section" style="display: none; border: 0px !important; width: 0px; top: 12px; left: 197px;" id="swmenu-0-section"></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="item11">
                                                    <a href="about_us.php" class="item1" id="swmenu-1">About Us</a><div class="section" style="width: 136px; top: 43px; left: 197px; visibility: hidden; z-index: 500;" id="swmenu-1-section"><a href="meet_our_staff.php" class="item2 first last" style="" id="swmenu-1-0">Meet Our Staff</a>
                                                    </div></td>
                                            </tr>
                                            <tr>
                                                <td class="item11">
                                                    <a href="contact_us.php" class="item1" id="swmenu-2">Contact Us</a><div class="section" style="display: none; border: 0px !important; width: 0px; top: 74px; left: 197px;" id="swmenu-2-section"></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="item11">
                                                    <a href="exterior_signs.php" class="item1" id="swmenu-3">Exterior Signs</a><div class="section" style="width: 165px; top: 105px; left: 197px;" id="swmenu-3-section"><a href="ground_mounted_signs.php" class="item2 first" style="" id="swmenu-3-0">Pylon Signs</a>
                                                        <a href="ground_mounted_monument_signs.php" class="item2" style="" id="swmenu-3-1">Monument Signs</a>
                                                        <a href="post_panel_signs.php" class="item2" style="" id="swmenu-3-2">Post &amp; Panel Signs</a>
                                                        <a href="building_letters.php" class="item2" style="" id="swmenu-3-3">Building Letters</a>
                                                        <a href="building_signs.php" class="item2" style="" id="swmenu-3-4">Building Signs</a>
                                                        <a href="awnings.php" class="item2 last" style="" id="swmenu-3-5">Awnings</a>
                                                    </div></td>
                                            </tr>
                                            <tr>
                                                <td class="item11">
                                                    <a href="interior_signs.php" class="item1" id="swmenu-4">Interior Signs</a><div class="section" style="width: 270px; top: 136px; left: 197px;" id="swmenu-4-section"><a href="engraved_signs_engraving.php" class="item2 first" style="" id="swmenu-4-0">Engraved Signs &amp; Engraving</a>
                                                        <a href="wayfinding_destination_signage.php" class="item2" style="" id="swmenu-4-1">Wayfinding &amp; Destination Signage</a>
                                                        <a href="dimensional_letters_logos.php" class="item2 last" style="" id="swmenu-4-2">Dimensional Letters &amp; Logos</a>
                                                    </div></td>
                                            </tr>
                                            <tr>
                                                <td class="item11">
                                                    <a href="digital_signs.php" class="item1" id="swmenu-5">Digital Signs</a><div class="section" style="display: none; border: 0px !important; width: 0px; top: 167px; left: 197px;" id="swmenu-5-section"></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="item11">
                                                    <a href="vehicle_graphics_wraps.php" class="item1" id="swmenu-6">Vehicle Graphics</a><div class="section" style="width: 196px; top: 198px; left: 197px;" id="swmenu-6-section"><a href="full_vehicle_wraps.php" class="item2 first" style="" id="swmenu-6-0">Full Vehicle Wraps</a>
                                                        <a href="partial_vehicle_wraps.php" class="item2" style="" id="swmenu-6-1">Partial Vehicle Wraps</a>
                                                        <a href="cut_vinyl.php" class="item2" style="" id="swmenu-6-2">Cut Vinyl</a>
                                                        <a href="clearview_window_film.php" class="item2 last" style="" id="swmenu-6-3">Clearview Window Film</a>
                                                    </div></td>
                                            </tr>
                                            <tr>
                                                <td class="item11">
                                                    <a href="banners_displays_traffic.php" class="item1" id="swmenu-7">Banners &amp; Misc. Signs</a><div class="section" style="display: none; border: 0px !important; width: 0px; top: 229px; left: 197px;" id="swmenu-7-section"></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="item11">
                                                    <a href="decals.php" class="item1" id="swmenu-8">Decals</a><div class="section" style="display: none; border: 0px !important; width: 0px; top: 260px; left: 197px;" id="swmenu-8-section"></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="item11">
                                                    <a href="displays.php" class="item1" id="swmenu-9">Exhibit Displays</a><div class="section" style="display: none; border: 0px !important; width: 0px; top: 291px; left: 197px;" id="swmenu-9-section"></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="item11">
                                                    <a href="traffic_signs.php" class="item1" id="swmenu-10">Traffic &amp; Safety Signs</a><div class="section" style="display: none; border: 0px !important; width: 0px; top: 322px; left: 197px;" id="swmenu-10-section"></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="item11">
                                                    <a href="send_us_your_file.php" class="item1" id="swmenu-11">Send Us Your File</a><div class="section" style="display: none; border: 0px !important; width: 0px; top: 353px; left: 197px;" id="swmenu-11-section"></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="item11">
                                                    <a href="resources_support.php" class="item1" id="swmenu-12">Resources &amp; Support</a><div class="section" style="width: 184px; top: 384px; left: 197px;" id="swmenu-12-section"><a href="glossary_of_terms.php" class="item2 first" style="" id="swmenu-12-0">Glossary of Terms</a>
                                                        <a href="quick_reference.php" class="item2" style="" id="swmenu-12-1">Quick Reference</a>
                                                        <a href="questions_answers.php" class="item2 last" style="" id="swmenu-12-2">Questions &amp; Answers</a>
                                                    </div></td>
                                            </tr>
                                            <tr>
                                                <td class="item11 last">
                                                    <a href="estimate_request.php" class="item1 last" id="swmenu-13">Estimate Request</a><div class="section" style="display: none; border: 0px !important; width: 0px; top: 415px; left: 197px;" id="swmenu-13-section"></div>
                                                </td>
                                            </tr>
                                            </tbody></table></div></td></tr></tbody></table><hr style="display:block;clear:left;margin:-0.66em 0;visibility:hidden;">
                        <script type="text/javascript">
                            <!--
                            function makemenu(){
                                var ddmx = new DropDownMenuX('swmenu');
                                ddmx.type = 'vertical/right';
                                ddmx.delay.show = 0;
                                ddmx.iframename = 'ddmx';
                                ddmx.delay.hide = 321;
                                ddmx.effect = 'fade';
                                ddmx.position.levelX.left = 0;
                                ddmx.position.levelX.top = 0;
                                ddmx.position.level1.left = -23;
                                ddmx.position.level1.top = 0;
                                ddmx.fixIeSelectBoxBug = false;
                                ddmx.autoposition = false;
                                ddmx.activesub='' ;
                                ddmx.init();
                            }
                            if ( typeof window.addEventListener != "undefined" )
                                window.addEventListener( "load", makemenu, false );
                            else if ( typeof window.attachEvent != "undefined" ) {
                                window.attachEvent( "onload", makemenu );
                            }
                            else {
                                if ( window.onload != null ) {
                                    var oldOnload = window.onload;
                                    window.onload = function ( e ) {
                                        oldOnload( e );
                                        makemenu()
                                    }
                                }
                                else  {
                                    window.onload = makemenu();
                                } }
                            //-->
                        </script>
                        <script type="text/javascript">
                            <!--
                            jQuery('#outerwrap ').corner('round tl   br 24px');
                            //-->
                        </script>

                        <!--End swMenuFree menu module-->



                    </td>
                    <td width="99%" valign="top">
