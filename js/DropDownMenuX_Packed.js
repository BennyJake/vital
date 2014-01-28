/*
 * DO NOT REMOVE THIS NOTICE
 *
 * PROJECT:   mygosuMenu
 * VERSION:   1.1.6
 * COPYRIGHT: (c) 2003,2004 Cezary Tomczak
 * LINK:      http://gosu.pl/dhtml/mygosumenu.html
 * LICENSE:   BSD (revised)
 * Modified by Sean White to work with swMenuFree (http://www.swmenupro.com)
 */
function lastItemOfArray(a){return a[a.length-1]}function countSubStr(a,b){return a.split(b).length-1}function stringInArray(a,b){for(var c=0;c<a.length;c++){if(a[c]===b){return true}}return false}function itemInArray(a,b){for(var c=0;c<a.length;c++){if(a[c]===b){return c}}return-1}function DropDownMenuX(a){function n(){for(var a=o.timers.length-1;a>=0;a--){clearTimeout(o.timers[a]);o.timers.pop()}}function m(a){this.menu=o;this.id=a;this.getLevel=function(){var a=this.id.substr(this.menu.id.length);return countSubStr(a,"-")};this.getParent=function(){var a=this.id.substr(this.menu.id.length);var b=a.split("-");b.pop();return new m(this.menu.id+b.join("-"))};this.hasParent=function(){var a=this.id.substr(this.menu.id.length);var b=a.split("-");return b.length>2};this.hasChilds=function(){return Boolean(document.getElementById(this.id+"-section"))};this.getParentSections=function(){var a=this.id.substr(this.menu.id.length);a=a.substr(0,a.length-"-section".length);var b=a.split("-");b.shift();b.pop();var a=this.menu.id;var c=[];for(var d=0;d<b.length;d++){a+="-"+b[d];c.push(a+"-section")}return c};this.level=this.getLevel()}function l(){o.sectionsShowCnt[itemInArray(o.sections,this.id)]++;var a=o.sectionsHideCnt[itemInArray(o.sections,this.id)];if(this.id!=o.activesub&&this.id!=o.activesub2){var b=setTimeout(function(a,b){return function(){o.hideSection(a,b)}}(this.id,a),o.delay.hide);o.timers.push(b)}}function k(){o.sectionsHideCnt[itemInArray(o.sections,this.id)]++;var a=new m(this.id);var b=document.getElementById(a.getParent().id);if(!/item\d-active/.test(b.className)){b.className=b.className.replace(/(item\d)/,"$1-active")}}function j(){o.itemShowCnt++;var a=this.id+"-section";if(stringInArray(o.sections,a)){o.sectionsShowCnt[itemInArray(o.sections,a)]++;if(stringInArray(o.visible,a)){var b=o.sectionsHideCnt[itemInArray(o.sections,a)];var c=setTimeout(function(a,b){return function(){o.hideSection(a,b)}}(a,b),o.delay.hide);o.timers.push(c)}}}function i(){o.itemShowCnt++;var a=this.id+"-section";if(o.visible.length){var b=new m(lastItemOfArray(o.visible));b=document.getElementById(b.getParent().id);if(/item\d-active/.test(b.className)){b.className=b.className.replace(/(item\d)-active/,"$1")}}if(stringInArray(o.sections,a)){n();o.sectionsHideCnt[itemInArray(o.sections,a)]++;var c=o.sectionsShowCnt[itemInArray(o.sections,a)];var d=setTimeout(function(a,b){return function(){o.showSection(a,b)}}(a,c),o.delay.show);o.timers.push(d)}else{if(o.visible.length){n();var d=setTimeout(function(a,b){return function(){o.showItem(a,b)}}(this.id,o.itemShowCnt),o.delay.show);o.timers.push(d)}}}function h(a,b,c){for(var d=0;d<a.length;d++){if(1!=a[d].nodeType){continue}switch(true){case/\bitem1\b/.test(a[d].className):a[d].id=c+"-"+b.length;b.push(new Array);a[d].onmouseover=i;a[d].onmouseout=j;break;case/\bitem2\b/.test(a[d].className):a[d].id=c+"-"+b.length;b.push(new Array);a[d].onmouseover=i;a[d].onmouseout=j;break;case/\bsection\b/.test(a[d].className):a[d].id=c+"-"+(b.length-1)+"-section";a[d].onmouseover=k;a[d].onmouseout=l;var e=document.getElementById(c+"-"+(b.length-1));var f=document.getElementById(a[d].id);var g=new m(e.id);if(1==g.level){if("horizontal/down"==o.type){if(e.offsetTop+f.offsetHeight>o.viewportheight&&o.autoposition){f.style.top=o.viewportheight-f.offsetHeight+"px"}else{f.style.top=e.offsetTop+e.offsetHeight+o.position.level1.top+"px"}if(o.browser.ie5){f.style.left=o.position.level1.left+"px"}else{if(e.offsetLeft+f.offsetWidth>o.viewportwidth&&o.autoposition){f.style.left=o.viewportwidth-f.offsetWidth+"px"}else{f.style.left=e.offsetLeft+o.position.level1.left+"px"}}}else if("horizontal/left"==o.type){if(e.offsetTop+f.offsetHeight>o.viewportheight&&o.autoposition){f.style.top=o.viewportheight-f.offsetHeight+"px"}else{f.style.top=e.offsetTop+e.offsetHeight+o.position.level1.top+"px"}if(o.browser.ie5){f.style.left=o.position.level1.left+"px"}else{if(e.offsetLeft-f.offsetWidth<0&&o.autoposition){f.style.left=2+"px"}else{f.style.left=e.offsetLeft+o.position.level1.left+e.offsetWidth-f.offsetWidth+"px"}}}else if("horizontal/up"==o.type){if(e.offsetTop-f.offsetHeight<0&&o.autoposition){f.style.top=0+"px"}else{f.style.top=e.offsetTop+o.position.level1.top-f.offsetHeight+"px"}if(o.browser.ie5){f.style.left=o.position.level1.left+"px"}else{f.style.left=e.offsetLeft+o.position.level1.left+"px"}}else if("vertical/right"==o.type){if(e.offsetTop+f.offsetHeight>o.viewportheight&&o.autoposition){f.style.top=o.viewportheight-f.offsetHeight+"px"}else{f.style.top=e.offsetTop+o.position.level1.top+"px"}if(o.browser.ie5){f.style.left=e.offsetWidth+o.position.level1.left+"px"}else{f.style.left=e.offsetLeft+e.offsetWidth+o.position.level1.left+"px"}}else if("vertical/left"==o.type){if(e.offsetTop+f.offsetHeight>o.viewportheight&&o.autoposition){f.style.top=o.viewportheight-f.offsetHeight+"px"}else{f.style.top=e.offsetTop+o.position.level1.top+"px"}if(o.browser.ie5){f.style.left=e.offsetWidth+o.position.level1.left+"px"}else{f.style.left=e.offsetLeft+o.position.level1.left-f.offsetWidth+"px"}}}else{if(e.offsetParent.offsetTop+f.offsetHeight>o.viewportheight&&o.autoposition){f.style.top=o.viewportheight-f.offsetHeight-e.offsetParent.offsetTop+"px"}else{f.style.top=e.offsetTop+o.position.levelX.top+"px"}if("vertical/right"==o.type||"horizontal/down"==o.type){if(e.offsetParent.offsetLeft+e.offsetWidth+o.position.levelX.left+f.offsetWidth>o.viewportwidth&&o.autoposition&&"horizontal/down"==o.type){f.style.left=e.offsetLeft+o.position.levelX.left-f.offsetWidth+"px"}else{f.style.left=e.offsetLeft+e.offsetWidth+o.position.levelX.left+"px"}}else if("vertical/left"==o.type||"horizontal/left"==o.type){if(e.offsetParent.offsetLeft-f.offsetWidth<0&&o.autoposition&&"horizontal/left"==o.type){f.style.left=e.offsetLeft+e.offsetWidth+"px"}else{f.style.left=e.offsetLeft+o.position.levelX.left-f.offsetWidth+"px"}}else if("horizontal/up"==o.type){if(e.offsetParent.offsetTop-f.offsetHeight<0&&o.autoposition){f.style.top=0+"px"}else{f.style.top=e.offsetTop+o.position.levelX.top-f.offsetHeight+"px"}f.style.left=e.offsetLeft+e.offsetWidth+o.position.levelX.left+"px"}}o.sections.push(a[d].id);o.sectionsShowCnt.push(0);o.sectionsHideCnt.push(0);if(o.fixIeSelectBoxBug&&o.browser.ie6){a[d].innerHTML=a[d].innerHTML+'<iframe id="'+a[d].id+'-iframe" class="'+o.iframename+'frame" src="javascript:false" scrolling="no" frameborder="0" style="position: absolute; top: 0px; left: 0px; display: none; "></iframe>'}break}if(a[d].childNodes){if(/\bsection\b/.test(a[d].className)){h(a[d].childNodes,b[b.length-1],c+"-"+(b.length-1))}else{h(a[d].childNodes,b,c)}}}}function g(a,b){for(var c=0;c<a.length;c++){if(a[c].nodeType==1&&/item2/.test(a[c].className)&&a[c].currentStyle){if(o.browser.ie5||o.browser.ie6){a[c].style.width=b+"px"}else{a[c].style.width=b-parseInt(a[c].currentStyle.paddingLeft)-parseInt(a[c].currentStyle.paddingRight)+"px"}}}}function f(a){var b=0;for(var c=0;c<a.length;c++){if(a[c].nodeType!=1||/section/.test(a[c].className)){continue}if(a[c].offsetWidth>b){b=a[c].offsetWidth}}return b}function e(){var a=document.getElementById(o.id).getElementsByTagName("a");for(var b=0;b<a.length;b++){if(/item2/.test(a[b].className)){a[b].innerHTML='<div nowrap="nowrap">'+a[b].innerHTML+"</div>"}}}function d(){var a=document.getElementById(o.id).getElementsByTagName("div");var b=new Array;var c=new Array;for(var d=0;d<a.length;d++){if(a[d].className=="section"){b.push(a[d])}}for(var d=0;d<b.length;d++){c.push(f(b[d].childNodes))}for(var d=0;d<b.length;d++){b[d].style.width=c[d]+"px"}if(o.browser.ie){for(var d=0;d<b.length;d++){g(b[d].childNodes,c[d])}}}var b;var c;if(typeof window.innerWidth!="undefined"){b=window.innerWidth,c=window.innerHeight}else if(typeof document.documentElement!="undefined"&&typeof document.documentElement.clientWidth!="undefined"&&document.documentElement.clientWidth!=0){b=document.documentElement.clientWidth,c=document.documentElement.clientHeight}else{b=document.getElementsByTagName("body")[0].clientWidth,c=document.getElementsByTagName("body")[0].clientHeight}this.viewportwidth=b-19;this.viewportheight=c-19;this.autoposition=false;this.type="horizontal";this.delay={show:0,hide:400};this.position={level1:{top:0,left:0},levelX:{top:0,left:0}};this.iframename=0;this.fixIeSelectBoxBug=false;this.zIndex={visible:500,hidden:-1};this.browser={ie:Boolean(document.body.currentStyle),ie5:navigator.appVersion.indexOf("MSIE 5.5")!=-1||navigator.appVersion.indexOf("MSIE 5.0")!=-1,ie6:navigator.appVersion.indexOf("MSIE 6.0")!=-1,safari:navigator.appVersion.indexOf("safari")!=-1};if(!this.browser.ie){this.browser.ie5=false;this.browser.ie6=false}this.init=function(){if(!document.getElementById(this.id)){return alert("DropDownMenuX.init() failed. Element '"+this.id+"' does not exist.")}if(this.browser.ie&&this.browser.ie5){e()}d();h(document.getElementById(this.id).childNodes,this.tree,this.id);var a=setTimeout(function(a,b){return function(){o.showSection(a,b)}}(o.activesub,0),o.delay.show);o.timers.push(a);var a=setTimeout(function(a,b){return function(){o.showSection(a,b)}}(o.activesub2,0),o.delay.show);o.timers.push(a)};this.showSection=function(a,b){if(typeof b!="undefined"){if(b!=this.sectionsShowCnt[itemInArray(this.sections,a)]){return}}this.sectionsShowCnt[itemInArray(this.sections,a)]++;if(this.visible.length){if(a==lastItemOfArray(this.visible)){return}var c=new m(a);var d=c.getParentSections();for(var e=this.visible.length-1;e>=0;e--){if(stringInArray(d,this.visible[e])){break}else{if(this.visible[e]!=o.activesub&&this.visible[e]!=o.activesub2){this.hideSection(this.visible[e])}}}}var c=new m(a);var f=document.getElementById(c.getParent().id);if(!/item\d-active/.test(f.className)){f.className=f.className.replace(/(item\d)/,"$1-active")}if(document.all){document.getElementById(a).style.display="block"}document.getElementById(a).style.visibility="visible";document.getElementById(a).style.zIndex=this.zIndex.visible;if(this.fixIeSelectBoxBug&&this.browser.ie6){var g=document.getElementById(a);if(g.currentStyle.border==null){g.style.borderLeftWidth=0;g.style.borderRightWidth=0;g.style.borderTopWidth=0;g.style.borderBottomWidth=0}var h=document.getElementById(a+"-iframe");h.style.width=g.offsetWidth+parseInt(g.currentStyle.borderLeftWidth)+parseInt(g.currentStyle.borderRightWidth);h.style.height=g.offsetHeight+parseInt(g.currentStyle.borderTopWidth)+parseInt(g.currentStyle.borderBottomWidth);h.style.top=-parseInt(g.currentStyle.borderTopWidth);h.style.left=-parseInt(g.currentStyle.borderLeftWidth);h.style.zIndex=-1;h.style.display="block"}if(o.effect!="none"){jQuery(document).ready(function(b){document.getElementById(a).style.display="none";if(o.effect=="slide"){if(o.type=="vertical/right"){b("#"+a).animate({width:"toggle",opacity:"toggle"},{duration:o.delay.hide})}else{if(c.getLevel()<3){b("#"+a).slideDown(o.delay.hide)}else{b("#"+a).animate({width:"toggle",opacity:"toggle"},{duration:o.delay.hide})}}}else if(o.effect=="fade"){b("#"+a).fadeIn(o.delay.hide)}})}if(o.effect=="none"){document.getElementById(a).style.display="block"}this.visible.push(a)};this.showItem=function(a,b){if(typeof b!="undefined"){if(b!=this.itemShowCnt){return}}this.itemShowCnt++;if(this.visible.length){var c=new m(a+"-section");var d=c.getParentSections();for(var e=this.visible.length-1;e>=0;e--){if(stringInArray(d,this.visible[e])){break}else{if(this.visible[e]!=o.activesub&&this.visible[e]!=o.activesub2){this.hideSection(this.visible[e])}}}}};this.hideSection=function(a,b){if(typeof b!="undefined"){if(b!=this.sectionsHideCnt[itemInArray(this.sections,a)]){return}if(a==lastItemOfArray(this.visible)){for(var c=this.visible.length-1;c>=0;c--){if(this.visible[c]!=o.activesub&&this.visible[c]!=o.activesub2){this.hideSection(this.visible[c])}}return}}var d=new m(a);var e=document.getElementById(d.getParent().id);if(/item\d-active/.test(e.className)){e.className=e.className.replace(/(item\d)-active/,"$1")}document.getElementById(a).style.visibility="hidden";if(document.all){document.getElementById(a).style.display="none"}if(stringInArray(this.visible,a)){if(a==lastItemOfArray(this.visible)){this.visible.pop()}else{};}else{}this.sectionsHideCnt[itemInArray(this.sections,a)]++};var o=this;this.id=a;this.tree=[];this.sections=[];this.sectionsShowCnt=[];this.sectionsHideCnt=[];this.itemShowCnt=0;this.timers=[];this.visible=[]}