var i=0;
var ie=(document.all)?1:0;
var ns=(document.layers)?1:0;

function initStyleElements()
{
var c = document.pad;
if (ie)
{
//c.text.style.backgroundColor="#DDDDDD";
c.compileIt.style.backgroundColor="#C0C0A8";
c.compileIt.style.cursor="hand";
c.select.style.backgroundColor="#C0C0A8";
c.select.style.cursor="hand";
c.view.style.backgroundColor="#C0C0A8";
c.view.style.cursor="hand";
c.retur.style.backgroundColor="#C0C0A8";
c.retur.style.cursor="hand";
c.clear.style.backgroundColor="#C0C0A8";
c.clear.style.cursor="hand";
}
else return;
}

function LightOn(what)
{
if (ie) what.style.backgroundColor = '#E0E0D0'; 
else return; 
}
function FocusOn(what)
{
if (ie) what.style.backgroundColor = '#EBEBEB';
else return; 
}
function LightOut(what)
{
if (ie) what.style.backgroundColor = '#C0C0A8';
else return; 
}
function FocusOff(what)
{
if (ie) what.style.backgroundColor = '#DDDDDD';
else return;
}

function generate() 
{
code = document.pad.text.value;
if (code)
{
document.pad.text.value='Şifreleniyor...';
setTimeout("compile()",1000);
}
else alert('Şifreleme için html kodlarını girmeniz gerekir.')
}
function compile() 
{
document.pad.text.value='';
compilation=escape(code);
document.pad.text.value="<script>\n<!--\ndocument.write(unescape(\""+compilation+"\"));\n//-->\n<\/script>";
i++;
}
function selectCode()
{
if(document.pad.text.value.length>0)
{
document.pad.text.focus();
document.pad.text.select();
}
else alert('Seçmek için html kodlarını şifrelemeniz gerekir.')
}
function preview()
{
if(document.pad.text.value.length>0)
{
pr=window.open("","Preview","scrollbars=1,menubar=1,status=1,width=700,height=320,left=50,top=110");
pr.document.write(document.pad.text.value);
}
else alert('Önizleme için html kodlarını şifrelemeniz gerekir.')
}
function uncompile()
{
if (document.pad.text.value.length>0)
{
source=unescape(document.pad.text.value);
document.pad.text.value=""+source+"";
}
else alert('Çözmek için html kodlarını şifrelemeniz gerekir.')
}