<?php ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html > 

<style type="text/css"> 
body{ font-size:12px;} 
#ed{ height:300px; width:800px; background-color:#fff } 
.sssss{ background-image:url(http://www.zzsky.cn/build/images/20099493121.gif)} 
.tag{ background-image:url(http://www.zzsky.cn/build/images/20099493121.gif);height:22px; display:inline-table;float:left; ;cursor: pointer; margin-top:8px; margin-left:5px; margin-right:2px; vertical-align:middle; line-height:20px;} 
.span0_hover{background-position:-0px -2px;width:22px} 
.span1_hover{background-position:-30px -2px;width:22px} 
.span2_hover{background-position:-58px -2px;width:22px} 
.span3_hover{background-position:-86px -57px;width:73px} 
.span4_hover{background-position:-86px -28px;width:73px} 
.span5_hover{background-position:-164px -2px;width:22px; background-color:#000000} 
.span6_hover{background-position:-194px -2px;width:22px} 
.span7_hover{background-position:-45px -192px;width:22px} 
.span8_hover{background-position:-76px -192px;width:22px} 
.span9_hover{background-position:-58px -247px;width:22px} 
.span10_hover{background-position:-86px -247px;width:22px} 
.span11_hover{background-position:-113px -247px;width:22px} 
.span12_hover{background-position:-476px -192px;width:22px} 
.span13_hover{background-position:-505px -192px;width:22px} 
.span14_hover{background-position:-333px -247px;width:22px} 
.span15_hover{background-position:-532px -192px;width:22px} 
.span16_hover{background-position:-560px -192px;width:22px} 
.span17_hover{background-position:-455px -247px;width:22px} 
.span18_hover{background-position:-222px -2px;width:73px} 
.span19_hover{background-position:-380px -2px;width:74px} 
.span20_hover{background-position:-460px -2px;width:71px} 
.span0{background-position:-0px -57px;width:22px} 
.span1{background-position:-30px -57px;width:22px} 
.span2{background-position:-58px -57px;width:22px} 
.span3{background-position:-86px -57px;width:73px} 
.span4{background-position:-86px -28px;width:73px} 
.span5{background-position:-164px -57px;width:22px;background-color:#000000} 
.span6{background-position:-194px -57px;width:22px} 
.span7{background-position:-45px -84px;width:22px} 
.span8{background-position:-76px -84px;width:22px} 
.span9{background-position:-58px -140px;width:22px} 
.span10{background-position:-86px -140px;width:22px} 
.span11{background-position:-113px -140px;width:22px} 
.span12{background-position:-476px -84px;width:22px} 
.span13{background-position:-505px -84px;width:22px} 
.span14{background-position:-333px -140px;width:22px} 
.span15{background-position:-532px -84px;width:22px} 
.span16{background-position:-560px -84px;width:22px} 
.span17{background-position:-455px -140px;width:22px} 
.span18{background-position:-222px -57px;width:73px} 
.span19{background-position:-380px -57px;width:74px} 
.span20{background-position:-460px -57px;width:71px} 
.span0_active{background-position:-0px -28px;width:22px} 
.span1_active{background-position:-30px -28px;width:22px} 
.span2_active{background-position:-58px -28px;width:22px} 
.span3_active{background-position:-476px -299px;width:22px} 
.span4_active{background-position:-505px -299px;width:22px} 
.ebody{ height:auto; width:760px; border:1px solid #999999} 
.ebar{ width:100%; height:36px; background-color:#F0F2F5;}; 
.edit{ height:550px; width:100%; border:0px;} 
.popupfont{ width:200px; height:auto; border:1px solid #7B9EBD; background-color:#F7F7F7; position:absolute;padding:3px; } 
a.c1{ width:96%; height:auto; font-size:10px;display:block;border:1px solid #F7F7F7; padding:3px;color:#666666;text-decoration:none;} 
a.c1:hover{width:96%; height:auto; font-size:10px; border:1px solid #FFCF00;display:block;background-color:#F7EBBD;padding:3px;color:#666666;text-decoration:none;} 
a.c2{ width:96%; height:auto; font-size:12px;display:block;border:1px solid #F7F7F7; padding:3px;color:#666666;text-decoration:none;} 
a.c2:hover{width:96%; height:auto; font-size:12px; border:1px solid #FFCF00;display:block;background-color:#F7EBBD;padding:3px;color:#666666;text-decoration:none;} 
a.c3{ width:96%; height:auto; font-size:14px;display:block;border:1px solid #F7F7F7;padding:3px;color:#666666 ;text-decoration:none;} 
a.c3:hover{width:96%; height:auto; font-size:14px; border:1px solid #FFCF00;display:block;background-color:#F7EBBD;padding:3px;color:#666666;text-decoration:none;} 
a.c4{ width:96%; height:auto; font-size:16px;display:block;border:1px solid #F7F7F7;padding:3px; color:#666666;text-decoration:none;} 
a.c4:hover{width:96%; height:auto; font-size:16px; border:1px solid #FFCF00;display:block;background-color:#F7EBBD;padding:3px;color:#666666;text-decoration:none;} 
a.c5{ width:96%; height:auto; font-size:18px;display:block;border:1px solid #F7F7F7;padding:3px; color:#666666;text-decoration:none;} 
a.c5:hover{width:96%; height:auto; font-size:18px; border:1px solid #FFCF00;display:block;background-color:#F7EBBD;padding:3px;color:#666666;text-decoration:none;} 
a.c6{ width:96%; height:auto; font-size:22px;display:block;border:1px solid #F7F7F7; padding:3px;color:#666666;text-decoration:none;} 
a.c6:hover{width:96%; height:auto; font-size:22px; border:1px solid #FFCF00;display:block;background-color:#F7EBBD;padding:3px;color:#666666;text-decoration:none;} 
a.c7{ width:96%; height:auto; font-size:26px;display:block;border:1px solid #F7F7F7; padding:3px;color:#666666;text-decoration:none;} 
a.c7:hover{width:96%; height:auto; font-size:26px; border:1px solid #FFCF00;display:block;background-color:#F7EBBD;padding:3px;color:#666666;text-decoration:none;} 
a.n{ width:96%; height:auto; font-size:14px;display:block;border:1px solid #F7F7F7;padding:3px;color:#666666;text-decoration:none; } 
a.n:hover{width:96%; height:auto; font-size:14px; border:1px solid #FFCF00;display:block;background-color:#F7EBBD;padding:3px;color:#666666;text-decoration:none;} 
.textarea{ border:0px;display:none;} 
.toolbarlayer{position:absolute;opacity:0.7;filter:alpha(opacity:70);background-color:#ffffff;height:36px} 
.bottom{height:30px;width:100%;background-color:#F7F3F7;font-size:12px;} 
.checkbox{margin-top:10px;margin-top/*\**/:6px\9;margin-left:20px;margin-left/*\**/:16px\9;} 
.pp{height:auto; border:1px solid #D3D3D3; position:absolute;z-index:5;} 
.ppt{ 
height:24px; width:100%; background-image:url(http://album.hi.csdn.net/app_uploads/wtcsy/20090726/203207031.p.gif); font-size:12px; font-weight: bold; vertical-align:middle; line-height:24px; 
} 
</style> 
</head> 
<body> 
<div id='ss'></div> 
<div id='sss'></div> 
<script type="text/javascript"> 
var Sys = (function(ua) { 
var s = {}; 
s.IE = ua.match(/msie ([\d.]+)/) ? true: false; 
s.Firefox = ua.match(/firefox\/([\d.]+)/) ? true: false; 
s.Chrome = ua.match(/chrome\/([\d.]+)/) ? true: false; 
s.IE6 = (s.IE && ([/MSIE (\d)\.0/i.exec(navigator.userAgent)][0][1] == 6)) ? true: false; 
s.IE7 = (s.IE && ([/MSIE (\d)\.0/i.exec(navigator.userAgent)][0][1] == 7)) ? true: false; 
s.IE8 = (s.IE && ([/MSIE (\d)\.0/i.exec(navigator.userAgent)][0][1] == 8)) ? true: false; 
return s; 
})(navigator.userAgent.toLowerCase()); 
Sys.IE6 && document.execCommand("BackgroundImageCache", false, true); 
var $ = function(id) { 
return "string" == typeof id ? document.getElementById(id) : id; 
}; 
function Each(list, fun) { 
for (var i = 0, len = list.length; i < len; i++) { 
fun(list[i], i); 
} 
}; 
var Css = function(e, o) { 
if (typeof o == "string") { 
e.style.cssText = o; 
return; 
} 
for (var i in o) 
e.style[i] = o[i]; 
}; 
var Attr = function(e, o) { 
for (var i in o) 
e.setAttribute(i, o[i]); 
}; 
var $$ = function(p, e) { 
return p.getElementsByTagName(e); 
}; 
function create(e, p, fn) { 
var element = document.createElement(e); 
p && p.appendChild(element); 
fn && fn(element); 
return element; 
}; 
function getTarget(e) { 
e = e || window.event; 
return e.srcElement || e.target; 
}; 
function createtab(tri, tdi, arisetab, arisetr, arisetd, p) { 
var table = p ? p.createElement("table") : create("table"); 
arisetab && arisetab(table); 
var tbody = p ? p.createElement("tbody") : create("tbody"); 
for (var i = 0; i < tri; i++) { 
var tr = p ? p.createElement("tr") : create("tr"); 
arisetr && arisetr(i, tr); 
for (var j = 0; j < tdi; j++) { 
var td = p ? p.createElement("td") : create("td"); 
arisetd && arisetd(i, j, td); 
tr.appendChild(td); 
} 
tbody.appendChild(tr); 
} 
table.appendChild(tbody); 
return table; 
}; 
var Extend = function(destination, source) { 
for (var property in source) { 
destination[property] = source[property]; 
} 
}; 
var Bind = function(object, fun) { 
var args = Array.prototype.slice.call(arguments).slice(2); 
return function() { 
return fun.apply(object, args); 
} 
}; 
var BindAsEventListener = function(object, fun, args) { 
var args = Array.prototype.slice.call(arguments).slice(2); 
return function(event) { 
return fun.apply(object, [event || window.event].concat(args)); 
} 
}; 
var CurrentStyle = function(element) { 
return element.currentStyle || document.defaultView.getComputedStyle(element, null); 
}; 
var Getpos = function(o) { 
var x = 0, 
y = 0; 
do { 
x += o.offsetLeft; 
y += o.offsetTop; 
} while (( o = o . offsetParent )); 
return { 
'x': x, 
'y': y 
}; 
}; 
function addListener(element, e, fn) { 
element.addEventListener ? element.addEventListener(e, fn, false) : element.attachEvent("on" + e, fn); 
}; 
function removeListener(element, e, fn) { 
element.removeEventListener ? element.removeEventListener(e, fn, false) : element.detachEvent("on" + e, fn); 
}; 
var Class = function(properties) { 
var _class = function() { 
return (arguments[0] !== null && this.initialize && typeof(this.initialize) == 'function') ? this.initialize.apply(this, arguments) : this; 
}; 
_class.prototype = properties; 
return _class; 
}; 
var Editer = new Class({ 
options: { 
width: 890, 
height: 700, 
facebg: [{ 
bgimg: "-4px -4px", 
title: "微笑", 
wl: 22, 
src: "http://album.hi.csdn.net/app_uploads/wtcsy/20090719/220846596.p.gif" 
}, 
{ 
bgimg: "-31px -4px", 
title: "大笑", 
wl: 22, 
src: "http://album.hi.csdn.net/app_uploads/wtcsy/20090719/220859814.p.gif" 
}, 
{ 
bgimg: "-58px -4px", 

title: "窃笑", 
wl: 22, 
src: "http://album.hi.csdn.net/app_uploads/wtcsy/20090719/220911971.p.gif" 
}, 
{ 
bgimg: "-85px -4px", 
title: "眨眼", 
wl: 22, 
src: "http://album.hi.csdn.net/app_uploads/wtcsy/20090719/220928549.p.gif" 
}, 
{ 
bgimg: "-112px -4px", 
title: "鬼脸", 
wl: 22, 
src: "http://album.hi.csdn.net/app_uploads/wtcsy/20090719/220928549.p.gif" 
}, 
{ 
bgimg: "-139px -4px", 
title: "色色", 
wl: 22, 
src: "http://album.hi.csdn.net/app_uploads/wtcsy/20090719/220951955.p.gif" 
}, 
{ 
bgimg: "-167px -4px", 
title: "暴牙", 
wl: 22, 
src: "http://album.hi.csdn.net/app_uploads/wtcsy/20090719/220958111.p.gif" 
}, 
{ 
bgimg: "-194px -4px", 
title: "讨厌", 
wl: 22, 
src: "http://album.hi.csdn.net/app_uploads/wtcsy/20090719/221004564.p.gif" 
}], 
fontsizedata: { 
fontSize: ["字号1", "字号2", "字号3", "字号4", "字号5", "字号6", "字号7"], 
fontname: ["宋体", "黑体", "楷体", "隶书", "幼圆", "Arial", "Georgia", "Verdana", "Helvetica"] 
}, 
oninit: function() {} 
}, 
initialize: function(container, data, b, options) { 
this.container = container; 
this._body = create("div", container); 
this.toolbar = create("div", this._body); //工具栏 
this.iframe = create("iframe", this._body); //编辑区 
this.textarea = create("textarea", this._body); //显示源代码的框框 
this.bottom = create("div", this._body); //底部 
this.lightbox = b; //lightbox 
this.original = create("input"); //显示源代码的按纽 
this.ed = null; 
this.isfocus = false; 
this.option = {}; 
Extend(this.option, this.options); 
Extend(this.option, options); 
this.rang = null; //选中区 
this.Fpop = null; 
this.option.oninit(); 
this.toolbar.className = "ebar"; 
this._body.className = "ebody"; 
this.textarea.className = "textarea"; 
Css(this._body, { 
width: this.option.width + "px", 
height: this.option.height + "px" 
}); 
Css(this.textarea, { 
width: Sys.IE ? this.option.width - 2 + "px": this.option.width + "px", 
height: Sys.IE ? this.option.height - 66 + "px": this.option.height - 70 + "px" 
}); 
Attr(this.iframe, { 
src: "about:blank", 
width: Sys.IE ? this.option.width: this.option.width - 4, 
height: Sys.IE ? this.option.height - 66 : this.option.height - 70 
}); 
Attr(this.original, { 
type: "checkbox", 
className: "checkbox", 
align: "top" 
}); 
this.bottom.className = "bottom"; 
this.bottom.innerHTML = "<span>显示源代码</span>"; 
this.bottom.insertBefore(this.original, this.bottom.childNodes[0]); 
this.ed = Sys.IE ? this.iframe.contentWindow.document: this.iframe.contentDocument; 
this.ed.open(); 
var div = Sys.IE ? "<div></div>": ""; 
this.ed.write("<html><head><style>body{margin:5px;font-size:16px;word-wrap:break-word}</style></head><body id='my_body'>" + div + "</body></html>"); 
this.ed.close(); 
this.ed.contentEditable = true; 
this.ed.designMode = "on"; //设置编辑区为可编辑 
for (var i = 0, l = data.length; i < l; i++) { 
var o = create("span", this.toolbar); 
Attr(o, { 
title: data[i].title, 
active: false, 
unselectable: "on" 
}); 
o.className = "tag " + data[i].Class; 
addListener(o, "mouseover", Bind(this, this.Changebgcolor, o, data[i].hover)); 
addListener(o, "mouseout", Bind(this, this.Changebgcolor, o, data[i].Class)); 
addListener(o, "click", Bind(this, this[data[i].action], o, data[i].args)); 
} 
//////////////////////////生成工具栏 
addListener(this.iframe.contentWindow, "focus", Bind(this, 
function() { 
this.isfocus = true; 
})); 
addListener(this.iframe.contentWindow, "blur", Bind(this, 
function() { 
this.isfocus = false; 
})); 
addListener(this.ed, 'mousedown', Bind(this, this.Show)); 
addListener(this.ed, 'mouseup', Bind(this, this.Show)); 
//////////////////////////这2个事件是来判断光标所在位置是否别编辑 
addListener(this.original, 'click', Bind(this, this.Showoriginal, this.original)); //显示源代码 
}, 
Changebgcolor: function(o, name, p) { 
if (o.active) return; 
o.className = "tag " + name; 
}, 
Show: function() { 
var spans = $$(this.toolbar, "span"), 
Is; 
var elm = [[spans[0], "Bold", "tag span0_active", "tag span0"], [spans[1], "Italic", "tag span1_active", "tag span1"], [spans[2], "Underline", "tag span2_active", "tag span2"], [spans[12], "InsertUnorderedList", "tag span3_active", "tag span12"], [spans[13], "InsertOrderedList", "tag span4_active", "tag span13"]]; 
for (var i = 0, l = elm.length; i < l; i++) { 
Is = this.ed.queryCommandState(elm[i][1]); 
elm[i][0].className = Is ? elm[i][2] : elm[i][3]; 
elm[i][0].active = Is; 
} 
}, 
Showoriginal: function(o) { 
if (!this.toolbarlayer) { 
this.toolbarlayer = create("div", document.body); 
this.toolbarlayer.className = "toolbarlayer"; 
var pos = Getpos(this.toolbar); 
Css(this.toolbarlayer, { 
width: this.option.width + "px", 
left: pos.x + "px", 
top: pos.y + "px" 
}); 
} 
if (o.checked) { 
this.iframe.style.display = "none"; 
this.textarea.style.display = "block"; 
this.toolbarlayer.style.display = "block"; 
this.textarea.value = this.ed.body.innerHTML; 
} 
else { 
this.iframe.style.display = "block"; 
this.textarea.style.display = "none"; 
this.toolbarlayer.style.display = "none"; 
this.ed.body.innerHTML = this.textarea.value; 
} 
}, 
Exec: function(o, cmd, para) { 
try { 
this.ed.execCommand(cmd, false, para); 
this.Show(); 
} 
catch(err) { 
return; 
} 
}, 
InsertImage: function(o) { 
if (Sys.IE) { ! this.isfocus && this.iframe.contentWindow.focus(); 
this.rang = this.ed.selection.createRange(); 
} 
this.lightbox.Show(); 
this.makebody(this.Imagepopoup, "350px", "插入图片", "InsertImage", "Imagepopoup"); 
}, 
CreateLink: function(o) { 
if (Sys.IE) this.rang = this.ed.selection.createRange(); 
this.lightbox.Show(); 
this.makebody(this.Linkpopoup, "350px", "插入连接", "CreateLink", "Linkpopoup"); 
}, 
Fontcolor: function(o) { 
var self = this; 
if (!this.fontcolorpopup) { 
var color = new popoup({ 
width: "210px", 
title: "颜色选择" 
}); 
this.fontcolorpopup = color.container; 
var pos = Getpos(o); 
Css(color.container, { 
left: pos.x + "px", 
top: pos.y + o.offsetHeight + "px" 
}); 
var bgcolor = ["00", "33", "66", "99", "CC", "FF", "00", "33", "66", "99", "CC", "FF"]; 
$$(color.container, "div")[1].appendChild(createtab(12, 18, 
function(tab) { 
Attr(tab, { 
cellPadding: 0, 
cellSpacing: 1, 
border: 0, 
bgColor: "#333333" 
}); 
}, 
null, 
function(i, j, td) { 
var color = i < 6 ? "#" + bgcolor[Math.floor(j / 6)] + bgcolor[Math.floor(j % 6)] + bgcolor[i] : "#" + bgcolor[Math.floor(j / 6) + 3] + bgcolor[Math.floor(j % 6)] + bgcolor[i - 6]; 
Attr(td, { 
width: 10, 
height: 10, 
unselectable: "on" 
}); 
td.style.backgroundColor = color; 
addListener(td, 'click', Bind(self, self.Execa, color, "fontColor")); 
addListener(td, 'mousedown', BindAsEventListener(self, self.Bubble)); 
})) 
} 
else this.fontcolorpopup.style.display = "block"; 
this.Fpop = Bind(this, this.Hide); 
addListener(this.ed, 'click', this.Fpop); 
addListener(document, 'mousedown', this.Fpop); 
}, 
Expression: function(o) { 
var self = this; 
if (!this.facebgpopup) { 
var expr = new popoup({ 
width: "190px", 
title: "插入表情" 
}); 
this.facebgpopup = expr.container; 
var pos = Getpos(o); 
Css(expr.container, { 
left: pos.x + "px", 
top: pos.y + o.offsetHeight + "px" 
}); 
$$(expr.container, "div")[1].appendChild(createtab(1, this.option.facebg.length, 
function(tab) { 
Attr(tab, { 
cellPadding: 0, 
cellSpacing: 1, 
border: 0, 
bgColor: "#FFFFFF" 
}); 
}, 
null, 
function(i, j, td) { 
Css(td, { 
backgroundImage: "url(http://album.hi.csdn.net/app_uploads/wtcsy/20090719/220510752.p.gif)", 
backgroundPosition: self.option.facebg[j].bgimg 
}); 
Attr(td, { 
width: self.option.facebg[i].wl, 
height: self.option.facebg[i].wl, 
unselectable: "on" 
}); 
addListener(td, 'click', Bind(self, self.Execa, self.option.facebg[j].src, "Expression")); 
addListener(td, 'mousedown', BindAsEventListener(self, self.Bubble)) 
})); 
} 
else this.facebgpopup.style.display = "block"; 
this.Fpop = Bind(this, this.Hide); 
addListener(this.ed, 'click', this.Fpop); 
addListener(document, 'mousedown', this.Fpop); 
}, 
Layout: function() { 
var child = this.ed.body.childNodes; 
for (var i = 0, l = child.length; i < l; i++) { 
if (child[i].nodeName == "DIV" || child[i].nodeName == "P") child[i].style.textIndent = child[i].style.textIndent == "2em" ? "": "2em"; 
} 
}, 
Fontsize: function(o) { 
if (!this.fontsizepopup) { 
var size = new popoup({ 
width: "210px", 
title: "字号" 
}), 
a; 
this.fontsizepopup = size.container; 
var pos = Getpos(o); 
Css(size.container, { 
left: pos.x + "px", 
top: pos.y + o.offsetHeight + "px" 
}); 
for (var i = 0, l = this.option.fontsizedata.fontSize.length; i < l; i++) { 
a = create("a", $$(size.container, "div")[1]); 
a.className = "c" + (i + 1); 
a.setAttribute("href", "javascript:void(0);") 
a.innerHTML = this.option.fontsizedata.fontSize[i]; 
addListener(a, "click", Bind(this, this.Execa, i, "fontSize")); 
addListener(a, 'mousedown', BindAsEventListener(this, this.Bubble)); 
} 
} else this.fontsizepopup.style.display = "block"; 
this.Fpop = Bind(this, this.Hide); 
addListener(this.ed, 'click', this.Fpop); 
addListener(document, 'mousedown', this.Fpop); 
}, 
FontName: function(o) { 
if (!this.fontnamepopup) { 
var name = new popoup({ 
width: "200px", 
title: "字体" 
}), 
a; 
this.fontnamepopup = name.container; 
var pos = Getpos(o); 
Css(name.container, { 
left: pos.x + "px", 
top: pos.y + o.offsetHeight + "px" 
}); 
for (var i = 0, l = this.option.fontsizedata.fontname.length; i < l; i++) { 
a = create("a", $$(name.container, "div")[1]); 
a.className = "n"; 
a.setAttribute("href", "javascript:void(0);"); 
a.innerHTML = this.option.fontsizedata.fontname[i]; 
addListener(a, "click", Bind(this, this.Execa, this.option.fontsizedata.fontname[i], "fontname")); 
addListener(a, 'mousedown', BindAsEventListener(this, this.Bubble)); 
} 
} else this.fontnamepopup.style.display = "block"; 
this.Fpop = Bind(this, this.Hide); 
addListener(this.ed, 'click', this.Fpop); 
addListener(document, 'mousedown', this.Fpop); 
}, 
makebody: function(o, w, t, f, n) { 
if (!o) { 
var self = this; 
this[n] = new popoup({ 
width: w, 
title: t 
}); 
this[n].pos(); 
$$(this[n].container, "div")[1].innerHTML = "<div style=' margin-top:6px; margin-left:10px'><span >连接地址</span>　<input style='width:200px;' type='text' /></div><div style='text-align:center; padding-top:15px;'><img src='http://album.hi.csdn.net/app_uploads/wtcsy/20090719/220836549.p.gif'>　<img src='http://album.hi.csdn.net/app_uploads/wtcsy/20090719/220726721.p.gif'></div>" 
this[n].elm = [$$(this[n].container, "input")[0], $$(this[n].container, "img")[0], $$(this[n].container, "img")[1]]; 
this[n].elm[0].focus() 
addListener(this[n].elm[1], 'click', Bind(this, this.Execa, null, f)); 
addListener(this[n].elm[2], 'click', 
function() { 
self.lightbox.Close(); 
self[n].Close(); 
}); 
} 
else with(this[n]) { 
pos(); 
Show(); 
elm[0].value = ""; 
elm[0].focus(); 
} 
}, 
Addtable: function() { 
if (Sys.IE) { ! this.isfocus && this.iframe.contentWindow.focus(); 
this.rang = this.ed.selection.createRange(); 
} 
this.lightbox.Show(); 
if (Sys.IE) this.rang = this.ed.selection.createRange(); 
if (!this.tablepopup) { 
var self = this; 
this.tablepopup = new popoup({ 
width: "300px", 
title: "插入表格" 
}); 
this.tablepopup.pos(); 
$$(this.tablepopup.container, "div")[1].innerHTML = "<div style='margin-left:30px; margin-top:7px;'>行数：<input style='width:50px; height:13px' type='text' />　列数：<input style='width:50px;height:13px' type='text' /></div><div style=' margin-left:30px; margin-top:7px;'>表格的宽度：<input style='width:50px; height:13px' type='text' /> px</div><div style=' margin-left:30px; margin-top:7px;'>表行的高度：<input style='width:50px; height:13px' type='text' /> px<div style='text-align:center; margin-left:30px; margin-top:7px;'><img src='http://album.hi.csdn.net/app_uploads/wtcsy/20090719/220836549.p.gif'>　<img src='http://album.hi.csdn.net/app_uploads/wtcsy/20090719/220726721.p.gif'></div>" 
var o = $$(this.tablepopup.container, "input"); 
this.tablepopup.elm = [o[0], o[1], o[2], o[3], $$(this.tablepopup.container, "img")[0], $$(this.tablepopup.container, "img")[1]]; 
addListener(this.tablepopup.elm[4], 'click', Bind(this, this.Execa, null, "CreateTable")); 
addListener(this.tablepopup.elm[5], 'click', 
function() { 
self.lightbox.Close(); 
self.tablepopup.Close(); 
}); 
} 
else with(this.tablepopup) { 
pos(); 
Show(); 
elm[0].focus(); 
} 
this.Fpop = Bind(this, this.Hide); 
addListener(this.ed, 'click', this.Fpop); 
addListener(document, 'mousedown', this.Fpop); 
}, 
Hide: function(o) { 
this.facebgpopup && (this.facebgpopup.style.display = "none"); 
this.fontsizepopup && (this.fontsizepopup.style.display = "none"); 
this.fontnamepopup && (this.fontnamepopup.style.display = "none"); 
this.fontcolorpopup && (this.fontcolorpopup.style.display = "none"); 
removeListener(this.ed, 'click', this.Fpop); 
removeListener(document, 'mousedown', this.Fpop); 
}, 
Bubble: function(e) { 
if (Sys.IE) { 
e.cancelBubble = true 
} else { 
e.stopPropagation() 
} 
}, 
Execa: function(num, stamp) { 
var exec = { 
fontname: function() { 
this.fontnamepopup.style.display = "none"; 
this.ed.execCommand('FontName', false, num); 
}, 
fontSize: function() { 
this.fontsizepopup.style.display = "none"; 
this.ed.execCommand("FontSize", false, num + 1) 
}, 
fontColor: function() { 
this.fontcolorpopup.style.display = "none"; 
this.ed.execCommand("ForeColor", false, num); 
}, 
CreateLink: function() { 
this.lightbox.Close(); 
this.Linkpopoup.Close(); 
if (this.Linkpopoup.elm[0].value == "") return; 
if (Sys.IE) { 
this.rang.execCommand("CreateLink", false, this.Linkpopoup.elm[0].value); 
this.rang.parentElement().target = "_blank "; 
} 
else { 
this.ed.execCommand("CreateLink", false, this.Linkpopoup.elm[0].value); 
this.rang = this.iframe.contentWindow.getSelection().getRangeAt(0); 
this.rang.commonAncestorContainer.parentNode.target = "_blank "; 
} 
}, 
InsertImage: function() { 
this.lightbox.Close(); 
this.Imagepopoup.Close(); 
if (this.Imagepopoup.elm[0].value == "") return; 
Sys.IE ? this.rang.execCommand("InsertImage", false, this.Imagepopoup.elm[0].value) : this.ed.execCommand("InsertImage", false, this.Imagepopoup.elm[0].value); 
}, 
Expression: function() { 
this.facebgpopup.style.display = "none"; 
Sys.IE && (this.iframe.contentWindow.focus()); 
this.ed.execCommand("InsertImage", false, num); 
}, 
CreateTable: function() { 
this.lightbox.Close(); 
this.tablepopup.Close(); 
var o = this.tablepopup.elm, 
p = null; 
if (Sys.IE) { 
this.rang.execCommand("InsertImage", false, "http://xxx.com/xxxxx.gif"); 
p = this.rang.parentElement(); 
} 
else { 
this.ed.execCommand("InsertImage", false, "http://xxx.com/xxxxx.gif"); 
p = this.iframe.contentWindow.getSelection().getRangeAt(0).commonAncestorContainer; 
} 
var tab = createtab(o[0].value, o[1].value, 
function(tab) { 
Attr(tab, { 
cellPadding: 0, 
cellSpacing: 1, 
border: 0, 
bgColor: "#CCCCCC", 
width: o[2].value 
}); 
}, 
null, 
function(i, j, td) { 
td.height = o[3].value; 
td.width = o[2].value / o[1].value; 
td.style.backgroundColor = "#FFFFFF" 
}, 
this.ed); 
var imgs = p.getElementsByTagName("img"); 
for (var i = 0, l = p.childNodes.length; i < l; i++) { 
if (imgs[i].src == "http://xxx.com/xxxxx.gif") { 
p.replaceChild(tab, imgs[i]) 
} 
} 
p.insertBefore(this.ed.createElement("br"), tab.nextSibling); 
} 
}; 
Bind(this, exec[stamp])(); 
} 
}); 
var popoup = new Class({ 
options: { 
width: "200px", 
title: "标题" 
}, 
initialize: function(options) { 
this.container = create("div", document.body); 
Extend(this.options, options); 
this.title = this.options.title; 
this.container.className = "pp"; 
this.container.style.width = this.options.width; 
this.container.innerHTML = "<div class='ppt'><span style='margin-left:8px;'></span></div><div style='height:auto; width:auto; padding:7px; background-color:#FFFFFF'></div>"; 
this.w = this.container.offsetWidth; 
this.h = this.container.offsetHeight; 
$$(this.container, "span")[0].innerHTML = this.title; 
}, 
pos: function() { 
var str = "left:" + (Math.max(document.documentElement.scrollWidth, document.documentElement.clientWidth) - this.w) / 2 + "px;top:" + ((Math.min(document.documentElement.scrollHeight, document.documentElement.clientHeight) - this.h) / 2 + document.documentElement.scrollTop) + "px" 
Css(this.container, str); 
}, 
Show: function() { 
this.container.style.display = ""; 
}, 
Close: function() { 
this.container.style.display = "none"; 
} 
}) 
var LightBox = { 
obj: null, 
config: { 
Color: "#fff", 
Opacity: 80, 
zIndex: 5 
}, 
init: function(options) { 
Extend(this.config, options || {}); 
Extend(this, this.config); 
delete this.config; 
this.obj = document.body.insertBefore(document.createElement("div"), document.body.childNodes[0]); 
var str = "display:none; z-index:" + this.zIndex + ";left:0px;top:0px;position:fixed;width:100%;height:100%;background-color:" + this.Color + (Sys.IE ? ";filter : alpha(opacity:" + this.Opacity + ")": ";opacity :" + this.Opacity / 100); 
Css(this.obj, str); 
if (Sys.IE6) { 
this.obj.style.position = "absolute"; 
var _self = this; 
this._resize = function() { 
_self.obj.style.width = Math.max(document.documentElement.scrollWidth, document.documentElement.clientWidth) + "px"; 
_self.obj.style.height = Math.max(document.documentElement.scrollHeight, document.documentElement.clientHeight) + "px"; 
}; 
this.obj.innerHTML = '<iframe style="position:absolute;top:0;left:0;width:100%;height:100%;filter:alpha(opacity=0);"></iframe>'; 
} 
return this; 
}, 
Show: function() { 
if (Sys.IE6) { 
this._resize(); 
addListener(window, "resize", this._resize); 
} 
this.obj.style.display = "block"; 
}, 
Close: function() { 
this.obj.style.display = "none"; 
if (Sys.IE6) removeListener(window, "resize", LightBox._resize); 
} 
} 
window.onload = function() { 
var data = [{ 
Class: "span0", 
hover: "span0_hover", 
title: "加粗", 
action: "Exec", 
args: "bold" 
}, 
{ 
Class: "span1", 
hover: "span1_hover", 
title: "斜体", 
action: "Exec", 
args: "Italic" 
}, 
{ 
Class: "span2", 
hover: "span2_hover", 
title: "下划线", 
action: "Exec", 
args: "Underline" 
}, 
{ 
Class: "span3", 
hover: "span3_hover", 
title: "字号", 
action: "Fontsize", 
args: null 
}, 
{ 
Class: "span4", 
hover: "span4_hover", 
title: "字体", 
action: "FontName", 
args: null 
}, 
{ 
Class: "span5", 
hover: "span5_hover", 
title: "文字颜色", 
action: "Fontcolor", 
args: null 
}, 
{ 
Class: "span6", 
hover: "span6_hover", 
title: "插入链接", 
action: "CreateLink", 
args: null 
}, 
{ 
Class: "span7", 
hover: "span7_hover", 
title: "剪贴", 
action: "Exec", 
args: "Cut" 
}, 
{ 
Class: "span8", 
hover: "span8_hover", 
title: "复制", 
action: "Exec", 
args: "Copy" 
}, 
{ 
Class: "span9", 
hover: "span9_hover", 
title: "左对齐", 
action: "Exec", 
args: "JustifyLeft" 
}, 
{ 
Class: "span10", 
hover: "span10_hover", 
title: "居中对齐", 
action: "Exec", 
args: "JustifyCenter" 
}, 
{ 
Class: "span11", 
hover: "span11_hover", 
title: "右对齐", 
action: "Exec", 
args: "JustifyRight" 
}, 
{ 
Class: "span12", 
hover: "span12_hover", 
title: "项目符号", 
action: "Exec", 
args: "InsertUnorderedList" 
}, 
{ 
Class: "span13", 
hover: "span13_hover", 
title: "编号", 
action: "Exec", 
args: "InsertOrderedList" 
}, 
{ 
Class: "span14", 
hover: "span14_hover", 
title: "插入表格", 
action: "Addtable", 
args: null 
}, 
{ 
Class: "span15", 
hover: "span15_hover", 
title: "减少缩进", 
action: "Exec", 
args: "Outdent" 
}, 
{ 
Class: "span16", 
hover: "span16_hover", 
title: "增加缩进", 
action: "Exec", 
args: "Indent" 
}, 
{ 
Class: "span17", 
hover: "span17_hover", 
title: "清除样式", 
action: "Exec", 
args: "RemoveFormat" 
}, 
{ 
Class: "span18", 
hover: "span18_hover", 
title: "插入图片", 
action: "InsertImage", 
args: null 
}, 
{ 
Class: "span19", 
hover: "span19_hover", 
title: "插入表情", 
action: "Expression", 
args: null 
}, 
{ 
Class: "span20", 
hover: "span20_hover", 
title: "自动排版", 
action: "Layout", 
args: null 
}]; 
new Editer($('ss'), data, LightBox.init()); 
} 
</script> 
</body >
</html>
